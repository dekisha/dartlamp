<?php

namespace Drupal\Tests\image_effects\Functional;

use Drupal\Core\Database\Database;
use Drupal\Core\Image\ImageInterface;
use Drupal\Tests\BrowserTestBase;
use Drupal\image\Entity\ImageStyle;

/**
 * Base test class for image_effects tests.
 */
abstract class ImageEffectsTestBase extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = [
    'image',
    'image_effects',
    'simpletest',
    'imagemagick',
  ];

  /**
   * Test image style.
   *
   * @var \Drupal\image\Entity\ImageStyle
   */
  protected $testImageStyle;

  /**
   * Test image style name.
   *
   * @var string
   */
  protected $testImageStyleName = 'image_effects_test';

  /**
   * Test image style label.
   *
   * @var string
   */
  protected $testImageStyleLabel = 'Image Effects Test';

  /**
   * Image factory.
   *
   * @var \Drupal\Core\Image\ImageFactory
   */
  protected $imageFactory;

  // Colors that are used in testing.
  // @codingStandardsIgnoreStart
  protected $black       = [  0,   0,   0,   0];
  protected $red         = [255,   0,   0,   0];
  protected $green       = [  0, 255,   0,   0];
  protected $blue        = [  0,   0, 255,   0];
  protected $yellow      = [255, 255,   0,   0];
  protected $fuchsia     = [255,   0, 255,   0];
  protected $cyan        = [  0, 255, 255,   0];
  protected $white       = [255, 255, 255,   0];
  protected $grey        = [128, 128, 128,   0];
  protected $transparent = [  0,   0,   0, 127];
  // @codingStandardsIgnoreEnd

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    // Set the image factory.
    $this->imageFactory = $this->container->get('image.factory');

    // Create a user and log it in.
    $this->adminUser = $this->drupalCreateUser([
      'administer site configuration',
      'administer image styles',
    ]);
    $this->drupalLogin($this->adminUser);

    // Create the test image style.
    $this->testImageStyle = ImageStyle::create([
      'name' => $this->testImageStyleName,
      'label' => $this->testImageStyleLabel,
    ]);
    $this->assertEqual(SAVED_NEW, $this->testImageStyle->save());
  }

  /**
   * Add an image effect to the image test style.
   *
   * Uses the image effect configuration forms, and not API directly, to ensure
   * forms work correctly.
   *
   * @param array $effect
   *   An array of effect data, with following keys:
   *   - id: the image effect plugin
   *   - data: an array of fields for the image effect edit form, with
   *     their values.
   *
   * @return string
   *   The UUID of the newly added effect.
   */
  protected function addEffectToTestStyle(array $effect) {
    // Get image style prior to adding the new effect.
    $image_style_pre = ImageStyle::load($this->testImageStyleName);

    // Add the effect.
    $this->drupalPostForm('admin/config/media/image-styles/manage/' . $this->testImageStyleName, ['new' => $effect['id']], t('Add'));
    if (!empty($effect['data'])) {
      $effect_edit = [];
      foreach ($effect['data'] as $field => $value) {
        $effect_edit['data[' . $field . ']'] = $value;
      }
      $this->drupalPostForm(NULL, $effect_edit, t('Add effect'));
    }

    // Get UUID of newly added effect.
    $this->testImageStyle = ImageStyle::load($this->testImageStyleName);
    foreach ($this->testImageStyle->getEffects() as $uuid => $effect) {
      if (!$image_style_pre->getEffects()->has($uuid)) {
        return $uuid;
      }
    }
    return NULL;
  }

  /**
   * Remove an image effect from the image test style.
   *
   * @param string $uuid
   *   The UUID of the effect to remove.
   */
  protected function removeEffectFromTestStyle($uuid) {
    $effect = $this->testImageStyle->getEffect($uuid);
    $this->testImageStyle->deleteImageEffect($effect);
    $this->assertEqual(SAVED_UPDATED, $this->testImageStyle->save());
  }

  /**
   * Render an image style element.
   *
   * The ::renderRoot method alters the passed $variables array by adding a new
   * key '#printed' => TRUE. This prevents next call to re-render the element.
   * We wrap ::renderRoot() in a helper protected method and pass each time a
   * fresh array so that $variables won't get altered and the element is
   * re-rendered each time.
   */
  protected function getImageTag($variables) {
    return str_replace("\n", NULL, \Drupal::service('renderer')->renderRoot($variables));
  }

  /**
   * Provides toolkit data for testing.
   *
   * @return array[]
   *   An associative array, with key the toolkit scenario to be tested, and
   *   value an associative array with the following keys:
   *   - 'toolkit_id': the toolkit to be used in the test.
   *   - 'toolkit_config': the config object of the toolkit.
   *   - 'toolkit_settings': an associative array of toolkit settings.
   */
  public function providerToolkits() {
    return [
      'GD' => [
        'toolkit_id' => 'gd',
        'toolkit_config' => 'system.image.gd',
        'toolkit_settings' => [
          'jpeg_quality' => 100,
        ],
      ],
      'ImageMagick-imagemagick' => [
        'toolkit_id' => 'imagemagick',
        'toolkit_config' => 'imagemagick.settings',
        'toolkit_settings' => [
          'binaries' => 'imagemagick',
          'quality' => 100,
          'debug' => TRUE,
        ],
      ],
      'ImageMagick-graphicsmagick' => [
        'toolkit_id' => 'imagemagick',
        'toolkit_config' => 'imagemagick.settings',
        'toolkit_settings' => [
          'binaries' => 'graphicsmagick',
          'quality' => 100,
          'debug' => TRUE,
        ],
      ],
    ];
  }

  /**
   * Change toolkit.
   *
   * @param string $toolkit_id
   *   The id of the toolkit to set up.
   * @param string $toolkit_config
   *   The config object of the toolkit to set up.
   * @param array $toolkit_settings
   *   The settings of the toolkit to set up.
   */
  protected function changeToolkit($toolkit_id, $toolkit_config, array $toolkit_settings) {
    \Drupal::configFactory()->getEditable('system.image')
      ->set('toolkit', $toolkit_id)
      ->save();
    $config = \Drupal::configFactory()->getEditable($toolkit_config);
    foreach ($toolkit_settings as $setting => $value) {
      $config->set($setting, $value);
    }
    $config->save();

    // Bots running automated test on d.o. do not have ImageMagick or
    // GraphicsMagick binaries installed, so the test will be skipped; they can
    // be run locally if binaries are installed.
    if ($toolkit_id === 'imagemagick') {
      $status = \Drupal::service('image.toolkit.manager')->createInstance('imagemagick')->checkPath('');
      if (!empty($status['errors'])) {
        $this->markTestSkipped("Tests for '{$toolkit_settings['binaries']}' cannot run because the binaries are not available on the shell path.");
      }
    }

    $this->container->get('image.factory')->setToolkitId($toolkit_id);
  }

  /**
   * Get the URI of the test image file copied to a safe location.
   *
   * @param string $path
   *   The path to the test image file.
   * @param string $name
   *   (optional) The name of the item for which the path is requested.
   *   Ignored for $type 'core'. If null, $path is returned. Defaults
   *   to null.
   * @param string $type
   *   (optional) The type of the item; one of 'core', 'profile', 'module',
   *   'theme', or 'theme_engine'. Defaults to 'module'.
   */
  protected function getTestImageCopyUri($path, $name = NULL, $type = 'module') {
    $test_directory = 'public://test-images/';
    file_prepare_directory($test_directory, FILE_CREATE_DIRECTORY);
    $source_uri = $name ? drupal_get_path($type, $name) : '';
    $source_uri .= $path;
    $target_uri = $test_directory . \Drupal::service('file_system')->basename($source_uri);
    return file_unmanaged_copy($source_uri, $target_uri, FILE_EXISTS_REPLACE);
  }

  /**
   * Assert two colors are equal by RGBA.
   */
  public function assertColorsAreEqual(array $actual, array $expected) {
    $this->assertColorsAreClose($actual, $expected, 0);
  }

  /**
   * Assert two colors are not equal by RGBA.
   */
  public function assertColorsAreNotEqual(array $actual, array $expected) {
    // Fully transparent colors are equal, regardless of RGB.
    if ($expected[3] == 127) {
      $this->assertNotEquals(127, $actual[3]);
      return;
    }
    $this->assertColorsAreNotClose($actual, $expected, 0);
  }

  /**
   * Assert two colors are close by RGBA within a tolerance.
   *
   * Very basic, just compares the sum of the squared differences for each of
   * the R, G, B, A components of two colors against a 'tolerance' value.
   *
   * @param int[] $actual
   *   The actual RGBA array.
   * @param int[] $expected
   *   The expected RGBA array.
   * @param int $tolerance
   *   The acceptable difference between the colors.
   */
  public function assertColorsAreClose(array $actual, array $expected, $tolerance) {
    // Fully transparent colors are equal, regardless of RGB.
    if ($actual[3] == 127 && $expected[3] == 127) {
      return;
    }
    $distance = pow(($actual[0] - $expected[0]), 2) + pow(($actual[1] - $expected[1]), 2) + pow(($actual[2] - $expected[2]), 2) + pow(($actual[3] - $expected[3]), 2);
    $this->assertLessThanOrEqual($tolerance, $distance, "Actual: {" . implode(',', $actual) . "}, Expected: {" . implode(',', $expected) . "}, Distance: " . $distance . ", Tolerance: " . $tolerance);
  }

  /**
   * Asserts two colors are *not* close by RGBA within a tolerance.
   *
   * Very basic, just compares the sum of the squared differences for each of
   * the R, G, B, A components of two colors against a 'tolerance' value.
   *
   * @param int[] $actual
   *   The actual RGBA array.
   * @param int[] $expected
   *   The expected RGBA array.
   * @param int $tolerance
   *   The acceptable difference between the colors.
   */
  public function assertColorsAreNotClose(array $actual, array $expected, $tolerance) {
    $distance = pow(($actual[0] - $expected[0]), 2) + pow(($actual[1] - $expected[1]), 2) + pow(($actual[2] - $expected[2]), 2) + pow(($actual[3] - $expected[3]), 2);
    $this->assertGreaterThan($tolerance, $distance, "Actual: {" . implode(',', $actual) . "}, Expected: {" . implode(',', $expected) . "}, Distance: " . $distance . ", Tolerance: " . $tolerance);
  }

  /**
   * Function for finding a pixel's RGBa values.
   */
  protected function getPixelColor(ImageInterface $image, $x, $y) {
    $toolkit = $image->getToolkit();
    $color_index = imagecolorat($toolkit->getResource(), $x, $y);

    $transparent_index = imagecolortransparent($toolkit->getResource());
    if ($color_index == $transparent_index) {
      return [0, 0, 0, 127];
    }

    return array_values(imagecolorsforindex($toolkit->getResource(), $color_index));
  }

  /**
   * Gets the current cache tag invalidations of an image style.
   *
   * @param string $image_style_name
   *   The image style name.
   *
   * @return int
   *   The invalidations value.
   */
  protected function getImageStyleCacheTagInvalidations($image_style_name) {
    $query = Database::getConnection()->select('cachetags', 'a');
    $query->addField('a', 'invalidations');
    $query->condition('tag', 'config:image.style.' . $image_style_name);
    return (int) $query->execute()->fetchColumn();
  }

  /**
   * Asserts a Text overlay image.
   */
  protected function assertTextOverlay($image, $width, $height) {
    $w_error = abs($image->getWidth() - $width);
    $h_error = abs($image->getHeight() - $height);
    $tolerance = 0.1;
    $this->assertTrue($w_error < $width * $tolerance && $h_error < $height * $tolerance, "Width and height ({$image->getWidth()}x{$image->getHeight()}) approximate expected results ({$width}x{$height})");
  }

}

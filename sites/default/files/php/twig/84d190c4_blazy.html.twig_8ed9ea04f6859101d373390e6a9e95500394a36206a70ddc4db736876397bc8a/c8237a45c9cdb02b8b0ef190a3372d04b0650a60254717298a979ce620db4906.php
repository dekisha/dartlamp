<?php

/* modules/blazy/templates/blazy.html.twig */
class __TwigTemplate_e0b008401f8a2deef569d9b8d259ea85f078a609ea7778e50af291ecc87e0a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'blazy_player' => array($this, 'block_blazy_player'),
            'blazy_media' => array($this, 'block_blazy_media'),
            'blazy_content' => array($this, 'block_blazy_content'),
            'blazy_caption' => array($this, 'block_blazy_caption'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 27, "if" => 46, "block" => 47, "for" => 89);
        $filters = array("clean_class" => 31);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block', 'for'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 27
        $context["classes"] = array(0 => "media", 1 => (($this->getAttribute(        // line 29
(isset($context["settings"]) ? $context["settings"] : null), "namespace", array())) ? (("media--" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "namespace", array()))) : ("")), 2 => (($this->getAttribute(        // line 30
(isset($context["settings"]) ? $context["settings"] : null), "lazy", array())) ? ("media--loading") : ("")), 3 => (($this->getAttribute(        // line 31
(isset($context["settings"]) ? $context["settings"] : null), "media_switch", array())) ? (("media--switch media--switch--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "media_switch", array())))) : ("")), 4 => (($this->getAttribute(        // line 32
(isset($context["settings"]) ? $context["settings"] : null), "player", array())) ? ("media--player") : ("")), 5 => (($this->getAttribute(        // line 33
(isset($context["settings"]) ? $context["settings"] : null), "ratio", array())) ? (("media--ratio media--ratio--" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "ratio", array()))) : ("")), 6 => (($this->getAttribute(        // line 34
(isset($context["settings"]) ? $context["settings"] : null), "responsive_image_style_id", array())) ? ("media--responsive") : ("")), 7 => (($this->getAttribute(        // line 35
(isset($context["settings"]) ? $context["settings"] : null), "type", array())) ? (("media--" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "type", array()))) : ("")));
        // line 39
        $context["iframe_classes"] = array(0 => "media__iframe", 1 => (($this->getAttribute(        // line 41
(isset($context["settings"]) ? $context["settings"] : null), "ratio", array())) ? ("media__element") : ("")));
        // line 44
        echo "
";
        // line 45
        ob_start();
        // line 46
        echo "  ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "player", array())) {
            // line 47
            echo "    ";
            $this->displayBlock('blazy_player', $context, $blocks);
            // line 54
            echo "  ";
        }
        $context["player"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
";
        // line 57
        ob_start();
        // line 58
        echo "  ";
        $this->displayBlock('blazy_media', $context, $blocks);
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        echo "
";
        // line 67
        ob_start();
        // line 68
        echo "  ";
        $this->displayBlock('blazy_content', $context, $blocks);
        // line 85
        echo "
  ";
        // line 86
        if (((isset($context["captions"]) ? $context["captions"] : null) && $this->getAttribute((isset($context["captions"]) ? $context["captions"] : null), "inline", array(), "any", true, true))) {
            // line 87
            echo "    ";
            $this->displayBlock('blazy_caption', $context, $blocks);
            // line 96
            echo "  ";
        }
        $context["blazy"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 98
        echo "
";
        // line 99
        if ((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null)) {
            // line 100
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "html", null, true));
            echo ">
    ";
            // line 101
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["blazy"]) ? $context["blazy"] : null), "html", null, true));
            echo "
  </div>
";
        } else {
            // line 104
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["blazy"]) ? $context["blazy"] : null), "html", null, true));
            echo "
";
        }
    }

    // line 47
    public function block_blazy_player($context, array $blocks = array())
    {
        // line 48
        echo "      <iframe";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["iframe_attributes"]) ? $context["iframe_attributes"] : null), "addClass", array(0 => (isset($context["iframe_classes"]) ? $context["iframe_classes"] : null)), "method"), "html", null, true));
        echo " allowfullscreen></iframe>
      ";
        // line 49
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "media_switch", array())) {
            // line 50
            echo "        <span class=\"media__icon media__icon--close\"></span>
        <span class=\"media__icon media__icon--play\" data-url=\"";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "autoplay_url", array()), "html", null, true));
            echo "\"></span>
      ";
        }
        // line 53
        echo "    ";
    }

    // line 58
    public function block_blazy_media($context, array $blocks = array())
    {
        // line 59
        echo "    <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
      ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo "
      ";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["player"]) ? $context["player"] : null), "html", null, true));
        echo "
      ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", array()), "html", null, true));
        echo "
    </div>
  ";
    }

    // line 68
    public function block_blazy_content($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        if ((isset($context["media_attributes"]) ? $context["media_attributes"] : null)) {
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["media_attributes"]) ? $context["media_attributes"] : null), "html", null, true));
            echo ">";
        }
        // line 70
        echo "      ";
        if (((isset($context["url"]) ? $context["url"] : null) &&  !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "player", array()))) {
            // line 71
            echo "        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url_attributes"]) ? $context["url_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["media"]) ? $context["media"] : null), "html", null, true));
            echo "</a>

        ";
            // line 74
            echo "        ";
            if (((isset($context["captions"]) ? $context["captions"] : null) &&  !twig_test_empty($this->getAttribute((isset($context["captions"]) ? $context["captions"] : null), "lightbox", array())))) {
                // line 75
                echo "          <div class=\"litebox-caption visually-hidden\">";
                // line 76
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["captions"]) ? $context["captions"] : null), "lightbox", array()), "html", null, true));
                // line 77
                echo "</div>
        ";
            }
            // line 79
            echo "
      ";
        } else {
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["media"]) ? $context["media"] : null), "html", null, true));
        }
        // line 83
        echo "    ";
        if ((isset($context["media_attributes"]) ? $context["media_attributes"] : null)) {
            echo "</div>";
        }
        // line 84
        echo "  ";
    }

    // line 87
    public function block_blazy_caption($context, array $blocks = array())
    {
        // line 88
        echo "      <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption_attributes"]) ? $context["caption_attributes"] : null), "html", null, true));
        echo ">
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["captions"]) ? $context["captions"] : null), "inline", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
            // line 90
            echo "          ";
            if ($this->getAttribute($context["caption"], "content", array())) {
                // line 91
                echo "            <";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["caption"], "tag", array()), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["caption"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["caption"], "content", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["caption"], "tag", array()), "html", null, true));
                echo ">
          ";
            }
            // line 93
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/blazy/templates/blazy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 94,  249 => 93,  237 => 91,  234 => 90,  230 => 89,  225 => 88,  222 => 87,  218 => 84,  213 => 83,  210 => 81,  206 => 79,  202 => 77,  200 => 76,  198 => 75,  195 => 74,  185 => 71,  182 => 70,  175 => 69,  172 => 68,  165 => 62,  161 => 61,  157 => 60,  152 => 59,  149 => 58,  145 => 53,  140 => 51,  137 => 50,  135 => 49,  130 => 48,  127 => 47,  119 => 104,  113 => 101,  108 => 100,  106 => 99,  103 => 98,  99 => 96,  96 => 87,  94 => 86,  91 => 85,  88 => 68,  86 => 67,  83 => 66,  79 => 58,  77 => 57,  74 => 56,  70 => 54,  67 => 47,  64 => 46,  62 => 45,  59 => 44,  57 => 41,  56 => 39,  54 => 35,  53 => 34,  52 => 33,  51 => 32,  50 => 31,  49 => 30,  48 => 29,  47 => 27,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a formatted blazy image/media field.*/
/*  **/
/*  * The Blazy supports core image, responsive image and media entity.*/
/*  * If iframe switcher is enabled, audio/video iframe will be hidden below image*/
/*  * overlay, and only visible when toggled. Otherwise iframe only, and image is*/
/*  * emptied.*/
/*  **/
/*  * Available variables:*/
/*  *   - image: A collection of image data.*/
/*  *   - attributes: An array of attributes applied to .media container.*/
/*  *   - iframe_attributes: An array of iframe attributes, including iframe SRC.*/
/*  *   - settings: An array containing the given settings.*/
/*  *   - url: An optional URL the image can be linked to, can be any of*/
/*  *       audio/video, or entity URLs, when using Colorbox/Photobox, or Link to*/
/*  *       content options.*/
/*  *   - url_attributes: An array of URL attributes, lightbox or content links.*/
/*  **/
/*  * @see template_preprocess_blazy()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'media',*/
/*     settings.namespace ? 'media--' ~ settings.namespace,*/
/*     settings.lazy ? 'media--loading',*/
/*     settings.media_switch ? 'media--switch media--switch--' ~ settings.media_switch|clean_class,*/
/*     settings.player ? 'media--player',*/
/*     settings.ratio ? 'media--ratio media--ratio--' ~ settings.ratio,*/
/*     settings.responsive_image_style_id ? 'media--responsive',*/
/*     settings.type ? 'media--' ~ settings.type,*/
/*   ]*/
/* %}*/
/* {%*/
/*   set iframe_classes = [*/
/*     'media__iframe',*/
/*     settings.ratio ? 'media__element'*/
/*   ]*/
/* %}*/
/* */
/* {% set player %}*/
/*   {% if settings.player %}*/
/*     {% block blazy_player %}*/
/*       <iframe{{ iframe_attributes.addClass(iframe_classes) }} allowfullscreen></iframe>*/
/*       {% if settings.media_switch %}*/
/*         <span class="media__icon media__icon--close"></span>*/
/*         <span class="media__icon media__icon--play" data-url="{{ settings.autoplay_url }}"></span>*/
/*       {% endif %}*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* {% endset %}*/
/* */
/* {% set media %}*/
/*   {% block blazy_media %}*/
/*     <div{{ attributes.addClass(classes) }}>*/
/*       {{ image }}*/
/*       {{ player }}*/
/*       {{ settings.icon }}*/
/*     </div>*/
/*   {% endblock %}*/
/* {% endset %}*/
/* */
/* {% set blazy %}*/
/*   {% block blazy_content %}*/
/*     {% if media_attributes %}<div{{ media_attributes }}>{% endif %}*/
/*       {% if url and not settings.player %}*/
/*         <a href="{{ url }}"{{ url_attributes }}>{{ media }}</a>*/
/* */
/*         {# Allows fieldable captions with A tag, such as social share. #}*/
/*         {% if captions and captions.lightbox is not empty %}*/
/*           <div class="litebox-caption visually-hidden">*/
/*             {{- captions.lightbox -}}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*       {% else %}*/
/*         {{- media -}}*/
/*       {% endif %}*/
/*     {% if media_attributes %}</div>{% endif %}*/
/*   {% endblock %}*/
/* */
/*   {% if captions and captions.inline is defined %}*/
/*     {% block blazy_caption %}*/
/*       <div{{ caption_attributes }}>*/
/*         {% for caption in captions.inline %}*/
/*           {% if caption.content %}*/
/*             <{{ caption.tag }} {{ caption.attributes }}>{{ caption.content }}</{{ caption.tag }}>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* {% endset %}*/
/* */
/* {% if wrapper_attributes %}*/
/*   <div{{ wrapper_attributes }}>*/
/*     {{ blazy }}*/
/*   </div>*/
/* {% else %}*/
/*   {{ blazy }}*/
/* {% endif %}*/
/* */

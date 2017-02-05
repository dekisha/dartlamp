<?php

/* modules/slick/templates/slick.html.twig */
class __TwigTemplate_1a614057d4be1f178f5cb3a9d57d14162c48c6d76091fddfa3c9d84cce529e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slick_content' => array($this, 'block_slick_content'),
            'slick_arrow' => array($this, 'block_slick_arrow'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 31, "if" => 58, "block" => 62, "for" => 63);
        $filters = array("join" => 36, "clean_class" => 37, "raw" => 72, "striptags" => 72);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block', 'for'),
                array('join', 'clean_class', 'raw', 'striptags'),
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

        // line 31
        $context["classes"] = array(0 => "slick", 1 => (($this->getAttribute(        // line 33
(isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) ? ("unslick") : ("")), 2 => ((((        // line 34
(isset($context["display"]) ? $context["display"] : null) == "main") && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "blazy", array()))) ? ("blazy") : ("")), 3 => (($this->getAttribute(        // line 35
(isset($context["settings"]) ? $context["settings"] : null), "vertical", array())) ? ("slick--vertical") : ("")), 4 => (($this->getAttribute($this->getAttribute(        // line 36
(isset($context["settings"]) ? $context["settings"] : null), "attributes", array()), "class", array())) ? (twig_join_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "attributes", array()), "class", array()), " ")) : ("")), 5 => (($this->getAttribute(        // line 37
(isset($context["settings"]) ? $context["settings"] : null), "skin", array())) ? (("slick--skin--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "skin", array())))) : ("")), 6 => ((twig_in_filter("boxed", $this->getAttribute(        // line 38
(isset($context["settings"]) ? $context["settings"] : null), "skin", array()))) ? ("slick--skin--boxed") : ("")), 7 => ((twig_in_filter("split", $this->getAttribute(        // line 39
(isset($context["settings"]) ? $context["settings"] : null), "skin", array()))) ? ("slick--skin--split") : ("")), 8 => (($this->getAttribute(        // line 40
(isset($context["settings"]) ? $context["settings"] : null), "optionset", array())) ? (("slick--optionset--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "optionset", array())))) : ("")), 9 => ((        // line 41
array_key_exists("arrow_down_attributes", $context)) ? ("slick--has-arrow-down") : ("")), 10 => (($this->getAttribute(        // line 42
(isset($context["settings"]) ? $context["settings"] : null), "asNavFor", array())) ? (("slick--" . \Drupal\Component\Utility\Html::getClass((isset($context["display"]) ? $context["display"] : null)))) : ("")), 11 => ((($this->getAttribute(        // line 43
(isset($context["settings"]) ? $context["settings"] : null), "slidesToShow", array()) > 1)) ? ("slick--multiple-view") : ("")), 12 => ((($this->getAttribute(        // line 44
(isset($context["settings"]) ? $context["settings"] : null), "count", array()) <= $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "slidesToShow", array()))) ? ("slick--less") : ("")), 13 => ((((        // line 45
(isset($context["display"]) ? $context["display"] : null) == "main") && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "media_switch", array()))) ? (("slick--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "media_switch", array())))) : ("")), 14 => ((((        // line 46
(isset($context["display"]) ? $context["display"] : null) == "thumbnail") && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail_caption", array()))) ? ("slick--has-caption") : ("")));
        // line 50
        $context["arrow_classes"] = array(0 => "slick__arrow", 1 => (($this->getAttribute(        // line 52
(isset($context["settings"]) ? $context["settings"] : null), "vertical", array())) ? ("slick__arrow--v") : ("")), 2 => (($this->getAttribute(        // line 53
(isset($context["settings"]) ? $context["settings"] : null), "skin_arrows", array())) ? (("slick__arrow--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "skin_arrows", array())))) : ("")));
        // line 56
        echo "
<div";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 58
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) {
            // line 59
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "slick__slider"), "method"), "html", null, true));
            echo ">
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        $this->displayBlock('slick_content', $context, $blocks);
        // line 67
        echo "
  ";
        // line 68
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) {
            // line 69
            echo "    </div>
    ";
            // line 70
            $this->displayBlock('slick_arrow', $context, $blocks);
            // line 82
            echo "  ";
        }
        // line 83
        echo "</div>
";
    }

    // line 62
    public function block_slick_content($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["item"], "html", null, true));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  ";
    }

    // line 70
    public function block_slick_arrow($context, array $blocks = array())
    {
        // line 71
        echo "      <nav";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["arrow_attributes"]) ? $context["arrow_attributes"] : null), "addClass", array(0 => (isset($context["arrow_classes"]) ? $context["arrow_classes"] : null)), "method"), "html", null, true));
        echo ">
        ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(strip_tags($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prevArrow", array()), "<a><em><span><strong><button><div>")));
        echo "
        ";
        // line 73
        if (array_key_exists("arrow_down_attributes", $context)) {
            // line 74
            echo "          <button";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrow_down_attributes"]) ? $context["arrow_down_attributes"] : null), "addClass", array(0 => "slick-down"), "method"), "setAttribute", array(0 => "type", 1 => "button"), "method"), "setAttribute", array(0 => "data-target", 1 => $this->getAttribute(            // line 76
(isset($context["settings"]) ? $context["settings"] : null), "downArrowTarget", array())), "method"), "setAttribute", array(0 => "data-offset", 1 => $this->getAttribute(            // line 77
(isset($context["settings"]) ? $context["settings"] : null), "downArrowOffset", array())), "method"), "html", null, true));
            echo "></button>
        ";
        }
        // line 79
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(strip_tags($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "nextArrow", array()), "<a><em><span><strong><button><div>")));
        echo "
      </nav>
    ";
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 79,  141 => 77,  140 => 76,  138 => 74,  136 => 73,  132 => 72,  127 => 71,  124 => 70,  120 => 66,  111 => 64,  106 => 63,  103 => 62,  98 => 83,  95 => 82,  93 => 70,  90 => 69,  88 => 68,  85 => 67,  83 => 62,  80 => 61,  74 => 59,  72 => 58,  68 => 57,  65 => 56,  63 => 53,  62 => 52,  61 => 50,  59 => 46,  58 => 45,  57 => 44,  56 => 43,  55 => 42,  54 => 41,  53 => 40,  52 => 39,  51 => 38,  50 => 37,  49 => 36,  48 => 35,  47 => 34,  46 => 33,  45 => 31,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the Slick carousel template.*/
/*  **/
/*  * This template holds 3 displays: main, thumbnail and overlay slicks in one.*/
/*  * Arrows are enforced, but toggled by JS accordingly. This allows responsive*/
/*  * object to enable and disable it as needed without losing context.*/
/*  **/
/*  * Available variables:*/
/*  * - items: The array of items containing main image/video/audio, optional*/
/*  *     image/video/audio overlay and captions, and optional thumbnail*/
/*  *     texts/images.*/
/*  * - settings: A cherry-picked settings that mostly defines the slide HTML or*/
/*  *     layout, and none of JS settings/options which are defined at data-slick.*/
/*  * - attributes: The array of attributes to hold the main container classes, id.*/
/*  * - content_attributes: The array of attributes to hold optional RTL, id and*/
/*  *     data-slick containing JSON object aka JS settings the Slick expects to*/
/*  *     override default options. We don't store these JS settings in the normal*/
/*  *     <head>, but inline within data-slick attribute instead.*/
/*  **/
/*  * Debug:*/
/*  * @see https://www.drupal.org/node/1906780*/
/*  * @see https://www.drupal.org/node/1903374*/
/*  * Use Kint: {{ kint(variable) }}*/
/*  * Dump all available variables and their contents: {{ dump() }}*/
/*  * Dump only the available variable keys: {{ dump(_context|keys) }}*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'slick',*/
/*     settings.unslick ? 'unslick',*/
/*     display == 'main' and settings.blazy ? 'blazy',*/
/*     settings.vertical ? 'slick--vertical',*/
/*     settings.attributes.class ? settings.attributes.class|join(' '),*/
/*     settings.skin ? 'slick--skin--' ~ settings.skin|clean_class,*/
/*     'boxed' in settings.skin ? 'slick--skin--boxed',*/
/*     'split' in settings.skin ? 'slick--skin--split',*/
/*     settings.optionset ? 'slick--optionset--' ~ settings.optionset|clean_class,*/
/*     arrow_down_attributes is defined ? 'slick--has-arrow-down',*/
/*     settings.asNavFor ? 'slick--' ~ display|clean_class,*/
/*     settings.slidesToShow > 1 ? 'slick--multiple-view',*/
/*     settings.count <= settings.slidesToShow ? 'slick--less',*/
/*     display == 'main' and settings.media_switch ? 'slick--' ~ settings.media_switch|clean_class,*/
/*     display == 'thumbnail' and settings.thumbnail_caption ? 'slick--has-caption'*/
/*   ]*/
/* %}*/
/* {%*/
/*   set arrow_classes = [*/
/*     'slick__arrow',*/
/*     settings.vertical ? 'slick__arrow--v',*/
/*     settings.skin_arrows ? 'slick__arrow--' ~ settings.skin_arrows|clean_class*/
/*   ]*/
/* %}*/
/* */
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if not settings.unslick %}*/
/*     <div{{ content_attributes.addClass('slick__slider') }}>*/
/*   {% endif %}*/
/* */
/*   {% block slick_content %}*/
/*     {% for item in items %}*/
/*       {{ item }}*/
/*     {% endfor %}*/
/*   {% endblock %}*/
/* */
/*   {% if not settings.unslick %}*/
/*     </div>*/
/*     {% block slick_arrow %}*/
/*       <nav{{ arrow_attributes.addClass(arrow_classes) }}>*/
/*         {{ settings.prevArrow|striptags('<a><em><span><strong><button><div>')|raw }}*/
/*         {% if arrow_down_attributes is defined %}*/
/*           <button{{ arrow_down_attributes.addClass('slick-down')*/
/*             .setAttribute('type', 'button')*/
/*             .setAttribute('data-target', settings.downArrowTarget)*/
/*             .setAttribute('data-offset', settings.downArrowOffset) }}></button>*/
/*         {% endif %}*/
/*         {{ settings.nextArrow|striptags('<a><em><span><strong><button><div>')|raw }}*/
/*       </nav>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* </div>*/
/* */

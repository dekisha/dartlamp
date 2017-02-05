<?php

/* modules/slick/templates/slick-thumbnail.html.twig */
class __TwigTemplate_b0f99b56178165f5e69aaa3e55a938d5037b253cbb1db71cc65992456cc68ea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slick_thumbnail' => array($this, 'block_slick_thumbnail'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "block" => 22, "if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array(),
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

        // line 16
        $context["classes"] = array(0 => "slick__slide", 1 => "slide", 2 => ("slide--" .         // line 19
(isset($context["delta"]) ? $context["delta"] : null)));
        // line 22
        $this->displayBlock('slick_thumbnail', $context, $blocks);
    }

    public function block_slick_thumbnail($context, array $blocks = array())
    {
        // line 23
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "slide", array()), "html", null, true));
        echo "
    ";
        // line 25
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "caption", array()))) {
            // line 26
            echo "      <div class=\"slide__caption\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "caption", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 28
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 28,  64 => 26,  62 => 25,  58 => 24,  53 => 23,  47 => 22,  45 => 19,  44 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the slick-thumbnail item template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: An array of attributes to apply to the element.*/
/*  * - item.slide: A renderable array of the thumbnail image/background.*/
/*  * - item.caption: A renderable array containing caption text.*/
/*  * - settings: An array containing the given settings.*/
/*  **/
/*  * @see template_preprocess_slick_thumbnail()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'slick__slide',*/
/*     'slide',*/
/*     'slide--' ~ delta*/
/*   ]*/
/* %}*/
/* {% block slick_thumbnail %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*     {{ item.slide }}*/
/*     {% if item.caption is not empty %}*/
/*       <div class="slide__caption">{{ item.caption }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
/* */

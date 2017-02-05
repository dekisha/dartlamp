<?php

/* modules/ds/templates/ds-2col.html.twig */
class __TwigTemplate_7bc2c7715c137bf04dbbcc9fe895a7b666ed1eab4386f3b08954fa7cab83c716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 17
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "ds-2col", 1 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  <";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left_attributes"]) ? $context["left_attributes"] : null), "addClass", array(0 => "group-left"), "method"), "html", null, true));
        echo ">
    ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true));
        echo "
  </";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
        echo ">

  <";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right_attributes"]) ? $context["right_attributes"] : null), "addClass", array(0 => "group-right"), "method"), "html", null, true));
        echo ">
    ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right"]) ? $context["right"] : null), "html", null, true));
        echo "
  </";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
        echo ">

</";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-2col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  78 => 27,  74 => 26,  69 => 25,  64 => 23,  60 => 22,  55 => 21,  50 => 19,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Suite 2 column template.*/
/*  **/
/*  * Available variables:*/
/*  * - outer_wrapper: outer wrapper element*/
/*  * - left_wrapper: wrapper element around left region*/
/*  * - right_wrapper: wrapper element around right region*/
/*  * - attributes: layout attributes*/
/*  * - left_attributes: attributes for left region*/
/*  * - right_attributes: attributes for right region*/
/*  * - left: content of left region*/
/*  * - right: content of right region*/
/*  *//* */
/* #}*/
/* <{{ outer_wrapper }}{{ attributes.addClass('ds-2col', 'clearfix') }}>*/
/* */
/*   {{ title_suffix.contextual_links }}*/
/* */
/*   <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>*/
/*     {{ left }}*/
/*   </{{ left_wrapper }}>*/
/* */
/*   <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>*/
/*     {{ right }}*/
/*   </{{ right_wrapper }}>*/
/* */
/* </{{ outer_wrapper }}>*/
/* */

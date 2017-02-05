<?php

/* modules/ds/templates/ds-1col.html.twig */
class __TwigTemplate_5af6f1cf59537b6fbbcafdab0ac043b00013fcebe65d67ecd8cfa1343c05c000 extends Twig_Template
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

        // line 12
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content_wrapper"]) ? $context["ds_content_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "ds-1col", 1 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content"]) ? $context["ds_content"] : null), "html", null, true));
        echo "

</";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ds_content_wrapper"]) ? $context["ds_content_wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-1col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  55 => 16,  50 => 14,  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Suite 1 column template.*/
/*  **/
/*  * Available variables:*/
/*  * - ds_content_wrapper: wrapper around content*/
/*  * - attributes: content region attributes*/
/*  * - ds_content: content region*/
/*  *//* */
/* #}*/
/* <{{ ds_content_wrapper }}{{ attributes.addClass('ds-1col', 'clearfix') }}>*/
/* */
/*   {{ title_suffix.contextual_links }}*/
/* */
/*   {{ ds_content }}*/
/* */
/* </{{ ds_content_wrapper }}>*/
/* */

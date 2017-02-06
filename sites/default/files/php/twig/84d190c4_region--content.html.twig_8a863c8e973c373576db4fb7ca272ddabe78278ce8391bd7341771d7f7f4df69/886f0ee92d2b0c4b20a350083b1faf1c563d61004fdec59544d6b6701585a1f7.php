<?php

/* themes/custom/cowfe/templates/regions/region--content.html.twig */
class __TwigTemplate_ef50873b55ffd22485998de270a2d2306b60de800bd4eba078a08c5906813ed3 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 2
        $context["region_class"] = array(0 => "region", 1 => "region-content", 2 => $this->getAttribute(        // line 3
(isset($context["region_class"]) ? $context["region_class"] : null), "content", array()));
        // line 6
        echo "
";
        // line 7
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 8
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["region_class"]) ? $context["region_class"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/cowfe/templates/regions/region--content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  51 => 8,  49 => 7,  46 => 6,  44 => 3,  43 => 2,);
    }
}
/* {%*/
/*   set region_class = [*/
/*     'region','region-content', region_class.content*/
/*   ]*/
/* %}*/
/* */
/* {% if content %}*/
/*   <div{{ attributes.addClass(region_class) }}>*/
/*     {{ content }}*/
/*   </div>*/
/* {% endif %}*/
/* */

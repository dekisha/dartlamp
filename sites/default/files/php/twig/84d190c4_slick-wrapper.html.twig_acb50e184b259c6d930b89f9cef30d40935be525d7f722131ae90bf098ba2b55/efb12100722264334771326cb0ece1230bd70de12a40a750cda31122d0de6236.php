<?php

/* modules/slick/templates/slick-wrapper.html.twig */
class __TwigTemplate_d54e905f73c9ab583f18ceb23922ddb8b1d31c693bc08941bcb0bd63ed396181 extends Twig_Template
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
        $tags = array("set" => 16, "for" => 30, "spaceless" => 35, "if" => 36);
        $filters = array("clean_class" => 19, "replace" => 25, "without" => 37);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'spaceless', 'if'),
                array('clean_class', 'replace', 'without'),
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
        $context["classes"] = array(0 => "slick-wrapper", 1 => (($this->getAttribute(        // line 18
(isset($context["settings"]) ? $context["settings"] : null), "nav", array())) ? ("slick-wrapper--asnavfor") : ("")), 2 => (($this->getAttribute(        // line 19
(isset($context["settings"]) ? $context["settings"] : null), "skin", array())) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "skin", array())))) : ("")), 3 => (($this->getAttribute(        // line 20
(isset($context["settings"]) ? $context["settings"] : null), "skin_thumbnail", array())) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "skin_thumbnail", array())))) : ("")), 4 => (($this->getAttribute(        // line 21
(isset($context["settings"]) ? $context["settings"] : null), "vertical", array())) ? ("slick-wrapper--v") : ("")), 5 => (($this->getAttribute(        // line 22
(isset($context["settings"]) ? $context["settings"] : null), "vertical_tn", array())) ? ("slick-wrapper--v-tn") : ("")), 6 => (($this->getAttribute(        // line 23
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail_position", array())) ? (("slick-wrapper--tn-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail_position", array())))) : ("")), 7 => ((twig_in_filter("over", $this->getAttribute(        // line 24
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail_position", array()))) ? ("slick-wrapper--tn-overlay") : ("")), 8 => ((twig_in_filter("over", $this->getAttribute(        // line 25
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail_position", array()))) ? (("slick-wrapper--tn-" . twig_replace_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail_position", array()), array("over-" => "")))) : ("")));
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["item"], "html", null, true));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "  ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "nav", array())) {
            // line 37
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "id"), "html", null, true));
            echo ">
      ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </div>
  ";
        } else {
            // line 41
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 41,  86 => 38,  81 => 37,  78 => 36,  76 => 35,  73 => 34,  63 => 31,  58 => 30,  56 => 29,  53 => 28,  51 => 25,  50 => 24,  49 => 23,  48 => 22,  47 => 21,  46 => 20,  45 => 19,  44 => 18,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a slick wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - items: A list of items containing main and thumbnail of slick.html.twig*/
/*  *   which can be re-position using option Thumbnail position.*/
/*  * - attributes: HTML attributes to be applied to the list.*/
/*  * - settings: An array containing the given settings.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'slick-wrapper',*/
/*     settings.nav ? 'slick-wrapper--asnavfor',*/
/*     settings.skin ? 'slick-wrapper--' ~ settings.skin|clean_class,*/
/*     settings.skin_thumbnail ? 'slick-wrapper--' ~ settings.skin_thumbnail|clean_class,*/
/*     settings.vertical ? 'slick-wrapper--v',*/
/*     settings.vertical_tn ? 'slick-wrapper--v-tn',*/
/*     settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|clean_class,*/
/*     'over' in settings.thumbnail_position ? 'slick-wrapper--tn-overlay',*/
/*     'over' in settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|replace({ 'over-' : '' })*/
/*   ]*/
/* %}*/
/* */
/* {% set content %}*/
/*   {% for item in items %}*/
/*     {{ item }}*/
/*   {% endfor %}*/
/* {% endset %}*/
/* */
/* {% spaceless %}*/
/*   {% if settings.nav %}*/
/*     <div{{ attributes.addClass(classes)|without('id') }}>*/
/*       {{ content }}*/
/*     </div>*/
/*   {% else %}*/
/*     {{ content }}*/
/*   {% endif %}*/
/* {% endspaceless %}*/
/* */

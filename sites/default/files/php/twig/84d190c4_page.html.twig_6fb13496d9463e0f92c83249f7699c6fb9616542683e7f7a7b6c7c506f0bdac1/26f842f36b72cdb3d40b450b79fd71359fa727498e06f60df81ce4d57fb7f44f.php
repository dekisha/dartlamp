<?php

/* themes/custom/cowfe/templates/page.html.twig */
class __TwigTemplate_1c58caf90d2d5131c1efad9bdf83c6e95b894b31d455d6b63e46c80b2ba2c61f extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "<div id=\"page\">

  ";
        // line 4
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top", array())) {
            // line 5
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top", array()), "html", null, true));
            echo "
  ";
        }
        // line 7
        echo "
  ";
        // line 9
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
  ";
        }
        // line 12
        echo "
  ";
        // line 14
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array())) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
            echo "
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 19
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 23
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 27
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_content", array())) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_content", array()), "html", null, true));
            echo "
  ";
        }
        // line 33
        echo "
  ";
        // line 35
        echo "  <main class=\"main\" role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 37
        echo "
    ";
        // line 38
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 39
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 43
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 47
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
    ";
        }
        // line 49
        echo "
  </main>

  ";
        // line 52
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_content", array())) {
            // line 53
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_content", array()), "html", null, true));
            echo "
  ";
        }
        // line 55
        echo "
  <footer id=\"footer\">
    ";
        // line 57
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_footer", array())) {
            // line 58
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_footer", array()), "html", null, true));
            echo "
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 62
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_footer", array())) {
            // line 66
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_footer", array()), "html", null, true));
            echo "
    ";
        }
        // line 68
        echo "  </footer>

</div> ";
    }

    public function getTemplateName()
    {
        return "themes/custom/cowfe/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 68,  204 => 66,  202 => 65,  199 => 64,  193 => 62,  191 => 61,  188 => 60,  182 => 58,  180 => 57,  176 => 55,  170 => 53,  168 => 52,  163 => 49,  157 => 47,  155 => 46,  152 => 45,  146 => 43,  144 => 42,  141 => 41,  135 => 39,  133 => 38,  130 => 37,  127 => 35,  124 => 33,  118 => 31,  116 => 30,  113 => 29,  107 => 27,  105 => 26,  102 => 25,  96 => 23,  94 => 22,  91 => 21,  85 => 19,  83 => 18,  80 => 17,  74 => 15,  71 => 14,  68 => 12,  62 => 10,  59 => 9,  56 => 7,  50 => 5,  47 => 4,  43 => 1,);
    }
}
/* <div id="page">*/
/* */
/*   {# page top region #}*/
/*   {% if page.top %}*/
/*     {{ page.top }}*/
/*   {% endif %}*/
/* */
/*   {# header region #}*/
/*   {% if page.header %}*/
/*     {{ page.header }}*/
/*   {% endif %}*/
/* */
/*   {# Navigation region #}*/
/*   {% if page.navigation %}*/
/*     {{ page.navigation }}*/
/*   {% endif %}*/
/* */
/*   {% if page.help %}*/
/*     {{ page.help }}*/
/*   {% endif %}*/
/* */
/*   {% if page.highlighted %}*/
/*     {{ page.highlighted }}*/
/*   {% endif %}*/
/* */
/*   {% if page.featured %}*/
/*     {{ page.featured }}*/
/*   {% endif %}*/
/* */
/*   {% if page.pre_content %}*/
/*     {{ page.pre_content }}*/
/*   {% endif %}*/
/* */
/*   {# main container #}*/
/*   <main class="main" role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     {% if page.content %}*/
/*       {{ page.content }}*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_first %}*/
/*       {{ page.sidebar_first }}*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       {{ page.sidebar_second }}*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   {% if page.post_content %}*/
/*     {{ page.post_content }}*/
/*   {% endif %}*/
/* */
/*   <footer id="footer">*/
/*     {% if page.post_footer %}*/
/*       {{ page.post_footer }}*/
/*     {% endif %}*/
/* */
/*     {% if page.footer %}*/
/*       {{ page.footer }}*/
/*     {% endif %}*/
/* */
/*     {% if page.post_footer %}*/
/*       {{ page.post_footer }}*/
/*     {% endif %}*/
/*   </footer>*/
/* */
/* </div> {# /page #}*/

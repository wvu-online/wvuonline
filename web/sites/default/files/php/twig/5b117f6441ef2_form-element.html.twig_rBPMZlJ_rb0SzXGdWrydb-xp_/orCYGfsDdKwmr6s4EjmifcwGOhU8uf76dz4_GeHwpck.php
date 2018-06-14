<?php

/* themes/contrib/material_admin/templates/form/form-element.html.twig */
class __TwigTemplate_459cc0766b0d3baf9a5649449eab306e7fb60199df3a452e0168bd0400d4f9b0 extends Twig_Template
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
        $tags = array("set" => 48, "if" => 70, "include" => 94);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'include'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
($context["type"] ?? null))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["type"] ?? null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["name"] ?? null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), 6 => (((        // line 55
($context["label_display"] ?? null) == "none")) ? ("form-no-label") : ("")), 7 => ((twig_in_filter(        // line 56
($context["label_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-has-label") : ("")), 8 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 9 => ((twig_in_filter(        // line 58
($context["type"] ?? null), array(0 => "textfield", 1 => "select", 2 => "password", 3 => "email", 4 => "number", 5 => "tel", 6 => "search", 7 => "url", 8 => "path", 9 => "entity_autocomplete", 10 => "file", 11 => "managed_file", 12 => "upload"))) ? ("input-field") : ("")), 10 => ((twig_in_filter(        // line 59
($context["type"] ?? null), array(0 => "file", 1 => "managed_file", 2 => "upload"))) ? ("file-field") : ("")), 11 => (((        // line 60
($context["prefix"] ?? null) &&  !($context["suffix"] ?? null))) ? ("has-prefix") : ("")), 12 => (((        // line 61
($context["suffix"] ?? null) &&  !($context["prefix"] ?? null))) ? ("has-suffix") : ("")), 13 => (((        // line 62
($context["prefix"] ?? null) && ($context["suffix"] ?? null))) ? ("has-prefix-and-suffix") : ("")), 14 => ((        // line 63
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 15 => ((preg_match("/value=\"[^\"]+\"/",         // line 64
($context["children"] ?? null))) ? ("has-initial-content") : ("")), 16 => ((preg_match("/placeholder=\"[^\"]+\"/",         // line 65
($context["children"] ?? null))) ? ("has-placeholder") : ("")), 17 => (((        // line 66
($context["description_display"] ?? null) == "after")) ? ("has-description-after") : ("")));
        // line 69
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 70
        if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
            // line 71
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 73
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 74
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 76
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 77
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 81
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
  ";
        // line 82
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 83
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 85
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 86
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 88
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 89
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 90
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
    </div>
  ";
        }
        // line 93
        echo "  ";
        if (twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible"))) {
            // line 94
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/contrib/material_admin/templates/form/form-element.html.twig", 94)->display($context);
            // line 95
            echo "  ";
        }
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 96,  137 => 95,  134 => 94,  131 => 93,  125 => 90,  122 => 89,  119 => 88,  113 => 86,  110 => 85,  104 => 83,  102 => 82,  97 => 81,  91 => 78,  86 => 77,  83 => 76,  77 => 74,  74 => 73,  68 => 71,  66 => 70,  61 => 69,  59 => 66,  58 => 65,  57 => 64,  56 => 63,  55 => 62,  54 => 61,  53 => 60,  52 => 59,  51 => 58,  50 => 57,  49 => 56,  48 => 55,  47 => 54,  46 => 53,  45 => 52,  44 => 51,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/form/form-element.html.twig", "/app/web/themes/contrib/material_admin/templates/form/form-element.html.twig");
    }
}

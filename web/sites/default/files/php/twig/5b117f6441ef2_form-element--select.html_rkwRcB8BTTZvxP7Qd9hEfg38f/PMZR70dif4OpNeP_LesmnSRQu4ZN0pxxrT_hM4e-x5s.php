<?php

/* themes/contrib/material_admin/templates/form/form-element--select.html.twig */
class __TwigTemplate_def855e53160b515462392a5baf41a47b0e8041c750c7b83fb097d56a33db264 extends Twig_Template
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
        $tags = array("set" => 12, "if" => 34, "include" => 58);
        $filters = array("clean_class" => 15);
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

        // line 12
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 15
($context["type"] ?? null))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 16
($context["type"] ?? null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 17
($context["name"] ?? null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 18
($context["name"] ?? null))), 6 => (((        // line 19
($context["select_default"] ?? null) == "false")) ? ("input-field") : ("")), 7 => ((        // line 20
($context["select_default"] ?? null)) ? ("input-field-browser-default") : ("")), 8 => (((        // line 21
($context["label_display"] ?? null) == "none")) ? ("form-no-label") : ("")), 9 => ((twig_in_filter(        // line 22
($context["label_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-has-label") : ("")), 10 => (((        // line 23
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 11 => (((        // line 24
($context["prefix"] ?? null) &&  !($context["suffix"] ?? null))) ? ("has-prefix") : ("")), 12 => (((        // line 25
($context["suffix"] ?? null) &&  !($context["prefix"] ?? null))) ? ("has-suffix") : ("")), 13 => (((        // line 26
($context["prefix"] ?? null) && ($context["suffix"] ?? null))) ? ("has-prefix-and-suffix") : ("")), 14 => ((        // line 27
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 15 => ((preg_match("/value=\"[^\"]+\"/",         // line 28
($context["children"] ?? null))) ? ("has-initial-content") : ("")), 16 => ((preg_match("/placeholder=\"[^\"]+\"/",         // line 29
($context["children"] ?? null))) ? ("has-placeholder") : ("")), 17 => (((        // line 30
($context["description_display"] ?? null) == "after")) ? ("has-description-after") : ("")));
        // line 33
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 34
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 35
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 37
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 38
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 42
        echo "  ";
        if ((($context["label_display"] ?? null) && ($context["select_default"] ?? null))) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 45
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
  ";
        // line 46
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 47
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 49
        echo "  ";
        if ((($context["label_display"] ?? null) &&  !($context["select_default"] ?? null))) {
            // line 50
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 52
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 53
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
    </div>
  ";
        }
        // line 57
        echo "  ";
        if (twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible"))) {
            // line 58
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/contrib/material_admin/templates/form/form-element--select.html.twig", 58)->display($context);
            // line 59
            echo "  ";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/form/form-element--select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  137 => 59,  134 => 58,  131 => 57,  125 => 54,  122 => 53,  119 => 52,  113 => 50,  110 => 49,  104 => 47,  102 => 46,  97 => 45,  91 => 43,  88 => 42,  82 => 39,  77 => 38,  74 => 37,  68 => 35,  66 => 34,  61 => 33,  59 => 30,  58 => 29,  57 => 28,  56 => 27,  55 => 26,  54 => 25,  53 => 24,  52 => 23,  51 => 22,  50 => 21,  49 => 20,  48 => 19,  47 => 18,  46 => 17,  45 => 16,  44 => 15,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/form/form-element--select.html.twig", "/app/web/themes/contrib/material_admin/templates/form/form-element--select.html.twig");
    }
}

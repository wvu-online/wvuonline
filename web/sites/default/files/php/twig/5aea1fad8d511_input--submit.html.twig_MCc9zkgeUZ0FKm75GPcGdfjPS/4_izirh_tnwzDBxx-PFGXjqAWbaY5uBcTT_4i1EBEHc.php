<?php

/* themes/contrib/material_admin/templates/buttons/input--submit.html.twig */
class __TwigTemplate_963116222da746b40f0ffc5b58ed804f1309cfcf63ba8427d8499276c5c3cba9 extends Twig_Template
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
        $tags = array("set" => 14, "if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 13
        echo "
";
        // line 14
        $context["nowrap"] = array(0 => ((preg_match("/^edit-options-expose-button.*\$/", $this->getAttribute(        // line 15
($context["attributes"] ?? null), "id", array()))) ? ("no-wrap") : ("")));
        // line 18
        echo "
";
        // line 19
        if (($this->getAttribute(($context["attributes"] ?? null), "hasClass", array(0 => "visually-hidden"), "method") || $this->getAttribute(($context["attributes"] ?? null), "hasClass", array(0 => "js-hide"), "method"))) {
            // line 20
            echo "  <input";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "js-hide"), "method"), "html", null, true));
            echo " />";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
";
        } else {
            // line 22
            echo "  ";
            // line 23
            echo "  ";
            if ( !($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["nowrap"] ?? null)), "method"), "hasClass", array(0 => "no-wrap"), "method") || $this->getAttribute(($context["attributes"] ?? null), "hasClass", array(0 => "add-display"), "method"))) {
                // line 24
                echo "    <i class=\"waves-effect waves-light waves-input-wrapper button btn\">
      <input";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "waves-button-input"), "method"), "html", null, true));
                echo " />";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
                echo "
    </i>
  ";
            } else {
                // line 28
                echo "    <input";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo " />";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/buttons/input--submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  70 => 25,  67 => 24,  64 => 23,  62 => 22,  54 => 20,  52 => 19,  49 => 18,  47 => 15,  46 => 14,  43 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/buttons/input--submit.html.twig", "/app/web/themes/contrib/material_admin/templates/buttons/input--submit.html.twig");
    }
}

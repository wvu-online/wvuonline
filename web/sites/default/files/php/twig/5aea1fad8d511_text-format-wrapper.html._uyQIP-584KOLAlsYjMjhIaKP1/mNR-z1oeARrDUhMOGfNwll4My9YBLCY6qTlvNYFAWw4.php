<?php

/* themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig */
class __TwigTemplate_97f1f70f52e419acec4ce04a3d66f37d9ab168446353ff7ce3bbeda179828351 extends Twig_Template
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
        $tags = array("if" => 20, "set" => 22, "include" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'include'),
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

        // line 16
        echo "
<div class=\"js-text-format-wrapper text-format-wrapper js-form-item\">
 \t";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
 
  ";
        // line 20
        if (($context["description"] ?? null)) {
            // line 21
            echo "    ";
            // line 22
            $context["classes"] = array(0 => ((            // line 23
($context["aria_description"] ?? null)) ? ("description") : ("")));
            // line 26
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig", 26)->display($context);
            // line 27
            echo "  ";
        }
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  62 => 27,  59 => 26,  57 => 23,  56 => 22,  54 => 21,  52 => 20,  47 => 18,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig", "/app/web/themes/contrib/material_admin/templates/content-edit/text-format-wrapper.html.twig");
    }
}

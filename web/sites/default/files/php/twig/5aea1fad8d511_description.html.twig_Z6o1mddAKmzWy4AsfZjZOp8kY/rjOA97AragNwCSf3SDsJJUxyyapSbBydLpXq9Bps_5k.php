<?php

/* @material_admin/misc/description.html.twig */
class __TwigTemplate_d9df392ccccf054dd8162487b0d567b2315ea4edc40a9620ced8cb3cf08865b0 extends Twig_Template
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
        $tags = array("set" => 14, "if" => 20);
        $filters = array("e" => 31);
        $functions = array("create_attribute" => 24, "render_var" => 31);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('e'),
                array('create_attribute', 'render_var')
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
        echo "
";
        // line 14
        $context["description_classes"] = array(0 => "description", 1 => (((        // line 16
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 19
        echo "
";
        // line 20
        if ( !twig_test_iterable(($context["description"] ?? null))) {
            // line 21
            echo "  ";
            // line 22
            $context["description"] = array("content" =>             // line 23
($context["description"] ?? null), "attributes" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(array()));
        }
        // line 28
        echo "
";
        // line 29
        if ( !twig_test_empty($this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 30
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
    <a class=\"tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-html=\"true\" data-tooltip=\"";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["description"] ?? null), "content", array())), "html_attr"));
            echo "\"> <i class=\"material-icons\" aria-hidden=\"true\">help_outline</i> Info </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@material_admin/misc/description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 31,  65 => 30,  63 => 29,  60 => 28,  57 => 23,  56 => 22,  54 => 21,  52 => 20,  49 => 19,  47 => 16,  46 => 14,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@material_admin/misc/description.html.twig", "/app/web/themes/contrib/material_admin/templates/misc/description.html.twig");
    }
}

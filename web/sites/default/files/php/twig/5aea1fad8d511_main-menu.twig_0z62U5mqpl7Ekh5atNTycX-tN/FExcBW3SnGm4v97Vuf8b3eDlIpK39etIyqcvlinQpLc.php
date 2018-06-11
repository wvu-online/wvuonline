<?php

/* @molecules/menus/main-menu/main-menu.twig */
class __TwigTemplate_a45e2f8e319962032900930883cdb999e3f95a983335cbab9109858936f512b2 extends Twig_Template
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
        $tags = array("include" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
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

        // line 1
        echo "<a href=\"#\" id=\"toggle-expand\" class=\"toggle-expand\">
  <span class=\"toggle-expand__open\">
    <span class=\"toggle-expand__icon sprite-menu sprite-icon\">
      <span class=\"visually-hidden\">
        Mobile menu expand icon.
      </span>
    </span>
    <span class=\"toggle-expand__text\">Main Menu</span>
  </span>
  <span class=\"toggle-expand__close\">
    <span class=\"toggle-expand__text\">Close</span>
  </span>
</a>
<nav id=\"main-nav\" class=\"main-nav\">
  ";
        // line 15
        $this->loadTemplate("@molecules/menus/_menu.twig", "@molecules/menus/main-menu/main-menu.twig", 15)->display(array_merge($context, array("menu_class" => "main-menu")));
        // line 18
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/main-menu/main-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  59 => 15,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@molecules/menus/main-menu/main-menu.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/02-molecules/menus/main-menu/main-menu.twig");
    }
}

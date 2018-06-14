<?php

/* @material_admin/misc/notification-drawer.html.twig */
class __TwigTemplate_30cd17130b57db59e20365801f0615823a6c3f578ed8edf34e8eae9b9435f487 extends Twig_Template
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
        $tags = array("trans" => 8);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
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

        // line 6
        echo "<div id=\"messageContainer\" class=\"modal bottom-sheet\">
  <div class=\"modal-content\">
    <h4 class=\"notification-title\">";
        // line 8
        echo t("Message Notifications", array());
        echo "</h4>
    <div class=\"allmessages\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "status", array()), "html", null, true));
        echo "
    </div>
  </div>
  <div class=\"modal-footer\">
    <a data-href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">";
        // line 13
        echo t("Close", array());
        echo "</a>
    <a href=\"/admin/reports/dblog\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">";
        // line 14
        echo t("View Log", array());
        echo "</a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@material_admin/misc/notification-drawer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  58 => 13,  51 => 9,  47 => 8,  43 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@material_admin/misc/notification-drawer.html.twig", "/app/web/themes/contrib/material_admin/templates/misc/notification-drawer.html.twig");
    }
}

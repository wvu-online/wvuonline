<?php

/* @material_admin/misc/notification-trigger.html.twig */
class __TwigTemplate_b8a16abd2751918ecee607ef4aaa19d6c3ca17a4bf8888c686e735a42ac1463a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"right\" id=\"notification-wrapper\">
  <a class=\"modal-trigger message-trigger waves-light waves-effect\" href=\"#messageContainer\"><i class=\"material-icons\">notifications</i><span class=\"badge messages--status\">0</span><span class=\"badge messages--warning\">0</span><span class=\"badge messages--error\">0</span></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@material_admin/misc/notification-trigger.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@material_admin/misc/notification-trigger.html.twig", "/app/web/themes/contrib/material_admin/templates/misc/notification-trigger.html.twig");
    }
}

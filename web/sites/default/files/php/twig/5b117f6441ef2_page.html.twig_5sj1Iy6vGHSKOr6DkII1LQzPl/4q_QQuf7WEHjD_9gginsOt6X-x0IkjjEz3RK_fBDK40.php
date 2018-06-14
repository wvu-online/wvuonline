<?php

/* themes/contrib/material_admin/templates/layout/page.html.twig */
class __TwigTemplate_9822fc6737603549dbf02c83af1ec406cd0780b59a085180a738b7e82d06fb29 extends Twig_Template
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
        $tags = array("set" => 46, "include" => 53, "if" => 59);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'include', 'if'),
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

        // line 45
        echo "
 ";
        // line 46
        $context["breadcrumb_nav_classes"] = array(0 => ((        // line 47
($context["has_breadcrumbs"] ?? null)) ? ("breadcrumb-section-wrapper") : ("")), 1 => (( !        // line 48
($context["has_breadcrumbs"] ?? null)) ? ("breadcrumb-section-wrapper-empty") : ("")));
        // line 51
        echo "
<div class=\"layout-container\">
  ";
        // line 53
        $this->loadTemplate("@material_admin/misc/notification-drawer.html.twig", "themes/contrib/material_admin/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        echo "  <header class=\"header-wrapper z-depth-2\" role=\"banner\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      ";
        // line 57
        $this->loadTemplate("@material_admin/misc/notification-trigger.html.twig", "themes/contrib/material_admin/templates/layout/page.html.twig", 57)->display($context);
        // line 58
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo " 
      ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "status", array())) {
            // line 60
            echo "        </div>
      ";
        }
        // line 62
        echo "    </div>
  </header>
  <section";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["breadcrumb_nav_classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
        ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
    </div>
    </div>
  </section>
  <section class=\"highlighted-wrapper\">
      ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
  </section>
  <main role=\"main-wrapper\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 78
        echo "      <div class=\"layout-content\">
        ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </div>";
        // line 80
        echo " ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 81
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
      ";
        }
        // line 84
        echo " ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 85
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
      ";
        }
        // line 89
        echo "    </div>
    </div>
  </main>
  ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 93
            echo "  <footer role=\"contentinfo\">
    <div clas=\"row material-container\">
      ";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
  ";
        }
        // line 99
        echo "</div>";
        // line 100
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 100,  149 => 99,  142 => 95,  138 => 93,  136 => 92,  131 => 89,  125 => 86,  122 => 85,  119 => 84,  113 => 82,  110 => 81,  107 => 80,  103 => 79,  100 => 78,  92 => 72,  84 => 67,  78 => 64,  74 => 62,  70 => 60,  68 => 59,  63 => 58,  61 => 57,  56 => 54,  54 => 53,  50 => 51,  48 => 48,  47 => 47,  46 => 46,  43 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/layout/page.html.twig", "/app/web/themes/contrib/material_admin/templates/layout/page.html.twig");
    }
}

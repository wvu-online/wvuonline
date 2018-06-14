<?php

/* @atoms/02-text/00-headings/_heading.twig */
class __TwigTemplate_dacd1acecafde2db925fa51774fd9b1440d620019a43bbcfe9c2efdff13d9075 extends Twig_Template
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
        $tags = array("set" => 19, "if" => 22, "include" => 23);
        $filters = array("default" => 19);
        $functions = array("bem" => 21);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'include'),
                array('default'),
                array('bem')
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

        // line 19
        $context["heading_base_class"] = ((array_key_exists("heading_base_class", $context)) ? (_twig_default_filter(($context["heading_base_class"] ?? null), ("h" . ($context["heading_level"] ?? null)))) : (("h" . ($context["heading_level"] ?? null))));
        // line 20
        echo "
<h";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_level"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), array($context, ($context["heading_base_class"] ?? null), ($context["heading_modifiers"] ?? null), ($context["heading_blockname"] ?? null)))));
        echo ">
  ";
        // line 22
        if (($context["heading_url"] ?? null)) {
            // line 23
            echo "    ";
            $this->loadTemplate("@atoms/01-links/link/link.twig", "@atoms/02-text/00-headings/_heading.twig", 23)->display(array_merge($context, array("link_content" =>             // line 24
($context["heading"] ?? null), "link_url" =>             // line 25
($context["heading_url"] ?? null), "link_attributes" =>             // line 26
($context["heading_link_attributes"] ?? null), "link_base_class" =>             // line 27
($context["heading_link_base_class"] ?? null), "link_modifiers" =>             // line 28
($context["heading_link_modifiers"] ?? null), "link_blockname" => ((            // line 29
array_key_exists("heading_link_blockname", $context)) ? (_twig_default_filter(($context["heading_link_blockname"] ?? null), ($context["heading_base_class"] ?? null))) : (($context["heading_base_class"] ?? null))))));
            // line 31
            echo "  ";
        } else {
            // line 32
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 34
        echo "</h";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_level"] ?? null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@atoms/02-text/00-headings/_heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  68 => 32,  65 => 31,  63 => 29,  62 => 28,  61 => 27,  60 => 26,  59 => 25,  58 => 24,  56 => 23,  54 => 22,  48 => 21,  45 => 20,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@atoms/02-text/00-headings/_heading.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/01-atoms/02-text/00-headings/_heading.twig");
    }
}

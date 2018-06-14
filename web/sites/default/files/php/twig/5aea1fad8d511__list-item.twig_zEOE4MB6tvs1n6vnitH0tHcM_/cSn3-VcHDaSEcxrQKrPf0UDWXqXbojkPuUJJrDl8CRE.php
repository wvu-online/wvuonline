<?php

/* @atoms/03-lists/_list-item.twig */
class __TwigTemplate_3c80c767c3a38a9f69bbe85ea6bb8733d7ac7f1a76c602d5316febe4c7824516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list_item_content' => array($this, 'block_list_item_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 15, "block" => 18, "if" => 19);
        $filters = array("default" => 15);
        $functions = array("bem" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
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

        // line 15
        $context["li_base_class"] = ((array_key_exists("li_base_class", $context)) ? (_twig_default_filter(($context["li_base_class"] ?? null), "list-item")) : ("list-item"));
        // line 16
        echo "
<li ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), array($context, ($context["li_base_class"] ?? null), ($context["li_modifiers"] ?? null), ($context["li_blockname"] ?? null)))));
        echo ">
  ";
        // line 18
        $this->displayBlock('list_item_content', $context, $blocks);
        // line 22
        echo "</li>
";
    }

    // line 18
    public function block_list_item_content($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (($context["list_item_label"] ?? null)) {
            echo "<strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["list_item_label"] ?? null), "html", null, true));
            echo "</strong> ";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["list_item_content"] ?? null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@atoms/03-lists/_list-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  63 => 19,  60 => 18,  55 => 22,  53 => 18,  49 => 17,  46 => 16,  44 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@atoms/03-lists/_list-item.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/01-atoms/03-lists/_list-item.twig");
    }
}

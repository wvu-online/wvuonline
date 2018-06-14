<?php

/* @atoms/03-lists/00-ul.twig */
class __TwigTemplate_fb52afabe24853b33960b5810bcca8ced11b8fee0fdd8c23a1e2d75234a4edc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list_content' => array($this, 'block_list_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 11, "block" => 14, "for" => 15, "include" => 16);
        $filters = array("default" => 11);
        $functions = array("bem" => 13);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'for', 'include'),
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

        // line 11
        $context["ul_base_class"] = ((array_key_exists("ul_base_class", $context)) ? (_twig_default_filter(($context["ul_base_class"] ?? null), "ul")) : ("ul"));
        // line 12
        echo "
<ul ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('bem')->getCallable(), array($context, ($context["ul_base_class"] ?? null), ($context["ul_modifiers"] ?? null), ($context["ul_blockname"] ?? null)))));
        echo ">
  ";
        // line 14
        $this->displayBlock('list_content', $context, $blocks);
        // line 26
        echo "</ul>
";
    }

    // line 14
    public function block_list_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ul_items"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ul_item"]) {
            // line 16
            echo "      ";
            $this->loadTemplate("@atoms/03-lists/_list-item.twig", "@atoms/03-lists/00-ul.twig", 16)->display(array_merge($context, array("list_item_label" => $this->getAttribute(            // line 17
$context["ul_item"], "label", array()), "list_item_content" => $this->getAttribute(            // line 18
$context["ul_item"], "content", array()), "li_base_class" => $this->getAttribute(            // line 19
$context["ul_item"], "li_base_class", array()), "li_base_class" => $this->getAttribute(            // line 20
$context["ul_item"], "li_base_class", array()), "li_modifiers" => $this->getAttribute(            // line 21
$context["ul_item"], "li_modifiers", array()), "li_blockname" => $this->getAttribute(            // line 22
$context["ul_item"], "li_blockname", array()))));
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ul_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@atoms/03-lists/00-ul.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  90 => 24,  88 => 22,  87 => 21,  86 => 20,  85 => 19,  84 => 18,  83 => 17,  81 => 16,  63 => 15,  60 => 14,  55 => 26,  53 => 14,  49 => 13,  46 => 12,  44 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@atoms/03-lists/00-ul.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/01-atoms/03-lists/00-ul.twig");
    }
}

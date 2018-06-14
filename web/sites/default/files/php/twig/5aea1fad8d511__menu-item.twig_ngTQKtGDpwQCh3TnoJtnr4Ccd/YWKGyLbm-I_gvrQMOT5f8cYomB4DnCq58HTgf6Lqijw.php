<?php

/* @molecules/menus/_menu-item.twig */
class __TwigTemplate_25a7a78083835cd8a8b27fd57c1936017d4f0c93413f92ad958c4c806d058b2f extends Twig_Template
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
        $tags = array("if" => 1, "set" => 2, "for" => 14, "embed" => 18);
        $filters = array("merge" => 5, "default" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for', 'embed'),
                array('merge', 'default'),
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
        if ( !($context["item_modifiers"] ?? null)) {
            // line 2
            echo "  ";
            $context["item_modifiers"] = array();
        }
        // line 4
        if (($this->getAttribute(($context["item"] ?? null), "in_active_trail", array()) == true)) {
            // line 5
            echo "  ";
            $context["item_modifiers"] = twig_array_merge(($context["item_modifiers"] ?? null), array(0 => "active"));
        }
        // line 7
        if ((($context["menu_level"] ?? null) > 0)) {
            // line 8
            echo "  ";
            $context["item_modifiers"] = twig_array_merge(($context["item_modifiers"] ?? null), array(0 => "sub", 1 => ("sub-" . ($context["menu_level"] ?? null))));
        }
        // line 10
        if ($this->getAttribute(($context["item"] ?? null), "below", array())) {
            // line 11
            echo "  ";
            $context["item_modifiers"] = twig_array_merge(($context["item_modifiers"] ?? null), array(0 => "with-sub"));
        }
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "modifiers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["modifier"]) {
            // line 15
            echo "  ";
            $context["item_modifiers"] = twig_array_merge(($context["item_modifiers"] ?? null), array(0 => $context["modifier"]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modifier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        $this->loadTemplate("@molecules/menus/_menu-item.twig", "@molecules/menus/_menu-item.twig", 18, "488837032")->display(array_merge($context, array("list_item_label" =>         // line 19
($context["item_label"] ?? null), "li_base_class" => ((        // line 20
array_key_exists("item_base_class", $context)) ? (_twig_default_filter(($context["item_base_class"] ?? null), (($context["menu_class"] ?? null) . "__item"))) : ((($context["menu_class"] ?? null) . "__item"))), "li_modifiers" =>         // line 21
($context["item_modifiers"] ?? null), "li_blockname" =>         // line 22
($context["item_blockname"] ?? null))));
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  84 => 21,  83 => 20,  82 => 19,  81 => 18,  78 => 17,  71 => 15,  67 => 14,  63 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@molecules/menus/_menu-item.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/02-molecules/menus/_menu-item.twig");
    }
}


/* @molecules/menus/_menu-item.twig */
class __TwigTemplate_25a7a78083835cd8a8b27fd57c1936017d4f0c93413f92ad958c4c806d058b2f_488837032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("@atoms/03-lists/_list-item.twig", "@molecules/menus/_menu-item.twig", 18);
        $this->blocks = array(
            'list_item_content' => array($this, 'block_list_item_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@atoms/03-lists/_list-item.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("include" => 25, "if" => 31);
        $filters = array("default" => 28);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
                array('default'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_list_item_content($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->loadTemplate("@atoms/01-links/link/link.twig", "@molecules/menus/_menu-item.twig", 25)->display(array_merge($context, array("link_content" => $this->getAttribute(        // line 26
($context["item"] ?? null), "title", array()), "link_url" => $this->getAttribute(        // line 27
($context["item"] ?? null), "url", array()), "link_base_class" => ((        // line 28
array_key_exists("item_base_class", $context)) ? (_twig_default_filter(($context["item_base_class"] ?? null), (($context["menu_class"] ?? null) . "__link"))) : ((($context["menu_class"] ?? null) . "__link"))), "link_modifiers" =>         // line 29
($context["item_modifiers"] ?? null))));
        // line 31
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? null), "below", array())) {
            // line 32
            echo "      <span class=\"expand-sub\"></span>
      ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["menus"] ?? null), "menu_links", array(0 => $this->getAttribute(($context["item"] ?? null), "below", array()), 1 => ($context["attributes"] ?? null), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["menu_class"] ?? null), 4 => ($context["menu_modifiers"] ?? null), 5 => ($context["menu_blockname"] ?? null), 6 => ($context["item_base_class"] ?? null), 7 => ($context["item_modifiers"] ?? null), 8 => ($context["item_blockname"] ?? null)), "method"), "html", null, true));
            echo "
    ";
        }
        // line 35
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 35,  183 => 33,  180 => 32,  177 => 31,  175 => 29,  174 => 28,  173 => 27,  172 => 26,  170 => 25,  167 => 24,  126 => 18,  85 => 22,  84 => 21,  83 => 20,  82 => 19,  81 => 18,  78 => 17,  71 => 15,  67 => 14,  63 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@molecules/menus/_menu-item.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/02-molecules/menus/_menu-item.twig");
    }
}

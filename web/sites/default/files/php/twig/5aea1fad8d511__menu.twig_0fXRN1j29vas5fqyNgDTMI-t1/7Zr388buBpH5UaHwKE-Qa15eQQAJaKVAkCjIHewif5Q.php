<?php

/* @molecules/menus/_menu.twig */
class __TwigTemplate_314645520acab7aee779e4ac81d7d3993fb32e19a7e346f0bcfe914126f3d52b extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "set" => 34, "embed" => 43);
        $filters = array("default" => 34, "merge" => 39);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'embed'),
                array('default', 'merge'),
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_class"] ?? null), ($context["menu_modifiers"] ?? null), ($context["menu_blockname"] ?? null), ($context["item_base_class"] ?? null), ($context["item_modifiers"] ?? null), ($context["item_blockname"] ?? null))));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_class__ = null, $__menu_modifiers__ = null, $__menu_blockname__ = null, $__item_base_class__ = null, $__item_modifiers__ = null, $__item_blockname__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_class" => $__menu_class__,
            "menu_modifiers" => $__menu_modifiers__,
            "menu_blockname" => $__menu_blockname__,
            "item_base_class" => $__item_base_class__,
            "item_modifiers" => $__item_modifiers__,
            "item_blockname" => $__item_blockname__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "
    ";
                // line 34
                echo "    ";
                $context["menu_class"] = ((array_key_exists("menu_class", $context)) ? (_twig_default_filter(($context["menu_class"] ?? null), "menu")) : ("menu"));
                // line 35
                echo "    ";
                if ( !($context["menu_modifiers"] ?? null)) {
                    // line 36
                    echo "      ";
                    $context["menu_modifiers"] = array();
                    // line 37
                    echo "    ";
                }
                // line 38
                echo "    ";
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 39
                    echo "      ";
                    $context["menu_modifiers"] = twig_array_merge(($context["menu_modifiers"] ?? null), array(0 => "sub", 1 => ("sub-" . ($context["menu_level"] ?? null))));
                    // line 40
                    echo "    ";
                }
                // line 41
                echo "
    ";
                // line 43
                echo "    ";
                $this->loadTemplate("@molecules/menus/_menu.twig", "@molecules/menus/_menu.twig", 43, "888163899")->display(array_merge($context, array("ul_base_class" =>                 // line 44
($context["menu_class"] ?? null), "ul_modifiers" =>                 // line 45
($context["menu_modifiers"] ?? null), "ul_blockname" =>                 // line 46
($context["menu_blockname"] ?? null))));
                // line 58
                echo "  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 58,  112 => 46,  111 => 45,  110 => 44,  108 => 43,  105 => 41,  102 => 40,  99 => 39,  96 => 38,  93 => 37,  90 => 36,  87 => 35,  84 => 34,  81 => 32,  78 => 31,  75 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@molecules/menus/_menu.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/02-molecules/menus/_menu.twig");
    }
}


/* @molecules/menus/_menu.twig */
class __TwigTemplate_314645520acab7aee779e4ac81d7d3993fb32e19a7e346f0bcfe914126f3d52b_888163899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 43
        $this->parent = $this->loadTemplate("@atoms/03-lists/00-ul.twig", "@molecules/menus/_menu.twig", 43);
        $this->blocks = array(
            'list_content' => array($this, 'block_list_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@atoms/03-lists/00-ul.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 49, "include" => 50);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'include'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 48
    public function block_list_content($context, array $blocks = array())
    {
        // line 49
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            echo "          ";
            $this->loadTemplate("@molecules/menus/_menu-item.twig", "@molecules/menus/_menu.twig", 50)->display(array_merge($context, array("li_base_class" =>             // line 51
($context["item_base_class"] ?? null), "li_modifiers" =>             // line 52
($context["item_modifiers"] ?? null), "li_blockname" =>             // line 53
($context["item_blockname"] ?? null))));
            // line 55
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 56,  235 => 55,  233 => 53,  232 => 52,  231 => 51,  229 => 50,  211 => 49,  208 => 48,  167 => 43,  114 => 58,  112 => 46,  111 => 45,  110 => 44,  108 => 43,  105 => 41,  102 => 40,  99 => 39,  96 => 38,  93 => 37,  90 => 36,  87 => 35,  84 => 34,  81 => 32,  78 => 31,  75 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@molecules/menus/_menu.twig", "/app/web/themes/custom/wvuonline2018/components/_patterns/02-molecules/menus/_menu.twig");
    }
}

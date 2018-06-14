<?php

/* themes/contrib/material_admin/templates/navigation/links--dropbutton.html.twig */
class __TwigTemplate_0ed39c69209c71e1d1583b24cb46f168a8fd46774ebec31e404914360444c5f8 extends Twig_Template
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
        $tags = array("set" => 35, "if" => 37, "trans" => 54, "for" => 59);
        $filters = array("length" => 52);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'for'),
                array('length'),
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

        // line 34
        echo "
";
        // line 35
        $context["manage_btn_classses"] = "dropdown-button btn grey lighten-3 grey-text text-darken-2";
        // line 36
        echo "  
";
        // line 37
        if (($this->getAttribute(($context["attributes"] ?? null), "hasClass", array(0 => "views-ui-settings-bucket-operations"), "method") || ($this->getAttribute(($context["attributes"] ?? null), "id", array()) == "views-display-extra-actions"))) {
            // line 38
            echo "  ";
            $context["btn_classses"] = "dropdown-button ellipsis-icon btn btn-flat darken-3 text-darken-2";
        } elseif ($this->getAttribute(        // line 39
($context["attributes"] ?? null), "hasClass", array(0 => "views-bulk-form-dropdown"), "method")) {
            // line 40
            echo "  ";
            $context["btn_classses"] = "dropdown-button btn btn-floating pulse";
        } else {
            // line 42
            echo "  ";
            $context["btn_classses"] = "dropdown-button ellipsis-icon btn grey lighten-3 grey-text text-darken-2";
        }
        // line 44
        if (($context["links"] ?? null)) {
            // line 45
            if (($context["heading"] ?? null)) {
                // line 46
                if ($this->getAttribute(($context["heading"] ?? null), "level", array())) {
                    // line 47
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "level", array()), "html", null, true));
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "text", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "level", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 49
                    echo "<h2";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading"] ?? null), "text", array()), "html", null, true));
                    echo "</h2>";
                }
            }
            // line 52
            if ((twig_length_filter($this->env, ($context["links"] ?? null)) > 1)) {
                // line 53
                if ($this->getAttribute(($context["links"] ?? null), "publish", array())) {
                    // line 54
                    echo "<a class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["manage_btn_classses"] ?? null), "html", null, true));
                    echo "\" href=\"#\" data-constrainWidth=\"0\">";
                    echo t("MANAGE", array());
                    echo "</a>";
                } else {
                    // line 56
                    echo "<a class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["btn_classses"] ?? null), "html", null, true));
                    echo "\" href=\"#\" data-constrainWidth=\"0\"><i class=\"material-icons\" aria-hidden=\"true\">more_vert</i></a>";
                }
                // line 58
                echo "<ul";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "dropdown-content"), "method"), "html", null, true));
                echo ">";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 60
                    echo "<li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 61
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 62
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                    } elseif ($this->getAttribute(                    // line 63
$context["item"], "text_attributes", array())) {
                        // line 64
                        echo "<span";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                        echo "</span>";
                    } else {
                        // line 66
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    }
                    // line 68
                    echo "</li>
      <li class=\"divider\"></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "</ul>";
            } else {
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 74
                    echo "<li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "single-btn-wrapper"), "method"), "html", null, true));
                    echo ">";
                    // line 75
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 76
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                    } elseif ($this->getAttribute(                    // line 77
$context["item"], "text_attributes", array())) {
                        // line 78
                        echo "<span";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                        echo "</span>";
                    } else {
                        // line 80
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    }
                    // line 82
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/navigation/links--dropbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 82,  165 => 80,  158 => 78,  156 => 77,  154 => 76,  152 => 75,  148 => 74,  144 => 73,  141 => 71,  134 => 68,  131 => 66,  124 => 64,  122 => 63,  120 => 62,  118 => 61,  114 => 60,  110 => 59,  106 => 58,  101 => 56,  94 => 54,  92 => 53,  90 => 52,  82 => 49,  72 => 47,  70 => 46,  68 => 45,  66 => 44,  62 => 42,  58 => 40,  56 => 39,  53 => 38,  51 => 37,  48 => 36,  46 => 35,  43 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/navigation/links--dropbutton.html.twig", "/app/web/themes/contrib/material_admin/templates/navigation/links--dropbutton.html.twig");
    }
}

<?php

/* core/themes/stable/templates/content-edit/filter-tips.html.twig */
class __TwigTemplate_654404146e1fc80756390e47964abf83cf6ad0540134f3fa794ecf1dd2201b33 extends Twig_Template
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
        $tags = array("if" => 19, "for" => 24);
        $filters = array("t" => 20, "length" => 23);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('t', 'length'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 20
            echo "  <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Text Formats")));
            echo "</h2>
";
        }
        // line 22
        echo "
";
        // line 23
        if (twig_length_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null))) {
            // line 24
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 25
                echo "
    ";
                // line 26
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 27
                    echo "      <div";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                    echo ">
      <h3>";
                    // line 28
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tip"], "name", array()), "html", null, true));
                    echo "</h3>
    ";
                }
                // line 30
                echo "
    ";
                // line 31
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", array()))) {
                    // line 32
                    echo "      <ul>
      ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 34
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tip"], "attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "tip", array()), "html", null, true));
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "      </ul>
    ";
                }
                // line 38
                echo "
    ";
                // line 39
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 40
                    echo "      </div>
    ";
                }
                // line 42
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content-edit/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  108 => 40,  106 => 39,  103 => 38,  99 => 36,  88 => 34,  84 => 33,  81 => 32,  79 => 31,  76 => 30,  71 => 28,  66 => 27,  64 => 26,  61 => 25,  56 => 24,  54 => 23,  51 => 22,  45 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a set of filter tips.*/
/*  **/
/*  * Available variables:*/
/*  * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'*/
/*  *   (only used when 'long' is TRUE) for each filter in one or more text*/
/*  *   formats.*/
/*  * - long: A flag indicating whether the passed-in filter tips contain extended*/
/*  *   explanations, i.e. intended to be output on the path 'filter/tips'*/
/*  *   (TRUE), or are in a short format, i.e. suitable to be displayed below a*/
/*  *   form element. Defaults to FALSE.*/
/*  * - multiple: A flag indicating there is more than one filter tip.*/
/*  **/
/*  * @see template_preprocess_filter_tips()*/
/*  *//* */
/* #}*/
/* {% if multiple %}*/
/*   <h2>{{ 'Text Formats'|t }}</h2>*/
/* {% endif %}*/
/* */
/* {% if tips|length %}*/
/*   {% for name, tip in tips %}*/
/* */
/*     {% if multiple %}*/
/*       <div{{ attributes }}>*/
/*       <h3>{{ tip.name }}</h3>*/
/*     {% endif %}*/
/* */
/*     {% if tip.list|length %}*/
/*       <ul>*/
/*       {% for item in tip.list %}*/
/*         <li{{ tip.attributes }}>{{ item.tip }}</li>*/
/*       {% endfor %}*/
/*       </ul>*/
/*     {% endif %}*/
/* */
/*     {% if multiple %}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*   {% endfor %}*/
/* {% endif %}*/
/* */

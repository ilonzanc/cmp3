<?php

/* themes/nexus/templates/breadcrumb.html.twig */
class __TwigTemplate_d509c58a26670687a002c8a0831591e1aa9694d5cde7e0a462a612693435482c extends Twig_Template
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
        $tags = array("if" => 12, "for" => 16);
        $filters = array("t" => 15);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('t'),
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

        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <div id=\"breadcrumbs\">
    <nav class =\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
      <h2 class=\"visually-hidden\">";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Breadcrumb")));
            echo "</h2>
      ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "        <li>
          ";
                // line 18
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 19
                    echo "            <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "</a>
          ";
                } else {
                    // line 21
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "
          ";
                }
                // line 23
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </nav>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  76 => 23,  70 => 21,  62 => 19,  60 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 13,  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a breadcrumb trail.*/
/*  **/
/*  * Available variables:*/
/*  * - breadcrumb: Breadcrumb trail items.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if breadcrumb %}*/
/*   <div id="breadcrumbs">*/
/*     <nav class ="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">*/
/*       <h2 class="visually-hidden">{{ 'Breadcrumb'|t }}</h2>*/
/*       {% for item in breadcrumb %}*/
/*         <li>*/
/*           {% if item.url %}*/
/*             <a href="{{ item.url }}">{{ item.text }}</a>*/
/*           {% else %}*/
/*             {{ item.text }}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </nav>*/
/*   </div>*/
/* {% endif %}*/
/* */

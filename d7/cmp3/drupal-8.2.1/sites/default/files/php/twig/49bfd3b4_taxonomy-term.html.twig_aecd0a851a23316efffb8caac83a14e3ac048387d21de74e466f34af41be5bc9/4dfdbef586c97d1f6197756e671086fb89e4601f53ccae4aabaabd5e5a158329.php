<?php

/* core/themes/stable/templates/content/taxonomy-term.html.twig */
class __TwigTemplate_fb3c0e3af60ed0d32d184b4e514b38d4dd3e7bfb1e819cb27a4f5d5f36df7e96 extends Twig_Template
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
        $tags = array("if" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 26
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 28
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 29
            echo "    <h2><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo "</a></h2>
  ";
        }
        // line 31
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  62 => 31,  54 => 29,  52 => 28,  48 => 27,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a taxonomy term.*/
/*  **/
/*  * Available variables:*/
/*  * - url: URL of the current term.*/
/*  * - name: Name of the current term.*/
/*  * - content: Items for the content of the term (fields and description).*/
/*  *   Use 'content' to print them all, or print a subset such as*/
/*  *   'content.description'. Use the following code to exclude the*/
/*  *   printing of a given child element:*/
/*  *   @code*/
/*  *   {{ content|without('description') }}*/
/*  *   @endcode*/
/*  * - attributes: HTML attributes for the wrapper.*/
/*  * - page: Flag for the full page state.*/
/*  * - term: The taxonomy term entity, including:*/
/*  *   - id: The ID of the taxonomy term.*/
/*  *   - bundle: Machine name of the current vocabulary.*/
/*  * - view_mode: View mode, e.g. 'full', 'teaser', etc.*/
/*  **/
/*  * @see template_preprocess_taxonomy_term()*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {{ title_prefix }}*/
/*   {% if not page %}*/
/*     <h2><a href="{{ url }}">{{ name }}</a></h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {{ content }}*/
/* </div>*/
/* */

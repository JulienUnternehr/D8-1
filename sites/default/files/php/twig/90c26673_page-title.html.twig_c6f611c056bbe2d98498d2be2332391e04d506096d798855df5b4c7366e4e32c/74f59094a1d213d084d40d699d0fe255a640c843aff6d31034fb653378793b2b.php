<?php

/* themes/bootstrap/templates/system/page-title.html.twig */
class __TwigTemplate_d42493b2c1fd69617ed42c83bf6d83ded3a96bc368c4779921e5c2f096c4f930 extends Twig_Template
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
        $__internal_f5bb1a46867e89a13d770905ee2f44eebce65bb4fa9e6ee2685555fa63857636 = $this->env->getExtension("native_profiler");
        $__internal_f5bb1a46867e89a13d770905ee2f44eebce65bb4fa9e6ee2685555fa63857636->enter($__internal_f5bb1a46867e89a13d770905ee2f44eebce65bb4fa9e6ee2685555fa63857636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/page-title.html.twig"));

        $tags = array("if" => 19);
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

        // line 19
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 20
            echo "  <h1";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "page-header"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
";
        }
        
        $__internal_f5bb1a46867e89a13d770905ee2f44eebce65bb4fa9e6ee2685555fa63857636->leave($__internal_f5bb1a46867e89a13d770905ee2f44eebce65bb4fa9e6ee2685555fa63857636_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for page titles.*/
/*  **/
/*  * Available variables:*/
/*  * - title_attributes: HTML attributes for the page title element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page_title()*/
/*  *//* */
/* #}*/
/* {% if title %}*/
/*   <h1{{ title_attributes.addClass('page-header') }}>{{ title }}</h1>*/
/* {% endif %}*/
/* */

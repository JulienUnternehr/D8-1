<?php

/* themes/bootstrap/templates/menu/menu-local-task.html.twig */
class __TwigTemplate_1084eea9ca1947c73e47b7358bcd66cbf86e5dd6a68570273c69eb2d7f217a7e extends Twig_Template
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
        $__internal_a9ffa2902fea4608c818dec0b7796e3a75d1ae3fc4f571d28ca79e14ef68ab1a = $this->env->getExtension("native_profiler");
        $__internal_a9ffa2902fea4608c818dec0b7796e3a75d1ae3fc4f571d28ca79e14ef68ab1a->enter($__internal_a9ffa2902fea4608c818dec0b7796e3a75d1ae3fc4f571d28ca79e14ef68ab1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/menu/menu-local-task.html.twig"));

        $tags = array("set" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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
        $context["classes"] = array(0 => ((        // line 20
(isset($context["is_active"]) ? $context["is_active"] : null)) ? ("active") : ("")));
        // line 22
        echo "<li";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</li>
";
        
        $__internal_a9ffa2902fea4608c818dec0b7796e3a75d1ae3fc4f571d28ca79e14ef68ab1a->leave($__internal_a9ffa2902fea4608c818dec0b7796e3a75d1ae3fc4f571d28ca79e14ef68ab1a_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/menu/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 22,  47 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a local task link.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper element.*/
/*  * - is_active: Whether the task item is an active tab.*/
/*  * - link: A rendered link element.*/
/*  **/
/*  * Note: This template renders the content for each task item in*/
/*  * menu-local-tasks.html.twig.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_menu_local_task()*/
/*  *//* */
/* #}*/
/* {% set classes = [*/
/*   is_active ? 'active',*/
/* ] %}*/
/* <li{{ attributes.addClass(classes) }}>{{ link }}</li>*/
/* */

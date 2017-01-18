<?php

/* themes/bootstrap/templates/input/datetime-form.html.twig */
class __TwigTemplate_a84284f2db44dd9557cf344d78d703626673c34716bb7d6e0c482c6c5a622f93 extends Twig_Template
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
        $__internal_2c186faff5004eea03f93f6d4d3f2e283c24df5e4aee2f5a5ee4761b8e3c717b = $this->env->getExtension("native_profiler");
        $__internal_2c186faff5004eea03f93f6d4d3f2e283c24df5e4aee2f5a5ee4761b8e3c717b->enter($__internal_2c186faff5004eea03f93f6d4d3f2e283c24df5e4aee2f5a5ee4761b8e3c717b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/datetime-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "container-inline", 1 => "form-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_2c186faff5004eea03f93f6d4d3f2e283c24df5e4aee2f5a5ee4761b8e3c717b->leave($__internal_2c186faff5004eea03f93f6d4d3f2e283c24df5e4aee2f5a5ee4761b8e3c717b_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a datetime form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the datetime form element.*/
/*  * - content: The datelist form element to be output.*/
/*  **/
/*  * @see template_preprocess_datetime_form()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('container-inline', 'form-inline') }}>*/
/*   {{ content }}*/
/* </div>*/
/* */

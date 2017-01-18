<?php

/* themes/bootstrap/templates/input/input--button--dropdown.html.twig */
class __TwigTemplate_bf694d059478d7a4b5563b8ee0efd6fdcc7192e1b5a8600948b269dfbec6ee0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input--button.html.twig", "themes/bootstrap/templates/input/input--button--dropdown.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input--button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a71ccbfe7c5e77ea366fbe16d2971fd6f260342550a3bab3d2d9d71b7710a01 = $this->env->getExtension("native_profiler");
        $__internal_6a71ccbfe7c5e77ea366fbe16d2971fd6f260342550a3bab3d2d9d71b7710a01->enter($__internal_6a71ccbfe7c5e77ea366fbe16d2971fd6f260342550a3bab3d2d9d71b7710a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/input--button--dropdown.html.twig"));

        $tags = array("spaceless" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless'),
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

        // line 25
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a71ccbfe7c5e77ea366fbe16d2971fd6f260342550a3bab3d2d9d71b7710a01->leave($__internal_6a71ccbfe7c5e77ea366fbe16d2971fd6f260342550a3bab3d2d9d71b7710a01_prof);

    }

    // line 26
    public function block_input($context, array $blocks = array())
    {
        $__internal_801427fa96eb77e383c0f8b6ca512f4297c8dd38c64c0dc76eefcf782cce499e = $this->env->getExtension("native_profiler");
        $__internal_801427fa96eb77e383c0f8b6ca512f4297c8dd38c64c0dc76eefcf782cce499e->enter($__internal_801427fa96eb77e383c0f8b6ca512f4297c8dd38c64c0dc76eefcf782cce499e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 27
        echo "    <a href=\"#\" data-target=\"dropdown-button\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</a>
    <button";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "hidden"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</button>
    ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_801427fa96eb77e383c0f8b6ca512f4297c8dd38c64c0dc76eefcf782cce499e->leave($__internal_801427fa96eb77e383c0f8b6ca512f4297c8dd38c64c0dc76eefcf782cce499e_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/input--button--dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  73 => 28,  68 => 27,  62 => 26,  55 => 1,  52 => 25,  11 => 1,);
    }
}
/* {% extends "input--button.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme suggestion for "button__dropdown" input form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  * - icon: An icon.*/
/*  * - icon_only: Flag to display only the icon and not the label.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  * - label: button label.*/
/*  * - prefix: Markup to display before the input element.*/
/*  * - suffix: Markup to display after the input element.*/
/*  * - type: The type of input.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\InputButton*/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\Input*/
/*  * @see template_preprocess_input()*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   {% block input %}*/
/*     <a href="#" data-target="dropdown-button">{{ label }}</a>*/
/*     <button{{ attributes.addClass('hidden') }}>{{ label }}</button>*/
/*     {{ children }}*/
/*   {% endblock %}*/
/* {% endspaceless %}*/
/* */

<?php

/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ styles_text }}"><span class="ckeditor-button-dropdown">{{ styles_text }}<span class="ckeditor-button-arrow"></span></span></a> */
class __TwigTemplate_abdb5ffac7e1a57506503cd91a4e46cb549570fd842017c73481bcb01f49f72f extends Twig_Template
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
        $__internal_3847200df1b8b25c4033b7a3fbc19aa37c3562c6ee2d959876ca3c1ba450d162 = $this->env->getExtension("native_profiler");
        $__internal_3847200df1b8b25c4033b7a3fbc19aa37c3562c6ee2d959876ca3c1ba450d162->enter($__internal_3847200df1b8b25c4033b7a3fbc19aa37c3562c6ee2d959876ca3c1ba450d162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<a href=\"#\" role=\"button\" aria-label=\"{{ styles_text }}\"><span class=\"ckeditor-button-dropdown\">{{ styles_text }}<span class=\"ckeditor-button-arrow\"></span></span></a>"));

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

        // line 1
        echo "<a href=\"#\" role=\"button\" aria-label=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["styles_text"]) ? $context["styles_text"] : null), "html", null, true));
        echo "\"><span class=\"ckeditor-button-dropdown\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["styles_text"]) ? $context["styles_text"] : null), "html", null, true));
        echo "<span class=\"ckeditor-button-arrow\"></span></span></a>";
        
        $__internal_3847200df1b8b25c4033b7a3fbc19aa37c3562c6ee2d959876ca3c1ba450d162->leave($__internal_3847200df1b8b25c4033b7a3fbc19aa37c3562c6ee2d959876ca3c1ba450d162_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" role=\"button\" aria-label=\"{{ styles_text }}\"><span class=\"ckeditor-button-dropdown\">{{ styles_text }}<span class=\"ckeditor-button-arrow\"></span></span></a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ styles_text }}"><span class="ckeditor-button-dropdown">{{ styles_text }}<span class="ckeditor-button-arrow"></span></span></a>*/

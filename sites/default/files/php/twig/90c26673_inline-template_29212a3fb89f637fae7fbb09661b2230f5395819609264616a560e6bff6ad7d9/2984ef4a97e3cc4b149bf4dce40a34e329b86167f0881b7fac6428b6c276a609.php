<?php

/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ format_text }}"><span class="ckeditor-button-dropdown">{{ format_text }}<span class="ckeditor-button-arrow"></span></span></a> */
class __TwigTemplate_a3bcb4a76d98baecb30378c1867c0aea75d18cf970124986d8db5289253f7bbf extends Twig_Template
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
        $__internal_9e280b00531fcc4b644eed13004221646c00ff0f40732bb916c0f1358ac03fdd = $this->env->getExtension("native_profiler");
        $__internal_9e280b00531fcc4b644eed13004221646c00ff0f40732bb916c0f1358ac03fdd->enter($__internal_9e280b00531fcc4b644eed13004221646c00ff0f40732bb916c0f1358ac03fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<a href=\"#\" role=\"button\" aria-label=\"{{ format_text }}\"><span class=\"ckeditor-button-dropdown\">{{ format_text }}<span class=\"ckeditor-button-arrow\"></span></span></a>"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["format_text"]) ? $context["format_text"] : null), "html", null, true));
        echo "\"><span class=\"ckeditor-button-dropdown\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["format_text"]) ? $context["format_text"] : null), "html", null, true));
        echo "<span class=\"ckeditor-button-arrow\"></span></span></a>";
        
        $__internal_9e280b00531fcc4b644eed13004221646c00ff0f40732bb916c0f1358ac03fdd->leave($__internal_9e280b00531fcc4b644eed13004221646c00ff0f40732bb916c0f1358ac03fdd_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" role=\"button\" aria-label=\"{{ format_text }}\"><span class=\"ckeditor-button-dropdown\">{{ format_text }}<span class=\"ckeditor-button-arrow\"></span></span></a>";
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
/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ format_text }}"><span class="ckeditor-button-dropdown">{{ format_text }}<span class="ckeditor-button-arrow"></span></span></a>*/

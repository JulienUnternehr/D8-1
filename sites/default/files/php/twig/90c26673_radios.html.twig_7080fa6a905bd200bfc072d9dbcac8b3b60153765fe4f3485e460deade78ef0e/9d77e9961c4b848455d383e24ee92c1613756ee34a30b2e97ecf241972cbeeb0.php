<?php

/* core/themes/classy/templates/form/radios.html.twig */
class __TwigTemplate_ecd85d919370133f1909d3a215cc858c2b7e929f776b882083c96f7e3be6fccd extends Twig_Template
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
        $__internal_11826bff3b1cb780a03f0f4d2f0beeedc52b4bd2d5966c0b733d93e8c5ad5662 = $this->env->getExtension("native_profiler");
        $__internal_11826bff3b1cb780a03f0f4d2f0beeedc52b4bd2d5966c0b733d93e8c5ad5662->enter($__internal_11826bff3b1cb780a03f0f4d2f0beeedc52b4bd2d5966c0b733d93e8c5ad5662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/radios.html.twig"));

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

        // line 13
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-radios"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_11826bff3b1cb780a03f0f4d2f0beeedc52b4bd2d5966c0b733d93e8c5ad5662->leave($__internal_11826bff3b1cb780a03f0f4d2f0beeedc52b4bd2d5966c0b733d93e8c5ad5662_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'radios' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered radios.*/
/*  **/
/*  * @see template_preprocess_radios()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('form-radios') }}>{{ children }}</div>*/
/* */

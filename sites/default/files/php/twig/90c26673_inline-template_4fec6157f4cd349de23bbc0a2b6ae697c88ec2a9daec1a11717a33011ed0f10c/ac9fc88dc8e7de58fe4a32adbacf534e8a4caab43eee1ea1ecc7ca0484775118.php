<?php

/* {# inline_template_start #}{{ value|nl2br }} */
class __TwigTemplate_d3e79bd6029fd1ab1d50dd676e1f6555a2880e7bdc0733b6b806b540b4a45fd4 extends Twig_Template
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
        $__internal_0b9c31060e14f0ada626d74821a3dd818ac458d14075446b34169d8d93d84c37 = $this->env->getExtension("native_profiler");
        $__internal_0b9c31060e14f0ada626d74821a3dd818ac458d14075446b34169d8d93d84c37->enter($__internal_0b9c31060e14f0ada626d74821a3dd818ac458d14075446b34169d8d93d84c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ value|nl2br }}"));

        $tags = array();
        $filters = array("nl2br" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('nl2br'),
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(nl2br($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true)));
        
        $__internal_0b9c31060e14f0ada626d74821a3dd818ac458d14075446b34169d8d93d84c37->leave($__internal_0b9c31060e14f0ada626d74821a3dd818ac458d14075446b34169d8d93d84c37_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ value|nl2br }}";
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
/* {# inline_template_start #}{{ value|nl2br }}*/

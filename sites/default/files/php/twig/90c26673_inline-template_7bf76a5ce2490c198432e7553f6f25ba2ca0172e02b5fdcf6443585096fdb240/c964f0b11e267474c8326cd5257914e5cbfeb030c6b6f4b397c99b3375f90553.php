<?php

/* {# inline_template_start #}{{ info|safe_join(" - ") }} */
class __TwigTemplate_329b4cd9f772bc578f09cb702daee2d6e81c3f7ff7ff61bb82f474d8555a91ef extends Twig_Template
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
        $__internal_aa1e861c4364582aec858c670215db193d0e061f74a7c8ed318b7c194a7ac385 = $this->env->getExtension("native_profiler");
        $__internal_aa1e861c4364582aec858c670215db193d0e061f74a7c8ed318b7c194a7ac385->enter($__internal_aa1e861c4364582aec858c670215db193d0e061f74a7c8ed318b7c194a7ac385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ info|safe_join(\" - \") }}"));

        $tags = array();
        $filters = array("safe_join" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('safe_join'),
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["info"]) ? $context["info"] : null), " - ")));
        
        $__internal_aa1e861c4364582aec858c670215db193d0e061f74a7c8ed318b7c194a7ac385->leave($__internal_aa1e861c4364582aec858c670215db193d0e061f74a7c8ed318b7c194a7ac385_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ info|safe_join(\" - \") }}";
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
/* {# inline_template_start #}{{ info|safe_join(" - ") }}*/

<?php

/* {# inline_template_start #}<div class="field-plugin-summary">{{ summary|safe_join("<br />") }}</div> */
class __TwigTemplate_f821c77039c217f90bf7a8f976486c27a1fbd3d077f048bd0be538f78a56fbe7 extends Twig_Template
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
        $__internal_330a62a3681a7303d6476acfd28d6a3047d135961f70b912aed5a6b33ed521ab = $this->env->getExtension("native_profiler");
        $__internal_330a62a3681a7303d6476acfd28d6a3047d135961f70b912aed5a6b33ed521ab->enter($__internal_330a62a3681a7303d6476acfd28d6a3047d135961f70b912aed5a6b33ed521ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<div class=\"field-plugin-summary\">{{ summary|safe_join(\"<br />\") }}</div>"));

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
        echo "<div class=\"field-plugin-summary\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["summary"]) ? $context["summary"] : null), "<br />")));
        echo "</div>";
        
        $__internal_330a62a3681a7303d6476acfd28d6a3047d135961f70b912aed5a6b33ed521ab->leave($__internal_330a62a3681a7303d6476acfd28d6a3047d135961f70b912aed5a6b33ed521ab_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"field-plugin-summary\">{{ summary|safe_join(\"<br />\") }}</div>";
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
/* {# inline_template_start #}<div class="field-plugin-summary">{{ summary|safe_join("<br />") }}</div>*/

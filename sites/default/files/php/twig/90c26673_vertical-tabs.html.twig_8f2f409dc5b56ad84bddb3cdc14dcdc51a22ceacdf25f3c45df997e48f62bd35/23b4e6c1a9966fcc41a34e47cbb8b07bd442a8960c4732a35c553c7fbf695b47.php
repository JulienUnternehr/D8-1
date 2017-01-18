<?php

/* core/modules/system/templates/vertical-tabs.html.twig */
class __TwigTemplate_15d4614a600a953f2ba8367d16b7b8c90121b7c52d15a5322c510b19ff207159 extends Twig_Template
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
        $__internal_8fd97a6bb5bf21a428b75375b8907efa44c656a06bbd702c83bef22d013c3154 = $this->env->getExtension("native_profiler");
        $__internal_8fd97a6bb5bf21a428b75375b8907efa44c656a06bbd702c83bef22d013c3154->enter($__internal_8fd97a6bb5bf21a428b75375b8907efa44c656a06bbd702c83bef22d013c3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/vertical-tabs.html.twig"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "data-vertical-tabs-panes", 1 => true), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_8fd97a6bb5bf21a428b75375b8907efa44c656a06bbd702c83bef22d013c3154->leave($__internal_8fd97a6bb5bf21a428b75375b8907efa44c656a06bbd702c83bef22d013c3154_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/vertical-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for vertical tabs.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered tabs.*/
/*  **/
/*  * @see template_preprocess_vertical_tabs()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes.setAttribute('data-vertical-tabs-panes', TRUE) }}>{{ children }}</div>*/
/* */

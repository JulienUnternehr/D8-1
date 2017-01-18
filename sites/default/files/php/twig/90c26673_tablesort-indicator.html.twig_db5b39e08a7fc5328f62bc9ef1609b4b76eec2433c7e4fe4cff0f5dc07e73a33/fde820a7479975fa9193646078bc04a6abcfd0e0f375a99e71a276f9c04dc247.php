<?php

/* core/modules/system/templates/tablesort-indicator.html.twig */
class __TwigTemplate_d411379f5d60746815d61f3443c9f824c485c1dcdf81a1a03da5d1440c5eb22f extends Twig_Template
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
        $__internal_331d2c7cb50ef8f0dedd7d903f22a5fe8bb490f26f31cdf050646b0173bb3e58 = $this->env->getExtension("native_profiler");
        $__internal_331d2c7cb50ef8f0dedd7d903f22a5fe8bb490f26f31cdf050646b0173bb3e58->enter($__internal_331d2c7cb50ef8f0dedd7d903f22a5fe8bb490f26f31cdf050646b0173bb3e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/tablesort-indicator.html.twig"));

        $tags = array("set" => 13, "if" => 20);
        $filters = array("t" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
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
        $context["classes"] = array(0 => "tablesort", 1 => ("tablesort--" .         // line 15
(isset($context["style"]) ? $context["style"] : null)));
        // line 18
        echo "<span";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <span class=\"visually-hidden\">
    ";
        // line 20
        if (((isset($context["style"]) ? $context["style"] : null) == "asc")) {
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sort ascending")));
            echo "
    ";
        } else {
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sort descending")));
            echo "
    ";
        }
        // line 25
        echo "  </span>
</span>
";
        
        $__internal_331d2c7cb50ef8f0dedd7d903f22a5fe8bb490f26f31cdf050646b0173bb3e58->leave($__internal_331d2c7cb50ef8f0dedd7d903f22a5fe8bb490f26f31cdf050646b0173bb3e58_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  62 => 23,  57 => 21,  55 => 20,  49 => 18,  47 => 15,  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for displaying a tablesort indicator.*/
/*  **/
/*  * Available variables:*/
/*  * - style: Either 'asc' or 'desc', indicating the sorting direction.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'tablesort',*/
/*     'tablesort--' ~ style,*/
/*   ]*/
/* %}*/
/* <span{{ attributes.addClass(classes) }}>*/
/*   <span class="visually-hidden">*/
/*     {% if style == 'asc' -%}*/
/*       {{ 'Sort ascending'|t }}*/
/*     {% else -%}*/
/*       {{ 'Sort descending'|t }}*/
/*     {% endif %}*/
/*   </span>*/
/* </span>*/
/* */

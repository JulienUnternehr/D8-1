<?php

/* themes/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_e9d4be07d2b73719754af899f40fb7cd299cb83373d048d793bf7880aa180060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2969ccc0afb0a95dd0ae1146df58c7e066a700b08067944b6c7e61d7dc0e4b9 = $this->env->getExtension("native_profiler");
        $__internal_d2969ccc0afb0a95dd0ae1146df58c7e066a700b08067944b6c7e61d7dc0e4b9->enter($__internal_d2969ccc0afb0a95dd0ae1146df58c7e066a700b08067944b6c7e61d7dc0e4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 11);
        $filters = array("t" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2969ccc0afb0a95dd0ae1146df58c7e066a700b08067944b6c7e61d7dc0e4b9->leave($__internal_d2969ccc0afb0a95dd0ae1146df58c7e066a700b08067944b6c7e61d7dc0e4b9_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3a77610521538236dc6d963a986e56002f2759493727f58d24fc632981758f2 = $this->env->getExtension("native_profiler");
        $__internal_c3a77610521538236dc6d963a986e56002f2759493727f58d24fc632981758f2->enter($__internal_c3a77610521538236dc6d963a986e56002f2759493727f58d24fc632981758f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 12
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_c3a77610521538236dc6d963a986e56002f2759493727f58d24fc632981758f2->leave($__internal_c3a77610521538236dc6d963a986e56002f2759493727f58d24fc632981758f2_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 12,  64 => 11,  58 => 10,  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */

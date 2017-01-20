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
        $__internal_f5d6cf6ddaef5212cca1fd942e5a9a4e22b762303be119899989aefc34abb40d = $this->env->getExtension("native_profiler");
        $__internal_f5d6cf6ddaef5212cca1fd942e5a9a4e22b762303be119899989aefc34abb40d->enter($__internal_f5d6cf6ddaef5212cca1fd942e5a9a4e22b762303be119899989aefc34abb40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig"));

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
        
        $__internal_f5d6cf6ddaef5212cca1fd942e5a9a4e22b762303be119899989aefc34abb40d->leave($__internal_f5d6cf6ddaef5212cca1fd942e5a9a4e22b762303be119899989aefc34abb40d_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_12648c519626fa2533b1e1572bb95e979d033740e29bf9079f14392f60f65e2e = $this->env->getExtension("native_profiler");
        $__internal_12648c519626fa2533b1e1572bb95e979d033740e29bf9079f14392f60f65e2e->enter($__internal_12648c519626fa2533b1e1572bb95e979d033740e29bf9079f14392f60f65e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_12648c519626fa2533b1e1572bb95e979d033740e29bf9079f14392f60f65e2e->leave($__internal_12648c519626fa2533b1e1572bb95e979d033740e29bf9079f14392f60f65e2e_prof);

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

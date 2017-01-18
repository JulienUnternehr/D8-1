<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_b5de7b7b0bd25bb29272fbab805499a81b95c06b91a6c6892a4acc3ad2212883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_955c90cec59b9f6d5ff0160de610a54570b56d6d8b7368e00aaeaf05023e2525 = $this->env->getExtension("native_profiler");
        $__internal_955c90cec59b9f6d5ff0160de610a54570b56d6d8b7368e00aaeaf05023e2525->enter($__internal_955c90cec59b9f6d5ff0160de610a54570b56d6d8b7368e00aaeaf05023e2525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
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
        
        $__internal_955c90cec59b9f6d5ff0160de610a54570b56d6d8b7368e00aaeaf05023e2525->leave($__internal_955c90cec59b9f6d5ff0160de610a54570b56d6d8b7368e00aaeaf05023e2525_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_88c62ffb44c805f3f8d9c5f10a7fcf6fef9912cb57336949bbf8bcee2debac3e = $this->env->getExtension("native_profiler");
        $__internal_88c62ffb44c805f3f8d9c5f10a7fcf6fef9912cb57336949bbf8bcee2debac3e->enter($__internal_88c62ffb44c805f3f8d9c5f10a7fcf6fef9912cb57336949bbf8bcee2debac3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_88c62ffb44c805f3f8d9c5f10a7fcf6fef9912cb57336949bbf8bcee2debac3e->leave($__internal_88c62ffb44c805f3f8d9c5f10a7fcf6fef9912cb57336949bbf8bcee2debac3e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
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

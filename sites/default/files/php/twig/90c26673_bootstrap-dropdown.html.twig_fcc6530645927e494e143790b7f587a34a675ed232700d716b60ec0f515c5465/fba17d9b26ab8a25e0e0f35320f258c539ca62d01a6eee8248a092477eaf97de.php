<?php

/* themes/bootstrap/templates/bootstrap/bootstrap-dropdown.html.twig */
class __TwigTemplate_8fcdf2fa193aa30da95a3f6cec621bd6c112c7932d36c563a74a353201888591 extends Twig_Template
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
        $__internal_57062cd895d6d7c33d1f14922c86d6246fff40b456abd7b4e56672e74f47c917 = $this->env->getExtension("native_profiler");
        $__internal_57062cd895d6d7c33d1f14922c86d6246fff40b456abd7b4e56672e74f47c917->enter($__internal_57062cd895d6d7c33d1f14922c86d6246fff40b456abd7b4e56672e74f47c917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/bootstrap/bootstrap-dropdown.html.twig"));

        $tags = array("set" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 17
        $context["classes"] = array(0 => "btn-group", 1 => (((        // line 19
(isset($context["alignment"]) ? $context["alignment"] : null) == "up")) ? ("dropup") : ("")));
        // line 22
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true));
        echo "
  ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_57062cd895d6d7c33d1f14922c86d6246fff40b456abd7b4e56672e74f47c917->leave($__internal_57062cd895d6d7c33d1f14922c86d6246fff40b456abd7b4e56672e74f47c917_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/bootstrap/bootstrap-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  54 => 23,  49 => 22,  47 => 19,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a Bootstrap Dropdown component.*/
/*  **/
/*  * Available variables:*/
/*  * - alignment: (optional) The alignment of the dropdown menu.*/
/*  * - attributes: An array of HTML attributes intended to be added to the main*/
/*  *   container tag of this template.*/
/*  * - items: The dropdown menu items.*/
/*  * - toggle: The toggle element.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'btn-group',*/
/*     alignment == 'up' ? 'dropup',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ toggle }}*/
/*   {{ items }}*/
/* </div>*/
/* */

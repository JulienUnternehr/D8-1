<?php

/* themes/bootstrap/templates/input/textarea.html.twig */
class __TwigTemplate_a5b47c2a23044abcc67d45fbecbbedb93a6b7e6b000ee927151d491f70e39ef5 extends Twig_Template
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
        $__internal_c3e2e92e3cea2288560a8cfcd49396b2c10bbfa97d77f423869d92bacf95d01b = $this->env->getExtension("native_profiler");
        $__internal_c3e2e92e3cea2288560a8cfcd49396b2c10bbfa97d77f423869d92bacf95d01b->enter($__internal_c3e2e92e3cea2288560a8cfcd49396b2c10bbfa97d77f423869d92bacf95d01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/input/textarea.html.twig"));

        $tags = array("set" => 19);
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

        // line 19
        $context["classes"] = array(0 => "form-textarea", 1 => "form-control", 2 => ((        // line 22
(isset($context["resizable"]) ? $context["resizable"] : null)) ? (("resize-" . (isset($context["resizable"]) ? $context["resizable"] : null))) : ("")), 3 => ((        // line 23
(isset($context["required"]) ? $context["required"] : null)) ? ("required") : ("")));
        // line 26
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "form-textarea-wrapper"), "method"), "html", null, true));
        echo ">
  <textarea";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "</textarea>
</div>
";
        
        $__internal_c3e2e92e3cea2288560a8cfcd49396b2c10bbfa97d77f423869d92bacf95d01b->leave($__internal_c3e2e92e3cea2288560a8cfcd49396b2c10bbfa97d77f423869d92bacf95d01b_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 27,  50 => 26,  48 => 23,  47 => 22,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bootstrap theme implementation for a 'textarea' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - wrapper_attributes: A list of HTML attributes for the wrapper element.*/
/*  * - attributes: A list of HTML attributes for the textarea element.*/
/*  * - resizable: An indicator for whether the textarea is resizable.*/
/*  * - required: An indicator for whether the textarea is required.*/
/*  * - value: The textarea content.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_textarea()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'form-textarea',*/
/*     'form-control',*/
/*     resizable ? 'resize-' ~ resizable,*/
/*     required ? 'required',*/
/*   ]*/
/* %}*/
/* <div{{ wrapper_attributes.addClass('form-textarea-wrapper') }}>*/
/*   <textarea{{ attributes.addClass(classes) }}>{{ value }}</textarea>*/
/* </div>*/
/* */

<?php

/* core/themes/classy/templates/field/image.html.twig */
class __TwigTemplate_3c8fe4864e9f73a9e6a3dfcca09855be1c97ce7615a7aa124aab4872bf02e275 extends Twig_Template
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
        $__internal_22af644020167835b4b5b9f1866b574b2483928ee812e1756579447579c04b2a = $this->env->getExtension("native_profiler");
        $__internal_22af644020167835b4b5b9f1866b574b2483928ee812e1756579447579c04b2a->enter($__internal_22af644020167835b4b5b9f1866b574b2483928ee812e1756579447579c04b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/image.html.twig"));

        $tags = array("set" => 14);
        $filters = array("clean_class" => 15);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 14
        $context["classes"] = array(0 => ((        // line 15
(isset($context["style_name"]) ? $context["style_name"] : null)) ? (("image-style-" . \Drupal\Component\Utility\Html::getClass((isset($context["style_name"]) ? $context["style_name"] : null)))) : ("")));
        // line 18
        echo "<img";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " />
";
        
        $__internal_22af644020167835b4b5b9f1866b574b2483928ee812e1756579447579c04b2a->leave($__internal_22af644020167835b4b5b9f1866b574b2483928ee812e1756579447579c04b2a_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  47 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override of an image.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the img tag.*/
/*  * - style_name: (optional) The name of the image style applied.*/
/*  **/
/*  * @see template_preprocess_image()*/
/*  *//* */
/* #}*/
/* {%*/
/* set classes = [*/
/*   style_name ? 'image-style-' ~ style_name|clean_class,*/
/* ]*/
/* %}*/
/* <img{{ attributes.addClass(classes) }} />*/
/* */

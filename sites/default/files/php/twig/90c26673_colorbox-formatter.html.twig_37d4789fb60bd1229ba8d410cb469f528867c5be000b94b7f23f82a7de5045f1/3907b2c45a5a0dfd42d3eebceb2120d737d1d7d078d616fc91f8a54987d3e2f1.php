<?php

/* modules/colorbox/templates/colorbox-formatter.html.twig */
class __TwigTemplate_fc1ea8135cea61f4efc4dc76451c06921a39fd5806385500c44155e55a193abb extends Twig_Template
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
        $__internal_ec29b92641bb7a8c1944a6e15f1ebe759ff50ebd9e865b5570fab94db6d782aa = $this->env->getExtension("native_profiler");
        $__internal_ec29b92641bb7a8c1944a6e15f1ebe759ff50ebd9e865b5570fab94db6d782aa->enter($__internal_ec29b92641bb7a8c1944a6e15f1ebe759ff50ebd9e865b5570fab94db6d782aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/colorbox/templates/colorbox-formatter.html.twig"));

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

        // line 16
        echo "<a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo "</a>
";
        
        $__internal_ec29b92641bb7a8c1944a6e15f1ebe759ff50ebd9e865b5570fab94db6d782aa->leave($__internal_ec29b92641bb7a8c1944a6e15f1ebe759ff50ebd9e865b5570fab94db6d782aa_prof);

    }

    public function getTemplateName()
    {
        return "modules/colorbox/templates/colorbox-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a formatted colorbox image field.*/
/*  **/
/*  * Available variables:*/
/*  * - image: A collection of image data.*/
/*  * - url: An URL the image can be linked to.*/
/*  * - attributes: Link attributes.*/
/*  **/
/*  * @see template_preprocess_colorbox_formatter()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <a href="{{ url }}"{{ attributes }}>{{ image }}</a>*/
/* */

<?php

/* {# inline_template_start #}<a href="#" class="cke-icon-only cke_{{ direction }}" role="button" title="{{ name }}" aria-label="{{ name }}"><span class="cke_button_icon cke_button__{{ classname }}_icon">{{ name }}</span></a> */
class __TwigTemplate_a69b6adda56a5d8356cc3cafe6107ea084905252d8f966c17330f4b1ab1436eb extends Twig_Template
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
        $__internal_2fcf3e9b9687ecffd0355af2c0b474bed1c997a7f83cb9ee62f7b791d1b52f9d = $this->env->getExtension("native_profiler");
        $__internal_2fcf3e9b9687ecffd0355af2c0b474bed1c997a7f83cb9ee62f7b791d1b52f9d->enter($__internal_2fcf3e9b9687ecffd0355af2c0b474bed1c997a7f83cb9ee62f7b791d1b52f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<a href=\"#\" class=\"cke-icon-only cke_{{ direction }}\" role=\"button\" title=\"{{ name }}\" aria-label=\"{{ name }}\"><span class=\"cke_button_icon cke_button__{{ classname }}_icon\">{{ name }}</span></a>"));

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

        // line 1
        echo "<a href=\"#\" class=\"cke-icon-only cke_";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["direction"]) ? $context["direction"] : null), "html", null, true));
        echo "\" role=\"button\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
        echo "\" aria-label=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
        echo "\"><span class=\"cke_button_icon cke_button__";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["classname"]) ? $context["classname"] : null), "html", null, true));
        echo "_icon\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
        echo "</span></a>";
        
        $__internal_2fcf3e9b9687ecffd0355af2c0b474bed1c997a7f83cb9ee62f7b791d1b52f9d->leave($__internal_2fcf3e9b9687ecffd0355af2c0b474bed1c997a7f83cb9ee62f7b791d1b52f9d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" class=\"cke-icon-only cke_{{ direction }}\" role=\"button\" title=\"{{ name }}\" aria-label=\"{{ name }}\"><span class=\"cke_button_icon cke_button__{{ classname }}_icon\">{{ name }}</span></a>";
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
/* {# inline_template_start #}<a href="#" class="cke-icon-only cke_{{ direction }}" role="button" title="{{ name }}" aria-label="{{ name }}"><span class="cke_button_icon cke_button__{{ classname }}_icon">{{ name }}</span></a>*/

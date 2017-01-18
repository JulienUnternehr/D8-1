<?php

/* {# inline_template_start #}<a href="#" class="cke-icon-only" role="button" title="Language" aria-label="Language"><span class="cke_button_icon cke_button__language_icon">Language</span></a> */
class __TwigTemplate_2f9524a51a3c3b0f204c82dff7525b824f2aca8427663bf9b1461e81530e4443 extends Twig_Template
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
        $__internal_e2a9726c22bd70b681140f75348ff5f8176a4e976e7db8b22adc05454905b7c4 = $this->env->getExtension("native_profiler");
        $__internal_e2a9726c22bd70b681140f75348ff5f8176a4e976e7db8b22adc05454905b7c4->enter($__internal_e2a9726c22bd70b681140f75348ff5f8176a4e976e7db8b22adc05454905b7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<a href=\"#\" class=\"cke-icon-only\" role=\"button\" title=\"Language\" aria-label=\"Language\"><span class=\"cke_button_icon cke_button__language_icon\">Language</span></a>"));

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
        echo "<a href=\"#\" class=\"cke-icon-only\" role=\"button\" title=\"Language\" aria-label=\"Language\"><span class=\"cke_button_icon cke_button__language_icon\">Language</span></a>";
        
        $__internal_e2a9726c22bd70b681140f75348ff5f8176a4e976e7db8b22adc05454905b7c4->leave($__internal_e2a9726c22bd70b681140f75348ff5f8176a4e976e7db8b22adc05454905b7c4_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" class=\"cke-icon-only\" role=\"button\" title=\"Language\" aria-label=\"Language\"><span class=\"cke_button_icon cke_button__language_icon\">Language</span></a>";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<a href="#" class="cke-icon-only" role="button" title="Language" aria-label="Language"><span class="cke_button_icon cke_button__language_icon">Language</span></a>*/

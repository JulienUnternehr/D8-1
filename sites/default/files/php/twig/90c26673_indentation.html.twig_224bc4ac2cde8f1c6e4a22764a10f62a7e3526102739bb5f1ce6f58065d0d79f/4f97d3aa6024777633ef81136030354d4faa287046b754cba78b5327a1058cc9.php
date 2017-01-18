<?php

/* core/themes/stable/templates/admin/indentation.html.twig */
class __TwigTemplate_73e57ecfc586b3b2162c0bf86af8cc4871018db7fec9dfd9ef19e6b1b4964f00 extends Twig_Template
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
        $__internal_ba967e76922182125cd2863c88f3de6becbaa34bb555f7fb9b86d60e0e53e900 = $this->env->getExtension("native_profiler");
        $__internal_ba967e76922182125cd2863c88f3de6becbaa34bb555f7fb9b86d60e0e53e900->enter($__internal_ba967e76922182125cd2863c88f3de6becbaa34bb555f7fb9b86d60e0e53e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/indentation.html.twig"));

        $tags = array("for" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["size"]) ? $context["size"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (((isset($context["size"]) ? $context["size"] : null) > 0)) {
                echo "<div class=\"js-indentation indentation\">&nbsp;</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ba967e76922182125cd2863c88f3de6becbaa34bb555f7fb9b86d60e0e53e900->leave($__internal_ba967e76922182125cd2863c88f3de6becbaa34bb555f7fb9b86d60e0e53e900_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/indentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a set of indentation divs.*/
/*  **/
/*  * These <div> tags are used for drag and drop tables.*/
/*  **/
/*  * Available variables:*/
/*  * - size: Optional. The number of indentations to create.*/
/*  *//* */
/* #}*/
/* {% for i in 1..size if size > 0 %}<div class="js-indentation indentation">&nbsp;</div>{% endfor %}*/
/* */

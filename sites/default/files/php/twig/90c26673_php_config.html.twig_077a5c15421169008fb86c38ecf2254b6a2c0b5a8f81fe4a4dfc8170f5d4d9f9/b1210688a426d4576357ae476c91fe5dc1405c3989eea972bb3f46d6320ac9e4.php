<?php

/* @webprofiler/Collector/php_config.html.twig */
class __TwigTemplate_3a9153ccaa373b198b43ac5570c9e19592fefd9229e959063f7cb6f41c43bb58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b1ec545c1ea6e660812f7d483ddb24d5e2116ab414f1747e2c6e2b2ff8d6fb9 = $this->env->getExtension("native_profiler");
        $__internal_5b1ec545c1ea6e660812f7d483ddb24d5e2116ab414f1747e2c6e2b2ff8d6fb9->enter($__internal_5b1ec545c1ea6e660812f7d483ddb24d5e2116ab414f1747e2c6e2b2ff8d6fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/php_config.html.twig"));

        $tags = array("block" => 1, "set" => 3, "spaceless" => 11);
        $filters = array("t" => 5, "default" => 33);
        $functions = array("url" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'spaceless'),
                array('t', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5b1ec545c1ea6e660812f7d483ddb24d5e2116ab414f1747e2c6e2b2ff8d6fb9->leave($__internal_5b1ec545c1ea6e660812f7d483ddb24d5e2116ab414f1747e2c6e2b2ff8d6fb9_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e702cd002076c24187dbf6aa3b6512a89e0773bff7c97ed5abeb5f27ab9e6948 = $this->env->getExtension("native_profiler");
        $__internal_e702cd002076c24187dbf6aa3b6512a89e0773bff7c97ed5abeb5f27ab9e6948->enter($__internal_e702cd002076c24187dbf6aa3b6512a89e0773bff7c97ed5abeb5f27ab9e6948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "php_config")), "html", null, true));
        echo "\"
       title=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP config")));
        echo "\">
        <img width=\"26\" height=\"28\" alt=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP config")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\">
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
            <b>PHP</b>
            <span><a href=\"";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("system.php")));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "phpversion", array()), "html", null, true));
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
            <b>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP Extensions")));
        echo "</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasxdebug", array())) ? ("green") : ("red"))));
        echo "\">xdebug</span>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasaccelerator", array())) ? ("green") : ("red"))));
        echo "\">accel</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP SAPI")));
        echo "</b>
            <span>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sapiName", array()), "html", null, true));
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Token</b>
            <span>";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 30
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_e702cd002076c24187dbf6aa3b6512a89e0773bff7c97ed5abeb5f27ab9e6948->leave($__internal_e702cd002076c24187dbf6aa3b6512a89e0773bff7c97ed5abeb5f27ab9e6948_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1b8d52948266ea231b4ab5929e3fce60fa2c499482d77df1f7eda6ed7ea06fa = $this->env->getExtension("native_profiler");
        $__internal_f1b8d52948266ea231b4ab5929e3fce60fa2c499482d77df1f7eda6ed7ea06fa->enter($__internal_f1b8d52948266ea231b4ab5929e3fce60fa2c499482d77df1f7eda6ed7ea06fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    <script id=\"php_config\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP config")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <% _.each( data, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
            </table>
        </div>
    </script>
";
        
        $__internal_f1b8d52948266ea231b4ab5929e3fce60fa2c499482d77df1f7eda6ed7ea06fa->leave($__internal_f1b8d52948266ea231b4ab5929e3fce60fa2c499482d77df1f7eda6ed7ea06fa_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/php_config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 40,  166 => 39,  160 => 38,  150 => 34,  146 => 33,  142 => 31,  139 => 30,  133 => 27,  126 => 23,  122 => 22,  116 => 19,  112 => 18,  108 => 17,  100 => 14,  96 => 12,  93 => 11,  90 => 10,  84 => 7,  80 => 6,  76 => 5,  71 => 4,  68 => 3,  66 => 2,  60 => 1,  53 => 38,  50 => 37,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {# PHP Information #}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'php_config'}) }}"*/
/*        title="{{ 'PHP config'|t }}">*/
/*         <img width="26" height="28" alt="{{ 'PHP config'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}">*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*     {% spaceless %}*/
/*         <div class="sf-toolbar-info-piece sf-toolbar-info-php">*/
/*             <b>PHP</b>*/
/*             <span><a href="{{ url("system.php") }}">{{ collector.phpversion }}</a></span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece sf-toolbar-info-php-ext">*/
/*             <b>{{ 'PHP Extensions'|t }}</b>*/
/*             <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}">xdebug</span>*/
/*             <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}">accel</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ 'PHP SAPI'|t }}</b>*/
/*             <span>{{ collector.sapiName }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Token</b>*/
/*             <span>{{ token }}</span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="php_config" type="text/template">*/
/*         <h2 class="panel__title">{{ 'PHP config'|t }}</h2>*/
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <% _.each( data, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <th><%- key %></th>*/
/*                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*             </table>*/
/*         </div>*/
/*     </script>*/
/* {% endblock %}*/
/* */

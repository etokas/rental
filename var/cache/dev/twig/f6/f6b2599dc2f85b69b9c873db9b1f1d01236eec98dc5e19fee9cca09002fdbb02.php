<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cb7eef89fb14bc71ccb63e8c8d3901e6901e0b9133f75417a3b452f1fb4cc146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bd7d95a57aceb3f6cbd54ddf66824e63eb8463cffc814705362c03ef7c8ca2c = $this->env->getExtension("native_profiler");
        $__internal_9bd7d95a57aceb3f6cbd54ddf66824e63eb8463cffc814705362c03ef7c8ca2c->enter($__internal_9bd7d95a57aceb3f6cbd54ddf66824e63eb8463cffc814705362c03ef7c8ca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd7d95a57aceb3f6cbd54ddf66824e63eb8463cffc814705362c03ef7c8ca2c->leave($__internal_9bd7d95a57aceb3f6cbd54ddf66824e63eb8463cffc814705362c03ef7c8ca2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fe4f1a011f66d02ff838ad8ed3e4aa36f72af3fd5126f61d5d03ffe091d346b = $this->env->getExtension("native_profiler");
        $__internal_5fe4f1a011f66d02ff838ad8ed3e4aa36f72af3fd5126f61d5d03ffe091d346b->enter($__internal_5fe4f1a011f66d02ff838ad8ed3e4aa36f72af3fd5126f61d5d03ffe091d346b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fe4f1a011f66d02ff838ad8ed3e4aa36f72af3fd5126f61d5d03ffe091d346b->leave($__internal_5fe4f1a011f66d02ff838ad8ed3e4aa36f72af3fd5126f61d5d03ffe091d346b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_532d55cc65540baf759648b9f3c6377530165fb881bd218b0a6f1c5c4d259f42 = $this->env->getExtension("native_profiler");
        $__internal_532d55cc65540baf759648b9f3c6377530165fb881bd218b0a6f1c5c4d259f42->enter($__internal_532d55cc65540baf759648b9f3c6377530165fb881bd218b0a6f1c5c4d259f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_532d55cc65540baf759648b9f3c6377530165fb881bd218b0a6f1c5c4d259f42->leave($__internal_532d55cc65540baf759648b9f3c6377530165fb881bd218b0a6f1c5c4d259f42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5e8936422465432a1c23d7922b09a4876031f59003249e9a21e99204c617ea1 = $this->env->getExtension("native_profiler");
        $__internal_e5e8936422465432a1c23d7922b09a4876031f59003249e9a21e99204c617ea1->enter($__internal_e5e8936422465432a1c23d7922b09a4876031f59003249e9a21e99204c617ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5e8936422465432a1c23d7922b09a4876031f59003249e9a21e99204c617ea1->leave($__internal_e5e8936422465432a1c23d7922b09a4876031f59003249e9a21e99204c617ea1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

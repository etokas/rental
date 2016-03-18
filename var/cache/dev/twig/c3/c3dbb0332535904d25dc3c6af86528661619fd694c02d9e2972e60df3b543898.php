<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6e5c31c0635cfdfb28a346af0ce598cb824d98a545bd1e5b0f6a5eae1295720f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d02f79d1cc6e7ed3357d54676cf6b6b1115ff50178a54c4e9a87dffc5c7881d9 = $this->env->getExtension("native_profiler");
        $__internal_d02f79d1cc6e7ed3357d54676cf6b6b1115ff50178a54c4e9a87dffc5c7881d9->enter($__internal_d02f79d1cc6e7ed3357d54676cf6b6b1115ff50178a54c4e9a87dffc5c7881d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02f79d1cc6e7ed3357d54676cf6b6b1115ff50178a54c4e9a87dffc5c7881d9->leave($__internal_d02f79d1cc6e7ed3357d54676cf6b6b1115ff50178a54c4e9a87dffc5c7881d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00f9b0f59c492d236bbf2c38c4bb221f00fca90be83369050a46adb670759cce = $this->env->getExtension("native_profiler");
        $__internal_00f9b0f59c492d236bbf2c38c4bb221f00fca90be83369050a46adb670759cce->enter($__internal_00f9b0f59c492d236bbf2c38c4bb221f00fca90be83369050a46adb670759cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_00f9b0f59c492d236bbf2c38c4bb221f00fca90be83369050a46adb670759cce->leave($__internal_00f9b0f59c492d236bbf2c38c4bb221f00fca90be83369050a46adb670759cce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70c250ab74035ef0eb92ec2af2de2cf439ca3844e37d349109f0a15c5ba105aa = $this->env->getExtension("native_profiler");
        $__internal_70c250ab74035ef0eb92ec2af2de2cf439ca3844e37d349109f0a15c5ba105aa->enter($__internal_70c250ab74035ef0eb92ec2af2de2cf439ca3844e37d349109f0a15c5ba105aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_70c250ab74035ef0eb92ec2af2de2cf439ca3844e37d349109f0a15c5ba105aa->leave($__internal_70c250ab74035ef0eb92ec2af2de2cf439ca3844e37d349109f0a15c5ba105aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42821be1cc2e18f47b23f6c4022f6ceb2ab985473095ddf13e19e341a60cfcf5 = $this->env->getExtension("native_profiler");
        $__internal_42821be1cc2e18f47b23f6c4022f6ceb2ab985473095ddf13e19e341a60cfcf5->enter($__internal_42821be1cc2e18f47b23f6c4022f6ceb2ab985473095ddf13e19e341a60cfcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_42821be1cc2e18f47b23f6c4022f6ceb2ab985473095ddf13e19e341a60cfcf5->leave($__internal_42821be1cc2e18f47b23f6c4022f6ceb2ab985473095ddf13e19e341a60cfcf5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

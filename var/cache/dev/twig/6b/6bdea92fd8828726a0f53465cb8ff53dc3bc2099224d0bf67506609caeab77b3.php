<?php

/* FrontBundle:vehicule:new.html.twig */
class __TwigTemplate_153b7fad5dc87a6410f662b86f578eec0c78391df5693df5685292e409e98284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:vehicule:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b09e409003544343d50c14a1292c8cc9b5ed8748c6f1bb9fcc8df59067ca4a2 = $this->env->getExtension("native_profiler");
        $__internal_4b09e409003544343d50c14a1292c8cc9b5ed8748c6f1bb9fcc8df59067ca4a2->enter($__internal_4b09e409003544343d50c14a1292c8cc9b5ed8748c6f1bb9fcc8df59067ca4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:vehicule:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b09e409003544343d50c14a1292c8cc9b5ed8748c6f1bb9fcc8df59067ca4a2->leave($__internal_4b09e409003544343d50c14a1292c8cc9b5ed8748c6f1bb9fcc8df59067ca4a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fdfa2ffce6f70cdc4799d6e92fbd0ea3f1c3a7dfe8e975cd0f5fbb4c002a85b = $this->env->getExtension("native_profiler");
        $__internal_1fdfa2ffce6f70cdc4799d6e92fbd0ea3f1c3a7dfe8e975cd0f5fbb4c002a85b->enter($__internal_1fdfa2ffce6f70cdc4799d6e92fbd0ea3f1c3a7dfe8e975cd0f5fbb4c002a85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Vehicule creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("vehicule_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1fdfa2ffce6f70cdc4799d6e92fbd0ea3f1c3a7dfe8e975cd0f5fbb4c002a85b->leave($__internal_1fdfa2ffce6f70cdc4799d6e92fbd0ea3f1c3a7dfe8e975cd0f5fbb4c002a85b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:vehicule:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Vehicule creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('vehicule_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

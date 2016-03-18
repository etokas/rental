<?php

/* FrontBundle:vehicule:edit_color.html.twig */
class __TwigTemplate_c1acceec0af5e06c4a5fadaed7dd8c79d28cc0958c84049cb46acebf02e23f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:vehicule:edit_color.html.twig", 1);
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
        $__internal_8d253aedcc63147ebae73a85e21cb3490f4edbb4827b2d4a7bbb7316ea077947 = $this->env->getExtension("native_profiler");
        $__internal_8d253aedcc63147ebae73a85e21cb3490f4edbb4827b2d4a7bbb7316ea077947->enter($__internal_8d253aedcc63147ebae73a85e21cb3490f4edbb4827b2d4a7bbb7316ea077947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:vehicule:edit_color.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d253aedcc63147ebae73a85e21cb3490f4edbb4827b2d4a7bbb7316ea077947->leave($__internal_8d253aedcc63147ebae73a85e21cb3490f4edbb4827b2d4a7bbb7316ea077947_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_190a717d95bc5ac643d7e3f6fb47aa8e23db13fd8b1e2b5c464cbc5dbad55c84 = $this->env->getExtension("native_profiler");
        $__internal_190a717d95bc5ac643d7e3f6fb47aa8e23db13fd8b1e2b5c464cbc5dbad55c84->enter($__internal_190a717d95bc5ac643d7e3f6fb47aa8e23db13fd8b1e2b5c464cbc5dbad55c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier la couleur</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
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
        
        $__internal_190a717d95bc5ac643d7e3f6fb47aa8e23db13fd8b1e2b5c464cbc5dbad55c84->leave($__internal_190a717d95bc5ac643d7e3f6fb47aa8e23db13fd8b1e2b5c464cbc5dbad55c84_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:vehicule:edit_color.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Modifier la couleur</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('vehicule_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */

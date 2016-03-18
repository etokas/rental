<?php

/* FrontBundle:reservation:new.html.twig */
class __TwigTemplate_1e87877191a8a745a220ba3ca35674cd70fbb0a33630c2910da6ae10f59a6104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:reservation:new.html.twig", 1);
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
        $__internal_4f14c2373f78ad485f0a69814f9898c3c8ecc848b7888b497f6097c7935b147d = $this->env->getExtension("native_profiler");
        $__internal_4f14c2373f78ad485f0a69814f9898c3c8ecc848b7888b497f6097c7935b147d->enter($__internal_4f14c2373f78ad485f0a69814f9898c3c8ecc848b7888b497f6097c7935b147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f14c2373f78ad485f0a69814f9898c3c8ecc848b7888b497f6097c7935b147d->leave($__internal_4f14c2373f78ad485f0a69814f9898c3c8ecc848b7888b497f6097c7935b147d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab3b0344393e472431eb3473be3029fd940723145f196de7dfeb707d862ebbf3 = $this->env->getExtension("native_profiler");
        $__internal_ab3b0344393e472431eb3473be3029fd940723145f196de7dfeb707d862ebbf3->enter($__internal_ab3b0344393e472431eb3473be3029fd940723145f196de7dfeb707d862ebbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1> Creer une reservation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Creer\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <button id=\"surclassement\">Surclasser ?</button>


    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("reservation_index");
        echo "\">Retour à l'acceuilt</a>
        </li>
    </ul>
";
        
        $__internal_ab3b0344393e472431eb3473be3029fd940723145f196de7dfeb707d862ebbf3->leave($__internal_ab3b0344393e472431eb3473be3029fd940723145f196de7dfeb707d862ebbf3_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reservation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1> Creer une reservation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Creer" />*/
/*     {{ form_end(form) }}*/
/*     <button id="surclassement">Surclasser ?</button>*/
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_index') }}">Retour à l'acceuilt</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_26f9c37fcb220ef7c63643298b69f2a8339b60fe5e3180e31d4de27f8325fed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:Default:index.html.twig", 1);
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
        $__internal_b6bee57d5330b5afc0fc63f5b0591e38a5e5fd0f720998dbc68042e13439f62d = $this->env->getExtension("native_profiler");
        $__internal_b6bee57d5330b5afc0fc63f5b0591e38a5e5fd0f720998dbc68042e13439f62d->enter($__internal_b6bee57d5330b5afc0fc63f5b0591e38a5e5fd0f720998dbc68042e13439f62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6bee57d5330b5afc0fc63f5b0591e38a5e5fd0f720998dbc68042e13439f62d->leave($__internal_b6bee57d5330b5afc0fc63f5b0591e38a5e5fd0f720998dbc68042e13439f62d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3831e376789b7d340d8a6278abf68ded1cb584ec164de01c544561af3936a089 = $this->env->getExtension("native_profiler");
        $__internal_3831e376789b7d340d8a6278abf68ded1cb584ec164de01c544561af3936a089->enter($__internal_3831e376789b7d340d8a6278abf68ded1cb584ec164de01c544561af3936a089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Admin panel</h1>

    <ul>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Tous les utilisateurs</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("vehicule_index");
        echo "\">Tous les vehicules</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("reservation_index");
        echo "\">Toutes les Reservations</a>
        </li>
    </ul>



";
        
        $__internal_3831e376789b7d340d8a6278abf68ded1cb584ec164de01c544561af3936a089->leave($__internal_3831e376789b7d340d8a6278abf68ded1cb584ec164de01c544561af3936a089_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  54 => 13,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Admin panel</h1>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Tous les utilisateurs</a>*/
/*         </li>*/
/*     </ul>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('vehicule_index') }}">Tous les vehicules</a>*/
/*         </li>*/
/*     </ul>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_index') }}">Toutes les Reservations</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */

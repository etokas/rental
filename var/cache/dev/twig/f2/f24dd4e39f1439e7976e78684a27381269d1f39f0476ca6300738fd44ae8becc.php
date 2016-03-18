<?php

/* FrontBundle:reservation:index.html.twig */
class __TwigTemplate_d0806a48f81c1bb2c4bc38936d5d81b21c6ab5c6a36370f5fa11759251d7793b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:reservation:index.html.twig", 1);
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
        $__internal_b34829d8fa4551dd350db012fcdf1574269cd34e8720800624a82d203ac6c206 = $this->env->getExtension("native_profiler");
        $__internal_b34829d8fa4551dd350db012fcdf1574269cd34e8720800624a82d203ac6c206->enter($__internal_b34829d8fa4551dd350db012fcdf1574269cd34e8720800624a82d203ac6c206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b34829d8fa4551dd350db012fcdf1574269cd34e8720800624a82d203ac6c206->leave($__internal_b34829d8fa4551dd350db012fcdf1574269cd34e8720800624a82d203ac6c206_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54dabcab45fa5764938fe6bdfeec4778022b69183d5f2784cbb0243dd3d88b07 = $this->env->getExtension("native_profiler");
        $__internal_54dabcab45fa5764938fe6bdfeec4778022b69183d5f2784cbb0243dd3d88b07->enter($__internal_54dabcab45fa5764938fe6bdfeec4778022b69183d5f2784cbb0243dd3d88b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste de reservation</h1>

    <table>
        <thead>
            <tr>
                <th>Date de debut</th>
                <th>Utilsiateur</th>
                <th>Date de fin</th>
                <th>Voiture</th>
                <th>Surclassement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            if ($this->getAttribute($context["reservation"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "user", array()), "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["reservation"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "voiture", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["reservation"], "surclassement", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    ";
        // line 40
        if ((isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre"))) {
            // line 41
            echo "
        <p>Aucune voiture / Aucun utilisateur</p>

    ";
        } else {
            // line 45
            echo "    <ul>
        <li>
            <a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("reservation_new");
            echo "\">Creer un utilisateur</a>
        </li>
    </ul>
    ";
        }
        // line 51
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("front_homepage");
        echo "\">Acceuil admin</a>
        </li>
    </ul>
";
        
        $__internal_54dabcab45fa5764938fe6bdfeec4778022b69183d5f2784cbb0243dd3d88b07->leave($__internal_54dabcab45fa5764938fe6bdfeec4778022b69183d5f2784cbb0243dd3d88b07_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 55,  136 => 51,  129 => 47,  125 => 45,  119 => 41,  117 => 40,  112 => 37,  100 => 31,  94 => 28,  83 => 24,  79 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste de reservation</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Date de debut</th>*/
/*                 <th>Utilsiateur</th>*/
/*                 <th>Date de fin</th>*/
/*                 <th>Voiture</th>*/
/*                 <th>Surclassement</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for reservation in reservations %}*/
/*             <tr>*/
/*                 <td>{% if reservation.startDate %}{{ reservation.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ reservation.user.lastname }}</td>*/
/*                 <td>{% if reservation.endDate %}{{ reservation.endDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ reservation.voiture.nom }}</td>*/
/*                 <td>{% if reservation.surclassement %}Oui{% else %}Non{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('reservation_show', { 'id': reservation.id }) }}">Voir</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('reservation_edit', { 'id': reservation.id }) }}">Modifier</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% if nombre %}*/
/* */
/*         <p>Aucune voiture / Aucun utilisateur</p>*/
/* */
/*     {% else %}*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_new') }}">Creer un utilisateur</a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endif %}*/
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('front_homepage') }}">Acceuil admin</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

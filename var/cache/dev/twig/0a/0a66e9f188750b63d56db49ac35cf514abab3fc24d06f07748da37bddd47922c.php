<?php

/* FrontBundle:vehicule:index.html.twig */
class __TwigTemplate_bb71b2b2417a11b018bd9ee1f9a2738e29cb3de22a15f46106a46a92ccb3f93d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:vehicule:index.html.twig", 1);
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
        $__internal_a7abca44a5fb8b0e13b1df68e4638d91851d8ae0b4ee0d3b70afbf570c6b09fb = $this->env->getExtension("native_profiler");
        $__internal_a7abca44a5fb8b0e13b1df68e4638d91851d8ae0b4ee0d3b70afbf570c6b09fb->enter($__internal_a7abca44a5fb8b0e13b1df68e4638d91851d8ae0b4ee0d3b70afbf570c6b09fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:vehicule:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7abca44a5fb8b0e13b1df68e4638d91851d8ae0b4ee0d3b70afbf570c6b09fb->leave($__internal_a7abca44a5fb8b0e13b1df68e4638d91851d8ae0b4ee0d3b70afbf570c6b09fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10a75b77459ab9def3d5383cf6b142bf6dde9d10ac566e8a028b06460453ab06 = $this->env->getExtension("native_profiler");
        $__internal_10a75b77459ab9def3d5383cf6b142bf6dde9d10ac566e8a028b06460453ab06->enter($__internal_10a75b77459ab9def3d5383cf6b142bf6dde9d10ac566e8a028b06460453ab06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste de vehicule</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Diponibilité</th>
                <th>Gamme</th>
                <th>Couleur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) ? $context["vehicules"] : $this->getContext($context, "vehicules")));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehicule"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["vehicule"], "isDisponible", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "gamme", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehicule"], "color", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_show", array("id" => $this->getAttribute($context["vehicule"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_edit", array("id" => $this->getAttribute($context["vehicule"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                        </li>
                        ";
            // line 31
            if (($this->getAttribute($this->getAttribute($context["vehicule"], "gamme", array()), "nom", array()) == "TieFighter")) {
                // line 32
                echo "                            <li>
                                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_edit_color", array("id" => $this->getAttribute($context["vehicule"], "id", array()))), "html", null, true);
                echo "\">Modifier la couleur</a>
                            </li>
                        ";
            }
            // line 36
            echo "                    </ul>
                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("vehicule_new");
        echo "\">Creer un vehicule</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("front_homepage");
        echo "\">Acceuil admin</a>
        </li>
    </ul>
";
        
        $__internal_10a75b77459ab9def3d5383cf6b142bf6dde9d10ac566e8a028b06460453ab06->leave($__internal_10a75b77459ab9def3d5383cf6b142bf6dde9d10ac566e8a028b06460453ab06_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:vehicule:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  124 => 46,  117 => 41,  107 => 36,  101 => 33,  98 => 32,  96 => 31,  91 => 29,  85 => 26,  78 => 22,  74 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste de vehicule</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Diponibilité</th>*/
/*                 <th>Gamme</th>*/
/*                 <th>Couleur</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for vehicule in vehicules %}*/
/*             <tr>*/
/*                 <td>{{ vehicule.nom }}</td>*/
/*                 <td>{% if vehicule.isDisponible %}Oui{% else %}Non{% endif %}</td>*/
/*                 <td>{{ vehicule.gamme.nom }}</td>*/
/*                 <td>{{ vehicule.color }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('vehicule_show', { 'id': vehicule.id }) }}">Voir</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('vehicule_edit', { 'id': vehicule.id }) }}">Modifier</a>*/
/*                         </li>*/
/*                         {% if vehicule.gamme.nom == "TieFighter" %}*/
/*                             <li>*/
/*                                 <a href="{{ path('vehicule_edit_color', { 'id': vehicule.id }) }}">Modifier la couleur</a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </td>*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('vehicule_new') }}">Creer un vehicule</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('front_homepage') }}">Acceuil admin</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

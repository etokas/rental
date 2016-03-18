<?php

/* FrontBundle:vehicule:show.html.twig */
class __TwigTemplate_cfeac50bd20e3b6ba82ad2dc050d272897f89e49fab61771cc25d85b57f8263e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:vehicule:show.html.twig", 1);
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
        $__internal_4e804d19e94c77c004da13142abc0306a379b3aa10cb32e6b68f1a20ef46b9ae = $this->env->getExtension("native_profiler");
        $__internal_4e804d19e94c77c004da13142abc0306a379b3aa10cb32e6b68f1a20ef46b9ae->enter($__internal_4e804d19e94c77c004da13142abc0306a379b3aa10cb32e6b68f1a20ef46b9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:vehicule:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e804d19e94c77c004da13142abc0306a379b3aa10cb32e6b68f1a20ef46b9ae->leave($__internal_4e804d19e94c77c004da13142abc0306a379b3aa10cb32e6b68f1a20ef46b9ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5faf4afbc07cc5527e2c91240a09e736e2efe18afa22ae614ceeaa59ccd7f393 = $this->env->getExtension("native_profiler");
        $__internal_5faf4afbc07cc5527e2c91240a09e736e2efe18afa22ae614ceeaa59ccd7f393->enter($__internal_5faf4afbc07cc5527e2c91240a09e736e2efe18afa22ae614ceeaa59ccd7f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Vehicule</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isdisponible</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "isDisponible", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("vehicule_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_edit", array("id" => $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5faf4afbc07cc5527e2c91240a09e736e2efe18afa22ae614ceeaa59ccd7f393->leave($__internal_5faf4afbc07cc5527e2c91240a09e736e2efe18afa22ae614ceeaa59ccd7f393_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:vehicule:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Vehicule</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ vehicule.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ vehicule.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Isdisponible</th>*/
/*                 <td>{% if vehicule.isDisponible %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('vehicule_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('vehicule_edit', { 'id': vehicule.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

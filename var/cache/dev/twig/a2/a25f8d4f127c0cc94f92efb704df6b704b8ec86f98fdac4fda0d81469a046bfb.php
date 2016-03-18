<?php

/* FrontBundle:reservation:show.html.twig */
class __TwigTemplate_768201c8de0bbaf6222127227fa4f1cdf19470b95054433a2dbe8d87d74ca1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:reservation:show.html.twig", 1);
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
        $__internal_b094a7ae3469b20ad944e077bdc6b1c1b333f50840556441e1484bfc5757fa98 = $this->env->getExtension("native_profiler");
        $__internal_b094a7ae3469b20ad944e077bdc6b1c1b333f50840556441e1484bfc5757fa98->enter($__internal_b094a7ae3469b20ad944e077bdc6b1c1b333f50840556441e1484bfc5757fa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:reservation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b094a7ae3469b20ad944e077bdc6b1c1b333f50840556441e1484bfc5757fa98->leave($__internal_b094a7ae3469b20ad944e077bdc6b1c1b333f50840556441e1484bfc5757fa98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aedeae21c2ed7cb1429ab1947cabbba42c207f168cd883e89937de2df4262bbf = $this->env->getExtension("native_profiler");
        $__internal_aedeae21c2ed7cb1429ab1947cabbba42c207f168cd883e89937de2df4262bbf->enter($__internal_aedeae21c2ed7cb1429ab1947cabbba42c207f168cd883e89937de2df4262bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createat</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "createAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "startDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Enddate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "endDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Surclassement</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "surclassement", array())) {
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
        // line 33
        echo $this->env->getExtension('routing')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aedeae21c2ed7cb1429ab1947cabbba42c207f168cd883e89937de2df4262bbf->leave($__internal_aedeae21c2ed7cb1429ab1947cabbba42c207f168cd883e89937de2df4262bbf_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  108 => 39,  102 => 36,  96 => 33,  82 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Reservation</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ reservation.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createat</th>*/
/*                 <td>{% if reservation.createAt %}{{ reservation.createAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Startdate</th>*/
/*                 <td>{% if reservation.startDate %}{{ reservation.startDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Enddate</th>*/
/*                 <td>{% if reservation.endDate %}{{ reservation.endDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Surclassement</th>*/
/*                 <td>{% if reservation.surclassement %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('reservation_edit', { 'id': reservation.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

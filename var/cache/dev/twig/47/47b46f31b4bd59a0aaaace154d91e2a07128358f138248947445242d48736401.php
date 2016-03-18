<?php

/* FrontBundle:user:index.html.twig */
class __TwigTemplate_5acdf9729f41cf0d1f95172d1af79728ca75c1783ff3abbefeb866e2c1fc6c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:user:index.html.twig", 1);
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
        $__internal_c8ada71799dac532260c7acd09f9a98f1cbb904f8321857238f10a6121df3c50 = $this->env->getExtension("native_profiler");
        $__internal_c8ada71799dac532260c7acd09f9a98f1cbb904f8321857238f10a6121df3c50->enter($__internal_c8ada71799dac532260c7acd09f9a98f1cbb904f8321857238f10a6121df3c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8ada71799dac532260c7acd09f9a98f1cbb904f8321857238f10a6121df3c50->leave($__internal_c8ada71799dac532260c7acd09f9a98f1cbb904f8321857238f10a6121df3c50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c385c9177eaca305880918b68ec7f46b8e2f42e64d73b112381e15cfd6a56e = $this->env->getExtension("native_profiler");
        $__internal_02c385c9177eaca305880918b68ec7f46b8e2f42e64d73b112381e15cfd6a56e->enter($__internal_02c385c9177eaca305880918b68ec7f46b8e2f42e64d73b112381e15cfd6a56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User list</h1>

    <table>
        <thead>
            <tr>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("front_homepage");
        echo "\">Acceuil admin</a>
        </li>
    </ul>
";
        
        $__internal_02c385c9177eaca305880918b68ec7f46b8e2f42e64d73b112381e15cfd6a56e->leave($__internal_02c385c9177eaca305880918b68ec7f46b8e2f42e64d73b112381e15cfd6a56e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  96 => 36,  89 => 31,  77 => 25,  71 => 22,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td>{{ user.lastname }}</td>*/
/*                 <td>{{ user.firstname }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}">Create a new entry</a>*/
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

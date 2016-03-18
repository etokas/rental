<?php

/* FrontBundle:user:show.html.twig */
class __TwigTemplate_623a858ed2bd34db2de28e45e6a91382c4dbd235e6c6eb24fef2d592ade74787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:user:show.html.twig", 1);
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
        $__internal_99121a07a8d079dcfc678a31b4bf45fce6a9271aacfbbba5b8bd0b6d5e65974c = $this->env->getExtension("native_profiler");
        $__internal_99121a07a8d079dcfc678a31b4bf45fce6a9271aacfbbba5b8bd0b6d5e65974c->enter($__internal_99121a07a8d079dcfc678a31b4bf45fce6a9271aacfbbba5b8bd0b6d5e65974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99121a07a8d079dcfc678a31b4bf45fce6a9271aacfbbba5b8bd0b6d5e65974c->leave($__internal_99121a07a8d079dcfc678a31b4bf45fce6a9271aacfbbba5b8bd0b6d5e65974c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d999439e1d2eca4ec683ba4eb7150d5639d1d1be2ac7153a18c3e478f687053 = $this->env->getExtension("native_profiler");
        $__internal_2d999439e1d2eca4ec683ba4eb7150d5639d1d1be2ac7153a18c3e478f687053->enter($__internal_2d999439e1d2eca4ec683ba4eb7150d5639d1d1be2ac7153a18c3e478f687053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
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
        
        $__internal_2d999439e1d2eca4ec683ba4eb7150d5639d1d1be2ac7153a18c3e478f687053->leave($__internal_2d999439e1d2eca4ec683ba4eb7150d5639d1d1be2ac7153a18c3e478f687053_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ user.lastname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>FirstName</th>*/
/*                 <td>{{ user.firstname }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

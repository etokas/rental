<?php

/* FrontBundle:vehicule:edit.html.twig */
class __TwigTemplate_062f39abbd887bc384ab80997e2fbbd9b55548e7d0e229353e6709ec1b260ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:vehicule:edit.html.twig", 1);
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
        $__internal_a4b4a05a58a7b601cf950517a8a73c982e8c356741d228d59e729da1638e3776 = $this->env->getExtension("native_profiler");
        $__internal_a4b4a05a58a7b601cf950517a8a73c982e8c356741d228d59e729da1638e3776->enter($__internal_a4b4a05a58a7b601cf950517a8a73c982e8c356741d228d59e729da1638e3776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:vehicule:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b4a05a58a7b601cf950517a8a73c982e8c356741d228d59e729da1638e3776->leave($__internal_a4b4a05a58a7b601cf950517a8a73c982e8c356741d228d59e729da1638e3776_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77bb3dc20e194f3ab9c0b1c4ba5a3b49cfed019f90f7dc01387287db799cbf4a = $this->env->getExtension("native_profiler");
        $__internal_77bb3dc20e194f3ab9c0b1c4ba5a3b49cfed019f90f7dc01387287db799cbf4a->enter($__internal_77bb3dc20e194f3ab9c0b1c4ba5a3b49cfed019f90f7dc01387287db799cbf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Vehicule edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("vehicule_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_77bb3dc20e194f3ab9c0b1c4ba5a3b49cfed019f90f7dc01387287db799cbf4a->leave($__internal_77bb3dc20e194f3ab9c0b1c4ba5a3b49cfed019f90f7dc01387287db799cbf4a_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:vehicule:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Vehicule edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('vehicule_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

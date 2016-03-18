<?php

/* FrontBundle:user:new.html.twig */
class __TwigTemplate_7758295694aaeb741862ffe3ea4b189e211de1e7e8f2ab242d288ef5ffdbab5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:user:new.html.twig", 1);
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
        $__internal_9a1fc4e351a18a356a3142cdd4ed71e2e94188d9f4adf0cf98c218251a835edb = $this->env->getExtension("native_profiler");
        $__internal_9a1fc4e351a18a356a3142cdd4ed71e2e94188d9f4adf0cf98c218251a835edb->enter($__internal_9a1fc4e351a18a356a3142cdd4ed71e2e94188d9f4adf0cf98c218251a835edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1fc4e351a18a356a3142cdd4ed71e2e94188d9f4adf0cf98c218251a835edb->leave($__internal_9a1fc4e351a18a356a3142cdd4ed71e2e94188d9f4adf0cf98c218251a835edb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32921f3cdf9b57e6d4c1e65239cee9ec47ffa50ecbcc797a78af427fb5d4b6af = $this->env->getExtension("native_profiler");
        $__internal_32921f3cdf9b57e6d4c1e65239cee9ec47ffa50ecbcc797a78af427fb5d4b6af->enter($__internal_32921f3cdf9b57e6d4c1e65239cee9ec47ffa50ecbcc797a78af427fb5d4b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_32921f3cdf9b57e6d4c1e65239cee9ec47ffa50ecbcc797a78af427fb5d4b6af->leave($__internal_32921f3cdf9b57e6d4c1e65239cee9ec47ffa50ecbcc797a78af427fb5d4b6af_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* FrontBundle:user:edit.html.twig */
class __TwigTemplate_9c43ebab8a94eb9dd535a29f1749f80759078fe18b38b33f519abca38dda618b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:user:edit.html.twig", 1);
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
        $__internal_2509344866dd45820cec533841034c61f0c9d02089d4393aefc12d552c996961 = $this->env->getExtension("native_profiler");
        $__internal_2509344866dd45820cec533841034c61f0c9d02089d4393aefc12d552c996961->enter($__internal_2509344866dd45820cec533841034c61f0c9d02089d4393aefc12d552c996961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2509344866dd45820cec533841034c61f0c9d02089d4393aefc12d552c996961->leave($__internal_2509344866dd45820cec533841034c61f0c9d02089d4393aefc12d552c996961_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6463c8b0b06132903b43255fdce470f7a9e504a60ab558004a9f4057552fb654 = $this->env->getExtension("native_profiler");
        $__internal_6463c8b0b06132903b43255fdce470f7a9e504a60ab558004a9f4057552fb654->enter($__internal_6463c8b0b06132903b43255fdce470f7a9e504a60ab558004a9f4057552fb654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("user_index");
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
        
        $__internal_6463c8b0b06132903b43255fdce470f7a9e504a60ab558004a9f4057552fb654->leave($__internal_6463c8b0b06132903b43255fdce470f7a9e504a60ab558004a9f4057552fb654_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:user:edit.html.twig";
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
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

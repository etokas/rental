<?php

/* base.html.twig */
class __TwigTemplate_8e40d8d4010f9977874cb3b3266d2fd69396710f497f651f013688445e227729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4b673216bffbeacaba781b86a4dbd967cbd8254bc93254d59994a03964ef543 = $this->env->getExtension("native_profiler");
        $__internal_a4b673216bffbeacaba781b86a4dbd967cbd8254bc93254d59994a03964ef543->enter($__internal_a4b673216bffbeacaba781b86a4dbd967cbd8254bc93254d59994a03964ef543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/front/main.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        <script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/front/main.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_a4b673216bffbeacaba781b86a4dbd967cbd8254bc93254d59994a03964ef543->leave($__internal_a4b673216bffbeacaba781b86a4dbd967cbd8254bc93254d59994a03964ef543_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad7f8019b3c8e8b88926d6173a2f81958fa900d2e1dd0441cfb91d73eca09125 = $this->env->getExtension("native_profiler");
        $__internal_ad7f8019b3c8e8b88926d6173a2f81958fa900d2e1dd0441cfb91d73eca09125->enter($__internal_ad7f8019b3c8e8b88926d6173a2f81958fa900d2e1dd0441cfb91d73eca09125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ad7f8019b3c8e8b88926d6173a2f81958fa900d2e1dd0441cfb91d73eca09125->leave($__internal_ad7f8019b3c8e8b88926d6173a2f81958fa900d2e1dd0441cfb91d73eca09125_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_973c2b23061631da775769731191bd3c0e17d1286d69c05c80d1882ca0aa3bf3 = $this->env->getExtension("native_profiler");
        $__internal_973c2b23061631da775769731191bd3c0e17d1286d69c05c80d1882ca0aa3bf3->enter($__internal_973c2b23061631da775769731191bd3c0e17d1286d69c05c80d1882ca0aa3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_973c2b23061631da775769731191bd3c0e17d1286d69c05c80d1882ca0aa3bf3->leave($__internal_973c2b23061631da775769731191bd3c0e17d1286d69c05c80d1882ca0aa3bf3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_234f9621b6ec182409f2c33bb491a6d0bc0d0abbf4d10ea74dd55a35a76c4d9e = $this->env->getExtension("native_profiler");
        $__internal_234f9621b6ec182409f2c33bb491a6d0bc0d0abbf4d10ea74dd55a35a76c4d9e->enter($__internal_234f9621b6ec182409f2c33bb491a6d0bc0d0abbf4d10ea74dd55a35a76c4d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_234f9621b6ec182409f2c33bb491a6d0bc0d0abbf4d10ea74dd55a35a76c4d9e->leave($__internal_234f9621b6ec182409f2c33bb491a6d0bc0d0abbf4d10ea74dd55a35a76c4d9e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe988c856386b54c1d613863771c9beb1f7fd8929fa882b7725f3af9821c076b = $this->env->getExtension("native_profiler");
        $__internal_fe988c856386b54c1d613863771c9beb1f7fd8929fa882b7725f3af9821c076b->enter($__internal_fe988c856386b54c1d613863771c9beb1f7fd8929fa882b7725f3af9821c076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe988c856386b54c1d613863771c9beb1f7fd8929fa882b7725f3af9821c076b->leave($__internal_fe988c856386b54c1d613863771c9beb1f7fd8929fa882b7725f3af9821c076b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 12,  99 => 11,  88 => 6,  76 => 5,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script src="{{ asset('bundles/front/main.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*         <script src="{{ asset('bundles/front/main.js') }}"></script>*/
/*     </body>*/
/* </html>*/
/* */

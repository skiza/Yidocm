<?php

/* base.html.twig */
class __TwigTemplate_cb445fedf54d06991663d5b104ce4c0e79dbb356454c3c7073a9be6fdf27d418 extends Twig_Template
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
        $__internal_6887d2a56c41138c7772ab3dd226669162070df9e5091654efdceecb8466c850 = $this->env->getExtension("native_profiler");
        $__internal_6887d2a56c41138c7772ab3dd226669162070df9e5091654efdceecb8466c850->enter($__internal_6887d2a56c41138c7772ab3dd226669162070df9e5091654efdceecb8466c850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6887d2a56c41138c7772ab3dd226669162070df9e5091654efdceecb8466c850->leave($__internal_6887d2a56c41138c7772ab3dd226669162070df9e5091654efdceecb8466c850_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_265869ee56a168aabb002e4e02ea77b9cfb9c002f84320e833ff33b52d83ec81 = $this->env->getExtension("native_profiler");
        $__internal_265869ee56a168aabb002e4e02ea77b9cfb9c002f84320e833ff33b52d83ec81->enter($__internal_265869ee56a168aabb002e4e02ea77b9cfb9c002f84320e833ff33b52d83ec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_265869ee56a168aabb002e4e02ea77b9cfb9c002f84320e833ff33b52d83ec81->leave($__internal_265869ee56a168aabb002e4e02ea77b9cfb9c002f84320e833ff33b52d83ec81_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7f0616e3be58dd03abf028b5c97d366666e945eb62bd86894869a53e611d49e = $this->env->getExtension("native_profiler");
        $__internal_c7f0616e3be58dd03abf028b5c97d366666e945eb62bd86894869a53e611d49e->enter($__internal_c7f0616e3be58dd03abf028b5c97d366666e945eb62bd86894869a53e611d49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7f0616e3be58dd03abf028b5c97d366666e945eb62bd86894869a53e611d49e->leave($__internal_c7f0616e3be58dd03abf028b5c97d366666e945eb62bd86894869a53e611d49e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_40472ee5b8087513e524478440706c500279c1ebe6cf488596e1f30eba135087 = $this->env->getExtension("native_profiler");
        $__internal_40472ee5b8087513e524478440706c500279c1ebe6cf488596e1f30eba135087->enter($__internal_40472ee5b8087513e524478440706c500279c1ebe6cf488596e1f30eba135087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40472ee5b8087513e524478440706c500279c1ebe6cf488596e1f30eba135087->leave($__internal_40472ee5b8087513e524478440706c500279c1ebe6cf488596e1f30eba135087_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a2ef8c55df1c7aae2057ce7417cd2355e808cf1ab09952380cf6837b8edfb90 = $this->env->getExtension("native_profiler");
        $__internal_5a2ef8c55df1c7aae2057ce7417cd2355e808cf1ab09952380cf6837b8edfb90->enter($__internal_5a2ef8c55df1c7aae2057ce7417cd2355e808cf1ab09952380cf6837b8edfb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a2ef8c55df1c7aae2057ce7417cd2355e808cf1ab09952380cf6837b8edfb90->leave($__internal_5a2ef8c55df1c7aae2057ce7417cd2355e808cf1ab09952380cf6837b8edfb90_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

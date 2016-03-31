<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23e41a798fdf1861e9d167fd3093ef7e3c38dbc6d7d83d2851b4530e496a75da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7733084de8afe444694359d9aea9516025815427909ab694a5f5177103945ce = $this->env->getExtension("native_profiler");
        $__internal_a7733084de8afe444694359d9aea9516025815427909ab694a5f5177103945ce->enter($__internal_a7733084de8afe444694359d9aea9516025815427909ab694a5f5177103945ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7733084de8afe444694359d9aea9516025815427909ab694a5f5177103945ce->leave($__internal_a7733084de8afe444694359d9aea9516025815427909ab694a5f5177103945ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04f4b86ab007b1d0af33871fda264a83e4da6e64357fb8f091bdcc019a2b7fc7 = $this->env->getExtension("native_profiler");
        $__internal_04f4b86ab007b1d0af33871fda264a83e4da6e64357fb8f091bdcc019a2b7fc7->enter($__internal_04f4b86ab007b1d0af33871fda264a83e4da6e64357fb8f091bdcc019a2b7fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04f4b86ab007b1d0af33871fda264a83e4da6e64357fb8f091bdcc019a2b7fc7->leave($__internal_04f4b86ab007b1d0af33871fda264a83e4da6e64357fb8f091bdcc019a2b7fc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a7dd5f82a9b3dbb08e20afc6ef4ec84cee08d3701d4428306344857bedc5e66 = $this->env->getExtension("native_profiler");
        $__internal_2a7dd5f82a9b3dbb08e20afc6ef4ec84cee08d3701d4428306344857bedc5e66->enter($__internal_2a7dd5f82a9b3dbb08e20afc6ef4ec84cee08d3701d4428306344857bedc5e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a7dd5f82a9b3dbb08e20afc6ef4ec84cee08d3701d4428306344857bedc5e66->leave($__internal_2a7dd5f82a9b3dbb08e20afc6ef4ec84cee08d3701d4428306344857bedc5e66_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c65e5a76c635a308b87af0d9052f633e25ba7531b74b9d9dd8904136aa439249 = $this->env->getExtension("native_profiler");
        $__internal_c65e5a76c635a308b87af0d9052f633e25ba7531b74b9d9dd8904136aa439249->enter($__internal_c65e5a76c635a308b87af0d9052f633e25ba7531b74b9d9dd8904136aa439249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c65e5a76c635a308b87af0d9052f633e25ba7531b74b9d9dd8904136aa439249->leave($__internal_c65e5a76c635a308b87af0d9052f633e25ba7531b74b9d9dd8904136aa439249_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

<?php

/* login/login.html.twig */
class __TwigTemplate_6f5a5c54ab142089c8c079e2e596b5616c2b8ac6f9c1c55fefa8669ee482cb0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c285796d17a821dc4bfd53a8b6f4dcb198ae198f19ff8480a52e70a4875f3c60 = $this->env->getExtension("native_profiler");
        $__internal_c285796d17a821dc4bfd53a8b6f4dcb198ae198f19ff8480a52e70a4875f3c60->enter($__internal_c285796d17a821dc4bfd53a8b6f4dcb198ae198f19ff8480a52e70a4875f3c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "<html>
<head></head>
<body>
<p style=\"color:red\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "</p>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Sign In</a>
</body>
</html>

";
        
        $__internal_c285796d17a821dc4bfd53a8b6f4dcb198ae198f19ff8480a52e70a4875f3c60->leave($__internal_c285796d17a821dc4bfd53a8b6f4dcb198ae198f19ff8480a52e70a4875f3c60_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <html>*/
/* <head></head>*/
/* <body>*/
/* <p style="color:red">{{error}}</p>*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* <a href="{{ path('user_new') }}">Sign In</a>*/
/* </body>*/
/* </html>*/
/* */
/* */

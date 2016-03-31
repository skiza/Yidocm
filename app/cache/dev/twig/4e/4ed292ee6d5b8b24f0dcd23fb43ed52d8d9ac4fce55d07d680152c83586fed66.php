<?php

/* user/new.html.twig */
class __TwigTemplate_dce1fa46ae88338fdb49f4873408516f6ad21cbb560155b365bda8b3e2bcae22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_9f859c3f70d33ca4ec1b30c869c3c78ba40265d2fbf8c193b2e22f612250cb1d = $this->env->getExtension("native_profiler");
        $__internal_9f859c3f70d33ca4ec1b30c869c3c78ba40265d2fbf8c193b2e22f612250cb1d->enter($__internal_9f859c3f70d33ca4ec1b30c869c3c78ba40265d2fbf8c193b2e22f612250cb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f859c3f70d33ca4ec1b30c869c3c78ba40265d2fbf8c193b2e22f612250cb1d->leave($__internal_9f859c3f70d33ca4ec1b30c869c3c78ba40265d2fbf8c193b2e22f612250cb1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ab45e94c6f9176d75ab69fb1c53a5e484b3e644f4254b04f90e672d010f7ea6 = $this->env->getExtension("native_profiler");
        $__internal_0ab45e94c6f9176d75ab69fb1c53a5e484b3e644f4254b04f90e672d010f7ea6->enter($__internal_0ab45e94c6f9176d75ab69fb1c53a5e484b3e644f4254b04f90e672d010f7ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ab45e94c6f9176d75ab69fb1c53a5e484b3e644f4254b04f90e672d010f7ea6->leave($__internal_0ab45e94c6f9176d75ab69fb1c53a5e484b3e644f4254b04f90e672d010f7ea6_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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

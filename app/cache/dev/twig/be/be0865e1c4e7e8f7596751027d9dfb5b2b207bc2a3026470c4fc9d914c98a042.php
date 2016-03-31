<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2016452ebf451d175f24781ada48b995e89e59f126fb08bfad690a824d962031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7570000f939294f71908dde3afd30f6ffa90972f2f62c0fc1c0fc25b6252484f = $this->env->getExtension("native_profiler");
        $__internal_7570000f939294f71908dde3afd30f6ffa90972f2f62c0fc1c0fc25b6252484f->enter($__internal_7570000f939294f71908dde3afd30f6ffa90972f2f62c0fc1c0fc25b6252484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7570000f939294f71908dde3afd30f6ffa90972f2f62c0fc1c0fc25b6252484f->leave($__internal_7570000f939294f71908dde3afd30f6ffa90972f2f62c0fc1c0fc25b6252484f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4153d7505d5e382134228869ac212090bc47e47654f851fe81f434621bd503b7 = $this->env->getExtension("native_profiler");
        $__internal_4153d7505d5e382134228869ac212090bc47e47654f851fe81f434621bd503b7->enter($__internal_4153d7505d5e382134228869ac212090bc47e47654f851fe81f434621bd503b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4153d7505d5e382134228869ac212090bc47e47654f851fe81f434621bd503b7->leave($__internal_4153d7505d5e382134228869ac212090bc47e47654f851fe81f434621bd503b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ce4d014a1afc7bf8a7f905a3bb434a3bb07e76dbb709203d29ddd6bfa0a1b93 = $this->env->getExtension("native_profiler");
        $__internal_7ce4d014a1afc7bf8a7f905a3bb434a3bb07e76dbb709203d29ddd6bfa0a1b93->enter($__internal_7ce4d014a1afc7bf8a7f905a3bb434a3bb07e76dbb709203d29ddd6bfa0a1b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ce4d014a1afc7bf8a7f905a3bb434a3bb07e76dbb709203d29ddd6bfa0a1b93->leave($__internal_7ce4d014a1afc7bf8a7f905a3bb434a3bb07e76dbb709203d29ddd6bfa0a1b93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3affd9c6c27f8d888a6c3a3be731d996e1e2afc09d7929e3d85421e990474510 = $this->env->getExtension("native_profiler");
        $__internal_3affd9c6c27f8d888a6c3a3be731d996e1e2afc09d7929e3d85421e990474510->enter($__internal_3affd9c6c27f8d888a6c3a3be731d996e1e2afc09d7929e3d85421e990474510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3affd9c6c27f8d888a6c3a3be731d996e1e2afc09d7929e3d85421e990474510->leave($__internal_3affd9c6c27f8d888a6c3a3be731d996e1e2afc09d7929e3d85421e990474510_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

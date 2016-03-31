<?php

/* inbox/inbox.html.twig */
class __TwigTemplate_7c5206039edb470aecfe000c5a5d2fe77c0d78bbd9639cacac297424a32e13e6 extends Twig_Template
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
        $__internal_59a7bb87ab0d155f37f1a5205f786ebdc430c1fab2546ad309493bd944cd6183 = $this->env->getExtension("native_profiler");
        $__internal_59a7bb87ab0d155f37f1a5205f786ebdc430c1fab2546ad309493bd944cd6183->enter($__internal_59a7bb87ab0d155f37f1a5205f786ebdc430c1fab2546ad309493bd944cd6183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inbox/inbox.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
\t\t<div align=\"center \"id=\"usuario\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["alias"]);
        foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
            // line 9
            echo "\t\t\t<p id=\"alias\">Welcome ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alias"], "alias", array()), "html", null, true);
            echo "</p>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alias'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("cerrar");
        echo "\" id=\"enlace\">Log out</a>
\t\t</div>
    </body>
</html>
";
        
        $__internal_59a7bb87ab0d155f37f1a5205f786ebdc430c1fab2546ad309493bd944cd6183->leave($__internal_59a7bb87ab0d155f37f1a5205f786ebdc430c1fab2546ad309493bd944cd6183_prof);

    }

    public function getTemplateName()
    {
        return "inbox/inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/* 		<div align="center "id="usuario">*/
/* 		{% for alias in alias %}*/
/* 			<p id="alias">Welcome {{ alias.alias }}</p>*/
/* 			 {% endfor %}*/
/* 			<a href="{{ path('cerrar') }}" id="enlace">Log out</a>*/
/* 		</div>*/
/*     </body>*/
/* </html>*/
/* */

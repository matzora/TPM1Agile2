<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d06a0594d388f5e12e36e7e4d31c105fbfb0364407b0d56150ebf8d6ea9534a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61f97f3d08cb2c40d291187baba6c83ea0339ab2f5dd7c46f2111bfc1f33a38e = $this->env->getExtension("native_profiler");
        $__internal_61f97f3d08cb2c40d291187baba6c83ea0339ab2f5dd7c46f2111bfc1f33a38e->enter($__internal_61f97f3d08cb2c40d291187baba6c83ea0339ab2f5dd7c46f2111bfc1f33a38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f97f3d08cb2c40d291187baba6c83ea0339ab2f5dd7c46f2111bfc1f33a38e->leave($__internal_61f97f3d08cb2c40d291187baba6c83ea0339ab2f5dd7c46f2111bfc1f33a38e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d41350f91be3ae4520169a19003d14e4e40a4a5a6bca0fba6b81dafcea6bc6d2 = $this->env->getExtension("native_profiler");
        $__internal_d41350f91be3ae4520169a19003d14e4e40a4a5a6bca0fba6b81dafcea6bc6d2->enter($__internal_d41350f91be3ae4520169a19003d14e4e40a4a5a6bca0fba6b81dafcea6bc6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d41350f91be3ae4520169a19003d14e4e40a4a5a6bca0fba6b81dafcea6bc6d2->leave($__internal_d41350f91be3ae4520169a19003d14e4e40a4a5a6bca0fba6b81dafcea6bc6d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17476497d0c84e64dc14f48f0a8d6bea2f9f8f5ae18d42972c4e699781abb0c4 = $this->env->getExtension("native_profiler");
        $__internal_17476497d0c84e64dc14f48f0a8d6bea2f9f8f5ae18d42972c4e699781abb0c4->enter($__internal_17476497d0c84e64dc14f48f0a8d6bea2f9f8f5ae18d42972c4e699781abb0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17476497d0c84e64dc14f48f0a8d6bea2f9f8f5ae18d42972c4e699781abb0c4->leave($__internal_17476497d0c84e64dc14f48f0a8d6bea2f9f8f5ae18d42972c4e699781abb0c4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1adfa1d812c70a23c3308216a77ce5f8398e352ddbb99d74f9183d3f526be76 = $this->env->getExtension("native_profiler");
        $__internal_d1adfa1d812c70a23c3308216a77ce5f8398e352ddbb99d74f9183d3f526be76->enter($__internal_d1adfa1d812c70a23c3308216a77ce5f8398e352ddbb99d74f9183d3f526be76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d1adfa1d812c70a23c3308216a77ce5f8398e352ddbb99d74f9183d3f526be76->leave($__internal_d1adfa1d812c70a23c3308216a77ce5f8398e352ddbb99d74f9183d3f526be76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

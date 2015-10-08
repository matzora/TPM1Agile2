<?php

/* TPM1Agile2FrontBundle:Default:index.html.twig */
class __TwigTemplate_99a8caaaa44985d702ccca7b7dc6534cbdba00ee33b840056015eb84f0d2b439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TPM1Agile2FrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7681c119a2ba7b0316ed0e3e89e9912e6950da0d26195397bc4233d03a03a44c = $this->env->getExtension("native_profiler");
        $__internal_7681c119a2ba7b0316ed0e3e89e9912e6950da0d26195397bc4233d03a03a44c->enter($__internal_7681c119a2ba7b0316ed0e3e89e9912e6950da0d26195397bc4233d03a03a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TPM1Agile2FrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7681c119a2ba7b0316ed0e3e89e9912e6950da0d26195397bc4233d03a03a44c->leave($__internal_7681c119a2ba7b0316ed0e3e89e9912e6950da0d26195397bc4233d03a03a44c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa91498fdc3811642f81777c9c03a65f7ca9219cfcca618ba43f2552ef81d6ce = $this->env->getExtension("native_profiler");
        $__internal_aa91498fdc3811642f81777c9c03a65f7ca9219cfcca618ba43f2552ef81d6ce->enter($__internal_aa91498fdc3811642f81777c9c03a65f7ca9219cfcca618ba43f2552ef81d6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
";
        
        $__internal_aa91498fdc3811642f81777c9c03a65f7ca9219cfcca618ba43f2552ef81d6ce->leave($__internal_aa91498fdc3811642f81777c9c03a65f7ca9219cfcca618ba43f2552ef81d6ce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e8b8355f5faa24186f5e406ae042d4b9d0e525e9adc93f5c0417199205e8ec4 = $this->env->getExtension("native_profiler");
        $__internal_1e8b8355f5faa24186f5e406ae042d4b9d0e525e9adc93f5c0417199205e8ec4->enter($__internal_1e8b8355f5faa24186f5e406ae042d4b9d0e525e9adc93f5c0417199205e8ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <p>Vous êtes sur la page d'accueil</p>
";
        
        $__internal_1e8b8355f5faa24186f5e406ae042d4b9d0e525e9adc93f5c0417199205e8ec4->leave($__internal_1e8b8355f5faa24186f5e406ae042d4b9d0e525e9adc93f5c0417199205e8ec4_prof);

    }

    public function getTemplateName()
    {
        return "TPM1Agile2FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  54 => 7,  45 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block stylesheets %} {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css" media="all"/>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <p>Vous êtes sur la page d'accueil</p>*/
/* {% endblock %}*/

<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_b1aa467026bd98c4e4172285d0fd23f7c76a900bedffe52e681905eacee7a01b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::error.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::error.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <section class=\"cover notfound\">
        <div class=\"message_bloc\">
            <div class=\"error_id\">404</div>
            <h1>Contenu non trouvé.</h1>
            <blockquote>
                <q class=\"close-quote\">This is not the page you are looking for.</q>
                <p><small>Obi-Wan Kenobi</small></p>
            </blockquote>
            <div class=\"btn green_btn\">
                <a class=\"navbar-brand logo\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("klass_homepage");
        echo "\">
                    Retourner à l'accueil
                </a>
            </div>
        </div>            
    </section>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::error.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css" media="all"/>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <section class="cover notfound">*/
/*         <div class="message_bloc">*/
/*             <div class="error_id">404</div>*/
/*             <h1>Contenu non trouvé.</h1>*/
/*             <blockquote>*/
/*                 <q class="close-quote">This is not the page you are looking for.</q>*/
/*                 <p><small>Obi-Wan Kenobi</small></p>*/
/*             </blockquote>*/
/*             <div class="btn green_btn">*/
/*                 <a class="navbar-brand logo" href="{{ path('klass_homepage') }}">*/
/*                     Retourner à l'accueil*/
/*                 </a>*/
/*             </div>*/
/*         </div>            */
/*     </section>*/
/* {% endblock body %}*/

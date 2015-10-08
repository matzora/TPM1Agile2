<?php

/* ::error.html.twig */
class __TwigTemplate_371aef9044d3b7cca24e455300ba1592643b460c729aff68c45dc9ee964e741f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html, width=device-width, initial-scale=1\" charset=\"UTF-8\"/>

    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\"/>
</head>
<body class=\"klass\">
<content>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "</content>

";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  89 => 22,  84 => 21,  81 => 20,  77 => 17,  74 => 16,  68 => 9,  64 => 8,  59 => 7,  56 => 6,  49 => 25,  47 => 20,  43 => 18,  41 => 16,  34 => 12,  31 => 11,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html, width=device-width, initial-scale=1" charset="UTF-8"/>*/
/* */
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" media="screen"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>*/
/*         <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css" media="all"/>*/
/*     {% endblock stylesheets %}*/
/* */
/*     <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"/>*/
/* </head>*/
/* <body class="klass">*/
/* <content>*/
/*     {% block body %}*/
/*     {% endblock body %}*/
/* </content>*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */

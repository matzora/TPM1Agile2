<?php

/* ::base.html.twig */
class __TwigTemplate_0eac32668925036aef376e4885ca8664e4554c2415b60bd5005272a97457ffdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d67815e9771fcd20c04246009ebb03f0eb700eca29b341afcd6cd27c868e79dd = $this->env->getExtension("native_profiler");
        $__internal_d67815e9771fcd20c04246009ebb03f0eb700eca29b341afcd6cd27c868e79dd->enter($__internal_d67815e9771fcd20c04246009ebb03f0eb700eca29b341afcd6cd27c868e79dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\"/>
</head>
<body class=\"klass\">
<header>
    <div class=\"header_content\">
        ";
        // line 23
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 24
            echo "            <div class=\"top_bar\">
                <ul class=\"top_bar_navigation\">

                    <li>
                        <a class=\"top_btn\" href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                            <span><i class=\"fa fa-power-off\"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        ";
        }
        // line 36
        echo "        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand logo\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("tpm1_agile2_front_homepage");
        echo "\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo Klass\"/>
                    </a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">

                        ";
        // line 54
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 55
            echo "                            <li class=\"popdown\">
                                <a class=\"btn\" id=\"connection_popdown\" href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"
                                   role=\"button\">
                                    <span><i class=\"fa fa-user\"></i></span><span>Connexion</span>
                                </a>
                            </li>
                            <li>
                                <a class=\"btn\" href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
                                    <span>
                                        <i class=\"fa fa-pencil\"></i>
                                    </span>
                                    <span>Inscription</span>
                                </a>
                            </li>
                        ";
        }
        // line 70
        echo "
                        ";
        // line 71
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 72
            echo "                            <li class=\"popdown\">
                                <a class=\"btn\" href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("klass_stats");
            echo "\" role=\"button\">
                                    <span>
                                        <i class=\"fa fa-bar-chart\"></i>
                                    </span>
                                    <span>statistiques</span>
                                </a>
                            </li>
                        ";
        }
        // line 81
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<content>
    ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "</content>

</body>
</html>
";
        
        $__internal_d67815e9771fcd20c04246009ebb03f0eb700eca29b341afcd6cd27c868e79dd->leave($__internal_d67815e9771fcd20c04246009ebb03f0eb700eca29b341afcd6cd27c868e79dd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d4f31dafbdbe3ca2830c1a25dc335a719b005fdd09446b8266644bcbfa9472e = $this->env->getExtension("native_profiler");
        $__internal_1d4f31dafbdbe3ca2830c1a25dc335a719b005fdd09446b8266644bcbfa9472e->enter($__internal_1d4f31dafbdbe3ca2830c1a25dc335a719b005fdd09446b8266644bcbfa9472e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1d4f31dafbdbe3ca2830c1a25dc335a719b005fdd09446b8266644bcbfa9472e->leave($__internal_1d4f31dafbdbe3ca2830c1a25dc335a719b005fdd09446b8266644bcbfa9472e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4534b9eba1257c4bc20e81dc7bf5120760c58c22c409303e6c250f6e1656f0a = $this->env->getExtension("native_profiler");
        $__internal_c4534b9eba1257c4bc20e81dc7bf5120760c58c22c409303e6c250f6e1656f0a->enter($__internal_c4534b9eba1257c4bc20e81dc7bf5120760c58c22c409303e6c250f6e1656f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_c4534b9eba1257c4bc20e81dc7bf5120760c58c22c409303e6c250f6e1656f0a->leave($__internal_c4534b9eba1257c4bc20e81dc7bf5120760c58c22c409303e6c250f6e1656f0a_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f55d70ca73c3578da8e209b791efb89252e114195fa2642e0d940f2a87aa2a = $this->env->getExtension("native_profiler");
        $__internal_04f55d70ca73c3578da8e209b791efb89252e114195fa2642e0d940f2a87aa2a->enter($__internal_04f55d70ca73c3578da8e209b791efb89252e114195fa2642e0d940f2a87aa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "    ";
        
        $__internal_04f55d70ca73c3578da8e209b791efb89252e114195fa2642e0d940f2a87aa2a->leave($__internal_04f55d70ca73c3578da8e209b791efb89252e114195fa2642e0d940f2a87aa2a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 89,  212 => 88,  203 => 15,  199 => 14,  194 => 13,  188 => 12,  179 => 9,  175 => 8,  170 => 7,  164 => 6,  153 => 90,  151 => 88,  142 => 81,  131 => 73,  128 => 72,  126 => 71,  123 => 70,  112 => 62,  103 => 56,  100 => 55,  98 => 54,  88 => 47,  84 => 46,  72 => 36,  62 => 29,  58 => 28,  52 => 24,  50 => 23,  42 => 18,  39 => 17,  37 => 12,  34 => 11,  32 => 6,  25 => 1,);
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
/*     {% block javascripts %}*/
/*         <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>*/
/*     {% endblock %}*/
/* */
/*     <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"/>*/
/* </head>*/
/* <body class="klass">*/
/* <header>*/
/*     <div class="header_content">*/
/*         {% if app.user %}*/
/*             <div class="top_bar">*/
/*                 <ul class="top_bar_navigation">*/
/* */
/*                     <li>*/
/*                         <a class="top_btn" href="{{ path('fos_user_security_logout') }}">*/
/*                             <span>{{ app.user.username }} </span>*/
/*                             <span><i class="fa fa-power-off"></i></span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         {% endif %}*/
/*         <nav class="navbar navbar-default">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"*/
/*                             data-target="#bs-example-navbar-collapse-1">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand logo" href="{{ path('tpm1_agile2_front_homepage') }}">*/
/*                         <img src="{{ asset('img/logo.png') }}" alt="logo Klass"/>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/* */
/*                         {% if not app.user %}*/
/*                             <li class="popdown">*/
/*                                 <a class="btn" id="connection_popdown" href="{{ path('fos_user_security_login') }}"*/
/*                                    role="button">*/
/*                                     <span><i class="fa fa-user"></i></span><span>Connexion</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a class="btn" href="{{ path('fos_user_registration_register') }}">*/
/*                                     <span>*/
/*                                         <i class="fa fa-pencil"></i>*/
/*                                     </span>*/
/*                                     <span>Inscription</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endif %}*/
/* */
/*                         {% if (app.user and is_granted("ROLE_ADMIN")) %}*/
/*                             <li class="popdown">*/
/*                                 <a class="btn" href="{{ path('klass_stats') }}" role="button">*/
/*                                     <span>*/
/*                                         <i class="fa fa-bar-chart"></i>*/
/*                                     </span>*/
/*                                     <span>statistiques</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* </header>*/
/* <content>*/
/*     {% block body %}*/
/*     {% endblock body %}*/
/* </content>*/
/* */
/* </body>*/
/* </html>*/
/* */

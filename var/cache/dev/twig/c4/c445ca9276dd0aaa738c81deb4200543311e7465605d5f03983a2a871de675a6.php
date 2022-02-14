<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_d9877dd0e39f1521ed25d99cd653a789ad8ce762d5b34cf60fe62d78287c101d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Alex+Brush\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/open-iconic-bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/animate.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/magnific-popup.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/aos.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/ionicons.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/jquery.timepicker.css"), "html", null, true);
        echo "\">


    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Trippy travel</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\"><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">Acceuil</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maisonhotes");
        echo "\" class=\"nav-link\">Maison d'hotes</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion");
        echo "\" class=\"nav-link\">Excursion</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel");
        echo "\" class=\"nav-link\">Hotels</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\" class=\"nav-link\">Blog</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attraction");
        echo "\" class=\"nav-link\">Attraction</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\" /></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4 ml-md-5\">
                    <h2 class=\"ftco-heading-2\">Information</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\" class=\"py-2 d-block\">About</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Service</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Terms and Conditions</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Become a partner</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Best Price Guarantee</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Privacy and Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Customer Support</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Payment Option</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Booking Tips</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
                    <div class=\"block-23 mb-3\">
                        <ul>
                            <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                            <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/jquery.timepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 54,  315 => 4,  301 => 142,  297 => 141,  292 => 139,  288 => 138,  284 => 137,  280 => 136,  276 => 135,  272 => 134,  268 => 133,  264 => 132,  260 => 131,  256 => 130,  252 => 129,  248 => 128,  244 => 127,  240 => 126,  173 => 62,  165 => 56,  163 => 54,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  119 => 34,  110 => 28,  106 => 27,  102 => 26,  96 => 23,  92 => 22,  87 => 20,  82 => 18,  77 => 16,  73 => 15,  69 => 14,  64 => 12,  60 => 11,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{% block title %} {% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Alex+Brush\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/open-iconic-bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/animate.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/magnific-popup.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/aos.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/ionicons.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/jquery.timepicker.css') }}\">


    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/icomoon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-office/css/style.css') }}\">
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path(\"home\") }}\">Trippy travel</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\"><a href=\"{{ path(\"home\") }}\" class=\"nav-link\">Acceuil</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"maisonhotes\") }}\" class=\"nav-link\">Maison d'hotes</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"excursion\") }}\" class=\"nav-link\">Excursion</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"hotel\") }}\" class=\"nav-link\">Hotels</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"blog\") }}\" class=\"nav-link\">Blog</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"attraction\") }}\" class=\"nav-link\">Attraction</a></li>
                <li class=\"nav-item\"><a href=\"{{ path(\"contact\") }}\" class=\"nav-link\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

{% block body %}
{% endblock %}

<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\"><img src=\"{{ asset('logo.png') }}\" /></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4 ml-md-5\">
                    <h2 class=\"ftco-heading-2\">Information</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\" class=\"py-2 d-block\">About</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Service</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Terms and Conditions</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Become a partner</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Best Price Guarantee</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Privacy and Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Customer Support</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\" class=\"py-2 d-block\">FAQ</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Payment Option</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Booking Tips</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
                    <div class=\"block-23 mb-3\">
                        <ul>
                            <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                            <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


<script src=\"{{ asset('front-office/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/jquery-migrate-3.0.1.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/jquery.easing.1.3.js') }}\"></script>
<script src=\"{{ asset('front-office/js/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/jquery.stellar.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/aos.js') }}\"></script>
<script src=\"{{ asset('front-office/js/jquery.animateNumber.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/bootstrap-datepicker.js') }}\"></script>
<script src=\"{{ asset('front-office/js/jquery.timepicker.min.js') }}\"></script>
<script src=\"{{ asset('front-office/js/scrollax.min.js') }}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
<script src=\"{{ asset('front-office/js/google-map.js') }}\"></script>
<script src=\"{{ asset('front-office/js/main.js') }}\"></script>

</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\TrippyTravel\\templates\\base.html.twig");
    }
}

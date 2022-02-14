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

/* excursion/index.html.twig */
class __TwigTemplate_3fd7f56b417a887c1565b6ca47a73eeb55b34bc500e03bb1fbf8ba57c51ad1ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "excursion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "excursion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "excursion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ExcursionController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('front-office/images/bg_3.jpg');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                <div class=\"col-md-9 ftco-animate text-center\" data-scrollax=\" properties: { translateY: '70%' }\">
                    <p class=\"breadcrumbs\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\"><span class=\"mr-2\"><a href=\"index.html\">Home</a></span> <span>Tour</span></p>
                    <h1 class=\"mb-3 bread\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Destination</h1>
                </div>
            </div>
        </div>
    </div>


    <section class=\"ftco-section ftco-degree-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 sidebar ftco-animate\">
                    <div class=\"sidebar-wrap bg-light ftco-animate\">
                        <h3 class=\"heading mb-4\">Find City</h3>
                        <form action=\"#\">
                            <div class=\"fields\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Destination, City\">
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"select-wrap one-third\">
                                        <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                        <select name=\"\" id=\"\" class=\"form-control\" placeholder=\"Keyword search\">
                                            <option value=\"\">Select Location</option>
                                            <option value=\"\">San Francisco USA</option>
                                            <option value=\"\">Berlin Germany</option>
                                            <option value=\"\">Lodon United Kingdom</option>
                                            <option value=\"\">Paris Italy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"checkin_date\" class=\"form-control\" placeholder=\"Date from\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"checkin_date\" class=\"form-control\" placeholder=\"Date to\">
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"range-slider\">
\t\t              \t\t<span>
\t\t\t\t\t\t\t\t\t\t    <input type=\"number\" value=\"25000\" min=\"0\" max=\"120000\"/>\t-
\t\t\t\t\t\t\t\t\t\t    <input type=\"number\" value=\"50000\" min=\"0\" max=\"120000\"/>
\t\t\t\t\t\t\t\t\t\t  </span>
                                        <input value=\"1000\" min=\"0\" max=\"120000\" step=\"500\" type=\"range\"/>
                                        <input value=\"50000\" min=\"0\" max=\"120000\" step=\"500\" type=\"range\"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Search\" class=\"btn btn-primary py-3 px-5\">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"sidebar-wrap bg-light ftco-animate\">
                        <h3 class=\"heading mb-4\">Star Rating</h3>
                        <form method=\"post\" class=\"star-rating\">
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-9\">
                    <div class=\"row\">
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-1.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-2.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-3.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-4.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-5.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-6.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row mt-5\">
                        <div class=\"col text-center\">
                            <div class=\"block-27\">
                                <ul>
                                    <li><a href=\"#\">&lt;</a></li>
                                    <li class=\"active\"><span>1</span></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>
                                    <li><a href=\"#\">5</a></li>
                                    <li><a href=\"#\">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "excursion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ExcursionController!{% endblock %}

{% block body %}
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('front-office/images/bg_3.jpg');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                <div class=\"col-md-9 ftco-animate text-center\" data-scrollax=\" properties: { translateY: '70%' }\">
                    <p class=\"breadcrumbs\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\"><span class=\"mr-2\"><a href=\"index.html\">Home</a></span> <span>Tour</span></p>
                    <h1 class=\"mb-3 bread\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">Destination</h1>
                </div>
            </div>
        </div>
    </div>


    <section class=\"ftco-section ftco-degree-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 sidebar ftco-animate\">
                    <div class=\"sidebar-wrap bg-light ftco-animate\">
                        <h3 class=\"heading mb-4\">Find City</h3>
                        <form action=\"#\">
                            <div class=\"fields\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Destination, City\">
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"select-wrap one-third\">
                                        <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                        <select name=\"\" id=\"\" class=\"form-control\" placeholder=\"Keyword search\">
                                            <option value=\"\">Select Location</option>
                                            <option value=\"\">San Francisco USA</option>
                                            <option value=\"\">Berlin Germany</option>
                                            <option value=\"\">Lodon United Kingdom</option>
                                            <option value=\"\">Paris Italy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"checkin_date\" class=\"form-control\" placeholder=\"Date from\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"checkin_date\" class=\"form-control\" placeholder=\"Date to\">
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"range-slider\">
\t\t              \t\t<span>
\t\t\t\t\t\t\t\t\t\t    <input type=\"number\" value=\"25000\" min=\"0\" max=\"120000\"/>\t-
\t\t\t\t\t\t\t\t\t\t    <input type=\"number\" value=\"50000\" min=\"0\" max=\"120000\"/>
\t\t\t\t\t\t\t\t\t\t  </span>
                                        <input value=\"1000\" min=\"0\" max=\"120000\" step=\"500\" type=\"range\"/>
                                        <input value=\"50000\" min=\"0\" max=\"120000\" step=\"500\" type=\"range\"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Search\" class=\"btn btn-primary py-3 px-5\">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"sidebar-wrap bg-light ftco-animate\">
                        <h3 class=\"heading mb-4\">Star Rating</h3>
                        <form method=\"post\" class=\"star-rating\">
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">
                                    <p class=\"rate\"><span><i class=\"icon-star\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i><i class=\"icon-star-o\"></i></span></p>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-9\">
                    <div class=\"row\">
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-1.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-2.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-3.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-4.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-5.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 ftco-animate\">
                            <div class=\"destination\">
                                <a href=\"#\" class=\"img img-2 d-flex justify-content-center align-items-center\" style=\"background-image: url(front-office/images/destination-6.jpg);\">
                                    <div class=\"icon d-flex justify-content-center align-items-center\">
                                        <span class=\"icon-search2\"></span>
                                    </div>
                                </a>
                                <div class=\"text p-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"one\">
                                            <h3><a href=\"#\">Paris, Italy</a></h3>
                                            <p class=\"rate\">
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star\"></i>
                                                <i class=\"icon-star-o\"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class=\"two\">
                                            <span class=\"price\">\$200</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class=\"days\"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class=\"bottom-area d-flex\">
                                        <span><i class=\"icon-map-o\"></i> San Franciso, CA</span>
                                        <span class=\"ml-auto\"><a href=\"#\">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row mt-5\">
                        <div class=\"col text-center\">
                            <div class=\"block-27\">
                                <ul>
                                    <li><a href=\"#\">&lt;</a></li>
                                    <li class=\"active\"><span>1</span></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>
                                    <li><a href=\"#\">5</a></li>
                                    <li><a href=\"#\">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->

{% endblock %}
", "excursion/index.html.twig", "C:\\xampp\\htdocs\\TrippyTravel\\templates\\excursion\\index.html.twig");
    }
}

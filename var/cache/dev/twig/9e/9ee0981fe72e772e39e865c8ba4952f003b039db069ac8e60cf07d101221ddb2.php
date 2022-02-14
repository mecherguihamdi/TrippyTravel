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

/* baseBO.html.twig */
class __TwigTemplate_1707bcc134356926c9057bcf96349a1e27af101e98c23037e292b789733d5430 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBO.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBO.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/feather/feather.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/typicons/typicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/favicon.png"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
            <div class=\"me-3\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                    <span class=\"icon-menu\"></span>
                </button>
            </div>
            <div>
                <a class=\"navbar-brand brand-logo\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard");
        echo "\">
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\" alt=\"logo\" />
                </a>
                <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard");
        echo "\">
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\" alt=\"logo\" />
                </a>
            </div>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-top\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                    <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">John Doe</span></h1>
                    <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
                </li>
            </ul>
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item dropdown d-none d-lg-block\">
                    <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                        <a class=\"dropdown-item py-3\" >
                            <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle </p>
                                <p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
                                <p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
                                <p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
                                <p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item d-none d-lg-block\">
                    <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
              <span class=\"input-group-addon input-group-prepend border-right\">
                <span class=\"icon-calendar input-group-text calendar-icon\"></span>
              </span>
                        <input type=\"text\" class=\"form-control\">
                    </div>
                </li>
                <li class=\"nav-item\">
                    <form class=\"search-form\" action=\"#\">
                        <i class=\"icon-search\"></i>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
                    </form>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"icon-mail icon-lg\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                        <a class=\"dropdown-item py-3 border-bottom\">
                            <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
                            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                        </a>
                        <a class=\"dropdown-item preview-item py-3\">
                            <div class=\"preview-thumbnail\">
                                <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
                                <p class=\"fw-light small-text mb-0\"> Just now </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item py-3\">
                            <div class=\"preview-thumbnail\">
                                <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
                                <p class=\"fw-light small-text mb-0\"> Private message </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item py-3\">
                            <div class=\"preview-thumbnail\">
                                <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
                                <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"icon-bell\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
                        <a class=\"dropdown-item py-3\">
                            <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
                            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"back-office/images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner </p>
                                <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"back-office/images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey </p>
                                <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"back-office/images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins </p>
                                <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                    <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img class=\"img-xs rounded-circle\" src=\"back-office/images/faces/face8.jpg\" alt=\"Profile image\"> </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                        <div class=\"dropdown-header text-center\">
                            <img class=\"img-md rounded-circle\" src=\"back-office/images/faces/face8.jpg\" alt=\"Profile image\">
                            <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
                            <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
                        </div>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i> My Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i> Messages</a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i> Activity</a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i> FAQ</a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
                    </div>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
                <span class=\"mdi mdi-menu\"></span>
            </button>
        </div>
    </nav>
    <div class=\"container-fluid page-body-wrapper\">
        <div class=\"theme-setting-wrapper\">
            <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
            <div id=\"theme-settings\" class=\"settings-panel\">
                <i class=\"settings-close ti-close\"></i>
                <p class=\"settings-heading\">SIDEBAR SKINS</p>
                <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
                <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
                <p class=\"settings-heading mt-2\">HEADER SKINS</p>
                <div class=\"color-tiles mx-0 px-4\">
                    <div class=\"tiles success\"></div>
                    <div class=\"tiles warning\"></div>
                    <div class=\"tiles danger\"></div>
                    <div class=\"tiles info\"></div>
                    <div class=\"tiles dark\"></div>
                    <div class=\"tiles default\"></div>
                </div>
            </div>
        </div>
        <div id=\"right-sidebar\" class=\"settings-panel\">
            <i class=\"settings-close ti-close\"></i>
            <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
                </li>
            </ul>
            <div class=\"tab-content\" id=\"setting-content\">
                <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
                    <div class=\"add-items d-flex px-3 mb-0\">
                        <form class=\"form w-100\">
                            <div class=\"form-group d-flex\">
                                <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                                <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"list-wrapper px-3\">
                        <ul class=\"d-flex flex-column-reverse todo-list\">
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary me-2\"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
                        <p class=\"text-gray mb-0\">The total number of sessions</p>
                    </div>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary me-2\"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
                        <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
                    <div class=\"d-flex align-items-center justify-content-between border-bottom\">
                        <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
                        <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
                    </div>
                    <ul class=\"chat-list\">
                        <li class=\"list active\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">19 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <div class=\"wrapper d-flex\">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                            <small class=\"text-muted my-auto\">23 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">14 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class=\"text-muted my-auto\">2 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">5 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 372
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 378
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard/excursion");
        echo "\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Excursions</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 385
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard/hotel");
        echo "\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Hotels</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 392
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard/maisonhotes");
        echo "\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Maison d'hotes</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 399
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard/attraction");
        echo "\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Attractions</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 406
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard/blog");
        echo "\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Blog</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 413
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-dashboard/users");
        echo "\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Utilisateurs</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
            </ul>
        </nav>
        ";
        // line 421
        $this->displayBlock('body', $context, $blocks);
        // line 423
        echo "
    </div>
</div>

<!-- plugins:js -->
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page-->
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 421
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 422
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseBO.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 422,  602 => 421,  585 => 445,  581 => 444,  575 => 441,  571 => 440,  567 => 439,  563 => 438,  559 => 437,  552 => 433,  548 => 432,  544 => 431,  538 => 428,  531 => 423,  529 => 421,  518 => 413,  508 => 406,  498 => 399,  488 => 392,  478 => 385,  468 => 378,  459 => 372,  125 => 41,  121 => 40,  116 => 38,  112 => 37,  96 => 24,  91 => 22,  85 => 19,  81 => 18,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendors/feather/feather.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendors/typicons/typicons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendors/simple-line-icons/css/simple-line-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendors/css/vendor.bundle.base.css') }}\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/js/select.dataTables.min.css') }}\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/css/vertical-layout-light/style.css') }}\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset('back-office/images/favicon.png') }}\" />
</head>
<body>
<div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
            <div class=\"me-3\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                    <span class=\"icon-menu\"></span>
                </button>
            </div>
            <div>
                <a class=\"navbar-brand brand-logo\" href=\"{{ path('admin-dashboard') }}\">
                    <img src=\"{{asset('logo.png')}}\" alt=\"logo\" />
                </a>
                <a class=\"navbar-brand brand-logo-mini\" href=\"{{ path('admin-dashboard') }}\">
                    <img src=\"{{asset('logo.png')}}\" alt=\"logo\" />
                </a>
            </div>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-top\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                    <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">John Doe</span></h1>
                    <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
                </li>
            </ul>
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item dropdown d-none d-lg-block\">
                    <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                        <a class=\"dropdown-item py-3\" >
                            <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle </p>
                                <p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
                                <p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
                                <p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
                                <p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item d-none d-lg-block\">
                    <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
              <span class=\"input-group-addon input-group-prepend border-right\">
                <span class=\"icon-calendar input-group-text calendar-icon\"></span>
              </span>
                        <input type=\"text\" class=\"form-control\">
                    </div>
                </li>
                <li class=\"nav-item\">
                    <form class=\"search-form\" action=\"#\">
                        <i class=\"icon-search\"></i>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
                    </form>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"icon-mail icon-lg\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                        <a class=\"dropdown-item py-3 border-bottom\">
                            <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
                            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                        </a>
                        <a class=\"dropdown-item preview-item py-3\">
                            <div class=\"preview-thumbnail\">
                                <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
                                <p class=\"fw-light small-text mb-0\"> Just now </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item py-3\">
                            <div class=\"preview-thumbnail\">
                                <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
                                <p class=\"fw-light small-text mb-0\"> Private message </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item py-3\">
                            <div class=\"preview-thumbnail\">
                                <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
                                <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"icon-bell\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
                        <a class=\"dropdown-item py-3\">
                            <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
                            <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"back-office/images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Marian Garner </p>
                                <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"back-office/images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">David Grey </p>
                                <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"back-office/images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow py-2\">
                                <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Travis Jenkins </p>
                                <p class=\"fw-light small-text mb-0\"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                    <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img class=\"img-xs rounded-circle\" src=\"back-office/images/faces/face8.jpg\" alt=\"Profile image\"> </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                        <div class=\"dropdown-header text-center\">
                            <img class=\"img-md rounded-circle\" src=\"back-office/images/faces/face8.jpg\" alt=\"Profile image\">
                            <p class=\"mb-1 mt-3 font-weight-semibold\">Allen Moreno</p>
                            <p class=\"fw-light text-muted mb-0\">allenmoreno@gmail.com</p>
                        </div>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i> My Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i> Messages</a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i> Activity</a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i> FAQ</a>
                        <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-power text-primary me-2\"></i>Sign Out</a>
                    </div>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
                <span class=\"mdi mdi-menu\"></span>
            </button>
        </div>
    </nav>
    <div class=\"container-fluid page-body-wrapper\">
        <div class=\"theme-setting-wrapper\">
            <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
            <div id=\"theme-settings\" class=\"settings-panel\">
                <i class=\"settings-close ti-close\"></i>
                <p class=\"settings-heading\">SIDEBAR SKINS</p>
                <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
                <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
                <p class=\"settings-heading mt-2\">HEADER SKINS</p>
                <div class=\"color-tiles mx-0 px-4\">
                    <div class=\"tiles success\"></div>
                    <div class=\"tiles warning\"></div>
                    <div class=\"tiles danger\"></div>
                    <div class=\"tiles info\"></div>
                    <div class=\"tiles dark\"></div>
                    <div class=\"tiles default\"></div>
                </div>
            </div>
        </div>
        <div id=\"right-sidebar\" class=\"settings-panel\">
            <i class=\"settings-close ti-close\"></i>
            <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
                </li>
            </ul>
            <div class=\"tab-content\" id=\"setting-content\">
                <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
                    <div class=\"add-items d-flex px-3 mb-0\">
                        <form class=\"form w-100\">
                            <div class=\"form-group d-flex\">
                                <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                                <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"list-wrapper px-3\">
                        <ul class=\"d-flex flex-column-reverse todo-list\">
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li>
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                            <li class=\"completed\">
                                <div class=\"form-check\">
                                    <label class=\"form-check-label\">
                                        <input class=\"checkbox\" type=\"checkbox\" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class=\"remove ti-close\"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary me-2\"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
                        <p class=\"text-gray mb-0\">The total number of sessions</p>
                    </div>
                    <div class=\"events pt-4 px-3\">
                        <div class=\"wrapper d-flex mb-2\">
                            <i class=\"ti-control-record text-primary me-2\"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
                        <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
                    <div class=\"d-flex align-items-center justify-content-between border-bottom\">
                        <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
                        <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
                    </div>
                    <ul class=\"chat-list\">
                        <li class=\"list active\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">19 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <div class=\"wrapper d-flex\">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                            <small class=\"text-muted my-auto\">23 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">14 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                            <div class=\"info\">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class=\"text-muted my-auto\">2 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">5 min</small>
                        </li>
                        <li class=\"list\">
                            <div class=\"profile\"><img src=\"back-office/images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                            <div class=\"info\">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class=\"text-muted my-auto\">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('admin-dashboard') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin-dashboard/excursion') }}\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Excursions</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin-dashboard/hotel') }}\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Hotels</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin-dashboard/maisonhotes') }}\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Maison d'hotes</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin-dashboard/attraction') }}\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Attractions</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin-dashboard/blog') }}\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Blog</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin-dashboard/users') }}\" class=\"nav-link\" >
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">Utilisateurs</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                </li>
            </ul>
        </nav>
        {% block body %}
        {% endblock %}

    </div>
</div>

<!-- plugins:js -->
<script src=\"{{ asset('back-office/vendors/js/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"{{ asset('back-office/vendors/chart.js/Chart.min.js') }}\"></script>
<script src=\"{{ asset('back-office/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"{{ asset('back-office/vendors/progressbar.js/progressbar.min.js') }}\"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"{{ asset('back-office/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('back-office/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('back-office/js/template.js') }}\"></script>
<script src=\"{{ asset('back-office/js/settings.js') }}\"></script>
<script src=\"{{ asset('back-office/js/todolist.js') }}\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"{{ asset('back-office/js/dashboard.js') }}\"></script>
<script src=\"{{ asset('back-office/js/Chart.roundedBarCharts.js') }}\"></script>
<!-- End custom js for this page-->
</body>

</html>

", "baseBO.html.twig", "C:\\xampp\\htdocs\\TrippyTravel\\templates\\baseBO.html.twig");
    }
}

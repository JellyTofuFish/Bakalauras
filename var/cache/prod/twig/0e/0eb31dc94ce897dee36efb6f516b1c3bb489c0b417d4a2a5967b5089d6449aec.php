<?php

/* admin.html.twig */
class __TwigTemplate_bc325a038767061e383978a9fc762e5c5fe2cac8cc2985811b4cada773d03f48 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'admin_right_nav' => [$this, 'block_admin_right_nav'],
            'admin_main' => [$this, 'block_admin_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 3
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", []), "get", [0 => "_route"], "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "_form_navbar.html.twig");
        echo "
    <div class=\"container-fluid\">
        <div class=\"row flex-xl-nowrap\">
            <div class=\"col-12 col-md-2 col-xl-2 bd-sidebar\">
                <nav class=\"navbar navbar-light bg-light navigation-sm\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                </nav>
                <nav class=\"bd-links collapse\" id=\"navbarToggleExternalContent\">
                    <div class=\"bd-toc-item ";
        // line 16
        echo ((twig_in_filter("question", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 16, $this->source); })()))) ? ("active") : (""));
        echo "\">
                        <a class=\"bd-toc-link ";
        // line 17
        echo ((twig_in_filter("question", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 17, $this->source); })()))) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.title"), "html", null, true);
        echo "</a>
                        ";
        // line 18
        if (twig_in_filter("question", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "                        <ul class=\"nav flex-column\">
                            <li>
                                <a class=\"nav-link ";
            // line 21
            echo ((twig_in_filter("index", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 21, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.index"), "html", null, true);
            echo "</a>
                            </li>
                            <li>
                                ";
            // line 24
            if ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 24, $this->source); })())) || twig_in_filter("show", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 24, $this->source); })())))) {
                // line 25
                echo "                                <a class=\"nav-link ";
                echo ((twig_in_filter("show", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 25, $this->source); })()))) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 25, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show"), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 27
                echo "                                <a class=\"nav-link disabled-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["route" => "route_show"]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 29
            echo "                            </li>
                            <li>
                                ";
            // line 31
            if ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 31, $this->source); })())) || twig_in_filter("show", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 31, $this->source); })())))) {
                // line 32
                echo "                                <a class=\"nav-link ";
                echo ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 32, $this->source); })()))) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 32, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.edit"), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 34
                echo "                                <a class=\"nav-link disabled-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["route" => "route_edit"]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.edit"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 36
            echo "                            </li>
                            <li>
                                <a class=\"nav-link ";
            // line 38
            echo ((twig_in_filter("new", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 38, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.new"), "html", null, true);
            echo "</a>
                            </li>
                        </ul>
                        ";
        }
        // line 42
        echo "                    </div>

                    <div class=\"bd-toc-item ";
        // line 44
        echo ((twig_in_filter("test", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 44, $this->source); })()))) ? ("active") : (""));
        echo "\">
                        <a class=\"bd-toc-link ";
        // line 45
        echo ((twig_in_filter("test", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 45, $this->source); })()))) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.title"), "html", null, true);
        echo "</a>
                        ";
        // line 46
        if (twig_in_filter("test", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 46, $this->source); })()))) {
            // line 47
            echo "                        <ul class=\"nav flex-column\">
                            <li>
                                <a class=\"nav-link ";
            // line 49
            echo ((twig_in_filter("index", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 49, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.index"), "html", null, true);
            echo "</a>
                            </li>
                            <li>
                                ";
            // line 52
            if ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 52, $this->source); })())) || twig_in_filter("show", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 52, $this->source); })())))) {
                // line 53
                echo "                                    <a class=\"nav-link ";
                echo ((twig_in_filter("show", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 53, $this->source); })()))) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new Twig_Error_Runtime('Variable "test" does not exist.', 53, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.show"), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 55
                echo "                                    <a class=\"nav-link disabled-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_index", ["route" => "route_show"]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.show"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 57
            echo "                            </li>
                            <li>
                                ";
            // line 59
            if ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 59, $this->source); })())) || twig_in_filter("show", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 59, $this->source); })())))) {
                // line 60
                echo "                                    <a class=\"nav-link ";
                echo ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 60, $this->source); })()))) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new Twig_Error_Runtime('Variable "test" does not exist.', 60, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.edit"), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 62
                echo "                                    <a class=\"nav-link disabled-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_index", ["route" => "route_edit"]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.edit"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 64
            echo "                            </li>
                            <li>
                                <a class=\"nav-link ";
            // line 66
            echo ((twig_in_filter("new", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 66, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.new"), "html", null, true);
            echo "</a>
                            </li>
                        </ul>
                        ";
        }
        // line 70
        echo "                    </div>

                    <div class=\"bd-toc-item ";
        // line 72
        echo ((twig_in_filter("attribute", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 72, $this->source); })()))) ? ("active") : (""));
        echo "\">
                        <a class=\"bd-toc-link ";
        // line 73
        echo ((twig_in_filter("attribute", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 73, $this->source); })()))) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attribute_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.attribute.title"), "html", null, true);
        echo "</a>
                        ";
        // line 74
        if (twig_in_filter("attribute", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 74, $this->source); })()))) {
            // line 75
            echo "                            <ul class=\"nav flex-column\">
                                <li>
                                    <a class=\"nav-link ";
            // line 77
            echo ((twig_in_filter("index", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 77, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attribute_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.attribute.index"), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    ";
            // line 80
            if ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 80, $this->source); })())) || twig_in_filter("show", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 80, $this->source); })())))) {
                // line 81
                echo "                                        <a class=\"nav-link ";
                echo ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 81, $this->source); })()))) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attribute_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 81, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.attribute.edit"), "html", null, true);
                echo "</a>
                                    ";
            } else {
                // line 83
                echo "                                        <a class=\"nav-link disabled-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attribute_index", ["route" => "route_edit"]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.attribute.edit"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 85
            echo "                                </li>
                            </ul>
                        ";
        }
        // line 88
        echo "                    </div>

                    <div class=\"bd-toc-item ";
        // line 90
        echo ((twig_in_filter("user", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 90, $this->source); })()))) ? ("active") : (""));
        echo "\">
                        <a class=\"bd-toc-link ";
        // line 91
        echo ((twig_in_filter("user", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 91, $this->source); })()))) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.user.title"), "html", null, true);
        echo "</a>
                        ";
        // line 92
        if (twig_in_filter("user", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 92, $this->source); })()))) {
            // line 93
            echo "                            <ul class=\"nav flex-column\">
                                <li>
                                    <a class=\"nav-link ";
            // line 95
            echo ((twig_in_filter("index", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 95, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.user.index"), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    <a class=\"nav-link ";
            // line 98
            echo ((twig_in_filter("edit", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 98, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.user.edit"), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    <a class=\"nav-link ";
            // line 101
            echo ((twig_in_filter("new", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 101, $this->source); })()))) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.user.new"), "html", null, true);
            echo "</a>
                                </li>
                            </ul>
                        ";
        }
        // line 105
        echo "                    </div>
                </nav>

            </div>

            ";
        // line 110
        if (((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 110, $this->source); })()) == "test_index") || ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 110, $this->source); })()) == "attribute_index")) || ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 110, $this->source); })()) == "user_index"))) {
            // line 111
            echo "            <div class=\" bd-toc d-none\">
            ";
        } else {
            // line 113
            echo "            <div class=\"d-xl-block col-md-2 col-xl-2 bd-toc d-none\">
            ";
        }
        // line 115
        echo "                ";
        $this->displayBlock('admin_right_nav', $context, $blocks);
        // line 117
        echo "            </div>
            ";
        // line 118
        if (((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 118, $this->source); })()) == "test_index") || ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 118, $this->source); })()) == "attribute_index")) || ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 118, $this->source); })()) == "user_index"))) {
            // line 119
            echo "            <div class=\"col-12 col-md-10 col-xl-10 py-md-3 px-md-5 bd-content\">
            ";
        } else {
            // line 121
            echo "            <div class=\"col-12 col-md-10 col-xl-8 py-md-3 pl-md-5 bd-content\">
            ";
        }
        // line 123
        echo "                ";
        $this->displayBlock('admin_main', $context, $blocks);
        // line 125
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 116
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 124
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 124,  410 => 123,  403 => 116,  397 => 115,  387 => 125,  384 => 123,  380 => 121,  376 => 119,  374 => 118,  371 => 117,  368 => 115,  364 => 113,  360 => 111,  358 => 110,  351 => 105,  340 => 101,  330 => 98,  320 => 95,  316 => 93,  314 => 92,  306 => 91,  302 => 90,  298 => 88,  293 => 85,  285 => 83,  275 => 81,  273 => 80,  263 => 77,  259 => 75,  257 => 74,  249 => 73,  245 => 72,  241 => 70,  230 => 66,  226 => 64,  218 => 62,  208 => 60,  206 => 59,  202 => 57,  194 => 55,  184 => 53,  182 => 52,  172 => 49,  168 => 47,  166 => 46,  158 => 45,  154 => 44,  150 => 42,  139 => 38,  135 => 36,  127 => 34,  117 => 32,  115 => 31,  111 => 29,  103 => 27,  93 => 25,  91 => 24,  81 => 21,  77 => 19,  75 => 18,  67 => 17,  63 => 16,  49 => 6,  43 => 5,  36 => 1,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% set route = app.request.get('_route') %}

{% block body %}
    {{ include('_form_navbar.html.twig') }}
    <div class=\"container-fluid\">
        <div class=\"row flex-xl-nowrap\">
            <div class=\"col-12 col-md-2 col-xl-2 bd-sidebar\">
                <nav class=\"navbar navbar-light bg-light navigation-sm\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                </nav>
                <nav class=\"bd-links collapse\" id=\"navbarToggleExternalContent\">
                    <div class=\"bd-toc-item {{ 'question' in route ? 'active' }}\">
                        <a class=\"bd-toc-link {{ 'question' in route ? 'active' }}\" href=\"{{ path('question_index') }}\">{{ 'button.question.title'|trans }}</a>
                        {% if 'question' in route %}
                        <ul class=\"nav flex-column\">
                            <li>
                                <a class=\"nav-link {{ 'index' in route ? 'active' }}\" href=\"{{ path('question_index') }}\">{{ 'button.question.index'|trans }}</a>
                            </li>
                            <li>
                                {% if 'edit' in route or 'show' in route %}
                                <a class=\"nav-link {{ 'show' in route ? 'active' }}\" href=\"{{ path('question_show', {'id': question.id}) }}\">{{ 'button.question.show'|trans }}</a>
                                {% else %}
                                <a class=\"nav-link disabled-menu\" href=\"{{ path('question_index', {'route': 'route_show'}) }}\">{{ 'button.question.show'|trans }}</a>
                                {% endif %}
                            </li>
                            <li>
                                {% if 'edit' in route or 'show' in route %}
                                <a class=\"nav-link {{ 'edit' in route ? 'active' }}\" href=\"{{ path('question_edit', {'id': question.id}) }}\">{{ 'button.question.edit'|trans }}</a>
                                {% else %}
                                <a class=\"nav-link disabled-menu\" href=\"{{ path('question_index', {'route': 'route_edit'})}}\">{{ 'button.question.edit'|trans }}</a>
                                {% endif %}
                            </li>
                            <li>
                                <a class=\"nav-link {{ 'new' in route ? 'active' }}\" href=\"{{ path('question_new') }}\">{{ 'button.question.new'|trans }}</a>
                            </li>
                        </ul>
                        {% endif %}
                    </div>

                    <div class=\"bd-toc-item {{ 'test' in route ? 'active' }}\">
                        <a class=\"bd-toc-link {{ 'test' in route ? 'active' }}\" href=\"{{ path('test_index') }}\">{{ 'button.test.title'|trans }}</a>
                        {% if 'test' in route %}
                        <ul class=\"nav flex-column\">
                            <li>
                                <a class=\"nav-link {{ 'index' in route ? 'active' }}\" href=\"{{ path('test_index') }}\">{{ 'button.test.index'|trans }}</a>
                            </li>
                            <li>
                                {% if 'edit' in route or 'show' in route %}
                                    <a class=\"nav-link {{ 'show' in route ? 'active' }}\" href=\"{{ path('test_show', {'id': test.id}) }}\">{{ 'button.test.show'|trans }}</a>
                                {% else %}
                                    <a class=\"nav-link disabled-menu\" href=\"{{ path('test_index', {'route': 'route_show'}) }}\">{{ 'button.test.show'|trans }}</a>
                                {% endif %}
                            </li>
                            <li>
                                {% if 'edit' in route or 'show' in route %}
                                    <a class=\"nav-link {{ 'edit' in route ? 'active' }}\" href=\"{{ path('test_edit', {'id': test.id}) }}\">{{ 'button.test.edit'|trans }}</a>
                                {% else %}
                                    <a class=\"nav-link disabled-menu\" href=\"{{ path('test_index', {'route': 'route_edit'})}}\">{{ 'button.test.edit'|trans }}</a>
                                {% endif %}
                            </li>
                            <li>
                                <a class=\"nav-link {{ 'new' in route ? 'active' }}\" href=\"{{ path('test_new') }}\">{{ 'button.test.new'|trans }}</a>
                            </li>
                        </ul>
                        {% endif %}
                    </div>

                    <div class=\"bd-toc-item {{ 'attribute' in route ? 'active' }}\">
                        <a class=\"bd-toc-link {{ 'attribute' in route ? 'active' }}\" href=\"{{ path('attribute_index') }}\">{{ 'button.attribute.title'|trans }}</a>
                        {% if 'attribute' in route %}
                            <ul class=\"nav flex-column\">
                                <li>
                                    <a class=\"nav-link {{ 'index' in route ? 'active' }}\" href=\"{{ path('attribute_index') }}\">{{ 'button.attribute.index'|trans }}</a>
                                </li>
                                <li>
                                    {% if 'edit' in route or 'show' in route %}
                                        <a class=\"nav-link {{ 'edit' in route ? 'active' }}\" href=\"{{ path('attribute_edit', {'id': attribute.id}) }}\">{{ 'button.attribute.edit'|trans }}</a>
                                    {% else %}
                                        <a class=\"nav-link disabled-menu\" href=\"{{ path('attribute_index', {'route': 'route_edit'})}}\">{{ 'button.attribute.edit'|trans }}</a>
                                    {% endif %}
                                </li>
                            </ul>
                        {% endif %}
                    </div>

                    <div class=\"bd-toc-item {{ 'user' in route ? 'active' }}\">
                        <a class=\"bd-toc-link {{ 'user' in route ? 'active' }}\" href=\"{{ path('user_index') }}\">{{ 'button.user.title'|trans }}</a>
                        {% if 'user' in route %}
                            <ul class=\"nav flex-column\">
                                <li>
                                    <a class=\"nav-link {{ 'index' in route ? 'active' }}\" href=\"{{ path('user_index') }}\">{{ 'button.user.index'|trans }}</a>
                                </li>
                                <li>
                                    <a class=\"nav-link {{ 'edit' in route ? 'active' }}\" href=\"{{ path('user_edit', {'id': app.user.id }) }}\">{{ 'button.user.edit'|trans }}</a>
                                </li>
                                <li>
                                    <a class=\"nav-link {{ 'new' in route ? 'active' }}\" href=\"{{ path('user_new') }}\">{{ 'button.user.new'|trans }}</a>
                                </li>
                            </ul>
                        {% endif %}
                    </div>
                </nav>

            </div>

            {% if (route == 'test_index' or route == 'attribute_index' or route == 'user_index') %}
            <div class=\" bd-toc d-none\">
            {% else %}
            <div class=\"d-xl-block col-md-2 col-xl-2 bd-toc d-none\">
            {% endif %}
                {% block admin_right_nav %}
                {% endblock %}
            </div>
            {% if (route == 'test_index' or route == 'attribute_index' or route == 'user_index') %}
            <div class=\"col-12 col-md-10 col-xl-10 py-md-3 px-md-5 bd-content\">
            {% else %}
            <div class=\"col-12 col-md-10 col-xl-8 py-md-3 pl-md-5 bd-content\">
            {% endif %}
                {% block admin_main %}
                {% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "admin.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\admin.html.twig");
    }
}

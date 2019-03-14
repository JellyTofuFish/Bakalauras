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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar navbar-expand navbar-light bg-light flex-column flex-md-row bd-navbar\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class=\"container-fluid\">
        <div class=\"row flex-xl-nowrap\">
            <div class=\"col-12 col-md-3 col-xl-2 bd-sidebar\">

                <nav class=\"bd-links\">
                    <div class=\"bd-toc-item\">
                        <a class=\"bd-toc-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show.nav"), "html", null, true);
        echo "</a>
                        <ul class=\"nav flex-column bd-sidenav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show.sidenav"), "html", null, true);
        echo "</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.new"), "html", null, true);
        echo "</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class=\"d-none d-xl-block col-xl-2 bd-toc\">
                ";
        // line 40
        $this->displayBlock('admin_right_nav', $context, $blocks);
        // line 42
        echo "            </div>
            <div class=\"col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content\">
                ";
        // line 44
        $this->displayBlock('admin_main', $context, $blocks);
        // line 46
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 41
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 45
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
        return array (  136 => 45,  130 => 44,  123 => 41,  117 => 40,  107 => 46,  105 => 44,  101 => 42,  99 => 40,  86 => 32,  78 => 29,  70 => 26,  46 => 4,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <nav class=\"navbar navbar-expand navbar-light bg-light flex-column flex-md-row bd-navbar\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class=\"container-fluid\">
        <div class=\"row flex-xl-nowrap\">
            <div class=\"col-12 col-md-3 col-xl-2 bd-sidebar\">

                <nav class=\"bd-links\">
                    <div class=\"bd-toc-item\">
                        <a class=\"bd-toc-link\" href=\"{{ path('question_index') }}\">{{ 'button.question.show.nav'|trans }}</a>
                        <ul class=\"nav flex-column bd-sidenav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('question_index') }}\">{{ 'button.question.show.sidenav'|trans }}</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('question_new') }}\">{{ 'button.question.new'|trans }}</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class=\"d-none d-xl-block col-xl-2 bd-toc\">
                {% block admin_right_nav %}
                {% endblock %}
            </div>
            <div class=\"col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content\">
                {% block admin_main %}
                {% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "admin.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\admin.html.twig");
    }
}

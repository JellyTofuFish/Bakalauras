<?php

/* question/new.html.twig */
class __TwigTemplate_256fd1dbb9bea84da3fe9aa8fe3d1b5ef3e6270d709e112ea956a7a6d0d553d2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "question/new.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'admin_right_nav' => [$this, 'block_admin_right_nav'],
            'admin_main' => [$this, 'block_admin_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "question/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Question";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 6
        echo "
    <p>Kūrimo navigacija:</p>
    <div class=\"list-group\" id=\"list-tab\" role=\"tablist\">
        <a class=\"list-group-item list-group-item-action\" id=\"list-general-list\" data-toggle=\"collapse\" href=\"#list-general\" data-target=\"#home\" role=\"tab\" aria-controls=\"home\">Bendra</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-questions-list\" data-toggle=\"collapse\" href=\"#list-questions\" data-target=\"#questions\" role=\"tab\" aria-controls=\"profile\">Klausimai</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-buttons-list\" data-toggle=\"collapse\" href=\"#list-buttons\" data-target=\"#buttons\" role=\"tab\" aria-controls=\"buttons\">Mygtukai</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-groups-list\" data-toggle=\"collapse\" href=\"#list-groups\" data-target=\"#groups\" role=\"tab\" aria-controls=\"groups\">Grupes</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-settings\" data-target=\"#settings\" role=\"tab\" aria-controls=\"settings\">Parinktys</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-editors\" data-target=\"#editors\" role=\"tab\" aria-controls=\"editors\">Redaguotojai</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 19
        echo "
    ";
        // line 20
        echo twig_include($this->env, $context, "question/_form.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  81 => 19,  75 => 18,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %}New Question{% endblock %}

{% block admin_right_nav %}

    <p>Kūrimo navigacija:</p>
    <div class=\"list-group\" id=\"list-tab\" role=\"tablist\">
        <a class=\"list-group-item list-group-item-action\" id=\"list-general-list\" data-toggle=\"collapse\" href=\"#list-general\" data-target=\"#home\" role=\"tab\" aria-controls=\"home\">Bendra</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-questions-list\" data-toggle=\"collapse\" href=\"#list-questions\" data-target=\"#questions\" role=\"tab\" aria-controls=\"profile\">Klausimai</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-buttons-list\" data-toggle=\"collapse\" href=\"#list-buttons\" data-target=\"#buttons\" role=\"tab\" aria-controls=\"buttons\">Mygtukai</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-groups-list\" data-toggle=\"collapse\" href=\"#list-groups\" data-target=\"#groups\" role=\"tab\" aria-controls=\"groups\">Grupes</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-settings\" data-target=\"#settings\" role=\"tab\" aria-controls=\"settings\">Parinktys</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-editors\" data-target=\"#editors\" role=\"tab\" aria-controls=\"editors\">Redaguotojai</a>
    </div>
{% endblock %}

{% block admin_main %}

    {{ include('question/_form.html.twig') }}

{% endblock %}
", "question/new.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\new.html.twig");
    }
}

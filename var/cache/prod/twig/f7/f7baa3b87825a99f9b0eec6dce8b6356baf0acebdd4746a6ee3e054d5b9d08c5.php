<?php

/* question/edit.html.twig */
class __TwigTemplate_0149648549530b6dc142f31ad03f1958fe98892d362d4b75faf5fcadb7c3f4f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "question/edit.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "question/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Question";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 6
        echo "
        <p>Redagavimo navigacija:</p>
        <div class=\"list-group\" id=\"list-tab\" role=\"tablist\">
            <a class=\"list-group-item list-group-item-action\" id=\"list-general-list\" data-toggle=\"collapse\" href=\"#list-general\" data-target=\"#home\" role=\"tab\" aria-controls=\"home\">Bendra</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-questions-list\" data-toggle=\"collapse\" href=\"#list-questions\" data-target=\"#questions\" role=\"tab\" aria-controls=\"profile\">Klausimai</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-buttons-list\" data-toggle=\"collapse\" href=\"#list-buttons\" data-target=\"#buttons\" role=\"tab\" aria-controls=\"buttons\">Mygtukai</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-groups-list\" data-toggle=\"collapse\" href=\"#list-groups\" data-target=\"#groups\" role=\"tab\" aria-controls=\"groups\">Grupes</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-settings\" data-target=\"#settings\" role=\"tab\" aria-controls=\"settings\">Parinktys</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-editors\" data-target=\"#editors\" role=\"tab\" aria-controls=\"editors\">Redaguotojai</a>
        </div>
        <div class=\"my-2\"></div>
        <p>Ištrinti klausimą:</p>
        <a > ";
        // line 18
        echo twig_include($this->env, $context, "question/_delete_form.html.twig");
        echo "</a>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 23
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "question/_form.html.twig", ["button_label" => "Update"]);
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  88 => 23,  82 => 22,  72 => 18,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %}Edit Question{% endblock %}

    {% block admin_right_nav %}

        <p>Redagavimo navigacija:</p>
        <div class=\"list-group\" id=\"list-tab\" role=\"tablist\">
            <a class=\"list-group-item list-group-item-action\" id=\"list-general-list\" data-toggle=\"collapse\" href=\"#list-general\" data-target=\"#home\" role=\"tab\" aria-controls=\"home\">Bendra</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-questions-list\" data-toggle=\"collapse\" href=\"#list-questions\" data-target=\"#questions\" role=\"tab\" aria-controls=\"profile\">Klausimai</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-buttons-list\" data-toggle=\"collapse\" href=\"#list-buttons\" data-target=\"#buttons\" role=\"tab\" aria-controls=\"buttons\">Mygtukai</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-groups-list\" data-toggle=\"collapse\" href=\"#list-groups\" data-target=\"#groups\" role=\"tab\" aria-controls=\"groups\">Grupes</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-settings\" data-target=\"#settings\" role=\"tab\" aria-controls=\"settings\">Parinktys</a>
            <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-editors\" data-target=\"#editors\" role=\"tab\" aria-controls=\"editors\">Redaguotojai</a>
        </div>
        <div class=\"my-2\"></div>
        <p>Ištrinti klausimą:</p>
        <a > {{ include('question/_delete_form.html.twig') }}</a>

    {% endblock %}

    {% block admin_main %}

        {{ include('question/_form.html.twig', {'button_label': 'Update'}) }}

    {% endblock %}

", "question/edit.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\edit.html.twig");
    }
}

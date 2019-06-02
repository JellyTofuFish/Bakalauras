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

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.new"), "html", null, true);
        echo " | ETS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 6
        echo "    <ul class=\"section-nav\">
        <li class=\"toc-entry\">
            <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("side_nav.navigation"), "html", null, true);
        echo ":</p>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-general\" data-target=\"#home\" data-target-animation=\"#questionCaret1\" aria-controls=\"home\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-groups\" data-target=\"#groups\" data-target-animation=\"#questionCaret2\" aria-controls=\"groups\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-answers\" data-target=\"#answers\" data-target-animation=\"#questionCaret3\" aria-controls=\"answers\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-time\" data-target=\"#time\" data-target-animation=\"#questionCaret4\" aria-controls=\"time\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-buttonColor\" data-target=\"#buttonColor\" data-target-animation=\"#questionCaret5\" aria-controls=\"buttonColor\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("buttoncolor"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-backgroundColor\" data-target=\"#backgroundColor\" data-target-animation=\"#questionCaret6\" aria-controls=\"backgroundColor\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backgroundcolor"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-displayTime\" data-target=\"#displayTime\" data-target-animation=\"#questionCaretDT\" aria-controls=\"displayTime\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("displaytime"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-picture\" data-target=\"#picture\" data-target-animation=\"#questionCaret7\" aria-controls=\"picture\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("picture"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-save\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.new"), "html", null, true);
        echo "</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 41
        echo "
    <h1>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.new"), "html", null, true);
        echo "</h1>
    ";
        // line 43
        echo twig_include($this->env, $context, "question/_form.html.twig", ["button_label" => "button.new"]);
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
        return array (  142 => 43,  138 => 42,  135 => 41,  129 => 40,  118 => 35,  112 => 32,  106 => 29,  100 => 26,  94 => 23,  88 => 20,  82 => 17,  76 => 14,  70 => 11,  64 => 8,  60 => 6,  54 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %} {{ 'question.title.new'|trans }} | ETS{% endblock %}

{% block admin_right_nav %}
    <ul class=\"section-nav\">
        <li class=\"toc-entry\">
            <p>{{ 'side_nav.navigation'|trans }}:</p>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-general\" data-target=\"#home\" data-target-animation=\"#questionCaret1\" aria-controls=\"home\">{{ 'general'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-groups\" data-target=\"#groups\" data-target-animation=\"#questionCaret2\" aria-controls=\"groups\">{{ 'groups'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-answers\" data-target=\"#answers\" data-target-animation=\"#questionCaret3\" aria-controls=\"answers\">{{ 'answers'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-time\" data-target=\"#time\" data-target-animation=\"#questionCaret4\" aria-controls=\"time\">{{ 'time'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-buttonColor\" data-target=\"#buttonColor\" data-target-animation=\"#questionCaret5\" aria-controls=\"buttonColor\">{{ 'buttoncolor'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-backgroundColor\" data-target=\"#backgroundColor\" data-target-animation=\"#questionCaret6\" aria-controls=\"backgroundColor\">{{ 'backgroundcolor'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-displayTime\" data-target=\"#displayTime\" data-target-animation=\"#questionCaretDT\" aria-controls=\"displayTime\">{{ 'displaytime'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-picture\" data-target=\"#picture\" data-target-animation=\"#questionCaret7\" aria-controls=\"picture\">{{ 'picture'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-save\">{{ 'button.new'|trans }}</a>
        </li>
    </ul>
{% endblock %}

{% block admin_main %}

    <h1>{{ 'question.title.new'|trans }}</h1>
    {{ include('question/_form.html.twig', {'button_label': 'button.new'}) }}

{% endblock %}
", "question/new.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\new.html.twig");
    }
}

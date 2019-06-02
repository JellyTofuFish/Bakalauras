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

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.edit"), "html", null, true);
        echo " | ETS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 6
        echo "
    <ul class=\"section-nav\">
        <li class=\"toc-entry\">
            <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("side_nav.navigation"), "html", null, true);
        echo ":</p>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-general\" data-target=\"#home\" data-target-animation=\"#questionCaret1\" aria-controls=\"home\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-groups\" data-target=\"#groups\" data-target-animation=\"#questionCaret2\" aria-controls=\"groups\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-answers\" data-target=\"#answers\" data-target-animation=\"#questionCaret3\" aria-controls=\"answers\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-time\" data-target=\"#time\" data-target-animation=\"#questionCaret4\" aria-controls=\"time\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-buttonColor\" data-target=\"#buttonColor\" data-target-animation=\"#questionCaret5\" aria-controls=\"buttonColor\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("buttoncolor"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-backgroundColor\" data-target=\"#backgroundColor\" data-target-animation=\"#questionCaret6\" aria-controls=\"backgroundColor\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backgroundcolor"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-displayTime\" data-target=\"#displayTime\" data-target-animation=\"#questionCaretDT\" aria-controls=\"displayTime\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("displaytime"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-picture\" data-target=\"#picture\" data-target-animation=\"#questionCaret7\" aria-controls=\"picture\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("picture"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-save\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
        echo "</a>
        </li>
        <div class=\"my-3\"></div>
        <li class=\"toc-entry\">
            <a href=\"\" data-toggle=\"modal\" data-target=\"#questionModal";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 40, $this->source); })()), "id", []), "html", null, true);
        echo "Delete\" class=\"modal-append-show badge badge-danger text-white py-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.button.delete"), "html", null, true);
        echo "</a>

            <div class=\"modal fade\" id=\"questionModal";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 42, $this->source); })()), "id", []), "html", null, true);
        echo "Delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"questionModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"questionModalLabel\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.delete_message"), "html", null, true);
        echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <span> ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.delete_helper"), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"w-100 d-flex justify-content-between\">
                                ";
        // line 56
        echo twig_include($this->env, $context, "question/_delete_form.html.twig");
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 67
        echo "
    <h1>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.edit"), "html", null, true);
        echo "</h1>
    ";
        // line 69
        echo twig_include($this->env, $context, "question/_form.html.twig", ["button_label" => "button.save"]);
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
        return array (  185 => 69,  181 => 68,  178 => 67,  172 => 66,  156 => 56,  149 => 52,  140 => 46,  133 => 42,  126 => 40,  119 => 36,  113 => 33,  107 => 30,  101 => 27,  95 => 24,  89 => 21,  83 => 18,  77 => 15,  71 => 12,  65 => 9,  60 => 6,  54 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %} {{ 'question.title.edit'|trans }} | ETS{% endblock %}

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
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-save\">{{ 'button.save'|trans }}</a>
        </li>
        <div class=\"my-3\"></div>
        <li class=\"toc-entry\">
            <a href=\"\" data-toggle=\"modal\" data-target=\"#questionModal{{ question.id }}Delete\" class=\"modal-append-show badge badge-danger text-white py-1\">{{ 'question.button.delete'|trans }}</a>

            <div class=\"modal fade\" id=\"questionModal{{ question.id }}Delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"questionModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"questionModalLabel\">{{ 'question.delete_message'|trans }}</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <span> {{ 'question.delete_helper'|trans }}</span>
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"w-100 d-flex justify-content-between\">
                                {{ include('question/_delete_form.html.twig') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
{% endblock %}

{% block admin_main %}

    <h1>{{ 'question.title.edit'|trans  }}</h1>
    {{ include('question/_form.html.twig', {'button_label': 'button.save'}) }}

{% endblock %}

", "question/edit.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\edit.html.twig");
    }
}

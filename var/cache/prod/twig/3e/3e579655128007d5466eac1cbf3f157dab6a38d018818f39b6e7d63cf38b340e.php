<?php

/* question/index.html.twig */
class __TwigTemplate_869b8fbbf440d459c3a30ff0739be37e278dba730148db693c96c37245aa7baa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "question/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "question.index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 6
        echo "    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 25
        echo "    <div class=\"card border-primary\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-borderless mb-0\">
                    <thead>
                    <tr class=\"text-blue\">
                        <th scope=\"col\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.description.label"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.type.label"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.active"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class=\"my-3\"></div>

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 44
            echo "        <div class=\"card\">
            <div class=\"card-header py-1\">
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "question", [])), "html", null, true);
            echo "</td>
            </div>
            <ul class=\"list-group list-group-flush \">
                <table class=\"table table-borderless mb-0\">
                    <tbody>
                    <tr>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "description", [])), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "type", [])), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.show"), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.edit"), "html", null, true);
            echo "</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </ul>
        </div>
        <div class=\"my-2\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  142 => 55,  137 => 53,  133 => 52,  124 => 46,  120 => 44,  116 => 43,  103 => 33,  99 => 32,  95 => 31,  87 => 25,  81 => 24,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %}question.index{% endblock %}

{% block admin_right_nav %}
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
{% endblock %}

{% block admin_main %}
    <div class=\"card border-primary\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-borderless mb-0\">
                    <thead>
                    <tr class=\"text-blue\">
                        <th scope=\"col\">{{ 'question.description.label'|trans }}</th>
                        <th scope=\"col\">{{ 'question.type.label'|trans }}</th>
                        <th scope=\"col\">{{ 'question.active'|trans }}</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class=\"my-3\"></div>

    {% for question in questions %}
        <div class=\"card\">
            <div class=\"card-header py-1\">
                <td>{{ question.question|trans }}</td>
            </div>
            <ul class=\"list-group list-group-flush \">
                <table class=\"table table-borderless mb-0\">
                    <tbody>
                    <tr>
                        <td>{{ question.description|trans }}</td>
                        <td>{{ question.type|trans }}</td>
                        <td>
                            <a href=\"{{ path('question_show', {'id': question.id}) }}\">{{ 'button.show'|trans }}</a>
                            <a href=\"{{ path('question_edit', {'id': question.id}) }}\">{{ 'button.edit'|trans }}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </ul>
        </div>
        <div class=\"my-2\"></div>
    {% endfor %}
{% endblock %}", "question/index.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\index.html.twig");
    }
}

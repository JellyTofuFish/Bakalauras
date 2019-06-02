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

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.index"), "html", null, true);
        echo " | ETS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                <button type=\"button\" class=\" close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span class=\"pl-2\" aria-hidden=\"true\">&times;</span>
                </button>
                <span class='alert-message'>";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                echo "</span>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "     <ul class=\"section-nav\">

         ";
        // line 18
        echo twig_include($this->env, $context, "group/index.html.twig");
        echo "

         <div class=\"my-3\"></div>

         ";
        // line 22
        echo twig_include($this->env, $context, "group/new.html.twig");
        echo "
     </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 27
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.index"), "html", null, true);
        echo "</h1>
    <div class=\"table-responsive table-header-sticky\">
        <table id=\"tableheader\" class=\"table table-borderless bg-blue mb-0 text-white table-header table-index\">
            <thead>
                <tr>
                    <th scope=\"col\" colspan=\"2\">
                        <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.question_name_label"), "html", null, true);
        echo "</span>
                        <a class=\"text-light\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["slug" => "question_name", "sort" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->source); })()), "question_name", [], "array")]), "html", null, true);
        echo "\">
                            <i id=\"questionIndexCaret1\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.sort.name"), "html", null, true);
        echo "\" class=\"px-2 questionSort pointer fa ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->source); })()), "question_name", [], "array"), "html", null, true);
        echo "\"></i>
                        </a>
                    </th>
                    <th scope=\"col\">
                        <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.type_label"), "html", null, true);
        echo "</span>
                        <a class=\"text-light\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["slug" => "type", "sort" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 40, $this->source); })()), "type", [], "array")]), "html", null, true);
        echo "\">
                            <i id=\"questionIndexCaret2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.sort.type"), "html", null, true);
        echo "\" class=\"px-2 questionSort pointer fa ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 41, $this->source); })()), "type", [], "array"), "html", null, true);
        echo "\"></i>
                        </a>
                    </th>
                    <th scope=\"col\">
                        <span>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.fk_group_label"), "html", null, true);
        echo "</span>
                        <a class=\"text-light\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index", ["slug" => "group", "sort" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 46, $this->source); })()), "group", [], "array")]), "html", null, true);
        echo "\">
                            <i id=\"questionIndexCaret3\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.sort.group"), "html", null, true);
        echo "\" class=\"px-2 questionSort pointer fa ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 47, $this->source); })()), "group", [], "array"), "html", null, true);
        echo "\"></i>
                        </a>
                    </th>
                    <th scope=\"col\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("actions"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-borderless mb-0 table-index\">
            <tbody>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new Twig_Error_Runtime('Variable "questions" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 60
            echo "                    <tr>
                        <td colspan=\"2\">
                            <p>";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "questionname", [])), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <p>";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "type", [])), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <p>
                            ";
            // line 69
            if ((null === twig_get_attribute($this->env, $this->source, $context["question"], "fkGroup", []))) {
                // line 70
                echo "                                <i>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blank"), "html", null, true);
                echo "</i>
                            ";
            } else {
                // line 72
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "fkGroup", []), "name", []), "html", null, true);
                echo "
                            ";
            }
            // line 74
            echo "                            </p>
                        </td>
                        <td class=\"d-flex justify-content-around\">
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.edit"), "html", null, true);
            echo "\"  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.example"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show_example", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fa fa-eye\"></i></a>
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.copy"), "html", null, true);
            echo "\"  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-copy\"></i></a>
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.show"), "html", null, true);
            echo "\"  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-file-o\"></i></a>
                            <a data-tooltip=\"tooltip\" data-placement=\"right\" title=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.delete"), "html", null, true);
            echo "\"  href=\"\" data-toggle=\"modal\" data-target=\"#questionModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", []), "html", null, true);
            echo "Delete\"><i class=\"fa fa-trash\"></i></a>

                            <div class=\"modal fade\" id=\"questionModal";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", []), "html", null, true);
            echo "Delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"questionModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"questionModalLabel\">";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.delete_message"), "html", null, true);
            echo "</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <span> ";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.delete_helper"), "html", null, true);
            echo "</span>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <div class=\"w-100 d-flex justify-content-between\">
                                                ";
            // line 97
            echo twig_include($this->env, $context, "question/_delete_form.html.twig");
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 107
            echo "                <tr class=\"text-center\">
                    <td colspan=\"7\"><i>";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("empty"), "html", null, true);
            echo "</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "            </tbody>
        </table>
    </div>

";
        
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
        return array (  335 => 111,  326 => 108,  323 => 107,  300 => 97,  293 => 93,  284 => 87,  277 => 83,  270 => 81,  264 => 80,  258 => 79,  252 => 78,  246 => 77,  241 => 74,  235 => 72,  229 => 70,  227 => 69,  220 => 65,  214 => 62,  210 => 60,  192 => 59,  180 => 50,  172 => 47,  168 => 46,  164 => 45,  155 => 41,  151 => 40,  147 => 39,  138 => 35,  134 => 34,  130 => 33,  120 => 27,  114 => 26,  104 => 22,  97 => 18,  93 => 16,  87 => 15,  78 => 12,  70 => 8,  65 => 7,  60 => 6,  54 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %} {{ 'question.title.index'|trans }} | ETS{% endblock %}

{% block admin_right_nav %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <button type=\"button\" class=\" close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span class=\"pl-2\" aria-hidden=\"true\">&times;</span>
                </button>
                <span class='alert-message'>{{ message|trans }}</span>
            </div>
        {% endfor %}
    {% endfor %}
     <ul class=\"section-nav\">

         {{ include('group/index.html.twig') }}

         <div class=\"my-3\"></div>

         {{ include('group/new.html.twig') }}
     </ul>
{% endblock %}

{% block admin_main %}
    <h1>{{ 'question.title.index'|trans }}</h1>
    <div class=\"table-responsive table-header-sticky\">
        <table id=\"tableheader\" class=\"table table-borderless bg-blue mb-0 text-white table-header table-index\">
            <thead>
                <tr>
                    <th scope=\"col\" colspan=\"2\">
                        <span>{{ 'question.form.question_name_label'|trans }}</span>
                        <a class=\"text-light\" href=\"{{ path('question_index', { 'slug':'question_name' , 'sort': data['question_name'] }) }}\">
                            <i id=\"questionIndexCaret1\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.sort.name'|trans }}\" class=\"px-2 questionSort pointer fa {{ data['question_name'] }}\"></i>
                        </a>
                    </th>
                    <th scope=\"col\">
                        <span>{{ 'question.form.type_label'|trans }}</span>
                        <a class=\"text-light\" href=\"{{ path('question_index', { 'slug':'type' , 'sort':data['type'] }) }}\">
                            <i id=\"questionIndexCaret2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.sort.type'|trans }}\" class=\"px-2 questionSort pointer fa {{ data['type'] }}\"></i>
                        </a>
                    </th>
                    <th scope=\"col\">
                        <span>{{ 'question.form.fk_group_label'|trans }}</span>
                        <a class=\"text-light\" href=\"{{ path('question_index', { 'slug':'group' , 'sort':data['group'] }) }}\">
                            <i id=\"questionIndexCaret3\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.sort.group'|trans }}\" class=\"px-2 questionSort pointer fa {{  data['group'] }}\"></i>
                        </a>
                    </th>
                    <th scope=\"col\">{{ 'actions'|trans }}</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-borderless mb-0 table-index\">
            <tbody>
            {% for question in questions %}
                    <tr>
                        <td colspan=\"2\">
                            <p>{{ question.questionname|trans }}</p>
                        </td>
                        <td>
                            <p>{{ question.type|trans }}</p>
                        </td>
                        <td>
                            <p>
                            {% if question.fkGroup is null %}
                                <i>{{ 'blank'|trans }}</i>
                            {% else %}
                                {{ question.fkGroup.name }}
                            {% endif %}
                            </p>
                        </td>
                        <td class=\"d-flex justify-content-around\">
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.edit'|trans }}\"  href=\"{{ path('question_edit', {'id': question.id}) }}\"><i class=\"fa fa-pencil\"></i></a>
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.example'|trans }}\" href=\"{{ path('question_show_example', {'id': question.id}) }}\" target=\"_blank\" rel=\"noopener noreferrer\"><i class=\"fa fa-eye\"></i></a>
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.copy'|trans }}\"  href=\"{{ path('question_copy', {'id': question.id}) }}\"><i class=\"fa fa-copy\"></i></a>
                            <a data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.show'|trans }}\"  href=\"{{ path('question_show', {'id': question.id}) }}\"><i class=\"fa fa-file-o\"></i></a>
                            <a data-tooltip=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.delete'|trans }}\"  href=\"\" data-toggle=\"modal\" data-target=\"#questionModal{{ question.id }}Delete\"><i class=\"fa fa-trash\"></i></a>

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
                        </td>
                    </tr>

            {% else %}
                <tr class=\"text-center\">
                    <td colspan=\"7\"><i>{{ 'empty'|trans }}</i></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}", "question/index.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\index.html.twig");
    }
}

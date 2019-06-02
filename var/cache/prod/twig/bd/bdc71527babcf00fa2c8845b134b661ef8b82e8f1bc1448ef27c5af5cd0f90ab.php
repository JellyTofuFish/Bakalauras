<?php

/* main/index.html.twig */
class __TwigTemplate_2b0f6f91e422bc14b2c98f3dbd745c63b5f0ba7c5ef1221df052347e3e62b644 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("main"), "html", null, true);
        echo " | ETS";
        
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
        <div class=\"row justify-content-center\">
            <div class=\"col-md-5 col-xl-5 mt-25 text-center\">
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-3 col-xl-3 text-center\">
                ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                    <div class=\"m-auto w-75 alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 16, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "
                        <button type=\"button\" class=\" close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        // line 22
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 23
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                        <div class=\"mx-auto w-75 alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                            <button type=\"button\" class=\" close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <span class='alert-message'>";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                echo "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>
        ";
        // line 34
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->source); })()), "request", []), "get", [0 => "done"], "method"))) {
            // line 35
            echo "        <div class=\"row justify-content-center\">
            <div class=\"col-md-3 col-xl-3 text-center\">
                <h1 class=\"mb-5 my-3 text-primary\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("test.test_end"), "html", null, true);
            echo "</h1>
            </div>
        </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-5 col-xl-5 text-center\">
                    <div class=\"d-flex justify-content-center\">
                        <p class=\"h5 p-form text-success pr-2 pl-0 pointer-default\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("test.finish_message"), "html", null, true);
            echo "</p>
                        <i class=\"px-0 pt-2 text-success p-form fa fa-check-circle\"></i>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 49
            echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-3 col-xl-3 text-center\">
                    <h1 class=\"mb-5 my-3 text-primary\">";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("test.test_start_code"), "html", null, true);
            echo ":</h1>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-3 col-xl-3 text-center\">

                    ";
            // line 57
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => ""]]);
            echo "
                    <div class=\"form-group mx-auto w-75\">
                        ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "code", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        <div class=\"invalid-feedback \">
                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("test.validation.code_test_start"), "html", null, true);
            echo "
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-outline-primary\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.test.test_start_active"), "html", null, true);
            echo " ></button>
                    ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>

        ";
        }
        // line 70
        echo "    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 70,  178 => 65,  174 => 64,  168 => 61,  163 => 59,  158 => 57,  149 => 51,  145 => 49,  136 => 43,  127 => 37,  123 => 35,  121 => 34,  117 => 32,  111 => 31,  102 => 28,  94 => 24,  89 => 23,  84 => 22,  74 => 16,  72 => 15,  59 => 6,  53 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ 'main'|trans }} | ETS{% endblock %}

{% block body %}
    {{ include('_form_navbar.html.twig') }}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-5 col-xl-5 mt-25 text-center\">
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-3 col-xl-3 text-center\">
                {% if error %}
                    <div class=\"m-auto w-75 alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}
                        <button type=\"button\" class=\" close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                {% endif %}
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"mx-auto w-75 alert alert-{{ label }}\">
                            <button type=\"button\" class=\" close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <span class='alert-message'>{{ message|trans }}</span>
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>
        {% if app.request.get('done') is not null %}
        <div class=\"row justify-content-center\">
            <div class=\"col-md-3 col-xl-3 text-center\">
                <h1 class=\"mb-5 my-3 text-primary\">{{ 'test.test_end'|trans }}</h1>
            </div>
        </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-5 col-xl-5 text-center\">
                    <div class=\"d-flex justify-content-center\">
                        <p class=\"h5 p-form text-success pr-2 pl-0 pointer-default\">{{ 'test.finish_message'|trans }}</p>
                        <i class=\"px-0 pt-2 text-success p-form fa fa-check-circle\"></i>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-3 col-xl-3 text-center\">
                    <h1 class=\"mb-5 my-3 text-primary\">{{ 'test.test_start_code'|trans }}:</h1>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-3 col-xl-3 text-center\">

                    {{ form_start(form, { 'attr': {'class':'needs-validation', 'novalidate':'' }}) }}
                    <div class=\"form-group mx-auto w-75\">
                        {{ form_widget(form.code, { 'attr': {'class':'form-control'} }) }}
                        <div class=\"invalid-feedback \">
                            {{ 'test.validation.code_test_start'|trans }}
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-outline-primary\">{{ 'button.test.test_start_active'|trans }} ></button>
                    {{ form_end(form) }}
                </div>
            </div>

        {% endif %}
    </div>


{% endblock %}
", "main/index.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\main\\index.html.twig");
    }
}

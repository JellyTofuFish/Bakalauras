<?php

/* question/_form.html.twig */
class __TwigTemplate_1191aca5782e42ad14808e44631efd9a92687648f3c7be0716bb0cebadd130b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "question/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

                    ";
        // line 4
        echo "                    ";
        // line 5
        echo "                    ";
        // line 6
        echo "
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "question", []), 'label');
        echo "
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "question", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "description", []), 'label');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "description", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "type", []), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "fk_group", []), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "fk_group", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "fk_test", []), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "fk_test", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
<button class=\"btn btn-block btn-outline-primary\" type=\"submit\">";
        // line 21
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 21, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

<div class=\"accordion\" id=\"accordionExample\">
    <div class=\"tab-content\" id=\"nav-tabContent\">

        <div class=\"card\">
            <div class=\"card-header\" id=\"list-general\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#home\" aria-expanded=\"true\" aria-controls=\"home\">
                        Bendra
                    </button>
                </h2>
            </div>
            <div id=\"home\" class=\"tab-pane collapse show\" aria-labelledby=\"list-general list-general-list\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "

                    ";
        // line 41
        echo "                    ";
        // line 42
        echo "                    ";
        // line 43
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "question", []), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "question", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "description", []), 'label');
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "description", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "type", []), 'label');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "type", []), 'label');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "type", []), 'label');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
                    <button class=\"btn btn-block btn-outline-primary\" type=\"submit\">";
        // line 58
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 58, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>
                    <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\">
                        Collapsible #1 trigger
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Collapsible #1 element
                </div>
            </div>
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  161 => 58,  157 => 57,  153 => 56,  148 => 54,  144 => 53,  139 => 51,  135 => 50,  130 => 48,  126 => 47,  121 => 45,  117 => 44,  114 => 43,  112 => 42,  110 => 41,  105 => 38,  87 => 23,  82 => 21,  78 => 20,  74 => 19,  69 => 17,  65 => 16,  60 => 14,  56 => 13,  51 => 11,  47 => 10,  42 => 8,  38 => 7,  35 => 6,  33 => 5,  31 => 4,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}

                    {#{% for error in form.vars.errors.form.getErrors(true) %}#}
                    {#<div class=\"alert alert-danger\">{{ error.message }}</div>#}
                    {#{% endfor %}#}

                    {{ form_label(form.question) }}
                    {{ form_widget(form.question, { 'attr': {'class':'form-control mb-3'} }) }}

                    {{ form_label(form.description) }}
                    {{ form_widget(form.description, { 'attr': {'class':'form-control mb-3'} }) }}

                    {{ form_label(form.type) }}
                    {{ form_widget(form.type, { 'attr': {'class':'form-control mb-3'}}) }}

                    {{ form_label(form.fk_group) }}
                    {{ form_widget(form.fk_group, { 'attr': {'class':'form-control mb-3'}}) }}

                    {{ form_label(form.fk_test) }}
                    {{ form_widget(form.fk_test, { 'attr': {'class':'form-control mb-3'}}) }}
<button class=\"btn btn-block btn-outline-primary\" type=\"submit\">{{ button_label|default('Save') }}</button>

{{ form_end(form) }}

<div class=\"accordion\" id=\"accordionExample\">
    <div class=\"tab-content\" id=\"nav-tabContent\">

        <div class=\"card\">
            <div class=\"card-header\" id=\"list-general\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#home\" aria-expanded=\"true\" aria-controls=\"home\">
                        Bendra
                    </button>
                </h2>
            </div>
            <div id=\"home\" class=\"tab-pane collapse show\" aria-labelledby=\"list-general list-general-list\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    {{ form_start(form) }}

                    {#{% for error in form.vars.errors.form.getErrors(true) %}#}
                    {#<div class=\"alert alert-danger\">{{ error.message }}</div>#}
                    {#{% endfor %}#}

                    {{ form_label(form.question) }}
                    {{ form_widget(form.question, { 'attr': {'class':'form-control mb-3'} }) }}

                    {{ form_label(form.description) }}
                    {{ form_widget(form.description, { 'attr': {'class':'form-control mb-3'} }) }}

                    {{ form_label(form.type) }}
                    {{ form_widget(form.type, { 'attr': {'class':'form-control mb-3'}}) }}

                    {{ form_label(form.type) }}
                    {{ form_widget(form.type, { 'attr': {'class':'form-control mb-3'}}) }}

                    {{ form_label(form.type) }}
                    {{ form_widget(form.type, { 'attr': {'class':'form-control mb-3'}}) }}
                    <button class=\"btn btn-block btn-outline-primary\" type=\"submit\">{{ button_label|default('Save') }}</button>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>
                    <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\">
                        Collapsible #1 trigger
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Collapsible #1 element
                </div>
            </div>
        </div>

    </div>
</div>
", "question/_form.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\_form.html.twig");
    }
}

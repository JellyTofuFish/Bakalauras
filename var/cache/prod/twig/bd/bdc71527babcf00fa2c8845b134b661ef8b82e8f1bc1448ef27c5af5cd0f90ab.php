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

        echo "Hello TestController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new Twig_Error_Runtime('Variable "routes" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 8
            echo "            <tr>
                ";
            // line 10
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "path", []), "html", null, true);
            echo "</td>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "methods", [])) > 0)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, $context["route"], "methods", []), ", ")) : ("ANY")), "html", null, true);
            echo "</td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["route"], "defaults", []), "_controller", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </table>

    <nav class=\"collapse bd-links\">
        <div class=\"bd-toc-item\">
            <a class=\"bd-toc-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show.nav"), "html", null, true);
        echo "</a>
            <ul class=\"nav flex-column bd-sidenav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show.sidenav"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.new"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div>
    </nav>
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
        return array (  107 => 25,  99 => 22,  91 => 19,  85 => 15,  76 => 12,  72 => 11,  67 => 10,  64 => 8,  60 => 7,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello TestController!{% endblock %}

{% block body %}
    <table>
        {% for route in routes %}
            <tr>
                {#<td>{{ route }}</td>#}
                <td>{{ route.path }}</td>
                <td>{{ route.methods|length > 0 ? route.methods|join(', ') : 'ANY' }}</td>
                <td>{{ route.defaults._controller }}</td>
            </tr>
        {% endfor %}
    </table>

    <nav class=\"collapse bd-links\">
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
{% endblock %}
", "main/index.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\main\\index.html.twig");
    }
}

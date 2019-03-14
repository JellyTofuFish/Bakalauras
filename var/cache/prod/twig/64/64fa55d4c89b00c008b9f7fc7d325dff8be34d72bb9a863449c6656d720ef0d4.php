<?php

/* question/show.html.twig */
class __TwigTemplate_70260c9dc964fea1eea9c00fd6bb14acbf13c55ec6dafc405772326ec2f21b3c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "question/show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "question.show";
    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        // line 6
        echo "
    <p>Redaguoti klausimą: </p>
    <a class=\"btn btn-sm btn btn-block btn-outline-primary\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "id", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.edit"), "html", null, true);
        echo "</a>
    <div class=\"my-2\"></div>
    <p>Ištrinti klausimą:</p>
    <a> ";
        // line 11
        echo twig_include($this->env, $context, "question/_delete_form.html.twig");
        echo "</a>

";
    }

    // line 15
    public function block_admin_main($context, array $blocks = [])
    {
        // line 16
        echo "    <h1>Question</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "question", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "description", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "type", []), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "fkGroup", []));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 37
            echo "            <tr>
                <th>Groups</th>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", []), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  107 => 39,  103 => 37,  99 => 36,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  65 => 16,  62 => 15,  55 => 11,  47 => 8,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/show.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\show.html.twig");
    }
}

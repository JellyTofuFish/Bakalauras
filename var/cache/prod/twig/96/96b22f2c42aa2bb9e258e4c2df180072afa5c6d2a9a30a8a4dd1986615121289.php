<?php

/* question/edit.html.twig */
class __TwigTemplate_af76cc4d90bdb01ee3b4be9859cc8cfc18fdc50e118e390fda2d6a58a940a54a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Edit Question";
    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
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
    }

    // line 22
    public function block_admin_main($context, array $blocks = [])
    {
        // line 23
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "question/_form.html.twig", ["button_label" => "Update"]);
        echo "

    ";
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
        return array (  70 => 24,  67 => 23,  64 => 22,  57 => 18,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/edit.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\edit.html.twig");
    }
}

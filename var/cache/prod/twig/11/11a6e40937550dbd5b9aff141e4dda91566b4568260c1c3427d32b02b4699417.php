<?php

/* question/new.html.twig */
class __TwigTemplate_7579f73f0ca2fdc02ad8cb1cac82ae50e4a170f91caa7ae1506a308d6a1126c1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "New Question";
    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        // line 6
        echo "
    <p>Kūrimo navigacija:</p>
    <div class=\"list-group\" id=\"list-tab\" role=\"tablist\">
        <a class=\"list-group-item list-group-item-action\" id=\"list-general-list\" data-toggle=\"collapse\" href=\"#list-general\" data-target=\"#home\" role=\"tab\" aria-controls=\"home\">Bendra</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-questions-list\" data-toggle=\"collapse\" href=\"#list-questions\" data-target=\"#questions\" role=\"tab\" aria-controls=\"profile\">Klausimai</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-buttons-list\" data-toggle=\"collapse\" href=\"#list-buttons\" data-target=\"#buttons\" role=\"tab\" aria-controls=\"buttons\">Mygtukai</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-groups-list\" data-toggle=\"collapse\" href=\"#list-groups\" data-target=\"#groups\" role=\"tab\" aria-controls=\"groups\">Grupes</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-settings\" data-target=\"#settings\" role=\"tab\" aria-controls=\"settings\">Parinktys</a>
        <a class=\"list-group-item list-group-item-action\" id=\"list-settings-list\" data-toggle=\"collapse\" href=\"#list-editors\" data-target=\"#editors\" role=\"tab\" aria-controls=\"editors\">Redaguotojai</a>
    </div>
";
    }

    // line 18
    public function block_admin_main($context, array $blocks = [])
    {
        // line 19
        echo "
    ";
        // line 20
        echo twig_include($this->env, $context, "question/_form.html.twig");
        echo "

";
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
        return array (  63 => 20,  60 => 19,  57 => 18,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/new.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\new.html.twig");
    }
}

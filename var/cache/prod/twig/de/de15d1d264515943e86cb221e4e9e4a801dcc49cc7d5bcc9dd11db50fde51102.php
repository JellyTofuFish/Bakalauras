<?php

/* base.html.twig */
class __TwigTemplate_eaa1389bbfdbf1d1cd48b5d445d30cd64e10a642f6f16660aeb575daef59bddb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 8
        echo "            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
        // line 11
        echo "            <link rel=\"stylesheet\" href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/manifest.json"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/runtime.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 22
        echo "            ";
        // line 23
        echo "
            ";
        // line 25
        echo "            ";
        // line 26
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  101 => 25,  98 => 23,  96 => 22,  91 => 19,  87 => 18,  82 => 17,  79 => 16,  74 => 15,  67 => 11,  63 => 8,  60 => 7,  54 => 6,  48 => 27,  45 => 16,  43 => 15,  39 => 13,  37 => 7,  33 => 6,  27 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\base.html.twig");
    }
}

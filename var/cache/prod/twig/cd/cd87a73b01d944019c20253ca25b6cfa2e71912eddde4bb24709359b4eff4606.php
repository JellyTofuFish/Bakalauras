<?php

/* main/templete.html.twig */
class __TwigTemplate_ad5cfc3b86e1c31545c0e13bfde9e3479b758118d736075f88d9ffa5fe7aed56 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/templete.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Hello TestController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "
<div class=\"example-wrapper\">
    <h1>Hello ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"#\">src/Controller/TestController.php</a></code></li>
        <li>Your template at <code><a href=\"#\">templates/main/template.html.twig</a></code></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "main/templete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main/templete.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\main\\templete.html.twig");
    }
}

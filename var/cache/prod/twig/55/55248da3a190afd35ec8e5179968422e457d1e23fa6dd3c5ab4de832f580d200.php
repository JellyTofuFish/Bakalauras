<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_08f21e3d52ca9c2457cf6afe138f0f2bb9a9ab707e6b8c60c6918db48bc42e3b extends Twig_Template
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
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', ['type' => isset(\$type) ? \$type : 'range']);
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/range_widget.html.php", "P:\\web\\SitesPHP\\bakalauras\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}

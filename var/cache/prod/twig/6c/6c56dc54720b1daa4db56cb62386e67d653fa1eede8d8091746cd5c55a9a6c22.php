<?php

/* @Framework/Form/tel_widget.html.php */
class __TwigTemplate_861803ee35df0fd7ecc7bddfe7693f01dd92be075a58f8a14cfc0be6fb78af6c extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', ['type' => isset(\$type) ? \$type : 'tel']);
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/tel_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/tel_widget.html.php", "P:\\web\\SitesPHP\\bakalauras\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\tel_widget.html.php");
    }
}

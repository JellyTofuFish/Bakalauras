<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_c5e144c8c10fdf71b7535cfcaff4f182f9c4e3df3c8b0b9b38b1443f5797db20 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', ['type' => isset(\$type) ? \$type : 'color']);
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/color_widget.html.php", "P:\\web\\SitesPHP\\bakalauras\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\color_widget.html.php");
    }
}

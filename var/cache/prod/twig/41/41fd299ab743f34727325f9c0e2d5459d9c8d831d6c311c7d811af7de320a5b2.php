<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_10d95d4c4dfdac2d6a8cd41f45f4dc4ef1ab1dfc5597ba369641ed45818eb6cb extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/repeated_row.html.php", "P:\\web\\SitesPHP\\bakalauras\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}

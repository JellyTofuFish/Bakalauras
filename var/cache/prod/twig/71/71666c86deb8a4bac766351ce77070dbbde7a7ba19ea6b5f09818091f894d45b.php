<?php

/* question/_delete_form.html.twig */
class __TwigTemplate_aae7e3665a096257452508e54a5d571a33bdd1de3de5738302dc819fbb184109 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "id", [])]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "id", []))), "html", null, true);
        echo "\">
    <button class=\"btn btn-sm btn btn-block btn-outline-danger\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.delete"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "question/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/_delete_form.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\_delete_form.html.twig");
    }
}

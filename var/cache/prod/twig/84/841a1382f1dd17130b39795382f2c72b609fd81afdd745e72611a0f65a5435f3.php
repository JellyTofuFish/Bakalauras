<?php

/* question/index.html.twig */
class __TwigTemplate_af5999e0bfa899aa460133aa47d9bbb5f577663535e6e0d04f808bd58456ec85 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "question/index.html.twig", 1);
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
        echo "question.index";
    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        // line 6
        echo "    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-body\">
        </div>
    </div>
";
    }

    // line 24
    public function block_admin_main($context, array $blocks = [])
    {
        // line 25
        echo "    <div class=\"card border-primary\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-borderless mb-0\">
                    <thead>
                    <tr class=\"text-blue\">
                        <th scope=\"col\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.description.label"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.type.label"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.active"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class=\"my-3\"></div>

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 44
            echo "        <div class=\"card\">
            <div class=\"card-header py-1\">
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "question", [])), "html", null, true);
            echo "</td>
            </div>
            <ul class=\"list-group list-group-flush \">
                <table class=\"table table-borderless mb-0\">
                    <tbody>
                    <tr>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "description", [])), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["question"], "type", [])), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.show"), "html", null, true);
            echo "</a>
                            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.edit"), "html", null, true);
            echo "</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </ul>
        </div>
        <div class=\"my-2\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 56,  121 => 55,  116 => 53,  112 => 52,  103 => 46,  99 => 44,  95 => 43,  82 => 33,  78 => 32,  74 => 31,  66 => 25,  63 => 24,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/index.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\index.html.twig");
    }
}

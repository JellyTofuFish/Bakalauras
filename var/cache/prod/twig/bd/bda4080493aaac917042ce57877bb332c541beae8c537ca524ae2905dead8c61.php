<?php

/* main/index.html.twig */
class __TwigTemplate_9f912ffce3929a8b1bddee60b7d1888ccdcbeb92ebf7d9060fd224140a35af15 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
        echo "    <table>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 8
            echo "            <tr>
                ";
            // line 10
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "path", []), "html", null, true);
            echo "</td>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "methods", [])) > 0)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, $context["route"], "methods", []), ", ")) : ("ANY")), "html", null, true);
            echo "</td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["route"], "defaults", []), "_controller", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </table>

    <nav class=\"collapse bd-links\">
        <div class=\"bd-toc-item\">
            <a class=\"bd-toc-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show.nav"), "html", null, true);
        echo "</a>
            <ul class=\"nav flex-column bd-sidenav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.show.sidenav"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.question.new"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  84 => 22,  76 => 19,  70 => 15,  61 => 12,  57 => 11,  52 => 10,  49 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main/index.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\main\\index.html.twig");
    }
}

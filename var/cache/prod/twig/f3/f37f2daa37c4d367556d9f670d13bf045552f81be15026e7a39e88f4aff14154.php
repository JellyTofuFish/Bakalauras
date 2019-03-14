<?php

/* question/_form.html.twig */
class __TwigTemplate_5914bea6509c46a37a72cbbc423ae0592e0472b801ec078e6a4169749ec50f85 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                    ";
        // line 4
        echo "                    ";
        // line 5
        echo "                    ";
        // line 6
        echo "
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "question", []), 'label');
        echo "
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "question", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", []), 'label');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fk_group", []), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fk_group", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fk_test", []), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fk_test", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
<button class=\"btn btn-block btn-outline-primary\" type=\"submit\">";
        // line 21
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        echo "</button>

";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

<div class=\"accordion\" id=\"accordionExample\">
    <div class=\"tab-content\" id=\"nav-tabContent\">

        <div class=\"card\">
            <div class=\"card-header\" id=\"list-general\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#home\" aria-expanded=\"true\" aria-controls=\"home\">
                        Bendra
                    </button>
                </h2>
            </div>
            <div id=\"home\" class=\"tab-pane collapse show\" aria-labelledby=\"list-general list-general-list\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                    ";
        // line 41
        echo "                    ";
        // line 42
        echo "                    ";
        // line 43
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "question", []), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "question", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", []), 'label');
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'label');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'label');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "

                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'label');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", []), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
                    <button class=\"btn btn-block btn-outline-primary\" type=\"submit\">";
        // line 58
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>
                    <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\">
                        Collapsible #1 trigger
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse show\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    Collapsible #1 element
                </div>
            </div>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "question/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 60,  158 => 58,  154 => 57,  150 => 56,  145 => 54,  141 => 53,  136 => 51,  132 => 50,  127 => 48,  123 => 47,  118 => 45,  114 => 44,  111 => 43,  109 => 42,  107 => 41,  102 => 38,  84 => 23,  79 => 21,  75 => 20,  71 => 19,  66 => 17,  62 => 16,  57 => 14,  53 => 13,  48 => 11,  44 => 10,  39 => 8,  35 => 7,  32 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "question/_form.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\_form.html.twig");
    }
}

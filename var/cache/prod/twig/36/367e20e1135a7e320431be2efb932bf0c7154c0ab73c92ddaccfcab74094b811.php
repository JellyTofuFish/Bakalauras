<?php

/* question/_form.html.twig */
class __TwigTemplate_1191aca5782e42ad14808e44631efd9a92687648f3c7be0716bb0cebadd130b6 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "question/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new Twig_Error_Runtime('Variable "formGroup" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "group_new_simple", "class" => "needs-validation", "novalidate" => "", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_new_simple")]]);
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new Twig_Error_Runtime('Variable "formGroup" does not exist.', 3, $this->source); })()), "name", []), 'label', ["label_attr" => ["class" => "display-hidden"]]);
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new Twig_Error_Runtime('Variable "formGroup" does not exist.', 4, $this->source); })()), "name", []), 'widget', ["attr" => ["class" => "display-hidden"]]);
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new Twig_Error_Runtime('Variable "formGroup" does not exist.', 5, $this->source); })()), 'form_end');
        echo "

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["id" => "question_form", "class" => "needs-validation", "novalidate" => "", "enctype" => "multipart/form-data"]]);
        echo "

<div class=\"accordion\">

    ";
        // line 12
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-general\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#home\" aria-expanded=\"true\" aria-controls=\"home\">
                    <i id=\"questionCaret1\" class=\"fa fa-caret-down transition\"></i>
                    <span class=\"pl-2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general"), "html", null, true);
        echo " <b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("requied"), "html", null, true);
        echo "\">*</b></span>
                </button>
            </h2>
        </div>
        <div id=\"home\" class=\"tab-pane show\" aria-labelledby=\"list-general list-general-list\">
            <div class=\"card-body\">
                <div class=\"form-group row\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "question_name", []), 'label', ["label_attr" => ["class" => "col-sm-12 col-form-label"]] + (twig_test_empty($_label_ = ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.question_name_label") . " *")) ? [] : ["label" => $_label_]));
        echo "
                    <div class=\"col-sm-12\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "question_name", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <div class=\"invalid-feedback \">
                            ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.validation.question_name"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "question_wording", []), 'label', ["label_attr" => ["class" => "col-sm-12 col-form-label"]] + (twig_test_empty($_label_ = ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.question_wording_label") . " *")) ? [] : ["label" => $_label_]));
        echo "
                    <div class=\"col-sm-12 \">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "question_wording", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <div class=\"invalid-feedback\">
                            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.validation.question_wording"), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "description", []), 'label', ["label_attr" => ["class" => "col-sm-12 col-form-label"]]);
        echo "
                    <div class=\"col-sm-12\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "description", []), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "
                    </div>
                </div>
                ";
        // line 48
        echo "                <div class=\"form-group row\">
                    <span id=\"fileIsValid\" class=\"display-hidden\"></span>
                    <label class=\"col-sm-12 col-form-label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file"), "html", null, true);
        echo "</label>
                    <div class=\"input-group col-sm-12\">
                        <div class=\"custom-file\">
                            ";
        // line 53
        if ((isset($context["file"]) || array_key_exists("file", $context))) {
            // line 54
            echo "                                <input type=\"text\" name=\"question_file[file]\" class=\"display-hidden\" form=\"question_form\" value=\"1\" />
                                <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                <label class=\"custom-file-label\" for=\"customFile\" >";
            // line 56
            if ( !(null === (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 56, $this->source); })()))) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 56, $this->source); })()), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_choose"), "html", null, true);
                echo " ";
            }
            echo " </label>
                            ";
        } else {
            // line 58
            echo "                                <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                <label class=\"custom-file-label\"  >";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_choose"), "html", null, true);
            echo " </label>
                            ";
        }
        // line 61
        echo "                        </div>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-outline-dark p-file\" type=\"button\" id=\"fileRemove\" data-action=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_choose"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.delete"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                    <span class=\"col-sm-12 invalid-feedback uniqueFile\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.file"), "html", null, true);
        echo " </span>
                    <small class=\"col-sm-12 form-text text-muted\">
                        ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_help"), "html", null, true);
        echo "
                    </small>
                </div>
                ";
        // line 72
        echo "                <div class=\"form-group row\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "type", []), 'label', ["label_attr" => ["class" => "col-sm-12 col-form-label"]] + (twig_test_empty($_label_ = ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.type_label") . " *")) ? [] : ["label" => $_label_]));
        echo "
                    <div class=\"col-sm-12\">
                        <div class=\"d-flex\">
                            ";
        // line 76
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 76, $this->source); })()), "type", []))) {
            // line 77
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "type", []), 'widget', ["attr" => ["class" => "custom-select btn-no-right-radius", "disabled" => ""]]);
            echo "
                            ";
        } else {
            // line 79
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "type", []), 'widget', ["attr" => ["class" => "custom-select btn-no-right-radius"]]);
            echo "
                            ";
        }
        // line 81
        echo "
                            ";
        // line 82
        if (((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 82, $this->source); })()) == "button.save")) {
            // line 83
            echo "                                <button data-link=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 83, $this->source); })()), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-no-left-radius questionTypeSave display-hidden questionTypeEditSave\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
            echo "</button>
                                <button class=\"btn btn-outline-dark btn-no-left-radius questionTypeRemove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.answer.remove_disclaimer"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
            echo "</button>
                            ";
        } elseif ((        // line 85
(isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 85, $this->source); })()) == "button.new")) {
            // line 86
            echo "                                ";
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 86, $this->source); })()), "type", []))) {
                // line 87
                echo "                                    <button class=\"btn btn-primary questionTypeSave btn-no-left-radius \">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
                echo "</button>
                                    <button class=\"btn btn-outline-dark btn-no-left-radius questionTypeRemove display-hidden\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.answer.remove_disclaimer"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
                echo "</button>
                                ";
            } else {
                // line 90
                echo "                                    <button class=\"btn btn-primary questionTypeSave btn-no-left-radius display-hidden\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.save"), "html", null, true);
                echo "</button>
                                    <button class=\"btn btn-outline-dark btn-no-left-radius questionTypeRemove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.answer.remove_disclaimer"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.remove"), "html", null, true);
                echo "</button>
                                ";
            }
            // line 93
            echo "                            ";
        }
        // line 94
        echo "                        </div>
                        <div class=\"invalid-feedback\"> ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.validation.type"), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-form-label col-sm-12\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.required_label"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-12 pl-5 custom-control custom-switch\">
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), "required", []), 'widget', ["attr" => ["class" => "custom-control-input"]]);
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->source); })()), "required", []), 'label', ["label_attr" => ["class" => "custom-control-label"]]);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 110
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-groups\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#groups\" aria-expanded=\"false\" aria-controls=\"groups\">
                    <i id=\"questionCaret2\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups"), "html", null, true);
        echo "</span>
                </button>
            </h2>
        </div>
        <div id=\"groups\" class=\"tab-pane collapse\" aria-labelledby=\"list-groups list-groups-list\" >
            <div class=\"card-body\">
                <div class=\"form-group row\">
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), "fk_group", []), 'label', ["label_attr" => ["class" => "col-sm-12 col-form-label"]]);
        echo "
                    <div class=\"col-sm-12\">
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), "fk_group", []), 'widget', ["attr" => ["class" => "custom-select"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row mb-0\">
                    <label for=\"group_simple_name\" class=\"col-sm-2 col-form-label\" >";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("group.title.new"), "html", null, true);
        echo "</label>
                    <a href=\"\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.group.add"), "html", null, true);
        echo "\">
                        <i data-target=\".group_simple\" class=\"p-form text-dark pointer fa fa-plus-square groupAdd\"></i>
                    </a>
                    <div class=\"display-hidden\">
                        <div class=\"d-flex\">
                            <p class=\"p-form text-success pr-2 pointer-default\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("group.flash_message.created"), "html", null, true);
        echo "</p>
                            <i class=\"px-0 text-success p-form fa fa-check-circle\"></i>
                        </div>
                    </div>
                    <div class=\"col-sm-12 display-hidden\">
                        <div class=\"d-flex\">
                            <input  type=\"text\" name=\"group_simple[name]\" form=\"group_new_simple\" class=\"form-control btn-no-right-radius group_simple\" pattern=\".{2,50}\" placeholder=\"Įveskite grupės pavadinimą\">
                            <button class=\"btn btn-primary btn-no-left-radius btn-no-right-radius\" form=\"group_new_simple\" type=\"submit\">";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.new"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-outline-dark btn-no-left-radius groupRemove\" form=\"group_new_simple\">";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "</button>
                        </div>
                        <small class=\"form-text text-muted\">
                            ";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("group.validation.name"), "html", null, true);
        echo "
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 154
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-answers\">
            <h2 class=\"mb-0\">
                ";
        // line 157
        if (((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 157, $this->source); })()), "type", []) == "one") || (twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 157, $this->source); })()), "type", []) == "multi"))) {
            // line 158
            echo "                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                    <i id=\"questionCaret3\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
            echo "<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("requied"), "html", null, true);
            echo "\">*</b></span>
                </button>
                ";
        } else {
            // line 163
            echo "                    <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                        <i id=\"questionCaret3\" class=\" disabled-menu fa fa-caret-down transition rotation\" ></i>
                        <span data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("poppers.answer.disabled_option"), "html", null, true);
            echo "\" class=\"disabled-menu pl-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 168
        echo "            </h2>
        </div>
        <div id=\"answers\" class=\"tab-pane collapse \" aria-labelledby=\"list-answers list-answers-list\" >
            ";
        // line 171
        if (((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 171, $this->source); })()), "type", []) == "one") || (twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 171, $this->source); })()), "type", []) == "multi"))) {
            // line 172
            echo "            <div class=\"card-body answeroptions\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->source); })()), "answeroptions", []), "vars", []), "prototype", []), "answer", []), 'row'));
            echo "\">
                ";
            // line 173
            $context["numb"] = 1;
            // line 174
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 174, $this->source); })()), "answeroptions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 175
                echo "                    <div class=\"form-group row\">
                        ";
                // line 176
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["answer"], "answer", []), 'label', ["label_attr" => ["class" => "col-sm-12 col-form-label"]] + (twig_test_empty($_label_ = (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.answeroptions_label") . " ") . (isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 176, $this->source); })())) . " ") . "*")) ? [] : ["label" => $_label_]));
                echo "
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex\">
                                ";
                // line 179
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["answer"], "answer", []), 'widget');
                echo "
                            </div>
                        </div>
                    </div>
                    ";
                // line 183
                $context["numb"] = ((isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 183, $this->source); })()) + 1);
                // line 184
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "            </div>
            ";
        } else {
            // line 187
            echo "            ";
        }
        // line 188
        echo "        </div>
    </div>

    ";
        // line 192
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-time\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#time\" aria-expanded=\"false\" aria-controls=\"time\">
                    <i id=\"questionCaret4\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time"), "html", null, true);
        echo "</span>
                </button>
            </h2>
        </div>
        <div id=\"time\" class=\"tab-pane collapse\" aria-labelledby=\"list-time list-time-list\" >
            <div class=\"card-body\">
                <div class=\"form-group row mb-2\">
                    <label class=\"col-form-label col-sm-12\">";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.time_label"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-12 my-2 pl-5 custom-control custom-switch\">
                        <input type=\"checkbox\" name=\"question_attribute_time[value]\" form=\"question_form\" id=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 206, $this->source); })()), "id", []), "html", null, true);
        echo "Time\" class=\"custom-control-input\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "time", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 206, $this->source); })()), "time", [])))) {
            echo " checked ";
        }
        echo "/>
                        <label class=\"custom-control-label\" for=\"";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 207, $this->source); })()), "id", []), "html", null, true);
        echo "Time\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.time_description"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 215
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-buttonColor\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#buttonColor\" aria-expanded=\"false\" aria-controls=\"buttonColor\">
                    <i id=\"questionCaret5\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("buttoncolor"), "html", null, true);
        echo " ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 220, $this->source); })()), "buttonColors", []))) {
            echo "<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("requied"), "html", null, true);
            echo "\">*</b> ";
        }
        echo "</span>
                </button>
            </h2>
        </div>
        <div id=\"buttonColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-buttonColor list-buttonColor-list\" >
            <div class=\"card-body buttoncolors\" data-prototype='<div><label for=\"question_attribute_buttonColor___name___id\" class=\"required\">";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.button_color"), "html", null, true);
        echo "</label><input type=\"color\" value=\"#007bff\" id=\"question_attribute_buttonColor___name___id\" name=\"question_attribute_buttonColor[__name__][id]\" form=\"question_form\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.button_color_placeholder"), "html", null, true);
        echo "\" class=\"form-control btn-no-right-radius uniqueBtnC\" maxlength=\"255\" /></div>
            <span class=\"invalid-feedback uniqueBtnC\"> ";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.unique"), "html", null, true);
        echo "</span>'>

                <span class=\"pre font-italic pb-3 form-text text-muted\">";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 228, $this->source); })()), "buttonColor", []), "description", []), "html", null, true);
        echo "</span>

                ";
        // line 230
        $context["numb"] = 1;
        // line 231
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 231, $this->source); })()), "buttonColors", []));
        foreach ($context['_seq'] as $context["key"] => $context["bc"]) {
            // line 232
            echo "                    <div class=\"form-group row\">
                        <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">";
            // line 233
            echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.button_color") . " ") . (isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 233, $this->source); })())) . " ") . "*"), "html", null, true);
            echo "</label>
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex\">
                                ";
            // line 236
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 236, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "question_edit")) {
                // line 237
                echo "                                    <input type=\"color\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "value", []), "html", null, true);
                echo "\" id=\"question_attribute_buttonColor_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" name=\"question_attribute_buttonColor[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "id", []), "html", null, true);
                echo "]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.button_color_placeholder"), "html", null, true);
                echo "\" class=\"form-control btn-no-right-radius uniqueBtnC\" maxlength=\"255\" />
                                ";
            } else {
                // line 239
                echo "                                    <input type=\"color\" value=\"";
                echo twig_escape_filter($this->env, twig_first($this->env, $context["bc"]), "html", null, true);
                echo "\" id=\"question_attribute_buttonColor_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" name=\"question_attribute_buttonColor[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["bc"])), "html", null, true);
                echo "]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.button_color_placeholder"), "html", null, true);
                echo "\" class=\"form-control btn-no-right-radius uniqueBtnC\" maxlength=\"255\" />
                                ";
            }
            // line 241
            echo "
                            </div>
                            <span class=\"invalid-feedback uniqueBtnC\"> ";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.unique"), "html", null, true);
            echo "</span>
                        </div>
                        ";
            // line 245
            $context["numb"] = ((isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 245, $this->source); })()) + 1);
            // line 246
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['bc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "            </div>
        </div>
    </div>

    ";
        // line 253
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-backgroundColor\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#backgroundColor\" aria-expanded=\"false\" aria-controls=\"backgroundColor\">
                    <i id=\"questionCaret6\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backgroundcolor"), "html", null, true);
        echo " ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 258, $this->source); })()), "backgroundColors", []))) {
            echo "<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("requied"), "html", null, true);
            echo "\">*</b> ";
        }
        echo "</span>
                </button>
            </h2>
        </div>
        <div id=\"backgroundColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-backgroundColor list-backgroundColor-list\" >
            <div class=\"card-body backgroundColors\" data-prototype='<div><label for=\"question_attribute_backgroundColor___name___id\" class=\"required\">";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.background_color"), "html", null, true);
        echo "</label><input type=\"color\" value=\"#FFFFFF\" id=\"question_attribute_backgroundColor___name___id\" name=\"question_attribute_backgroundColor[__name__][id]\" form=\"question_form\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.background_color_placeholder"), "html", null, true);
        echo "\" class=\"form-control btn-no-right-radius uniqueBgC\" maxlength=\"255\" /></div>
            <span class=\"invalid-feedback uniqueBgC\"> ";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.unique"), "html", null, true);
        echo "</span>'>

                <span class=\"pre font-italic pb-3 form-text text-muted\">";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 266, $this->source); })()), "backgroundColor", []), "description", []), "html", null, true);
        echo "</span>

                ";
        // line 268
        $context["numb"] = 1;
        // line 269
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 269, $this->source); })()), "backgroundColors", []));
        foreach ($context['_seq'] as $context["key"] => $context["bc"]) {
            // line 270
            echo "                    <div class=\"form-group row\">
                        <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">";
            // line 271
            echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.background_color") . " ") . (isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 271, $this->source); })())) . " ") . "*"), "html", null, true);
            echo "</label>
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex\">
                                ";
            // line 274
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 274, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "question_edit")) {
                // line 275
                echo "                                    <input type=\"color\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "value", []), "html", null, true);
                echo "\" id=\"question_attribute_backgroundColor_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" name=\"question_attribute_backgroundColor[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "id", []), "html", null, true);
                echo "]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.background_color_placeholder"), "html", null, true);
                echo "\" class=\"form-control btn-no-right-radius uniqueBgC\" maxlength=\"255\" />
                                ";
            } else {
                // line 277
                echo "                                    <input type=\"color\" value=\"";
                echo twig_escape_filter($this->env, twig_first($this->env, $context["bc"]), "html", null, true);
                echo "\" id=\"question_attribute_backgroundColor_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" name=\"question_attribute_backgroundColor[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["bc"])), "html", null, true);
                echo "]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.background_color_placeholder"), "html", null, true);
                echo "\" class=\"form-control btn-no-right-radius uniqueBgC\" maxlength=\"255\" />
                                ";
            }
            // line 279
            echo "                            </div>
                            <span class=\"invalid-feedback uniqueBgC\"> ";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.unique"), "html", null, true);
            echo "</span>
                        </div>
                        ";
            // line 282
            $context["numb"] = ((isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 282, $this->source); })()) + 1);
            // line 283
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['bc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "            </div>
        </div>
    </div>

    ";
        // line 290
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-displayTime\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#displayTime\" aria-expanded=\"false\" aria-controls=\"displayTime\">
                    <i id=\"questionCaretDT\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("displaytime"), "html", null, true);
        echo " ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 295, $this->source); })()), "displayTimes", []))) {
            echo "<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("requied"), "html", null, true);
            echo "\">*</b> ";
        }
        echo "</span>
                </button>
            </h2>
        </div>
        <div id=\"displayTime\" class=\"tab-pane collapse\" aria-labelledby=\"list-displayTime list-displayTime-list\" >
            <div class=\"card-body displayTimes\" data-prototype='<label for=\"question_attribute_displayTime___name___id\" class=\"required\">";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time"), "html", null, true);
        echo "</label>
                    <block>
                     <input type=\"number\" id=\"question_attribute_displayTime___name___id\" name=\"question_attribute_displayTime[__name__][id]\" form=\"question_form\" required=\"required\" class=\"text-center form-control t\" placeholder=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_time"), "html", null, true);
        echo "\" min=\"0\" max=\"9999\" maxlength=\"99999\" />
                    <input type=\"number\" id=\"question_attribute_displayTime___name___type\" name=\"question_attribute_displayTime[__name__][type]\" form=\"question_form\" required=\"required\"  class=\"text-center form-control bool\" placeholder=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_type"), "html", null, true);
        echo "\"  min=\"0\" max=\"1\" maxlength=\"1\" />
                    <input type=\"number\" id=\"question_attribute_displayTime___name___vis\" name=\"question_attribute_displayTime[__name__][vis]\" form=\"question_form\" required=\"required\" class=\"text-center form-control bool\" placeholder=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_skip"), "html", null, true);
        echo "\"  min=\"0\" max=\"1\" maxlength=\"1\" />
                    </block>'>

                <span class=\"pre font-italic pb-3 form-text text-muted\">";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 307, $this->source); })()), "displayTime", []), "description", []), "html", null, true);
        echo "</span>

                ";
        // line 309
        $context["numb"] = 1;
        // line 310
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 310, $this->source); })()), "displayTimes", []));
        foreach ($context['_seq'] as $context["key"] => $context["bc"]) {
            // line 311
            echo "
                    ";
            // line 312
            $context["displayTime"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "value", []), ":");
            // line 313
            echo "                    <div class=\"form-group row\">
                        <label class=\"col-sm-12 col-form-label\">";
            // line 314
            echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time") . " ") . (isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 314, $this->source); })())) . " ") . "*"), "html", null, true);
            echo "</label>
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex input-group\">
                                ";
            // line 317
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 317, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "question_edit")) {
                // line 318
                echo "                                    <input type=\"number\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["displayTime"]) || array_key_exists("displayTime", $context) ? $context["displayTime"] : (function () { throw new Twig_Error_Runtime('Variable "displayTime" does not exist.', 318, $this->source); })()), 0, [], "array"), "html", null, true);
                echo "\" id=\"question_attribute_displayTime_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" name=\"question_attribute_displayTime[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "id", []), "html", null, true);
                echo "]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_time"), "html", null, true);
                echo "\" class=\"text-center form-control \" min=\"0\" max=\"9999\" maxlength=\"99999\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 99999) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"";
                // line 322
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["displayTime"]) || array_key_exists("displayTime", $context) ? $context["displayTime"] : (function () { throw new Twig_Error_Runtime('Variable "displayTime" does not exist.', 322, $this->source); })()), 1, [], "array"), "html", null, true);
                echo "\" id=\"question_attribute_displayTime_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_type\" name=\"question_attribute_displayTime[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][type]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_type"), "html", null, true);
                echo "\" class=\"text-center form-control\"  min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 border-right-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"";
                // line 326
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["displayTime"]) || array_key_exists("displayTime", $context) ? $context["displayTime"] : (function () { throw new Twig_Error_Runtime('Variable "displayTime" does not exist.', 326, $this->source); })()), 2, [], "array"), "html", null, true);
                echo "\" id=\"question_attribute_displayTime_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_vis\" name=\"question_attribute_displayTime[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][vis]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_skip"), "html", null, true);
                echo "\" class=\"text-center form-control\" min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\" />
                                ";
            } else {
                // line 328
                echo "                                    <input type=\"number\" value=\"";
                echo twig_escape_filter($this->env, twig_first($this->env, $context["bc"]), "html", null, true);
                echo "\" id=\"question_attribute_displayTime_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" name=\"question_attribute_displayTime[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["bc"])), "html", null, true);
                echo "]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_time"), "html", null, true);
                echo "\" class=\"text-center form-control \" min=\"0\" max=\"9999\" maxlength=\"99999\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 99999) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"";
                // line 332
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "type", []), "html", null, true);
                echo "\" id=\"question_attribute_displayTime_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_type\" name=\"question_attribute_displayTime[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][type]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_type"), "html", null, true);
                echo "\" class=\"text-center form-control\"  min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 border-right-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"";
                // line 336
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "vis", []), "html", null, true);
                echo "\" id=\"question_attribute_displayTime_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_vis\" name=\"question_attribute_displayTime[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][vis]\" form=\"question_form\" required=\"required\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_skip"), "html", null, true);
                echo "\" class=\"text-center form-control\" min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\" />
                                ";
            }
            // line 338
            echo "
                            </div>
                        </div>
                        ";
            // line 341
            $context["numb"] = ((isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 341, $this->source); })()) + 1);
            // line 342
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['bc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "            </div>
        </div>
    </div>

    ";
        // line 349
        echo "    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-picture\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#picture\" aria-expanded=\"false\" aria-controls=\"picture\">
                    <i id=\"questionCaret7\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("picture"), "html", null, true);
        echo " ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 354, $this->source); })()), "pictures", []))) {
            echo "<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("requied"), "html", null, true);
            echo "\">*</b> ";
        }
        echo "</span>
                </button>
            </h2>
        </div>
        <div id=\"picture\" class=\"tab-pane collapse\" aria-labelledby=\"list-picture list-picture-list\" >
            <div class=\"card-body pictures\" data-prototype='<input type=\"file\" required id=\"question_attribute_picture___name___id\" name=\"question_attribute_picture[__name__][id]\" form=\"question_form\" class=\"uniquePicture custom-file-input\" accept=\".png, .jpg, .jpeg\" />
            <label for=\"question_attribute_picture___name___id\" class=\"custom-file-label\"> ";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_choose"), "html", null, true);
        echo " </label>
            <span class=\"invalid-feedback uniquePicture\"> ";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.required"), "html", null, true);
        echo "</span>'>

                <span id=\"pictureIsValid\" class=\"display-hidden\"></span>
                <span class=\"pre font-italic form-text text-muted mb-3\">";
        // line 364
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 364, $this->source); })()), "picture", []), "description", []), "html", null, true);
        echo "</span>

                ";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 366, $this->source); })()), "pictures", []));
        foreach ($context['_seq'] as $context["key"] => $context["pic"]) {
            // line 367
            echo "                <div class=\"mb-4\">
                    <div class=\"input-group \">
                        <div class=\"custom-file\">
                            <input type=\"text\" name=\"question_attribute_picture[";
            // line 370
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" class=\"display-hidden\" form=\"question_form\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "id", []), "html", null, true);
            echo "\" />
                            <input type=\"file\" id=\"question_attribute_picture_";
            // line 371
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_id\" name=\"question_attribute_picture[";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "id", []), "html", null, true);
            echo "]\" form=\"question_form\" class=\"uniquePicture custom-file-input\" accept=\".png, .jpg, .jpeg\" />
                            <label for=\"question_attribute_picture_";
            // line 372
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_id\" class=\"custom-file-label\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "value", []), "html", null, true);
            echo " </label>
                        </div>
                        <div class=\"input-group-append\">
                        </div>
                    </div>
                    <span class=\"invalid-feedback uniquePicture\"> ";
            // line 377
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.required"), "html", null, true);
            echo "</span>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['pic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "            </div>
        </div>
    </div>

    ";
        // line 385
        echo "    <div class=\"card border-light\">
        <div class=\"card-header p-0\" id=\"list-save\">
            <h2 class=\"mb-0\">
                ";
        // line 388
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 388, $this->source); })()), "request", []), "get", [0 => "_route"], "method") == "question_edit")) {
            // line 389
            echo "                <button class=\"btn btn-block btn-primary questionEditSave btn-save btn-no-top-radius\" data-link=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 389, $this->source); })()), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 389, $this->source); })()), "Save")) : ("Save"))), "html", null, true);
            echo "</button>
                ";
        } else {
            // line 391
            echo "                <button class=\"btn btn-block btn-primary questionSave btn-save btn-no-top-radius\" data-link=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new_save");
            echo "\" >";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 391, $this->source); })()), "Save")) : ("Save"))), "html", null, true);
            echo "</button>
                ";
        }
        // line 393
        echo "            </h2>
        </div>
    </div>
</div>

";
        // line 398
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 398, $this->source); })()), 'form_end');
        echo "






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  977 => 398,  970 => 393,  962 => 391,  954 => 389,  952 => 388,  947 => 385,  941 => 380,  932 => 377,  922 => 372,  914 => 371,  908 => 370,  903 => 367,  899 => 366,  894 => 364,  888 => 361,  884 => 360,  869 => 354,  862 => 349,  856 => 344,  849 => 342,  847 => 341,  842 => 338,  831 => 336,  818 => 332,  802 => 328,  791 => 326,  778 => 322,  762 => 318,  760 => 317,  754 => 314,  751 => 313,  749 => 312,  746 => 311,  741 => 310,  739 => 309,  734 => 307,  728 => 304,  724 => 303,  720 => 302,  715 => 300,  701 => 295,  694 => 290,  688 => 285,  681 => 283,  679 => 282,  674 => 280,  671 => 279,  657 => 277,  643 => 275,  641 => 274,  635 => 271,  632 => 270,  627 => 269,  625 => 268,  620 => 266,  615 => 264,  609 => 263,  595 => 258,  588 => 253,  582 => 248,  575 => 246,  573 => 245,  568 => 243,  564 => 241,  550 => 239,  536 => 237,  534 => 236,  528 => 233,  525 => 232,  520 => 231,  518 => 230,  513 => 228,  508 => 226,  502 => 225,  488 => 220,  481 => 215,  469 => 207,  461 => 206,  456 => 204,  446 => 197,  439 => 192,  434 => 188,  431 => 187,  427 => 185,  421 => 184,  419 => 183,  412 => 179,  406 => 176,  403 => 175,  398 => 174,  396 => 173,  391 => 172,  389 => 171,  384 => 168,  376 => 165,  372 => 163,  364 => 160,  360 => 158,  358 => 157,  353 => 154,  342 => 145,  336 => 142,  332 => 141,  322 => 134,  314 => 129,  310 => 128,  303 => 124,  298 => 122,  288 => 115,  281 => 110,  271 => 102,  267 => 101,  262 => 99,  255 => 95,  252 => 94,  249 => 93,  242 => 91,  237 => 90,  230 => 88,  225 => 87,  222 => 86,  220 => 85,  214 => 84,  207 => 83,  205 => 82,  202 => 81,  196 => 79,  190 => 77,  188 => 76,  182 => 73,  179 => 72,  173 => 68,  168 => 66,  160 => 63,  156 => 61,  151 => 59,  148 => 58,  135 => 56,  131 => 54,  129 => 53,  123 => 50,  119 => 48,  113 => 44,  108 => 42,  100 => 37,  95 => 35,  90 => 33,  82 => 28,  77 => 26,  72 => 24,  60 => 17,  53 => 12,  46 => 7,  41 => 5,  37 => 4,  33 => 3,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ form_start(formGroup, { 'attr': {'id':'group_new_simple', 'class':'needs-validation', 'novalidate':'', 'action': path('group_new_simple') }}) }}
{{ form_label(formGroup.name, null, { 'label_attr': { 'class':'display-hidden'} }) }}
{{ form_widget(formGroup.name, { 'attr': { 'class':'display-hidden'} }) }}
{{ form_end(formGroup) }}

{{ form_start(form, { 'attr': {'id':'question_form', 'class':'needs-validation', 'novalidate':'', 'enctype':\"multipart/form-data\" }}) }}

<div class=\"accordion\">

    {# Klausimo informacija. Klausimo formos laukeliai #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-general\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#home\" aria-expanded=\"true\" aria-controls=\"home\">
                    <i id=\"questionCaret1\" class=\"fa fa-caret-down transition\"></i>
                    <span class=\"pl-2\">{{ 'general'|trans }} <b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'requied'|trans }}\">*</b></span>
                </button>
            </h2>
        </div>
        <div id=\"home\" class=\"tab-pane show\" aria-labelledby=\"list-general list-general-list\">
            <div class=\"card-body\">
                <div class=\"form-group row\">
                    {{ form_label(form.question_name, 'question.form.question_name_label'|trans ~ ' *', { 'label_attr': { 'class':'col-sm-12 col-form-label'} }) }}
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.question_name, { 'attr': { 'class':'form-control'} }) }}
                        <div class=\"invalid-feedback \">
                            {{ 'question.validation.question_name'|trans }}
                        </div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    {{ form_label(form.question_wording, 'question.form.question_wording_label'|trans ~ ' *', { 'label_attr': {'class':'col-sm-12 col-form-label'} }) }}
                    <div class=\"col-sm-12 \">
                        {{ form_widget(form.question_wording, { 'attr': {'class':'form-control'} }) }}
                        <div class=\"invalid-feedback\">
                            {{ 'question.validation.question_wording'|trans }}
                        </div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    {{ form_label(form.description, null, { 'label_attr': {'class':'col-sm-12 col-form-label'} }) }}
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.description, { 'attr': {'class':'form-control '} }) }}
                    </div>
                </div>
                {# Klausimo failas #}
                <div class=\"form-group row\">
                    <span id=\"fileIsValid\" class=\"display-hidden\"></span>
                    <label class=\"col-sm-12 col-form-label\">{{ 'attribute.file'|trans }}</label>
                    <div class=\"input-group col-sm-12\">
                        <div class=\"custom-file\">
                            {% if file is defined %}
                                <input type=\"text\" name=\"question_file[file]\" class=\"display-hidden\" form=\"question_form\" value=\"1\" />
                                <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                <label class=\"custom-file-label\" for=\"customFile\" >{% if file is not null %} {{ file }} {% else %} {{ 'attribute.file_choose'|trans }} {% endif %} </label>
                            {% else %}
                                <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                <label class=\"custom-file-label\"  >{{ 'attribute.file_choose'|trans }} </label>
                            {% endif %}
                        </div>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-outline-dark p-file\" type=\"button\" id=\"fileRemove\" data-action=\"{{ 'attribute.file_choose'|trans }}\">{{ 'button.delete'|trans }}</button>
                        </div>
                    </div>
                    <span class=\"col-sm-12 invalid-feedback uniqueFile\">{{ 'attribute.validation.file'|trans }} </span>
                    <small class=\"col-sm-12 form-text text-muted\">
                        {{ 'attribute.file_help'|trans }}
                    </small>
                </div>
                {# Klausimo tipas #}
                <div class=\"form-group row\">
                    {{ form_label(form.type, 'question.form.type_label'|trans ~ ' *', { 'label_attr': {'class':'col-sm-12 col-form-label'} }) }}
                    <div class=\"col-sm-12\">
                        <div class=\"d-flex\">
                            {% if question.type is not null %}
                                {{ form_widget(form.type, {'attr': {'class':'custom-select btn-no-right-radius', 'disabled':'' } }) }}
                            {% else %}
                                {{ form_widget(form.type, {'attr': {'class':'custom-select btn-no-right-radius' } }) }}
                            {% endif %}

                            {% if button_label == \"button.save\" %}
                                <button data-link=\"{{ path('question_edit', {'id': question.id })}}\" class=\"btn btn-primary btn-no-left-radius questionTypeSave display-hidden questionTypeEditSave\">{{ 'button.save'|trans }}</button>
                                <button class=\"btn btn-outline-dark btn-no-left-radius questionTypeRemove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'poppers.answer.remove_disclaimer'|trans }}\"> {{ 'button.remove'|trans }}</button>
                            {% elseif button_label == \"button.new\" %}
                                {% if question.type is null %}
                                    <button class=\"btn btn-primary questionTypeSave btn-no-left-radius \">{{ 'button.save'|trans }}</button>
                                    <button class=\"btn btn-outline-dark btn-no-left-radius questionTypeRemove display-hidden\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'poppers.answer.remove_disclaimer'|trans }}\"> {{ 'button.remove'|trans }}</button>
                                {% else %}
                                    <button class=\"btn btn-primary questionTypeSave btn-no-left-radius display-hidden\">{{ 'button.save'|trans }}</button>
                                    <button class=\"btn btn-outline-dark btn-no-left-radius questionTypeRemove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'poppers.answer.remove_disclaimer'|trans }}\"> {{ 'button.remove'|trans }}</button>
                                {% endif %}
                            {% endif %}
                        </div>
                        <div class=\"invalid-feedback\"> {{ 'question.validation.type'|trans }}</div>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-form-label col-sm-12\">{{ 'question.form.required_label'|trans }}</label>
                    <div class=\"col-sm-12 pl-5 custom-control custom-switch\">
                        {{ form_widget(form.required, { 'attr': {'class':'custom-control-input'} }) }}
                        {{ form_label(form.required, null, { 'label_attr': {'class':'custom-control-label'} }) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Grupių informacija. Grupės forma #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-groups\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#groups\" aria-expanded=\"false\" aria-controls=\"groups\">
                    <i id=\"questionCaret2\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">{{ 'groups'|trans }}</span>
                </button>
            </h2>
        </div>
        <div id=\"groups\" class=\"tab-pane collapse\" aria-labelledby=\"list-groups list-groups-list\" >
            <div class=\"card-body\">
                <div class=\"form-group row\">
                    {{ form_label(form.fk_group, null, { 'label_attr': {'class':'col-sm-12 col-form-label'} }) }}
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.fk_group, { 'attr': {'class':'custom-select'} }) }}
                    </div>
                </div>
                <div class=\"form-group row mb-0\">
                    <label for=\"group_simple_name\" class=\"col-sm-2 col-form-label\" >{{ 'group.title.new'|trans }}</label>
                    <a href=\"\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.group.add'|trans }}\">
                        <i data-target=\".group_simple\" class=\"p-form text-dark pointer fa fa-plus-square groupAdd\"></i>
                    </a>
                    <div class=\"display-hidden\">
                        <div class=\"d-flex\">
                            <p class=\"p-form text-success pr-2 pointer-default\">{{ 'group.flash_message.created'|trans }}</p>
                            <i class=\"px-0 text-success p-form fa fa-check-circle\"></i>
                        </div>
                    </div>
                    <div class=\"col-sm-12 display-hidden\">
                        <div class=\"d-flex\">
                            <input  type=\"text\" name=\"group_simple[name]\" form=\"group_new_simple\" class=\"form-control btn-no-right-radius group_simple\" pattern=\".{2,50}\" placeholder=\"Įveskite grupės pavadinimą\">
                            <button class=\"btn btn-primary btn-no-left-radius btn-no-right-radius\" form=\"group_new_simple\" type=\"submit\">{{ 'button.new'|trans }}</button>
                            <button class=\"btn btn-outline-dark btn-no-left-radius groupRemove\" form=\"group_new_simple\">{{ 'button.cancel'|trans }}</button>
                        </div>
                        <small class=\"form-text text-muted\">
                            {{ 'group.validation.name'|trans }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Klausimo atsakymų informacija. #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-answers\">
            <h2 class=\"mb-0\">
                {% if  question.type == 'one' or question.type == 'multi' %}
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                    <i id=\"questionCaret3\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">{{ 'answers'|trans }}<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'requied'|trans }}\">*</b></span>
                </button>
                {% else %}
                    <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                        <i id=\"questionCaret3\" class=\" disabled-menu fa fa-caret-down transition rotation\" ></i>
                        <span data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'poppers.answer.disabled_option'|trans }}\" class=\"disabled-menu pl-2\">{{ 'answers'|trans }}</span>
                    </button>
                {% endif %}
            </h2>
        </div>
        <div id=\"answers\" class=\"tab-pane collapse \" aria-labelledby=\"list-answers list-answers-list\" >
            {% if  question.type == 'one' or question.type == 'multi' %}
            <div class=\"card-body answeroptions\" data-prototype=\"{{ form_row(form.answeroptions.vars.prototype.answer)|e }}\">
                {% set numb = 1 %}
                {% for answer in form.answeroptions %}
                    <div class=\"form-group row\">
                        {{ form_label(answer.answer, 'question.form.answeroptions_label'|trans ~ ' ' ~ numb ~ ' ' ~ '*', { 'label_attr': {'class':'col-sm-12 col-form-label'} }) }}
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex\">
                                {{ form_widget(answer.answer) }}
                            </div>
                        </div>
                    </div>
                    {% set numb = numb +1 %}
                {% endfor %}
            </div>
            {% else %}
            {% endif %}
        </div>
    </div>

    {# Klausimo laiko savybių informacija #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-time\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#time\" aria-expanded=\"false\" aria-controls=\"time\">
                    <i id=\"questionCaret4\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">{{ 'time'|trans }}</span>
                </button>
            </h2>
        </div>
        <div id=\"time\" class=\"tab-pane collapse\" aria-labelledby=\"list-time list-time-list\" >
            <div class=\"card-body\">
                <div class=\"form-group row mb-2\">
                    <label class=\"col-form-label col-sm-12\">{{ 'question.form.time_label'|trans }}</label>
                    <div class=\"col-sm-12 my-2 pl-5 custom-control custom-switch\">
                        <input type=\"checkbox\" name=\"question_attribute_time[value]\" form=\"question_form\" id=\"{{ question.id }}Time\" class=\"custom-control-input\" {% if attributes.time is defined and attributes.time is not empty %} checked {% endif %}/>
                        <label class=\"custom-control-label\" for=\"{{ question.id }}Time\">{{ 'question.form.time_description'|trans }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Klausimo mygtuko salvos savybių informacija #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-buttonColor\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#buttonColor\" aria-expanded=\"false\" aria-controls=\"buttonColor\">
                    <i id=\"questionCaret5\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">{{ 'buttoncolor'|trans }} {% if attributes.buttonColors is not empty %}<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'requied'|trans }}\">*</b> {% endif %}</span>
                </button>
            </h2>
        </div>
        <div id=\"buttonColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-buttonColor list-buttonColor-list\" >
            <div class=\"card-body buttoncolors\" data-prototype='<div><label for=\"question_attribute_buttonColor___name___id\" class=\"required\">{{'attribute.button_color'|trans}}</label><input type=\"color\" value=\"#007bff\" id=\"question_attribute_buttonColor___name___id\" name=\"question_attribute_buttonColor[__name__][id]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.button_color_placeholder'|trans}}\" class=\"form-control btn-no-right-radius uniqueBtnC\" maxlength=\"255\" /></div>
            <span class=\"invalid-feedback uniqueBtnC\"> {{ 'attribute.validation.unique'|trans }}</span>'>

                <span class=\"pre font-italic pb-3 form-text text-muted\">{{ attributeText.buttonColor.description }}</span>

                {% set numb = 1 %}
                {% for key, bc in attributes.buttonColors %}
                    <div class=\"form-group row\">
                        <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">{{ 'attribute.button_color'|trans ~ ' ' ~ numb ~ ' ' ~ '*' }}</label>
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex\">
                                {% if (app.request.get('_route')) == 'question_edit' %}
                                    <input type=\"color\" value=\"{{ bc.value }}\" id=\"question_attribute_buttonColor_{{ key }}_id\" name=\"question_attribute_buttonColor[{{ key }}][{{ bc.id }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.button_color_placeholder'|trans}}\" class=\"form-control btn-no-right-radius uniqueBtnC\" maxlength=\"255\" />
                                {% else  %}
                                    <input type=\"color\" value=\"{{ bc | first }}\" id=\"question_attribute_buttonColor_{{ key }}_id\" name=\"question_attribute_buttonColor[{{ key }}][{{ bc| keys |first }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.button_color_placeholder'|trans}}\" class=\"form-control btn-no-right-radius uniqueBtnC\" maxlength=\"255\" />
                                {% endif %}

                            </div>
                            <span class=\"invalid-feedback uniqueBtnC\"> {{ 'attribute.validation.unique'|trans }}</span>
                        </div>
                        {% set numb = numb +1 %}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    {# Klausimo fono salvos savybių informacija #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-backgroundColor\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#backgroundColor\" aria-expanded=\"false\" aria-controls=\"backgroundColor\">
                    <i id=\"questionCaret6\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">{{ 'backgroundcolor'|trans }} {% if attributes.backgroundColors is not empty %}<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'requied'|trans }}\">*</b> {% endif %}</span>
                </button>
            </h2>
        </div>
        <div id=\"backgroundColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-backgroundColor list-backgroundColor-list\" >
            <div class=\"card-body backgroundColors\" data-prototype='<div><label for=\"question_attribute_backgroundColor___name___id\" class=\"required\">{{'attribute.background_color'|trans}}</label><input type=\"color\" value=\"#FFFFFF\" id=\"question_attribute_backgroundColor___name___id\" name=\"question_attribute_backgroundColor[__name__][id]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.background_color_placeholder'|trans}}\" class=\"form-control btn-no-right-radius uniqueBgC\" maxlength=\"255\" /></div>
            <span class=\"invalid-feedback uniqueBgC\"> {{ 'attribute.validation.unique'|trans }}</span>'>

                <span class=\"pre font-italic pb-3 form-text text-muted\">{{ attributeText.backgroundColor.description }}</span>

                {% set numb = 1 %}
                {% for key, bc in attributes.backgroundColors %}
                    <div class=\"form-group row\">
                        <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">{{ 'attribute.background_color'|trans ~ ' ' ~ numb ~ ' ' ~ '*' }}</label>
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex\">
                                {% if (app.request.get('_route')) == 'question_edit' %}
                                    <input type=\"color\" value=\"{{ bc.value }}\" id=\"question_attribute_backgroundColor_{{ key }}_id\" name=\"question_attribute_backgroundColor[{{ key }}][{{ bc.id }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.background_color_placeholder'|trans}}\" class=\"form-control btn-no-right-radius uniqueBgC\" maxlength=\"255\" />
                                {% else  %}
                                    <input type=\"color\" value=\"{{ bc | first }}\" id=\"question_attribute_backgroundColor_{{ key }}_id\" name=\"question_attribute_backgroundColor[{{ key }}][{{ bc| keys |first }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.background_color_placeholder'|trans}}\" class=\"form-control btn-no-right-radius uniqueBgC\" maxlength=\"255\" />
                                {% endif %}
                            </div>
                            <span class=\"invalid-feedback uniqueBgC\"> {{ 'attribute.validation.unique'|trans }}</span>
                        </div>
                        {% set numb = numb +1 %}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    {# Klausimo rodymo trukmės savybių informacija #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-displayTime\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#displayTime\" aria-expanded=\"false\" aria-controls=\"displayTime\">
                    <i id=\"questionCaretDT\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">{{ 'displaytime'|trans }} {% if attributes.displayTimes is not empty %}<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'requied'|trans }}\">*</b> {% endif %}</span>
                </button>
            </h2>
        </div>
        <div id=\"displayTime\" class=\"tab-pane collapse\" aria-labelledby=\"list-displayTime list-displayTime-list\" >
            <div class=\"card-body displayTimes\" data-prototype='<label for=\"question_attribute_displayTime___name___id\" class=\"required\">{{'attribute.display_time'|trans}}</label>
                    <block>
                     <input type=\"number\" id=\"question_attribute_displayTime___name___id\" name=\"question_attribute_displayTime[__name__][id]\" form=\"question_form\" required=\"required\" class=\"text-center form-control t\" placeholder=\"{{ 'attribute.display_time_placeholder_time'|trans }}\" min=\"0\" max=\"9999\" maxlength=\"99999\" />
                    <input type=\"number\" id=\"question_attribute_displayTime___name___type\" name=\"question_attribute_displayTime[__name__][type]\" form=\"question_form\" required=\"required\"  class=\"text-center form-control bool\" placeholder=\"{{ 'attribute.display_time_placeholder_type'|trans }}\"  min=\"0\" max=\"1\" maxlength=\"1\" />
                    <input type=\"number\" id=\"question_attribute_displayTime___name___vis\" name=\"question_attribute_displayTime[__name__][vis]\" form=\"question_form\" required=\"required\" class=\"text-center form-control bool\" placeholder=\"{{ 'attribute.display_time_placeholder_skip'|trans }}\"  min=\"0\" max=\"1\" maxlength=\"1\" />
                    </block>'>

                <span class=\"pre font-italic pb-3 form-text text-muted\">{{ attributeText.displayTime.description }}</span>

                {% set numb = 1 %}
                {% for key, bc in attributes.displayTimes %}

                    {% set displayTime = bc.value|split(':') %}
                    <div class=\"form-group row\">
                        <label class=\"col-sm-12 col-form-label\">{{ 'attribute.display_time'|trans ~ ' ' ~ numb ~ ' ' ~ '*' }}</label>
                        <div class=\"col-sm-12\">
                            <div class=\"d-flex input-group\">
                                {% if (app.request.get('_route')) == 'question_edit' %}
                                    <input type=\"number\" value=\"{{ displayTime[0] }}\" id=\"question_attribute_displayTime_{{ key }}_id\" name=\"question_attribute_displayTime[{{ key }}][{{ bc.id }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_time'|trans }}\" class=\"text-center form-control \" min=\"0\" max=\"9999\" maxlength=\"99999\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 99999) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"{{ displayTime[1] }}\" id=\"question_attribute_displayTime_{{ key }}_type\" name=\"question_attribute_displayTime[{{ key }}][type]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_type'|trans }}\" class=\"text-center form-control\"  min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 border-right-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"{{ displayTime[2] }}\" id=\"question_attribute_displayTime_{{ key }}_vis\" name=\"question_attribute_displayTime[{{ key }}][vis]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_skip'|trans }}\" class=\"text-center form-control\" min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\" />
                                {% else  %}
                                    <input type=\"number\" value=\"{{ bc | first }}\" id=\"question_attribute_displayTime_{{ key }}_id\" name=\"question_attribute_displayTime[{{ key }}][{{ bc| keys |first }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_time'|trans }}\" class=\"text-center form-control \" min=\"0\" max=\"9999\" maxlength=\"99999\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 99999) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"{{ bc.type }}\" id=\"question_attribute_displayTime_{{ key }}_type\" name=\"question_attribute_displayTime[{{ key }}][type]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_type'|trans }}\" class=\"text-center form-control\"  min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\"/>
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text border-left-0 border-right-0 font-weight-bold\"> : </span>
                                    </div>
                                    <input type=\"number\" value=\"{{ bc.vis }}\" id=\"question_attribute_displayTime_{{ key }}_vis\" name=\"question_attribute_displayTime[{{ key }}][vis]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_skip'|trans }}\" class=\"text-center form-control\" min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/0);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\" />
                                {% endif %}

                            </div>
                        </div>
                        {% set numb = numb +1 %}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    {# Klausimo nuotraukos savybių informacija #}
    <div class=\"card bg-light\">
        <div class=\"card-header p-0\" id=\"list-picture\">
            <h2 class=\"mb-0\">
                <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#picture\" aria-expanded=\"false\" aria-controls=\"picture\">
                    <i id=\"questionCaret7\" class=\"fa fa-caret-down transition rotation\" ></i>
                    <span class=\"pl-2\">{{ 'picture'|trans }} {% if attributes.pictures is not empty %}<b class=\"px-2\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'requied'|trans }}\">*</b> {% endif %}</span>
                </button>
            </h2>
        </div>
        <div id=\"picture\" class=\"tab-pane collapse\" aria-labelledby=\"list-picture list-picture-list\" >
            <div class=\"card-body pictures\" data-prototype='<input type=\"file\" required id=\"question_attribute_picture___name___id\" name=\"question_attribute_picture[__name__][id]\" form=\"question_form\" class=\"uniquePicture custom-file-input\" accept=\".png, .jpg, .jpeg\" />
            <label for=\"question_attribute_picture___name___id\" class=\"custom-file-label\"> {{ 'attribute.file_choose'|trans }} </label>
            <span class=\"invalid-feedback uniquePicture\"> {{ 'attribute.validation.required'|trans }}</span>'>

                <span id=\"pictureIsValid\" class=\"display-hidden\"></span>
                <span class=\"pre font-italic form-text text-muted mb-3\">{{ attributeText.picture.description }}</span>

                {% for key, pic in attributes.pictures %}
                <div class=\"mb-4\">
                    <div class=\"input-group \">
                        <div class=\"custom-file\">
                            <input type=\"text\" name=\"question_attribute_picture[{{ key }}]\" class=\"display-hidden\" form=\"question_form\" value=\"{{ pic.id }}\" />
                            <input type=\"file\" id=\"question_attribute_picture_{{ key }}_id\" name=\"question_attribute_picture[{{ key }}][{{ pic.id }}]\" form=\"question_form\" class=\"uniquePicture custom-file-input\" accept=\".png, .jpg, .jpeg\" />
                            <label for=\"question_attribute_picture_{{ key }}_id\" class=\"custom-file-label\"> {{ pic.value }} </label>
                        </div>
                        <div class=\"input-group-append\">
                        </div>
                    </div>
                    <span class=\"invalid-feedback uniquePicture\"> {{ 'attribute.validation.required'|trans }}</span>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>

    {# Klausimo sukūrimas/atnaujinimas #}
    <div class=\"card border-light\">
        <div class=\"card-header p-0\" id=\"list-save\">
            <h2 class=\"mb-0\">
                {% if (app.request.get('_route')) == 'question_edit' %}
                <button class=\"btn btn-block btn-primary questionEditSave btn-save btn-no-top-radius\" data-link=\"{{ path('question_edit', {'id': question.id })}}\">{{ button_label|default('Save')|trans }}</button>
                {% else %}
                <button class=\"btn btn-block btn-primary questionSave btn-save btn-no-top-radius\" data-link=\"{{ path('question_new_save')}}\" >{{ button_label|default('Save')|trans }}</button>
                {% endif %}
            </h2>
        </div>
    </div>
</div>

{{ form_end(form) }}






", "question/_form.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\_form.html.twig");
    }
}

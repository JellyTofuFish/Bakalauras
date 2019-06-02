<?php

/* question/show.html.twig */
class __TwigTemplate_fe10d2bf484db45278d9b2e5ad365a046910ec497927bb615940cc3dfc496bbd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "question/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.show"), "html", null, true);
        echo " | ETS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_admin_right_nav($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_right_nav"));

        // line 6
        echo "
    <ul class=\"section-nav\">
        <li class=\"toc-entry\">
            <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("side_nav.navigation"), "html", null, true);
        echo ":</p>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-general\" data-target=\"#home\" data-target-animation=\"#questionCaret1\" aria-controls=\"home\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-groups\" data-target=\"#groups\" data-target-animation=\"#questionCaret2\" aria-controls=\"groups\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 18, $this->source); })()), "answeroptions", []))) {
            // line 19
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-answers\" data-target=\"#answers\" data-target-animation=\"#questionCaret3\" aria-controls=\"answers\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 21
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-answers\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
            echo "</a>
            ";
        }
        // line 23
        echo "        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-time\" data-target=\"#time\" data-target-animation=\"#questionCaret4\" aria-controls=\"time\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"toc-entry\">
            ";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 28, $this->source); })()), "buttonColors", []))) {
            // line 29
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-buttonColor\" data-target=\"#buttonColor\" data-target-animation=\"#questionCaret5\" aria-controls=\"buttonColor\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("buttoncolor"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 31
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-buttonColor\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("buttoncolor"), "html", null, true);
            echo "</a>
            ";
        }
        // line 33
        echo "        </li>
        <li class=\"toc-entry\">
            ";
        // line 35
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 35, $this->source); })()), "backgroundColors", []))) {
            // line 36
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-backgroundColor\" data-target=\"#backgroundColor\" data-target-animation=\"#questionCaret6\" aria-controls=\"backgroundColor\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backgroundcolor"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 38
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-backgroundColor\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backgroundcolor"), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </li>
        <li class=\"toc-entry\">
            ";
        // line 42
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 42, $this->source); })()), "displayTimes", []))) {
            // line 43
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-displayTime\" data-target=\"#displayTime\" data-target-animation=\"#questionCaretDT\" aria-controls=\"displayTime\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("displaytime"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 45
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-displayTime\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("displaytime"), "html", null, true);
            echo "</a>
            ";
        }
        // line 47
        echo "        </li>
        <li class=\"toc-entry\">
            ";
        // line 49
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 49, $this->source); })()), "pictures", []))) {
            // line 50
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-picture\" data-target=\"#picture\" data-target-animation=\"#questionCaret7\" aria-controls=\"picture\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("picture"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 52
            echo "                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-picture\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("picture"), "html", null, true);
            echo "</a>
            ";
        }
        // line 54
        echo "        </li>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_admin_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_main"));

        // line 59
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.title.show"), "html", null, true);
        echo "</h1>
    ";
        // line 60
        $context["blank"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blank");
        // line 61
        echo "
    <div class=\"accordion\">

        ";
        // line 65
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-general\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#home\" aria-expanded=\"true\" aria-controls=\"home\">
                        <i id=\"questionCaret1\" class=\"fa fa-caret-down transition\" ></i>
                        <span class=\"pl-2\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general"), "html", null, true);
        echo "</span>
                    </button>
                </h2>
            </div>
            <div id=\"home\" class=\"collapse show\" aria-labelledby=\"list-general list-general-list\">
                <div class=\"card-body\">
                    <fieldset disabled>
                        <div class=\"form-group row\">
                            <label for=\"inputquestion\" class=\"col-sm-12 col-form-label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.question_name_label"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-12\">
                                <input type=\"text\" class=\"form-control\" id=\"inputquestion\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 80, $this->source); })()), "questionname", []), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputquestion\" class=\"col-sm-12 col-form-label\">";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.question_wording_label"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-12\">
                                <textarea class=\"form-control\" id=\"inputquestion\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 86, $this->source); })()), "questionwording", []), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.description_label"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-12\">
                                <textarea class=\"form-control\" id=\"inputDescription\">";
        // line 92
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 92, $this->source); })()), "description", [])) ? (twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 92, $this->source); })()), "description", [])) : ((isset($context["blank"]) || array_key_exists("blank", $context) ? $context["blank"] : (function () { throw new Twig_Error_Runtime('Variable "blank" does not exist.', 92, $this->source); })()))), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        ";
        // line 96
        echo "                        <div class=\"form-group row\">
                            ";
        // line 97
        if (((isset($context["file"]) || array_key_exists("file", $context)) &&  !twig_test_empty((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 97, $this->source); })())))) {
            // line 98
            echo "                                ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 98, $this->source); })()), "name", []))) {
                // line 99
                echo "                                    ";
                $context["link"] = ("build/images/" . "Default.jpg");
                // line 100
                echo "                                ";
            } else {
                // line 101
                echo "                                    ";
                $context["link"] = ("build/images/" . twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 101, $this->source); })()), "name", []));
                // line 102
                echo "                                ";
            }
            // line 103
            echo "                                <label class=\"col-sm-12 col-form-label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file"), "html", null, true);
            echo "</label>
                                <div class=\"input-group col-sm-12\">
                                    <div class=\"custom-file\">
                                        ";
            // line 106
            if ((isset($context["file"]) || array_key_exists("file", $context))) {
                // line 107
                echo "                                            <input type=\"text\" name=\"question_file[file]\" class=\"display-hidden\" form=\"question_form\" value=\"1\" />
                                            <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                            <label class=\"custom-file-label\" for=\"customFile\" >";
                // line 109
                if ( !(null === (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 109, $this->source); })()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 109, $this->source); })()), "name", []), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_choose"), "html", null, true);
                    echo " ";
                }
                echo " </label>
                                        ";
            } else {
                // line 111
                echo "                                            <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                            <label class=\"custom-file-label\"  >";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_choose"), "html", null, true);
                echo " </label>
                                        ";
            }
            // line 114
            echo "                                    </div>
                                </div>
                                <span class=\"col-sm-12 invalid-feedback uniqueFile\">";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.file"), "html", null, true);
            echo " </span>
                                <small class=\"col-sm-12 form-text text-muted\">
                                    ";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file_help"), "html", null, true);
            echo "
                                </small>
                                <div class=\"col-sm-12 text-center\">
                                    <img  src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 121, $this->source); })())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 121, $this->source); })()), "html", null, true);
            echo "\">
                                </div>
                            ";
        } else {
            // line 124
            echo "                                <label class=\"col-sm-12 col-form-label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.file"), "html", null, true);
            echo "</label>
                                <div class=\"input-group col-sm-12\">
                                    <div class=\"custom-file\">
                                        <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                        <label class=\"custom-file-label\">";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["blank"]) || array_key_exists("blank", $context) ? $context["blank"] : (function () { throw new Twig_Error_Runtime('Variable "blank" does not exist.', 128, $this->source); })()), "html", null, true);
            echo " </label>
                                    </div>
                                </div>
                            ";
        }
        // line 132
        echo "                        </div>
                        <div class=\"form-group row\">
                            <label for=\"disabledSelect\" class=\"col-sm-12 col-form-label\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.type_label"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-12\">
                                <select id=\"disabledSelect\" class=\"form-control\">
                                    <option>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 137, $this->source); })()), "type", [])), "html", null, true);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-form-label col-sm-12\">";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.required_label"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-12 pl-5 custom-control custom-switch\">
                                <input type=\"checkbox\" id=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 144, $this->source); })()), "id", []), "html", null, true);
        echo "Switch\" class=\"custom-control-input\" disabled ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 144, $this->source); })()), "required", [])) ? ("checked") : (""));
        echo " >
                                <label class=\"custom-control-label\" for=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 145, $this->source); })()), "id", []), "html", null, true);
        echo "Switch\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.required_description"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        ";
        // line 154
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-groups\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#groups\" aria-expanded=\"true\" aria-controls=\"groups\">
                        <i id=\"questionCaret2\" class=\"fa fa-caret-down transition\" ></i>
                        <span class=\"pl-2\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("groups"), "html", null, true);
        echo "</span>
                    </button>
                </h2>
            </div>
            <div id=\"groups\" class=\"collapse show\" aria-labelledby=\"list-groups list-groups-list\" >
                <div class=\"card-body\">
                    <fieldset disabled>
                    <div class=\"form-group row\">
                        <label for=\"fk_group_label\" class=\"col-sm-12 col-form-label\">";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.fk_group_label"), "html", null, true);
        echo "</label>
                        <div class=\"col-sm-12\">
                            <select id=\"fk_group_label\" class=\"form-control\">
                                <option>";
        // line 170
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 170, $this->source); })()), "fkGroup", [])) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 170, $this->source); })()), "fkGroup", []), "name", [])) : ((isset($context["blank"]) || array_key_exists("blank", $context) ? $context["blank"] : (function () { throw new Twig_Error_Runtime('Variable "blank" does not exist.', 170, $this->source); })()))), "html", null, true);
        echo "</option>
                            </select>
                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>

        ";
        // line 180
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-answers\">
                <h2 class=\"mb-0\">
                    ";
        // line 183
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 183, $this->source); })()), "answeroptions", []))) {
            // line 184
            echo "                        <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                            <i id=\"questionCaret3\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
            echo "</span>
                        </button>
                    ";
        } else {
            // line 189
            echo "                        <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                            <i id=\"questionCaret3\" class=\" disabled-menu fa fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("answers"), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 194
        echo "                </h2>
            </div>
            ";
        // line 196
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 196, $this->source); })()), "answeroptions", []))) {
            // line 197
            echo "            <div id=\"answers\" class=\"collapse show\" aria-labelledby=\"list-answers list-answers-list\" >
            ";
        } else {
            // line 199
            echo "            <div id=\"answers\" class=\"collapse\" aria-labelledby=\"list-answers list-answers-list\" >
            ";
        }
        // line 201
        echo "                <div class=\"card-body\">
                    <fieldset disabled>
                        ";
        // line 203
        $context["anwerNumeber"] = 0;
        // line 204
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 204, $this->source); })()), "answeroptions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 205
            echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-12 col-form-label\">";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.answeroptions_label"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((isset($context["anwerNumeber"]) || array_key_exists("anwerNumeber", $context) ? $context["anwerNumeber"] : (function () { throw new Twig_Error_Runtime('Variable "anwerNumeber" does not exist.', 206, $this->source); })()) + 1), "html", null, true);
            echo "</label>
                            <div class=\"col-sm-12\">
                                <input type=\"text\" class=\"form-control\" id=\"question_answeroptions_answer_";
            // line 208
            echo twig_escape_filter($this->env, (isset($context["anwerNumeber"]) || array_key_exists("anwerNumeber", $context) ? $context["anwerNumeber"] : (function () { throw new Twig_Error_Runtime('Variable "anwerNumeber" does not exist.', 208, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", []), "html", null, true);
            echo "\">
                            </div>
                        </div>
                            ";
            // line 211
            $context["anwerNumeber"] = ((isset($context["anwerNumeber"]) || array_key_exists("anwerNumeber", $context) ? $context["anwerNumeber"] : (function () { throw new Twig_Error_Runtime('Variable "anwerNumeber" does not exist.', 211, $this->source); })()) + 1);
            // line 212
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                    </fieldset>
                </div>
            </div>
        </div>

        ";
        // line 219
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-time\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#time\" aria-expanded=\"false\" aria-controls=\"time\">
                        <i id=\"questionCaret4\" class=\"fa fa-caret-down transition\" ></i>
                        <span class=\"pl-2\">";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("time"), "html", null, true);
        echo "</span>
                    </button>
                </h2>
            </div>
            <div id=\"time\" class=\"tab-pane collapse show\" aria-labelledby=\"list-time list-time-list\" >
                <div class=\"card-body\">
                    <fieldset disabled>
                        <div class=\"form-group row mb-2\">
                            <label class=\"col-form-label col-sm-12\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.time_label"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-12 pl-5 custom-control custom-switch\">
                                <input type=\"checkbox\" name=\"question_attribute_time[value]\" form=\"question_form\" id=\"";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 234, $this->source); })()), "id", []), "html", null, true);
        echo "Time\" class=\"custom-control-input\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "time", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 234, $this->source); })()), "time", [])))) {
            echo " checked ";
        }
        echo "/>
                                <label class=\"custom-control-label\" for=\"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 235, $this->source); })()), "id", []), "html", null, true);
        echo "Time\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("question.form.time_description"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        ";
        // line 244
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-buttonColor\">
                <h2 class=\"mb-0\">
                    ";
        // line 247
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 247, $this->source); })()), "buttonColors", []))) {
            // line 248
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#buttonColor\" aria-expanded=\"false\" aria-controls=\"buttonColor\">
                            <i id=\"questionCaret5\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">";
            // line 250
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("buttoncolor"), "html", null, true);
            echo " </span>
                        </button>
                    ";
        } else {
            // line 253
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#buttonColor\" aria-expanded=\"false\" aria-controls=\"buttonColor\">
                            <i id=\"questionCaret5\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("buttoncolor"), "html", null, true);
            echo " </span>
                        </button>
                    ";
        }
        // line 258
        echo "                </h2>
            </div>
            ";
        // line 260
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 260, $this->source); })()), "buttonColors", []))) {
            // line 261
            echo "                <div id=\"buttonColor\" class=\"tab-pane collapse show\" aria-labelledby=\"list-buttonColor list-buttonColor-list\" >
            ";
        } else {
            // line 263
            echo "                <div id=\"buttonColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-buttonColor list-buttonColor-list\" >
            ";
        }
        // line 265
        echo "                <div class=\"card-body\">
                    <fieldset disabled>
                        <span  class=\"pre font-italic form-text text-muted mb-3\">";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 267, $this->source); })()), "buttonColor", []), "description", []), "html", null, true);
        echo "</span>
                        ";
        // line 268
        $context["numb"] = 1;
        // line 269
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 269, $this->source); })()), "buttonColors", []));
        foreach ($context['_seq'] as $context["key"] => $context["bc"]) {
            // line 270
            echo "                            <div class=\"form-group row\">
                                <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">";
            // line 271
            echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.button_color") . " ") . (isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 271, $this->source); })())) . " ") . "*"), "html", null, true);
            echo "</label>
                                <div class=\"col-sm-12\">
                                    <div class=\"d-flex\">
                                        <input type=\"color\" value=\"";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "value", []), "html", null, true);
            echo "\" id=\"question_attribute_buttonColor_";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_id\" name=\"question_attribute_buttonColor[";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "id", []), "html", null, true);
            echo "]\" form=\"question_form\" required=\"required\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.button_color_placeholder"), "html", null, true);
            echo "\" class=\"form-control\" maxlength=\"255\" />
                                    </div>
                                    <span class=\"invalid-feedback uniqueBtnC\"> ";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.unique"), "html", null, true);
            echo "</span>
                                </div>
                                ";
            // line 278
            $context["numb"] = ((isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 278, $this->source); })()) + 1);
            // line 279
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['bc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "                    </fieldset>
                </div>
            </div>
        </div>

        ";
        // line 287
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-backgroundColor\">
                <h2 class=\"mb-0\">
                    ";
        // line 290
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 290, $this->source); })()), "backgroundColors", []))) {
            // line 291
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#backgroundColor\" aria-expanded=\"false\" aria-controls=\"backgroundColor\">
                            <i id=\"questionCaret6\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">";
            // line 293
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backgroundcolor"), "html", null, true);
            echo " </span>
                        </button>
                    ";
        } else {
            // line 296
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#backgroundColor\" aria-expanded=\"false\" aria-controls=\"backgroundColor\">
                            <i id=\"questionCaret6\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">";
            // line 298
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backgroundcolor"), "html", null, true);
            echo " </span>
                        </button>
                    ";
        }
        // line 301
        echo "                </h2>
            </div>
            ";
        // line 303
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 303, $this->source); })()), "backgroundColors", []))) {
            // line 304
            echo "            <div id=\"backgroundColor\" class=\"tab-pane collapse show\" aria-labelledby=\"list-backgroundColor list-backgroundColor-list\" >
            ";
        } else {
            // line 306
            echo "            <div id=\"backgroundColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-backgroundColor list-backgroundColor-list\" >
            ";
        }
        // line 308
        echo "                <div class=\"card-body \">
                    <fieldset disabled>
                        <span  class=\"pre font-italic form-text text-muted mb-3\">";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 310, $this->source); })()), "backgroundColor", []), "description", []), "html", null, true);
        echo "</span>
                        ";
        // line 311
        $context["numb"] = 1;
        // line 312
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 312, $this->source); })()), "backgroundColors", []));
        foreach ($context['_seq'] as $context["key"] => $context["bc"]) {
            // line 313
            echo "                            <div class=\"form-group row\">
                                <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">";
            // line 314
            echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.background_color") . " ") . (isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 314, $this->source); })())) . " ") . "*"), "html", null, true);
            echo "</label>
                                <div class=\"col-sm-12\">
                                    <div class=\"d-flex\">
                                        <input type=\"color\" value=\"";
            // line 317
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
                                    </div>
                                    <span class=\"invalid-feedback uniqueBgC\"> ";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.unique"), "html", null, true);
            echo "</span>
                                </div>
                                ";
            // line 321
            $context["numb"] = ((isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 321, $this->source); })()) + 1);
            // line 322
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['bc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "                    </fieldset>
                </div>
            </div>
        </div>

        ";
        // line 330
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-displayTime\">
                <h2 class=\"mb-0\">
                    ";
        // line 333
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 333, $this->source); })()), "displayTimes", []))) {
            // line 334
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#displayTime\" aria-expanded=\"false\" aria-controls=\"displayTime\">
                            <i id=\"questionCaretDT\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("displaytime"), "html", null, true);
            echo " </span>
                        </button>
                    ";
        } else {
            // line 339
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark  p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#displayTime\" aria-expanded=\"false\" aria-controls=\"displayTime\">
                            <i id=\"questionCaretDT\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">";
            // line 341
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("displaytime"), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 344
        echo "                </h2>
            </div>
            ";
        // line 346
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 346, $this->source); })()), "displayTimes", []))) {
            // line 347
            echo "            <div id=\"displayTime\" class=\"tab-pane collapse show\" aria-labelledby=\"list-displayTime list-displayTime-list\" >
            ";
        } else {
            // line 349
            echo "            <div id=\"displayTime\" class=\"tab-pane collapse\" aria-labelledby=\"list-displayTime list-displayTime-list\" >
            ";
        }
        // line 351
        echo "                <div class=\"card-body\">
                    <fieldset disabled>
                        <span class=\"pre font-italic form-text text-muted mb-3\">";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 353, $this->source); })()), "displayTime", []), "description", []), "html", null, true);
        echo "</span>

                        ";
        // line 355
        $context["numb"] = 1;
        // line 356
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 356, $this->source); })()), "displayTimes", []));
        foreach ($context['_seq'] as $context["key"] => $context["bc"]) {
            // line 357
            echo "
                            ";
            // line 358
            $context["displayTime"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bc"], "value", []), ":");
            // line 359
            echo "                            <div class=\"form-group row\">
                                <label class=\"col-sm-12 col-form-label\">";
            // line 360
            echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time") . " ") . (isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 360, $this->source); })())) . " ") . "*"), "html", null, true);
            echo "</label>
                                <div class=\"col-sm-12\">
                                    <div class=\"d-flex input-group\">
                                        <input type=\"number\" value=\"";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["displayTime"]) || array_key_exists("displayTime", $context) ? $context["displayTime"] : (function () { throw new Twig_Error_Runtime('Variable "displayTime" does not exist.', 363, $this->source); })()), 0, [], "array"), "html", null, true);
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
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["displayTime"]) || array_key_exists("displayTime", $context) ? $context["displayTime"] : (function () { throw new Twig_Error_Runtime('Variable "displayTime" does not exist.', 367, $this->source); })()), 1, [], "array"), "html", null, true);
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
            // line 371
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["displayTime"]) || array_key_exists("displayTime", $context) ? $context["displayTime"] : (function () { throw new Twig_Error_Runtime('Variable "displayTime" does not exist.', 371, $this->source); })()), 2, [], "array"), "html", null, true);
            echo "\" id=\"question_attribute_displayTime_";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_vis\" name=\"question_attribute_displayTime[";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][vis]\" form=\"question_form\" required=\"required\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.display_time_placeholder_skip"), "html", null, true);
            echo "\" class=\"text-center form-control\" min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\" />
                                    </div>
                                </div>
                                ";
            // line 374
            $context["numb"] = ((isset($context["numb"]) || array_key_exists("numb", $context) ? $context["numb"] : (function () { throw new Twig_Error_Runtime('Variable "numb" does not exist.', 374, $this->source); })()) + 1);
            // line 375
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['bc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                    </fieldset>
                </div>
            </div>
        </div>

        ";
        // line 383
        echo "        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-picture\">
                <h2 class=\"mb-0\">
                    ";
        // line 386
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 386, $this->source); })()), "pictures", []))) {
            // line 387
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#picture\" aria-expanded=\"false\" aria-controls=\"picture\">
                            <i id=\"questionCaret7\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">";
            // line 389
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("picture"), "html", null, true);
            echo " </span>
                        </button>
                    ";
        } else {
            // line 392
            echo "                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#picture\" aria-expanded=\"false\" aria-controls=\"picture\">
                            <i id=\"questionCaret7\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">";
            // line 394
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("picture"), "html", null, true);
            echo " </span>
                        </button>
                    ";
        }
        // line 397
        echo "                </h2>
            </div>
            ";
        // line 399
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 399, $this->source); })()), "pictures", []))) {
            // line 400
            echo "            <div id=\"picture\" class=\"tab-pane collapse show\" aria-labelledby=\"list-picture list-picture-list\" >
            ";
        } else {
            // line 402
            echo "            <div id=\"picture\" class=\"tab-pane collapse\" aria-labelledby=\"list-picture list-picture-list\" >
            ";
        }
        // line 404
        echo "                <div class=\"card-body \">
                    <fieldset disabled>
                        <span class=\"pre font-italic form-text text-muted mb-3\">";
        // line 406
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attributeText"]) || array_key_exists("attributeText", $context) ? $context["attributeText"] : (function () { throw new Twig_Error_Runtime('Variable "attributeText" does not exist.', 406, $this->source); })()), "picture", []), "description", []), "html", null, true);
        echo "</span>
                        ";
        // line 407
        if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "pictures", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 407, $this->source); })()), "pictures", [])))) {
            // line 408
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 408, $this->source); })()), "pictures", []));
            foreach ($context['_seq'] as $context["key"] => $context["pic"]) {
                // line 409
                echo "                            ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pic"], "value", []))) {
                    // line 410
                    echo "                                ";
                    $context["link"] = ("build/images/" . "Default.jpg");
                    // line 411
                    echo "                            ";
                } else {
                    // line 412
                    echo "                                ";
                    $context["link"] = ("build/images/" . twig_get_attribute($this->env, $this->source, $context["pic"], "value", []));
                    // line 413
                    echo "                            ";
                }
                // line 414
                echo "                                <div class=\"mb-4\">
                                    <div class=\"input-group \">
                                        <div class=\"custom-file\">
                                            <input type=\"file\" id=\"question_attribute_picture_";
                // line 417
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" name=\"question_attribute_picture[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "id", []), "html", null, true);
                echo "]\" form=\"question_form\" class=\"uniquePicture custom-file-input\" accept=\".png, .jpg, .jpeg\" />
                                            <label for=\"question_attribute_picture_";
                // line 418
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "_id\" class=\"custom-file-label\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pic"], "value", []), "html", null, true);
                echo " </label>
                                        </div>
                                        <div class=\"input-group-append\">
                                        </div>
                                    </div>
                                    <span class=\"invalid-feedback uniquePicture\"> ";
                // line 423
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attribute.validation.required"), "html", null, true);
                echo "</span>
                                </div>
                                <div class=\"text-center\">
                                    <img  src=\"";
                // line 426
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 426, $this->source); })())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 426, $this->source); })()), "html", null, true);
                echo "\">
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 429
            echo "                        ";
        }
        // line 430
        echo "                    </fieldset>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 430,  990 => 429,  979 => 426,  973 => 423,  963 => 418,  955 => 417,  950 => 414,  947 => 413,  944 => 412,  941 => 411,  938 => 410,  935 => 409,  930 => 408,  928 => 407,  924 => 406,  920 => 404,  916 => 402,  912 => 400,  910 => 399,  906 => 397,  900 => 394,  896 => 392,  890 => 389,  886 => 387,  884 => 386,  879 => 383,  872 => 377,  865 => 375,  863 => 374,  851 => 371,  838 => 367,  823 => 363,  817 => 360,  814 => 359,  812 => 358,  809 => 357,  804 => 356,  802 => 355,  797 => 353,  793 => 351,  789 => 349,  785 => 347,  783 => 346,  779 => 344,  773 => 341,  769 => 339,  763 => 336,  759 => 334,  757 => 333,  752 => 330,  745 => 324,  738 => 322,  736 => 321,  731 => 319,  718 => 317,  712 => 314,  709 => 313,  704 => 312,  702 => 311,  698 => 310,  694 => 308,  690 => 306,  686 => 304,  684 => 303,  680 => 301,  674 => 298,  670 => 296,  664 => 293,  660 => 291,  658 => 290,  653 => 287,  646 => 281,  639 => 279,  637 => 278,  632 => 276,  619 => 274,  613 => 271,  610 => 270,  605 => 269,  603 => 268,  599 => 267,  595 => 265,  591 => 263,  587 => 261,  585 => 260,  581 => 258,  575 => 255,  571 => 253,  565 => 250,  561 => 248,  559 => 247,  554 => 244,  541 => 235,  533 => 234,  528 => 232,  517 => 224,  510 => 219,  503 => 213,  497 => 212,  495 => 211,  487 => 208,  480 => 206,  477 => 205,  472 => 204,  470 => 203,  466 => 201,  462 => 199,  458 => 197,  456 => 196,  452 => 194,  446 => 191,  442 => 189,  436 => 186,  432 => 184,  430 => 183,  425 => 180,  413 => 170,  407 => 167,  396 => 159,  389 => 154,  376 => 145,  370 => 144,  365 => 142,  357 => 137,  351 => 134,  347 => 132,  340 => 128,  332 => 124,  324 => 121,  318 => 118,  313 => 116,  309 => 114,  304 => 112,  301 => 111,  288 => 109,  284 => 107,  282 => 106,  275 => 103,  272 => 102,  269 => 101,  266 => 100,  263 => 99,  260 => 98,  258 => 97,  255 => 96,  249 => 92,  244 => 90,  237 => 86,  232 => 84,  225 => 80,  220 => 78,  209 => 70,  202 => 65,  197 => 61,  195 => 60,  190 => 59,  184 => 58,  175 => 54,  169 => 52,  163 => 50,  161 => 49,  157 => 47,  151 => 45,  145 => 43,  143 => 42,  139 => 40,  133 => 38,  127 => 36,  125 => 35,  121 => 33,  115 => 31,  109 => 29,  107 => 28,  101 => 25,  97 => 23,  91 => 21,  85 => 19,  83 => 18,  77 => 15,  71 => 12,  65 => 9,  60 => 6,  54 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block title %} {{ 'question.title.show'|trans }} | ETS{% endblock %}

{% block admin_right_nav %}

    <ul class=\"section-nav\">
        <li class=\"toc-entry\">
            <p>{{ 'side_nav.navigation'|trans }}:</p>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-general\" data-target=\"#home\" data-target-animation=\"#questionCaret1\" aria-controls=\"home\">{{ 'general'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-groups\" data-target=\"#groups\" data-target-animation=\"#questionCaret2\" aria-controls=\"groups\">{{ 'groups'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            {% if question.answeroptions is not empty %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-answers\" data-target=\"#answers\" data-target-animation=\"#questionCaret3\" aria-controls=\"answers\">{{ 'answers'|trans }}</a>
            {% else %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-answers\">{{ 'answers'|trans }}</a>
            {% endif %}
        </li>
        <li class=\"toc-entry\">
            <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-time\" data-target=\"#time\" data-target-animation=\"#questionCaret4\" aria-controls=\"time\">{{ 'time'|trans }}</a>
        </li>
        <li class=\"toc-entry\">
            {% if attributes.buttonColors is not empty %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-buttonColor\" data-target=\"#buttonColor\" data-target-animation=\"#questionCaret5\" aria-controls=\"buttonColor\">{{ 'buttoncolor'|trans }}</a>
            {% else %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-buttonColor\">{{ 'buttoncolor'|trans }}</a>
            {% endif %}
        </li>
        <li class=\"toc-entry\">
            {% if attributes.backgroundColors is not empty %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-backgroundColor\" data-target=\"#backgroundColor\" data-target-animation=\"#questionCaret6\" aria-controls=\"backgroundColor\">{{ 'backgroundcolor'|trans }}</a>
            {% else %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-backgroundColor\">{{ 'backgroundcolor'|trans }}</a>
            {% endif %}
        </li>
        <li class=\"toc-entry\">
            {% if attributes.displayTimes is not empty %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-displayTime\" data-target=\"#displayTime\" data-target-animation=\"#questionCaretDT\" aria-controls=\"displayTime\">{{ 'displaytime'|trans }}</a>
            {% else %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-displayTime\">{{ 'displaytime'|trans }}</a>
            {% endif %}
        </li>
        <li class=\"toc-entry\">
            {% if attributes.pictures is not empty %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-picture\" data-target=\"#picture\" data-target-animation=\"#questionCaret7\" aria-controls=\"picture\">{{ 'picture'|trans }}</a>
            {% else %}
                <a class=\"btn btn-block btn-link text-left sidebar-collapse\" href=\"#list-picture\">{{ 'picture'|trans }}</a>
            {% endif %}
        </li>

{% endblock %}

{% block admin_main %}
    <h1>{{ 'question.title.show'|trans }}</h1>
    {% set blank = 'blank'|trans %}

    <div class=\"accordion\">

        {# Klausimo informacija. Klausimo formos laukeliai #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-general\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#home\" aria-expanded=\"true\" aria-controls=\"home\">
                        <i id=\"questionCaret1\" class=\"fa fa-caret-down transition\" ></i>
                        <span class=\"pl-2\">{{ 'general'|trans }}</span>
                    </button>
                </h2>
            </div>
            <div id=\"home\" class=\"collapse show\" aria-labelledby=\"list-general list-general-list\">
                <div class=\"card-body\">
                    <fieldset disabled>
                        <div class=\"form-group row\">
                            <label for=\"inputquestion\" class=\"col-sm-12 col-form-label\">{{ 'question.form.question_name_label'|trans }}</label>
                            <div class=\"col-sm-12\">
                                <input type=\"text\" class=\"form-control\" id=\"inputquestion\" value=\"{{ question.questionname }}\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputquestion\" class=\"col-sm-12 col-form-label\">{{ 'question.form.question_wording_label'|trans }}</label>
                            <div class=\"col-sm-12\">
                                <textarea class=\"form-control\" id=\"inputquestion\">{{ question.questionwording }}</textarea>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">{{ 'question.form.description_label'|trans }}</label>
                            <div class=\"col-sm-12\">
                                <textarea class=\"form-control\" id=\"inputDescription\">{{ question.description ? question.description : blank }}</textarea>
                            </div>
                        </div>
                        {# Klausimo failas #}
                        <div class=\"form-group row\">
                            {% if file is defined and file is not empty %}
                                {% if file.name is empty  %}
                                    {% set link = 'build/images/' ~ 'Default.jpg' %}
                                {% else %}
                                    {% set link = 'build/images/' ~ file.name %}
                                {% endif %}
                                <label class=\"col-sm-12 col-form-label\">{{ 'attribute.file'|trans }}</label>
                                <div class=\"input-group col-sm-12\">
                                    <div class=\"custom-file\">
                                        {% if file is defined %}
                                            <input type=\"text\" name=\"question_file[file]\" class=\"display-hidden\" form=\"question_form\" value=\"1\" />
                                            <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                            <label class=\"custom-file-label\" for=\"customFile\" >{% if file is not null %} {{ file.name }} {% else %} {{ 'attribute.file_choose'|trans }} {% endif %} </label>
                                        {% else %}
                                            <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                            <label class=\"custom-file-label\"  >{{ 'attribute.file_choose'|trans }} </label>
                                        {% endif %}
                                    </div>
                                </div>
                                <span class=\"col-sm-12 invalid-feedback uniqueFile\">{{ 'attribute.validation.file'|trans }} </span>
                                <small class=\"col-sm-12 form-text text-muted\">
                                    {{ 'attribute.file_help'|trans }}
                                </small>
                                <div class=\"col-sm-12 text-center\">
                                    <img  src=\"{{ asset(link) }}\" alt=\"{{ link }}\">
                                </div>
                            {% else %}
                                <label class=\"col-sm-12 col-form-label\">{{ 'attribute.file'|trans }}</label>
                                <div class=\"input-group col-sm-12\">
                                    <div class=\"custom-file\">
                                        <input type=\"file\" name=\"file\" class=\"uniqueFile custom-file-input\" id=\"customFile\" accept=\".png, .jpg, .jpeg\" form=\"question_form\"/>
                                        <label class=\"custom-file-label\">{{ blank }} </label>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"disabledSelect\" class=\"col-sm-12 col-form-label\">{{ 'question.form.type_label'|trans }}</label>
                            <div class=\"col-sm-12\">
                                <select id=\"disabledSelect\" class=\"form-control\">
                                    <option>{{ question.type|trans }}</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-form-label col-sm-12\">{{ 'question.form.required_label'|trans }}</label>
                            <div class=\"col-sm-12 pl-5 custom-control custom-switch\">
                                <input type=\"checkbox\" id=\"{{ question.id }}Switch\" class=\"custom-control-input\" disabled {{ question.required ? 'checked' : \"\" }} >
                                <label class=\"custom-control-label\" for=\"{{ question.id }}Switch\">{{ 'question.form.required_description'|trans }}</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        {# Grupių informacija. Grupės forma #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-groups\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#groups\" aria-expanded=\"true\" aria-controls=\"groups\">
                        <i id=\"questionCaret2\" class=\"fa fa-caret-down transition\" ></i>
                        <span class=\"pl-2\">{{ 'groups'|trans }}</span>
                    </button>
                </h2>
            </div>
            <div id=\"groups\" class=\"collapse show\" aria-labelledby=\"list-groups list-groups-list\" >
                <div class=\"card-body\">
                    <fieldset disabled>
                    <div class=\"form-group row\">
                        <label for=\"fk_group_label\" class=\"col-sm-12 col-form-label\">{{ 'question.form.fk_group_label'|trans }}</label>
                        <div class=\"col-sm-12\">
                            <select id=\"fk_group_label\" class=\"form-control\">
                                <option>{{  question.fkGroup ? question.fkGroup.name : blank }}</option>
                            </select>
                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>

        {# Klausimo atsakymų informacija. #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-answers\">
                <h2 class=\"mb-0\">
                    {% if question.answeroptions is not empty %}
                        <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                            <i id=\"questionCaret3\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">{{ 'answers'|trans }}</span>
                        </button>
                    {% else %}
                        <button class=\"btn btn-link btn-block text-left text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#answers\" aria-expanded=\"false\" aria-controls=\"answers\">
                            <i id=\"questionCaret3\" class=\" disabled-menu fa fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">{{ 'answers'|trans }}</span>
                        </button>
                    {% endif %}
                </h2>
            </div>
            {% if question.answeroptions is not empty %}
            <div id=\"answers\" class=\"collapse show\" aria-labelledby=\"list-answers list-answers-list\" >
            {% else %}
            <div id=\"answers\" class=\"collapse\" aria-labelledby=\"list-answers list-answers-list\" >
            {% endif %}
                <div class=\"card-body\">
                    <fieldset disabled>
                        {% set anwerNumeber = 0 %}
                        {% for answer in question.answeroptions %}
                        <div class=\"form-group row\">
                            <label class=\"col-sm-12 col-form-label\">{{ 'question.form.answeroptions_label'|trans }} {{ anwerNumeber +1 }}</label>
                            <div class=\"col-sm-12\">
                                <input type=\"text\" class=\"form-control\" id=\"question_answeroptions_answer_{{ anwerNumeber }}\" value=\"{{ answer.answer }}\">
                            </div>
                        </div>
                            {% set anwerNumeber = anwerNumeber +1 %}
                        {% endfor %}
                    </fieldset>
                </div>
            </div>
        </div>

        {# Klausimo laiko savybių informacija #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-time\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#time\" aria-expanded=\"false\" aria-controls=\"time\">
                        <i id=\"questionCaret4\" class=\"fa fa-caret-down transition\" ></i>
                        <span class=\"pl-2\">{{ 'time'|trans }}</span>
                    </button>
                </h2>
            </div>
            <div id=\"time\" class=\"tab-pane collapse show\" aria-labelledby=\"list-time list-time-list\" >
                <div class=\"card-body\">
                    <fieldset disabled>
                        <div class=\"form-group row mb-2\">
                            <label class=\"col-form-label col-sm-12\">{{ 'question.form.time_label'|trans }}</label>
                            <div class=\"col-sm-12 pl-5 custom-control custom-switch\">
                                <input type=\"checkbox\" name=\"question_attribute_time[value]\" form=\"question_form\" id=\"{{ question.id }}Time\" class=\"custom-control-input\" {% if attributes.time is defined and attributes.time is not empty %} checked {% endif %}/>
                                <label class=\"custom-control-label\" for=\"{{ question.id }}Time\">{{ 'question.form.time_description'|trans }}</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        {# Klausimo mygtuko salvos savybių informacija #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-buttonColor\">
                <h2 class=\"mb-0\">
                    {% if attributes.buttonColors is not empty %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#buttonColor\" aria-expanded=\"false\" aria-controls=\"buttonColor\">
                            <i id=\"questionCaret5\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">{{ 'buttoncolor'|trans }} </span>
                        </button>
                    {% else %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#buttonColor\" aria-expanded=\"false\" aria-controls=\"buttonColor\">
                            <i id=\"questionCaret5\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">{{ 'buttoncolor'|trans }} </span>
                        </button>
                    {% endif %}
                </h2>
            </div>
            {% if attributes.buttonColors is not empty %}
                <div id=\"buttonColor\" class=\"tab-pane collapse show\" aria-labelledby=\"list-buttonColor list-buttonColor-list\" >
            {% else %}
                <div id=\"buttonColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-buttonColor list-buttonColor-list\" >
            {% endif %}
                <div class=\"card-body\">
                    <fieldset disabled>
                        <span  class=\"pre font-italic form-text text-muted mb-3\">{{ attributeText.buttonColor.description }}</span>
                        {% set numb = 1 %}
                        {% for key, bc in attributes.buttonColors %}
                            <div class=\"form-group row\">
                                <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">{{ 'attribute.button_color'|trans ~ ' ' ~ numb ~ ' ' ~ '*' }}</label>
                                <div class=\"col-sm-12\">
                                    <div class=\"d-flex\">
                                        <input type=\"color\" value=\"{{ bc.value }}\" id=\"question_attribute_buttonColor_{{ key }}_id\" name=\"question_attribute_buttonColor[{{ key }}][{{ bc.id }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.button_color_placeholder'|trans}}\" class=\"form-control\" maxlength=\"255\" />
                                    </div>
                                    <span class=\"invalid-feedback uniqueBtnC\"> {{ 'attribute.validation.unique'|trans }}</span>
                                </div>
                                {% set numb = numb +1 %}
                            </div>
                        {% endfor %}
                    </fieldset>
                </div>
            </div>
        </div>

        {# Klausimo fono salvos savybių informacija #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-backgroundColor\">
                <h2 class=\"mb-0\">
                    {% if attributes.backgroundColors is not empty %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#backgroundColor\" aria-expanded=\"false\" aria-controls=\"backgroundColor\">
                            <i id=\"questionCaret6\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">{{ 'backgroundcolor'|trans }} </span>
                        </button>
                    {% else %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#backgroundColor\" aria-expanded=\"false\" aria-controls=\"backgroundColor\">
                            <i id=\"questionCaret6\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">{{ 'backgroundcolor'|trans }} </span>
                        </button>
                    {% endif %}
                </h2>
            </div>
            {% if attributes.backgroundColors is not empty %}
            <div id=\"backgroundColor\" class=\"tab-pane collapse show\" aria-labelledby=\"list-backgroundColor list-backgroundColor-list\" >
            {% else %}
            <div id=\"backgroundColor\" class=\"tab-pane collapse\" aria-labelledby=\"list-backgroundColor list-backgroundColor-list\" >
            {% endif %}
                <div class=\"card-body \">
                    <fieldset disabled>
                        <span  class=\"pre font-italic form-text text-muted mb-3\">{{ attributeText.backgroundColor.description }}</span>
                        {% set numb = 1 %}
                        {% for key, bc in attributes.backgroundColors %}
                            <div class=\"form-group row\">
                                <label for=\"inputDescription\" class=\"col-sm-12 col-form-label\">{{ 'attribute.background_color'|trans ~ ' ' ~ numb ~ ' ' ~ '*' }}</label>
                                <div class=\"col-sm-12\">
                                    <div class=\"d-flex\">
                                        <input type=\"color\" value=\"{{ bc.value }}\" id=\"question_attribute_backgroundColor_{{ key }}_id\" name=\"question_attribute_backgroundColor[{{ key }}][{{ bc.id }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{'attribute.background_color_placeholder'|trans}}\" class=\"form-control btn-no-right-radius uniqueBgC\" maxlength=\"255\" />
                                    </div>
                                    <span class=\"invalid-feedback uniqueBgC\"> {{ 'attribute.validation.unique'|trans }}</span>
                                </div>
                                {% set numb = numb +1 %}
                            </div>
                        {% endfor %}
                    </fieldset>
                </div>
            </div>
        </div>

        {# Klausimo rodymo trukmės savybių informacija #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-displayTime\">
                <h2 class=\"mb-0\">
                    {% if attributes.displayTimes is not empty %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#displayTime\" aria-expanded=\"false\" aria-controls=\"displayTime\">
                            <i id=\"questionCaretDT\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">{{ 'displaytime'|trans }} </span>
                        </button>
                    {% else %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark  p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#displayTime\" aria-expanded=\"false\" aria-controls=\"displayTime\">
                            <i id=\"questionCaretDT\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">{{ 'displaytime'|trans }}</span>
                        </button>
                    {% endif %}
                </h2>
            </div>
            {% if attributes.displayTimes is not empty %}
            <div id=\"displayTime\" class=\"tab-pane collapse show\" aria-labelledby=\"list-displayTime list-displayTime-list\" >
            {% else %}
            <div id=\"displayTime\" class=\"tab-pane collapse\" aria-labelledby=\"list-displayTime list-displayTime-list\" >
            {% endif %}
                <div class=\"card-body\">
                    <fieldset disabled>
                        <span class=\"pre font-italic form-text text-muted mb-3\">{{ attributeText.displayTime.description }}</span>

                        {% set numb = 1 %}
                        {% for key, bc in attributes.displayTimes %}

                            {% set displayTime = bc.value|split(':') %}
                            <div class=\"form-group row\">
                                <label class=\"col-sm-12 col-form-label\">{{ 'attribute.display_time'|trans ~ ' ' ~ numb ~ ' ' ~ '*' }}</label>
                                <div class=\"col-sm-12\">
                                    <div class=\"d-flex input-group\">
                                        <input type=\"number\" value=\"{{ displayTime[0] }}\" id=\"question_attribute_displayTime_{{ key }}_id\" name=\"question_attribute_displayTime[{{ key }}][{{ bc.id }}]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_time'|trans }}\" class=\"text-center form-control \" min=\"0\" max=\"9999\" maxlength=\"99999\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 99999) ? (0/0) : this.value;\"/>
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text border-left-0 font-weight-bold\"> : </span>
                                        </div>
                                        <input type=\"number\" value=\"{{ displayTime[1] }}\" id=\"question_attribute_displayTime_{{ key }}_type\" name=\"question_attribute_displayTime[{{ key }}][type]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_type'|trans }}\" class=\"text-center form-control\"  min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\"/>
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text border-left-0 border-right-0 font-weight-bold\"> : </span>
                                        </div>
                                        <input type=\"number\" value=\"{{ displayTime[2] }}\" id=\"question_attribute_displayTime_{{ key }}_vis\" name=\"question_attribute_displayTime[{{ key }}][vis]\" form=\"question_form\" required=\"required\" placeholder=\"{{ 'attribute.display_time_placeholder_skip'|trans }}\" class=\"text-center form-control\" min=\"0\" max=\"1\" maxlength=\"1\" oninput=\"this.value=this.value.slice(0,this.maxLength||0/1);this.value=(this.value < 0 || this.value > 1) ? (0/0) : this.value;\" />
                                    </div>
                                </div>
                                {% set numb = numb +1 %}
                            </div>
                        {% endfor %}
                    </fieldset>
                </div>
            </div>
        </div>

        {# Klausimo nuotraukos savybių informacija #}
        <div class=\"card bg-light\">
            <div class=\"card-header p-0\" id=\"list-picture\">
                <h2 class=\"mb-0\">
                    {% if attributes.pictures is not empty %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark card-collapse p-card\" type=\"button\" data-toggle=\"collapse\" data-target=\"#picture\" aria-expanded=\"false\" aria-controls=\"picture\">
                            <i id=\"questionCaret7\" class=\"fa fa-caret-down transition\" ></i>
                            <span class=\"pl-2\">{{ 'picture'|trans }} </span>
                        </button>
                    {% else %}
                        <button class=\"btn btn-link btn-block text-left collapsed text-decoration-none text-dark p-card\" type=\"button\" data-toggle=\"none\" data-target=\"#picture\" aria-expanded=\"false\" aria-controls=\"picture\">
                            <i id=\"questionCaret7\" class=\"fa disabled-menu fa-caret-down transition rotation\" ></i>
                            <span class=\"disabled-menu pl-2\">{{ 'picture'|trans }} </span>
                        </button>
                    {% endif %}
                </h2>
            </div>
            {% if attributes.pictures is not empty %}
            <div id=\"picture\" class=\"tab-pane collapse show\" aria-labelledby=\"list-picture list-picture-list\" >
            {% else %}
            <div id=\"picture\" class=\"tab-pane collapse\" aria-labelledby=\"list-picture list-picture-list\" >
            {% endif %}
                <div class=\"card-body \">
                    <fieldset disabled>
                        <span class=\"pre font-italic form-text text-muted mb-3\">{{ attributeText.picture.description }}</span>
                        {% if attributes.pictures is defined and attributes.pictures is not empty %}
                            {% for key, pic in attributes.pictures %}
                            {% if pic.value is empty  %}
                                {% set link = 'build/images/' ~ 'Default.jpg' %}
                            {% else %}
                                {% set link = 'build/images/' ~ pic.value %}
                            {% endif %}
                                <div class=\"mb-4\">
                                    <div class=\"input-group \">
                                        <div class=\"custom-file\">
                                            <input type=\"file\" id=\"question_attribute_picture_{{ key }}_id\" name=\"question_attribute_picture[{{ key }}][{{ pic.id }}]\" form=\"question_form\" class=\"uniquePicture custom-file-input\" accept=\".png, .jpg, .jpeg\" />
                                            <label for=\"question_attribute_picture_{{ key }}_id\" class=\"custom-file-label\"> {{ pic.value }} </label>
                                        </div>
                                        <div class=\"input-group-append\">
                                        </div>
                                    </div>
                                    <span class=\"invalid-feedback uniquePicture\"> {{ 'attribute.validation.required'|trans }}</span>
                                </div>
                                <div class=\"text-center\">
                                    <img  src=\"{{ asset(link) }}\" alt=\"{{ link }}\">
                                </div>
                            {% endfor %}
                        {% endif %}
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "question/show.html.twig", "P:\\web\\SitesPHP\\bakalauras\\templates\\question\\show.html.twig");
    }
}

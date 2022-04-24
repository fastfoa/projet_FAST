<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* document/upload.html.twig */
class __TwigTemplate_0956c86cad1cd4edf628939f59d197a0c6112b3eb57f5ea09f67f172ee8335cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'myStylesheets' => [$this, 'block_myStylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/upload.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/upload.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "document/upload.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_myStylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        // line 3
        echo "        <style>
        .myHidden 
        {
                height :1px;
        }
        </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "UPLOAD FICHIER
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "\t<div class=\"container bg-workSpace fit50 pb-2\">
\t\t<div class=\"row bg-bar\">
\t\t\t<h2 class=\"col-12 \">Upload Document</h2>
\t\t</div>
\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"row align-middle\">
\t\t\t<div class=\"input-field col-6 my-auto\">
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), 'widget', ["attr" => ["placeholder" => "Titre"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"input-field col-6 my-auto\">
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 27, $this->source); })()), "fileName", [], "any", false, false, false, 27), 'widget', ["attr" => ["placeholder" => "message"]]);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mx-auto\">
\t\t\t<div class=\"col-12 text-justify\">
\t\t\t\t";
        // line 32
        if ((0 !== twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 32, $this->source); })()), "ROLE_OF"))) {
            // line 33
            echo "                                        <div class=\"row\">
                                                <div class=\"form-check col-8\">
                                                        ";
            // line 35
            echo twig_escape_filter($this->env, ((array_key_exists("nameOF", $context)) ? (_twig_default_filter((isset($context["nameOF"]) || array_key_exists("nameOF", $context) ? $context["nameOF"] : (function () { throw new RuntimeError('Variable "nameOF" does not exist.', 35, $this->source); })()), "pas de OF")) : ("pas de OF")), "html", null, true);
            echo "
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 38, $this->source); })()), "OFormation", [], "any", false, false, false, 38), 'widget');
            echo "

                                                </div>
                                        </div>
                                ";
        }
        // line 43
        echo "\t\t\t\t";
        if (((0 !== twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 43, $this->source); })()), "ROLE_MA")) && (0 !== twig_compare((isset($context["nameMA"]) || array_key_exists("nameMA", $context) ? $context["nameMA"] : (function () { throw new RuntimeError('Variable "nameMA" does not exist.', 43, $this->source); })()), "")))) {
            // line 44
            echo "                                        <div class=\"row\">
\t\t\t\t";
        } else {
            // line 46
            echo "                                        <div class=\"row invisible myHidden\">
                                ";
        }
        // line 48
        echo "                                                <div class=\"form-check col-8\">
                                                        ";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("nameMA", $context)) ? (_twig_default_filter((isset($context["nameMA"]) || array_key_exists("nameMA", $context) ? $context["nameMA"] : (function () { throw new RuntimeError('Variable "nameMA" does not exist.', 49, $this->source); })()), "pas de MA")) : ("pas de MA")), "html", null, true);
        echo "
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 52, $this->source); })()), "MA", [], "any", false, false, false, 52), 'widget');
        echo "
                                                </div>
                                        </div>
\t\t\t\t";
        // line 55
        if (((0 !== twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 55, $this->source); })()), "ROLE_FORMATEUR")) && (0 !== twig_compare((isset($context["nameFormateur"]) || array_key_exists("nameFormateur", $context) ? $context["nameFormateur"] : (function () { throw new RuntimeError('Variable "nameFormateur" does not exist.', 55, $this->source); })()), "")))) {
            // line 56
            echo "                                        <div class=\"row\">
\t\t\t\t";
        } else {
            // line 58
            echo "                                        <div class=\"row invisible myHidden\">
                                ";
        }
        // line 60
        echo "                                                <div class=\"form-check col-8\">
                                                        ";
        // line 61
        echo twig_escape_filter($this->env, ((array_key_exists("nameFormateur", $context)) ? (_twig_default_filter((isset($context["nameFormateur"]) || array_key_exists("nameFormateur", $context) ? $context["nameFormateur"] : (function () { throw new RuntimeError('Variable "nameFormateur" does not exist.', 61, $this->source); })()), "pas de Formateur")) : ("pas de Formateur")), "html", null, true);
        echo "
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 64, $this->source); })()), "formateur", [], "any", false, false, false, 64), 'widget');
        echo "
                                                </div>
                                        </div>
\t\t\t\t";
        // line 67
        if (((0 !== twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 67, $this->source); })()), "ROLE_ENT")) && (0 !== twig_compare((isset($context["nameEntreprise"]) || array_key_exists("nameEntreprise", $context) ? $context["nameEntreprise"] : (function () { throw new RuntimeError('Variable "nameEntreprise" does not exist.', 67, $this->source); })()), "")))) {
            // line 68
            echo "                                        <div class=\"row\">
\t\t\t\t";
        } else {
            // line 70
            echo "                                        <div class=\"row invisible myHidden\">
                                ";
        }
        // line 72
        echo "
                                                <div class=\"form-check col-8\">
                                                        ";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("nameEntreprise", $context)) ? (_twig_default_filter((isset($context["nameEntreprise"]) || array_key_exists("nameEntreprise", $context) ? $context["nameEntreprise"] : (function () { throw new RuntimeError('Variable "nameEntreprise" does not exist.', 74, $this->source); })()), "pas d Entreprise")) : ("pas d Entreprise")), "html", null, true);
        echo "
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 77, $this->source); })()), "entreprise", [], "any", false, false, false, 77), 'widget');
        echo "
                                                </div>
                                        </div>
\t\t\t\t";
        // line 80
        if (((0 !== twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 80, $this->source); })()), "ROLE_APP")) && (0 !== twig_compare((isset($context["nameApprenti"]) || array_key_exists("nameApprenti", $context) ? $context["nameApprenti"] : (function () { throw new RuntimeError('Variable "nameApprenti" does not exist.', 80, $this->source); })()), "")))) {
            // line 81
            echo "                                        <div class=\"row\">
\t\t\t\t";
        } else {
            // line 83
            echo "                                        <div class=\"row invisible myHidden\">
                                ";
        }
        // line 85
        echo "                                                        <div class=\"form-check col-8\">
                                                        ";
        // line 86
        echo twig_escape_filter($this->env, ((array_key_exists("nameApprenti", $context)) ? (_twig_default_filter((isset($context["nameApprenti"]) || array_key_exists("nameApprenti", $context) ? $context["nameApprenti"] : (function () { throw new RuntimeError('Variable "nameApprenti" does not exist.', 86, $this->source); })()), "pas de APP")) : ("pas de APP")), "html", null, true);
        echo "
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 89, $this->source); })()), "apprenti", [], "any", false, false, false, 89), 'widget');
        echo "
                                                </div>
                                        </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mb-2\">
\t\t\t<div class=\"mx-auto col-6\">
\t\t\t\t<a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("downloadlist");
        echo "\">
\t\t\t\t        <div class=\"btn btn-danger\" onclick=\"rtn()\" alt=\"Retour\">Retour</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"mx-auto col-6\">
\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Uploader</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "document/upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 105,  268 => 96,  258 => 89,  252 => 86,  249 => 85,  245 => 83,  241 => 81,  239 => 80,  233 => 77,  227 => 74,  223 => 72,  219 => 70,  215 => 68,  213 => 67,  207 => 64,  201 => 61,  198 => 60,  194 => 58,  190 => 56,  188 => 55,  182 => 52,  176 => 49,  173 => 48,  169 => 46,  165 => 44,  162 => 43,  154 => 38,  148 => 35,  144 => 33,  142 => 32,  134 => 27,  128 => 24,  122 => 21,  116 => 17,  106 => 16,  86 => 12,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block myStylesheets %}
        <style>
        .myHidden 
        {
                height :1px;
        }
        </style>
{% endblock %}


{% block title %}UPLOAD FICHIER
{% endblock %}


{% block body %}
\t<div class=\"container bg-workSpace fit50 pb-2\">
\t\t<div class=\"row bg-bar\">
\t\t\t<h2 class=\"col-12 \">Upload Document</h2>
\t\t</div>
\t\t{{ form_start(myForm) }}
\t\t<div class=\"row align-middle\">
\t\t\t<div class=\"input-field col-6 my-auto\">
\t\t\t\t{{ form_widget(myForm.titre, {'attr': {'placeholder': 'Titre'}}) }}
\t\t\t</div>
\t\t\t<div class=\"input-field col-6 my-auto\">
\t\t\t\t{{ form_widget(myForm.fileName, {'attr': {'placeholder': 'message'}}) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mx-auto\">
\t\t\t<div class=\"col-12 text-justify\">
\t\t\t\t{% if role != 'ROLE_OF' %}
                                        <div class=\"row\">
                                                <div class=\"form-check col-8\">
                                                        {{ nameOF|default('pas de OF') }}
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        {{ form_widget(myForm.OFormation) }}

                                                </div>
                                        </div>
                                {% endif %}
\t\t\t\t{% if role != 'ROLE_MA' and  nameMA != '' %}
                                        <div class=\"row\">
\t\t\t\t{% else %}
                                        <div class=\"row invisible myHidden\">
                                {% endif %}
                                                <div class=\"form-check col-8\">
                                                        {{ nameMA|default('pas de MA') }}
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        {{ form_widget(myForm.MA) }}
                                                </div>
                                        </div>
\t\t\t\t{% if role != 'ROLE_FORMATEUR' and nameFormateur != '' %}
                                        <div class=\"row\">
\t\t\t\t{% else %}
                                        <div class=\"row invisible myHidden\">
                                {% endif %}
                                                <div class=\"form-check col-8\">
                                                        {{ nameFormateur|default('pas de Formateur') }}
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        {{ form_widget(myForm.formateur) }}
                                                </div>
                                        </div>
\t\t\t\t{% if role != 'ROLE_ENT' and nameEntreprise != '' %}
                                        <div class=\"row\">
\t\t\t\t{% else %}
                                        <div class=\"row invisible myHidden\">
                                {% endif %}

                                                <div class=\"form-check col-8\">
                                                        {{ nameEntreprise|default('pas d Entreprise') }}
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        {{ form_widget(myForm.entreprise) }}
                                                </div>
                                        </div>
\t\t\t\t{% if role != 'ROLE_APP' and nameApprenti != '' %}
                                        <div class=\"row\">
\t\t\t\t{% else %}
                                        <div class=\"row invisible myHidden\">
                                {% endif %}
                                                        <div class=\"form-check col-8\">
                                                        {{ nameApprenti|default('pas de APP') }}
                                                </div>
                                                <div class=\"form-check col-2\">
                                                        {{ form_widget(myForm.apprenti) }}
                                                </div>
                                        </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mb-2\">
\t\t\t<div class=\"mx-auto col-6\">
\t\t\t\t<a href=\"{{ path( 'downloadlist') }}\">
\t\t\t\t        <div class=\"btn btn-danger\" onclick=\"rtn()\" alt=\"Retour\">Retour</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"mx-auto col-6\">
\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Uploader</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t{{ form_end(myForm) }}
</div>{% endblock %}
", "document/upload.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\document\\upload.html.twig");
    }
}

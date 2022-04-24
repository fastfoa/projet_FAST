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

/* inscription/addUser.html.twig */
class __TwigTemplate_8311d07c295473201e0f6cc79675b0e249613c7565fdb81c55f3ea2dc79ac7be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/addUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/addUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription/addUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row bg-bar\">
\t\t\t<h3>Inscription
\t\t\t\t";
        // line 7
        if ((0 === twig_compare((isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 7, $this->source); })()), "ROLE_FORMATEUR"))) {
            // line 8
            echo "\t\t\t\t\t\t   Formateur
\t\t\t\t\t\t";
        } elseif ((0 === twig_compare(        // line 9
(isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 9, $this->source); })()), "ROLE_APP"))) {
            // line 10
            echo "\t\t\t\t\t\t\tApprenti
\t\t\t\t\t\t";
        } elseif ((0 === twig_compare(        // line 11
(isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 11, $this->source); })()), "ROLE_MA"))) {
            // line 12
            echo "\t\t\t\t\t\t    Maitre d'apprentissage
\t\t\t\t\t\t";
        }
        // line 13
        echo "</h3>
\t\t</div>
\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-3\">
\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'widget', ["attr" => ["id" => "edit_email"]]);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "save", [], "any", false, false, false, 22), 'widget');
        echo "
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-3\">
\t\t\t\t<p class=\"text-light\">Recherche:</p>
\t\t\t\t<input list=\"app\" type=\"text\" id=\"listAPP\">
\t\t\t\t<form action=\"\" method=\"GET\">
\t\t\t\t\t<datalist id=\"app\">
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["app"]);
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 32
            echo "
\t\t\t\t\t\t\t<option value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "prenom", [], "any", false, false, false, 33), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "role_string", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</option>

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t</datalist>
\t\t\t\t\t<button type=\"submit\" class = \"boutonForm  my-2\"> Ajouter à une session </button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
\t\t";
        // line 43
        if ((0 !== twig_compare((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 43, $this->source); })()), false))) {
            // line 44
            echo "\t\t\t<div class='alert alert-danger' role='alert'>
\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 48
        echo "\t</div>
</div>
<div class=\"row my-2\"></div></div><script>
function ajout_email_input(email) {
document.getElementById('edit_email').innerHTML = email;
console.log(email);
console.log('je suis la ');
}</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription/addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  157 => 45,  154 => 44,  152 => 43,  148 => 42,  140 => 36,  125 => 33,  122 => 32,  118 => 31,  106 => 22,  99 => 18,  93 => 15,  89 => 13,  85 => 12,  83 => 11,  80 => 10,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row bg-bar\">
\t\t\t<h3>Inscription
\t\t\t\t{% if roleName == 'ROLE_FORMATEUR' %}
\t\t\t\t\t\t   Formateur
\t\t\t\t\t\t{% elseif roleName == 'ROLE_APP' %}
\t\t\t\t\t\t\tApprenti
\t\t\t\t\t\t{% elseif roleName == 'ROLE_MA' %}
\t\t\t\t\t\t    Maitre d'apprentissage
\t\t\t\t\t\t{% endif %}</h3>
\t\t</div>
\t\t{{form_start(form)}}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-3\">
\t\t\t\t{{ form_widget(form.email, {'attr': {'id': 'edit_email'}}) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t{{ form_widget(form.save) }}
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-3\">
\t\t\t\t<p class=\"text-light\">Recherche:</p>
\t\t\t\t<input list=\"app\" type=\"text\" id=\"listAPP\">
\t\t\t\t<form action=\"\" method=\"GET\">
\t\t\t\t\t<datalist id=\"app\">
\t\t\t\t\t\t{% for app in app %}

\t\t\t\t\t\t\t<option value=\"{{app.nom}} , {{app.prenom}}, {{app.role_string}}\">{{app.email}}</option>

\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</datalist>
\t\t\t\t\t<button type=\"submit\" class = \"boutonForm  my-2\"> Ajouter à une session </button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t\t{{form_end(form)}}
\t\t{% if erreur != false %}
\t\t\t<div class='alert alert-danger' role='alert'>
\t\t\t\t{{erreur}}
\t\t\t</div>
\t\t{% endif %}
\t</div>
</div>
<div class=\"row my-2\"></div></div><script>
function ajout_email_input(email) {
document.getElementById('edit_email').innerHTML = email;
console.log(email);
console.log('je suis la ');
}</script>{% endblock body %}
", "inscription/addUser.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\inscription\\addUser.html.twig");
    }
}

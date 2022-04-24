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

/* dash/dashOFSession.html.twig */
class __TwigTemplate_9b2a76378d3937e550fe934e02b5d23c79028ee4217efa3dacc31a66de721f02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'myStylesheets' => [$this, 'block_myStylesheets'],
            'myJavascripts' => [$this, 'block_myJavascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashOFSession.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashOFSession.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash/dashOFSession.html.twig", 1);
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
        echo "<style>
.colorTextNoir{
 color: black !important;
}
.clickable-row:hover{
 background-color: #f37262;
}
a{
\ttext-decoration:none ;
}
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_myJavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        // line 17
        echo "<script src=\"https://code.jquery.com/jquery-3.6.0.slim.js\" integrity=\"sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=\" crossorigin=\"anonymous\"></script>
<script>
\tjQuery(document).ready(function(\$) {
    \$(\".clickable-row\").click(function() {
        window.location = \$(this).data(\"href\");
    });
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
\t<div class=\"container-fluid bg-workSpace\">
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t<h3>Session\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t";
        // line 40
        echo "\t\t</div>
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\tDebut : ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 43, $this->source); })()), "debut", [], "any", false, false, false, 43), "d/m/y"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\tFin : ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 46, $this->source); })()), "fin", [], "any", false, false, false, 46), "d/m/y"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t\t";
        // line 49
        $this->loadTemplate("listSession.html.twig", "dash/dashOFSession.html.twig", 49)->display($context);
        // line 50
        echo "\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dash/dashOFSession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 50,  158 => 49,  152 => 46,  146 => 43,  141 => 40,  136 => 32,  130 => 28,  120 => 27,  102 => 17,  92 => 16,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block myStylesheets %}
<style>
.colorTextNoir{
 color: black !important;
}
.clickable-row:hover{
 background-color: #f37262;
}
a{
\ttext-decoration:none ;
}
</style>

{% endblock myStylesheets %}
{% block myJavascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.slim.js\" integrity=\"sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=\" crossorigin=\"anonymous\"></script>
<script>
\tjQuery(document).ready(function(\$) {
    \$(\".clickable-row\").click(function() {
        window.location = \$(this).data(\"href\");
    });
});
</script>
{% endblock myJavascripts %}

{% block body %}

\t<div class=\"container-fluid bg-workSpace\">
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t<h3>Session\t{{session.nom}}</h3>
\t\t\t</div>
\t\t\t{# <div class=\"col-3 txt-normal\">
\t\t\t\t<a class= \"boutonForm\" href=\"{{ path( 'deleteSession',{'session':session.id} ) }}\">Supprimer la session</a>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-3 txt-normal\">
\t\t\t\t<a class= \"boutonForm\" href=\"{{ path( 'deleteSession',{'session':session.id} ) }}\">Archiver la session</a>\t\t
\t\t\t</div>  #}
\t\t</div>
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\tDebut : {{session.debut|date(\"d/m/y\")}}
\t\t\t</div>
\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\tFin : {{session.fin|date(\"d/m/y\")}}
\t\t\t</div>
\t\t</div>
\t\t{% include 'listSession.html.twig' %}
\t</div>
</div>
{% endblock %}", "dash/dashOFSession.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\dash\\dashOFSession.html.twig");
    }
}

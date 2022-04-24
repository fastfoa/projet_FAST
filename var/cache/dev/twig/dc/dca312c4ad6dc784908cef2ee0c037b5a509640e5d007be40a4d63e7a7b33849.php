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

/* profil/profilApp.html.twig */
class __TwigTemplate_f467e62500f1208fab87ac9d0559d74ea8e11d8720760d4bc34346cf8acb3bdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profilApp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profilApp.html.twig"));

        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-5  \">
\t\t<h5>
\t\t\tTelephone :
\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "telephone", [], "any", false, false, false, 5), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "adresse", [], "any", false, false, false, 8), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\tDate de naissance :
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "dateNaissance", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\tGitHub :
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "github", [], "any", false, false, false, 16), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\tTravailleur Handicape :
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "TravailleurHandicape", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t</h5>
     

\t</div>
\t<div class=\"col-2\"></div>
\t<div class=\"col-5 bg-info \">
\t\t<h5>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle\" viewbox=\"0 0 16 16\">
\t\t\t\t<path d=\"M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\"/>
\t\t\t\t<path d=\"M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z\"/>
\t\t\t</svg>
\t\t\tPersonne a prevenir 1 :
\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal1", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal1", [], "any", false, false, false, 33), "représentant légal 2")) : ("représentant légal 2")), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "telUrgence1", [], "any", false, false, false, 36), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle\" viewbox=\"0 0 16 16\">
\t\t\t\t<path d=\"M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\"/>
\t\t\t\t<path d=\"M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z\"/>
\t\t\t</svg>
\t\t\tPersonne a prevenir 2 :
\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal2", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal2", [], "any", false, false, false, 44), "représentant légal 2")) : ("représentant légal 2")), "html", null, true);
        echo "
\t\t</h5>

\t\t<h5>
\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "telUrgence2", [], "any", false, false, false, 48), "html", null, true);
        echo "
\t\t</h5>
\t</div>
</div>
<hr class=\"text-light\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profil/profilApp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 48,  109 => 44,  98 => 36,  92 => 33,  76 => 20,  69 => 16,  62 => 12,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<div class=\"col-5  \">
\t\t<h5>
\t\t\tTelephone :
\t\t\t{{user.telephone}}
\t\t</h5>
\t\t<h5>
\t\t\t{{user.adresse}}
\t\t</h5>
\t\t<h5>
\t\t\tDate de naissance :
\t\t\t{{user.dateNaissance|date(\"d/m/Y\")}}
\t\t</h5>
\t\t<h5>
\t\t\tGitHub :
\t\t\t{{user.github}}
\t\t</h5>
\t\t<h5>
\t\t\tTravailleur Handicape :
\t\t\t{{user.TravailleurHandicape}}
\t\t</h5>
     

\t</div>
\t<div class=\"col-2\"></div>
\t<div class=\"col-5 bg-info \">
\t\t<h5>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle\" viewbox=\"0 0 16 16\">
\t\t\t\t<path d=\"M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\"/>
\t\t\t\t<path d=\"M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z\"/>
\t\t\t</svg>
\t\t\tPersonne a prevenir 1 :
\t\t\t{{user.RepresentantLegal1|default('représentant légal 2')}}
\t\t</h5>
\t\t<h5>
\t\t\t{{user.telUrgence1}}
\t\t</h5>
\t\t<h5>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle\" viewbox=\"0 0 16 16\">
\t\t\t\t<path d=\"M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\"/>
\t\t\t\t<path d=\"M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z\"/>
\t\t\t</svg>
\t\t\tPersonne a prevenir 2 :
\t\t\t{{user.RepresentantLegal2|default('représentant légal 2')}}
\t\t</h5>

\t\t<h5>
\t\t\t{{user.telUrgence2}}
\t\t</h5>
\t</div>
</div>
<hr class=\"text-light\">
", "profil/profilApp.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\profil\\profilApp.html.twig");
    }
}

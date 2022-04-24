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

/* dash/dashOFInclude2.html.twig */
class __TwigTemplate_42c3d36424fbf38161da07ffa275996b3133dc93767ea540d5127eafc109bc55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashOFInclude2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashOFInclude2.html.twig"));

        // line 1
        echo "<div class=\"accordion-item\">
\t<div class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t<h4 class=\"txt-dark\">Organisme Formation</h4>
\t\t</button>
\t</div>
\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t<div class=\"accordion-body\">
\t\t\t<div class=\"row my-3 pb-3\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 11, $this->source); })()), "prenom", [], "any", false, false, false, 11), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "
\t\t\t\t\t<br>
\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        echo "
\t\t\t\t\t<br>
\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 16, $this->source); })()), "telephone", [], "any", false, false, false, 16), "html", null, true);
        echo "
\t\t\t\t\t<br>
\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["OF"] ?? null), "adresse", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["OF"] ?? null), "adresse", [], "any", false, false, false, 18), "adresse")) : ("adresse")), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dash/dashOFInclude2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  69 => 16,  64 => 14,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accordion-item\">
\t<div class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t<h4 class=\"txt-dark\">Organisme Formation</h4>
\t\t</button>
\t</div>
\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t<div class=\"accordion-body\">
\t\t\t<div class=\"row my-3 pb-3\">
\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t{{ OF.prenom }}
\t\t\t\t\t{{ OF.nom }}
\t\t\t\t\t<br>
\t\t\t\t\t{{ OF.email }}
\t\t\t\t\t<br>
\t\t\t\t\t{{ OF.telephone }}
\t\t\t\t\t<br>
\t\t\t\t\t{{ OF.adresse|default('adresse') }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "dash/dashOFInclude2.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\dash\\dashOFInclude2.html.twig");
    }
}

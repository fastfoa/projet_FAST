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

/* lan/annuaireTest.html.twig */
class __TwigTemplate_3d710d9c70000c321a6ecd06091f4b6fb2b2e7c62620f9196dbd19fc44e40eaf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuaireTest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuaireTest.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lan/annuaireTest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div id=\"role0\" class=\"boutonForm col-2 mx-2\" onclick=\"selectAnnuaire(   this, '";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "' );\">ALL</div>
\t\t\t<div id=\"role1\" class=\"boutonForm col-2 mx-2\" onclick=\"selectAnnuaireR(  this, '";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "', 'ROLE_APP' );\">ROLE</div>
\t\t\t<div id=\"role2\" class=\"boutonForm col-2 mx-2\" onclick=\"selectAnnuaireRS( this, '";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "', 'ROLE_APP', 1 );\">ROLE SESS</div>
\t\t\t<div id=\"check\" class=\"boutonForm col-2 mx-2\">CHECK</div>
\t\t\t<div id=\"aff\"></div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/annuaireTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  76 => 8,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div id=\"role0\" class=\"boutonForm col-2 mx-2\" onclick=\"selectAnnuaire(   this, '{{ path('annuaire') }}' );\">ALL</div>
\t\t\t<div id=\"role1\" class=\"boutonForm col-2 mx-2\" onclick=\"selectAnnuaireR(  this, '{{ path('annuaire') }}', 'ROLE_APP' );\">ROLE</div>
\t\t\t<div id=\"role2\" class=\"boutonForm col-2 mx-2\" onclick=\"selectAnnuaireRS( this, '{{ path('annuaire') }}', 'ROLE_APP', 1 );\">ROLE SESS</div>
\t\t\t<div id=\"check\" class=\"boutonForm col-2 mx-2\">CHECK</div>
\t\t\t<div id=\"aff\"></div>
\t\t</div>
\t</div>
{% endblock body %}
", "lan/annuaireTest.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\annuaireTest.html.twig");
    }
}

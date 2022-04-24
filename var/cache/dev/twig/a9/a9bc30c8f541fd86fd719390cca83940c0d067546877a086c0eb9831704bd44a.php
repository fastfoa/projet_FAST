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

/* profil/civilite.html.twig */
class __TwigTemplate_ca4d0d4b82544b0f57adf8d9b4ada83832adcf179a519745ad97b21934214c1f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/civilite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/civilite.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-7\">    

        <h2>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "prenom", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["fonction"]) || array_key_exists("fonction", $context) ? $context["fonction"] : (function () { throw new RuntimeError('Variable "fonction" does not exist.', 4, $this->source); })()), "html", null, true);
        echo ")</h2>
        <h5> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "email", [], "any", false, false, false, 5), "html", null, true);
        echo " </h5>
        <h5> ";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", false, false, false, 6), "pas de LinkeIn")) : ("pas de LinkeIn")), "html", null, true);
        echo " </h5>
        <h5> ";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "siteWebPro", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "siteWebPro", [], "any", false, false, false, 7), "pas de web pro")) : ("pas de web pro")), "html", null, true);
        echo " </h5>
    </div>
    <div class=\"col-2\">    
        <img class=\"avatar\" src=\"https://www.transdev-grandest.fr/media/cache/thumbnail/7a7ff92c95467d5b50ab64fe5dbae47b.png\" />
    </div>
    <div class=\"col-2\">    
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashEval", ["app" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\">
                <button class=\"boutonForm\">EVAL</button>
        </a>
    </div>
</div>
<hr>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profil/civilite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  64 => 7,  60 => 6,  56 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-7\">    

        <h2>{{ user.prenom}} {{user.nom}} ({{fonction}})</h2>
        <h5> {{user.email}} </h5>
        <h5> {{user.linkedin|default('pas de LinkeIn')}} </h5>
        <h5> {{user.siteWebPro|default('pas de web pro')}} </h5>
    </div>
    <div class=\"col-2\">    
        <img class=\"avatar\" src=\"https://www.transdev-grandest.fr/media/cache/thumbnail/7a7ff92c95467d5b50ab64fe5dbae47b.png\" />
    </div>
    <div class=\"col-2\">    
        <a href=\"{{ path( 'dashEval',{'app':user.id } ) }}\">
                <button class=\"boutonForm\">EVAL</button>
        </a>
    </div>
</div>
<hr>", "profil/civilite.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\profil\\civilite.html.twig");
    }
}

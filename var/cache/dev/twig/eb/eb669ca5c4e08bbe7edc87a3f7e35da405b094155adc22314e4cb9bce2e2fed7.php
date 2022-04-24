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

/* menu.html.twig */
class __TwigTemplate_4111da4a368e6b5802224df8bbfe9221033fe232a524a0ffe0213d79a30c04d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"bar-top navbar navbar-expand-lg   \">
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent \">
\t\t<div class=\"logo-top\">

\t\t";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
            // line 6
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-foreach-blanc.png"), "html", null, true);
            echo "\">
\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_APP")) {
            // line 8
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-foreach-blanc.png"), "html", null, true);
            echo "\">
\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FORMATEUR")) {
            // line 10
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-foreach-blanc.png"), "html", null, true);
            echo "\">
\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MA")) {
            // line 12
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-foreach-blanc.png"), "html", null, true);
            echo "\">
\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) {
            // line 14
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-foreach-blanc.png"), "html", null, true);
            echo "\">
\t\t\t";
        }
        // line 16
        echo "\t\t\t ";
        // line 17
        echo "\t\t</div>

\t\t";
        // line 20
        echo "\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 21
            echo "\t\t\t";
            // line 22
            echo "
\t\t\t<script>
\t\t\t\tfunction rtn() {
window.history.back();
}
\t\t\t</script>

\t\t";
        }
        // line 30
        echo "

\t\t\t";
        // line 37
        echo "
\t\t<ul class=\"navbar-nav me-auto fith100\">

\t\t\t";
        // line 45
        echo "\t\t<li class=\"nav-item \">
\t\t\t\t
\t\t\t\t";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_APP")) {
            // line 48
            echo "\t\t\t\t\t\t<a class=\"nav-link  \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashApp");
            echo "\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FORMATEUR")) {
            // line 51
            echo "\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashFormateur");
            echo "\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MA")) {
            // line 54
            echo "\t\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashMA");
            echo "\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashEntreprise");
            echo "\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 60
        echo "
\t\t\t</li>


\t\t\t";
        // line 64
        if (array_key_exists("menu", $context)) {
            // line 65
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 65, $this->source); })()));
            foreach ($context['_seq'] as $context["item"] => $context["route"]) {
                // line 66
                echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link  \" href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($context["route"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['item'], $context['route'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t";
        }
        // line 71
        echo "


\t\t\t<li class=\"nav-item\">

\t\t\t\t";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
            // line 77
            echo "\t\t\t\t\t<a class=\"nav-link \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\">mon Compte</a>
\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FORMATEUR")) {
            // line 79
            echo "\t\t\t\t\t<a class=\"nav-link \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\">mon Compte</a>
\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_APP")) {
            // line 81
            echo "\t\t\t\t\t<a class=\"nav-link \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\">mon Compte</a>
\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) {
            // line 83
            echo "\t\t\t\t\t<a class=\"nav-link \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\">mon Compte</a>
\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MA")) {
            // line 85
            echo "\t\t\t\t\t<a class=\"nav-link \" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\">mon Compte</a>

\t\t\t\t";
        }
        // line 88
        echo "\t\t\t</li>




\t\t</ul>


\t<script>
\t\tfunction rtn() {window.history.back();}
\t</script>
<ul>
\t\t\t\t\t\t";
        // line 101
        echo "\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 102
            echo "\t\t\t\t\t\t\t<a class=\"boutonForm my-2 my-sm-0 m-3\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t";
            // line 104
            echo "\t\t\t\t\t\t\t";
            // line 106
            echo "\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</li>
\t\t</ul>
\t\t<script>
\t\t\tfunction rtn() {
window.history.back();
}
\t\t</script>


\t
\t</div>
</nav>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 107,  239 => 106,  237 => 104,  232 => 102,  229 => 101,  215 => 88,  208 => 85,  202 => 83,  196 => 81,  190 => 79,  184 => 77,  182 => 76,  175 => 71,  172 => 70,  161 => 67,  158 => 66,  153 => 65,  151 => 64,  145 => 60,  138 => 57,  131 => 54,  124 => 51,  117 => 48,  115 => 47,  111 => 45,  106 => 37,  102 => 30,  92 => 22,  90 => 21,  87 => 20,  83 => 17,  81 => 16,  75 => 14,  69 => 12,  63 => 10,  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"bar-top navbar navbar-expand-lg   \">
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent \">
\t\t<div class=\"logo-top\">

\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t<img src=\"{{ asset('images/logo-foreach-blanc.png') }}\">
\t\t\t{% elseif is_granted('ROLE_APP') %}
\t\t\t\t<img src=\"{{ asset('images/logo-foreach-blanc.png') }}\">
\t\t\t{% elseif is_granted('ROLE_FORMATEUR') %}
\t\t\t\t<img src=\"{{ asset('images/logo-foreach-blanc.png') }}\">
\t\t\t{% elseif is_granted('ROLE_MA') %}
\t\t\t\t<img src=\"{{ asset('images/logo-foreach-blanc.png') }}\">
\t\t\t{% elseif is_granted('ROLE_ENT') %}
\t\t\t\t<img src=\"{{ asset('images/logo-foreach-blanc.png') }}\">
\t\t\t{% endif %}
\t\t\t {# <img src=\"{{ asset('images/logo-foreach-blanc.png') }}\">  #}
\t\t</div>

\t\t{# le bouton de retour s'affiche seulement si l'user est coonecté #}
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t{# <button  class=\"boutonForm my-2 my-sm-0 m-3\" onclick=\"rtn()\"><i class=\"fa fa-arrow-left\"></i></button> #}

\t\t\t<script>
\t\t\t\tfunction rtn() {
window.history.back();
}
\t\t\t</script>

\t\t{% endif %}


\t\t\t{# <li class=\"nav-item \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"{{ path('test')}}\">Accueil
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>  #}

\t\t<ul class=\"navbar-nav me-auto fith100\">

\t\t\t{# <li class=\"nav-item \">
\t\t\t\t<a class=\"nav-link  \" href=\"{{ path('test')}}\">Accueil
\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t</a>
\t\t\t</li> #}
\t\t<li class=\"nav-item \">
\t\t\t\t
\t\t\t\t{% if is_granted('ROLE_APP') %}
\t\t\t\t\t\t<a class=\"nav-link  \" href=\"{{ path('dashApp')}}\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t{% elseif is_granted('ROLE_FORMATEUR') %}
\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"{{ path('dashFormateur')}}\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t{% elseif is_granted('ROLE_MA') %}
\t\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"{{ path('dashMA')}}\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t{% elseif is_granted('ROLE_ENT') %}
\t\t\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"{{ path('dashEntreprise')}}\">Accueil<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t{% endif %}

\t\t\t</li>


\t\t\t{% if menu is defined %}
\t\t\t\t{% for item, route in menu %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link  \" href=\"{{ path(route) }}\">{{item}}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}



\t\t\t<li class=\"nav-item\">

\t\t\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path('compte') }}\">mon Compte</a>
\t\t\t\t{% elseif is_granted('ROLE_FORMATEUR') %}
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path('compte') }}\">mon Compte</a>
\t\t\t\t{% elseif is_granted('ROLE_APP') %}
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path('compte') }}\">mon Compte</a>
\t\t\t\t{% elseif is_granted('ROLE_ENT') %}
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path('compte') }}\">mon Compte</a>
\t\t\t\t{% elseif is_granted('ROLE_MA') %}
\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path('compte') }}\">mon Compte</a>

\t\t\t\t{% endif %}
\t\t\t</li>




\t\t</ul>


\t<script>
\t\tfunction rtn() {window.history.back();}
\t</script>
<ul>
\t\t\t\t\t\t{# si authentifié affiche le boutton de deconnexion #}
\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t<a class=\"boutonForm my-2 my-sm-0 m-3\" aria-current=\"page\" href=\"{{ path('app_logout')}}\">Déconnexion</a>
\t\t\t\t\t\t\t{# sinon authentifié affiche le boutton de connexion #}
\t\t\t\t\t\t\t{# {% else %}
\t\t\t\t\t\t\t\t\t<a class=\"boutonForm my-2 my-sm-0 m-3\" aria-current=\"page\" href=\"{{ path('login')}}\">Connexion</a> #}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</li>
\t\t</ul>
\t\t<script>
\t\t\tfunction rtn() {
window.history.back();
}
\t\t</script>


\t
\t</div>
</nav>

", "menu.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\menu.html.twig");
    }
}

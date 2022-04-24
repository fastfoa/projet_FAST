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

/* listSession.html.twig */
class __TwigTemplate_95596e000de15562cea2f8a8aa12af288d3b3e9ec89b1c38eeb2f0c0f453e665 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listSession.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listSession.html.twig"));

        // line 1
        if ((isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<br>
";
            // line 8
            echo "

\t<div class=\"row my-3\">
\t\t<div class=\"col-12 txt-normal\">
\t\t\t<div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t<div class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\t<h4 class=\"txt-dark\">Apprenti</h4>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 27
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser", ["role" => "ROLE_APP", "roleName" => "ROLE_APP"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 37
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table-normal\" class=\" colorTextNoir\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Tél</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Mail</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAPP"]) || array_key_exists("listAPP", $context) ? $context["listAPP"] : (function () { throw new RuntimeError('Variable "listAPP" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass='clickable-row' data-href='";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profilOF_APP", ["user" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "telephone", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row my-3\">
\t\t<div class=\"col-12 txt-normal\">
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h4 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseTwo\">
\t\t\t\t\t\t<h4 class=\"txt-dark\">Formateur</h4>
\t\t\t\t\t</button>
\t\t\t\t</h4>
\t\t\t\t<div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t\t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t\t\t\t\tXXXXXXXXXXXXXXXXXX  attention all role 


\t\t\t\t\t\t\t\t\t\t";
            // line 92
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser", ["role" => "ROLE_APP", "roleName" => "ROLE_APP"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un formateur</div>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t ";
            }
            echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table-normal\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 112
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Mail</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listFORMATEUR"]) || array_key_exists("listFORMATEUR", $context) ? $context["listFORMATEUR"] : (function () { throw new RuntimeError('Variable "listFORMATEUR" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 120), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 121), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 124), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row  my-3\">
\t\t<div class=\"col-12 txt-normal\">
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h4 class=\"accordion-header\" id=\"panelsStayOpen-headingThree\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseThree\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseThree\">
\t\t\t\t\t\t<h4 class=\"txt-dark\">Maitre Apprentissage</h4>
\t\t\t\t\t</button>
\t\t\t\t</h4>
\t\t\t\t<div id=\"panelsStayOpen-collapseThree\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingThree\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t\t";
            // line 156
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser", ["role" => "ROLE_APP", "roleName" => "ROLE_APP"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un maitre d'apprentissage</div>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 166
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table-normal\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Mail</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listMA"]) || array_key_exists("listMA", $context) ? $context["listMA"] : (function () { throw new RuntimeError('Variable "listMA" does not exist.', 181, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 184
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 184), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 185), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 187
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 188), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 203
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "listSession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 203,  326 => 191,  316 => 188,  314 => 187,  310 => 185,  305 => 184,  302 => 182,  298 => 181,  292 => 177,  290 => 176,  279 => 166,  276 => 165,  274 => 162,  265 => 157,  263 => 156,  232 => 127,  222 => 124,  220 => 123,  216 => 121,  211 => 120,  208 => 118,  204 => 117,  198 => 113,  196 => 112,  182 => 101,  180 => 98,  171 => 93,  169 => 92,  136 => 61,  127 => 58,  123 => 57,  119 => 56,  114 => 55,  110 => 53,  107 => 52,  103 => 51,  97 => 47,  87 => 38,  84 => 37,  82 => 34,  73 => 29,  71 => 28,  68 => 27,  48 => 8,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if session %}
<br>
{# <form action=\"#\">
 
\t<a class=\"boutonForm\" href=\"{{ path( 'deleteSession',{'session':session.id} ) }}\">Supprimer la session</a>
\t\t<a class=\"boutonForm\" href=\"{{ path( 'deleteSession',{'session':session.id} ) }}\">Archiver la session</a>
</form> #}


\t<div class=\"row my-3\">
\t\t<div class=\"col-12 txt-normal\">
\t\t\t<div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t<div class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\t<h4 class=\"txt-dark\">Apprenti</h4>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t{# XXXXXXXXXXXXXXXXXX  attention all role <a href=\"{{ path( 'addUser', {'role':1}) }}\"> #}

\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table-normal\" class=\" colorTextNoir\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <th class = \" colorTextNoir\">session</th> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Tél</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Mail</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for item in listAPP %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass='clickable-row' data-href='{{ path( 'profilOF_APP',{'user':item.id} ) }}'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path( 'editUser',{'user':item.id} ) }}\"> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.prenom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.nom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.telephone}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.email}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row my-3\">
\t\t<div class=\"col-12 txt-normal\">
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h4 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseTwo\">
\t\t\t\t\t\t<h4 class=\"txt-dark\">Formateur</h4>
\t\t\t\t\t</button>
\t\t\t\t</h4>
\t\t\t\t<div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t\t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t\t\t\t\tXXXXXXXXXXXXXXXXXX  attention all role 


\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un formateur</div>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>#}
\t\t\t\t\t\t\t\t\t\t {% endif %} 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table-normal\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <th  class = \" colorTextNoir\">session</th> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <th  class = \" colorTextNoir\">Tél</th> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Mail</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t{% for item in listFORMATEUR %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <tr class='clickable-row' data-href='{{ path( 'editUser',{'user':item.id} ) }}'> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.prenom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.nom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <td class = \" colorTextNoir\" >{{item.nom}}</td> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <td class = \" colorTextNoir\" >{{item.telephone}}</td> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.email}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row  my-3\">
\t\t<div class=\"col-12 txt-normal\">
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h4 class=\"accordion-header\" id=\"panelsStayOpen-headingThree\">
\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseThree\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseThree\">
\t\t\t\t\t\t<h4 class=\"txt-dark\">Maitre Apprentissage</h4>
\t\t\t\t\t</button>
\t\t\t\t</h4>
\t\t\t\t<div id=\"panelsStayOpen-collapseThree\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingThree\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-12\">
\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un maitre d'apprentissage</div>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table-normal\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <th  class = \" colorTextNoir\">session</th> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <th  class = \" colorTextNoir\">Tél</th> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\" colorTextNoir\">Mail</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t{% for item in listMA %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <tr class='clickable-row' data-href='{{ path( 'editUser',{'user':item.id} ) }}'> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.prenom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.nom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <td class = \" colorTextNoir\" >{{item.nom}}</td> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <td class = \" colorTextNoir\" >{{item.telephone}}</td> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.email}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}



", "listSession.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\listSession.html.twig");
    }
}

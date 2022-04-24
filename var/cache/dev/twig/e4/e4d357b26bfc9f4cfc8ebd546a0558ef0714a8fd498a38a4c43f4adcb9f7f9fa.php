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

/* listSession1.html.twig */
class __TwigTemplate_7a018ef84eaf12259b44a1ef19e7707932cc2e33f4e6cf1b9fa4b6678c599c4f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listSession1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listSession1.html.twig"));

        // line 1
        if ((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "\t<div class=\"row  \">
\t\t<div class=\"accordion\" id=\"accordionExample\">
  \t\t\t<div class=\"accordion-item\">
    \t\t\t\t<h2>
        \t\t<div class=\"mt-3 text-center\" style=\" border: 2px #11284B!important; background-color: #e7f1ff; box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);\">
   \t\t\t\t\t<h4 class=\"txt-dark\">Apprenti</h4>
      \t\t\t</div>
    \t\t</h2>
    \t\t<div>
      \t\t\t<div >
        \t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t";
            // line 14
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
                // line 15
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser", ["role" => "ROLE_APP", "roleName" => "ROLE_APP"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t\t\t ";
                // line 22
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<table class=\"table-normal  txt-normal\">
\t\t\t\t\t\t\t\t\t<tr class=\" bg-bar\">
\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Prénom</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Nom</th>
\t\t\t\t\t\t\t\t\t ";
            // line 32
            echo "\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Tél</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Mail</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listAPPS"]) || array_key_exists("listAPPS", $context) ? $context["listAPPS"] : (function () { throw new RuntimeError('Variable "listAPPS" does not exist.', 36, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 36, $this->source); })()), [], "array", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["elme"]) {
                // line 37
                echo "                                    <tr\tclass='clickable-row' data-href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editUser", ["user" => twig_get_attribute($this->env, $this->source, $context["elme"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "'>
\t\t\t\t\t\t\t\t\t ";
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elme"], "prenom", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elme"], "nom", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elme"], "telephone", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\"><A HREF=\"mailto:";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elme"], "email", [], "any", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elme"], "email", [], "any", false, false, false, 42), "html", null, true);
                echo "</A></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</div>
    \t\t</div>
  \t\t</div>
  \t\t<div>
   \t\t\t<h2>
        \t\t<div class=\"mt-3 text-center\" style=\" color: #0c63e4; background-color: #e7f1ff; box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);\">
   \t\t\t\t\t<h4 class=\"txt-dark\">Formateur</h4>
      \t\t\t</div>
    \t\t</h2>
    \t\t<div>
      \t\t\t<div >
        \t\t\t<div class=\"row bg\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
                // line 64
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser", ["role" => "ROLE_APP", "roleName" => "ROLE_APP"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Formateur</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t ";
                // line 71
                echo "\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<table class=\"table-normal  txt-normal\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\" bg-bar\">
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">nom</th>
\t\t\t\t\t\t\t\t\t ";
            // line 82
            echo "\t\t\t\t\t\t\t\t\t ";
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\" >Mail</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listFORMATEURS"]) || array_key_exists("listFORMATEURS", $context) ? $context["listFORMATEURS"] : (function () { throw new RuntimeError('Variable "listFORMATEURS" does not exist.', 87, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 87, $this->source); })()), [], "array", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t ";
                // line 90
                echo "\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 90), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 91), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t ";
                // line 93
                echo "\t\t\t\t\t\t\t\t ";
                // line 94
                echo "\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\"><A HREF=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 94), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 94), "html", null, true);
                echo "</A></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</div>
    \t\t</div>
  \t\t</div>
\t<div>
   \t\t\t<h2>
        \t\t<div class=\"mt-3 text-center\" style=\" color: #0c63e4; background-color: #e7f1ff; box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);\">
   \t\t\t\t\t<h4 class=\"txt-dark\">Maitre d'Apprentissage</h4>
      \t\t\t</div>
    \t\t</h2>
    \t\t<div>
      \t\t\t<div >
        \t\t\t<div class=\"row bg\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
            // line 114
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
                // line 115
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser", ["role" => "ROLE_APP", "roleName" => "ROLE_APP"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Maitre d'Apprentissage</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } else {
                // line 119
                echo "\t\t\t\t\t\t\t ";
                // line 122
                echo "\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<table class=\"table-normal  txt-normal\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\" bg-bar\">
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">nom</th>
\t\t\t\t\t\t\t\t\t ";
            // line 133
            echo "\t\t\t\t\t\t\t\t\t ";
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\" >Mail</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listMAS"]) || array_key_exists("listMAS", $context) ? $context["listMAS"] : (function () { throw new RuntimeError('Variable "listMAS" does not exist.', 138, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 138, $this->source); })()), [], "array", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t ";
                // line 141
                echo "\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 141), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 142), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t ";
                // line 144
                echo "\t\t\t\t\t\t\t\t ";
                // line 145
                echo "\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\"><A HREF=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 145), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 145), "html", null, true);
                echo "</A></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</div>
    \t\t</div>
  \t\t</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "listSession1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 148,  278 => 145,  276 => 144,  272 => 142,  267 => 141,  264 => 139,  260 => 138,  254 => 134,  252 => 133,  241 => 123,  238 => 122,  236 => 119,  228 => 115,  226 => 114,  207 => 97,  195 => 94,  193 => 93,  189 => 91,  184 => 90,  181 => 88,  177 => 87,  171 => 83,  169 => 82,  158 => 72,  155 => 71,  153 => 68,  145 => 64,  143 => 63,  123 => 45,  112 => 42,  108 => 41,  104 => 40,  99 => 39,  94 => 37,  90 => 36,  84 => 32,  74 => 23,  71 => 22,  69 => 19,  61 => 15,  59 => 14,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if sessions %}
\t<div class=\"row  \">
\t\t<div class=\"accordion\" id=\"accordionExample\">
  \t\t\t<div class=\"accordion-item\">
    \t\t\t\t<h2>
        \t\t<div class=\"mt-3 text-center\" style=\" border: 2px #11284B!important; background-color: #e7f1ff; box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);\">
   \t\t\t\t\t<h4 class=\"txt-dark\">Apprenti</h4>
      \t\t\t</div>
    \t\t</h2>
    \t\t<div>
      \t\t\t<div >
        \t\t\t<div class=\"row bg\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t {# <a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<table class=\"table-normal  txt-normal\">
\t\t\t\t\t\t\t\t\t<tr class=\" bg-bar\">
\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Prénom</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Nom</th>
\t\t\t\t\t\t\t\t\t {# <th class = \" colorTextNoir\">session</th> #}
\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Tél</th>
\t\t\t\t\t\t\t\t\t\t<th class=\" col-3\">Mail</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for elme in listAPPS[i] %}
                                    <tr\tclass='clickable-row' data-href='{{ path( 'editUser',{'user':elme.id} ) }}'>
\t\t\t\t\t\t\t\t\t {# <a href=\"{{ path( 'editUser',{'user':item.id} ) }}\"> #}
\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{elme.prenom}}</td>
\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{elme.nom}}</td>
\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{elme.telephone}}</td>
\t\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\"><A HREF=\"mailto:{{elme.email}}\">{{elme.email}}</A></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</div>
    \t\t</div>
  \t\t</div>
  \t\t<div>
   \t\t\t<h2>
        \t\t<div class=\"mt-3 text-center\" style=\" color: #0c63e4; background-color: #e7f1ff; box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);\">
   \t\t\t\t\t<h4 class=\"txt-dark\">Formateur</h4>
      \t\t\t</div>
    \t\t</h2>
    \t\t<div>
      \t\t\t<div >
        \t\t\t<div class=\"row bg\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t\t\t\t\t<a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Formateur</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t {# <a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<table class=\"table-normal  txt-normal\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\" bg-bar\">
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">nom</th>
\t\t\t\t\t\t\t\t\t {# <th  class = \" colorTextNoir\">session</th> #}
\t\t\t\t\t\t\t\t\t {# <th  class = \" colorTextNoir\">Tél</th> #}
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\" >Mail</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for item in listFORMATEURS[i] %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t {# <tr class='clickable-row' data-href='{{ path( 'editUser',{'user':item.id} ) }}'> #}
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.prenom}}</td>
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.nom}}</td>
\t\t\t\t\t\t\t\t {# <td class = \" colorTextNoir\" >{{item.nom}}</td> #}
\t\t\t\t\t\t\t\t {# <td class = \" colorTextNoir\" >{{item.telephone}}</td> #}
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\"><A HREF=\"mailto:{{item.email}}\">{{item.email}}</A></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</div>
    \t\t</div>
  \t\t</div>
\t<div>
   \t\t\t<h2>
        \t\t<div class=\"mt-3 text-center\" style=\" color: #0c63e4; background-color: #e7f1ff; box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);\">
   \t\t\t\t\t<h4 class=\"txt-dark\">Maitre d'Apprentissage</h4>
      \t\t\t</div>
    \t\t</h2>
    \t\t<div>
      \t\t\t<div >
        \t\t\t<div class=\"row bg\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{% if is_granted('ROLE_OF') %}
\t\t\t\t\t\t\t\t<a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Maitre d'Apprentissage</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t {# <a href=\"{{ path( 'addUser',{'role': 'ROLE_APP','roleName': 'ROLE_APP'} ) }}\">
\t\t\t\t\t\t\t\t\t<div class=\"boutonForm\">+ Créer un Apprenti</div>
\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<table class=\"table-normal  txt-normal\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\" bg-bar\">
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">Prenom</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\">nom</th>
\t\t\t\t\t\t\t\t\t {# <th  class = \" colorTextNoir\">session</th> #}
\t\t\t\t\t\t\t\t\t {# <th  class = \" colorTextNoir\">Tél</th> #}
\t\t\t\t\t\t\t\t\t\t<th class=\"col-4\" >Mail</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for item in listMAS[i] %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t {# <tr class='clickable-row' data-href='{{ path( 'editUser',{'user':item.id} ) }}'> #}
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.prenom}}</td>
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\">{{item.nom}}</td>
\t\t\t\t\t\t\t\t {# <td class = \" colorTextNoir\" >{{item.nom}}</td> #}
\t\t\t\t\t\t\t\t {# <td class = \" colorTextNoir\" >{{item.telephone}}</td> #}
\t\t\t\t\t\t\t\t\t<td class=\" colorTextNoir\"><A HREF=\"mailto:{{item.email}}\">{{item.email}}</A></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</div>
    \t\t</div>
  \t\t</div>
{% endif %}
", "listSession1.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\listSession1.html.twig");
    }
}

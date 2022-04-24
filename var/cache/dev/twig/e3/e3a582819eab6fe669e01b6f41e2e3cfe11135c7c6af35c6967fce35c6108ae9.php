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

/* dash/listUser.html.twig */
class __TwigTemplate_8a6e221b35960a79f5c24eab9b1ed8778cdbfd7016ee8a4b85fef39fbf4d48eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/listUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/listUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash/listUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_myStylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        // line 4
        echo "<style>
.clickable-row:hover{
 background-color: #f37262;}
</style>
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_myJavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        // line 12
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

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "liste
\t";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "s
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<div class=\"container-fluid bg-workSpace\">
\t<div class=\"row\"></div>
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2>liste de tous les ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "s</h2>
\t\t    </div>
\t    </div>
\t\t<div class=\"row bg\">
\t\t\t<div class=\"col-3\">
\t\t\t</a>\t<a href=\"\">
\t\t\t\t<div class=\"boutonForm m-3 p-2\">+ Ajouter un
\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</div>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t<div class=\"row\">
\t\t<div>
\t\t\t<table class=\"table-normal\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
        // line 47
        if ((0 === twig_compare((isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 47, $this->source); })()), "Entreprise"))) {
            // line 48
            echo "\t\t\t\t\t\t\t";
            // line 49
            echo "\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-4\">nom</th>
\t\t\t\t\t\t\t";
            // line 51
            echo "\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-4\">Tél</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-4\">Mail</th>
\t\t\t\t\t\t\t";
            // line 54
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
                // line 60
                echo "\t\t\t\t\t\t\t<td class=\"col-4\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 60), "html", null, true);
                echo "</td> 
\t\t\t\t\t\t\t";
                // line 62
                echo "\t\t\t\t\t\t\t<td class=\"col-4\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "telephone", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"col-4\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t";
                // line 65
                echo "
\t\t\t\t\t\t\t";
                // line 71
                echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t\t\t\t";
        } elseif ((0 === twig_compare(        // line 75
(isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 75, $this->source); })()), "Apprenti"))) {
            // line 76
            echo "\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">Prenom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">nom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">session</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">Tél</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">Mail</th>
\t\t\t\t\t    \t";
            // line 81
            echo "\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 85, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 86
                echo "\t\t\t\t\t\t<tr  class='clickable-row' data-href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profilOF_APP", ["user" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "'>
\t\t\t\t\t\t\t<td class=\"col-2\">";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"col-2\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 88), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"col-2\">";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ns", [], "any", false, false, false, 89), "html", null, true);
                echo "</td>
\t\t\t\t \t\t\t<td class=\"col-3\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "telephone", [], "any", false, false, false, 90), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"col-3\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 91), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t";
                // line 94
                echo "\t\t\t\t";
                // line 97
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t</table>
\t\t\t\t\t\t";
        } elseif ((0 === twig_compare(        // line 102
(isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 102, $this->source); })()), "Maitre d'apprentissage"))) {
            // line 103
            echo "\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">Prenom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">nom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">session</th>
\t\t\t\t\t\t\t";
            // line 107
            echo "\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">Mail</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">entreprise</th>
\t\t\t\t\t    \t";
            // line 109
            echo "\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 113, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 114
                echo "\t\t\t\t\t\t";
                // line 115
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-2\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"col-2\">";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 117), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"col-2\">";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ns", [], "any", false, false, false, 118), "html", null, true);
                echo "</td>
\t\t\t\t \t\t\t";
                // line 120
                echo "\t\t\t\t\t\t\t<td class=\"col-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 120), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"col-3\">";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom_ent", [], "any", false, false, false, 121), "html", null, true);
                echo "</td> 
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t";
                // line 124
                echo "\t\t\t\t";
                // line 127
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t
\t\t";
        } else {
            // line 133
            echo "\t\t\t<th class=\"txt-bar bg-bar col-2\">Prenom</th>
\t\t\t<th class=\"txt-bar bg-bar col-2\">nom</th>
\t\t\t<th class=\"txt-bar bg-bar col-2\">session</th>
\t\t\t <th class=\"txt-bar bg-bar col-3\">Tél</th>
\t\t\t<th class=\"txt-bar bg-bar col-3\">Mail</th>
\t\t\t";
            // line 139
            echo "\t\t</tr>
\t</tbody>
</thead>
<tbody>
\t";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 143, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 144
                echo "\t\t<tr>
\t\t\t<td class=\"col-2\">";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 145), "html", null, true);
                echo "</td>
\t\t\t<td class=\"col-2\">";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 146), "html", null, true);
                echo "</td>
\t\t\t<td class=\"col-2\">";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ns", [], "any", false, false, false, 147), "html", null, true);
                echo "</td>
\t\t\t<td class=\"col-3\">";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "telephone", [], "any", false, false, false, 148), "html", null, true);
                echo "</td>
\t\t\t<td class=\"col-3\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 149), "html", null, true);
                echo "</td>
\t\t\t";
                // line 151
                echo "
\t\t\t";
                // line 157
                echo "\t\t</tr>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "</tbody></table>";
        }
        echo "</div></div></div></div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dash/listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 160,  393 => 157,  390 => 151,  386 => 149,  382 => 148,  378 => 147,  374 => 146,  370 => 145,  367 => 144,  363 => 143,  357 => 139,  350 => 133,  344 => 129,  337 => 127,  335 => 124,  330 => 121,  325 => 120,  321 => 118,  317 => 117,  313 => 116,  310 => 115,  308 => 114,  304 => 113,  298 => 109,  294 => 107,  289 => 103,  287 => 102,  282 => 99,  275 => 97,  273 => 94,  268 => 91,  264 => 90,  260 => 89,  256 => 88,  252 => 87,  247 => 86,  243 => 85,  237 => 81,  230 => 76,  228 => 75,  224 => 73,  217 => 71,  214 => 65,  210 => 63,  205 => 62,  200 => 60,  197 => 58,  193 => 57,  188 => 54,  184 => 51,  181 => 49,  179 => 48,  177 => 47,  165 => 38,  155 => 31,  149 => 27,  139 => 26,  127 => 23,  115 => 22,  96 => 12,  86 => 11,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block myStylesheets %}
<style>
.clickable-row:hover{
 background-color: #f37262;}
</style>
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
{% endblock %}

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
{% block title %}liste
\t{{ roleName }}s
{% endblock %}

{% block body %}
<div class=\"container-fluid bg-workSpace\">
\t<div class=\"row\"></div>
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2>liste de tous les {{ roleName }}s</h2>
\t\t    </div>
\t    </div>
\t\t<div class=\"row bg\">
\t\t\t<div class=\"col-3\">
\t\t\t</a>\t<a href=\"\">
\t\t\t\t<div class=\"boutonForm m-3 p-2\">+ Ajouter un
\t\t\t\t\t{{ roleName }}</div>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t<div class=\"row\">
\t\t<div>
\t\t\t<table class=\"table-normal\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t{% if roleName == 'Entreprise' %}
\t\t\t\t\t\t\t{# <th class=\"txt-bar bg-bar\">Prenom</th> #}
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-4\">nom</th>
\t\t\t\t\t\t\t{# <th class=\"txt-bar bg-bar\">session</th> #}
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-4\">Tél</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-4\">Mail</th>
\t\t\t\t\t\t\t{# <th class=\"txt-bar bg-bar\">Action</th> #}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for item in list %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t\t{# <td>{{item.prenom}}</td> #}
\t\t\t\t\t\t\t<td class=\"col-4\">{{item.nom}}</td> 
\t\t\t\t\t\t\t{# <td>{{item.ns}}</td> #}
\t\t\t\t\t\t\t<td class=\"col-4\">{{item.telephone}}</td>
\t\t\t\t\t\t\t<td class=\"col-4\">{{item.email}}</td>
\t\t\t\t\t\t\t{#<td>{{session.formation}}</td>#}

\t\t\t\t\t\t\t{# <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path( 'editUser',{'user':item.id} ) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td> #}
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t\t\t\t{% elseif roleName == 'Apprenti' %}
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">Prenom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">nom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">session</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">Tél</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">Mail</th>
\t\t\t\t\t    \t{# <th class=\"txt-bar bg-bar\">Action</th> #}\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for item in list %}
\t\t\t\t\t\t<tr  class='clickable-row' data-href='{{ path( 'profilOF_APP',{'user':item.id} ) }}'>
\t\t\t\t\t\t\t<td class=\"col-2\">{{item.prenom}}</td>
\t\t\t\t\t\t\t<td class=\"col-2\">{{item.nom}}</td>
\t\t\t\t\t\t\t<td class=\"col-2\">{{item.ns}}</td>
\t\t\t\t \t\t\t<td class=\"col-3\">{{item.telephone}}</td>
\t\t\t\t\t\t\t<td class=\"col-3\">{{item.email}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t{#<td>{{session.formation}}</td>#}
\t\t\t\t{# \t<td><a href=\"{{ path( 'editUser',{'user':item.id} ) }}\">
\t\t\t\t\t<i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;\"></i></a>
\t\t\t\t\t</td> #}
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t</table>
\t\t\t\t\t\t{% elseif roleName ==  \"Maitre d'apprentissage\" %}
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">Prenom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">nom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-2\">session</th>
\t\t\t\t\t\t\t{#<th class=\"txt-bar bg-bar col-3\">Tél</th> #}
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">Mail</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar col-3\">entreprise</th>
\t\t\t\t\t    \t{# <th class=\"txt-bar bg-bar\">Action</th> #}\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for item in list %}
\t\t\t\t\t\t{# <tr  class='clickable-row' data-href='{{ path( 'editUser',{'user':item.id} ) }}'>#}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"col-2\">{{item.prenom}}</td>
\t\t\t\t\t\t\t<td class=\"col-2\">{{item.nom}}</td>
\t\t\t\t\t\t\t<td class=\"col-2\">{{item.ns}}</td>
\t\t\t\t \t\t\t{#<td class=\"col-3\">{{item.telephone}}</td> #}
\t\t\t\t\t\t\t<td class=\"col-3\">{{item.email}}</td>
\t\t\t\t\t\t\t<td class=\"col-3\">{{item.nom_ent}}</td> 
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t{#<td>{{session.formation}}</td>#}
\t\t\t\t{# \t<td><a href=\"{{ path( 'editUser',{'user':item.id} ) }}\">
\t\t\t\t\t<i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;\"></i></a>
\t\t\t\t\t</td> #}
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t
\t\t{% else %}
\t\t\t<th class=\"txt-bar bg-bar col-2\">Prenom</th>
\t\t\t<th class=\"txt-bar bg-bar col-2\">nom</th>
\t\t\t<th class=\"txt-bar bg-bar col-2\">session</th>
\t\t\t <th class=\"txt-bar bg-bar col-3\">Tél</th>
\t\t\t<th class=\"txt-bar bg-bar col-3\">Mail</th>
\t\t\t{# <th class=\"txt-bar bg-bar\">Action</th> #}
\t\t</tr>
\t</tbody>
</thead>
<tbody>
\t{% for item in list %}
\t\t<tr>
\t\t\t<td class=\"col-2\">{{item.prenom}}</td>
\t\t\t<td class=\"col-2\">{{item.nom}}</td>
\t\t\t<td class=\"col-2\">{{item.ns}}</td>
\t\t\t<td class=\"col-3\">{{item.telephone}}</td>
\t\t\t<td class=\"col-3\">{{item.email}}</td>
\t\t\t{#<td>{{session.formation}}</td>#}

\t\t\t{# <td>
\t\t\t\t<a href=\"{{ path( 'editUser',{'user':item.id} ) }}\">
\t\t\t\t\t<i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;\"></i>
\t\t\t\t</a>
\t\t\t</td> #}
\t\t</tr>

\t{% endfor %}
</tbody></table>{% endif %}</div></div></div></div></div>{% endblock %}
", "dash/listUser.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\dash\\listUser.html.twig");
    }
}

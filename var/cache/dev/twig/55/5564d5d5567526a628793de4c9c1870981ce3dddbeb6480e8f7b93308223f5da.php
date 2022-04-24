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

/* lan/annuairePopup.html.twig */
class __TwigTemplate_219ef219d31004cfca3a86d390f66a0ac04729a3a9d2f3ca02d4f5feca74e45c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuairePopup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuairePopup.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<style>

\t\t\t* {
\t\t\t\tbox-sizing: border-box;
\t\t\t}

\t\t\tbody {
\t\t\t\tfont: 16px Arial;
\t\t\t}

\t\t\t/*the container must be positioned relative:*/
\t\t\t.autocomplete {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: inline-block;
\t\t\t}

\t\t\tinput {
\t\t\t\tborder: 1px solid transparent;
\t\t\t\tbackground-color: #f1f1f1;
\t\t\t\tpadding: 10px;
\t\t\t\tfont-size: 16px;
\t\t\t}

\t\t\tinput[type=text] {
\t\t\t\tbackground-color: #f1f1f1;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\tinput[type=submit] {
\t\t\t\tbackground-color: DodgerBlue;
\t\t\t\tcolor: #fff;
\t\t\t\tcursor: pointer;
\t\t\t}

\t\t\t.autocomplete-items {
\t\t\t\tposition: absolute;
\t\t\t\tborder: 1px solid #d4d4d4;
\t\t\t\tborder-bottom: none;
\t\t\t\tborder-top: none;
\t\t\t\tz-index: 99;
\t\t\t\t/*position the autocomplete items to be the same width as the container:*/
\t\t\t\ttop: 100%;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t}

\t\t\t.autocomplete-items div {
\t\t\t\tpadding: 10px;
\t\t\t\tcursor: pointer;
\t\t\t\tbackground-color: #fff;
\t\t\t\tborder-bottom: 1px solid #d4d4d4;
\t\t\t}

\t\t\t/*when hovering an item:*/
\t\t\t.autocomplete-items div:hover {
\t\t\t\tbackground-color: #e9e9e9;
\t\t\t}

\t\t\t/*when navigating through the items using the arrow keys:*/
\t\t\t.autocomplete-active {
\t\t\t\tbackground-color: DodgerBlue !important;
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.popup {
\t\t\t\tbackground-color: red;
\t\t\t\theight: 150px;
\t\t\t\twidth: 350px;
\t\t\t}
\t\t</style>
\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/JS/annuaire.js"), "html", null, true);
        echo "\"></script>

\t</head>
\t<body>
\t\t\t<div id=\"role0\" onclick=\"selectAnnuaire(   '";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "' );\">ALL</div>
\t\t\t<div id=\"role1\" onclick=\"selectAnnuaireR(  '";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "', 'ROLE_APP' );\">ROLE</div>
\t\t\t<div id=\"role2\" onclick=\"selectAnnuaireRS( '";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaire");
        echo "', 'ROLE_APP', 1 );\">ROLE SESS</div>
\t\t\t<div id=\"check\">CHECK</div>
\t\t\t<div id=\"aff\"></div>


      <br>
      <br>
      <br>
\t\t\t<div id=\"annuairePopup\" class=\"popup\">
\t\t\t\t<form autocomplete=\"off\" action=\"\">
\t\t\t\t\t<div class=\"autocomplete\" style=\"width:300px;\">
\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" name=\"myCountry\">
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"envoyer\" type=\"submit\">
\t\t\t\t</form>
\t\t\t</div>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lan/annuairePopup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 81,  130 => 80,  126 => 79,  119 => 75,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<style>

\t\t\t* {
\t\t\t\tbox-sizing: border-box;
\t\t\t}

\t\t\tbody {
\t\t\t\tfont: 16px Arial;
\t\t\t}

\t\t\t/*the container must be positioned relative:*/
\t\t\t.autocomplete {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: inline-block;
\t\t\t}

\t\t\tinput {
\t\t\t\tborder: 1px solid transparent;
\t\t\t\tbackground-color: #f1f1f1;
\t\t\t\tpadding: 10px;
\t\t\t\tfont-size: 16px;
\t\t\t}

\t\t\tinput[type=text] {
\t\t\t\tbackground-color: #f1f1f1;
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\tinput[type=submit] {
\t\t\t\tbackground-color: DodgerBlue;
\t\t\t\tcolor: #fff;
\t\t\t\tcursor: pointer;
\t\t\t}

\t\t\t.autocomplete-items {
\t\t\t\tposition: absolute;
\t\t\t\tborder: 1px solid #d4d4d4;
\t\t\t\tborder-bottom: none;
\t\t\t\tborder-top: none;
\t\t\t\tz-index: 99;
\t\t\t\t/*position the autocomplete items to be the same width as the container:*/
\t\t\t\ttop: 100%;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t}

\t\t\t.autocomplete-items div {
\t\t\t\tpadding: 10px;
\t\t\t\tcursor: pointer;
\t\t\t\tbackground-color: #fff;
\t\t\t\tborder-bottom: 1px solid #d4d4d4;
\t\t\t}

\t\t\t/*when hovering an item:*/
\t\t\t.autocomplete-items div:hover {
\t\t\t\tbackground-color: #e9e9e9;
\t\t\t}

\t\t\t/*when navigating through the items using the arrow keys:*/
\t\t\t.autocomplete-active {
\t\t\t\tbackground-color: DodgerBlue !important;
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.popup {
\t\t\t\tbackground-color: red;
\t\t\t\theight: 150px;
\t\t\t\twidth: 350px;
\t\t\t}
\t\t</style>
\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"{{asset(\"/JS/annuaire.js\")}}\"></script>

\t</head>
\t<body>
\t\t\t<div id=\"role0\" onclick=\"selectAnnuaire(   '{{ path('annuaire') }}' );\">ALL</div>
\t\t\t<div id=\"role1\" onclick=\"selectAnnuaireR(  '{{ path('annuaire') }}', 'ROLE_APP' );\">ROLE</div>
\t\t\t<div id=\"role2\" onclick=\"selectAnnuaireRS( '{{ path('annuaire') }}', 'ROLE_APP', 1 );\">ROLE SESS</div>
\t\t\t<div id=\"check\">CHECK</div>
\t\t\t<div id=\"aff\"></div>


      <br>
      <br>
      <br>
\t\t\t<div id=\"annuairePopup\" class=\"popup\">
\t\t\t\t<form autocomplete=\"off\" action=\"\">
\t\t\t\t\t<div class=\"autocomplete\" style=\"width:300px;\">
\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" name=\"myCountry\">
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"envoyer\" type=\"submit\">
\t\t\t\t</form>
\t\t\t</div>
\t</body>
</html>
", "lan/annuairePopup.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\annuairePopup.html.twig");
    }
}

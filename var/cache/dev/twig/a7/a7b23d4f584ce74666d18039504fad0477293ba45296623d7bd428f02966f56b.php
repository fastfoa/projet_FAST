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

/* lan/annuairePopup2.html.twig */
class __TwigTemplate_f00bf4140239d32acfe6d9a7bba3c51368a9de56777c9ef1e337a981bc2465a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuairePopup2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuairePopup2.html.twig"));

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
\t\t<script>

\t\t\tfunction autocomplete(inp, arr) {

console.log(arr);
/*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
var currentFocus;
/*execute a function when someone writes in the text field:*/
inp.addEventListener(\"input\", function (e) {
var a,
b,
i,
val = this.value;
console.log(val);
/*close any already open lists of autocompleted values*/
closeAllLists();
if (! val) {
return false;
}
currentFocus = -1;
/*create a DIV element that will contain the items (values):*/
a = document.createElement(\"DIV\");
a.setAttribute(\"id\", this.id + \"autocomplete-list\");
a.setAttribute(\"class\", \"autocomplete-items\");
/*append the DIV element as a child of the autocomplete container:*/
this.parentNode.appendChild(a);
/*for each item in the array...*/
// for (i = 0; i < arr.length; i++) {
for ([xkey, xval] of Object.entries(arr)) {
var item = xval;
var itemId = xkey;
console.log(itemId);

/*check if the item starts with the same letters as the text field value:*/
if (item.substr(0, val.length).toUpperCase() == val.toUpperCase()) { /*create a DIV element for each matching element:*/
b = document.createElement(\"DIV\");
/*make the matching letters bold:*/
b.innerHTML = \"<strong>\" + item.substr(0, val.length) + \"</strong>\";
b.innerHTML += item.substr(val.length);
/*insert a input field that will hold the current array item's value:*/
b.innerHTML += \"<input type='hidden' value='\" + itemId + \"'>\";
/*execute a function when someone clicks on the item value (DIV element):*/
b.addEventListener(\"click\", function (e) {
console.log(\"klik\");
/*insert the value for the autocomplete text field:*/
var id = this.getElementsByTagName(\"input\")[0].value;
inp.value = arr[id];
returnIDPopup = id;
console.log(inp.value);
console.log(id);
\$(\"#annuairePopup\").hide();
/*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
closeAllLists();
});
a.appendChild(b);
}
}
});
/*execute a function presses a key on the keyboard:*/
inp.addEventListener(\"keydown\", function (e) {
var x = document.getElementById(this.id + \"autocomplete-list\");
if (x) 
x = x.getElementsByTagName(\"div\");

if (e.keyCode == 40) { /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
currentFocus++;
/*and and make the current item more visible:*/
addActive(x);
} else if (e.keyCode == 38) {
// up
/*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
currentFocus--;
/*and and make the current item more visible:*/
addActive(x);
} else if (e.keyCode == 13) { /*If the ENTER key is pressed, prevent the form from being submitted,*/
e.preventDefault();
if (currentFocus > -1) { /*and simulate a click on the \"active\" item:*/
if (x) 
x[currentFocus].click();

}
}
});
function addActive(x) { /*a function to classify an item as \"active\":*/
if (! x) 
return false;

/*start by removing the \"active\" class on all items:*/
removeActive(x);
if (currentFocus >= x.length) 
currentFocus = 0;

if (currentFocus < 0) 
currentFocus = (x.length - 1);

/*add class \"autocomplete-active\":*/
x[currentFocus].classList.add(\"autocomplete-active\");
}
function removeActive(x) { /*a function to remove the \"active\" class from all autocomplete items:*/
for (var i = 0; i < x.length; i++) {
x[i].classList.remove(\"autocomplete-active\");
}
}
function closeAllLists(elmnt) { /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
var x = document.getElementsByClassName(\"autocomplete-items\");
for (var i = 0; i < x.length; i++) {
if (elmnt != x[i] && elmnt != inp) {
x[i].parentNode.removeChild(x[i]);
}
}
}
/*execute a function when someone clicks in the document:*/
document.addEventListener(\"click\", function (e) {
closeAllLists(e.target);
});
}


var returnIDPopup = 0;
\$(document).ready(function () {
\$(\"#annuairePopup\").hide();
\$(\"#click\").click(function () {
\$(\"#annuairePopup\").show();
})
\$(\"#check\").click(function () {
\$(\"#aff\").text(returnIDPopup);
})
})

function selectAnnuaireR(role) {
var returnIDPopup = 0;
\$(\"#annuairePopup\").show();
user = [];
\$.ajax({
type: \"GET\",
// url: '";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaireData");
        echo "',
url: '";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaireR", ["role" => "rolex"]);
        echo "',
async: false,
success: function (data) { // user  = JSON.parse( data );
user = data;
// user  =  data ;
// console.log(\"DataXX: \" + user );
}
}).responseText;

autocomplete(document.getElementById(\"myInput\"), user);
}
\t\t</script>

\t</head>
\t<body>
\t\t<div class=\"popup\">
\t\t\t<div id=\"click\">ok</div>
\t\t\t<div id=\"check\">check</div>
\t\t\t<div onclick=\"selectAnnuaireR( 'ROLE_APP' )\">select APP</div>
\t\t\t<div onclick=\"selectAnnuaireRS( 'ROLE_APP', 1 )\">select APP SESSION</div>


\t\t\t<div id=\"aff\"></div>
\t\t\t<div id=\"annuairePopup\">
\t\t\t\t<form autocomplete=\"off\" action=\"/action_page.php\">
\t\t\t\t\t<div class=\"autocomplete\" style=\"width:300px;\">
\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" name=\"myCountry\" placeholder=\"Country\">
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"envoyer\" type=\"submit\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<script>/*An array containing all the country names in the world:*/</script>

</body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lan/annuairePopup2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 215,  258 => 214,  43 => 1,);
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
\t\t<script>

\t\t\tfunction autocomplete(inp, arr) {

console.log(arr);
/*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
var currentFocus;
/*execute a function when someone writes in the text field:*/
inp.addEventListener(\"input\", function (e) {
var a,
b,
i,
val = this.value;
console.log(val);
/*close any already open lists of autocompleted values*/
closeAllLists();
if (! val) {
return false;
}
currentFocus = -1;
/*create a DIV element that will contain the items (values):*/
a = document.createElement(\"DIV\");
a.setAttribute(\"id\", this.id + \"autocomplete-list\");
a.setAttribute(\"class\", \"autocomplete-items\");
/*append the DIV element as a child of the autocomplete container:*/
this.parentNode.appendChild(a);
/*for each item in the array...*/
// for (i = 0; i < arr.length; i++) {
for ([xkey, xval] of Object.entries(arr)) {
var item = xval;
var itemId = xkey;
console.log(itemId);

/*check if the item starts with the same letters as the text field value:*/
if (item.substr(0, val.length).toUpperCase() == val.toUpperCase()) { /*create a DIV element for each matching element:*/
b = document.createElement(\"DIV\");
/*make the matching letters bold:*/
b.innerHTML = \"<strong>\" + item.substr(0, val.length) + \"</strong>\";
b.innerHTML += item.substr(val.length);
/*insert a input field that will hold the current array item's value:*/
b.innerHTML += \"<input type='hidden' value='\" + itemId + \"'>\";
/*execute a function when someone clicks on the item value (DIV element):*/
b.addEventListener(\"click\", function (e) {
console.log(\"klik\");
/*insert the value for the autocomplete text field:*/
var id = this.getElementsByTagName(\"input\")[0].value;
inp.value = arr[id];
returnIDPopup = id;
console.log(inp.value);
console.log(id);
\$(\"#annuairePopup\").hide();
/*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
closeAllLists();
});
a.appendChild(b);
}
}
});
/*execute a function presses a key on the keyboard:*/
inp.addEventListener(\"keydown\", function (e) {
var x = document.getElementById(this.id + \"autocomplete-list\");
if (x) 
x = x.getElementsByTagName(\"div\");

if (e.keyCode == 40) { /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
currentFocus++;
/*and and make the current item more visible:*/
addActive(x);
} else if (e.keyCode == 38) {
// up
/*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
currentFocus--;
/*and and make the current item more visible:*/
addActive(x);
} else if (e.keyCode == 13) { /*If the ENTER key is pressed, prevent the form from being submitted,*/
e.preventDefault();
if (currentFocus > -1) { /*and simulate a click on the \"active\" item:*/
if (x) 
x[currentFocus].click();

}
}
});
function addActive(x) { /*a function to classify an item as \"active\":*/
if (! x) 
return false;

/*start by removing the \"active\" class on all items:*/
removeActive(x);
if (currentFocus >= x.length) 
currentFocus = 0;

if (currentFocus < 0) 
currentFocus = (x.length - 1);

/*add class \"autocomplete-active\":*/
x[currentFocus].classList.add(\"autocomplete-active\");
}
function removeActive(x) { /*a function to remove the \"active\" class from all autocomplete items:*/
for (var i = 0; i < x.length; i++) {
x[i].classList.remove(\"autocomplete-active\");
}
}
function closeAllLists(elmnt) { /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
var x = document.getElementsByClassName(\"autocomplete-items\");
for (var i = 0; i < x.length; i++) {
if (elmnt != x[i] && elmnt != inp) {
x[i].parentNode.removeChild(x[i]);
}
}
}
/*execute a function when someone clicks in the document:*/
document.addEventListener(\"click\", function (e) {
closeAllLists(e.target);
});
}


var returnIDPopup = 0;
\$(document).ready(function () {
\$(\"#annuairePopup\").hide();
\$(\"#click\").click(function () {
\$(\"#annuairePopup\").show();
})
\$(\"#check\").click(function () {
\$(\"#aff\").text(returnIDPopup);
})
})

function selectAnnuaireR(role) {
var returnIDPopup = 0;
\$(\"#annuairePopup\").show();
user = [];
\$.ajax({
type: \"GET\",
// url: '{{path('annuaireData')}}',
url: '{{ path('annuaireR', {role:'rolex'}) }}',
async: false,
success: function (data) { // user  = JSON.parse( data );
user = data;
// user  =  data ;
// console.log(\"DataXX: \" + user );
}
}).responseText;

autocomplete(document.getElementById(\"myInput\"), user);
}
\t\t</script>

\t</head>
\t<body>
\t\t<div class=\"popup\">
\t\t\t<div id=\"click\">ok</div>
\t\t\t<div id=\"check\">check</div>
\t\t\t<div onclick=\"selectAnnuaireR( 'ROLE_APP' )\">select APP</div>
\t\t\t<div onclick=\"selectAnnuaireRS( 'ROLE_APP', 1 )\">select APP SESSION</div>


\t\t\t<div id=\"aff\"></div>
\t\t\t<div id=\"annuairePopup\">
\t\t\t\t<form autocomplete=\"off\" action=\"/action_page.php\">
\t\t\t\t\t<div class=\"autocomplete\" style=\"width:300px;\">
\t\t\t\t\t\t<input id=\"myInput\" type=\"text\" name=\"myCountry\" placeholder=\"Country\">
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"envoyer\" type=\"submit\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<script>/*An array containing all the country names in the world:*/</script>

</body></html>
", "lan/annuairePopup2.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\annuairePopup2.html.twig");
    }
}

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

/* lan/annuaire.html.twig */
class __TwigTemplate_35ab4b0c379e2e358b4ddb998f4d625757ea2538e94ee0e141c4bce178e7a24b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/annuaire.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
</head>     
<body>

<h2>Autocomplete</h2>

<p>Start typing:</p>

<!--Make sure the form has the autocomplete function switched off:-->
<form autocomplete=\"off\" action=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultAnnuaire");
        echo "\">
  <div class=\"autocomplete\" style=\"width:300px;\">
    <input id=\"myInput\" type=\"text\" name=\"myCountry\" placeholder=\"Country\">
  </div>
  <input type=\"submit\">
</form>

<script>
function autocomplete(inp, arr) {

  console.log( arr );
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener(\"input\", function(e) {
      var a, b, i, val = this.value;
      console.log( val );
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement(\"DIV\");
      a.setAttribute(\"id\", this.id + \"autocomplete-list\");
      a.setAttribute(\"class\", \"autocomplete-items\");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      //for (i = 0; i < arr.length; i++) {
      for ( [xkey, xval ] of Object.entries(arr) )  {
        var item = xval;
        var itemId = xkey;
        console.log( itemId );
        
        /*check if the item starts with the same letters as the text field value:*/
        if (item.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement(\"DIV\");
          /*make the matching letters bold:*/
          b.innerHTML = \"<strong>\" + item.substr(0, val.length) + \"</strong>\";
          b.innerHTML += item.substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += \"<input type='hidden' value='\" + itemId + \"'>\";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener(\"click\", function(e) 
          {
              console.log( \"klik\");
              /*insert the value for the autocomplete text field:*/
              var id =  this.getElementsByTagName(\"input\")[0].value;
              inp.value = arr[ id ];
              console.log( inp.value );
              console.log( id );
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener(\"keydown\", function(e) {
      var x = document.getElementById(this.id + \"autocomplete-list\");
      if (x) x = x.getElementsByTagName(\"div\");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the \"active\" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as \"active\":*/
    if (!x) return false;
    /*start by removing the \"active\" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class \"autocomplete-active\":*/
    x[currentFocus].classList.add(\"autocomplete-active\");
  }
  function removeActive(x) {
    /*a function to remove the \"active\" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove(\"autocomplete-active\");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
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

/*An array containing all the country names in the world:*/


var countries = [\"Afghanistan\",\"Albania\",\"Algeria\",\"Andorra\",\"Angola\",\"Anguilla\",\"Antigua & Barbuda\",\"Argentina\",\"Armenia\",\"Aruba\",\"Australia\",\"Austria\",\"Azerbaijan\",\"Bahamas\",\"Bahrain\",\"Bangladesh\",\"Barbados\",\"Belarus\",\"Belgium\",\"Belize\",\"Benin\",\"Bermuda\",\"Bhutan\",\"Bolivia\",\"Bosnia & Herzegovina\",\"Botswana\",\"Brazil\",\"British Virgin Islands\",\"Brunei\",\"Bulgaria\",\"Burkina Faso\",\"Burundi\",\"Cambodia\",\"Cameroon\",\"Canada\",\"Cape Verde\",\"Cayman Islands\",\"Central Arfrican Republic\",\"Chad\",\"Chile\",\"China\",\"Colombia\",\"Congo\",\"Cook Islands\",\"Costa Rica\",\"Cote D Ivoire\",\"Croatia\",\"Cuba\",\"Curacao\",\"Cyprus\",\"Czech Republic\",\"Denmark\",\"Djibouti\",\"Dominica\",\"Dominican Republic\",\"Ecuador\",\"Egypt\",\"El Salvador\",\"Equatorial Guinea\",\"Eritrea\",\"Estonia\",\"Ethiopia\",\"Falkland Islands\",\"Faroe Islands\",\"Fiji\",\"Finland\",\"France\",\"French Polynesia\",\"French West Indies\",\"Gabon\",\"Gambia\",\"Georgia\",\"Germany\",\"Ghana\",\"Gibraltar\",\"Greece\",\"Greenland\",\"Grenada\",\"Guam\",\"Guatemala\",\"Guernsey\",\"Guinea\",\"Guinea Bissau\",\"Guyana\",\"Haiti\",\"Honduras\",\"Hong Kong\",\"Hungary\",\"Iceland\",\"India\",\"Indonesia\",\"Iran\",\"Iraq\",\"Ireland\",\"Isle of Man\",\"Israel\",\"Italy\",\"Jamaica\",\"Japan\",\"Jersey\",\"Jordan\",\"Kazakhstan\",\"Kenya\",\"Kiribati\",\"Kosovo\",\"Kuwait\",\"Kyrgyzstan\",\"Laos\",\"Latvia\",\"Lebanon\",\"Lesotho\",\"Liberia\",\"Libya\",\"Liechtenstein\",\"Lithuania\",\"Luxembourg\",\"Macau\",\"Macedonia\",\"Madagascar\",\"Malawi\",\"Malaysia\",\"Maldives\",\"Mali\",\"Malta\",\"Marshall Islands\",\"Mauritania\",\"Mauritius\",\"Mexico\",\"Micronesia\",\"Moldova\",\"Monaco\",\"Mongolia\",\"Montenegro\",\"Montserrat\",\"Morocco\",\"Mozambique\",\"Myanmar\",\"Namibia\",\"Nauro\",\"Nepal\",\"Netherlands\",\"Netherlands Antilles\",\"New Caledonia\",\"New Zealand\",\"Nicaragua\",\"Niger\",\"Nigeria\",\"North Korea\",\"Norway\",\"Oman\",\"Pakistan\",\"Palau\",\"Palestine\",\"Panama\",\"Papua New Guinea\",\"Paraguay\",\"Peru\",\"Philippines\",\"Poland\",\"Portugal\",\"Puerto Rico\",\"Qatar\",\"Reunion\",\"Romania\",\"Russia\",\"Rwanda\",\"Saint Pierre & Miquelon\",\"Samoa\",\"San Marino\",\"Sao Tome and Principe\",\"Saudi Arabia\",\"Senegal\",\"Serbia\",\"Seychelles\",\"Sierra Leone\",\"Singapore\",\"Slovakia\",\"Slovenia\",\"Solomon Islands\",\"Somalia\",\"South Africa\",\"South Korea\",\"South Sudan\",\"Spain\",\"Sri Lanka\",\"St Kitts & Nevis\",\"St Lucia\",\"St Vincent\",\"Sudan\",\"Suriname\",\"Swaziland\",\"Sweden\",\"Switzerland\",\"Syria\",\"Taiwan\",\"Tajikistan\",\"Tanzania\",\"Thailand\",\"Timor L'Este\",\"Togo\",\"Tonga\",\"Trinidad & Tobago\",\"Tunisia\",\"Turkey\",\"Turkmenistan\",\"Turks & Caicos\",\"Tuvalu\",\"Uganda\",\"Ukraine\",\"United Arab Emirates\",\"United Kingdom\",\"United States of America\",\"Uruguay\",\"Uzbekistan\",\"Vanuatu\",\"Vatican City\",\"Venezuela\",\"Vietnam\",\"Virgin Islands (US)\",\"Yemen\",\"Zambia\",\"Zimbabwe\"];

var user = [];
\$.ajax({
        type: \"GET\",
        url: '";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuaireData");
        echo "',
        async: false,
        success : function(data) {
            //user  = JSON.parse( data );
            user  =  data ;
            //user  =  data ;
            console.log(\"Data: \" + user );
        }
    }).responseText;
/*initiate the autocomplete function on the \"myInput\" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById(\"myInput\"), user );
</script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lan/annuaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 203,  121 => 77,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
</head>     
<body>

<h2>Autocomplete</h2>

<p>Start typing:</p>

<!--Make sure the form has the autocomplete function switched off:-->
<form autocomplete=\"off\" action=\"{{ path('resultAnnuaire') }}\">
  <div class=\"autocomplete\" style=\"width:300px;\">
    <input id=\"myInput\" type=\"text\" name=\"myCountry\" placeholder=\"Country\">
  </div>
  <input type=\"submit\">
</form>

<script>
function autocomplete(inp, arr) {

  console.log( arr );
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener(\"input\", function(e) {
      var a, b, i, val = this.value;
      console.log( val );
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement(\"DIV\");
      a.setAttribute(\"id\", this.id + \"autocomplete-list\");
      a.setAttribute(\"class\", \"autocomplete-items\");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      //for (i = 0; i < arr.length; i++) {
      for ( [xkey, xval ] of Object.entries(arr) )  {
        var item = xval;
        var itemId = xkey;
        console.log( itemId );
        
        /*check if the item starts with the same letters as the text field value:*/
        if (item.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement(\"DIV\");
          /*make the matching letters bold:*/
          b.innerHTML = \"<strong>\" + item.substr(0, val.length) + \"</strong>\";
          b.innerHTML += item.substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += \"<input type='hidden' value='\" + itemId + \"'>\";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener(\"click\", function(e) 
          {
              console.log( \"klik\");
              /*insert the value for the autocomplete text field:*/
              var id =  this.getElementsByTagName(\"input\")[0].value;
              inp.value = arr[ id ];
              console.log( inp.value );
              console.log( id );
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener(\"keydown\", function(e) {
      var x = document.getElementById(this.id + \"autocomplete-list\");
      if (x) x = x.getElementsByTagName(\"div\");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the \"active\" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as \"active\":*/
    if (!x) return false;
    /*start by removing the \"active\" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class \"autocomplete-active\":*/
    x[currentFocus].classList.add(\"autocomplete-active\");
  }
  function removeActive(x) {
    /*a function to remove the \"active\" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove(\"autocomplete-active\");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
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

/*An array containing all the country names in the world:*/


var countries = [\"Afghanistan\",\"Albania\",\"Algeria\",\"Andorra\",\"Angola\",\"Anguilla\",\"Antigua & Barbuda\",\"Argentina\",\"Armenia\",\"Aruba\",\"Australia\",\"Austria\",\"Azerbaijan\",\"Bahamas\",\"Bahrain\",\"Bangladesh\",\"Barbados\",\"Belarus\",\"Belgium\",\"Belize\",\"Benin\",\"Bermuda\",\"Bhutan\",\"Bolivia\",\"Bosnia & Herzegovina\",\"Botswana\",\"Brazil\",\"British Virgin Islands\",\"Brunei\",\"Bulgaria\",\"Burkina Faso\",\"Burundi\",\"Cambodia\",\"Cameroon\",\"Canada\",\"Cape Verde\",\"Cayman Islands\",\"Central Arfrican Republic\",\"Chad\",\"Chile\",\"China\",\"Colombia\",\"Congo\",\"Cook Islands\",\"Costa Rica\",\"Cote D Ivoire\",\"Croatia\",\"Cuba\",\"Curacao\",\"Cyprus\",\"Czech Republic\",\"Denmark\",\"Djibouti\",\"Dominica\",\"Dominican Republic\",\"Ecuador\",\"Egypt\",\"El Salvador\",\"Equatorial Guinea\",\"Eritrea\",\"Estonia\",\"Ethiopia\",\"Falkland Islands\",\"Faroe Islands\",\"Fiji\",\"Finland\",\"France\",\"French Polynesia\",\"French West Indies\",\"Gabon\",\"Gambia\",\"Georgia\",\"Germany\",\"Ghana\",\"Gibraltar\",\"Greece\",\"Greenland\",\"Grenada\",\"Guam\",\"Guatemala\",\"Guernsey\",\"Guinea\",\"Guinea Bissau\",\"Guyana\",\"Haiti\",\"Honduras\",\"Hong Kong\",\"Hungary\",\"Iceland\",\"India\",\"Indonesia\",\"Iran\",\"Iraq\",\"Ireland\",\"Isle of Man\",\"Israel\",\"Italy\",\"Jamaica\",\"Japan\",\"Jersey\",\"Jordan\",\"Kazakhstan\",\"Kenya\",\"Kiribati\",\"Kosovo\",\"Kuwait\",\"Kyrgyzstan\",\"Laos\",\"Latvia\",\"Lebanon\",\"Lesotho\",\"Liberia\",\"Libya\",\"Liechtenstein\",\"Lithuania\",\"Luxembourg\",\"Macau\",\"Macedonia\",\"Madagascar\",\"Malawi\",\"Malaysia\",\"Maldives\",\"Mali\",\"Malta\",\"Marshall Islands\",\"Mauritania\",\"Mauritius\",\"Mexico\",\"Micronesia\",\"Moldova\",\"Monaco\",\"Mongolia\",\"Montenegro\",\"Montserrat\",\"Morocco\",\"Mozambique\",\"Myanmar\",\"Namibia\",\"Nauro\",\"Nepal\",\"Netherlands\",\"Netherlands Antilles\",\"New Caledonia\",\"New Zealand\",\"Nicaragua\",\"Niger\",\"Nigeria\",\"North Korea\",\"Norway\",\"Oman\",\"Pakistan\",\"Palau\",\"Palestine\",\"Panama\",\"Papua New Guinea\",\"Paraguay\",\"Peru\",\"Philippines\",\"Poland\",\"Portugal\",\"Puerto Rico\",\"Qatar\",\"Reunion\",\"Romania\",\"Russia\",\"Rwanda\",\"Saint Pierre & Miquelon\",\"Samoa\",\"San Marino\",\"Sao Tome and Principe\",\"Saudi Arabia\",\"Senegal\",\"Serbia\",\"Seychelles\",\"Sierra Leone\",\"Singapore\",\"Slovakia\",\"Slovenia\",\"Solomon Islands\",\"Somalia\",\"South Africa\",\"South Korea\",\"South Sudan\",\"Spain\",\"Sri Lanka\",\"St Kitts & Nevis\",\"St Lucia\",\"St Vincent\",\"Sudan\",\"Suriname\",\"Swaziland\",\"Sweden\",\"Switzerland\",\"Syria\",\"Taiwan\",\"Tajikistan\",\"Tanzania\",\"Thailand\",\"Timor L'Este\",\"Togo\",\"Tonga\",\"Trinidad & Tobago\",\"Tunisia\",\"Turkey\",\"Turkmenistan\",\"Turks & Caicos\",\"Tuvalu\",\"Uganda\",\"Ukraine\",\"United Arab Emirates\",\"United Kingdom\",\"United States of America\",\"Uruguay\",\"Uzbekistan\",\"Vanuatu\",\"Vatican City\",\"Venezuela\",\"Vietnam\",\"Virgin Islands (US)\",\"Yemen\",\"Zambia\",\"Zimbabwe\"];

var user = [];
\$.ajax({
        type: \"GET\",
        url: '{{path('annuaireData')}}',
        async: false,
        success : function(data) {
            //user  = JSON.parse( data );
            user  =  data ;
            //user  =  data ;
            console.log(\"Data: \" + user );
        }
    }).responseText;
/*initiate the autocomplete function on the \"myInput\" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById(\"myInput\"), user );
</script>

</body>
</html>
", "lan/annuaire.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\annuaire.html.twig");
    }
}

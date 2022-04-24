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

/* dash/dashDocumentInclude.html.twig */
class __TwigTemplate_08c749367a4ac2cd49a364ef8c2e701d657a37c2dcdf201b29457551d3fe495f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashDocumentInclude.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashDocumentInclude.html.twig"));

        // line 1
        echo "<div class=\"accordion-item\">
    <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingThree\">
        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseThree\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseThree\">
            <h2 class=\"txt-dark\">Documents</h2>
        </button>
    </h2>
    <div id=\"panelsStayOpen-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingThree\">
        <div class=\"accordion-body\">
                <div class=\"row\">
                <div class=\"col-6\">    
                    <h3>Mes documents :</h3>
                    <label for=\"listDoc\">Chercher un document :</label>
                    <input list=\"documents\" type=\"text\" id=\"listDoc\">
                    <datalist id=\"documents\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 16
            echo "                            <option id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "d_id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "d_titre", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "d_fileName", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </datalist>
                </div>
                <div class=\"col-4 mt-5\">
                    <button onclick='seeDoc2(";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo ")' class=\"mt-4\">
                        <i class=\"fas fa-solid fa-info\" style=\"font-size:20px;color:blue;padding:3px 6px 3px 6px;\"></i>
                    </button>
                    <button onclick='downloadDoc(\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download1");
        echo "\");'>
                        <i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;padding:3px;\"></i>
                    </button>
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload", ["retour" => (isset($context["retour"]) || array_key_exists("retour", $context) ? $context["retour"] : (function () { throw new RuntimeError('Variable "retour" does not exist.', 27, $this->source); })())]), "html", null, true);
        echo "\">
                        <i class=\"fas fa-solid fa-upload\" style=\"font-size:20px;color:green;padding:3px;\"></i>
                    </a>
                </div>
            </div>
        </div>
            <div  id='infosDoc' class=\"invisible col-6\" style=\"color:black;background-color:white;height:50pt;overflow:auto;\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dash/dashDocumentInclude.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  87 => 24,  81 => 21,  76 => 18,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accordion-item\">
    <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingThree\">
        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseThree\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseThree\">
            <h2 class=\"txt-dark\">Documents</h2>
        </button>
    </h2>
    <div id=\"panelsStayOpen-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingThree\">
        <div class=\"accordion-body\">
                <div class=\"row\">
                <div class=\"col-6\">    
                    <h3>Mes documents :</h3>
                    <label for=\"listDoc\">Chercher un document :</label>
                    <input list=\"documents\" type=\"text\" id=\"listDoc\">
                    <datalist id=\"documents\">
                        {% for doc in document %}
                            <option id=\"{{doc.d_id}}\" value=\"{{doc.d_titre}}\">{{doc.d_fileName}}</option>
                        {% endfor %}
                    </datalist>
                </div>
                <div class=\"col-4 mt-5\">
                    <button onclick='seeDoc2({{user.id}})' class=\"mt-4\">
                        <i class=\"fas fa-solid fa-info\" style=\"font-size:20px;color:blue;padding:3px 6px 3px 6px;\"></i>
                    </button>
                    <button onclick='downloadDoc(\"{{ path('download1') }}\");'>
                        <i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;padding:3px;\"></i>
                    </button>
                    <a href=\"{{ path('upload', {'retour': retour}) }}\">
                        <i class=\"fas fa-solid fa-upload\" style=\"font-size:20px;color:green;padding:3px;\"></i>
                    </a>
                </div>
            </div>
        </div>
            <div  id='infosDoc' class=\"invisible col-6\" style=\"color:black;background-color:white;height:50pt;overflow:auto;\">
            </div>
        </div>
    </div>
</div>
", "dash/dashDocumentInclude.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\dash\\dashDocumentInclude.html.twig");
    }
}

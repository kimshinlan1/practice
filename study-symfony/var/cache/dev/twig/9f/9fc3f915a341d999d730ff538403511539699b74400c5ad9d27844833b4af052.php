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

/* welcome/welcome.html.twig */
class __TwigTemplate_f754f2491912197d3113268dd4d2f36e93241237b82de7bedd13ffde781f6d4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/welcome.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Let's Explore Symfony 4</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\"
          integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\"
          crossorigin=\"anonymous\">
</head>

<body>
<header>
    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
        <div class=\"container\">

            <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome_page");
        echo "\">Home</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\" class=\"nav-link\"></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link\"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>

<main role=\"main\" class=\"container main\">
    <div>
        <h1>Let's Explore Symfony 4</h1>
        <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum sapien mauris, venenatis
            facilisis neque tincidunt vel. Maecenas vel felis vel turpis scelerisque eleifend. Fusce nec purus egestas,
            efficitur nisi ac, ultrices nulla. Pellentesque eu mollis tortor, in mollis nisl. Maecenas rhoncus quam non
            lacinia mollis.</p>
    </div>
</main>

<h1>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["my_variable"]) || array_key_exists("my_variable", $context) ? $context["my_variable"] : (function () { throw new RuntimeError('Variable "my_variable" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</h1>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "welcome/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  81 => 31,  75 => 28,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Let's Explore Symfony 4</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\"
          integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\"
          crossorigin=\"anonymous\">
</head>

<body>
<header>
    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
        <div class=\"container\">

            <a class=\"navbar-brand\" href=\"{{path('welcome_page')}}\">Home</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('home_page') }}\" class=\"nav-link\"></a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('contact') }}\" class=\"nav-link\"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>

<main role=\"main\" class=\"container main\">
    <div>
        <h1>Let's Explore Symfony 4</h1>
        <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum sapien mauris, venenatis
            facilisis neque tincidunt vel. Maecenas vel felis vel turpis scelerisque eleifend. Fusce nec purus egestas,
            efficitur nisi ac, ultrices nulla. Pellentesque eu mollis tortor, in mollis nisl. Maecenas rhoncus quam non
            lacinia mollis.</p>
    </div>
</main>

<h1>{{ my_variable }}</h1>
</body>
</html>", "welcome/welcome.html.twig", "/home/user/Documents/practice/practice/study-symfony/templates/welcome/welcome.html.twig");
    }
}

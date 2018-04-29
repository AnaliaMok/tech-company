<?php

/* C:\xampp\htdocs\tech-company/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_d078bb30475a742cc6a46a2f0ca88163837aa24a43a7475892823456a4362f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>Tech Company | ";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array())), "html", null, true);
        echo "</title>
  <link href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/css/styles.css"));
        // line 14
        echo "\" rel=\"stylesheet\">
  ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "
</head>
<body>

\t";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "
  ";
        // line 23
        echo "
  <section id=\"page\" class=\"container\">
    ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 26
        echo "  </section>

  ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "
  <script src=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"));
        // line 38
        echo "\"></script>
  ";
        // line 39
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 40
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 41
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tech-company/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  81 => 40,  74 => 39,  71 => 38,  69 => 30,  66 => 29,  62 => 28,  58 => 26,  56 => 25,  52 => 23,  49 => 21,  45 => 20,  39 => 16,  36 => 15,  33 => 14,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>Tech Company | {{this.page.baseFileName|capitalize}}</title>
  <link href=\"{{ [
    'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
    'assets/vendor/font-awesome/css/font-awesome.min.css',
    'assets/vendor/animate.css/animate.min.css',
    'assets/vendor/plyr/dist/plyr.css',
    'assets/css/styles.css',
  ]|theme }}\" rel=\"stylesheet\">
  {% styles %}

</head>
<body>

\t{% partial 'navbar' %}

  {# {% partial 'jumbotron' %} #}

  <section id=\"page\" class=\"container\">
    {% page %}
  </section>

  {% partial 'footer' %}

  <script src=\"{{ [
    'assets/vendor/jquery/dist/jquery.min.js',
    'assets/vendor/tether/dist/js/tether.min.js',
    'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
    'assets/vendor/wow/dist/wow.min.js',
    'assets/vendor/holderjs/holder.min.js',
    'assets/vendor/plyr/dist/plyr.js',
    'assets/js/scripts.js'
  ]|theme }}\"></script>
  {% framework extras %}
  {% scripts %}
</body>
</html>", "C:\\xampp\\htdocs\\tech-company/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}

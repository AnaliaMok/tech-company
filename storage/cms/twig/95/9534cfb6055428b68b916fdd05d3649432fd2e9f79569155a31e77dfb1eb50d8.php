<?php

/* C:\xampp\htdocs\tech-company/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_1099f6676596239f7bf1971c4f141e7eb0c108eb937f7a9e7c7b7b8a278efa88 extends Twig_Template
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
        echo "<section id=\"jumbotron\" class=\"m-t-3\">
  <div class=\"jumbotron\">
    <div class=\"container text-xs-center\">
      ";
        // line 4
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 5
        echo "      <h1 class=\"display-3\">Tech Company</h1>
      <p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class=\"m-y-2\">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class=\"lead\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" role=\"button\">Learn more about us</a>
      </p>
      ";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 13
        echo "    </div>
  </div>
</section>

";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("services"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tech-company/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 13,  37 => 4,  32 => 10,  25 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"jumbotron\" class=\"m-t-3\">
  <div class=\"jumbotron\">
    <div class=\"container text-xs-center\">
      {% placeholder jumbotron default %}
      <h1 class=\"display-3\">Tech Company</h1>
      <p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class=\"m-y-2\">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class=\"lead\">
        <a class=\"btn btn-primary btn-lg\" href=\"{{ 'about'|page }}\" role=\"button\">Learn more about us</a>
      </p>
      {% endplaceholder %}
    </div>
  </div>
</section>

{% component 'services' %}", "C:\\xampp\\htdocs\\tech-company/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}

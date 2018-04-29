<?php

/* C:\xampp\htdocs\tech-company/plugins/amok/services/components/service/default.htm */
class __TwigTemplate_e3044b6d515ad6af668520fde9854ec113d13540bb2b39c773ca9c1542e2bb60 extends Twig_Template
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
        $context["services"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "services", array());
        // line 2
        echo "<ul class=\"services\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 4
            echo "  <li class=\"services__item\">
    <img src=\"";
            // line 5
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "service_icon", array()));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "service_name", array()), "html", null, true);
            echo "\">
    <h2 class=\"services__item__title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "service_name", array()), "html", null, true);
            echo "</h2>
    <p class=\"services__item__descr\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "service_description", array()), "html", null, true);
            echo "</p>
  </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tech-company/plugins/amok/services/components/service/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  41 => 7,  37 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set services = __SELF__.services %}
<ul class=\"services\">
  {% for service in services %}
  <li class=\"services__item\">
    <img src=\"{{ service.service_icon|media }}\" alt=\"{{ service.service_name }}\">
    <h2 class=\"services__item__title\">{{ service.service_name }}</h2>
    <p class=\"services__item__descr\">{{ service.service_description }}</p>
  </li>
  {% endfor %}
</ul>
", "C:\\xampp\\htdocs\\tech-company/plugins/amok/services/components/service/default.htm", "");
    }
}

<?php

/* crear-ticket/master.twig */
class __TwigTemplate_6dfdf5ed088246b088c1bdda916c74412e23866d25b1b9e5ba9c1ac76b887ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "crear-ticket/master.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/master/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<a class=\"btn btn-mat waves-light btn-success\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/crear-anuncio/perdido\" style=\"background-color: white; color: green;\">APORTAR</a>

<a class=\"btn btn-mat waves-light btn-danger text-center\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/crear-anuncio/desaparecido\" style=\"background-color: white; color: red;\">APORTAR</a>

";
    }

    // line 11
    public function block_scripts($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/crear_ticket.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/validar_crear_ticket.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "crear-ticket/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  70 => 19,  64 => 16,  60 => 15,  56 => 14,  50 => 12,  47 => 11,  40 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/master/master.twig' %}

{% block content %}

<a class=\"btn btn-mat waves-light btn-success\" href=\"{{ base_url() }}/crear-anuncio/perdido\" style=\"background-color: white; color: green;\">APORTAR</a>

<a class=\"btn btn-mat waves-light btn-danger text-center\" href=\"{{ base_url() }}/crear-anuncio/desaparecido\" style=\"background-color: white; color: red;\">APORTAR</a>

{% endblock %}

{% block scripts %}
  {{ parent() }}
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crear_ticket.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/validar_crear_ticket.js\"></script>
{% endblock %}", "crear-ticket/master.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-ticket\\master.twig");
    }
}

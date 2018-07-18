<?php

/* crear-usuario/main.twig */
class __TwigTemplate_612568ca111cfce51be9fbbdec6225014be8bf4c9d4b04e673f81692dd978319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "crear-usuario/main.twig", 1);
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
        echo "  <div class=\"page-body text-center\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 7
        $this->loadTemplate("templates/inc/messages.twig", "crear-usuario/main.twig", 7)->display($context);
        // line 8
        echo "      </div>
    <div class=\"col-sm-12\">
      <div class=\"card card-creacion-usuario\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Desaparecida</h3>
        </div>
          <div class=\"f1 card-block form-crear-usuario\">
            ";
        // line 16
        echo "              ";
        $this->loadTemplate("crear-usuario/inc/pasos.twig", "crear-usuario/main.twig", 16)->display($context);
        // line 17
        echo "              <div class=\"m-b-26 box-mensaje-usuario-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            ";
        // line 22
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 28
    public function block_scripts($context, array $blocks = array())
    {
        // line 29
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/crear_usuario.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/app/js/validar_crear_usuario.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "crear-usuario/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  89 => 36,  83 => 33,  79 => 32,  75 => 31,  69 => 29,  66 => 28,  57 => 22,  51 => 17,  48 => 16,  39 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
  <div class=\"page-body text-center\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        {% include 'templates/inc/messages.twig' %}
      </div>
    <div class=\"col-sm-12\">
      <div class=\"card card-creacion-usuario\">
        <div class=\"card-header text-center m-t-10\">
          <h3>Registra Persona Desaparecida</h3>
        </div>
          <div class=\"f1 card-block form-crear-usuario\">
            {# <form role=\"form\" action=\"\" class=\"f1\"> #}
              {% include 'crear-usuario/inc/pasos.twig' %}
              <div class=\"m-b-26 box-mensaje-usuario-creado hide\">
                <div class=\"alert alert-info icons-alert fix-icon-alert\">
                </div>
              </div>
            {# </form> #}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
{% block scripts %}
  {{ parent() }}
  <!-- pickadate -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.time.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/libs/pickadate/js/picker.date.js\"></script>

  <!-- App JS -->
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/crear_usuario.js\"></script>
  <script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/app/js/validar_crear_usuario.js\"></script>
{% endblock %}", "crear-usuario/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\crear-usuario\\main.twig");
    }
}

<?php

/* perfil-usuario/main.twig */
class __TwigTemplate_4a133082045c0b595b0f2f95a615171ff814fbd5f36caced913692edf007f79d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "perfil-usuario/main.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
#perfilf {
  min-height: 145px;
  min-width: 145px;
  max-width: 145px;
  max-height: 145px;
}
</style>
";
        // line 11
        if ((isset($context["datosu"]) ? $context["datosu"] : null)) {
            // line 12
            echo "    ";
            // line 13
            echo "
<div class=\"col-sm-12 col-md-12 col-lg-12\">
    <div class=\"cover-profile\">
        <div class=\"profile-bg-img\">
            <img class=\"profile-bg-img img-fluid\" style=\"max-height: 200px; margin-bottom: 0px;    min-height: 250px;
    min-width: 290px;\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/public/assets/images/social/img1.jpg\" alt=\"bg-img\" >
            <div class=\"card-block user-info\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"media-left\">
                        <a href=\"#\" class=\"profile-image\">
                            <img class=\"user-img img-radius\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/public/assets/images/social/pro_icon.jpg\" alt=\"user-img\" id=\"perfilf\">
                        </a>
                    </div>
                    <div class=\"media-body row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"user-title\" style=\"bottom: 0px;\">
                                <h2>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "nombres", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datosu"]) ? $context["datosu"] : null), "apellidos", array()), "html", null, true);
            echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-lg-12\">
<div class=\"tab-header card\">
<ul class=\"nav nav-tabs md-tabs tab-timeline\" role=\"tablist\" id=\"mytab\">
    <li class=\"nav-item\">
        <a class=\"nav-link active show\" data-toggle=\"tab\" href=\"#personal\" role=\"tab\" aria-selected=\"true\">Informacion Personal</a>
        <div class=\"slide\"></div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#binfo\" role=\"tab\" aria-selected=\"false\">Mis Anuncios</a>
        <div class=\"slide\"></div>
    </li>
    ";
            // line 57
            echo "</ul>
</div>

<div class=\"tab-content\">
<div class=\"tab-pane active show\" id=\"personal\" role=\"tabpanel\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h5 class=\"card-header-text\">Mi Informacion</h5>
        <button id=\"edit-btn\" type=\"button\" class=\"btn btn-sm btn-primary waves-effect waves-light float-right\">
        <i class=\"icofont icofont-edit\"></i>
        </button>
    </div>
    <div class=\"card-block\">
      <div class=\"view-info\">
        <div class=\"col-lg-12\">
          <div class=\"general-info\">
            <div class=\"row\">
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table m-0\">
                    <tbody>
                      <tr><th scope=\"row\">Nombres</th><td>Pedro Gonzales</td></tr>
                      <tr><th scope=\"row\">Sexo</th><td>Hombre</td></tr>
                      <tr><th scope=\"row\">Cumpleaños</th><td>20-04-1996</td></tr>
                      <tr><th scope=\"row\">Profesión</th><td>Estudiante</td></tr>
                      <tr><th scope=\"row\">Localización</th><td>Chiclayo, Lambayeque</td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table\">
                    <tbody>
                      <tr><th scope=\"row\">Email</th><td>PedroG@example.com</td></tr>
                      <tr><th scope=\"row\">Numero Telefono</th><td>979955259</td></tr>
                      <tr><th scope=\"row\">Twitter</th><td><a href=\"//twitter.com\">@GonzalesP</a></td></tr>
                      <tr><th scope=\"row\">Skype</th><td><a href=\"//twitter.com\">GonzalesP.skype</a></td></tr>
                      <tr><th scope=\"row\">Facebook</th><td><a href=\"//fb.com\">www.facebook.com/GonzalesP</a></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- tab pane personal end -->

<!-- tab pane info start -->
<div class=\"tab-pane\" id=\"binfo\" role=\"tabpanel\">
    <!-- info card start -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"card-header-text\">Mis anuncios</h5>
        </div>
        <div class=\"card-block\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card b-l-success business-info services m-b-20\">
                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">PERSONA PERDIDA</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-edit\"></i> Editar</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-ui-delete\"></i> Eliminar</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-eye-alt\"></i> Ver</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">Se encontro tal dia a la hora, lugar, decripcion de como y donde fue encontrado esta persona perdida</p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card b-l-danger business-info services\">

                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">PERSONA DESAPARECIDA</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-edit\"></i> Edit</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-ui-delete\"></i> Delete</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-eye-alt\"></i> View</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">Desaparecido tal dia a la hora, lugar, decripcion de como y donde fue vista esta persona desaparecida.</p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card b-l-info business-info services\">
                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">PERSONA ENCONTRADA</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-edit\"></i> Edit</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-ui-delete\"></i> Delete</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-eye-alt\"></i> View</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">La persona desaparecida ya fue encontrada con tal detalles.</p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- tab pane info end -->

</div>
";
            // line 260
            echo "
";
        }
    }

    // line 264
    public function block_scripts($context, array $blocks = array())
    {
        // line 265
        echo "  ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "perfil-usuario/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 265,  257 => 264,  251 => 260,  95 => 57,  70 => 29,  61 => 23,  53 => 18,  46 => 13,  44 => 12,  42 => 11,  32 => 3,  29 => 2,  11 => 1,);
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
<style type=\"text/css\">
#perfilf {
  min-height: 145px;
  min-width: 145px;
  max-width: 145px;
  max-height: 145px;
}
</style>
{% if datosu %}
    {# {% for datos in datosu %} #}

<div class=\"col-sm-12 col-md-12 col-lg-12\">
    <div class=\"cover-profile\">
        <div class=\"profile-bg-img\">
            <img class=\"profile-bg-img img-fluid\" style=\"max-height: 200px; margin-bottom: 0px;    min-height: 250px;
    min-width: 290px;\" src=\"{{ base_url() }}/public/assets/images/social/img1.jpg\" alt=\"bg-img\" >
            <div class=\"card-block user-info\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"media-left\">
                        <a href=\"#\" class=\"profile-image\">
                            <img class=\"user-img img-radius\" src=\"{{ base_url() }}/public/assets/images/social/pro_icon.jpg\" alt=\"user-img\" id=\"perfilf\">
                        </a>
                    </div>
                    <div class=\"media-body row\">
                        <div class=\"col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"user-title\" style=\"bottom: 0px;\">
                                <h2>{{ datosu.nombres }} {{ datosu.apellidos }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-lg-12\">
<div class=\"tab-header card\">
<ul class=\"nav nav-tabs md-tabs tab-timeline\" role=\"tablist\" id=\"mytab\">
    <li class=\"nav-item\">
        <a class=\"nav-link active show\" data-toggle=\"tab\" href=\"#personal\" role=\"tab\" aria-selected=\"true\">Informacion Personal</a>
        <div class=\"slide\"></div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#binfo\" role=\"tab\" aria-selected=\"false\">Mis Anuncios</a>
        <div class=\"slide\"></div>
    </li>
    {# <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#contacts\" role=\"tab\" aria-selected=\"false\">User's Contacts</a>
        <div class=\"slide\"></div>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"tab\" href=\"#review\" role=\"tab\" aria-selected=\"false\">Reviews</a>
        <div class=\"slide\"></div>
    </li> #}
</ul>
</div>

<div class=\"tab-content\">
<div class=\"tab-pane active show\" id=\"personal\" role=\"tabpanel\">
  <div class=\"card\">
    <div class=\"card-header\">
      <h5 class=\"card-header-text\">Mi Informacion</h5>
        <button id=\"edit-btn\" type=\"button\" class=\"btn btn-sm btn-primary waves-effect waves-light float-right\">
        <i class=\"icofont icofont-edit\"></i>
        </button>
    </div>
    <div class=\"card-block\">
      <div class=\"view-info\">
        <div class=\"col-lg-12\">
          <div class=\"general-info\">
            <div class=\"row\">
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table m-0\">
                    <tbody>
                      <tr><th scope=\"row\">Nombres</th><td>Pedro Gonzales</td></tr>
                      <tr><th scope=\"row\">Sexo</th><td>Hombre</td></tr>
                      <tr><th scope=\"row\">Cumpleaños</th><td>20-04-1996</td></tr>
                      <tr><th scope=\"row\">Profesión</th><td>Estudiante</td></tr>
                      <tr><th scope=\"row\">Localización</th><td>Chiclayo, Lambayeque</td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class=\"col-lg-12 col-xl-6\">
                <div class=\"table-responsive\">
                  <table class=\"table\">
                    <tbody>
                      <tr><th scope=\"row\">Email</th><td>PedroG@example.com</td></tr>
                      <tr><th scope=\"row\">Numero Telefono</th><td>979955259</td></tr>
                      <tr><th scope=\"row\">Twitter</th><td><a href=\"//twitter.com\">@GonzalesP</a></td></tr>
                      <tr><th scope=\"row\">Skype</th><td><a href=\"//twitter.com\">GonzalesP.skype</a></td></tr>
                      <tr><th scope=\"row\">Facebook</th><td><a href=\"//fb.com\">www.facebook.com/GonzalesP</a></td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- tab pane personal end -->

<!-- tab pane info start -->
<div class=\"tab-pane\" id=\"binfo\" role=\"tabpanel\">
    <!-- info card start -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"card-header-text\">Mis anuncios</h5>
        </div>
        <div class=\"card-block\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card b-l-success business-info services m-b-20\">
                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">PERSONA PERDIDA</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-edit\"></i> Editar</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-ui-delete\"></i> Eliminar</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-eye-alt\"></i> Ver</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">Se encontro tal dia a la hora, lugar, decripcion de como y donde fue encontrado esta persona perdida</p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card b-l-danger business-info services\">

                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">PERSONA DESAPARECIDA</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-edit\"></i> Edit</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-ui-delete\"></i> Delete</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-eye-alt\"></i> View</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">Desaparecido tal dia a la hora, lugar, decripcion de como y donde fue vista esta persona desaparecida.</p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card b-l-info business-info services\">
                        <div class=\"card-header\">
                            <div class=\"service-header\">
                                <a href=\"#\">
                                    <h5 class=\"card-header-text\">PERSONA ENCONTRADA</h5>
                                </a>
                            </div>
                            <span class=\"dropdown-toggle addon-btn text-muted float-right service-btn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" role=\"tooltip\">
                            </span>
                            <div class=\"dropdown-menu dropdown-menu-right b-none services-list\">
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-edit\"></i> Edit</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-ui-delete\"></i> Delete</a>
                                <a class=\"dropdown-item\" href=\"#!\"><i class=\"icofont icofont-eye-alt\"></i> View</a>
                            </div>
                        </div>
                        <div class=\"card-block\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"task-detail\">La persona desaparecida ya fue encontrada con tal detalles.</p>
                                </div>
                                <!-- end of col-sm-8 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-block -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- tab pane info end -->

</div>
{# <div class=\"agregarP\" id=\"agregarP\">
<div class=\"col-xl-6 col-md-12\">
    <div class=\"card user-card-full\">
        <div class=\"row m-l-0 m-r-0\">
            <div class=\"col-sm-4 bg-c-blue user-profile\">
                <div class=\"card-block text-center text-white\">
                    <div class=\"m-b-25\">
                        <img src=\"../files/assets/images/avatar-4.jpg\" class=\"img-radius\" alt=\"User-Profile-Image\">
                    </div>
                    <h6 class=\"f-w-600\">Jeny William</h6>
                    <p>Web Designer</p>
                    <a href=\"#!\" class=\"text-white\"><i class=\"feather icon-edit m-t-10 f-16\"></i></a>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"card-block\">
                    <h6 class=\"m-b-20 p-b-5 b-b-default f-w-600\">Information</h6>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Email</p>
                            <h6 class=\"text-muted f-w-400\"><a href=\"mailto:someone@example.com?Subject=Hello%20again\" target=\"_top\">jeny@gmail.com</a> </h6>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Phone</p>
                            <h6 class=\"text-muted f-w-400\">0023-333-526136</h6>
                        </div>
                    </div>
                    <h6 class=\"m-b-20 m-t-50 p-b-5 b-b-default f-w-600\">Projects</h6>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Recent</p>
                            <h6 class=\"text-muted f-w-400\">Guruable Admin</h6>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"m-b-10 f-w-600\">Most Viewed</p>
                            <h6 class=\"text-muted f-w-400\">Able Pro Admin</h6>
                        </div>
                    </div>
                    <ul class=\"social-link list-unstyled m-t-50 m-b-20\">
                        <li><a href=\"#!\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"facebook\"><i class=\"feather icon-facebook facebook\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#!\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"twitter\"><i class=\"feather icon-twitter twitter\" aria-hidden=\"true\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                            </div> #}
{# {% endfor %} #}

{% endif %}
{% endblock content %}

{% block scripts %}
  {{ parent() }}
{% endblock %}", "perfil-usuario/main.twig", "C:\\xampp\\htdocs\\proyectoC\\app\\Views\\perfil-usuario\\main.twig");
    }
}

<?php

/* crear-ticket/inc/detalle-persona.twig */
class __TwigTemplate_57a60853c49228862c16345f24d20ea636e8637d3ca91aab5bc766a513626954 extends Twig_Template
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
        echo "<h4>Detalles de la persona</h4>
<div class=\"row\">
<div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
  <label class=\"col-form-label\">Sexo</label>
  ";
        // line 6
        echo "  <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"h\">Hombre</option>
\t<option value=\"m\">Mujer</option>
\t</select>
</div>
<div class=\"col-md-6 p-t-6\" for=\"color_piel\">
  <label class=\"col-form-label\">Color Piel</label>
  ";
        // line 15
        echo "  <select name=\"color_piel\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"bl\">Blanco</option>
\t<option value=\"m\">Moreno</option>
\t<option value=\"tr\">Trigueño</option>
\t</select>
</div>
<div class=\"col-md-6 p-t-6\" for=\"estatura_persona\">
  <label class=\"col-form-label\">Estatura</label>
  <input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\">
</div>
<div class=\"col-md-6 p-t-6\" for=\"parentesco\">
  <label class=\"col-form-label\">Parentesco con Persona</label>
  ";
        // line 29
        echo "  <select name=\"parentesco\" class=\"form-control form-control-inverse\">
  <option value=\"0\">- SELECCIONAR -</option>
  <option value=\"1\">Padre / Madre</option>
  <option value=\"2\">Tío / Tía</option>
  <option value=\"3\">Primo / Prima</option>
  <option value=\"4\">Amigo / Amiga</option>
  <option value=\"5\">Conocido</option>
  </select>
</div>
</div>
<div class=\"buttons\">
  <button type=\"button\" class=\"btn btn-previous\">Previous</button>
  <button type=\"button\" class=\"btn btn-next\">Next</button>
</div>";
    }

    public function getTemplateName()
    {
        return "crear-ticket/inc/detalle-persona.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 29,  35 => 15,  25 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>Detalles de la persona</h4>
<div class=\"row\">
<div class=\"col-md-6 p-t-6\" for=\"sexo_persona\">
  <label class=\"col-form-label\">Sexo</label>
  {# <input type=\"text\" name=\"sexo_persona\" class=\"form-control\" id=\"sexo_persona\"> #}
  <select name=\"sexo_persona\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"h\">Hombre</option>
\t<option value=\"m\">Mujer</option>
\t</select>
</div>
<div class=\"col-md-6 p-t-6\" for=\"color_piel\">
  <label class=\"col-form-label\">Color Piel</label>
  {# <input type=\"text\" name=\"color_piel\" class=\"form-control\" id=\"color_piel\"> #}
  <select name=\"color_piel\" class=\"form-control form-control-inverse\">
\t<option value=\"0\">- SELECCIONAR -</option>
\t<option value=\"bl\">Blanco</option>
\t<option value=\"m\">Moreno</option>
\t<option value=\"tr\">Trigueño</option>
\t</select>
</div>
<div class=\"col-md-6 p-t-6\" for=\"estatura_persona\">
  <label class=\"col-form-label\">Estatura</label>
  <input type=\"number\" name=\"estatura_persona\" placeholder=\"Estatura de la persona\" class=\"form-control\" id=\"estatura_persona\">
</div>
<div class=\"col-md-6 p-t-6\" for=\"parentesco\">
  <label class=\"col-form-label\">Parentesco con Persona</label>
  {# <input type=\"text\" name=\"parentesco\" class=\"form-control\" id=\"parentesco\"> #}
  <select name=\"parentesco\" class=\"form-control form-control-inverse\">
  <option value=\"0\">- SELECCIONAR -</option>
  <option value=\"1\">Padre / Madre</option>
  <option value=\"2\">Tío / Tía</option>
  <option value=\"3\">Primo / Prima</option>
  <option value=\"4\">Amigo / Amiga</option>
  <option value=\"5\">Conocido</option>
  </select>
</div>
</div>
<div class=\"buttons\">
  <button type=\"button\" class=\"btn btn-previous\">Previous</button>
  <button type=\"button\" class=\"btn btn-next\">Next</button>
</div>", "crear-ticket/inc/detalle-persona.twig", "C:\\xampp\\htdocs\\PROYECTO-U\\app\\Views\\crear-ticket\\inc\\detalle-persona.twig");
    }
}

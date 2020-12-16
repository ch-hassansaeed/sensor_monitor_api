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

/* sensor_measurement/show.html.twig */
class __TwigTemplate_c7a5e8db3916fa68f8786fe9ceb9f2ed57763a654e35fd60978b92331660218b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sensor_measurement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sensor_measurement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SensorMeasurement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>SensorMeasurement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_measurement"]) || array_key_exists("sensor_measurement", $context) ? $context["sensor_measurement"] : (function () { throw new RuntimeError('Variable "sensor_measurement" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Co_level</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_measurement"]) || array_key_exists("sensor_measurement", $context) ? $context["sensor_measurement"] : (function () { throw new RuntimeError('Variable "sensor_measurement" does not exist.', 16, $this->source); })()), "coLevel", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reading_datetime</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["sensor_measurement"]) || array_key_exists("sensor_measurement", $context) ? $context["sensor_measurement"] : (function () { throw new RuntimeError('Variable "sensor_measurement" does not exist.', 20, $this->source); })()), "readingDatetime", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_measurement"]) || array_key_exists("sensor_measurement", $context) ? $context["sensor_measurement"] : (function () { throw new RuntimeError('Variable "sensor_measurement" does not exist.', 20, $this->source); })()), "readingDatetime", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Row_insertion_datetime</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["sensor_measurement"]) || array_key_exists("sensor_measurement", $context) ? $context["sensor_measurement"] : (function () { throw new RuntimeError('Variable "sensor_measurement" does not exist.', 24, $this->source); })()), "rowInsertionDatetime", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_measurement"]) || array_key_exists("sensor_measurement", $context) ? $context["sensor_measurement"] : (function () { throw new RuntimeError('Variable "sensor_measurement" does not exist.', 24, $this->source); })()), "rowInsertionDatetime", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_measurement_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_measurement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sensor_measurement"]) || array_key_exists("sensor_measurement", $context) ? $context["sensor_measurement"] : (function () { throw new RuntimeError('Variable "sensor_measurement" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "sensor_measurement/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sensor_measurement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  115 => 31,  110 => 29,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SensorMeasurement{% endblock %}

{% block body %}
    <h1>SensorMeasurement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ sensor_measurement.id }}</td>
            </tr>
            <tr>
                <th>Co_level</th>
                <td>{{ sensor_measurement.coLevel }}</td>
            </tr>
            <tr>
                <th>Reading_datetime</th>
                <td>{{ sensor_measurement.readingDatetime ? sensor_measurement.readingDatetime|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Row_insertion_datetime</th>
                <td>{{ sensor_measurement.rowInsertionDatetime ? sensor_measurement.rowInsertionDatetime|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('sensor_measurement_index') }}\">back to list</a>

    <a href=\"{{ path('sensor_measurement_edit', {'id': sensor_measurement.id}) }}\">edit</a>

    {{ include('sensor_measurement/_delete_form.html.twig') }}
{% endblock %}
", "sensor_measurement/show.html.twig", "D:\\wamp64\\www\\sensor_monitor\\sensor_monitor_api\\templates\\sensor_measurement\\show.html.twig");
    }
}

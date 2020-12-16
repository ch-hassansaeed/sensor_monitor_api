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

/* sensor_alerts/show.html.twig */
class __TwigTemplate_98669b7f4a4faf5a25a75b5f21df410663b1bda4186828ec2ea9df00ead6668a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sensor_alerts/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sensor_alerts/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SensorAlerts";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>SensorAlerts</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Co_alert_level</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 16, $this->source); })()), "coAlertLevel", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>StartTime</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 20, $this->source); })()), "startTime", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 20, $this->source); })()), "startTime", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>EndTime</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 24, $this->source); })()), "endTime", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 24, $this->source); })()), "endTime", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Row_insertion_datetime</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 28, $this->source); })()), "rowInsertionDatetime", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 28, $this->source); })()), "rowInsertionDatetime", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_alerts_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_alerts_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sensor_alert"]) || array_key_exists("sensor_alert", $context) ? $context["sensor_alert"] : (function () { throw new RuntimeError('Variable "sensor_alert" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "sensor_alerts/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sensor_alerts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  122 => 35,  117 => 33,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SensorAlerts{% endblock %}

{% block body %}
    <h1>SensorAlerts</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ sensor_alert.id }}</td>
            </tr>
            <tr>
                <th>Co_alert_level</th>
                <td>{{ sensor_alert.coAlertLevel }}</td>
            </tr>
            <tr>
                <th>StartTime</th>
                <td>{{ sensor_alert.startTime ? sensor_alert.startTime|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>EndTime</th>
                <td>{{ sensor_alert.endTime ? sensor_alert.endTime|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Row_insertion_datetime</th>
                <td>{{ sensor_alert.rowInsertionDatetime ? sensor_alert.rowInsertionDatetime|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('sensor_alerts_index') }}\">back to list</a>

    <a href=\"{{ path('sensor_alerts_edit', {'id': sensor_alert.id}) }}\">edit</a>

    {{ include('sensor_alerts/_delete_form.html.twig') }}
{% endblock %}
", "sensor_alerts/show.html.twig", "D:\\wamp64\\www\\sensor_monitor\\sensor_monitor_api\\templates\\sensor_alerts\\show.html.twig");
    }
}

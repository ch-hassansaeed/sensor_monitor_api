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

/* sensor_detail/show.html.twig */
class __TwigTemplate_5960c258db4719738956407533dc0b6adec5d102744b7d492f9ea44ef1949adf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sensor_detail/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sensor_detail/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SensorDetail";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>SensorDetail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_detail"]) || array_key_exists("sensor_detail", $context) ? $context["sensor_detail"] : (function () { throw new RuntimeError('Variable "sensor_detail" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Uuid</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_detail"]) || array_key_exists("sensor_detail", $context) ? $context["sensor_detail"] : (function () { throw new RuntimeError('Variable "sensor_detail" does not exist.', 16, $this->source); })()), "uuid", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mac_address</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_detail"]) || array_key_exists("sensor_detail", $context) ? $context["sensor_detail"] : (function () { throw new RuntimeError('Variable "sensor_detail" does not exist.', 20, $this->source); })()), "macAddress", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_active</th>
                <td>";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sensor_detail"]) || array_key_exists("sensor_detail", $context) ? $context["sensor_detail"] : (function () { throw new RuntimeError('Variable "sensor_detail" does not exist.', 24, $this->source); })()), "isActive", [], "any", false, false, false, 24)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Row_insertion_datetime</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["sensor_detail"]) || array_key_exists("sensor_detail", $context) ? $context["sensor_detail"] : (function () { throw new RuntimeError('Variable "sensor_detail" does not exist.', 28, $this->source); })()), "rowInsertionDatetime", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sensor_detail"]) || array_key_exists("sensor_detail", $context) ? $context["sensor_detail"] : (function () { throw new RuntimeError('Variable "sensor_detail" does not exist.', 28, $this->source); })()), "rowInsertionDatetime", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_detail_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_detail_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sensor_detail"]) || array_key_exists("sensor_detail", $context) ? $context["sensor_detail"] : (function () { throw new RuntimeError('Variable "sensor_detail" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "sensor_detail/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sensor_detail/show.html.twig";
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

{% block title %}SensorDetail{% endblock %}

{% block body %}
    <h1>SensorDetail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ sensor_detail.id }}</td>
            </tr>
            <tr>
                <th>Uuid</th>
                <td>{{ sensor_detail.uuid }}</td>
            </tr>
            <tr>
                <th>Mac_address</th>
                <td>{{ sensor_detail.macAddress }}</td>
            </tr>
            <tr>
                <th>Is_active</th>
                <td>{{ sensor_detail.isActive ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Row_insertion_datetime</th>
                <td>{{ sensor_detail.rowInsertionDatetime ? sensor_detail.rowInsertionDatetime|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('sensor_detail_index') }}\">back to list</a>

    <a href=\"{{ path('sensor_detail_edit', {'id': sensor_detail.id}) }}\">edit</a>

    {{ include('sensor_detail/_delete_form.html.twig') }}
{% endblock %}
", "sensor_detail/show.html.twig", "D:\\wamp64\\www\\sensor_monitor\\sensor_monitor_api\\templates\\sensor_detail\\show.html.twig");
    }
}

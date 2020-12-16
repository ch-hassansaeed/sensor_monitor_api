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

/* sensor_detail/index.html.twig */
class __TwigTemplate_20e1dac83e65a51fecdb6d3776095d091c6a1cb0a7048b95bd0c9640ee9b423b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sensor_detail/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sensor_detail/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SensorDetail index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"https:////cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css\">
            <style>
                .odd{
                    background-color: #eee !important;
                }
                .even{
                    background-color: #ccc !important;
                }
            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <h1>Sensors</h1>

    <table class=\"table\" id=\"data_table\">
        <thead>
            <tr>
                <th>Id1</th>
                <th>Uuid</th>
                <th>Mac_address</th>
                <th>Is_active</th>
                <th>Row_insertion_datetime</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensor_details"]) || array_key_exists("sensor_details", $context) ? $context["sensor_details"] : (function () { throw new RuntimeError('Variable "sensor_details" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sensor_detail"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "uuid", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "macAddress", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo ((twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "isActive", [], "any", false, false, false, 39)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "rowInsertionDatetime", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "rowInsertionDatetime", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_detail_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sensor_detail"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sensor_detail_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
            <script type=\"text/javascript\" src=\"https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\"></script>
            <script type=\"text/javascript\">//<![CDATA[


                \$(document).ready(function(){
                    \$(document).ready(function() {

                        \$('#data_table').DataTable( {
                        });
                    });
                });


                //]]></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sensor_detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 59,  179 => 58,  170 => 54,  165 => 51,  156 => 47,  147 => 43,  143 => 42,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  119 => 35,  114 => 34,  98 => 20,  91 => 19,  75 => 7,  68 => 6,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SensorDetail index{% endblock %}


        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https:////cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css\">
            <style>
                .odd{
                    background-color: #eee !important;
                }
                .even{
                    background-color: #ccc !important;
                }
            </style>
        {% endblock %}


{% block body %}
    <h1>Sensors</h1>

    <table class=\"table\" id=\"data_table\">
        <thead>
            <tr>
                <th>Id1</th>
                <th>Uuid</th>
                <th>Mac_address</th>
                <th>Is_active</th>
                <th>Row_insertion_datetime</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for sensor_detail in sensor_details %}
            <tr>
                <td>{{ sensor_detail.id }}</td>
                <td>{{ sensor_detail.uuid }}</td>
                <td>{{ sensor_detail.macAddress }}</td>
                <td>{{ sensor_detail.isActive ? 'Yes' : 'No' }}</td>
                <td>{{ sensor_detail.rowInsertionDatetime ? sensor_detail.rowInsertionDatetime|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('sensor_detail_show', {'id': sensor_detail.id}) }}\">show</a>
                    <a href=\"{{ path('sensor_detail_edit', {'id': sensor_detail.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('sensor_detail_new') }}\">Create new</a>
{% endblock %}


        {% block javascripts %}
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
            <script type=\"text/javascript\" src=\"https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\"></script>
            <script type=\"text/javascript\">//<![CDATA[


                \$(document).ready(function(){
                    \$(document).ready(function() {

                        \$('#data_table').DataTable( {
                        });
                    });
                });


                //]]></script>
        {% endblock %}
", "sensor_detail/index.html.twig", "D:\\wamp64\\www\\sensor_monitor\\sensor_monitor_api\\templates\\sensor_detail\\index.html.twig");
    }
}

<?php

/* TobatBundle:Default:budget.html.twig */
class __TwigTemplate_ee0e905e3e69d95fe6a799d7104eb55d1e4214edd3438fe4942173918ecbe72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "TobatBundle:Default:budget.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fe33719121d80ff785ae002bfd062c2a7d1774cb2834c0642f28927912b9347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe33719121d80ff785ae002bfd062c2a7d1774cb2834c0642f28927912b9347->enter($__internal_1fe33719121d80ff785ae002bfd062c2a7d1774cb2834c0642f28927912b9347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:budget.html.twig"));

        $__internal_a03c336b9063f417cfa9488e0fd28f313174885f4b20664e267eaf81f59fa1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03c336b9063f417cfa9488e0fd28f313174885f4b20664e267eaf81f59fa1dd->enter($__internal_a03c336b9063f417cfa9488e0fd28f313174885f4b20664e267eaf81f59fa1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:budget.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe33719121d80ff785ae002bfd062c2a7d1774cb2834c0642f28927912b9347->leave($__internal_1fe33719121d80ff785ae002bfd062c2a7d1774cb2834c0642f28927912b9347_prof);

        
        $__internal_a03c336b9063f417cfa9488e0fd28f313174885f4b20664e267eaf81f59fa1dd->leave($__internal_a03c336b9063f417cfa9488e0fd28f313174885f4b20664e267eaf81f59fa1dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_409c37061d8fcd7723ffe341cabd4980aeacad8f4dcbcff2879dc6b3b5aa09df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409c37061d8fcd7723ffe341cabd4980aeacad8f4dcbcff2879dc6b3b5aa09df->enter($__internal_409c37061d8fcd7723ffe341cabd4980aeacad8f4dcbcff2879dc6b3b5aa09df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3316d4e1889845988578a28e90e25909c69fbb7bb64a60a3cf927828de5bf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3316d4e1889845988578a28e90e25909c69fbb7bb64a60a3cf927828de5bf6e->enter($__internal_f3316d4e1889845988578a28e90e25909c69fbb7bb64a60a3cf927828de5bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-1\"></div>
 <div class=\"col-lg-11\">
<h3 class=\"text-primary col-lg-offset-1\">Statistiques sur le budget</h3>
</div>
<br>
<div class=\"container border border-dark rounded\">
\t<div class=\"row\" style=\"margin-top: 50px;margin-bottom: 50px;\">
\t\t<div class=\"col-lg-6 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">BUDGET (EN €) :</b>
                    </div>
            </div>
                </br>
                <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
                <table>
                \t
      \t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["budgets"]) ? $context["budgets"] : $this->getContext($context, "budgets")));
        foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
            // line 24
            echo "\t\t\t\t<tr><td style=\"font-weight:bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["budget"], "min", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["budget"], "max", array()), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['budget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t\t</table>
\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">NOMBRE DE PERSONNES :</b>
                    </div>
            </div>
            <br>
            <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
            <table>
      \t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbVisiteursBudgets"]) ? $context["nbVisiteursBudgets"] : $this->getContext($context, "nbVisiteursBudgets")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbVisiteursBudget"]) {
            // line 42
            echo "\t\t\t\t<tr><td style=\"font-weight:bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbVisiteursBudget"], "nbVisiteursBudget", array(), "array"), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbVisiteursBudget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</table>
\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_f3316d4e1889845988578a28e90e25909c69fbb7bb64a60a3cf927828de5bf6e->leave($__internal_f3316d4e1889845988578a28e90e25909c69fbb7bb64a60a3cf927828de5bf6e_prof);

        
        $__internal_409c37061d8fcd7723ffe341cabd4980aeacad8f4dcbcff2879dc6b3b5aa09df->leave($__internal_409c37061d8fcd7723ffe341cabd4980aeacad8f4dcbcff2879dc6b3b5aa09df_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a56382a75bd46126e699179b90296d41ced6dca73a800aa6efaf68541e9a2756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56382a75bd46126e699179b90296d41ced6dca73a800aa6efaf68541e9a2756->enter($__internal_a56382a75bd46126e699179b90296d41ced6dca73a800aa6efaf68541e9a2756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_bb8a905f411b31418f2d7ca42c475ba93fb0cce2e32f1ae91cd2cb778ad39e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8a905f411b31418f2d7ca42c475ba93fb0cce2e32f1ae91cd2cb778ad39e74->enter($__internal_bb8a905f411b31418f2d7ca42c475ba93fb0cce2e32f1ae91cd2cb778ad39e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo " Axel</p>
    </footer>
";
        
        $__internal_bb8a905f411b31418f2d7ca42c475ba93fb0cce2e32f1ae91cd2cb778ad39e74->leave($__internal_bb8a905f411b31418f2d7ca42c475ba93fb0cce2e32f1ae91cd2cb778ad39e74_prof);

        
        $__internal_a56382a75bd46126e699179b90296d41ced6dca73a800aa6efaf68541e9a2756->leave($__internal_a56382a75bd46126e699179b90296d41ced6dca73a800aa6efaf68541e9a2756_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Default:budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  131 => 51,  116 => 44,  107 => 42,  103 => 41,  86 => 26,  75 => 24,  71 => 23,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block body %}
<div class=\"col-lg-1\"></div>
 <div class=\"col-lg-11\">
<h3 class=\"text-primary col-lg-offset-1\">Statistiques sur le budget</h3>
</div>
<br>
<div class=\"container border border-dark rounded\">
\t<div class=\"row\" style=\"margin-top: 50px;margin-bottom: 50px;\">
\t\t<div class=\"col-lg-6 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">BUDGET (EN €) :</b>
                    </div>
            </div>
                </br>
                <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
                <table>
                \t
      \t\t{% for budget in budgets %}
\t\t\t\t<tr><td style=\"font-weight:bold\">{{ budget.min }} - {{ budget.max }}</td></tr>
\t\t\t{% endfor %}

\t\t</table>
\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">NOMBRE DE PERSONNES :</b>
                    </div>
            </div>
            <br>
            <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11\">
            <table>
      \t\t{% for nbVisiteursBudget in nbVisiteursBudgets %}
\t\t\t\t<tr><td style=\"font-weight:bold\">{{ nbVisiteursBudget['nbVisiteursBudget'] }}</td></tr>
\t\t\t{% endfor %}
\t\t</table>
\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

{% block footer %}
    {{ parent() }} Axel</p>
    </footer>
{% endblock %}", "TobatBundle:Default:budget.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\src\\TobatBundle/Resources/views/Default/budget.html.twig");
    }
}

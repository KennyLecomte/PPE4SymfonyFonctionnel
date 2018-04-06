<?php

/* TobatBundle:Default:nbEnquetes.html.twig */
class __TwigTemplate_b42d66223d38a5241ef027440ec372067f1ac6a65281b98341431eefd34162f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "TobatBundle:Default:nbEnquetes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe86118423bddaa53d72563fa45956c6d3b5f44b517c5b79453a892bf32437ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe86118423bddaa53d72563fa45956c6d3b5f44b517c5b79453a892bf32437ce->enter($__internal_fe86118423bddaa53d72563fa45956c6d3b5f44b517c5b79453a892bf32437ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:nbEnquetes.html.twig"));

        $__internal_161999d85638b36519880b20ba1e46d7a0ca2f98c469e0851e8e3ed82b04e620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161999d85638b36519880b20ba1e46d7a0ca2f98c469e0851e8e3ed82b04e620->enter($__internal_161999d85638b36519880b20ba1e46d7a0ca2f98c469e0851e8e3ed82b04e620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:nbEnquetes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe86118423bddaa53d72563fa45956c6d3b5f44b517c5b79453a892bf32437ce->leave($__internal_fe86118423bddaa53d72563fa45956c6d3b5f44b517c5b79453a892bf32437ce_prof);

        
        $__internal_161999d85638b36519880b20ba1e46d7a0ca2f98c469e0851e8e3ed82b04e620->leave($__internal_161999d85638b36519880b20ba1e46d7a0ca2f98c469e0851e8e3ed82b04e620_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30ad919c6a2bde8a11df817baf8be12de32b58752f4070fcd8fe1b2cfc00e95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ad919c6a2bde8a11df817baf8be12de32b58752f4070fcd8fe1b2cfc00e95b->enter($__internal_30ad919c6a2bde8a11df817baf8be12de32b58752f4070fcd8fe1b2cfc00e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70f22827a9b695e93115bb5bddcbecd555f5f88410553095d813f8a1e99bb890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f22827a9b695e93115bb5bddcbecd555f5f88410553095d813f8a1e99bb890->enter($__internal_70f22827a9b695e93115bb5bddcbecd555f5f88410553095d813f8a1e99bb890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Nombre d'enquetes :";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nbEnquetes"]) ? $context["nbEnquetes"] : $this->getContext($context, "nbEnquetes")), 0, array(), "array"), "count(*)", array(), "array"), "html", null, true);
        echo " </h1>
<form action=\"nbEnquete\" method=\"POST\">
\t<input type=\"date\" name='date'>
\t<input type=\"submit\">
</form>

";
        
        $__internal_70f22827a9b695e93115bb5bddcbecd555f5f88410553095d813f8a1e99bb890->leave($__internal_70f22827a9b695e93115bb5bddcbecd555f5f88410553095d813f8a1e99bb890_prof);

        
        $__internal_30ad919c6a2bde8a11df817baf8be12de32b58752f4070fcd8fe1b2cfc00e95b->leave($__internal_30ad919c6a2bde8a11df817baf8be12de32b58752f4070fcd8fe1b2cfc00e95b_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Default:nbEnquetes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h1> Nombre d'enquetes :{{nbEnquetes[0]['count(*)'] }} </h1>
<form action=\"nbEnquete\" method=\"POST\">
\t<input type=\"date\" name='date'>
\t<input type=\"submit\">
</form>

{% endblock %}
", "TobatBundle:Default:nbEnquetes.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\src\\TobatBundle/Resources/views/Default/nbEnquetes.html.twig");
    }
}

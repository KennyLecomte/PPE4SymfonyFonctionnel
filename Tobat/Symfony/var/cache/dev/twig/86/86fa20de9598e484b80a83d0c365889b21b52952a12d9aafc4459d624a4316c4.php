<?php

/* TobatBundle:Default:enquete.html.twig */
class __TwigTemplate_772ec0e4c8b03cb021d740b9810a605906a6f59a37be16df4e9e212a7e73196a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "TobatBundle:Default:enquete.html.twig", 1);
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
        $__internal_83c66c077985959463f509cc6810c93da491b8c1217e5b0ec39baa717d9111ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c66c077985959463f509cc6810c93da491b8c1217e5b0ec39baa717d9111ad->enter($__internal_83c66c077985959463f509cc6810c93da491b8c1217e5b0ec39baa717d9111ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:enquete.html.twig"));

        $__internal_1cd06eadd938cd2190996369886e9b9cd25eb4fa51e0d868937dd4a77c4a591c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd06eadd938cd2190996369886e9b9cd25eb4fa51e0d868937dd4a77c4a591c->enter($__internal_1cd06eadd938cd2190996369886e9b9cd25eb4fa51e0d868937dd4a77c4a591c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:enquete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c66c077985959463f509cc6810c93da491b8c1217e5b0ec39baa717d9111ad->leave($__internal_83c66c077985959463f509cc6810c93da491b8c1217e5b0ec39baa717d9111ad_prof);

        
        $__internal_1cd06eadd938cd2190996369886e9b9cd25eb4fa51e0d868937dd4a77c4a591c->leave($__internal_1cd06eadd938cd2190996369886e9b9cd25eb4fa51e0d868937dd4a77c4a591c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_489b400ad71cbce7a7738782d57684090477ea68efc989d876b7d2775b6c0712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489b400ad71cbce7a7738782d57684090477ea68efc989d876b7d2775b6c0712->enter($__internal_489b400ad71cbce7a7738782d57684090477ea68efc989d876b7d2775b6c0712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db8a299360739b914f7c0dbba9a0df624e70c6b17fad313aecb19ab5665c3ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8a299360739b914f7c0dbba9a0df624e70c6b17fad313aecb19ab5665c3ac9->enter($__internal_db8a299360739b914f7c0dbba9a0df624e70c6b17fad313aecb19ab5665c3ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Enquetes de la date : </h1>


<form action=\"nbEnquete\" method=\"POST\">
\t<input type=\"date\" name='date'>
\t<input type=\"submit\">
</form>

";
        
        $__internal_db8a299360739b914f7c0dbba9a0df624e70c6b17fad313aecb19ab5665c3ac9->leave($__internal_db8a299360739b914f7c0dbba9a0df624e70c6b17fad313aecb19ab5665c3ac9_prof);

        
        $__internal_489b400ad71cbce7a7738782d57684090477ea68efc989d876b7d2775b6c0712->leave($__internal_489b400ad71cbce7a7738782d57684090477ea68efc989d876b7d2775b6c0712_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b5254309410cd56edfd60f7af1af0776d8a52afeeb706b64adbd7fb59ab7779f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5254309410cd56edfd60f7af1af0776d8a52afeeb706b64adbd7fb59ab7779f->enter($__internal_b5254309410cd56edfd60f7af1af0776d8a52afeeb706b64adbd7fb59ab7779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d03abf67f6daf693bde85785f90ec5d7719571400097405d2fa8df220e8c3d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03abf67f6daf693bde85785f90ec5d7719571400097405d2fa8df220e8c3d58->enter($__internal_d03abf67f6daf693bde85785f90ec5d7719571400097405d2fa8df220e8c3d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo " Alan</p>
    </footer>
";
        
        $__internal_d03abf67f6daf693bde85785f90ec5d7719571400097405d2fa8df220e8c3d58->leave($__internal_d03abf67f6daf693bde85785f90ec5d7719571400097405d2fa8df220e8c3d58_prof);

        
        $__internal_b5254309410cd56edfd60f7af1af0776d8a52afeeb706b64adbd7fb59ab7779f->leave($__internal_b5254309410cd56edfd60f7af1af0776d8a52afeeb706b64adbd7fb59ab7779f_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Default:enquete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  69 => 15,  50 => 4,  41 => 3,  11 => 1,);
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

<h1> Enquetes de la date : </h1>


<form action=\"nbEnquete\" method=\"POST\">
\t<input type=\"date\" name='date'>
\t<input type=\"submit\">
</form>

{% endblock %}

{% block footer %}
    {{ parent() }} Alan</p>
    </footer>
{% endblock %}
", "TobatBundle:Default:enquete.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\src\\TobatBundle/Resources/views/Default/enquete.html.twig");
    }
}

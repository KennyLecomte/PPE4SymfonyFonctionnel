<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01ab22293a64081a3cd4646e9e1cde5b6020ba0a40251d5aae407d0a6c967466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a3645bd88b2c56705f50dc57c4ef173a3c94dfcfe86999f4695f0a6f581b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a3645bd88b2c56705f50dc57c4ef173a3c94dfcfe86999f4695f0a6f581b5d->enter($__internal_d7a3645bd88b2c56705f50dc57c4ef173a3c94dfcfe86999f4695f0a6f581b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_87a21c7145fab8309075b3564959569761426237f33902214318efce8aef3aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a21c7145fab8309075b3564959569761426237f33902214318efce8aef3aaa->enter($__internal_87a21c7145fab8309075b3564959569761426237f33902214318efce8aef3aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a3645bd88b2c56705f50dc57c4ef173a3c94dfcfe86999f4695f0a6f581b5d->leave($__internal_d7a3645bd88b2c56705f50dc57c4ef173a3c94dfcfe86999f4695f0a6f581b5d_prof);

        
        $__internal_87a21c7145fab8309075b3564959569761426237f33902214318efce8aef3aaa->leave($__internal_87a21c7145fab8309075b3564959569761426237f33902214318efce8aef3aaa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d30e406828deb63c5828bc149eaa7089c190c5d8165c6ebe1c96cdf47bd320d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30e406828deb63c5828bc149eaa7089c190c5d8165c6ebe1c96cdf47bd320d6->enter($__internal_d30e406828deb63c5828bc149eaa7089c190c5d8165c6ebe1c96cdf47bd320d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed0715b93b86aaa79653d731dbcd2b4dbfe59435d2ff11cf642c57e6ccac05e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0715b93b86aaa79653d731dbcd2b4dbfe59435d2ff11cf642c57e6ccac05e1->enter($__internal_ed0715b93b86aaa79653d731dbcd2b4dbfe59435d2ff11cf642c57e6ccac05e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ed0715b93b86aaa79653d731dbcd2b4dbfe59435d2ff11cf642c57e6ccac05e1->leave($__internal_ed0715b93b86aaa79653d731dbcd2b4dbfe59435d2ff11cf642c57e6ccac05e1_prof);

        
        $__internal_d30e406828deb63c5828bc149eaa7089c190c5d8165c6ebe1c96cdf47bd320d6->leave($__internal_d30e406828deb63c5828bc149eaa7089c190c5d8165c6ebe1c96cdf47bd320d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe96965ea242b71ab5c91b4133a4e72672e9fba3624a35248093f35c7c70fd24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe96965ea242b71ab5c91b4133a4e72672e9fba3624a35248093f35c7c70fd24->enter($__internal_fe96965ea242b71ab5c91b4133a4e72672e9fba3624a35248093f35c7c70fd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_13d95f19beefb1803ba84337ce9f1f69dc3942d9dfcf7c685517f9b7173d4ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d95f19beefb1803ba84337ce9f1f69dc3942d9dfcf7c685517f9b7173d4ab4->enter($__internal_13d95f19beefb1803ba84337ce9f1f69dc3942d9dfcf7c685517f9b7173d4ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe96965ea242b71ab5c91b4133a4e72672e9fba3624a35248093f35c7c70fd24->leave($__internal_fe96965ea242b71ab5c91b4133a4e72672e9fba3624a35248093f35c7c70fd24_prof);

        
        $__internal_13d95f19beefb1803ba84337ce9f1f69dc3942d9dfcf7c685517f9b7173d4ab4->leave($__internal_13d95f19beefb1803ba84337ce9f1f69dc3942d9dfcf7c685517f9b7173d4ab4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40f28d9949f6617cf99128a6a6ce982baae5f49f61b0032838e77028c6adbd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f28d9949f6617cf99128a6a6ce982baae5f49f61b0032838e77028c6adbd67->enter($__internal_40f28d9949f6617cf99128a6a6ce982baae5f49f61b0032838e77028c6adbd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8006309cf23600bcd118be1e17dd3a6d7125698de650a501623c00ac69c910b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8006309cf23600bcd118be1e17dd3a6d7125698de650a501623c00ac69c910b4->enter($__internal_8006309cf23600bcd118be1e17dd3a6d7125698de650a501623c00ac69c910b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8006309cf23600bcd118be1e17dd3a6d7125698de650a501623c00ac69c910b4->leave($__internal_8006309cf23600bcd118be1e17dd3a6d7125698de650a501623c00ac69c910b4_prof);

        
        $__internal_40f28d9949f6617cf99128a6a6ce982baae5f49f61b0032838e77028c6adbd67->leave($__internal_40f28d9949f6617cf99128a6a6ce982baae5f49f61b0032838e77028c6adbd67_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d68daf5f7dab20a5d3c71f56f68fff38a4f0e46bce23e44450266080f1ba574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d68daf5f7dab20a5d3c71f56f68fff38a4f0e46bce23e44450266080f1ba574->enter($__internal_1d68daf5f7dab20a5d3c71f56f68fff38a4f0e46bce23e44450266080f1ba574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31d8c2022b8e5ff6731432a8e57baeefc21c3a63242ff30e7157ff78dc4b9c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d8c2022b8e5ff6731432a8e57baeefc21c3a63242ff30e7157ff78dc4b9c23->enter($__internal_31d8c2022b8e5ff6731432a8e57baeefc21c3a63242ff30e7157ff78dc4b9c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31d8c2022b8e5ff6731432a8e57baeefc21c3a63242ff30e7157ff78dc4b9c23->leave($__internal_31d8c2022b8e5ff6731432a8e57baeefc21c3a63242ff30e7157ff78dc4b9c23_prof);

        
        $__internal_1d68daf5f7dab20a5d3c71f56f68fff38a4f0e46bce23e44450266080f1ba574->leave($__internal_1d68daf5f7dab20a5d3c71f56f68fff38a4f0e46bce23e44450266080f1ba574_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee4cb0e2f3c8698fa8a8692322654e76e16676b7752e9efb289c86266c2e27bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4cb0e2f3c8698fa8a8692322654e76e16676b7752e9efb289c86266c2e27bc->enter($__internal_ee4cb0e2f3c8698fa8a8692322654e76e16676b7752e9efb289c86266c2e27bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13614068208b406414b5dabe941a524d22af6dcbfcdde8d458345f232c086aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13614068208b406414b5dabe941a524d22af6dcbfcdde8d458345f232c086aca->enter($__internal_13614068208b406414b5dabe941a524d22af6dcbfcdde8d458345f232c086aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_13614068208b406414b5dabe941a524d22af6dcbfcdde8d458345f232c086aca->leave($__internal_13614068208b406414b5dabe941a524d22af6dcbfcdde8d458345f232c086aca_prof);

        
        $__internal_ee4cb0e2f3c8698fa8a8692322654e76e16676b7752e9efb289c86266c2e27bc->leave($__internal_ee4cb0e2f3c8698fa8a8692322654e76e16676b7752e9efb289c86266c2e27bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

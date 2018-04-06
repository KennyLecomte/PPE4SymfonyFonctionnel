<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee67946baef1e000a0227e9dadba7b2586ecb5338259222fabebd9443315526b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee67946baef1e000a0227e9dadba7b2586ecb5338259222fabebd9443315526b->enter($__internal_ee67946baef1e000a0227e9dadba7b2586ecb5338259222fabebd9443315526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_429812e49c2fad6a54250599b2df2211520a773be9c1fcbec8476919b2ddb91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429812e49c2fad6a54250599b2df2211520a773be9c1fcbec8476919b2ddb91b->enter($__internal_429812e49c2fad6a54250599b2df2211520a773be9c1fcbec8476919b2ddb91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ship.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"../css/style.css\">
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('menu', $context, $blocks);
        // line 13
        echo "        <br>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_ee67946baef1e000a0227e9dadba7b2586ecb5338259222fabebd9443315526b->leave($__internal_ee67946baef1e000a0227e9dadba7b2586ecb5338259222fabebd9443315526b_prof);

        
        $__internal_429812e49c2fad6a54250599b2df2211520a773be9c1fcbec8476919b2ddb91b->leave($__internal_429812e49c2fad6a54250599b2df2211520a773be9c1fcbec8476919b2ddb91b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_248aa0fd4761a8d70db4828d657df6795ba46feb5aa31939671961ea81ee0070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248aa0fd4761a8d70db4828d657df6795ba46feb5aa31939671961ea81ee0070->enter($__internal_248aa0fd4761a8d70db4828d657df6795ba46feb5aa31939671961ea81ee0070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cffac8610cefccdaa0bb30757378a02dd4e3fb138c9aa02e27e0f9e1ab1ebee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffac8610cefccdaa0bb30757378a02dd4e3fb138c9aa02e27e0f9e1ab1ebee8->enter($__internal_cffac8610cefccdaa0bb30757378a02dd4e3fb138c9aa02e27e0f9e1ab1ebee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TOBAT";
        
        $__internal_cffac8610cefccdaa0bb30757378a02dd4e3fb138c9aa02e27e0f9e1ab1ebee8->leave($__internal_cffac8610cefccdaa0bb30757378a02dd4e3fb138c9aa02e27e0f9e1ab1ebee8_prof);

        
        $__internal_248aa0fd4761a8d70db4828d657df6795ba46feb5aa31939671961ea81ee0070->leave($__internal_248aa0fd4761a8d70db4828d657df6795ba46feb5aa31939671961ea81ee0070_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f921de0fee39d018cf84d433247749751fbc4c6378fc957096b5e155be82d552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f921de0fee39d018cf84d433247749751fbc4c6378fc957096b5e155be82d552->enter($__internal_f921de0fee39d018cf84d433247749751fbc4c6378fc957096b5e155be82d552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b81e9cb1a414078c3596cf37bbfe1b9c65967244a0e70935c8203a923f63da9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81e9cb1a414078c3596cf37bbfe1b9c65967244a0e70935c8203a923f63da9a->enter($__internal_b81e9cb1a414078c3596cf37bbfe1b9c65967244a0e70935c8203a923f63da9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b81e9cb1a414078c3596cf37bbfe1b9c65967244a0e70935c8203a923f63da9a->leave($__internal_b81e9cb1a414078c3596cf37bbfe1b9c65967244a0e70935c8203a923f63da9a_prof);

        
        $__internal_f921de0fee39d018cf84d433247749751fbc4c6378fc957096b5e155be82d552->leave($__internal_f921de0fee39d018cf84d433247749751fbc4c6378fc957096b5e155be82d552_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5b557a1e62a70040c2763206a94851fc6482e37a3321c00ebcc89415237715e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b557a1e62a70040c2763206a94851fc6482e37a3321c00ebcc89415237715e->enter($__internal_c5b557a1e62a70040c2763206a94851fc6482e37a3321c00ebcc89415237715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_11c7af3471032465848a0c56c44d6e3c23aad5d1c2d29596181a55aa70cf330b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c7af3471032465848a0c56c44d6e3c23aad5d1c2d29596181a55aa70cf330b->enter($__internal_11c7af3471032465848a0c56c44d6e3c23aad5d1c2d29596181a55aa70cf330b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_11c7af3471032465848a0c56c44d6e3c23aad5d1c2d29596181a55aa70cf330b->leave($__internal_11c7af3471032465848a0c56c44d6e3c23aad5d1c2d29596181a55aa70cf330b_prof);

        
        $__internal_c5b557a1e62a70040c2763206a94851fc6482e37a3321c00ebcc89415237715e->leave($__internal_c5b557a1e62a70040c2763206a94851fc6482e37a3321c00ebcc89415237715e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_840a5d1e0e424157ecd0af55671d534d3c4568b847f83db3602435d0bacd386c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840a5d1e0e424157ecd0af55671d534d3c4568b847f83db3602435d0bacd386c->enter($__internal_840a5d1e0e424157ecd0af55671d534d3c4568b847f83db3602435d0bacd386c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4f88ca4a36312a782da2c00ae5e88d115cfd3cdeabb690ef2c8ce3313574a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f88ca4a36312a782da2c00ae5e88d115cfd3cdeabb690ef2c8ce3313574a5e->enter($__internal_f4f88ca4a36312a782da2c00ae5e88d115cfd3cdeabb690ef2c8ce3313574a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4f88ca4a36312a782da2c00ae5e88d115cfd3cdeabb690ef2c8ce3313574a5e->leave($__internal_f4f88ca4a36312a782da2c00ae5e88d115cfd3cdeabb690ef2c8ce3313574a5e_prof);

        
        $__internal_840a5d1e0e424157ecd0af55671d534d3c4568b847f83db3602435d0bacd386c->leave($__internal_840a5d1e0e424157ecd0af55671d534d3c4568b847f83db3602435d0bacd386c_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85aa39eeb47c17d6571d11628f026ee83236e3f37ef606668615915b0aaf07f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85aa39eeb47c17d6571d11628f026ee83236e3f37ef606668615915b0aaf07f3->enter($__internal_85aa39eeb47c17d6571d11628f026ee83236e3f37ef606668615915b0aaf07f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96a52fa61888e1e361b5e5bcde8885973f3bb5dacfd18264e166c6422ae602b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a52fa61888e1e361b5e5bcde8885973f3bb5dacfd18264e166c6422ae602b9->enter($__internal_96a52fa61888e1e361b5e5bcde8885973f3bb5dacfd18264e166c6422ae602b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96a52fa61888e1e361b5e5bcde8885973f3bb5dacfd18264e166c6422ae602b9->leave($__internal_96a52fa61888e1e361b5e5bcde8885973f3bb5dacfd18264e166c6422ae602b9_prof);

        
        $__internal_85aa39eeb47c17d6571d11628f026ee83236e3f37ef606668615915b0aaf07f3->leave($__internal_85aa39eeb47c17d6571d11628f026ee83236e3f37ef606668615915b0aaf07f3_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f8b52047234c062cbd8e0fc08bb736ceed9afb8c0c7fa34c5922af7d4675799d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b52047234c062cbd8e0fc08bb736ceed9afb8c0c7fa34c5922af7d4675799d->enter($__internal_f8b52047234c062cbd8e0fc08bb736ceed9afb8c0c7fa34c5922af7d4675799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9d41be3152ecb7d3a37554d431f2a679f0a8b88c004cfbaee9508269ddd1aa5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d41be3152ecb7d3a37554d431f2a679f0a8b88c004cfbaee9508269ddd1aa5c->enter($__internal_9d41be3152ecb7d3a37554d431f2a679f0a8b88c004cfbaee9508269ddd1aa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_9d41be3152ecb7d3a37554d431f2a679f0a8b88c004cfbaee9508269ddd1aa5c->leave($__internal_9d41be3152ecb7d3a37554d431f2a679f0a8b88c004cfbaee9508269ddd1aa5c_prof);

        
        $__internal_f8b52047234c062cbd8e0fc08bb736ceed9afb8c0c7fa34c5922af7d4675799d->leave($__internal_f8b52047234c062cbd8e0fc08bb736ceed9afb8c0c7fa34c5922af7d4675799d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 17,  148 => 15,  131 => 14,  114 => 12,  97 => 6,  79 => 5,  67 => 18,  65 => 17,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  52 => 12,  43 => 7,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}TOBAT{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('ship.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"../css/style.css\">
    </head>
    <body>
        {% block menu %}{% endblock %}
        <br>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

        {% block footer %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}

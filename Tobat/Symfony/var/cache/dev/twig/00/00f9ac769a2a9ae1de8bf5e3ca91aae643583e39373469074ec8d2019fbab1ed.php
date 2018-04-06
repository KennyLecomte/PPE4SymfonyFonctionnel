<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcd405a31d927976da552aa5657265e2c16fd3ab58e1972daf41b34a553a17e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd405a31d927976da552aa5657265e2c16fd3ab58e1972daf41b34a553a17e4->enter($__internal_dcd405a31d927976da552aa5657265e2c16fd3ab58e1972daf41b34a553a17e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0bc6bb0e88a5ea0c128d56924366d4691dfd656200a6c5bab3ef3bf76a52c6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc6bb0e88a5ea0c128d56924366d4691dfd656200a6c5bab3ef3bf76a52c6e5->enter($__internal_0bc6bb0e88a5ea0c128d56924366d4691dfd656200a6c5bab3ef3bf76a52c6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_dcd405a31d927976da552aa5657265e2c16fd3ab58e1972daf41b34a553a17e4->leave($__internal_dcd405a31d927976da552aa5657265e2c16fd3ab58e1972daf41b34a553a17e4_prof);

        
        $__internal_0bc6bb0e88a5ea0c128d56924366d4691dfd656200a6c5bab3ef3bf76a52c6e5->leave($__internal_0bc6bb0e88a5ea0c128d56924366d4691dfd656200a6c5bab3ef3bf76a52c6e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_285bb0506013c60d0d8cbbb56414caeed48e8f3b040207bb6ff22356e504ed62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285bb0506013c60d0d8cbbb56414caeed48e8f3b040207bb6ff22356e504ed62->enter($__internal_285bb0506013c60d0d8cbbb56414caeed48e8f3b040207bb6ff22356e504ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71e0ced95c2f94d6c8bc17fad084cbf4bbfbe851543a824510009a593f60eb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e0ced95c2f94d6c8bc17fad084cbf4bbfbe851543a824510009a593f60eb44->enter($__internal_71e0ced95c2f94d6c8bc17fad084cbf4bbfbe851543a824510009a593f60eb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_71e0ced95c2f94d6c8bc17fad084cbf4bbfbe851543a824510009a593f60eb44->leave($__internal_71e0ced95c2f94d6c8bc17fad084cbf4bbfbe851543a824510009a593f60eb44_prof);

        
        $__internal_285bb0506013c60d0d8cbbb56414caeed48e8f3b040207bb6ff22356e504ed62->leave($__internal_285bb0506013c60d0d8cbbb56414caeed48e8f3b040207bb6ff22356e504ed62_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_deb4b3b59de01c142c7b227d4d51f021396fe9e9297d7f7f7e3bbd20946a8a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb4b3b59de01c142c7b227d4d51f021396fe9e9297d7f7f7e3bbd20946a8a10->enter($__internal_deb4b3b59de01c142c7b227d4d51f021396fe9e9297d7f7f7e3bbd20946a8a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be8c18c860d8e4b5bae65b4e7e5735ecc4234ec13f8dd8ea45ac062fcdb22e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8c18c860d8e4b5bae65b4e7e5735ecc4234ec13f8dd8ea45ac062fcdb22e18->enter($__internal_be8c18c860d8e4b5bae65b4e7e5735ecc4234ec13f8dd8ea45ac062fcdb22e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_be8c18c860d8e4b5bae65b4e7e5735ecc4234ec13f8dd8ea45ac062fcdb22e18->leave($__internal_be8c18c860d8e4b5bae65b4e7e5735ecc4234ec13f8dd8ea45ac062fcdb22e18_prof);

        
        $__internal_deb4b3b59de01c142c7b227d4d51f021396fe9e9297d7f7f7e3bbd20946a8a10->leave($__internal_deb4b3b59de01c142c7b227d4d51f021396fe9e9297d7f7f7e3bbd20946a8a10_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a8a254a3f6ec0f3d6463387fa825ebfc3c4ea2b20cb99e5f1baf50a4d6dbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a8a254a3f6ec0f3d6463387fa825ebfc3c4ea2b20cb99e5f1baf50a4d6dbef->enter($__internal_92a8a254a3f6ec0f3d6463387fa825ebfc3c4ea2b20cb99e5f1baf50a4d6dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c71ed037111239d15a27a9e1566eb8e4495fc6a4e0f675836c9a0cf6215ddc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71ed037111239d15a27a9e1566eb8e4495fc6a4e0f675836c9a0cf6215ddc8e->enter($__internal_c71ed037111239d15a27a9e1566eb8e4495fc6a4e0f675836c9a0cf6215ddc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c71ed037111239d15a27a9e1566eb8e4495fc6a4e0f675836c9a0cf6215ddc8e->leave($__internal_c71ed037111239d15a27a9e1566eb8e4495fc6a4e0f675836c9a0cf6215ddc8e_prof);

        
        $__internal_92a8a254a3f6ec0f3d6463387fa825ebfc3c4ea2b20cb99e5f1baf50a4d6dbef->leave($__internal_92a8a254a3f6ec0f3d6463387fa825ebfc3c4ea2b20cb99e5f1baf50a4d6dbef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

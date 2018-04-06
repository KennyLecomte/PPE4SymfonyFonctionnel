<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56dbc0e0c4641b1f02a5369a2dc76be00b562cf30194282e2845ae50abe9d4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56dbc0e0c4641b1f02a5369a2dc76be00b562cf30194282e2845ae50abe9d4b3->enter($__internal_56dbc0e0c4641b1f02a5369a2dc76be00b562cf30194282e2845ae50abe9d4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c40ac07d49d3dab0718f800a53c9f88621075dd6c82a9f8977c79e351a9b4f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40ac07d49d3dab0718f800a53c9f88621075dd6c82a9f8977c79e351a9b4f32->enter($__internal_c40ac07d49d3dab0718f800a53c9f88621075dd6c82a9f8977c79e351a9b4f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56dbc0e0c4641b1f02a5369a2dc76be00b562cf30194282e2845ae50abe9d4b3->leave($__internal_56dbc0e0c4641b1f02a5369a2dc76be00b562cf30194282e2845ae50abe9d4b3_prof);

        
        $__internal_c40ac07d49d3dab0718f800a53c9f88621075dd6c82a9f8977c79e351a9b4f32->leave($__internal_c40ac07d49d3dab0718f800a53c9f88621075dd6c82a9f8977c79e351a9b4f32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e0c502f0b6e635b244070b957d6860d652f8494d00f1cddc73b805b341142ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0c502f0b6e635b244070b957d6860d652f8494d00f1cddc73b805b341142ee->enter($__internal_2e0c502f0b6e635b244070b957d6860d652f8494d00f1cddc73b805b341142ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e0fbd8e4759df14f3ad568bf293058b193f3aa50751d9760eeec31a5af41b789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fbd8e4759df14f3ad568bf293058b193f3aa50751d9760eeec31a5af41b789->enter($__internal_e0fbd8e4759df14f3ad568bf293058b193f3aa50751d9760eeec31a5af41b789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0fbd8e4759df14f3ad568bf293058b193f3aa50751d9760eeec31a5af41b789->leave($__internal_e0fbd8e4759df14f3ad568bf293058b193f3aa50751d9760eeec31a5af41b789_prof);

        
        $__internal_2e0c502f0b6e635b244070b957d6860d652f8494d00f1cddc73b805b341142ee->leave($__internal_2e0c502f0b6e635b244070b957d6860d652f8494d00f1cddc73b805b341142ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8838871a0a6f999d932b1b9136d1155ab39a687512eb762252e25522420ed330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8838871a0a6f999d932b1b9136d1155ab39a687512eb762252e25522420ed330->enter($__internal_8838871a0a6f999d932b1b9136d1155ab39a687512eb762252e25522420ed330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b40892c1e93bd89a156dcb13e5242c84510d446af63e5c5b447fc66c61aaa7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40892c1e93bd89a156dcb13e5242c84510d446af63e5c5b447fc66c61aaa7a5->enter($__internal_b40892c1e93bd89a156dcb13e5242c84510d446af63e5c5b447fc66c61aaa7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b40892c1e93bd89a156dcb13e5242c84510d446af63e5c5b447fc66c61aaa7a5->leave($__internal_b40892c1e93bd89a156dcb13e5242c84510d446af63e5c5b447fc66c61aaa7a5_prof);

        
        $__internal_8838871a0a6f999d932b1b9136d1155ab39a687512eb762252e25522420ed330->leave($__internal_8838871a0a6f999d932b1b9136d1155ab39a687512eb762252e25522420ed330_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c95d0012f0140aac2d98df9605b9015786e4c5a761e828fd674505e81a558f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95d0012f0140aac2d98df9605b9015786e4c5a761e828fd674505e81a558f3e->enter($__internal_c95d0012f0140aac2d98df9605b9015786e4c5a761e828fd674505e81a558f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1acca84c4233be38b0ea26348b3f34c25e2ecfbff9a058997c037df8c4c038bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acca84c4233be38b0ea26348b3f34c25e2ecfbff9a058997c037df8c4c038bc->enter($__internal_1acca84c4233be38b0ea26348b3f34c25e2ecfbff9a058997c037df8c4c038bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1acca84c4233be38b0ea26348b3f34c25e2ecfbff9a058997c037df8c4c038bc->leave($__internal_1acca84c4233be38b0ea26348b3f34c25e2ecfbff9a058997c037df8c4c038bc_prof);

        
        $__internal_c95d0012f0140aac2d98df9605b9015786e4c5a761e828fd674505e81a558f3e->leave($__internal_c95d0012f0140aac2d98df9605b9015786e4c5a761e828fd674505e81a558f3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

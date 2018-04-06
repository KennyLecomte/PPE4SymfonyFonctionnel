<?php

/* layout.html.twig */
class __TwigTemplate_a92044ad948d29b46b6c0cdeae6405aaaf394d443f72614d8ee07a900e9045b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2d0dd5a962913085c8b268b0034daa827e4e914fb65c10a6212b29f5aa293ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d0dd5a962913085c8b268b0034daa827e4e914fb65c10a6212b29f5aa293ad->enter($__internal_f2d0dd5a962913085c8b268b0034daa827e4e914fb65c10a6212b29f5aa293ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_0000a8322d87794e0af14ae502f9da441f872b8beedd8383781024b86e3a0af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0000a8322d87794e0af14ae502f9da441f872b8beedd8383781024b86e3a0af4->enter($__internal_0000a8322d87794e0af14ae502f9da441f872b8beedd8383781024b86e3a0af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d0dd5a962913085c8b268b0034daa827e4e914fb65c10a6212b29f5aa293ad->leave($__internal_f2d0dd5a962913085c8b268b0034daa827e4e914fb65c10a6212b29f5aa293ad_prof);

        
        $__internal_0000a8322d87794e0af14ae502f9da441f872b8beedd8383781024b86e3a0af4->leave($__internal_0000a8322d87794e0af14ae502f9da441f872b8beedd8383781024b86e3a0af4_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5df17e636730cde37a758e89e62fa50ee3649e191d267567f4ce4bb7fa6d2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5df17e636730cde37a758e89e62fa50ee3649e191d267567f4ce4bb7fa6d2a7->enter($__internal_c5df17e636730cde37a758e89e62fa50ee3649e191d267567f4ce4bb7fa6d2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84ad34ad4d31d6b1a5833f9ec9831319940e4bfa4d57c33f15db64ef397396e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ad34ad4d31d6b1a5833f9ec9831319940e4bfa4d57c33f15db64ef397396e5->enter($__internal_84ad34ad4d31d6b1a5833f9ec9831319940e4bfa4d57c33f15db64ef397396e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "<nav class=\"navbar navbar-dark navbar-expand-sm bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">
    <img alt=\"Test\" src=\"../ship.ico\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
    TOBAT
  </a>
  <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_nbVisiteursCritere");
        echo "\">Nombre de visiteurs par critère</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_classementBateaux");
        echo "\">Classement des bateaux</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_repartitionVisiteur");
        echo "\">Répartition des visiteurs</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_budget");
        echo "\">Budget</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_enquete");
        echo "\">Enquêtes par date</a>
      </li>
    </ul>

    <ul class=\"navbar-nav ml-auto\">
      <a class =\"btn btn-light\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_deconnexion");
        echo "\">Déconnexion</a>
    </ul>
</nav>

";
        
        $__internal_84ad34ad4d31d6b1a5833f9ec9831319940e4bfa4d57c33f15db64ef397396e5->leave($__internal_84ad34ad4d31d6b1a5833f9ec9831319940e4bfa4d57c33f15db64ef397396e5_prof);

        
        $__internal_c5df17e636730cde37a758e89e62fa50ee3649e191d267567f4ce4bb7fa6d2a7->leave($__internal_c5df17e636730cde37a758e89e62fa50ee3649e191d267567f4ce4bb7fa6d2a7_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7d9be22c470ec797f2a243f246d6a6130476cce0a89ed47ec3839ee6fa40832e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9be22c470ec797f2a243f246d6a6130476cce0a89ed47ec3839ee6fa40832e->enter($__internal_7d9be22c470ec797f2a243f246d6a6130476cce0a89ed47ec3839ee6fa40832e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ad1f4dad8df04ea700d4f47ed17ca4db82ee51a1edcf3afed6ae7a02850fdb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1f4dad8df04ea700d4f47ed17ca4db82ee51a1edcf3afed6ae7a02850fdb25->enter($__internal_ad1f4dad8df04ea700d4f47ed17ca4db82ee51a1edcf3afed6ae7a02850fdb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "
<footer class=\"footer fixed-bottom border-top text-right\" style=\"margin-right: 10px\">
    <p class=\"text-dark\">Page créée par


";
        
        $__internal_ad1f4dad8df04ea700d4f47ed17ca4db82ee51a1edcf3afed6ae7a02850fdb25->leave($__internal_ad1f4dad8df04ea700d4f47ed17ca4db82ee51a1edcf3afed6ae7a02850fdb25_prof);

        
        $__internal_7d9be22c470ec797f2a243f246d6a6130476cce0a89ed47ec3839ee6fa40832e->leave($__internal_7d9be22c470ec797f2a243f246d6a6130476cce0a89ed47ec3839ee6fa40832e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  106 => 34,  91 => 28,  83 => 23,  77 => 20,  71 => 17,  65 => 14,  59 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block menu %}
<nav class=\"navbar navbar-dark navbar-expand-sm bg-dark\">
  <a class=\"navbar-brand\" href=\"#\">
    <img alt=\"Test\" src=\"../ship.ico\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
    TOBAT
  </a>
  <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"{{ path('tobat_nbVisiteursCritere') }}\">Nombre de visiteurs par critère</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"{{ path('tobat_classementBateaux') }}\">Classement des bateaux</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"{{ path('tobat_repartitionVisiteur') }}\">Répartition des visiteurs</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"{{ path('tobat_budget') }}\">Budget</a>
      </li>
      <li class=\"nav-item\">
        <a class =\"nav-link\" href=\"{{ path('tobat_enquete') }}\">Enquêtes par date</a>
      </li>
    </ul>

    <ul class=\"navbar-nav ml-auto\">
      <a class =\"btn btn-light\" href=\"{{ path('tobat_deconnexion') }}\">Déconnexion</a>
    </ul>
</nav>

{% endblock %}

{% block footer %}

<footer class=\"footer fixed-bottom border-top text-right\" style=\"margin-right: 10px\">
    <p class=\"text-dark\">Page créée par


{% endblock %}", "layout.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\app\\Resources\\views\\layout.html.twig");
    }
}

<?php

/* TobatBundle:Default:index.html.twig */
class __TwigTemplate_aa4c8d8d34867d6d0c3130a793134c1412d95349aa3fd4921d7194d38044ff31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "TobatBundle:Default:index.html.twig", 1);
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
        $__internal_7bb26135fa1c64241d17a3feeb817d9f4fb5dcd5682942ed1d4217a569a8c6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb26135fa1c64241d17a3feeb817d9f4fb5dcd5682942ed1d4217a569a8c6f8->enter($__internal_7bb26135fa1c64241d17a3feeb817d9f4fb5dcd5682942ed1d4217a569a8c6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:index.html.twig"));

        $__internal_d64c21fc69e90fd586098de2445ab95636eacb677b55af7e2de16f61d540b1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64c21fc69e90fd586098de2445ab95636eacb677b55af7e2de16f61d540b1fd->enter($__internal_d64c21fc69e90fd586098de2445ab95636eacb677b55af7e2de16f61d540b1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb26135fa1c64241d17a3feeb817d9f4fb5dcd5682942ed1d4217a569a8c6f8->leave($__internal_7bb26135fa1c64241d17a3feeb817d9f4fb5dcd5682942ed1d4217a569a8c6f8_prof);

        
        $__internal_d64c21fc69e90fd586098de2445ab95636eacb677b55af7e2de16f61d540b1fd->leave($__internal_d64c21fc69e90fd586098de2445ab95636eacb677b55af7e2de16f61d540b1fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_973b27cc89a95d3a480af28496a50b135510698b72011ed49393d5ab7541476b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973b27cc89a95d3a480af28496a50b135510698b72011ed49393d5ab7541476b->enter($__internal_973b27cc89a95d3a480af28496a50b135510698b72011ed49393d5ab7541476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7748bfadd002cb3265fff9f933cce12f1290f13fb8ffbf40467f33ae13b3f94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7748bfadd002cb3265fff9f933cce12f1290f13fb8ffbf40467f33ae13b3f94f->enter($__internal_7748bfadd002cb3265fff9f933cce12f1290f13fb8ffbf40467f33ae13b3f94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img class=\"d-block img-fluid\" src=\"../bateau1.jpg\" alt=\"First slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau2.png\" alt=\"Second slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau3.jpg\" alt=\"Third slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau4.jpg\" alt=\"Fourth slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau5.jpg\" alt=\"Fifth slide\">
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>

<script type=\"text/javascript\">
  \$('.carousel').carousel({
    interval: 3000
 })
\$('.carousel-control-prev').click(function() {
   \$('#carouselExampleIndicators').carousel('prev');
});

\$('.carousel-control-next').click(function() {
   \$('#carouselExampleIndicators').carousel('next');
});
</script>

";
        
        $__internal_7748bfadd002cb3265fff9f933cce12f1290f13fb8ffbf40467f33ae13b3f94f->leave($__internal_7748bfadd002cb3265fff9f933cce12f1290f13fb8ffbf40467f33ae13b3f94f_prof);

        
        $__internal_973b27cc89a95d3a480af28496a50b135510698b72011ed49393d5ab7541476b->leave($__internal_973b27cc89a95d3a480af28496a50b135510698b72011ed49393d5ab7541476b_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img class=\"d-block img-fluid\" src=\"../bateau1.jpg\" alt=\"First slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau2.png\" alt=\"Second slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau3.jpg\" alt=\"Third slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau4.jpg\" alt=\"Fourth slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block img-fluid\" src=\"../bateau5.jpg\" alt=\"Fifth slide\">
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>

<script type=\"text/javascript\">
  \$('.carousel').carousel({
    interval: 3000
 })
\$('.carousel-control-prev').click(function() {
   \$('#carouselExampleIndicators').carousel('prev');
});

\$('.carousel-control-next').click(function() {
   \$('#carouselExampleIndicators').carousel('next');
});
</script>

{% endblock %}
", "TobatBundle:Default:index.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\src\\TobatBundle/Resources/views/Default/index.html.twig");
    }
}

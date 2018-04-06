<?php

/* TobatBundle:Default:connexion.html.twig */
class __TwigTemplate_cd39db5a9d20b6b96e3a930d54359bb8519f6c2f6f02ce079964a557a8ac80a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TobatBundle:Default:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8caf2fbe793e5b7367c5d436ce6809d9661b4ac1738e18093de338e8908c48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8caf2fbe793e5b7367c5d436ce6809d9661b4ac1738e18093de338e8908c48a->enter($__internal_f8caf2fbe793e5b7367c5d436ce6809d9661b4ac1738e18093de338e8908c48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:connexion.html.twig"));

        $__internal_76580d687b575bf14ab6862f8ae8fb2aa7f36f97af72e63e5532c891f6a25644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76580d687b575bf14ab6862f8ae8fb2aa7f36f97af72e63e5532c891f6a25644->enter($__internal_76580d687b575bf14ab6862f8ae8fb2aa7f36f97af72e63e5532c891f6a25644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8caf2fbe793e5b7367c5d436ce6809d9661b4ac1738e18093de338e8908c48a->leave($__internal_f8caf2fbe793e5b7367c5d436ce6809d9661b4ac1738e18093de338e8908c48a_prof);

        
        $__internal_76580d687b575bf14ab6862f8ae8fb2aa7f36f97af72e63e5532c891f6a25644->leave($__internal_76580d687b575bf14ab6862f8ae8fb2aa7f36f97af72e63e5532c891f6a25644_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c71a6272976a279b48ba0b438417ac1c9bb3287858c38a68fbae5db75e844f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c71a6272976a279b48ba0b438417ac1c9bb3287858c38a68fbae5db75e844f->enter($__internal_b3c71a6272976a279b48ba0b438417ac1c9bb3287858c38a68fbae5db75e844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2138494c8aa87be43f0a006b9bd2f370cc8cbdfef57c3a23f80579f9336e3387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2138494c8aa87be43f0a006b9bd2f370cc8cbdfef57c3a23f80579f9336e3387->enter($__internal_2138494c8aa87be43f0a006b9bd2f370cc8cbdfef57c3a23f80579f9336e3387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<body>
 
  <div class=\"container\">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class=\"row\">
    <div class=\"col-lg-5\"></div>
    <div class=\"col-lg-2\">
      <div class=\"well\">
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
          ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Login "));
        echo "
          ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "
          
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          
        </div>

        <div class=\"form-group\">
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mot de passe "));
        echo "

          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'errors');
        echo "

          
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motDePasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         
        </div>

        ";
        // line 43
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Connexion", array()), 'widget', array("attr" => array("class" => "center-block btn btn-primary")));
        echo "

        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
  </div>
</div>

  </div>
  </body>

";
        
        $__internal_2138494c8aa87be43f0a006b9bd2f370cc8cbdfef57c3a23f80579f9336e3387->leave($__internal_2138494c8aa87be43f0a006b9bd2f370cc8cbdfef57c3a23f80579f9336e3387_prof);

        
        $__internal_b3c71a6272976a279b48ba0b438417ac1c9bb3287858c38a68fbae5db75e844f->leave($__internal_b3c71a6272976a279b48ba0b438417ac1c9bb3287858c38a68fbae5db75e844f_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 47,  119 => 45,  113 => 43,  106 => 38,  100 => 35,  95 => 33,  87 => 28,  82 => 26,  78 => 25,  72 => 22,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<body>
 
  <div class=\"container\">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class=\"row\">
    <div class=\"col-lg-5\"></div>
    <div class=\"col-lg-2\">
      <div class=\"well\">
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

        {{ form_errors(form) }}

        <div class=\"form-group\">
          {{ form_label(form.login, \"Login \", {'label_attr': {'class': 'control-label'}}) }}
          {{ form_errors(form.login) }}
          
            {{ form_widget(form.login, {'attr': {'class': 'form-control'}}) }}
          
        </div>

        <div class=\"form-group\">
          {{ form_label(form.motDePasse, \"Mot de passe \", {'label_attr': {'class': 'control-label'}}) }}

          {{ form_errors(form.motDePasse) }}

          
            {{ form_widget(form.motDePasse, {'attr': {'class': 'form-control'}}) }}
         
        </div>

        {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
        {{ form_widget(form.Connexion, {'attr': {'class': 'center-block btn btn-primary'}}) }}

        {{ form_rest(form) }}

        {{ form_end(form) }}
      </div>
  </div>
</div>

  </div>
  </body>

{% endblock %}", "TobatBundle:Default:connexion.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\src\\TobatBundle/Resources/views/Default/connexion.html.twig");
    }
}

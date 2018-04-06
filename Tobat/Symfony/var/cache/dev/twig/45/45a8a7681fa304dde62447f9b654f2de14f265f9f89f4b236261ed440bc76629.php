<?php

/* TobatBundle:Default:classementBateaux.html.twig */
class __TwigTemplate_19fe9f03e03ce50f5666f2dcd42bbc0fa7c392a5efacb61ad2f3bce432fbfa32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "TobatBundle:Default:classementBateaux.html.twig", 1);
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
        $__internal_7bbffec0d40e6fc916bfef5b6e0559ee5c76a917bf3fc8576d43051eaf89bb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbffec0d40e6fc916bfef5b6e0559ee5c76a917bf3fc8576d43051eaf89bb59->enter($__internal_7bbffec0d40e6fc916bfef5b6e0559ee5c76a917bf3fc8576d43051eaf89bb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:classementBateaux.html.twig"));

        $__internal_339c6235ff54e7c3a76c78e96a5d2f63e0182e99dd858ae5ab68310ba0430425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339c6235ff54e7c3a76c78e96a5d2f63e0182e99dd858ae5ab68310ba0430425->enter($__internal_339c6235ff54e7c3a76c78e96a5d2f63e0182e99dd858ae5ab68310ba0430425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:classementBateaux.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbffec0d40e6fc916bfef5b6e0559ee5c76a917bf3fc8576d43051eaf89bb59->leave($__internal_7bbffec0d40e6fc916bfef5b6e0559ee5c76a917bf3fc8576d43051eaf89bb59_prof);

        
        $__internal_339c6235ff54e7c3a76c78e96a5d2f63e0182e99dd858ae5ab68310ba0430425->leave($__internal_339c6235ff54e7c3a76c78e96a5d2f63e0182e99dd858ae5ab68310ba0430425_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_24b2df5e48e2471f63f9cf06a36494bd7e1f2c39b21fb8aac4ceb8d98f2c2d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b2df5e48e2471f63f9cf06a36494bd7e1f2c39b21fb8aac4ceb8d98f2c2d79->enter($__internal_24b2df5e48e2471f63f9cf06a36494bd7e1f2c39b21fb8aac4ceb8d98f2c2d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0998bcceec39df6587448e84cdd1dbc07640abe6ca2eeddaa6149e27adfc3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0998bcceec39df6587448e84cdd1dbc07640abe6ca2eeddaa6149e27adfc3ae->enter($__internal_f0998bcceec39df6587448e84cdd1dbc07640abe6ca2eeddaa6149e27adfc3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container-fluid\">
\t<div class =\"row\">
\t\t<div class =\"col-lg-4\"></div>
\t\t<div class =\"col-lg-4\">
\t\t\t<ul class=\"list-group\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesBateaux"]) ? $context["categoriesBateaux"] : $this->getContext($context, "categoriesBateaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorieBateau"]) {
            // line 12
            echo "\t\t\t\t\t<li class=\"list-group-item text-light bg-dark\">Catégorie ";
            echo twig_escape_filter($this->env, $context["categorieBateau"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classementCategories"]) ? $context["classementCategories"] : $this->getContext($context, "classementCategories")), $context["categorieBateau"], array(), "array"), "html", null, true);
            echo "</li>
\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["classementsBateauxCategories"]) ? $context["classementsBateauxCategories"] : $this->getContext($context, "classementsBateauxCategories")), $context["categorieBateau"], array(), "array"), "keys", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["modeleBateau"]) {
                // line 14
                echo "\t\t\t\t\t\t<li class=\"list-group-item text-dark bg-light\">";
                echo twig_escape_filter($this->env, $context["modeleBateau"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classementsBateauxCategories"]) ? $context["classementsBateauxCategories"] : $this->getContext($context, "classementsBateauxCategories")), $context["categorieBateau"], array(), "array"), $context["modeleBateau"], array(), "array"), "html", null, true);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modeleBateau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieBateau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_f0998bcceec39df6587448e84cdd1dbc07640abe6ca2eeddaa6149e27adfc3ae->leave($__internal_f0998bcceec39df6587448e84cdd1dbc07640abe6ca2eeddaa6149e27adfc3ae_prof);

        
        $__internal_24b2df5e48e2471f63f9cf06a36494bd7e1f2c39b21fb8aac4ceb8d98f2c2d79->leave($__internal_24b2df5e48e2471f63f9cf06a36494bd7e1f2c39b21fb8aac4ceb8d98f2c2d79_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e275ff00bc8c43dc37d70c2b36736eb06cc16ae7a6ddd2020fc7ed5f4d40c85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e275ff00bc8c43dc37d70c2b36736eb06cc16ae7a6ddd2020fc7ed5f4d40c85d->enter($__internal_e275ff00bc8c43dc37d70c2b36736eb06cc16ae7a6ddd2020fc7ed5f4d40c85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3975e99b963d88715bc3c204519b7a92d13c1381848e75087e045873cda96b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3975e99b963d88715bc3c204519b7a92d13c1381848e75087e045873cda96b1b->enter($__internal_3975e99b963d88715bc3c204519b7a92d13c1381848e75087e045873cda96b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo " Kenny</p>
    </footer>
";
        
        $__internal_3975e99b963d88715bc3c204519b7a92d13c1381848e75087e045873cda96b1b->leave($__internal_3975e99b963d88715bc3c204519b7a92d13c1381848e75087e045873cda96b1b_prof);

        
        $__internal_e275ff00bc8c43dc37d70c2b36736eb06cc16ae7a6ddd2020fc7ed5f4d40c85d->leave($__internal_e275ff00bc8c43dc37d70c2b36736eb06cc16ae7a6ddd2020fc7ed5f4d40c85d_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Default:classementBateaux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  105 => 24,  90 => 17,  84 => 16,  73 => 14,  69 => 13,  62 => 12,  58 => 11,  50 => 5,  41 => 4,  11 => 1,);
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

<div class=\"container-fluid\">
\t<div class =\"row\">
\t\t<div class =\"col-lg-4\"></div>
\t\t<div class =\"col-lg-4\">
\t\t\t<ul class=\"list-group\">
\t\t\t\t{% for categorieBateau in categoriesBateaux %}
\t\t\t\t\t<li class=\"list-group-item text-light bg-dark\">Catégorie {{ categorieBateau }} : {{ classementCategories[categorieBateau] }}</li>
\t\t\t\t\t{% for modeleBateau in classementsBateauxCategories[categorieBateau]['keys'] %}
\t\t\t\t\t\t<li class=\"list-group-item text-dark bg-light\">{{ modeleBateau }} : {{ classementsBateauxCategories[categorieBateau][modeleBateau] }}</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

{% endblock %}

{% block footer %}
    {{ parent() }} Kenny</p>
    </footer>
{% endblock %}
", "TobatBundle:Default:classementBateaux.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\src\\TobatBundle/Resources/views/Default/classementBateaux.html.twig");
    }
}

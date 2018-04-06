<?php

/* TobatBundle:Default:nbVisiteursCritere.html.twig */
class __TwigTemplate_e2a8c68525b46c96d6724d5b93799bf004ae96d9d712c8ca938d82388407a136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "TobatBundle:Default:nbVisiteursCritere.html.twig", 1);
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
        $__internal_6360370de65b5d27e43c070aa6a652f076d9638b5f52fca0df8c31a84750a12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6360370de65b5d27e43c070aa6a652f076d9638b5f52fca0df8c31a84750a12e->enter($__internal_6360370de65b5d27e43c070aa6a652f076d9638b5f52fca0df8c31a84750a12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:nbVisiteursCritere.html.twig"));

        $__internal_bc72089d75005bb9ae00ae5a73c75a5bd60cac4d04567b71f920e7cf571996ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc72089d75005bb9ae00ae5a73c75a5bd60cac4d04567b71f920e7cf571996ff->enter($__internal_bc72089d75005bb9ae00ae5a73c75a5bd60cac4d04567b71f920e7cf571996ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Default:nbVisiteursCritere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6360370de65b5d27e43c070aa6a652f076d9638b5f52fca0df8c31a84750a12e->leave($__internal_6360370de65b5d27e43c070aa6a652f076d9638b5f52fca0df8c31a84750a12e_prof);

        
        $__internal_bc72089d75005bb9ae00ae5a73c75a5bd60cac4d04567b71f920e7cf571996ff->leave($__internal_bc72089d75005bb9ae00ae5a73c75a5bd60cac4d04567b71f920e7cf571996ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9749b0b1f5071af1a33391417ecf9de2780cf46a13e5b6455bf6463711f104d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9749b0b1f5071af1a33391417ecf9de2780cf46a13e5b6455bf6463711f104d->enter($__internal_a9749b0b1f5071af1a33391417ecf9de2780cf46a13e5b6455bf6463711f104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_397133352c95aab29b01906fec3f98cb64f1977e88e8823e113cd98fd2fad60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397133352c95aab29b01906fec3f98cb64f1977e88e8823e113cd98fd2fad60e->enter($__internal_397133352c95aab29b01906fec3f98cb64f1977e88e8823e113cd98fd2fad60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class=\"container border border-dark rounded\">
\t<div class=\"row\" style=\"margin-top: 50px;margin-bottom: 50px;\">
\t\t<div class=\"col-lg-4 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11 text-left\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">CATEGORIES SOCIALES :</b>
                    </div>
            </div>
                </br>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbVisiteursCategories"]) ? $context["nbVisiteursCategories"] : $this->getContext($context, "nbVisiteursCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbVisiteursCategorie"]) {
            // line 27
            echo "\t\t\t\t\t<div class=\"row\">
\t                   <div class=\"col-lg-2\"></div>
\t                    <div class=\"col-lg-4 text-left\">
\t                        <b class=\"text-dark\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbVisiteursCategorie"], "nomCategorie", array(), "array"), "html", null, true);
            echo "</b>
\t                    </div>
\t                    <div class=\"col-lg-3 text-right\">
\t                        <b class=\"text-info\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbVisiteursCategorie"], "nbVisiteurs", array(), "array"), "html", null, true);
            echo "</b>
\t                    </div>
\t                </div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbVisiteursCategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                
\t\t</div>
\t\t<div class=\"col-lg-4 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11 text-left\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">TRANCHES D'AGES :</b>
                    </div>
            </div>
            <br>
\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbVisiteursTranchesAge"]) ? $context["nbVisiteursTranchesAge"] : $this->getContext($context, "nbVisiteursTranchesAge")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbVisiteursTrancheAge"]) {
            // line 48
            echo "\t\t\t\t<div class=\"row\">
\t                   <div class=\"col-lg-2\"></div>
\t                    <div class=\"col-lg-4 text-left\">
\t                        <b class=\"text-dark\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["nbVisiteursTrancheAge"], "trancheAge", array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</b>
\t                    </div>
\t                    <div class=\"col-lg-3 text-right\">
\t                        <b class=\"text-info\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbVisiteursTrancheAge"], "nbVisiteurs", array(), "array"), "html", null, true);
            echo "</b>
\t                    </div>
\t                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbVisiteursTrancheAge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11 text-left\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">MOTIVATIONS :</b>
                    </div>
            </div>
            <br>
\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbVisiteursMotivations"]) ? $context["nbVisiteursMotivations"] : $this->getContext($context, "nbVisiteursMotivations")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbVisiteursMotivation"]) {
            // line 68
            echo "\t\t\t<div class=\"row\">
\t                   <div class=\"col-lg-2\"></div>
\t                    <div class=\"col-lg-4 text-left\">
\t                        <b class=\"text-dark\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["nbVisiteursMotivation"], "motivation", array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</b>
\t                    </div>
\t                    <div class=\"col-lg-3 text-right\">
\t                        <b class=\"text-info\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbVisiteursMotivation"], "nbVisiteurs", array(), "array"), "html", null, true);
            echo "</b>
\t                    </div>
\t                </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbVisiteursMotivation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t</div>
\t</div>
</div>

";
        
        $__internal_397133352c95aab29b01906fec3f98cb64f1977e88e8823e113cd98fd2fad60e->leave($__internal_397133352c95aab29b01906fec3f98cb64f1977e88e8823e113cd98fd2fad60e_prof);

        
        $__internal_a9749b0b1f5071af1a33391417ecf9de2780cf46a13e5b6455bf6463711f104d->leave($__internal_a9749b0b1f5071af1a33391417ecf9de2780cf46a13e5b6455bf6463711f104d_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9817e139bb6d87570e7bfa6680085b5b890961ad7aa6f6f5506d0b09407ae1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9817e139bb6d87570e7bfa6680085b5b890961ad7aa6f6f5506d0b09407ae1ec->enter($__internal_9817e139bb6d87570e7bfa6680085b5b890961ad7aa6f6f5506d0b09407ae1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fd2eb079dfe215f7af36fd572f3949a3d282117ee7644e5dbdd7c11e13f8c96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2eb079dfe215f7af36fd572f3949a3d282117ee7644e5dbdd7c11e13f8c96a->enter($__internal_fd2eb079dfe215f7af36fd572f3949a3d282117ee7644e5dbdd7c11e13f8c96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo " Kenny</p>
    </footer>
";
        
        $__internal_fd2eb079dfe215f7af36fd572f3949a3d282117ee7644e5dbdd7c11e13f8c96a->leave($__internal_fd2eb079dfe215f7af36fd572f3949a3d282117ee7644e5dbdd7c11e13f8c96a_prof);

        
        $__internal_9817e139bb6d87570e7bfa6680085b5b890961ad7aa6f6f5506d0b09407ae1ec->leave($__internal_9817e139bb6d87570e7bfa6680085b5b890961ad7aa6f6f5506d0b09407ae1ec_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Default:nbVisiteursCritere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 85,  186 => 84,  172 => 78,  162 => 74,  156 => 71,  151 => 68,  147 => 67,  136 => 58,  126 => 54,  120 => 51,  115 => 48,  111 => 47,  99 => 37,  89 => 33,  83 => 30,  78 => 27,  74 => 26,  50 => 4,  41 => 3,  11 => 1,);
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class=\"container border border-dark rounded\">
\t<div class=\"row\" style=\"margin-top: 50px;margin-bottom: 50px;\">
\t\t<div class=\"col-lg-4 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11 text-left\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">CATEGORIES SOCIALES :</b>
                    </div>
            </div>
                </br>
                {% for nbVisiteursCategorie in nbVisiteursCategories %}
\t\t\t\t\t<div class=\"row\">
\t                   <div class=\"col-lg-2\"></div>
\t                    <div class=\"col-lg-4 text-left\">
\t                        <b class=\"text-dark\">{{ nbVisiteursCategorie['nomCategorie'] }}</b>
\t                    </div>
\t                    <div class=\"col-lg-3 text-right\">
\t                        <b class=\"text-info\">{{ nbVisiteursCategorie['nbVisiteurs'] }}</b>
\t                    </div>
\t                </div>
\t\t\t\t{% endfor %}
                
\t\t</div>
\t\t<div class=\"col-lg-4 border-right\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11 text-left\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">TRANCHES D'AGES :</b>
                    </div>
            </div>
            <br>
\t\t\t{% for nbVisiteursTrancheAge in nbVisiteursTranchesAge %}
\t\t\t\t<div class=\"row\">
\t                   <div class=\"col-lg-2\"></div>
\t                    <div class=\"col-lg-4 text-left\">
\t                        <b class=\"text-dark\">{{ nbVisiteursTrancheAge['trancheAge'][1] }}</b>
\t                    </div>
\t                    <div class=\"col-lg-3 text-right\">
\t                        <b class=\"text-info\">{{ nbVisiteursTrancheAge['nbVisiteurs'] }}</b>
\t                    </div>
\t                </div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"row text-center\">
                    <div class=\"col-lg-1\"></div>
                    <div class=\"col-lg-11 text-left\">
                        <b class=\"h4 text-primary\" style=\"font-weight:bold\">MOTIVATIONS :</b>
                    </div>
            </div>
            <br>
\t\t\t{% for nbVisiteursMotivation in nbVisiteursMotivations %}
\t\t\t<div class=\"row\">
\t                   <div class=\"col-lg-2\"></div>
\t                    <div class=\"col-lg-4 text-left\">
\t                        <b class=\"text-dark\">{{ nbVisiteursMotivation['motivation'][1] }}</b>
\t                    </div>
\t                    <div class=\"col-lg-3 text-right\">
\t                        <b class=\"text-info\">{{ nbVisiteursMotivation['nbVisiteurs'] }}</b>
\t                    </div>
\t                </div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</div>

{% endblock %}

{% block footer %}
    {{ parent() }} Kenny</p>
    </footer>
{% endblock %}


", "TobatBundle:Default:nbVisiteursCritere.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\src\\TobatBundle/Resources/views/Default/nbVisiteursCritere.html.twig");
    }
}

<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_37a2b8842ee708c26f6fa6e486014cd70fc5b8eb23a3963d7365c6bde6c61abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e81d85934a904a83dcc3fa17e985191222d316ce824f9bd3805622c6f52c9036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81d85934a904a83dcc3fa17e985191222d316ce824f9bd3805622c6f52c9036->enter($__internal_e81d85934a904a83dcc3fa17e985191222d316ce824f9bd3805622c6f52c9036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_358ed67429a73944c6c20f3e00ce923d83543d1c28df518ae2b836075a7adb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358ed67429a73944c6c20f3e00ce923d83543d1c28df518ae2b836075a7adb28->enter($__internal_358ed67429a73944c6c20f3e00ce923d83543d1c28df518ae2b836075a7adb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_e81d85934a904a83dcc3fa17e985191222d316ce824f9bd3805622c6f52c9036->leave($__internal_e81d85934a904a83dcc3fa17e985191222d316ce824f9bd3805622c6f52c9036_prof);

        
        $__internal_358ed67429a73944c6c20f3e00ce923d83543d1c28df518ae2b836075a7adb28->leave($__internal_358ed67429a73944c6c20f3e00ce923d83543d1c28df518ae2b836075a7adb28_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8b1dbcd5ee605529252cb214086ab6e6f0f1bfad63773693a5794436c5060de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1dbcd5ee605529252cb214086ab6e6f0f1bfad63773693a5794436c5060de5->enter($__internal_8b1dbcd5ee605529252cb214086ab6e6f0f1bfad63773693a5794436c5060de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1a78d3ecb33e20395933be887a7619c111cf5bfb2f41576b75c2e320322dabf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a78d3ecb33e20395933be887a7619c111cf5bfb2f41576b75c2e320322dabf8->enter($__internal_1a78d3ecb33e20395933be887a7619c111cf5bfb2f41576b75c2e320322dabf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1a78d3ecb33e20395933be887a7619c111cf5bfb2f41576b75c2e320322dabf8->leave($__internal_1a78d3ecb33e20395933be887a7619c111cf5bfb2f41576b75c2e320322dabf8_prof);

        
        $__internal_8b1dbcd5ee605529252cb214086ab6e6f0f1bfad63773693a5794436c5060de5->leave($__internal_8b1dbcd5ee605529252cb214086ab6e6f0f1bfad63773693a5794436c5060de5_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f997d6d53a7ee7739186cdcc47c37a775cae50f72a70b0819f5dc4d0c103b60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f997d6d53a7ee7739186cdcc47c37a775cae50f72a70b0819f5dc4d0c103b60b->enter($__internal_f997d6d53a7ee7739186cdcc47c37a775cae50f72a70b0819f5dc4d0c103b60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_904ba06ccd64ed6b12e6b6b1a65cc95b8eb0d2b044b2dc9fb048cdcc45db8a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904ba06ccd64ed6b12e6b6b1a65cc95b8eb0d2b044b2dc9fb048cdcc45db8a53->enter($__internal_904ba06ccd64ed6b12e6b6b1a65cc95b8eb0d2b044b2dc9fb048cdcc45db8a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_904ba06ccd64ed6b12e6b6b1a65cc95b8eb0d2b044b2dc9fb048cdcc45db8a53->leave($__internal_904ba06ccd64ed6b12e6b6b1a65cc95b8eb0d2b044b2dc9fb048cdcc45db8a53_prof);

        
        $__internal_f997d6d53a7ee7739186cdcc47c37a775cae50f72a70b0819f5dc4d0c103b60b->leave($__internal_f997d6d53a7ee7739186cdcc47c37a775cae50f72a70b0819f5dc4d0c103b60b_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3e72acddecd687f6106901f324bfab9a932ed488440247a6aab7842c7fa71adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e72acddecd687f6106901f324bfab9a932ed488440247a6aab7842c7fa71adc->enter($__internal_3e72acddecd687f6106901f324bfab9a932ed488440247a6aab7842c7fa71adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_76865c6c905cd979b562dba105c495afd6f42259a62d52b9632fe869d8a69cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76865c6c905cd979b562dba105c495afd6f42259a62d52b9632fe869d8a69cc8->enter($__internal_76865c6c905cd979b562dba105c495afd6f42259a62d52b9632fe869d8a69cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_76865c6c905cd979b562dba105c495afd6f42259a62d52b9632fe869d8a69cc8->leave($__internal_76865c6c905cd979b562dba105c495afd6f42259a62d52b9632fe869d8a69cc8_prof);

        
        $__internal_3e72acddecd687f6106901f324bfab9a932ed488440247a6aab7842c7fa71adc->leave($__internal_3e72acddecd687f6106901f324bfab9a932ed488440247a6aab7842c7fa71adc_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b781120f3e6afa65fa660b33deb65ef0b9eb674350f2a56bd19b738857e812b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b781120f3e6afa65fa660b33deb65ef0b9eb674350f2a56bd19b738857e812b9->enter($__internal_b781120f3e6afa65fa660b33deb65ef0b9eb674350f2a56bd19b738857e812b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a79e22edfb15be2feb13c3f838820892c98d6a7bf896af330ea09b67432d91dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79e22edfb15be2feb13c3f838820892c98d6a7bf896af330ea09b67432d91dc->enter($__internal_a79e22edfb15be2feb13c3f838820892c98d6a7bf896af330ea09b67432d91dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_0b5b8cd87f8afa68933090ec6532be2ab64e624e0d6cc8dcfc712688f57435fd = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_f3b48fe1d4c81033ecff1ba8f71ce438676c315c6ca8d799e976194ecc9098a3 = "{{") && ('' === $__internal_f3b48fe1d4c81033ecff1ba8f71ce438676c315c6ca8d799e976194ecc9098a3 || 0 === strpos($__internal_0b5b8cd87f8afa68933090ec6532be2ab64e624e0d6cc8dcfc712688f57435fd, $__internal_f3b48fe1d4c81033ecff1ba8f71ce438676c315c6ca8d799e976194ecc9098a3)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_bbc74548886077d09053ee7520221363013ae3b5da4fd121d3c9dd8721e9c4d2 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_1b6a98e6409979744e77b0baaf2dad99c291bf747cd6e6fa55963084ec4bf2ae = "}}") && ('' === $__internal_1b6a98e6409979744e77b0baaf2dad99c291bf747cd6e6fa55963084ec4bf2ae || $__internal_1b6a98e6409979744e77b0baaf2dad99c291bf747cd6e6fa55963084ec4bf2ae === substr($__internal_bbc74548886077d09053ee7520221363013ae3b5da4fd121d3c9dd8721e9c4d2, -strlen($__internal_1b6a98e6409979744e77b0baaf2dad99c291bf747cd6e6fa55963084ec4bf2ae))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend")) || (isset($context["append"]) ? $context["append"] : $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_a79e22edfb15be2feb13c3f838820892c98d6a7bf896af330ea09b67432d91dc->leave($__internal_a79e22edfb15be2feb13c3f838820892c98d6a7bf896af330ea09b67432d91dc_prof);

        
        $__internal_b781120f3e6afa65fa660b33deb65ef0b9eb674350f2a56bd19b738857e812b9->leave($__internal_b781120f3e6afa65fa660b33deb65ef0b9eb674350f2a56bd19b738857e812b9_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_04e85700e5f9bc7c27a190f4094b55f896932ad790c0fdbd15280b31ac0bf1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e85700e5f9bc7c27a190f4094b55f896932ad790c0fdbd15280b31ac0bf1b3->enter($__internal_04e85700e5f9bc7c27a190f4094b55f896932ad790c0fdbd15280b31ac0bf1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ce4835f675544107e3399c1551303c46b11f153f5d67b936d5c0b6dc4efac72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4835f675544107e3399c1551303c46b11f153f5d67b936d5c0b6dc4efac72a->enter($__internal_ce4835f675544107e3399c1551303c46b11f153f5d67b936d5c0b6dc4efac72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_ce4835f675544107e3399c1551303c46b11f153f5d67b936d5c0b6dc4efac72a->leave($__internal_ce4835f675544107e3399c1551303c46b11f153f5d67b936d5c0b6dc4efac72a_prof);

        
        $__internal_04e85700e5f9bc7c27a190f4094b55f896932ad790c0fdbd15280b31ac0bf1b3->leave($__internal_04e85700e5f9bc7c27a190f4094b55f896932ad790c0fdbd15280b31ac0bf1b3_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ac4bc6d531b8562316fbb51420a17992f0dbe092d501755e57cd0f44362774c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4bc6d531b8562316fbb51420a17992f0dbe092d501755e57cd0f44362774c8->enter($__internal_ac4bc6d531b8562316fbb51420a17992f0dbe092d501755e57cd0f44362774c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a63147ee1ee1bcca0c97577657b7a54a1f2562a5496be11650f7a0c7fae03899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63147ee1ee1bcca0c97577657b7a54a1f2562a5496be11650f7a0c7fae03899->enter($__internal_a63147ee1ee1bcca0c97577657b7a54a1f2562a5496be11650f7a0c7fae03899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_a63147ee1ee1bcca0c97577657b7a54a1f2562a5496be11650f7a0c7fae03899->leave($__internal_a63147ee1ee1bcca0c97577657b7a54a1f2562a5496be11650f7a0c7fae03899_prof);

        
        $__internal_ac4bc6d531b8562316fbb51420a17992f0dbe092d501755e57cd0f44362774c8->leave($__internal_ac4bc6d531b8562316fbb51420a17992f0dbe092d501755e57cd0f44362774c8_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_341ee15a7fbc6fc46d9343d5a870ab592eac555d3631053d82ab302d0df79b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341ee15a7fbc6fc46d9343d5a870ab592eac555d3631053d82ab302d0df79b27->enter($__internal_341ee15a7fbc6fc46d9343d5a870ab592eac555d3631053d82ab302d0df79b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5293ced2be7da852d950518f96c175320b2beca611b4d5709ec22f93eafe3071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5293ced2be7da852d950518f96c175320b2beca611b4d5709ec22f93eafe3071->enter($__internal_5293ced2be7da852d950518f96c175320b2beca611b4d5709ec22f93eafe3071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_5293ced2be7da852d950518f96c175320b2beca611b4d5709ec22f93eafe3071->leave($__internal_5293ced2be7da852d950518f96c175320b2beca611b4d5709ec22f93eafe3071_prof);

        
        $__internal_341ee15a7fbc6fc46d9343d5a870ab592eac555d3631053d82ab302d0df79b27->leave($__internal_341ee15a7fbc6fc46d9343d5a870ab592eac555d3631053d82ab302d0df79b27_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9dfba7d27893a83f75248f03c680574812043a9a19d1293a8c3014afe053cde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dfba7d27893a83f75248f03c680574812043a9a19d1293a8c3014afe053cde2->enter($__internal_9dfba7d27893a83f75248f03c680574812043a9a19d1293a8c3014afe053cde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c84ef75b580c06eea47c3a3dfa1b2a0b9542a10aabfb7b155358658e57899a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84ef75b580c06eea47c3a3dfa1b2a0b9542a10aabfb7b155358658e57899a26->enter($__internal_c84ef75b580c06eea47c3a3dfa1b2a0b9542a10aabfb7b155358658e57899a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_c84ef75b580c06eea47c3a3dfa1b2a0b9542a10aabfb7b155358658e57899a26->leave($__internal_c84ef75b580c06eea47c3a3dfa1b2a0b9542a10aabfb7b155358658e57899a26_prof);

        
        $__internal_9dfba7d27893a83f75248f03c680574812043a9a19d1293a8c3014afe053cde2->leave($__internal_9dfba7d27893a83f75248f03c680574812043a9a19d1293a8c3014afe053cde2_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_6032938ecd12c6d7006b72d4f0c318a4f540a965ec6730c4cfda77132e0a2617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6032938ecd12c6d7006b72d4f0c318a4f540a965ec6730c4cfda77132e0a2617->enter($__internal_6032938ecd12c6d7006b72d4f0c318a4f540a965ec6730c4cfda77132e0a2617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_846c120a39581ad91c995c528d662a6ee99f43bb5500ec2b6982541c92451310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846c120a39581ad91c995c528d662a6ee99f43bb5500ec2b6982541c92451310->enter($__internal_846c120a39581ad91c995c528d662a6ee99f43bb5500ec2b6982541c92451310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_846c120a39581ad91c995c528d662a6ee99f43bb5500ec2b6982541c92451310->leave($__internal_846c120a39581ad91c995c528d662a6ee99f43bb5500ec2b6982541c92451310_prof);

        
        $__internal_6032938ecd12c6d7006b72d4f0c318a4f540a965ec6730c4cfda77132e0a2617->leave($__internal_6032938ecd12c6d7006b72d4f0c318a4f540a965ec6730c4cfda77132e0a2617_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1c8834bc79746d32f2dab403ff76ab2e1a840efbaa7575bbca29f668b14df13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8834bc79746d32f2dab403ff76ab2e1a840efbaa7575bbca29f668b14df13a->enter($__internal_1c8834bc79746d32f2dab403ff76ab2e1a840efbaa7575bbca29f668b14df13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e6e8a0e5283013b813e20502de7c3593c743d81ee15de090a40dfa79a7ffc3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e8a0e5283013b813e20502de7c3593c743d81ee15de090a40dfa79a7ffc3a2->enter($__internal_e6e8a0e5283013b813e20502de7c3593c743d81ee15de090a40dfa79a7ffc3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_e6e8a0e5283013b813e20502de7c3593c743d81ee15de090a40dfa79a7ffc3a2->leave($__internal_e6e8a0e5283013b813e20502de7c3593c743d81ee15de090a40dfa79a7ffc3a2_prof);

        
        $__internal_1c8834bc79746d32f2dab403ff76ab2e1a840efbaa7575bbca29f668b14df13a->leave($__internal_1c8834bc79746d32f2dab403ff76ab2e1a840efbaa7575bbca29f668b14df13a_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7b15e14e53ae62fb1344c537a03ce3c1f80c9dac92bc7e868ec5455a24218e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b15e14e53ae62fb1344c537a03ce3c1f80c9dac92bc7e868ec5455a24218e73->enter($__internal_7b15e14e53ae62fb1344c537a03ce3c1f80c9dac92bc7e868ec5455a24218e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b08e36f3e1a82116ec983e5ebdd7571e2393aff3a62fb7c46b90f7010176e601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08e36f3e1a82116ec983e5ebdd7571e2393aff3a62fb7c46b90f7010176e601->enter($__internal_b08e36f3e1a82116ec983e5ebdd7571e2393aff3a62fb7c46b90f7010176e601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_b08e36f3e1a82116ec983e5ebdd7571e2393aff3a62fb7c46b90f7010176e601->leave($__internal_b08e36f3e1a82116ec983e5ebdd7571e2393aff3a62fb7c46b90f7010176e601_prof);

        
        $__internal_7b15e14e53ae62fb1344c537a03ce3c1f80c9dac92bc7e868ec5455a24218e73->leave($__internal_7b15e14e53ae62fb1344c537a03ce3c1f80c9dac92bc7e868ec5455a24218e73_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e467252687d2700f55c90b8a811d4798cd4c0d9592524b1f44634d6e100666df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e467252687d2700f55c90b8a811d4798cd4c0d9592524b1f44634d6e100666df->enter($__internal_e467252687d2700f55c90b8a811d4798cd4c0d9592524b1f44634d6e100666df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c3ca019fd6563fa738a2913c2d87d1545de55a467d2c7e8ff47bc156f52b211a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ca019fd6563fa738a2913c2d87d1545de55a467d2c7e8ff47bc156f52b211a->enter($__internal_c3ca019fd6563fa738a2913c2d87d1545de55a467d2c7e8ff47bc156f52b211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_c3ca019fd6563fa738a2913c2d87d1545de55a467d2c7e8ff47bc156f52b211a->leave($__internal_c3ca019fd6563fa738a2913c2d87d1545de55a467d2c7e8ff47bc156f52b211a_prof);

        
        $__internal_e467252687d2700f55c90b8a811d4798cd4c0d9592524b1f44634d6e100666df->leave($__internal_e467252687d2700f55c90b8a811d4798cd4c0d9592524b1f44634d6e100666df_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_408c0156d2f0bb0d49ea48c58c9eeb799e039588a441d8d3c437e3572127a1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408c0156d2f0bb0d49ea48c58c9eeb799e039588a441d8d3c437e3572127a1c9->enter($__internal_408c0156d2f0bb0d49ea48c58c9eeb799e039588a441d8d3c437e3572127a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a7495870201a2f2d4e2a3b7f23b3d0e077d57d308daaa58dfa53a089cd0eaf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7495870201a2f2d4e2a3b7f23b3d0e077d57d308daaa58dfa53a089cd0eaf67->enter($__internal_a7495870201a2f2d4e2a3b7f23b3d0e077d57d308daaa58dfa53a089cd0eaf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_a7495870201a2f2d4e2a3b7f23b3d0e077d57d308daaa58dfa53a089cd0eaf67->leave($__internal_a7495870201a2f2d4e2a3b7f23b3d0e077d57d308daaa58dfa53a089cd0eaf67_prof);

        
        $__internal_408c0156d2f0bb0d49ea48c58c9eeb799e039588a441d8d3c437e3572127a1c9->leave($__internal_408c0156d2f0bb0d49ea48c58c9eeb799e039588a441d8d3c437e3572127a1c9_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d4dde218bb24113fda6bcd9b2490668ef9b3ea606ca7068e5ab5b188ea4d718b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dde218bb24113fda6bcd9b2490668ef9b3ea606ca7068e5ab5b188ea4d718b->enter($__internal_d4dde218bb24113fda6bcd9b2490668ef9b3ea606ca7068e5ab5b188ea4d718b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c15222071551ce110dc1759ac6f73b4ac8f90ff10cefe7d5db1b4fd13ed6c947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15222071551ce110dc1759ac6f73b4ac8f90ff10cefe7d5db1b4fd13ed6c947->enter($__internal_c15222071551ce110dc1759ac6f73b4ac8f90ff10cefe7d5db1b4fd13ed6c947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c15222071551ce110dc1759ac6f73b4ac8f90ff10cefe7d5db1b4fd13ed6c947->leave($__internal_c15222071551ce110dc1759ac6f73b4ac8f90ff10cefe7d5db1b4fd13ed6c947_prof);

        
        $__internal_d4dde218bb24113fda6bcd9b2490668ef9b3ea606ca7068e5ab5b188ea4d718b->leave($__internal_d4dde218bb24113fda6bcd9b2490668ef9b3ea606ca7068e5ab5b188ea4d718b_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_109f1fce33289ff84767ffa3b7eb04a44d399950878c5bc0d2dcd9c821677662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109f1fce33289ff84767ffa3b7eb04a44d399950878c5bc0d2dcd9c821677662->enter($__internal_109f1fce33289ff84767ffa3b7eb04a44d399950878c5bc0d2dcd9c821677662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4a0a6a1f4469b1d7571ae1a9ee2e5aa0b494203a91a0fdd09a43b91476b504db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0a6a1f4469b1d7571ae1a9ee2e5aa0b494203a91a0fdd09a43b91476b504db->enter($__internal_4a0a6a1f4469b1d7571ae1a9ee2e5aa0b494203a91a0fdd09a43b91476b504db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4a0a6a1f4469b1d7571ae1a9ee2e5aa0b494203a91a0fdd09a43b91476b504db->leave($__internal_4a0a6a1f4469b1d7571ae1a9ee2e5aa0b494203a91a0fdd09a43b91476b504db_prof);

        
        $__internal_109f1fce33289ff84767ffa3b7eb04a44d399950878c5bc0d2dcd9c821677662->leave($__internal_109f1fce33289ff84767ffa3b7eb04a44d399950878c5bc0d2dcd9c821677662_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ef7071a98f1ad315be206c1bd1930f3e40779b8169474093d127a294a8459f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7071a98f1ad315be206c1bd1930f3e40779b8169474093d127a294a8459f6c->enter($__internal_ef7071a98f1ad315be206c1bd1930f3e40779b8169474093d127a294a8459f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d792ad20ad8325ada3afef2af3ef6705e965484bf75b32bceb35551a12bef985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d792ad20ad8325ada3afef2af3ef6705e965484bf75b32bceb35551a12bef985->enter($__internal_d792ad20ad8325ada3afef2af3ef6705e965484bf75b32bceb35551a12bef985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d792ad20ad8325ada3afef2af3ef6705e965484bf75b32bceb35551a12bef985->leave($__internal_d792ad20ad8325ada3afef2af3ef6705e965484bf75b32bceb35551a12bef985_prof);

        
        $__internal_ef7071a98f1ad315be206c1bd1930f3e40779b8169474093d127a294a8459f6c->leave($__internal_ef7071a98f1ad315be206c1bd1930f3e40779b8169474093d127a294a8459f6c_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b7ac589b81fe0e5a710093918d9f6f11069dd11a01ba976db2fe3be3c01d40e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ac589b81fe0e5a710093918d9f6f11069dd11a01ba976db2fe3be3c01d40e2->enter($__internal_b7ac589b81fe0e5a710093918d9f6f11069dd11a01ba976db2fe3be3c01d40e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_eeca9b4afcfac488a8b2878ac9af6b669e357a2420aec163a31c2fd4c54bc552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeca9b4afcfac488a8b2878ac9af6b669e357a2420aec163a31c2fd4c54bc552->enter($__internal_eeca9b4afcfac488a8b2878ac9af6b669e357a2420aec163a31c2fd4c54bc552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_eeca9b4afcfac488a8b2878ac9af6b669e357a2420aec163a31c2fd4c54bc552->leave($__internal_eeca9b4afcfac488a8b2878ac9af6b669e357a2420aec163a31c2fd4c54bc552_prof);

        
        $__internal_b7ac589b81fe0e5a710093918d9f6f11069dd11a01ba976db2fe3be3c01d40e2->leave($__internal_b7ac589b81fe0e5a710093918d9f6f11069dd11a01ba976db2fe3be3c01d40e2_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5a05b1bb306183b10150e670f6faa5512b55f978e090391e3fdfa7e639cdd6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a05b1bb306183b10150e670f6faa5512b55f978e090391e3fdfa7e639cdd6c9->enter($__internal_5a05b1bb306183b10150e670f6faa5512b55f978e090391e3fdfa7e639cdd6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4091a6f6f48839ea54fd0a23b83b0554c0e3d46301b6fcf1a68fb0c3f4397af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4091a6f6f48839ea54fd0a23b83b0554c0e3d46301b6fcf1a68fb0c3f4397af0->enter($__internal_4091a6f6f48839ea54fd0a23b83b0554c0e3d46301b6fcf1a68fb0c3f4397af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 218
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_4091a6f6f48839ea54fd0a23b83b0554c0e3d46301b6fcf1a68fb0c3f4397af0->leave($__internal_4091a6f6f48839ea54fd0a23b83b0554c0e3d46301b6fcf1a68fb0c3f4397af0_prof);

        
        $__internal_5a05b1bb306183b10150e670f6faa5512b55f978e090391e3fdfa7e639cdd6c9->leave($__internal_5a05b1bb306183b10150e670f6faa5512b55f978e090391e3fdfa7e639cdd6c9_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d48f21e1d4664873b24571d7b4e037ea50a5754a7b586ef4b3e9091d8a2fb053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48f21e1d4664873b24571d7b4e037ea50a5754a7b586ef4b3e9091d8a2fb053->enter($__internal_d48f21e1d4664873b24571d7b4e037ea50a5754a7b586ef4b3e9091d8a2fb053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dba17a3d2bb00866e90f35141397378f39bc77d1b955d4218b784d2416e249b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba17a3d2bb00866e90f35141397378f39bc77d1b955d4218b784d2416e249b2->enter($__internal_dba17a3d2bb00866e90f35141397378f39bc77d1b955d4218b784d2416e249b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_dba17a3d2bb00866e90f35141397378f39bc77d1b955d4218b784d2416e249b2->leave($__internal_dba17a3d2bb00866e90f35141397378f39bc77d1b955d4218b784d2416e249b2_prof);

        
        $__internal_d48f21e1d4664873b24571d7b4e037ea50a5754a7b586ef4b3e9091d8a2fb053->leave($__internal_d48f21e1d4664873b24571d7b4e037ea50a5754a7b586ef4b3e9091d8a2fb053_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ab3c849a7a5a6c87223a4b7debf6bda4d51f8212b99f8b21d9e45db14d934002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3c849a7a5a6c87223a4b7debf6bda4d51f8212b99f8b21d9e45db14d934002->enter($__internal_ab3c849a7a5a6c87223a4b7debf6bda4d51f8212b99f8b21d9e45db14d934002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8385020b28fe7b3c07496d06f4dd7154620b251abca2ff5b8da929b9cfbc4dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8385020b28fe7b3c07496d06f4dd7154620b251abca2ff5b8da929b9cfbc4dd2->enter($__internal_8385020b28fe7b3c07496d06f4dd7154620b251abca2ff5b8da929b9cfbc4dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_8385020b28fe7b3c07496d06f4dd7154620b251abca2ff5b8da929b9cfbc4dd2->leave($__internal_8385020b28fe7b3c07496d06f4dd7154620b251abca2ff5b8da929b9cfbc4dd2_prof);

        
        $__internal_ab3c849a7a5a6c87223a4b7debf6bda4d51f8212b99f8b21d9e45db14d934002->leave($__internal_ab3c849a7a5a6c87223a4b7debf6bda4d51f8212b99f8b21d9e45db14d934002_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_47384878fa255554d4852928315b0087adf5a80bc432f62fa68717a13d6bdeb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47384878fa255554d4852928315b0087adf5a80bc432f62fa68717a13d6bdeb5->enter($__internal_47384878fa255554d4852928315b0087adf5a80bc432f62fa68717a13d6bdeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_43a9f1c819bc12b14f2a3a9b6efadd0cb3a42e75c97338f5f7988b19d837b2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a9f1c819bc12b14f2a3a9b6efadd0cb3a42e75c97338f5f7988b19d837b2e4->enter($__internal_43a9f1c819bc12b14f2a3a9b6efadd0cb3a42e75c97338f5f7988b19d837b2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_43a9f1c819bc12b14f2a3a9b6efadd0cb3a42e75c97338f5f7988b19d837b2e4->leave($__internal_43a9f1c819bc12b14f2a3a9b6efadd0cb3a42e75c97338f5f7988b19d837b2e4_prof);

        
        $__internal_47384878fa255554d4852928315b0087adf5a80bc432f62fa68717a13d6bdeb5->leave($__internal_47384878fa255554d4852928315b0087adf5a80bc432f62fa68717a13d6bdeb5_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e79b237fa885a55656212fcb34d68a658c40e4efcf37b6467b7b78fd5dd1092c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79b237fa885a55656212fcb34d68a658c40e4efcf37b6467b7b78fd5dd1092c->enter($__internal_e79b237fa885a55656212fcb34d68a658c40e4efcf37b6467b7b78fd5dd1092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a512694967fa1df0b2eeb899192f30062a44c377f498567a1086a33aeba334f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a512694967fa1df0b2eeb899192f30062a44c377f498567a1086a33aeba334f1->enter($__internal_a512694967fa1df0b2eeb899192f30062a44c377f498567a1086a33aeba334f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a512694967fa1df0b2eeb899192f30062a44c377f498567a1086a33aeba334f1->leave($__internal_a512694967fa1df0b2eeb899192f30062a44c377f498567a1086a33aeba334f1_prof);

        
        $__internal_e79b237fa885a55656212fcb34d68a658c40e4efcf37b6467b7b78fd5dd1092c->leave($__internal_e79b237fa885a55656212fcb34d68a658c40e4efcf37b6467b7b78fd5dd1092c_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_80ae5ed7a56d95f2632a0ea0ee307d70d2f9b677ce4cb24d6eaa9d67087e6da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ae5ed7a56d95f2632a0ea0ee307d70d2f9b677ce4cb24d6eaa9d67087e6da4->enter($__internal_80ae5ed7a56d95f2632a0ea0ee307d70d2f9b677ce4cb24d6eaa9d67087e6da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5f20049a3363a3eec51a177ffcc9b8356f5d4622c457c4f886497e76ad3696f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f20049a3363a3eec51a177ffcc9b8356f5d4622c457c4f886497e76ad3696f3->enter($__internal_5f20049a3363a3eec51a177ffcc9b8356f5d4622c457c4f886497e76ad3696f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5f20049a3363a3eec51a177ffcc9b8356f5d4622c457c4f886497e76ad3696f3->leave($__internal_5f20049a3363a3eec51a177ffcc9b8356f5d4622c457c4f886497e76ad3696f3_prof);

        
        $__internal_80ae5ed7a56d95f2632a0ea0ee307d70d2f9b677ce4cb24d6eaa9d67087e6da4->leave($__internal_80ae5ed7a56d95f2632a0ea0ee307d70d2f9b677ce4cb24d6eaa9d67087e6da4_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_dbdadbe70f78f3efb2e229e2efc78dd58b9475edec878f52889851b6788fed2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdadbe70f78f3efb2e229e2efc78dd58b9475edec878f52889851b6788fed2b->enter($__internal_dbdadbe70f78f3efb2e229e2efc78dd58b9475edec878f52889851b6788fed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1252caecc3a408def29d3603b503df3f12d25f96c82318b5d015417a62899f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1252caecc3a408def29d3603b503df3f12d25f96c82318b5d015417a62899f28->enter($__internal_1252caecc3a408def29d3603b503df3f12d25f96c82318b5d015417a62899f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1252caecc3a408def29d3603b503df3f12d25f96c82318b5d015417a62899f28->leave($__internal_1252caecc3a408def29d3603b503df3f12d25f96c82318b5d015417a62899f28_prof);

        
        $__internal_dbdadbe70f78f3efb2e229e2efc78dd58b9475edec878f52889851b6788fed2b->leave($__internal_dbdadbe70f78f3efb2e229e2efc78dd58b9475edec878f52889851b6788fed2b_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e007dffa6f12efc4946ee198742053adeb249d67f012fec6c8304b79ac627d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e007dffa6f12efc4946ee198742053adeb249d67f012fec6c8304b79ac627d90->enter($__internal_e007dffa6f12efc4946ee198742053adeb249d67f012fec6c8304b79ac627d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_40be75471a89c0c7ee39e68cee5da28fa5e36b647a851990d9bd94d33d46186d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40be75471a89c0c7ee39e68cee5da28fa5e36b647a851990d9bd94d33d46186d->enter($__internal_40be75471a89c0c7ee39e68cee5da28fa5e36b647a851990d9bd94d33d46186d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_40be75471a89c0c7ee39e68cee5da28fa5e36b647a851990d9bd94d33d46186d->leave($__internal_40be75471a89c0c7ee39e68cee5da28fa5e36b647a851990d9bd94d33d46186d_prof);

        
        $__internal_e007dffa6f12efc4946ee198742053adeb249d67f012fec6c8304b79ac627d90->leave($__internal_e007dffa6f12efc4946ee198742053adeb249d67f012fec6c8304b79ac627d90_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d543eb472b9514c551e18bc1e65ba2b4e96924c664f0549796292ddb2be82158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d543eb472b9514c551e18bc1e65ba2b4e96924c664f0549796292ddb2be82158->enter($__internal_d543eb472b9514c551e18bc1e65ba2b4e96924c664f0549796292ddb2be82158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a6f6bc55bd6c7dcaa6e7f0ef02e7a6062d112cda0d1e635fecb107063d225982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f6bc55bd6c7dcaa6e7f0ef02e7a6062d112cda0d1e635fecb107063d225982->enter($__internal_a6f6bc55bd6c7dcaa6e7f0ef02e7a6062d112cda0d1e635fecb107063d225982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_a6f6bc55bd6c7dcaa6e7f0ef02e7a6062d112cda0d1e635fecb107063d225982->leave($__internal_a6f6bc55bd6c7dcaa6e7f0ef02e7a6062d112cda0d1e635fecb107063d225982_prof);

        
        $__internal_d543eb472b9514c551e18bc1e65ba2b4e96924c664f0549796292ddb2be82158->leave($__internal_d543eb472b9514c551e18bc1e65ba2b4e96924c664f0549796292ddb2be82158_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_df8b317ef312e454830d51e8b74736bdb970cdbfb66f17bd4643a0353540054a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8b317ef312e454830d51e8b74736bdb970cdbfb66f17bd4643a0353540054a->enter($__internal_df8b317ef312e454830d51e8b74736bdb970cdbfb66f17bd4643a0353540054a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_00672b8384f1207ab460ed9018a9b6a95e2b04f112cee3c7b06d93fadbaddffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00672b8384f1207ab460ed9018a9b6a95e2b04f112cee3c7b06d93fadbaddffe->enter($__internal_00672b8384f1207ab460ed9018a9b6a95e2b04f112cee3c7b06d93fadbaddffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_00672b8384f1207ab460ed9018a9b6a95e2b04f112cee3c7b06d93fadbaddffe->leave($__internal_00672b8384f1207ab460ed9018a9b6a95e2b04f112cee3c7b06d93fadbaddffe_prof);

        
        $__internal_df8b317ef312e454830d51e8b74736bdb970cdbfb66f17bd4643a0353540054a->leave($__internal_df8b317ef312e454830d51e8b74736bdb970cdbfb66f17bd4643a0353540054a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\PPE4\\Tobat\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}

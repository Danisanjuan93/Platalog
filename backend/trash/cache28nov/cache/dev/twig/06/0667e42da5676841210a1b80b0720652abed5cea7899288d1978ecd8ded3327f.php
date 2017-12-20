<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_ff6ce22d31ab5a8cdb586f9d3e8bca0d37e8fb40ae163be0981ff2c8b116e4ef extends Twig_Template
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
        $__internal_c57423332ba19b9f48adc268dbcb7553e47b74724dbcd0d057b2170089642038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57423332ba19b9f48adc268dbcb7553e47b74724dbcd0d057b2170089642038->enter($__internal_c57423332ba19b9f48adc268dbcb7553e47b74724dbcd0d057b2170089642038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('form_label', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('choice_label', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 186
        echo "
";
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('form_row', $context, $blocks);
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('button_row', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('choice_row', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('date_row', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('time_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_row', $context, $blocks);
        // line 236
        echo "
";
        // line 238
        echo "
";
        // line 239
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_c57423332ba19b9f48adc268dbcb7553e47b74724dbcd0d057b2170089642038->leave($__internal_c57423332ba19b9f48adc268dbcb7553e47b74724dbcd0d057b2170089642038_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_aaea670d7475b94158a4cf663f7b747d5514153e301819c240237afc8e394e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaea670d7475b94158a4cf663f7b747d5514153e301819c240237afc8e394e8a->enter($__internal_aaea670d7475b94158a4cf663f7b747d5514153e301819c240237afc8e394e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_aaea670d7475b94158a4cf663f7b747d5514153e301819c240237afc8e394e8a->leave($__internal_aaea670d7475b94158a4cf663f7b747d5514153e301819c240237afc8e394e8a_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_91a3b78c241916d428152665c5ca943c69e3067d0de82ecf0b00b658bb0a6db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a3b78c241916d428152665c5ca943c69e3067d0de82ecf0b00b658bb0a6db0->enter($__internal_91a3b78c241916d428152665c5ca943c69e3067d0de82ecf0b00b658bb0a6db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_91a3b78c241916d428152665c5ca943c69e3067d0de82ecf0b00b658bb0a6db0->leave($__internal_91a3b78c241916d428152665c5ca943c69e3067d0de82ecf0b00b658bb0a6db0_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7f0ed7827afc89abf68caf5379c428fb405091a68248136ee6423793a0c94074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0ed7827afc89abf68caf5379c428fb405091a68248136ee6423793a0c94074->enter($__internal_7f0ed7827afc89abf68caf5379c428fb405091a68248136ee6423793a0c94074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7f0ed7827afc89abf68caf5379c428fb405091a68248136ee6423793a0c94074->leave($__internal_7f0ed7827afc89abf68caf5379c428fb405091a68248136ee6423793a0c94074_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ee14f043151ac114308b0ac44288e4834f211b966430e40bd7290f3737de8b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee14f043151ac114308b0ac44288e4834f211b966430e40bd7290f3737de8b67->enter($__internal_ee14f043151ac114308b0ac44288e4834f211b966430e40bd7290f3737de8b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_73e1261fcacef7a7cb07d27510ef0ce1ff90969cda972ad22d8373ec6a6e0dc7 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_2c490d4a2a2a1c5341b8c9045ffe692f4f92952a6c12c8b6207a390eb47046c3 = "{{") && ('' === $__internal_2c490d4a2a2a1c5341b8c9045ffe692f4f92952a6c12c8b6207a390eb47046c3 || 0 === strpos($__internal_73e1261fcacef7a7cb07d27510ef0ce1ff90969cda972ad22d8373ec6a6e0dc7, $__internal_2c490d4a2a2a1c5341b8c9045ffe692f4f92952a6c12c8b6207a390eb47046c3)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_ee14f043151ac114308b0ac44288e4834f211b966430e40bd7290f3737de8b67->leave($__internal_ee14f043151ac114308b0ac44288e4834f211b966430e40bd7290f3737de8b67_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b0c3aa639fbb85be20dd304490b1ec06ca8b2189144021422ee4e7f168cdae09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c3aa639fbb85be20dd304490b1ec06ca8b2189144021422ee4e7f168cdae09->enter($__internal_b0c3aa639fbb85be20dd304490b1ec06ca8b2189144021422ee4e7f168cdae09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b0c3aa639fbb85be20dd304490b1ec06ca8b2189144021422ee4e7f168cdae09->leave($__internal_b0c3aa639fbb85be20dd304490b1ec06ca8b2189144021422ee4e7f168cdae09_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_88cfa53d296369e42e4a1ce0710a0d882f6ec39b31e9ddd76c1edb2799be480e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cfa53d296369e42e4a1ce0710a0d882f6ec39b31e9ddd76c1edb2799be480e->enter($__internal_88cfa53d296369e42e4a1ce0710a0d882f6ec39b31e9ddd76c1edb2799be480e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_88cfa53d296369e42e4a1ce0710a0d882f6ec39b31e9ddd76c1edb2799be480e->leave($__internal_88cfa53d296369e42e4a1ce0710a0d882f6ec39b31e9ddd76c1edb2799be480e_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_beda8d5fd739f2ee6da9cac45735d36ed4ebec4d507c985978deba61d7542aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beda8d5fd739f2ee6da9cac45735d36ed4ebec4d507c985978deba61d7542aab->enter($__internal_beda8d5fd739f2ee6da9cac45735d36ed4ebec4d507c985978deba61d7542aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_beda8d5fd739f2ee6da9cac45735d36ed4ebec4d507c985978deba61d7542aab->leave($__internal_beda8d5fd739f2ee6da9cac45735d36ed4ebec4d507c985978deba61d7542aab_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c53ed17138a5fec2aaef3b2cc591d53d7e59b548304d6e227ff9f8c1480a0e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53ed17138a5fec2aaef3b2cc591d53d7e59b548304d6e227ff9f8c1480a0e0f->enter($__internal_c53ed17138a5fec2aaef3b2cc591d53d7e59b548304d6e227ff9f8c1480a0e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_c53ed17138a5fec2aaef3b2cc591d53d7e59b548304d6e227ff9f8c1480a0e0f->leave($__internal_c53ed17138a5fec2aaef3b2cc591d53d7e59b548304d6e227ff9f8c1480a0e0f_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4df7a4c74aeae31cb59abb15e3fcb106d650d3a599998c449945e9a4df161e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df7a4c74aeae31cb59abb15e3fcb106d650d3a599998c449945e9a4df161e31->enter($__internal_4df7a4c74aeae31cb59abb15e3fcb106d650d3a599998c449945e9a4df161e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_4df7a4c74aeae31cb59abb15e3fcb106d650d3a599998c449945e9a4df161e31->leave($__internal_4df7a4c74aeae31cb59abb15e3fcb106d650d3a599998c449945e9a4df161e31_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f902cc271eab6f91f19b982425740fbdb0fbb0cdaffa7d2d88026d90e04c6f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f902cc271eab6f91f19b982425740fbdb0fbb0cdaffa7d2d88026d90e04c6f87->enter($__internal_f902cc271eab6f91f19b982425740fbdb0fbb0cdaffa7d2d88026d90e04c6f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 99
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 100
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 104
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 106
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 107
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 108
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
        
        $__internal_f902cc271eab6f91f19b982425740fbdb0fbb0cdaffa7d2d88026d90e04c6f87->leave($__internal_f902cc271eab6f91f19b982425740fbdb0fbb0cdaffa7d2d88026d90e04c6f87_prof);

    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d74534018de82b9b42f7f353561eebad390df276d126dbb17de149efb85f99b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74534018de82b9b42f7f353561eebad390df276d126dbb17de149efb85f99b8->enter($__internal_d74534018de82b9b42f7f353561eebad390df276d126dbb17de149efb85f99b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 116
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 117
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 120
            echo "<div class=\"checkbox\">";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 122
            echo "</div>";
        }
        
        $__internal_d74534018de82b9b42f7f353561eebad390df276d126dbb17de149efb85f99b8->leave($__internal_d74534018de82b9b42f7f353561eebad390df276d126dbb17de149efb85f99b8_prof);

    }

    // line 126
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8184a2f12d681c96aece5646c0220b0dba71284a03e0b5153a154707a15bdfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8184a2f12d681c96aece5646c0220b0dba71284a03e0b5153a154707a15bdfbb->enter($__internal_8184a2f12d681c96aece5646c0220b0dba71284a03e0b5153a154707a15bdfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 127
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 128
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 131
            echo "<div class=\"radio\">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 133
            echo "</div>";
        }
        
        $__internal_8184a2f12d681c96aece5646c0220b0dba71284a03e0b5153a154707a15bdfbb->leave($__internal_8184a2f12d681c96aece5646c0220b0dba71284a03e0b5153a154707a15bdfbb_prof);

    }

    // line 139
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_00074f70c629b8384afbae073d69b73ac3bd3c143044eaeaa2c9a307511092cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00074f70c629b8384afbae073d69b73ac3bd3c143044eaeaa2c9a307511092cd->enter($__internal_00074f70c629b8384afbae073d69b73ac3bd3c143044eaeaa2c9a307511092cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 140
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 141
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_00074f70c629b8384afbae073d69b73ac3bd3c143044eaeaa2c9a307511092cd->leave($__internal_00074f70c629b8384afbae073d69b73ac3bd3c143044eaeaa2c9a307511092cd_prof);

    }

    // line 144
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7c87fe72010e5ec493f7fc2bbb73117b4fff9282cec34c4e7d2bdb3e972853cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c87fe72010e5ec493f7fc2bbb73117b4fff9282cec34c4e7d2bdb3e972853cd->enter($__internal_7c87fe72010e5ec493f7fc2bbb73117b4fff9282cec34c4e7d2bdb3e972853cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 146
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 147
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7c87fe72010e5ec493f7fc2bbb73117b4fff9282cec34c4e7d2bdb3e972853cd->leave($__internal_7c87fe72010e5ec493f7fc2bbb73117b4fff9282cec34c4e7d2bdb3e972853cd_prof);

    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_33ae02406bae5aae5bd6a15f42fb550d90a8e17468a4902733b238a428f7df55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ae02406bae5aae5bd6a15f42fb550d90a8e17468a4902733b238a428f7df55->enter($__internal_33ae02406bae5aae5bd6a15f42fb550d90a8e17468a4902733b238a428f7df55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 151
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_33ae02406bae5aae5bd6a15f42fb550d90a8e17468a4902733b238a428f7df55->leave($__internal_33ae02406bae5aae5bd6a15f42fb550d90a8e17468a4902733b238a428f7df55_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1921d60c2de5036959edb47c59770babe61e7f81b611cf5d1d14f0bf4cf8f772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1921d60c2de5036959edb47c59770babe61e7f81b611cf5d1d14f0bf4cf8f772->enter($__internal_1921d60c2de5036959edb47c59770babe61e7f81b611cf5d1d14f0bf4cf8f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1921d60c2de5036959edb47c59770babe61e7f81b611cf5d1d14f0bf4cf8f772->leave($__internal_1921d60c2de5036959edb47c59770babe61e7f81b611cf5d1d14f0bf4cf8f772_prof);

    }

    // line 162
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_aa7f4f8de898b347f28c81e1efd1b0b450100d5900c7cb113e26c2f5c08190ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7f4f8de898b347f28c81e1efd1b0b450100d5900c7cb113e26c2f5c08190ec->enter($__internal_aa7f4f8de898b347f28c81e1efd1b0b450100d5900c7cb113e26c2f5c08190ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 163
        echo "    ";
        // line 164
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 165
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 166
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 167
                echo "        ";
            }
            // line 168
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 169
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 170
                echo "        ";
            }
            // line 171
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 172
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 173
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 174
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 175
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 178
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 181
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
            // line 182
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 183
            echo "</label>
    ";
        }
        
        $__internal_aa7f4f8de898b347f28c81e1efd1b0b450100d5900c7cb113e26c2f5c08190ec->leave($__internal_aa7f4f8de898b347f28c81e1efd1b0b450100d5900c7cb113e26c2f5c08190ec_prof);

    }

    // line 189
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_afc57e8e67ad90de327350ad69b39153d441739016b432ba81800193e28304e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc57e8e67ad90de327350ad69b39153d441739016b432ba81800193e28304e3->enter($__internal_afc57e8e67ad90de327350ad69b39153d441739016b432ba81800193e28304e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 190
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 194
        echo "</div>";
        
        $__internal_afc57e8e67ad90de327350ad69b39153d441739016b432ba81800193e28304e3->leave($__internal_afc57e8e67ad90de327350ad69b39153d441739016b432ba81800193e28304e3_prof);

    }

    // line 197
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_718f45cfcbf06a9c2576199cf395edde2f910ac2fee811bf15b1c2723aba1fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718f45cfcbf06a9c2576199cf395edde2f910ac2fee811bf15b1c2723aba1fa4->enter($__internal_718f45cfcbf06a9c2576199cf395edde2f910ac2fee811bf15b1c2723aba1fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 198
        echo "<div class=\"form-group\">";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 200
        echo "</div>";
        
        $__internal_718f45cfcbf06a9c2576199cf395edde2f910ac2fee811bf15b1c2723aba1fa4->leave($__internal_718f45cfcbf06a9c2576199cf395edde2f910ac2fee811bf15b1c2723aba1fa4_prof);

    }

    // line 203
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5e3858788b3eb67ee4dfa7187db295ba9ad75bb96dbc5d9f49fff16f8930fc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3858788b3eb67ee4dfa7187db295ba9ad75bb96dbc5d9f49fff16f8930fc1f->enter($__internal_5e3858788b3eb67ee4dfa7187db295ba9ad75bb96dbc5d9f49fff16f8930fc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 204
        $context["force_error"] = true;
        // line 205
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5e3858788b3eb67ee4dfa7187db295ba9ad75bb96dbc5d9f49fff16f8930fc1f->leave($__internal_5e3858788b3eb67ee4dfa7187db295ba9ad75bb96dbc5d9f49fff16f8930fc1f_prof);

    }

    // line 208
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6ae533c8b3c0328147326606f01e5706127a040fd48a51c2325604dce3bbfede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae533c8b3c0328147326606f01e5706127a040fd48a51c2325604dce3bbfede->enter($__internal_6ae533c8b3c0328147326606f01e5706127a040fd48a51c2325604dce3bbfede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6ae533c8b3c0328147326606f01e5706127a040fd48a51c2325604dce3bbfede->leave($__internal_6ae533c8b3c0328147326606f01e5706127a040fd48a51c2325604dce3bbfede_prof);

    }

    // line 213
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_47dbc6d5a0b2a7e06bcf039d2ed98ced90018cc4455e0845e41a82d6f7727b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47dbc6d5a0b2a7e06bcf039d2ed98ced90018cc4455e0845e41a82d6f7727b64->enter($__internal_47dbc6d5a0b2a7e06bcf039d2ed98ced90018cc4455e0845e41a82d6f7727b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 214
        $context["force_error"] = true;
        // line 215
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_47dbc6d5a0b2a7e06bcf039d2ed98ced90018cc4455e0845e41a82d6f7727b64->leave($__internal_47dbc6d5a0b2a7e06bcf039d2ed98ced90018cc4455e0845e41a82d6f7727b64_prof);

    }

    // line 218
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_de0e4cf1faa4b646a581df49a2dc5291b89f63b20dc9d912c1dc19239b5cdcbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0e4cf1faa4b646a581df49a2dc5291b89f63b20dc9d912c1dc19239b5cdcbd->enter($__internal_de0e4cf1faa4b646a581df49a2dc5291b89f63b20dc9d912c1dc19239b5cdcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_de0e4cf1faa4b646a581df49a2dc5291b89f63b20dc9d912c1dc19239b5cdcbd->leave($__internal_de0e4cf1faa4b646a581df49a2dc5291b89f63b20dc9d912c1dc19239b5cdcbd_prof);

    }

    // line 223
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ab8653c628e849a090b5ad75825b74d006b13875636dd32520f5c703d8feb3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8653c628e849a090b5ad75825b74d006b13875636dd32520f5c703d8feb3b0->enter($__internal_ab8653c628e849a090b5ad75825b74d006b13875636dd32520f5c703d8feb3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 224
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 227
        echo "</div>";
        
        $__internal_ab8653c628e849a090b5ad75825b74d006b13875636dd32520f5c703d8feb3b0->leave($__internal_ab8653c628e849a090b5ad75825b74d006b13875636dd32520f5c703d8feb3b0_prof);

    }

    // line 230
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a94d7179263f4f58c940092e662f40c408448fe5fe57016406a6f1dba1ac5318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94d7179263f4f58c940092e662f40c408448fe5fe57016406a6f1dba1ac5318->enter($__internal_a94d7179263f4f58c940092e662f40c408448fe5fe57016406a6f1dba1ac5318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 231
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 234
        echo "</div>";
        
        $__internal_a94d7179263f4f58c940092e662f40c408448fe5fe57016406a6f1dba1ac5318->leave($__internal_a94d7179263f4f58c940092e662f40c408448fe5fe57016406a6f1dba1ac5318_prof);

    }

    // line 239
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8c2cf997eaa891a2027a3b84c2727c129661e44cb6db1cdc31cb9890087ab2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2cf997eaa891a2027a3b84c2727c129661e44cb6db1cdc31cb9890087ab2b2->enter($__internal_8c2cf997eaa891a2027a3b84c2727c129661e44cb6db1cdc31cb9890087ab2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 240
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 241
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 242
            echo "    <ul class=\"list-unstyled\">";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 244
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "</ul>
    ";
            // line 247
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_8c2cf997eaa891a2027a3b84c2727c129661e44cb6db1cdc31cb9890087ab2b2->leave($__internal_8c2cf997eaa891a2027a3b84c2727c129661e44cb6db1cdc31cb9890087ab2b2_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  841 => 247,  838 => 246,  830 => 244,  826 => 243,  824 => 242,  818 => 241,  816 => 240,  810 => 239,  803 => 234,  801 => 233,  799 => 232,  793 => 231,  787 => 230,  780 => 227,  778 => 226,  776 => 225,  770 => 224,  764 => 223,  757 => 220,  755 => 219,  749 => 218,  742 => 215,  740 => 214,  734 => 213,  727 => 210,  725 => 209,  719 => 208,  712 => 205,  710 => 204,  704 => 203,  697 => 200,  695 => 199,  693 => 198,  687 => 197,  680 => 194,  678 => 193,  676 => 192,  674 => 191,  668 => 190,  662 => 189,  653 => 183,  649 => 182,  634 => 181,  630 => 178,  627 => 175,  626 => 174,  625 => 173,  623 => 172,  620 => 171,  617 => 170,  614 => 169,  611 => 168,  608 => 167,  605 => 166,  602 => 165,  599 => 164,  597 => 163,  591 => 162,  584 => 159,  582 => 157,  576 => 156,  569 => 153,  567 => 151,  561 => 150,  554 => 147,  552 => 146,  546 => 144,  539 => 141,  537 => 140,  531 => 139,  523 => 133,  521 => 132,  519 => 131,  516 => 129,  514 => 128,  512 => 127,  506 => 126,  498 => 122,  496 => 121,  494 => 120,  491 => 118,  489 => 117,  487 => 116,  481 => 115,  473 => 111,  467 => 108,  466 => 107,  465 => 106,  461 => 105,  457 => 104,  450 => 100,  449 => 99,  448 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 239,  197 => 238,  194 => 236,  192 => 230,  189 => 229,  187 => 223,  184 => 222,  182 => 218,  179 => 217,  177 => 213,  174 => 212,  172 => 208,  169 => 207,  167 => 203,  164 => 202,  162 => 197,  159 => 196,  157 => 189,  154 => 188,  151 => 186,  149 => 162,  146 => 161,  144 => 156,  141 => 155,  139 => 150,  136 => 149,  134 => 144,  131 => 143,  129 => 139,  126 => 138,  123 => 136,  121 => 126,  118 => 125,  116 => 115,  113 => 114,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
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
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
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
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}

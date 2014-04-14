<?php

/* AdmingeneratorGeneratorBundle:Form:fields.html.twig */
class __TwigTemplate_c171a530583d7fdafca56c48143a5d3ef3fd4fb134dbd1136a60f76c75de8b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('form_rows', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 4
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) {
            // line 5
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 7
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_form_rows($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if (array_key_exists("options", $context)) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 17
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 21
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    <div class=\"control-group ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"controls\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 33
        if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
            // line 34
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 36
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 44
            echo "    ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label"))));
            // line 45
            echo "    ";
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 46
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 47
                echo "    ";
            }
            // line 48
            echo "    ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 49
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 50
                echo "    ";
            }
            // line 51
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 52
                echo "        ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                // line 53
                echo "    ";
            }
            // line 54
            echo "    <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_form_errors($context, array $blocks = array())
    {
        // line 60
        ob_start();
        // line 61
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 62
            echo "    <span class=\"help-block\">
        <ul class=\"form-errors\">
        ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 65
                echo "            <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                // line 68
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </ul>
    </span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AdmingeneratorGeneratorBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  246 => 70,  239 => 68,  236 => 65,  232 => 64,  228 => 62,  225 => 61,  223 => 60,  220 => 59,  198 => 54,  195 => 53,  192 => 52,  189 => 51,  186 => 50,  183 => 49,  180 => 48,  177 => 47,  174 => 46,  171 => 45,  168 => 44,  166 => 43,  164 => 42,  161 => 41,  154 => 36,  146 => 33,  142 => 32,  137 => 30,  129 => 29,  127 => 28,  124 => 27,  118 => 23,  109 => 21,  104 => 20,  101 => 19,  92 => 17,  87 => 16,  84 => 15,  79 => 13,  71 => 8,  60 => 5,  58 => 4,  53 => 3,  51 => 2,  48 => 1,  44 => 59,  41 => 58,  39 => 41,  36 => 40,  34 => 27,  31 => 26,  26 => 12,  24 => 1,  56 => 27,  42 => 16,  25 => 5,  19 => 1,  141 => 31,  138 => 30,  128 => 32,  119 => 25,  117 => 24,  75 => 11,  70 => 10,  28 => 7,  20 => 1,  197 => 82,  191 => 81,  185 => 78,  162 => 58,  158 => 56,  153 => 53,  148 => 34,  144 => 49,  134 => 45,  130 => 44,  126 => 30,  122 => 41,  115 => 39,  111 => 37,  107 => 35,  105 => 14,  102 => 33,  98 => 32,  94 => 30,  85 => 27,  82 => 14,  78 => 25,  72 => 22,  66 => 7,  62 => 19,  49 => 9,  45 => 8,  40 => 6,  35 => 5,  32 => 8,  29 => 13,);
    }
}

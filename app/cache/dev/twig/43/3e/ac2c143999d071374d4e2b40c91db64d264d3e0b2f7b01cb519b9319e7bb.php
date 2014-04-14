<?php

/* RecrutementTestBundle::accueil_candidat.html.twig */
class __TwigTemplate_433eac2c143999d071374d4e2b40c91db64d264d3e0b2f7b01cb519b9319e7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RecrutementTestBundle::layout_admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RecrutementTestBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oCandidat"]) ? $context["oCandidat"] : $this->getContext($context, "oCandidat")), "nom"), "html", null, true);
        echo "
    <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "nom"), "html", null, true);
        echo "</h3>
    <div>
            ";
        // line 6
        $context["i"] = 1;
        // line 7
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "questions"));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 8
            echo "            <p>
                    <div>
                        <label><b>Question";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</b></label>
                        <div><i>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "libelle"), "html", null, true);
            echo "</i></div>
                    </div>
                    <div>
                        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "reponses"));
            foreach ($context['_seq'] as $context["_key"] => $context["oReponse"]) {
                // line 15
                echo "                            <div>
                                <span>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "intitule"), "html", null, true);
                echo "</span>
                                <span><input type=\"checkbox\" name=\"reponse";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\"/></span>
                                <span>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "isTrue"), "html", null, true);
                echo "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oReponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                    </div>
             </p>
            ";
            // line 23
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 24
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::accueil_candidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  91 => 24,  89 => 23,  85 => 21,  76 => 18,  72 => 17,  68 => 16,  65 => 15,  61 => 14,  55 => 11,  51 => 10,  47 => 8,  42 => 7,  40 => 6,  35 => 4,  31 => 3,  28 => 2,);
    }
}

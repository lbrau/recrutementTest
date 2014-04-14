<?php

/* RecrutementTestBundle::manage_question.html.twig */
class __TwigTemplate_cea0b5dcb30cb1d6935408b004f68d136d0f2851f07e31e30ba332b12a5aecab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RecrutementTestBundle::layout_admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "    <h3>Ajout d'un formulaire de questions</h3>
    <form action=\"#\" method=\"post\" >
            ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_question"]) ? $context["form_question"] : $this->getContext($context, "form_question")), 'form_start');
        echo "   
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_question"]) ? $context["form_question"] : $this->getContext($context, "form_question")), 'errors');
        echo "

            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_question"]) ? $context["form_question"] : $this->getContext($context, "form_question")), "libelle"), 'row');
        echo "
            <div class=\"question\"></div>
            <div>
                ";
        // line 12
        echo "            </div>
            
            <div class=\"reponse_content\"></div>
            <input type=\"button\" class=\"add_reponse\" name=\"add_reponse\" value=\"ajouter une reponse\" />
        <table>
            ";
        // line 17
        if (array_key_exists("aReponses", $context)) {
            // line 18
            echo "            <th>Proposition de réponse</th>
            <th>Bonne réponse</th>
            <th>Action</th>
            ";
            // line 21
            $context["i"] = 0;
            // line 22
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["aReponses"]) ? $context["aReponses"] : $this->getContext($context, "aReponses")));
            foreach ($context['_seq'] as $context["_key"] => $context["oReponse"]) {
                // line 23
                echo "                
                <tr>
                    <td>
                        <input type=\"text\" name=\"reponse_base[";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "][intitule]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "intitule"), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"reponse_base[";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "][identifiant]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "id"), "html", null, true);
                echo "\" />
                    </td>
                    ";
                // line 29
                if (($this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "isTrue") == true)) {
                    // line 30
                    echo "                        <td><input type=\"checkbox\" name=\"reponse_base[";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "][is_true]\" checked value=\"true\"/></td>
                    ";
                } else {
                    // line 32
                    echo "                        <td><input type=\"checkbox\" name=\"reponse_base[";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "][is_true]\" /></td>
                    ";
                }
                // line 34
                echo "                    <td>
                       <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drop_reponse_in_question", array("iIdReponse" => $this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "id"))), "html", null, true);
                echo "\" >supprimer</a>
                    </td>
                </tr>
                
                ";
                // line 39
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oReponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        } else {
            // line 42
            echo "                <div class=\"flashMessage\">Aucune reponse pour cette question</div>
            ";
        }
        // line 44
        echo "        </table>
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_question"]) ? $context["form_question"] : $this->getContext($context, "form_question")), 'rest');
        echo "
        <input type=\"submit\" name=\"valid_question_form\" value=\"valider le formulaire\" />
        
        ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_question"]) ? $context["form_question"] : $this->getContext($context, "form_question")), 'form_end', array("render_rest" => false));
        echo "
    </form>
        
         <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recrutementtest/js/jquery20.js"), "html", null, true);
        echo "\">
         </script>
         
         ";
        // line 54
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 55
        echo "            <script type=\"text/javascript\">
                
                // Rendre le select inactif
                \$('select').attr('disabled', 'disabled');
                
                var i = 1;
                \$('.add_reponse').on('click', function(){
                    
                    var form_reponse;
                    form_reponse  = \"\";
                    form_reponse += '<div>';
                    form_reponse += '<input type=\"text\" name=\"intitule_reponse['+i+'][label]\" placeholder=\"Intitulé reponse '+i+'\"/>';
                    form_reponse += '<label for=\"is_true\">Bonne réponse</label>';
                    form_reponse += '<input type=\"checkbox\" name=\"intitule_reponse['+i+'][is_true]\" />';
                    form_reponse += '</div>';
                    
                    \$('.reponse_content').append(form_reponse);
                    i ++;
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::manage_question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 55,  150 => 54,  144 => 51,  138 => 48,  132 => 45,  129 => 44,  125 => 42,  122 => 41,  116 => 40,  114 => 39,  107 => 35,  104 => 34,  98 => 32,  92 => 30,  90 => 29,  83 => 27,  77 => 26,  72 => 23,  67 => 22,  65 => 21,  60 => 18,  58 => 17,  51 => 12,  45 => 8,  40 => 6,  36 => 5,  32 => 3,  29 => 2,);
    }
}

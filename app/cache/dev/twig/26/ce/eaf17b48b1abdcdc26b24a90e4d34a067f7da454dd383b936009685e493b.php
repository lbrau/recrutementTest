<?php

/* RecrutementTestBundle::manage_test.html.twig */
class __TwigTemplate_26ceeaf17b48b1abdcdc26b24a90e4d34a067f7da454dd383b936009685e493b extends Twig_Template
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
        echo "<form action=\"\" method=\"post\" >
        ";
        // line 5
        echo "         ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "   
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'row');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'row');
        echo "
      
            <div class=\"question_content\"></div>
            <input type=\"button\" class=\"add_question\" name=\"add_question\" value=\"ajouter une question\" />
            <div class=\"question\">
                <table>
                    <th>Questions</th>
                    <th>Réponses proposées</th>
                    <th>Bonne réponse</th>
                    <th>Action</th>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aQuestions"]) ? $context["aQuestions"] : $this->getContext($context, "aQuestions")));
        foreach ($context['_seq'] as $context["_key"] => $context["oQuestion"]) {
            // line 20
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oQuestion"]) ? $context["oQuestion"] : $this->getContext($context, "oQuestion")), "id"), "html", null, true);
            echo "\">
                        <td class=\"libelle\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oQuestion"]) ? $context["oQuestion"] : $this->getContext($context, "oQuestion")), "libelle"), "html", null, true);
            echo "
                        </td>
                        <td class=\"responses\">
                            ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["oQuestion"]) ? $context["oQuestion"] : $this->getContext($context, "oQuestion")), "reponses"));
            foreach ($context['_seq'] as $context["_key"] => $context["oReponse"]) {
                // line 26
                echo "                               <div>
                                   ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "intitule"), "html", null, true);
                echo "<br>
                               </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oReponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </td>
                        <td class=\"correct-response\">
                            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["oQuestion"]) ? $context["oQuestion"] : $this->getContext($context, "oQuestion")), "reponses"));
            foreach ($context['_seq'] as $context["_key"] => $context["oReponse"]) {
                // line 33
                echo "                               <div>
                                   ";
                // line 34
                if (($this->getAttribute((isset($context["oReponse"]) ? $context["oReponse"] : $this->getContext($context, "oReponse")), "isTrue") == true)) {
                    // line 35
                    echo "                                   <input type=\"checkbox\" checked disabled=\"disabled\"/>
                                   ";
                } else {
                    // line 37
                    echo "                                   <input type=\"checkbox\" disabled=\"disabled\"/>
                                   ";
                }
                // line 39
                echo "                               </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oReponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </td>
                        <td>
                             <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manage_question", array("iIdQuestion" => $this->getAttribute((isset($context["oQuestion"]) ? $context["oQuestion"] : $this->getContext($context, "oQuestion")), "id"))), "html", null, true);
            echo "\" >modifier</a><br>
                             <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drop_question", array("iIdQuestion" => $this->getAttribute((isset($context["oQuestion"]) ? $context["oQuestion"] : $this->getContext($context, "oQuestion")), "id"))), "html", null, true);
            echo "\" >supprimer</a><br/>
                             <a href=\"#response_form\" id=\"addResponse\" class=\"addResponse\" data-id=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oQuestion"]) ? $context["oQuestion"] : $this->getContext($context, "oQuestion")), "id"), "html", null, true);
            echo "\">ajouter reponse</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oQuestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </table>
            </div>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <input type=\"submit\"  name=\"valid_form\" value=\"Envoyez le formulaire\"/>
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </form>
        ";
        // line 56
        echo "        <div class=\"questionForm\"></div>
         <div style=\"display:none\">
                <form id=\"response_form\" method=\"post\" action=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("manage_reponse_popin_ajax");
        echo "\">
         
                        <p>
                                <label for=\"intitule_response\">Intitulé de la réponse: </label>
                                <input type=\"text\" id=\"intitule_response\" name=\"intitule_response\" size=\"30\" />
                        </p>
                        <p>
                                <label for=\"is_true\">Réponse: </label>
                                <input type=\"checkbox\" name=\"is_true\" id=\"id_true\" />
                        </p>
                        <p>
                            <input type=\"hidden\" name=\"id_question\" id=\"id_question\" />
                        </p>
                        <p>
                                <input type=\"submit\" value=\"Ajouter la réponse\" />
                        </p>
                        
                </form>
        </div>
         
         <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recrutementtest/js/jquery20.js"), "html", null, true);
        echo "\">
         </script>
         
         ";
        // line 81
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 82
        echo "            <script type=\"text/javascript\">
                
                var i = 0;
                    form_reponse  = \"\";
                    form_reponse += '<div>';
                    form_reponse += '<input type=\"text\" name=\"intitule_reponse[][label]\" placeholder=\"Intitulé reponse\"/>';
                    form_reponse += '<label for=\"is_true\">Bonne réponse</label>';
                    form_reponse += '<input type=\"checkbox\" name=\"intitule_reponse[][is_true]\" />';
                    form_reponse += '<input type=\"submit\" name=\"valid_reponse\" value=\"valider\" />';
                    form_reponse += '</div>';
                
                
                // Gere le bouton de suppression du formulaire d'ajout de questions au test.
                \$('.question_content').on('click','.supprimer_question', function(e) {
                   e.preventDefault();
                   \$(this).parent().remove();
                });
                
                var i = 1;
                \$('.add_question').on('click', function(){
                    
                    var form_reponse;
                    form_question  = \"\";
                    form_question += '<div>';
                    form_question += '<input type=\"text\" name=\"intitule_question['+i+'][label]\" placeholder=\"Intitulé question '+i+'\"/>';
                    form_question += '<a href=\"\" name=\"supprimer_question\" class=\"supprimer_question\">supprimer</a>';
                    form_question += '</div>';
                    
                    \$('.question_content').append(form_question);
                    i ++;
                });
                
                
                var i= 1;
                // Form reponse généré par le dataPrototype
               // var formResponse = '<div><label class=\"required\">Reponse'+i+'</label><div id=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name__\"><div><label for=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___intitule\" class=\"required\">Intitule</label><input type=\"text\" id=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___intitule\" name=\"recrutementtest_recrutementtestbundle_test[questions][__name__][reponses][__name__][intitule]\" required=\"required\" /></div><div><label for=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___isTrue\" class=\"required\">Is true</label><input type=\"text\" id=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___isTrue\" name=\"recrutementtest_recrutementtestbundle_test[questions][__name__][reponses][__name__][isTrue]\" required=\"required\" /></div></div></div>';
                \$('#ajout-form').on('click', function() {

                    //var formQuestion = '<div><label class=\"required\">Question 1</label><div id=\"recrutementtest_recrutementtestbundle_test_questions___name__\"><div><label for=\"recrutementtest_recrutementtestbundle_test_questions___name___libelle\" class=\"required\">Libelle</label><input type=\"textarea\" id=\"recrutementtest_recrutementtestbundle_test_questions___name___libelle\" name=\"recrutementtest_recrutementtestbundle_test[questions][__name__][libelle]\" required=\"required\" /></div><div><label class=\"required\">Reponses</label><div id=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses\" data-prototype=\"&lt;div&gt;&lt;label class=&quot;required&quot;&gt;__name__label__&lt;/label&gt;&lt;div id=&quot;recrutementtest_recrutementtestbundle_test_questions___name___reponses___name__&quot;&gt;&lt;div&gt;&lt;label for=&quot;recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___intitule&quot; class=&quot;required&quot;&gt;Intitule&lt;/label&gt;&lt;input type=&quot;text&quot; id=&quot;recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___intitule&quot; name=&quot;recrutementtest_recrutementtestbundle_test[questions][__name__][reponses][__name__][intitule]&quot; required=&quot;required&quot; /&gt;&lt;/div&gt;&lt;div&gt;&lt;label for=&quot;recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___isTrue&quot; class=&quot;required&quot;&gt;Is true&lt;/label&gt;&lt;input type=&quot;text&quot; id=&quot;recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___isTrue&quot; name=&quot;recrutementtest_recrutementtestbundle_test[questions][__name__][reponses][__name__][isTrue]&quot; required=&quot;required&quot; /&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;\"></div></div></div><input type=\"button\" class=\"ajoutReponse\" value=\"ajouter une reponse\" /></div>';
                    
                    \$.get( \"manage_question.html.twig\", function( data ) {
                        alert(data);
                       \$('.questionForm').append(data);
                    });
                    
                    
                    var formQuestion = \"\";
                    \$('#recrutementtest_recrutementtestbundle_test_questions').append(formQuestion);
                });
                
                \$('body').on('click','.ajoutReponse', function(event) {
                    
                    // Form reponse généré par le dataPrototype
                    var formResponse = '<div><label class=\"required\">Reponse'+i+'</label><div id=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name__\"><div><label for=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___intitule\" class=\"required\">Intitule</label><input type=\"textarea\" id=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___intitule\" name=\"recrutementtest_recrutementtestbundle_test[questions][__name__][reponses][__name__][intitule]\" required=\"required\" /></div><div><label for=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___isTrue\" class=\"required\">Is true</label><input type=\"checkbox\" id=\"recrutementtest_recrutementtestbundle_test_questions___name___reponses___name___isTrue\" name=\"recrutementtest_recrutementtestbundle_test[questions][__name__][reponses][__name__][isTrue]\" required=\"required\" /></div></div></div>';
                    i = i + 1;
                    event.preventDefault();
                    \$('#recrutementtest_recrutementtestbundle_test_questions').append(formResponse);
                });
                    
                    \$(\".addResponse\").on('click',function(){

                        \$('#response_form #id_question').val(\$(this).attr(\"data-id\"));         
                        \$(\"#addResponse\").fancybox({
                            'scrolling'\t\t: 'no',
                            'titleShow'\t\t: false
                        });
                         
                    });
                    
                    
                    \$(\"#response_form\").bind(\"submit\", function(e) {
                        e.preventDefault();

                            \$.ajax({
                                    url: \$(this).attr('action'),
                                    type: \$(this).attr('method'),
                                    data: \$(this).serialize(),
                                    success: function(data) {
                                            \$.fancybox.close();
                                            var intitule = \$('#response_form #intitule_response').val();
                                            var is_true = \$('#response_form #is_true').val();
                                            var id_question = \$('#response_form #id_question').val();

                                            \$('tr#'+id_question+ ' .responses').append(intitule);
                                            if ( \$('#response_form #is_true').is(':checked') ) {
                                                \$('tr#'+id_question+ ' .correct-response').append(\"<div><input type='checkbox' checked disabled='disabled'></div>\");
                                            } else {
                                                \$('tr#'+id_question+ ' .correct-response').append(\"<div><input type='checkbox' disabled='disabled'></div>\");
                                            }
                                    }
                            });
                            
                            return false;
                    });

            </script>
        ";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::manage_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 82,  191 => 81,  185 => 78,  162 => 58,  158 => 56,  153 => 53,  148 => 51,  144 => 49,  134 => 45,  130 => 44,  126 => 43,  122 => 41,  115 => 39,  111 => 37,  107 => 35,  105 => 34,  102 => 33,  98 => 32,  94 => 30,  85 => 27,  82 => 26,  78 => 25,  72 => 22,  66 => 20,  62 => 19,  49 => 9,  45 => 8,  40 => 6,  35 => 5,  32 => 3,  29 => 2,);
    }
}

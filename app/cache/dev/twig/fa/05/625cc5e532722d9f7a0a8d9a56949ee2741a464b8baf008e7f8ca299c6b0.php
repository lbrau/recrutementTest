<?php

/* RecrutementTestBundle::list_tests.html.twig */
class __TwigTemplate_fa05625cc5e532722d9f7a0a8d9a56949ee2741a464b8baf008e7f8ca299c6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">
    <head>
        <title>Administration</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=utf-8/>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb5a6d2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb5a6d2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bb5a6d2_part_1_design_1.css");
            // line 7
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "bb5a6d2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb5a6d2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bb5a6d2_part_1_fancybox_loading_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "bb5a6d2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb5a6d2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bb5a6d2_part_1_fancybox_overlay_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "bb5a6d2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb5a6d2_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bb5a6d2_part_1_fancybox_sprite_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "bb5a6d2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb5a6d2_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bb5a6d2_part_1_jquery.fancybox_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "bb5a6d2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb5a6d2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bb5a6d2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f8a6efd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd_part_1_1jquery20_1.js");
            // line 10
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "f8a6efd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd_part_1_functions_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "f8a6efd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd_part_1_jquery.fancybox.pack_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "f8a6efd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    </head>
        
    <body>
        <div id=\"header\">
            <div id=\"banniere\">NOVEDIA GROUP</div>
            <div id=\"bonjour\" class=\"righthead\">
               Mode administrateur
            </div>
        </div>
            
        ";
        // line 22
        $this->env->loadTemplate("RecrutementTestBundle::menu.html.twig")->display($context);
        // line 23
        echo "
        <div><br /><br /></div>
        <hr class=\"crlf\" />

        <div id=\"wrapper_admin\">
            <table>
                <caption>
                    <h1>Liste des tests existants</h1>
                </caption>

                <thead>
                    <tr>
                        <th scope=\"col\" rowspan=\"2\">Nom</th>
                        <th scope=\"col\" rowspan=\"2\">Libelle</th>
                        <th scope=\"col\" rowspan=\"2\">Action</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aListTests"]) ? $context["aListTests"] : $this->getContext($context, "aListTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["oTest"]) {
            // line 43
            echo "                    <tr>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "nom"), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "libelle"), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manage_admin_test", array("sAction" => "modifier", "iId" => $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "id"))), "html", null, true);
            echo "\">modifier</a>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drop_admin_test", array("iId" => $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "id"))), "html", null, true);
            echo "\">supprimer</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </tbody>
            </table>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manage_admin_test", array("sAction" => "creer", "iId" => 1)), "html", null, true);
        echo "\">Creer un nouveau test</a>
        </div>
        
        <div id=\"footer\">
        </div>
    </body>
        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</html>
";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "            <script type=\"text/javascript\">
               
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::list_tests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 61,  185 => 60,  180 => 65,  178 => 60,  169 => 54,  165 => 52,  155 => 48,  151 => 47,  146 => 45,  142 => 44,  139 => 43,  135 => 42,  114 => 23,  112 => 22,  100 => 12,  74 => 10,  69 => 9,  31 => 7,  27 => 6,  20 => 1,);
    }
}

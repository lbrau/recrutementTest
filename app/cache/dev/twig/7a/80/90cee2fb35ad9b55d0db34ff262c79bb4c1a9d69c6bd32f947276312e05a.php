<?php

/* RecrutementTestBundle::connexion.html.twig */
class __TwigTemplate_7a8090cee2fb35ad9b55d0db34ff262c79bb4c1a9d69c6bd32f947276312e05a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">
<head>
    <title>Bienvenue chez novedia</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=utf-8/>
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb5a6d2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb5a6d2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bb5a6d2_part_1_design_1.css");
            // line 8
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
        // line 10
        echo "</head>
<body>
    <div id=\"header\">
        <div id=\"banniere\">NOVEDIA GROUP</div>
        <div id=\"adminForm\">
            <form action=\"\" method=\"post\">
                <input type=\"text\" name=\"passAdmin\" placeholder=\"Pass admin\" />
                <input type=\"submit\" name=\"connection_admin\" value=\"connexion\"/>
            </form>
        </div>
    </div>
    <div id=\"menu\"></div>
    <div id=\"wrapper\">
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["oFormConnect"]) ? $context["oFormConnect"] : $this->getContext($context, "oFormConnect")), 'form_start');
        echo "   
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["oFormConnect"]) ? $context["oFormConnect"] : $this->getContext($context, "oFormConnect")), 'errors');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oFormConnect"]) ? $context["oFormConnect"] : $this->getContext($context, "oFormConnect")), "nom"), 'row');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oFormConnect"]) ? $context["oFormConnect"] : $this->getContext($context, "oFormConnect")), "prenom"), 'row');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oFormConnect"]) ? $context["oFormConnect"] : $this->getContext($context, "oFormConnect")), "email"), 'row');
        echo "
            ";
        // line 29
        echo "            <select name=\"test_choice\">
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aTests"]) ? $context["aTests"] : $this->getContext($context, "aTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["oTest"]) {
            // line 31
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "id"), "html", null, true);
            echo "\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "nom"), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </select>
            <input type=\"submit\" name=\"valid_question_form\" value=\"valider le formulaire\" />
        
            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["oFormConnect"]) ? $context["oFormConnect"] : $this->getContext($context, "oFormConnect")), 'form_end', array("render_rest" => false));
        echo "
    </div>
    <div id=\"footer\"></div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  125 => 35,  116 => 32,  111 => 31,  107 => 30,  104 => 29,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  69 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}

<?php

/* RecrutementTestBundle::layout_admin.html.twig */
class __TwigTemplate_564ab37f21f6a1351fbe76309de719bf3498a5dd7baed2cc4cb4e75e2f0ee9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">
    <head>
        <title>Administration</title>
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
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f8a6efd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd_part_1_1jquery20_1.js");
            // line 11
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                        <!-- Add fancyBox -->
        ";
            // asset "f8a6efd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd_part_1_functions_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                        <!-- Add fancyBox -->
        ";
            // asset "f8a6efd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd_part_1_jquery.fancybox.pack_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                        <!-- Add fancyBox -->
        ";
        } else {
            // asset "f8a6efd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8a6efd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8a6efd.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                        <!-- Add fancyBox -->
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    </head>
        
    <body>
        <div id=\"header\">
            <div id=\"banniere\">NOVEDIA GROUP</div>
            <div id=\"bonjour\" class=\"righthead\">
               Mode administrateur
            </div>
        </div>
            
        ";
        // line 24
        $this->env->loadTemplate("RecrutementTestBundle::menu.html.twig")->display($context);
        // line 25
        echo "
        <div><br /><br /></div>
        <hr class=\"crlf\" />

        <div id=\"wrapper_admin\">
           ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        </div>
        <div id=\"footer\">
        </div>
    </body>
</html>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "           ";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  137 => 30,  128 => 32,  126 => 30,  119 => 25,  117 => 24,  105 => 14,  75 => 11,  70 => 10,  32 => 8,  20 => 1,  36 => 4,  31 => 3,  28 => 7,);
    }
}

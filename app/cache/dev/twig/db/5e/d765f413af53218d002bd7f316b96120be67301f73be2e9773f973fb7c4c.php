<?php

/* RecrutementTestBundle::list_admin.html.twig */
class __TwigTemplate_db5ed765f413af53218d002bd7f316b96120be67301f73be2e9773f973fb7c4c extends Twig_Template
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
        echo "<table>
    <caption>
        <h1>Liste des administrateurs</h1>
    </caption>

    <thead>
        <tr>
            <th scope=\"col\" rowspan=\"2\">Nom</th>
            <th scope=\"col\" rowspan=\"2\">Actif</th>
            <th scope=\"col\" rowspan=\"2\">Action</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aAllAdmins"]) ? $context["aAllAdmins"] : $this->getContext($context, "aAllAdmins")));
        foreach ($context['_seq'] as $context["_key"] => $context["oAdmin"]) {
            // line 18
            echo "            
        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oAdmin"]) ? $context["oAdmin"] : $this->getContext($context, "oAdmin")), "nom"), "html", null, true);
            echo "</td>
            ";
            // line 21
            if (($this->getAttribute((isset($context["oAdmin"]) ? $context["oAdmin"] : $this->getContext($context, "oAdmin")), "actif") == true)) {
                // line 22
                echo "
               ";
                // line 23
                $context["sAction"] = "désactiver";
                // line 24
                echo "               <td>actif</td>
            ";
            } else {
                // line 26
                echo "                <td>inactif</td>
                ";
                // line 27
                $context["sAction"] = "activer";
                // line 28
                echo "            ";
            }
            // line 29
            echo "            <td>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_visibility_admin", array("iId" => $this->getAttribute((isset($context["oAdmin"]) ? $context["oAdmin"] : $this->getContext($context, "oAdmin")), "id"), "sAction" => (isset($context["sAction"]) ? $context["sAction"] : $this->getContext($context, "sAction")))), "html", null, true);
            echo "\" name=\"is_visible\">";
            echo twig_escape_filter($this->env, (isset($context["sAction"]) ? $context["sAction"] : $this->getContext($context, "sAction")), "html", null, true);
            echo "</a><br>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manage_admin", array("iId" => $this->getAttribute((isset($context["oAdmin"]) ? $context["oAdmin"] : $this->getContext($context, "oAdmin")), "id"))), "html", null, true);
            echo "\" name=\"modif_admin\">modifier</a><br>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("drop_admin", array("iId" => $this->getAttribute((isset($context["oAdmin"]) ? $context["oAdmin"] : $this->getContext($context, "oAdmin")), "id"))), "html", null, true);
            echo "\" name=\"drop_admin\">supprimer</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oAdmin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
</table>
<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("manage_admin");
        echo "\" name=\"newAdmin\" value=\"create\">créer un nouvel admin</a>
";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::list_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  101 => 36,  91 => 32,  87 => 31,  81 => 30,  78 => 29,  75 => 28,  73 => 27,  70 => 26,  66 => 24,  64 => 23,  61 => 22,  59 => 21,  55 => 20,  51 => 18,  47 => 17,  31 => 3,  28 => 2,);
    }
}

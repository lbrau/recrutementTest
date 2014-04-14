<?php

/* RecrutementTestBundle::liste_candidats.html.twig */
class __TwigTemplate_bd8b5715a910973bf0da41266f5c2ea1f128bb8b447ca88dce684fd94668f2bc extends Twig_Template
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
        <h1>Liste des candidats passés</h1>
    </caption>

    <thead>
        <tr>
            <th scope=\"col\" rowspan=\"2\">Nom</th>
            <th scope=\"col\" rowspan=\"2\">Prénom</th>
            <th scope=\"colgroup\" rowspan=\"2\">Adresse e-mail</th>
            <th scope=\"col\" rowspan=\"2\">Détails des tests passées</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aAllCandidats"]) ? $context["aAllCandidats"] : $this->getContext($context, "aAllCandidats")));
        foreach ($context['_seq'] as $context["_key"] => $context["oCandidat"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oCandidat"]) ? $context["oCandidat"] : $this->getContext($context, "oCandidat")), "nom"), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oCandidat"]) ? $context["oCandidat"] : $this->getContext($context, "oCandidat")), "prenom"), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oCandidat"]) ? $context["oCandidat"] : $this->getContext($context, "oCandidat")), "Email"), "html", null, true);
            echo "</td>
            <td>
                <table>
                    <th>nom</th>
                    <th>resultat</th>
                    <th>Durée (minutes)</th>
                    <th>date</th>
                ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["oCandidat"]) ? $context["oCandidat"] : $this->getContext($context, "oCandidat")), "tests"));
            foreach ($context['_seq'] as $context["_key"] => $context["oTest"]) {
                // line 30
                echo "                    <tr>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "nom"), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "resultat"), "html", null, true);
                echo " %</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "duree"), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oTest"]) ? $context["oTest"] : $this->getContext($context, "oTest")), "date"), "m-d-Y H:i:s"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </table>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oCandidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::liste_candidats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  101 => 37,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  77 => 30,  73 => 29,  63 => 22,  59 => 21,  55 => 20,  52 => 19,  48 => 18,  31 => 3,  28 => 2,);
    }
}

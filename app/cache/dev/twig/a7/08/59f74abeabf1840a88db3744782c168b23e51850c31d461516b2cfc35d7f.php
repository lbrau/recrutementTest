<?php

/* RecrutementTestBundle::menu.html.twig */
class __TwigTemplate_a70859f74abeabf1840a88db3744782c168b23e51850c31d461516b2cfc35d7f extends Twig_Template
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
        echo " <div class=\"menu\" id=\"Menu1\" onmouseout=\"fout(this)\" onmouseover=\"fover(this)\">
  <div class=\"titreMenu itemOut\" id=\"Menu1Titre\">Gestion des tests</div>
 
  <div class=\"contenuMenu\" id=\"Menu1Item\">
      <div class=\"itemOut\" onmouseout=\"this.className='itemOut'\" onmouseover=\"this.className='itemOver'\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("list_candidat");
        echo "\" class=\"lienMenu\">Résultats des tests</a></div>
      <div class=\"itemOut\" onmouseout=\"this.className='itemOut'\" onmouseover=\"this.className='itemOver'\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("list_test");
        echo "\" class=\"lienMenu\">Gerer un test</a></div>
  </div>
 
</div>
<!-- Fin Menu 1 -->
<!-- Debut Menu 2 -->
<div class=\"menu\" id=\"Menu2\" onmouseout=\"fout(this)\" onmouseover=\"fover(this)\">
  <div class=\"titreMenu itemOut\" id=\"Menu2Titre\">Candidats</div>
 
  <div class=\"contenuMenu\" id=\"Menu2Item\">
      <div class=\"itemOut\" onmouseout=\"this.className='itemOut'\" onmouseover=\"this.className='itemOver'\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("list_candidat");
        echo "\" class=\"lienMenu\">Consulter la liste</a></div>
  </div>
 
</div>
<!-- Fin Menu 2 -->
<!-- Debut Menu 3 -->

<div class=\"menu\" id=\"Menu3\" onmouseout=\"fout(this)\" onmouseover=\"fover(this)\">
  <div class=\"titreMenu itemOut\" id=\"Menu3Titre\">Administration</div>
 
  <div class=\"contenuMenu\" id=\"Menu3Item\">
      <div class=\"itemOut\" onmouseout=\"this.className='itemOut'\" onmouseover=\"this.className='itemOver'\"><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("list_admin");
        echo "\" class=\"lienMenu\">Gerer un admin</a></div>
  </div>
 
</div>";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  42 => 16,  25 => 5,  19 => 1,  141 => 31,  138 => 30,  128 => 32,  119 => 25,  117 => 24,  75 => 11,  70 => 10,  28 => 7,  20 => 1,  197 => 82,  191 => 81,  185 => 78,  162 => 58,  158 => 56,  153 => 53,  148 => 51,  144 => 49,  134 => 45,  130 => 44,  126 => 30,  122 => 41,  115 => 39,  111 => 37,  107 => 35,  105 => 14,  102 => 33,  98 => 32,  94 => 30,  85 => 27,  82 => 26,  78 => 25,  72 => 22,  66 => 20,  62 => 19,  49 => 9,  45 => 8,  40 => 6,  35 => 5,  32 => 8,  29 => 6,);
    }
}

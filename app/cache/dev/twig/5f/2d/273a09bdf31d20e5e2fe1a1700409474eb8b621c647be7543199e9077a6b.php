<?php

/* RecrutementTestBundle::manage_admin.html.twig */
class __TwigTemplate_5f2d273a09bdf31d20e5e2fe1a1700409474eb8b621c647be7543199e9077a6b extends Twig_Template
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
        echo "<html>
    <form action=\"\" method=\"post\" >
        ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" name=\"valid\" />
    </form>
</html>";
    }

    public function getTemplateName()
    {
        return "RecrutementTestBundle::manage_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  19 => 1,);
    }
}

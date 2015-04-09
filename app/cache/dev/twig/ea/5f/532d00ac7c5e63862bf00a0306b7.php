<?php

/* CRGSBRBundle:GSBR:connexion.html.twig */
class __TwigTemplate_ea5f532d00ac7c5e63862bf00a0306b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CRGSBRBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CRGSBRBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "   <div class=\"row\">
       <div class=\"col-md-4 col-md-offset-4\">
            <h2>Connexion</h2>
       </div>
   </div>
   <div class=\"row\">
       <div class=\"col-md-4 col-md-offset-4\">
            <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_connexion_check"), "html", null, true);
        echo "\" method=\"post\">
              <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Identifiant</label>
                <input type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" id=\"exampleInputEmail1\" placeholder=\"Identifiant\">
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Mot de passe</label>
                <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"exampleInputPassword1\" placeholder=\"Mot de passe\">
              </div>
              <button type=\"submit\" class=\"btn btn-default\">Connexion</button>
            </form>
       </div>
   </div>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:GSBR:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  60 => 16,  51 => 9,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}

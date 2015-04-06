<?php

/* CRGSBRBundle::layout.html.twig */
class __TwigTemplate_19ff04d70bc2cbdac7b91b3456e50fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>
    <nav class=\"navbar navbar-inverse\">
      <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"crgsbr_homepage\">GSB-Report</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Medicaments <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_listeMedicament"), "html", null, true);
        echo "\">Consulter</a></li>
                <li><a href=\"#\">Rechercher</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Praticiens <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crgsbr_listePraticien"), "html", null, true);
        echo "\">Consulter</a></li>
                <li><a href=\"#\">Rechercher</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Rapports de visite <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\">Consulter</a></li>
                <li><a href=\"#\">Rechercher</a></li>
              </ul>
            </li>
          </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Users <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                  </ul>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    
  <div class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"col-md-12\">
        ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "      </div>
    </div>

    <hr>

    <footer>
      
    </footer>
  </div>

  ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "GSBR";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GSBR/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "        ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GSBR/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 86,  154 => 85,  151 => 84,  147 => 73,  144 => 72,  137 => 10,  134 => 9,  128 => 7,  122 => 88,  120 => 84,  108 => 74,  106 => 72,  72 => 41,  62 => 34,  38 => 12,  36 => 9,  31 => 7,  23 => 1,);
    }
}

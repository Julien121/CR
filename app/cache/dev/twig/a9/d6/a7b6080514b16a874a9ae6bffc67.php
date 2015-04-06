<?php

/* CRGSBRBundle::layout.html.twig */
class __TwigTemplate_a9d6a7b6080514b16a874a9ae6bffc67 extends Twig_Template
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
    
  <div class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"col-md-12\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
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

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "        ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"";
        // line 33
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
        return array (  101 => 33,  98 => 32,  95 => 31,  91 => 20,  88 => 19,  81 => 10,  78 => 9,  72 => 7,  66 => 35,  64 => 31,  57 => 27,  49 => 21,  47 => 19,  38 => 12,  36 => 9,  31 => 7,  23 => 1,);
    }
}

<?php

/* CRGSBRBundle:GSBR:listePraticien.html.twig */
class __TwigTemplate_f03d4104b5b5d8fc9508a232bfe76b1b extends Twig_Template
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
        echo "  <h2>Liste des praticiens</h2>
   <table class=\"table table-bordered table-condensed table-body-center\" >
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Ville</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPraticiens"]) ? $context["listPraticiens"] : $this->getContext($context, "listPraticiens")));
        foreach ($context['_seq'] as $context["_key"] => $context["unPraticien"]) {
            // line 18
            echo "                <tr>
                    <td data-title=\"Valeur alphanumérique\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unPraticien"]) ? $context["unPraticien"] : $this->getContext($context, "unPraticien")), "nomMedecin"), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Valeur alphanumérique\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unPraticien"]) ? $context["unPraticien"] : $this->getContext($context, "unPraticien")), "prenomMedecin"), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Valeur alphanumérique\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unPraticien"]) ? $context["unPraticien"] : $this->getContext($context, "unPraticien")), "villeMedecin"), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Valeur alphanumérique\">
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["unPraticien"]) ? $context["unPraticien"] : $this->getContext($context, "unPraticien")), "getTypeMedecin"), "getLibelleType"), "html", null, true);
            echo "
                    </td>
                </tr>  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unPraticien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:GSBR:listePraticien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  81 => 29,  75 => 26,  69 => 23,  63 => 20,  59 => 18,  55 => 17,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}

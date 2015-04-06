<?php

/* CRGSBRBundle:GSBR:listeMedicament.html.twig */
class __TwigTemplate_ed50cd363708db9a2646d67bbc3a44b8 extends Twig_Template
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
        echo "  <h2>Liste des médicaments</h2>
   <table class=\"table table-bordered table-condensed table-body-center\" >
        <thead>
            <tr>
                <th>Nom commercial</th>
                <th>Famille</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesMedicaments"]) ? $context["lesMedicaments"] : $this->getContext($context, "lesMedicaments")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMedicament"]) {
            // line 16
            echo "                <tr>

                    <td data-title=\"Valeur alphanumérique\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "nomCommercial"), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Valeur alphanumérique\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "getFamille"), "getLibelleFamille"), "html", null, true);
            echo "
                    </td>
                </tr>  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMedicament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "CRGSBRBundle:GSBR:listeMedicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  68 => 22,  62 => 19,  57 => 16,  53 => 15,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}

<?php

/* newsletter/templates/components/newsletterPreview.hbs */
class __TwigTemplate_9298c111f7f07b452dd9951b6903b6689c5e508738035fda9a84fc327399a4e9 extends Twig_Template
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
        echo "<iframe src=\"{{ previewUrl }}\" width=\"{{ width }}\" height=\"{{ height }}\"></iframe>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/newsletterPreview.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/components/newsletterPreview.hbs", "C:\\xampp\\htdocs\\formation-front\\formation-front\\monsite_marinegregoire\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\components\\newsletterPreview.hbs");
    }
}

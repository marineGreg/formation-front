<?php

/* newsletter/templates/components/sidebar/content.hbs */
class __TwigTemplate_2b82e6dd03a6e224e049fc4ca642c3d90ec1a653d68242091f9f1ee6dea6724f extends Twig_Template
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
        echo "<div class=\"handlediv\" title=\"Click to toggle\"><br></div>
<h3>";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Content");
        echo "</h3>
<div class=\"mailpoet_region_content clearfix\">
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/sidebar/content.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/components/sidebar/content.hbs", "C:\\xampp\\htdocs\\formation-front\\formation-front\\monsite_marinegregoire\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\components\\sidebar\\content.hbs");
    }
}

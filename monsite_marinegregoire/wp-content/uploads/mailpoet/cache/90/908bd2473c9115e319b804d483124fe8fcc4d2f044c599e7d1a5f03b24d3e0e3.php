<?php

/* newsletter/templates/blocks/automatedLatestContentLayout/widget.hbs */
class __TwigTemplate_521c708a2e2898b4fb94e157490d6d7b0f8f795d1a9a219f56f0dea6c2b70b47 extends Twig_Template
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
        echo "<div class=\"mailpoet_widget_icon\">
";
        // line 2
        echo twig_source($this->env, "newsletter/templates/svg/block-icons/auto-post.svg");
        echo "
</div>
<div class=\"mailpoet_widget_title\">";
        // line 4
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automatic Latest Content");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/automatedLatestContentLayout/widget.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/automatedLatestContentLayout/widget.hbs", "C:\\xampp\\htdocs\\formation-front\\formation-front\\monsite_marinegregoire\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\automatedLatestContentLayout\\widget.hbs");
    }
}

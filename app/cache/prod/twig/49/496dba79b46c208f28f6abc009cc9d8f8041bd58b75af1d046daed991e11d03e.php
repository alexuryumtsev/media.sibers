<?php

/* :gallery:pictures.html.twig */
class __TwigTemplate_cbfb1d7d7854cffebfab9a39afad801267ab43e982f0efe1321b243221f5aa87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gallery:pictures.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Test";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">
    <div class=\"grid\">
    <h1 class=\"h2 text-center\">Gallery</h1>
    <div class=\"row\">

                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "                        <div class=\"col-md-3 col-sm-4 col-xs-6 thumb\">
                            <a data-fancybox=\"gallery\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("http://symfony.local/gallery/albums/" . $this->getAttribute($context["post"], "filepath", array())) . $this->getAttribute($context["post"], "filename", array()))), "html", null, true);
            echo "\">
                                <img class=\"img-responsive\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("http://symfony.local/gallery/albums/" . $this->getAttribute($context["post"], "filepath", array())) . $this->getAttribute($context["post"], "filename", array()))), "html", null, true);
            echo "\" alt=\"\">
                            </a>
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

    </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return ":gallery:pictures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  57 => 15,  53 => 14,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":gallery:pictures.html.twig", "/var/www/html/mediaview/demo/app/Resources/views/gallery/pictures.html.twig");
    }
}

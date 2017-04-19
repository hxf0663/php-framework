<?php

/* index.html */
class __TwigTemplate_813794c39f522bbe6caae9305e958c8de51f274d3e6616ad51d017ab41d49ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["hello"]) ? $context["hello"] : null), "html", null, true);
        echo "</h1>
<ul>
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "\t<li>
\t\t<div>
\t\t\t<h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "sort", array()), "html", null, true);
            echo "</h1>
\t\t\t<p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "name", array()), "html", null, true);
            echo "</p>
\t\t</div>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  49 => 9,  45 => 8,  41 => 6,  37 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/wwwroot/test/public_html/app/view/index.html");
    }
}

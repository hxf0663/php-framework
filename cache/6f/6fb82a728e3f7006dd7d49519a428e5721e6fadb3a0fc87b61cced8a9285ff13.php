<?php

/* layout.html */
class __TwigTemplate_5e85778a04d55b012de34fd1e97dc21a1505e34f2a31d696d1c55f5cc152c2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<title></title>
</head>
<body>
\t";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "</body>
</html>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  34 => 6,  29 => 9,  27 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/home/wwwroot/test/public_html/app/view/layout.html");
    }
}

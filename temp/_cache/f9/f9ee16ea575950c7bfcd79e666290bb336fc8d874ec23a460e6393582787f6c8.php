<?php

/* layout.html */
class __TwigTemplate_1fab2149c4bf969addbaf1621a1e6bb15e5cdf8f14ee209f20c8bd93d7441daa extends Twig_Template
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
<body>

<header>this is header</header>

<content>
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "</content>

<footer>this is footer</footer>

</body>
</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  30 => 10,  28 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>

<header>this is header</header>

<content>
    {% block content %}

    {% endblock %}
</content>

<footer>this is footer</footer>

</body>
</html>
", "layout.html", "F:\\wamp64\\www\\x21\\app\\tpl\\layout.html");
    }
}

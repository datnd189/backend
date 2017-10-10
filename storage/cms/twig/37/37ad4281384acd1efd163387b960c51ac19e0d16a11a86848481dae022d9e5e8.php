<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/contact.htm */
class __TwigTemplate_7eab322365a200c63d7c49fa85f2a4b73a9da85fd64c75af153b83bd66e590db extends Twig_Template
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
        echo "<form action=\"\" method=\"POST\" role=\"form\">
\t<legend><h1>Contact</h1></legend>

\t<div class=\"form-group\">
\t\t<label for=\"\">Name</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Name\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"\">Email</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter your email\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"\">Message</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Message\">
\t</div>

\t

\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/contact.htm";
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
        return new Twig_Source("<form action=\"\" method=\"POST\" role=\"form\">
\t<legend><h1>Contact</h1></legend>

\t<div class=\"form-group\">
\t\t<label for=\"\">Name</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Name\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"\">Email</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter your email\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"\">Message</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Message\">
\t</div>

\t

\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>", "C:\\xampp\\htdocs\\acme/themes/acme/pages/contact.htm", "");
    }
}

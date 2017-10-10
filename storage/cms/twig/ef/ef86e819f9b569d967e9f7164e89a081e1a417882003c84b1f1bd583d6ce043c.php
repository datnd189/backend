<?php

/* C:\xampp\htdocs\acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_9e4408db32a6e96a59500c71ca5dd396b6e1cbbfc42fc27c64c7c6098ee4a018 extends Twig_Template
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
        echo "<h1>Contact us</h1>
<form action=\"\" method=\"POST\" role=\"form\">

\t<div class=\"form-group\">
\t\t<label for=\"\">Name</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Name\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"\">Email</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter email\">
\t</div>
    <div class=\"form-group\">
\t\t<label for=\"\">Message</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Message\">
\t</div>
\t

\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm";
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
        return new Twig_Source("<h1>Contact us</h1>
<form action=\"\" method=\"POST\" role=\"form\">

\t<div class=\"form-group\">
\t\t<label for=\"\">Name</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Name\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"\">Email</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter email\">
\t</div>
    <div class=\"form-group\">
\t\t<label for=\"\">Message</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"\" placeholder=\"Enter Message\">
\t</div>
\t

\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}

<?php

/* C:\xampp\htdocs\acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_295271d889a05666093127b54e193920b41defd34ed73e91266163eacbf70059 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse\" role=\"navigation\">
\t<div class=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"";
        // line 17
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
\t\t\t\t<li class=\"";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
\t\t\t\t<li class=\"";
        // line 19
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a></li>
\t\t\t\t<li class=\"";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a></li>
\t\t\t
\t\t\t</ul
\t\t</div><!-- /.navbar-collapse -->
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  58 => 19,  50 => 18,  42 => 17,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\" role=\"navigation\">
\t<div class=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">{{this.theme.site_name}}</a>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'about' %}active{% endif %}\"><a href=\"{{ 'about'|page }}\">About</a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'blog' %}active{% endif %}\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'contact' %}active{% endif %}\"><a href=\"{{ 'contact'|page }}\">Contact</a></li>
\t\t\t
\t\t\t</ul
\t\t</div><!-- /.navbar-collapse -->
\t</div>
</nav>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm", "");
    }
}

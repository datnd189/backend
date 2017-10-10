<?php

/* C:\xampp\htdocs\acme/themes/acme/layouts/default.htm */
class __TwigTemplate_30613a3a8284947919e94ebe76f7aca3f16070ba1b1f8b9b7fd0c871856cf9ee extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Acme-";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t\t<!-- Bootstrap CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\">
\t\t";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "\t</head>
\t<body>
\t\t<header>
\t\t\t";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "\t\t</header>
\t\t<div class=\"container\">
\t\t\t";
        // line 19
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 20
        echo "\t\t</div>

\t\t<footer>
\t\t\t";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "\t\t</footer>

\t\t<script src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
\t\t<script src=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
\t\t<script src=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
\t\t
\t
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  76 => 27,  72 => 26,  68 => 24,  64 => 23,  59 => 20,  57 => 19,  53 => 17,  49 => 16,  44 => 13,  41 => 12,  37 => 11,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Acme-{{this.page.title}}</title>
        <meta name=\"description\" content=\"{{this.page.meta_description}}\">
\t\t<!-- Bootstrap CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"{{'assets/css/theme.css'|theme}}\">
\t\t{% styles %}
\t</head>
\t<body>
\t\t<header>
\t\t\t{% partial 'site/header' %}
\t\t</header>
\t\t<div class=\"container\">
\t\t\t{% page %}
\t\t</div>

\t\t<footer>
\t\t\t{% partial 'site/footer' %}
\t\t</footer>

\t\t<script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
\t\t<script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
\t\t<script src=\"{{'assets/javascript/app.js'|theme}}\"></script>
\t\t
\t
\t</body>
</html>", "C:\\xampp\\htdocs\\acme/themes/acme/layouts/default.htm", "");
    }
}

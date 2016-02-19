<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/layouts/admin.htm */
class __TwigTemplate_3ea2a63f5722e13070ff9ef3779b32fcb02c0bd75859fd3c46dfbd645e2a7f4e extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>S - ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"nj\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
    ";
        // line 15
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 16
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/style.css", 2 => "assets/css/font-awesome.css", 3 => "assets/css/navbar.css", 4 => "assets/css/slider.css", 5 => "assets/css/custom.css", 6 => "assets/css/slider.css", 7 => "assets/404/css/404.css"));
        // line 25
        echo "\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

    ";
        // line 37
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 38
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 40
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js"));
        // line 43
        echo "\"></script>

    ";
        // line 45
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 46
        echo "    ";
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 47
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 48
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/layouts/admin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 48,  90 => 47,  86 => 46,  79 => 45,  75 => 43,  73 => 40,  69 => 38,  67 => 37,  53 => 25,  50 => 16,  47 => 15,  43 => 14,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>S - {{ this.page.title }}</title>*/
/* */
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="title" content="{{ this.page.meta_title }}">*/
/*     <meta name="author" content="nj">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*     {% styles %}*/
/*     <link href="{{ [*/
/*             'assets/css/bootstrap.min.css',*/
/*             'assets/css/style.css',*/
/*             'assets/css/font-awesome.css',*/
/*             'assets/css/navbar.css',*/
/*             'assets/css/slider.css',*/
/*             'assets/css/custom.css',*/
/*             'assets/css/slider.css',*/
/*             'assets/404/css/404.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/* */
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* */
/*     {% page %}*/
/* */
/*     <!-- Scripts -->*/
/*     <script src="{{ [*/
/*             'assets/js/jquery.js',*/
/*             'assets/js/bootstrap.min.js'*/
/*         ]|theme }}"></script>*/
/* */
/*     {% framework extras %}*/
/*     {% framework %}*/
/*     {% scripts %}*/
/* */
/* </body>*/
/* </html>*/

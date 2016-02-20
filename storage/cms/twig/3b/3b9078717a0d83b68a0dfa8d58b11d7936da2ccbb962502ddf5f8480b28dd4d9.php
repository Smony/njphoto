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
    <title>Limitless - ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"nj\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
    ";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "    <!-- Global stylesheets -->
    <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900", 1 => "assets/admin/css/icons/icomoon/styles.css", 2 => "assets/admin/css/bootstrap.css", 3 => "assets/admin/css/core.css", 4 => "assets/admin/css/components.css", 5 => "assets/admin/css/colors.css"));
        // line 23
        echo "\" rel=\"stylesheet\">
    <!-- /global stylesheets -->





    <!-- Core JS files -->
    <script type=\"text/javascript\" src=\"assets/js/plugins/loaders/pace.min.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/core/libraries/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/core/libraries/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/plugins/loaders/blockui.min.js\"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type=\"text/javascript\" src=\"assets/js/plugins/visualization/d3/d3.min.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/plugins/visualization/d3/d3_tooltip.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/plugins/forms/styling/switchery.min.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/plugins/forms/styling/uniform.min.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/plugins/forms/selects/bootstrap_multiselect.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/plugins/ui/moment/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/plugins/pickers/daterangepicker.js\"></script>

    <script type=\"text/javascript\" src=\"assets/js/core/app.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/pages/dashboard.js\"></script>
    <!-- /theme JS files -->

</head>
<body>

<!-- Main navbar -->
<div class=\"navbar navbar-inverse\">
    <div class=\"navbar-header\">
        <a class=\"navbar-brand\" href=\"";
        // line 56
        echo $this->env->getExtension('CMS')->pageFilter("account");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/logo_light.png");
        echo "\" alt=\"\"></a>

        <ul class=\"nav navbar-nav visible-xs-block\">
            <li><a data-toggle=\"collapse\" data-target=\"#navbar-mobile\"><i class=\"icon-tree5\"></i></a></li>
            <li><a class=\"sidebar-mobile-main-toggle\"><i class=\"icon-paragraph-justify3\"></i></a></li>
        </ul>
    </div>

    <div class=\"navbar-collapse collapse\" id=\"navbar-mobile\">

        <ul class=\"nav navbar-nav\">
            <li><a class=\"sidebar-control sidebar-main-toggle hidden-xs\"><i class=\"icon-paragraph-justify3\"></i></a></li>
            <!--
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"icon-git-compare\"></i>
                                <span class=\"visible-xs-inline-block position-right\">Git updates</span>
                                <span class=\"badge bg-warning-400\">9</span>
                            </a>

                            <div class=\"dropdown-menu dropdown-content\">
                                <div class=\"dropdown-content-heading\">
                                    Git updates
                                    <ul class=\"icons-list\">
                                        <li><a href=\"#\"><i class=\"icon-sync\"></i></a></li>
                                    </ul>
                                </div>

                                <ul class=\"media-list dropdown-content-body width-350\">
                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            Drop the IE <a href=\"#\">specific hacks</a> for temporal inputs
                                            <div class=\"media-annotation\">4 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-commit\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            Add full font overrides for popovers and tooltips
                                            <div class=\"media-annotation\">36 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-info text-info btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-branch\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            <a href=\"#\">Chris Arney</a> created a new <span class=\"text-semibold\">Design</span> branch
                                            <div class=\"media-annotation\">2 hours ago</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-success text-success btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-merge\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            <a href=\"#\">Eugene Kopyov</a> merged <span class=\"text-semibold\">Master</span> and <span class=\"text-semibold\">Dev</span> branches
                                            <div class=\"media-annotation\">Dec 18, 18:36</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            Have Carousel ignore keyboard events
                                            <div class=\"media-annotation\">Dec 12, 05:46</div>
                                        </div>
                                    </li>
                                </ul>

                                <div class=\"dropdown-content-footer\">
                                    <a href=\"#\" data-popup=\"tooltip\" title=\"All activity\"><i class=\"icon-menu display-block\"></i></a>
                                </div>
                            </div>
                        </li>
                        -->
        </ul>

        ";
        // line 149
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 150
            echo "            <p class=\"navbar-text\"><span class=\"label bg-success-400\">Online</span></p>
        ";
        } else {
            // line 152
            echo "            <p class=\"navbar-text\"><span class=\"label bg-warning-400\">Offline</span></p>
        ";
        }
        // line 154
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown language-switch\">

                ";
        // line 158
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 159
            echo "                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
            // line 160
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/gb.png");
            echo "\" class=\"position-left\" alt=\"\">
                    English
                    <!--<span class=\"caret\"></span>-->
                </a>
                ";
        }
        // line 165
        echo "    <!--
                <ul class=\"dropdown-menu\">
                    <li><a class=\"deutsch\"><img src=\"";
        // line 167
        echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/de.png");
        echo "\" alt=\"\"> Deutsch</a></li>
                    <li><a class=\"ukrainian\"><img src=\"";
        // line 168
        echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/ua.png");
        echo "\" alt=\"\"> Українська</a></li>
                    <li><a class=\"english\"><img src=\"";
        // line 169
        echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/gb.png");
        echo "\" alt=\"\"> English</a></li>
                    <li><a class=\"espana\"><img src=\"";
        // line 170
        echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/es.png");
        echo "\" alt=\"\"> España</a></li>
                    <li><a class=\"russian\"><img src=\"";
        // line 171
        echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/ru.png");
        echo "\" alt=\"\"> Русский</a></li>
                </ul>
    -->
            </li>
            ";
        // line 175
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 176
            echo "            <li class=\"dropdown disabled\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-bubbles4\"></i>
                    <span class=\"visible-xs-inline-block position-right\">Messages</span>
                    <span class=\"badge bg-warning-400\">1</span>
                </a>

                <div class=\"dropdown-menu dropdown-content width-350\">
                    <div class=\"dropdown-content-heading\">
                        Messages
                        <ul class=\"icons-list\">
                            <li><a href=\"#\"><i class=\"icon-compose\"></i></a></li>
                        </ul>
                    </div>

                    <ul class=\"media-list dropdown-content-body\">

                        <li class=\"media\">
                            <div class=\"media-left\">
                                <img src=\"";
            // line 195
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
            echo "\" class=\"img-circle img-sm\" alt=\"\">
                                <span class=\"badge bg-danger-400 media-badge\">5</span>
                            </div>

                            <div class=\"media-body\">
                                <a href=\"#\" class=\"media-heading\">
                                    <span class=\"text-semibold\">James Alexander</span>
                                    <span class=\"media-annotation pull-right\">04:58</span>
                                </a>

                                <span class=\"text-muted\">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>


                    </ul>

                    <div class=\"dropdown-content-footer\">
                        <a href=\"#\" data-popup=\"tooltip\" title=\"All messages\"><i class=\"icon-menu display-block\"></i></a>
                    </div>
                </div>
            </li>
            ";
        }
        // line 218
        echo "
            ";
        // line 219
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
            // line 220
            echo "                <li class=\"dropdown dropdown-user\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"";
            // line 222
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
            echo "\" alt=\"\">
                        <span>";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</span>
                        <i class=\"caret\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"disabled\"><a href=\"#\"><span class=\"badge bg-teal-400 pull-right\">1</span> <i class=\"icon-comment-discussion\"></i> Messages</a></li>
                        <li class=\"divider\"></li>
                        ";
            // line 230
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 231
                echo "                            <li><a href=\"scripts:void();\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><i class=\"icon-switch2\"></i> Logout</a></li>
                        ";
            }
            // line 233
            echo "                    </ul>
                </li>
            ";
        } else {
            // line 236
            echo "            <li class=\"dropdown dropdown-user\">

                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
            // line 239
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
            echo "\" alt=\"\">
                    <span>Nobody is logged in</span>
                </a>

            </li>
            ";
        }
        // line 245
        echo "

        </ul>
    </div>
</div>
<!-- /main navbar -->

<!-- Page container -->
<div class=\"page-container\">

    <!-- Page content -->
    <div class=\"page-content\">
";
        // line 257
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 258
            echo "\t<!-- Main sidebar -->
<div class=\"sidebar sidebar-main\">
    <div class=\"sidebar-content\">

        <!-- User menu -->
        <div class=\"sidebar-user\">
            <div class=\"category-content\">
                <div class=\"media\">
                    <a href=\"#\" class=\"media-left\"><img src=\"";
            // line 266
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
            echo "\" class=\"img-circle img-sm\" alt=\"\"></a>
                    <div class=\"media-body\">
                        <span class=\"media-heading text-semibold\">";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</span>
                        <div class=\"text-size-mini text-muted\">
                            <i class=\"glyphicon glyphicon-envelope text-size-small\"></i> &nbsp;";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
                        </div>
                    </div>

                    <div class=\"media-right media-middle\">
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-cog3\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class=\"sidebar-category sidebar-category-visible\">
            <div class=\"category-content no-padding\">
                <ul class=\"navigation navigation-main navigation-accordion\">

                    <!-- Main -->
                    <li class=\"navigation-header\"><span>Main</span> <i class=\"icon-menu\" title=\"Main pages\"></i></li>
                    <li class=\"active\"><a href=\"";
            // line 294
            echo "/";
            echo "\"><i class=\"icon-home4\"></i> <span>HOME</span></a></li>
                    <li>
                        <a href=\"#\"><i class=\"icon-stack2\"></i> <span>Files</span></a>
                        <ul>
                            <li><a href=\"scripts:void();\">Files all</a></l
                            <li class=\"navigation-divider\"></li>
                            <li><a href=\"scripts:void();\">test</a></li>
                        </ul>
                    </li>

                    <li><a href=\"scripts:void();\"><i class=\"glyphicon glyphicon-comment\"></i> <span>Messages <span class=\"label bg-blue-400\">1</span></span></a></li>
                    <li>
                        <a
                                href=\"javascript:;\"
                                onclick=\"\$('#accountDeactivateForm').toggle()\"><i class=\"glyphicon glyphicon-circle-arrow-down\"></i>
                            <span>Deactivate account</span>
                        </a>
                    </li>
                    <!-- /main -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
";
        } else {
            // line 323
            echo "
";
        }
        // line 325
        echo "


    ";
        // line 328
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 329
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 331
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js"));
        // line 334
        echo "\"></script>

    ";
        // line 336
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 337
        echo "    ";
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 338
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 339
        echo "

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

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
        return array (  471 => 339,  467 => 338,  463 => 337,  456 => 336,  452 => 334,  450 => 331,  446 => 329,  444 => 328,  439 => 325,  435 => 323,  403 => 294,  376 => 270,  371 => 268,  366 => 266,  356 => 258,  354 => 257,  340 => 245,  331 => 239,  326 => 236,  321 => 233,  317 => 231,  315 => 230,  305 => 223,  301 => 222,  297 => 220,  295 => 219,  292 => 218,  266 => 195,  245 => 176,  243 => 175,  236 => 171,  232 => 170,  228 => 169,  224 => 168,  220 => 167,  216 => 165,  208 => 160,  205 => 159,  203 => 158,  197 => 154,  193 => 152,  189 => 150,  187 => 149,  89 => 56,  54 => 23,  52 => 16,  49 => 15,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Limitless - {{ this.page.title }}</title>*/
/* */
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="title" content="{{ this.page.meta_title }}">*/
/*     <meta name="author" content="nj">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*     {% styles %}*/
/*     <!-- Global stylesheets -->*/
/*     <link href="{{ [*/
/*             'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900',*/
/*             'assets/admin/css/icons/icomoon/styles.css',*/
/*             'assets/admin/css/bootstrap.css',*/
/*             'assets/admin/css/core.css',*/
/*             'assets/admin/css/components.css',*/
/*             'assets/admin/css/colors.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     <!-- /global stylesheets -->*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- Core JS files -->*/
/*     <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>*/
/*     <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>*/
/*     <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>*/
/*     <!-- /core JS files -->*/
/* */
/*     <!-- Theme JS files -->*/
/*     <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>*/
/*     <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>*/
/*     <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>*/
/*     <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>*/
/*     <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>*/
/*     <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>*/
/*     <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>*/
/* */
/*     <script type="text/javascript" src="assets/js/core/app.js"></script>*/
/*     <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>*/
/*     <!-- /theme JS files -->*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <!-- Main navbar -->*/
/* <div class="navbar navbar-inverse">*/
/*     <div class="navbar-header">*/
/*         <a class="navbar-brand" href="{{ 'account'|page }}"><img src="{{ 'assets/admin/images/logo_light.png'|theme }}" alt=""></a>*/
/* */
/*         <ul class="nav navbar-nav visible-xs-block">*/
/*             <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>*/
/*             <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="navbar-collapse collapse" id="navbar-mobile">*/
/* */
/*         <ul class="nav navbar-nav">*/
/*             <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>*/
/*             <!--*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="icon-git-compare"></i>*/
/*                                 <span class="visible-xs-inline-block position-right">Git updates</span>*/
/*                                 <span class="badge bg-warning-400">9</span>*/
/*                             </a>*/
/* */
/*                             <div class="dropdown-menu dropdown-content">*/
/*                                 <div class="dropdown-content-heading">*/
/*                                     Git updates*/
/*                                     <ul class="icons-list">*/
/*                                         <li><a href="#"><i class="icon-sync"></i></a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/* */
/*                                 <ul class="media-list dropdown-content-body width-350">*/
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             Drop the IE <a href="#">specific hacks</a> for temporal inputs*/
/*                                             <div class="media-annotation">4 minutes ago</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             Add full font overrides for popovers and tooltips*/
/*                                             <div class="media-annotation">36 minutes ago</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch*/
/*                                             <div class="media-annotation">2 hours ago</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches*/
/*                                             <div class="media-annotation">Dec 18, 18:36</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             Have Carousel ignore keyboard events*/
/*                                             <div class="media-annotation">Dec 12, 05:46</div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                                 <div class="dropdown-content-footer">*/
/*                                     <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         -->*/
/*         </ul>*/
/* */
/*         {% if user %}*/
/*             <p class="navbar-text"><span class="label bg-success-400">Online</span></p>*/
/*         {% else %}*/
/*             <p class="navbar-text"><span class="label bg-warning-400">Offline</span></p>*/
/*         {% endif %}*/
/* */
/*         <ul class="nav navbar-nav navbar-right">*/
/*             <li class="dropdown language-switch">*/
/* */
/*                 {% if user %}*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <img src="{{ 'assets/admin/images/flags/gb.png'|theme }}" class="position-left" alt="">*/
/*                     English*/
/*                     <!--<span class="caret"></span>-->*/
/*                 </a>*/
/*                 {% endif %}*/
/*     <!--*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a class="deutsch"><img src="{{ 'assets/admin/images/flags/de.png'|theme }}" alt=""> Deutsch</a></li>*/
/*                     <li><a class="ukrainian"><img src="{{ 'assets/admin/images/flags/ua.png'|theme }}" alt=""> Українська</a></li>*/
/*                     <li><a class="english"><img src="{{ 'assets/admin/images/flags/gb.png'|theme }}" alt=""> English</a></li>*/
/*                     <li><a class="espana"><img src="{{ 'assets/admin/images/flags/es.png'|theme }}" alt=""> España</a></li>*/
/*                     <li><a class="russian"><img src="{{ 'assets/admin/images/flags/ru.png'|theme }}" alt=""> Русский</a></li>*/
/*                 </ul>*/
/*     -->*/
/*             </li>*/
/*             {% if user %}*/
/*             <li class="dropdown disabled">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="icon-bubbles4"></i>*/
/*                     <span class="visible-xs-inline-block position-right">Messages</span>*/
/*                     <span class="badge bg-warning-400">1</span>*/
/*                 </a>*/
/* */
/*                 <div class="dropdown-menu dropdown-content width-350">*/
/*                     <div class="dropdown-content-heading">*/
/*                         Messages*/
/*                         <ul class="icons-list">*/
/*                             <li><a href="#"><i class="icon-compose"></i></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <ul class="media-list dropdown-content-body">*/
/* */
/*                         <li class="media">*/
/*                             <div class="media-left">*/
/*                                 <img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" class="img-circle img-sm" alt="">*/
/*                                 <span class="badge bg-danger-400 media-badge">5</span>*/
/*                             </div>*/
/* */
/*                             <div class="media-body">*/
/*                                 <a href="#" class="media-heading">*/
/*                                     <span class="text-semibold">James Alexander</span>*/
/*                                     <span class="media-annotation pull-right">04:58</span>*/
/*                                 </a>*/
/* */
/*                                 <span class="text-muted">who knows, maybe that would be the best thing for me...</span>*/
/*                             </div>*/
/*                         </li>*/
/* */
/* */
/*                     </ul>*/
/* */
/*                     <div class="dropdown-content-footer">*/
/*                         <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/*             {% if user.name %}*/
/*                 <li class="dropdown dropdown-user">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                         <img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" alt="">*/
/*                         <span>{{ user.name }}</span>*/
/*                         <i class="caret"></i>*/
/*                     </a>*/
/* */
/*                     <ul class="dropdown-menu dropdown-menu-right">*/
/*                         <li class="disabled"><a href="#"><span class="badge bg-teal-400 pull-right">1</span> <i class="icon-comment-discussion"></i> Messages</a></li>*/
/*                         <li class="divider"></li>*/
/*                         {% if user %}*/
/*                             <li><a href="scripts:void();" data-request="onLogout" data-request-data="redirect: '/'"><i class="icon-switch2"></i> Logout</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </li>*/
/*             {% else %}*/
/*             <li class="dropdown dropdown-user">*/
/* */
/*                 <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" alt="">*/
/*                     <span>Nobody is logged in</span>*/
/*                 </a>*/
/* */
/*             </li>*/
/*             {% endif %}*/
/* */
/* */
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* <!-- /main navbar -->*/
/* */
/* <!-- Page container -->*/
/* <div class="page-container">*/
/* */
/*     <!-- Page content -->*/
/*     <div class="page-content">*/
/* {% if user %}*/
/* 	<!-- Main sidebar -->*/
/* <div class="sidebar sidebar-main">*/
/*     <div class="sidebar-content">*/
/* */
/*         <!-- User menu -->*/
/*         <div class="sidebar-user">*/
/*             <div class="category-content">*/
/*                 <div class="media">*/
/*                     <a href="#" class="media-left"><img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" class="img-circle img-sm" alt=""></a>*/
/*                     <div class="media-body">*/
/*                         <span class="media-heading text-semibold">{{ user.name }}</span>*/
/*                         <div class="text-size-mini text-muted">*/
/*                             <i class="glyphicon glyphicon-envelope text-size-small"></i> &nbsp;{{ user.email }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="media-right media-middle">*/
/*                         <ul class="icons-list">*/
/*                             <li>*/
/*                                 <a href="#"><i class="icon-cog3"></i></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /user menu -->*/
/* */
/* */
/*         <!-- Main navigation -->*/
/*         <div class="sidebar-category sidebar-category-visible">*/
/*             <div class="category-content no-padding">*/
/*                 <ul class="navigation navigation-main navigation-accordion">*/
/* */
/*                     <!-- Main -->*/
/*                     <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>*/
/*                     <li class="active"><a href="{{ '/' }}"><i class="icon-home4"></i> <span>HOME</span></a></li>*/
/*                     <li>*/
/*                         <a href="#"><i class="icon-stack2"></i> <span>Files</span></a>*/
/*                         <ul>*/
/*                             <li><a href="scripts:void();">Files all</a></l*/
/*                             <li class="navigation-divider"></li>*/
/*                             <li><a href="scripts:void();">test</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li><a href="scripts:void();"><i class="glyphicon glyphicon-comment"></i> <span>Messages <span class="label bg-blue-400">1</span></span></a></li>*/
/*                     <li>*/
/*                         <a*/
/*                                 href="javascript:;"*/
/*                                 onclick="$('#accountDeactivateForm').toggle()"><i class="glyphicon glyphicon-circle-arrow-down"></i>*/
/*                             <span>Deactivate account</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <!-- /main -->*/
/* */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /main navigation -->*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- /main sidebar -->*/
/* {% else %}*/
/* */
/* {% endif %}*/
/* */
/* */
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
/* */
/*     </div>*/
/*     <!-- /page content -->*/
/* */
/* </div>*/
/* <!-- /page container -->*/
/* */
/* </body>*/
/* </html>*/

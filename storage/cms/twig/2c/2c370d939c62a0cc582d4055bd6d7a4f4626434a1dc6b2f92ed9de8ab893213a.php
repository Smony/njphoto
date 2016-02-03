<?php

/* D:\OpenServer\domains\october.nj.biz/themes/fabriciorabelo-squad/partials/header.htm */
class __TwigTemplate_9abd6a38d09b27a7edf33bf187c16e94564d2ab0781cfae1d5d97222286b4890 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">
                <h1 class=\"upper\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
            </a>
        </div>
        ";
        // line 11
        if (((($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()) != "404") && ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()) != "error")) && ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()) != "maintenance"))) {
            // line 12
            echo "        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#intro\">Home</a></li>
                <li><a href=\"#about\">About</a></li>
                <li><a href=\"#service\">Service</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                <!--<li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Example menu</a></li>
                        <li><a href=\"#\">Example menu</a></li>
                        <li><a href=\"#\">Example menu</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        ";
        }
        // line 31
        echo "    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/fabriciorabelo-squad/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  39 => 12,  37 => 11,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header page-scroll">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                 <i class="fa fa-bars"></i>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ 'home'|page }}">*/
/*                 <h1 class="upper">{{ this.theme.site_name }}</h1>*/
/*             </a>*/
/*         </div>*/
/*         {% if this.page.baseFileName != '404' and  this.page.baseFileName != 'error' and this.page.baseFileName != 'maintenance' %}*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse navbar-right navbar-main-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="#intro">Home</a></li>*/
/*                 <li><a href="#about">About</a></li>*/
/*                 <li><a href="#service">Service</a></li>*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*                 <!--<li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Example menu</a></li>*/
/*                         <li><a href="#">Example menu</a></li>*/
/*                         <li><a href="#">Example menu</a></li>*/
/*                     </ul>*/
/*                 </li>-->*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*         {% endif %}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </nav>*/

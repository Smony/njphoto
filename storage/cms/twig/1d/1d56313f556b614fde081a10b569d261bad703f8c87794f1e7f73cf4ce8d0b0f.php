<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/partials/navigation_footer.htm */
class __TwigTemplate_13104e4aca66f31e814dbe9077f3df68bb3613817ba411a561df072b32637289 extends Twig_Template
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
        echo "<ul class=\"MENU\">
    <br>
    <li>MENU</li>
</ul>
<ul class=\"MENU_items\">

    <hr>    <li ><a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a></li>
    <hr>    <li ><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("works");
        echo "\">HOW IT WORKS</a></li>
    <hr>    <li ><a href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->pageFilter("services");
        echo "\">SERVICES AND PRICES</a></li>
    <hr>    <li ><a href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->pageFilter("contanct");
        echo "\">CONTACT US</a></li>


</ul>
<hr>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/partials/navigation_footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <ul class="MENU">*/
/*     <br>*/
/*     <li>MENU</li>*/
/* </ul>*/
/* <ul class="MENU_items">*/
/* */
/*     <hr>    <li ><a href="{{ 'home'|page }}">Home</a></li>*/
/*     <hr>    <li ><a href="{{ 'works'|page }}">HOW IT WORKS</a></li>*/
/*     <hr>    <li ><a href="{{ 'services'|page }}">SERVICES AND PRICES</a></li>*/
/*     <hr>    <li ><a href="{{ 'contanct'|page }}">CONTACT US</a></li>*/
/* */
/* */
/* </ul>*/
/* <hr>*/

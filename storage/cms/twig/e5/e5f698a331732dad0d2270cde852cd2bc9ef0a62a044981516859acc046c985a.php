<?php

/* D:\OpenServer\domains\october.nj.biz/themes/demo/partials/navigation.htm */
class __TwigTemplate_625ee0ab51c423b47b72af9b15559d757c6f635253caa75f8bbaf183bd4ea964 extends Twig_Template
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
        echo "<ul class=\"list-inline\">
    <li><a href=\"";
        // line 2
        echo $this->env->getExtension('CMS')->pageFilter("blog");
        echo "\">Blog</a></li>
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('CMS')->pageFilter("contact");
        echo "\">Contact</a></li>

</ul>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/demo/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="list-inline">*/
/*     <li><a href="{{ 'blog'|page }}">Blog</a></li>*/
/*     <li><a href="{{ 'contact'|page }}">Contact</a></li>*/
/* */
/* </ul>*/

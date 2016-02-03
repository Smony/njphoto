<?php

/* D:\OpenServer\domains\october.nj.biz/themes/demo/pages/blog.htm */
class __TwigTemplate_81096c7e35acd92b3a6fff405a6626ba89b7b5a7bc2438df8aae116dd4fd5959 extends Twig_Template
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
        echo "blog text
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "<hr />
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/demo/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* blog text*/
/* {% component 'blogCategories' %}*/
/* <hr />*/
/* {% component 'blogPosts' %}*/

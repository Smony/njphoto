<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/pages/s.htm */
class __TwigTemplate_5bbcc53064ec04b3dd5f632d371cceeb75b7b69dcfb40167a6b78fc06a8dc627 extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("slider_main.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("how_it_works.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("If_you_items.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("coffee_items.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("plan.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/pages/s.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% content "slider_main.htm" %}*/
/* {% content "how_it_works.htm" %}*/
/* {% content "If_you_items.htm" %}*/
/* {% content "coffee_items.htm" %}*/
/* {% content "plan.htm" %}*/

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
        echo "<!-- INCLUDE SLIDER MAIN PAGE -->
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("carousel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("work"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "  <!--INCLUDE WORK ITEMS -->

";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("If_you_items.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "
";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("homeCoffee"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " <!-- INCLUDE COFFEE ITEMS -->

";
        // line 10
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
        return array (  50 => 10,  43 => 8,  40 => 7,  36 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE SLIDER MAIN PAGE -->*/
/* {% component 'carousel' %}*/
/* */
/* {% component 'work' %}  <!--INCLUDE WORK ITEMS -->*/
/* */
/* {% content "If_you_items.htm" %}*/
/* */
/* {% component 'homeCoffee' %} <!-- INCLUDE COFFEE ITEMS -->*/
/* */
/* {% content "plan.htm" %}*/

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
        echo " <!--INCLUDE SLIDER MAIN PAGE -->

";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("work"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "  <!--INCLUDE WORK ITEMS -->

";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("If_you_items.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "
";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("homeCoffee"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " <!-- INCLUDE COFFEE ITEMS -->

";
        // line 9
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
        return array (  47 => 9,  40 => 7,  37 => 6,  33 => 5,  26 => 3,  19 => 1,);
    }
}
/* {% content "slider_main.htm" %} <!--INCLUDE SLIDER MAIN PAGE -->*/
/* */
/* {% component 'work' %}  <!--INCLUDE WORK ITEMS -->*/
/* */
/* {% content "If_you_items.htm" %}*/
/* */
/* {% component 'homeCoffee' %} <!-- INCLUDE COFFEE ITEMS -->*/
/* */
/* {% content "plan.htm" %}*/

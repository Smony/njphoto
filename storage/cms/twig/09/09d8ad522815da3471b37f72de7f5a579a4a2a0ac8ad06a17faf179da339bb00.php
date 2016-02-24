<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/pages/contanct.htm */
class __TwigTemplate_76e5700ef519abff4ec6b7b0610bc13dd573b29b538804d189f5ffed767e62bf extends Twig_Template
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
        echo "<div class=\"row\">

   Contact template 
   
   ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/pages/contanct.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="row">*/
/* */
/*    Contact template */
/*    */
/*    {% component 'googleMap' %}*/
/* </div>*/

<?php

/* D:\OpenServer\domains\october.nj.biz/themes/fabriciorabelo-squad/pages/blog.htm */
class __TwigTemplate_437eec3686e74033f4bcb56ea73a7ecd8713e743bb6111daa02f4643a407af50 extends Twig_Template
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
        echo "<!-- Section: intro -->
<section id=\"intro\" class=\"intro\">

    <div class=\"slogan\">
        <h2>OOPS !!!<span class=\"text_color\"> MAINTENANCE</span> </h2>
        <h4>SORRY, BUT WE ARE UNDER MAINTENANCE AT THIS MOMENT, PLEASE TRY AGAIN LATER.</h4>
    </div>
</section>
<!-- /Section: intro -->

";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/fabriciorabelo-squad/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }
}
/* <!-- Section: intro -->*/
/* <section id="intro" class="intro">*/
/* */
/*     <div class="slogan">*/
/*         <h2>OOPS !!!<span class="text_color"> MAINTENANCE</span> </h2>*/
/*         <h4>SORRY, BUT WE ARE UNDER MAINTENANCE AT THIS MOMENT, PLEASE TRY AGAIN LATER.</h4>*/
/*     </div>*/
/* </section>*/
/* <!-- /Section: intro -->*/
/* */
/* {% component 'blogPosts' %}*/

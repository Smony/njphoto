<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/pages/test.htm */
class __TwigTemplate_0b3e3db3b047377f01bc8a98f12483deb7db9ee20a0b8852a958152d0c208e34 extends Twig_Template
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
        echo "<div class=\"conteiner\">
    <div class=\"row\">
        <p>
            template test


        <hr />

";
        // line 9
        echo $this->env->getExtension('debug')->runDump($this->env, $context, (isset($context["work"]) ? $context["work"] : null));
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "title", array()), "html", null, true);
        echo "
";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("work"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "            

        <br />





        </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <p>*/
/*             template test*/
/* */
/* */
/*         <hr />*/
/* */
/* {{ dump(work) }}*/
/* {{ work.title }}*/
/* {% component 'work' %}*/
/*             */
/* */
/*         <br />*/
/* */
/* */
/* */
/* */
/* */
/*         </p>*/
/*     </div>*/
/* </div>*/

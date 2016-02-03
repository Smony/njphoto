<?php

/* D:\OpenServer\domains\october.nj.biz/themes/rainlab-relax/pages/contact.htm */
class __TwigTemplate_79146e91e002a4de2bba9e69111502b3a6bf252cf3fff1ac452765bf8167568d extends Twig_Template
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
    <div class=\"col-md-4\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("contact/page"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "
        <div class=\"module-contact well\">
            ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/rainlab-relax/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 11,  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {% content 'contact/page' %}*/
/* */
/*         <div class="module-contact well">*/
/*             {% content 'contact/details' %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <div id="partialContactForm">*/
/*             {% partial 'contact/form' %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/

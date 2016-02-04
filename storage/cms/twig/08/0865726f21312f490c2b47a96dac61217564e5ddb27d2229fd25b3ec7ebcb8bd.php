<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/pages/account.htm */
class __TwigTemplate_ae42f42dc15738f891b8b40efd39339ff1f1796d9eef95f68db2e677beb11835 extends Twig_Template
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
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-10 \">

            Account template

            ";
        // line 8
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 9
            echo "            <p>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 11
            echo "            <p>Nobody is logged in</p>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 15
            echo "            <a data-request=\"onLogout\" data-request-data=\"redirect: 'good-bye'\">Sign out</a>
            ";
        }
        // line 16
        echo " 
            
            <hr />
            
            ";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "            
            <hr />
            
        </div>
        <div class=\"col-lg-1\"></div>
    </div>
</div>

";
        // line 29
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 30
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  69 => 29,  59 => 21,  55 => 20,  49 => 16,  45 => 15,  43 => 14,  40 => 13,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <div class="col-lg-1"></div>*/
/*         <div class="col-lg-10 ">*/
/* */
/*             Account template*/
/* */
/*             {% if user %}*/
/*             <p>Hello {{ user.name }}</p>*/
/*             {% else %}*/
/*             <p>Nobody is logged in</p>*/
/*             {% endif %}*/
/* */
/*             {% if user %}*/
/*             <a data-request="onLogout" data-request-data="redirect: 'good-bye'">Sign out</a>*/
/*             {% endif %} */
/*             */
/*             <hr />*/
/*             */
/*             {% component 'account' %}*/
/*             */
/*             <hr />*/
/*             */
/*         </div>*/
/*         <div class="col-lg-1"></div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% framework extras %}*/
/* {% scripts %}*/

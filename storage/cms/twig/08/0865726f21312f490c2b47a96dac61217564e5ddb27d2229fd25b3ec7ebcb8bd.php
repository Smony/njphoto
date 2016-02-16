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
        // line 12
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 13
            echo "            <p>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 15
            echo "            <p>Nobody is logged in</p>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 19
            echo "            <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
            ";
        }
        // line 20
        echo " 
            
            <hr />
            
            ";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "



            ";
        // line 29
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 30
            echo "            <hr />

            <div class=\"row\">
                <p>users</p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "

                <hr />
                
                ";
            // line 37
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("imageUploader"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 38
            echo "                
                <hr />
            </div>

            ";
        } else {
            // line 43
            echo "            <hr />
            <div class=\"row\">
                <!--<p>masters</p>-->

            </div>
            ";
        }
        // line 49
        echo "            
            

            
        </div>
        <div class=\"col-lg-1\"></div>
    </div>
</div>

";
        // line 58
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 59
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
        return array (  120 => 59,  113 => 58,  102 => 49,  94 => 43,  87 => 38,  83 => 37,  76 => 33,  71 => 30,  69 => 29,  63 => 25,  59 => 24,  53 => 20,  49 => 19,  47 => 18,  44 => 17,  40 => 15,  34 => 13,  32 => 12,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <div class="col-lg-1"></div>*/
/*         <div class="col-lg-10 ">*/
/* */
/*             Account template*/
/* */
/*          */
/* */
/* */
/* */
/*             {% if user %}*/
/*             <p>Hello {{ user.name }}</p>*/
/*             {% else %}*/
/*             <p>Nobody is logged in</p>*/
/*             {% endif %}*/
/* */
/*             {% if user %}*/
/*             <a data-request="onLogout" data-request-data="redirect: '/'">Sign out</a>*/
/*             {% endif %} */
/*             */
/*             <hr />*/
/*             */
/*             {% component 'account' %}*/
/* */
/* */
/* */
/* */
/*             {% if user %}*/
/*             <hr />*/
/* */
/*             <div class="row">*/
/*                 <p>users</p>{{ user.name }}*/
/* */
/*                 <hr />*/
/*                 */
/*                 {% component 'imageUploader' %}*/
/*                 */
/*                 <hr />*/
/*             </div>*/
/* */
/*             {% else %}*/
/*             <hr />*/
/*             <div class="row">*/
/*                 <!--<p>masters</p>-->*/
/* */
/*             </div>*/
/*             {% endif %}*/
/*             */
/*             */
/* */
/*             */
/*         </div>*/
/*         <div class="col-lg-1"></div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% framework extras %}*/
/* {% scripts %}*/

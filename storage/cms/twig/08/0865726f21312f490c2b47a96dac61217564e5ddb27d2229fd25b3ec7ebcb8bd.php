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
            echo "            <a data-request=\"onLogout\" data-request-data=\"redirect: '/good-by'\">Sign out</a>
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
            ";
        // line 22
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 23
            echo "            <hr />

            <div class=\"row\">
                <p>users</p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "
                <hr />
                ";
            // line 28
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("Gallery"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 29
            echo "                <hr />

            </div>

            ";
        } else {
            // line 34
            echo "            <hr />
            <div class=\"row\">
                <!--<p>masters</p>-->

            </div>
            ";
        }
        // line 40
        echo "            
            

            
        </div>
        <div class=\"col-lg-1\"></div>
    </div>
</div>

";
        // line 49
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 50
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
        return array (  111 => 50,  104 => 49,  93 => 40,  85 => 34,  78 => 29,  74 => 28,  69 => 26,  64 => 23,  62 => 22,  59 => 21,  55 => 20,  49 => 16,  45 => 15,  43 => 14,  40 => 13,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
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
/*             <a data-request="onLogout" data-request-data="redirect: '/good-by'">Sign out</a>*/
/*             {% endif %} */
/*             */
/*             <hr />*/
/*             */
/*             {% component 'account' %}*/
/* */
/*             {% if user %}*/
/*             <hr />*/
/* */
/*             <div class="row">*/
/*                 <p>users</p>{{ user.name }}*/
/*                 <hr />*/
/*                 {% component 'Gallery' %}*/
/*                 <hr />*/
/* */
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

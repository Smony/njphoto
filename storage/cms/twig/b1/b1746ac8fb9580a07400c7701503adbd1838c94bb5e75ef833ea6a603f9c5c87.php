<?php

/* D:\OpenServer\domains\october.nj.biz/themes/demo/pages/account.htm */
class __TwigTemplate_3f681a90ad7ab2e3e0fa3c6163d90dcbafdb65b71ef453306586ba6233a9bc2d extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">

        ";
        // line 4
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "password", array()) == "\$2y\$10\$RKXnry.uM.EzzyEX9pSULeIB0.5Hvce9UfsdWZOniayMafRS.ewY2")) {
            // line 5
            echo "        <p>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "password", array()), "html", null, true);
            echo "</p>
        ";
        } else {
            // line 8
            echo "        <p>Nobody is logged in</p>
        ";
        }
        // line 10
        echo "
        <hr />
        
            ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "



    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/demo/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 13,  40 => 10,  36 => 8,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         {% if user.password == '$2y$10$RKXnry.uM.EzzyEX9pSULeIB0.5Hvce9UfsdWZOniayMafRS.ewY2' %}*/
/*         <p>Hello {{ user.name }}</p>*/
/*         <p>{{ user.password }}</p>*/
/*         {% else %}*/
/*         <p>Nobody is logged in</p>*/
/*         {% endif %}*/
/* */
/*         <hr />*/
/*         */
/*             {% component 'account' %}*/
/* */
/* */
/* */
/* */
/*     </div>*/
/* */
/* </div>*/

<?php

/* D:\OpenServer\domains\october.nj.biz/themes/demo/pages/home.htm */
class __TwigTemplate_d5f71c6d4bd845c2be7129ef4abfe2bcbf4982c615afd2fc59a93414c19192f2 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">

        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
        ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "    </div>
</div>

<div class=\"container\">
    <ul class=\"list-inline\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->pageFilter("account");
        echo "\">account</a></li>
        <li>";
        // line 13
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 14
            echo "        <p>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</p>
        ";
        } else {
            // line 16
            echo "        <p>Nobody is logged in</p>
        ";
        }
        // line 17
        echo "</li>
        <li>";
        // line 18
        if ((isset($context["user"]) ? $context["user"] : null)) {
            echo "<a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>";
        }
        echo "</li>
        
    </ul>



    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>

    <hr />






</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  58 => 17,  54 => 16,  48 => 14,  46 => 13,  42 => 12,  35 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="jumbotron">*/
/*     <div class="container">*/
/* */
/*         {% partial "navigation" %}*/
/* */
/*         {% content "welcome.htm" %}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <ul class="list-inline">*/
/*         <li><a href="{{ 'account'|page }}">account</a></li>*/
/*         <li>{% if user %}*/
/*         <p>Hello {{ user.name }}</p>*/
/*         {% else %}*/
/*         <p>Nobody is logged in</p>*/
/*         {% endif %}</li>*/
/*         <li>{% if user %}<a data-request="onLogout" data-request-data="redirect: '/'">Sign out</a>{% endif %}</li>*/
/*         */
/*     </ul>*/
/* */
/* */
/* */
/*     <div class="page-header">*/
/*         <h2>Overview <small>Basic concepts</small></h2>*/
/*     </div>*/
/* */
/*     <hr />*/
/* */
/* */
/* */
/* */
/* */
/* */
/* </div>*/

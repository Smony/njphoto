<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_6b9030235a40b58839fb91cc2f45458a6adeacbfed794bbbb1ffd461311b398b extends Twig_Template
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
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        </div>

        <div class=\"col-md-6\">
            <h3>Register</h3>
            ";
            // line 12
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::register")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "        </div>

    </div>

";
        } else {
            // line 18
            echo "
    ";
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "
    ";
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "
    ";
            // line 23
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  66 => 23,  63 => 22,  59 => 21,  56 => 20,  52 => 19,  49 => 18,  42 => 13,  38 => 12,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if not user %}*/
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-md-6">*/
/*             <h3>Sign in</h3>*/
/*             {% partial __SELF__ ~ '::signin' %}*/
/*         </div>*/
/* */
/*         <div class="col-md-6">*/
/*             <h3>Register</h3>*/
/*             {% partial __SELF__ ~ '::register' %}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% else %}*/
/* */
/*     {% partial __SELF__ ~ '::activation_check' %}*/
/* */
/*     {% partial __SELF__ ~ '::update' %}*/
/* */
/*     {% partial __SELF__ ~ '::deactivate_link' %}*/
/* */
/* {% endif %}*/

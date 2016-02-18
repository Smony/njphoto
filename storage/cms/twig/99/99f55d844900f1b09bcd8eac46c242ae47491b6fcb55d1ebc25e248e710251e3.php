<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/jorgeandrade/subscribe/components/subscriber/alert.htm */
class __TwigTemplate_b94c15aa0e4a60b55e73a478de773155a2fa5e3a528dcde15b4e09056dec43b9 extends Twig_Template
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
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 2
            echo " <div class=\"alert alert-primary alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
  ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "
</div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/jorgeandrade/subscribe/components/subscriber/alert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if result %}*/
/*  <div class="alert alert-primary alert-dismissible" role="alert">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*   {{result}}*/
/* </div>*/
/*  {% endif %}*/

<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/smony/home/components/theme/default.htm */
class __TwigTemplate_ba4869d04b431f69b509dbf941257e1d0de013bb9c5832b7a9cee8a867a7c327 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "getContact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 2
            echo "
<p  class=\"contact\">
    <img src=\"";
            // line 4
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/phone.jpg");
            echo "\">
    ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone_number", array()), "html", null, true);
            echo "
</p>

<p  class=\"contact\">
    <img src=\"";
            // line 9
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/e-mail.jpg");
            echo "\">
    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "
</p>

<p  class=\"contact\">
    <img src=\"";
            // line 14
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/map.jpg");
            echo "\">
    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "address", array()), "html", null, true);
            echo "
</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/smony/home/components/theme/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  49 => 14,  42 => 10,  38 => 9,  31 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for contact in home.getContact %}*/
/* */
/* <p  class="contact">*/
/*     <img src="{{ 'assets/img/phone.jpg'|theme }}">*/
/*     {{ contact.phone_number }}*/
/* </p>*/
/* */
/* <p  class="contact">*/
/*     <img src="{{ 'assets/img/e-mail.jpg'|theme }}">*/
/*     {{ contact.email }}*/
/* </p>*/
/* */
/* <p  class="contact">*/
/*     <img src="{{ 'assets/img/map.jpg'|theme }}">*/
/*     {{ contact.address }}*/
/* </p>*/
/* */
/* {% endfor %}*/

<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/partials/footer.htm */
class __TwigTemplate_5d631f54e4b6573709dd6c973e82364a8766ff7bddfa24e6fc9f87f85573226a extends Twig_Template
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
        echo "<div class=\"col-xs-hidden col-lg-2\"> </div>

    <div class=\"col-xs-12 col-lg-2\">

        <p class=\"contact_logo\">
            <a href=\"";
        // line 6
        echo "/";
        echo "\" class=\"logo_in_footer\">
                S
            </a>
        </p>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "getContact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 12
            echo "
        <p  class=\"contact\">
            <img src=\"";
            // line 14
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/phone.jpg");
            echo "\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone_number", array()), "html", null, true);
            echo "
        </p>

        <p  class=\"contact\">
            <img src=\"";
            // line 19
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/e-mail.jpg");
            echo "\">
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "
        </p>

        <p  class=\"contact\">
            <img src=\"";
            // line 24
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/map.jpg");
            echo "\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "address", array()), "html", null, true);
            echo "
        </p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        <p  class=\"contact_social_networks\">

            <a href=\"#\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-facebook  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;


            <a href=\"#\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-twitter  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;


            <a href=\"#\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-pinterest  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;

            <a href=\"#\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-instagram  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;

        </p>

    </div>

    <div class=\"col-xs-12 col-lg-1\"> </div>

    <div class=\"col-xs-12 col-lg-2 EMAIL_UPDATES\">
        <p class=\"text-left\"> EMAIL UPDATES </p>


        <input type=\"text\" class=\"form-control footer_form_control\" placeholder=\"Enter your e-mail\">
        <input type=\"text\" class=\"form-control footer_form_control\" placeholder=\"Enter your name\">
        <input type=\"text\" class=\"form-control footer_form_control_text\" placeholder=\"Enter your text\">


        <a href=\"#\" class=\"send_button\">
            &nbsp; SEND &nbsp;
        </a>


    </div>

    <div class=\"col-xs-12 col-lg-1\"> </div>

    <div class=\"col-xs-12 col-lg-2 footer_menu\">

        ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation_footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "
    </div>


    <div class=\"col-xs-hidden col-lg-2\"> </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 69,  119 => 68,  78 => 29,  68 => 25,  64 => 24,  57 => 20,  53 => 19,  46 => 15,  42 => 14,  38 => 12,  34 => 11,  26 => 6,  19 => 1,);
    }
}
/* <div class="col-xs-hidden col-lg-2"> </div>*/
/* */
/*     <div class="col-xs-12 col-lg-2">*/
/* */
/*         <p class="contact_logo">*/
/*             <a href="{{ '/' }}" class="logo_in_footer">*/
/*                 S*/
/*             </a>*/
/*         </p>*/
/* */
/*         {% for contact in home.getContact %}*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/phone.jpg'|theme }}">*/
/*             {{ contact.phone_number }}*/
/*         </p>*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/e-mail.jpg'|theme }}">*/
/*             {{ contact.email }}*/
/*         </p>*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/map.jpg'|theme }}">*/
/*             {{ contact.address }}*/
/*         </p>*/
/* */
/*         {% endfor %}*/
/* */
/*         <p  class="contact_social_networks">*/
/* */
/*             <a href="#" target="_blank" class="social_networks"><i class="fa fa-facebook  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/* */
/*             <a href="#" target="_blank" class="social_networks"><i class="fa fa-twitter  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/* */
/*             <a href="#" target="_blank" class="social_networks"><i class="fa fa-pinterest  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/*             <a href="#" target="_blank" class="social_networks"><i class="fa fa-instagram  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/*         </p>*/
/* */
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-lg-1"> </div>*/
/* */
/*     <div class="col-xs-12 col-lg-2 EMAIL_UPDATES">*/
/*         <p class="text-left"> EMAIL UPDATES </p>*/
/* */
/* */
/*         <input type="text" class="form-control footer_form_control" placeholder="Enter your e-mail">*/
/*         <input type="text" class="form-control footer_form_control" placeholder="Enter your name">*/
/*         <input type="text" class="form-control footer_form_control_text" placeholder="Enter your text">*/
/* */
/* */
/*         <a href="#" class="send_button">*/
/*             &nbsp; SEND &nbsp;*/
/*         </a>*/
/* */
/* */
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-lg-1"> </div>*/
/* */
/*     <div class="col-xs-12 col-lg-2 footer_menu">*/
/* */
/*         {% partial "navigation_footer" %}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="col-xs-hidden col-lg-2"> </div>*/

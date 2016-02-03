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

        <p  class=\"contact\">
            <img src=\"";
        // line 12
        echo "assets/img/phone.jpg";
        echo "\">
            123
        </p>

        <p  class=\"contact\">
            <img src=\"";
        // line 17
        echo "assets/img/e-mail.jpg";
        echo "\">
            123456
        </p>

        <p  class=\"contact\">
            <img src=\"";
        // line 22
        echo "assets/img/map.jpg";
        echo "\">
            1234
        </p>

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
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation_footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 65
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
        return array (  100 => 65,  96 => 64,  51 => 22,  43 => 17,  35 => 12,  26 => 6,  19 => 1,);
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
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/phone.jpg' }}">*/
/*             123*/
/*         </p>*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/e-mail.jpg' }}">*/
/*             123456*/
/*         </p>*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/map.jpg' }}">*/
/*             1234*/
/*         </p>*/
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

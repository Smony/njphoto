<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/spec/ugallery/components/cmpgallery/default.htm */
class __TwigTemplate_0a47184fe05a1e955a2861fe5e95218ac9f74f0d438daa89ca36d7d0b9c6981c extends Twig_Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Spec/uGallery/components/gallerij/resources/UberGallery.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Spec/uGallery/components/gallerij/resources/colorbox/1/colorbox.css\" />
<script type=\"text/javascript\" src=\"plugins/Spec/uGallery/components/gallerij/resources/jquerymin.js\"></script>
<script type=\"text/javascript\" src=\"plugins/Spec/uGallery/components/gallerij/resources/colorbox/jquery.colorbox.js\"></script>
";
        // line 5
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 6
        echo "    
    \$(document).ready(function(){
        \$(\"a[rel='colorbox']\").colorbox({maxWidth: \"90%\", maxHeight: \"90%\", opacity: \".5\"});
    });
    
";
        // line 5
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 12
        echo "
";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "View", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/spec/ugallery/components/cmpgallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  36 => 12,  34 => 5,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <link rel="stylesheet" type="text/css" href="plugins/Spec/uGallery/components/gallerij/resources/UberGallery.css" />*/
/* <link rel="stylesheet" type="text/css" href="plugins/Spec/uGallery/components/gallerij/resources/colorbox/1/colorbox.css" />*/
/* <script type="text/javascript" src="plugins/Spec/uGallery/components/gallerij/resources/jquerymin.js"></script>*/
/* <script type="text/javascript" src="plugins/Spec/uGallery/components/gallerij/resources/colorbox/jquery.colorbox.js"></script>*/
/* {% put scripts %}*/
/*     */
/*     $(document).ready(function(){*/
/*         $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});*/
/*     });*/
/*     */
/* {% endput %}*/
/* */
/* {{__SELF__.View}}*/

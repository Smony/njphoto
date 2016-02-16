<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/responsiv/uploader/components/imageuploader/image-single.htm */
class __TwigTemplate_96f3a23e9142fb75ff8a876ff3ae70e62d0c0197759114e6135789bb25885329 extends Twig_Template
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
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 2
            echo "    <img
        src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getThumb", array()), "html", null, true);
            echo "\"
        style=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getCssSize", array()), "html", null, true);
            echo "\" />
";
        } else {
            // line 6
            echo "    <p class=\"placeholder\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "placeholderText", array()), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/responsiv/uploader/components/imageuploader/image-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if image %}*/
/*     <img*/
/*         src="{{ __SELF__.getThumb }}"*/
/*         style="{{ __SELF__.getCssSize }}" />*/
/* {% else %}*/
/*     <p class="placeholder">{{ __SELF__.placeholderText }}</p>*/
/* {% endif %}*/

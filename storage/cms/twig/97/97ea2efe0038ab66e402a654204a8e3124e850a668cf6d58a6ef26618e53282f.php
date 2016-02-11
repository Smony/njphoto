<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/one47/filelist/components/filelist/default.htm */
class __TwigTemplate_908d5bca56ad4a24507b6b308b442379afd90234f08a6b0921357ed8016137c8 extends Twig_Template
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
        echo "<div class=\"row\" style=\"height:15px\"></div>

<div class=\"fl-style\">
    ";
        // line 4
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["filelist"]) ? $context["filelist"] : null), "files", array())) > 0)) {
            // line 5
            echo "    <ol class=\"nav nav-pills nav-stacked \" style=\"list-style-type: none; width: 100%; margin 0 auto; \">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filelist"]) ? $context["filelist"] : null), "files", array()));
            foreach ($context['_seq'] as $context["i"] => $context["file"]) {
                // line 7
                echo "      <h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "description", array()), "html", null, true);
                echo "</h3>
      <li><a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "\" target=\"_blank\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ol>
    ";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/one47/filelist/components/filelist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  48 => 10,  38 => 8,  33 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row" style="height:15px"></div>*/
/* */
/* <div class="fl-style">*/
/*     {% if filelist.files|length > 0 %}*/
/*     <ol class="nav nav-pills nav-stacked " style="list-style-type: none; width: 100%; margin 0 auto; ">*/
/*     {% for i, file in filelist.files %}*/
/*       <h3>{{ file.description }}</h3>*/
/*       <li><a href="{{ file.path }}" target="_blank" >{{ file.title }}</a></li>*/
/*     {% endfor %}*/
/*     </ol>*/
/*     {% endif %}*/
/* </div>*/
/* */

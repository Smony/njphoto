<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/smony/home/components/work/default.htm */
class __TwigTemplate_4211e201efd5c5a3518fdc86e222bfc819991184247d3af8fde3bd5e71aae84b extends Twig_Template
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
        echo "<div class=\"row\" style=\"margin-right: 0px; margin-left: 0px; font-size: 2vw;\">

    <p class=\"how_it_works\"> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "title", array()), "html", null, true);
        echo " </p>
    <div class=\"under_how_it_works\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "description", array()), "html", null, true);
        echo " </div>

    <div class=\"row\" style=\"margin-right: 0px;  margin-left: 0px\";>
        <div class=\"col-xs-hidden col-sm-hidden col-md-1\"></div>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["work"]) ? $context["work"] : null), "works", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "        <div class=\"col-xs-12 col-md-2\" >
            <img class=\"img-responsive img-circle\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "\">
            <p class=\"under_plasecholder_sircl\" style=\"word-wrap: break-word;\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        <div class=\"col-xs-hidden col-sm-hidden col-md-1\" ></div>
    </div>
    <span class=\"indent\"></span>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/smony/home/components/work/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  48 => 12,  42 => 11,  39 => 10,  35 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row" style="margin-right: 0px; margin-left: 0px; font-size: 2vw;">*/
/* */
/*     <p class="how_it_works"> {{ __SELF__.title }} </p>*/
/*     <div class="under_how_it_works"> {{ __SELF__.description }} </div>*/
/* */
/*     <div class="row" style="margin-right: 0px;  margin-left: 0px";>*/
/*         <div class="col-xs-hidden col-sm-hidden col-md-1"></div>*/
/* */
/*         {% for post in work.works %}*/
/*         <div class="col-xs-12 col-md-2" >*/
/*             <img class="img-responsive img-circle" src="{{ post.attachments.path }}" alt="{{ post.title }}">*/
/*             <p class="under_plasecholder_sircl" style="word-wrap: break-word;">{{ post.title }}</p>*/
/*         </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="col-xs-hidden col-sm-hidden col-md-1" ></div>*/
/*     </div>*/
/*     <span class="indent"></span>*/
/* </div>*/

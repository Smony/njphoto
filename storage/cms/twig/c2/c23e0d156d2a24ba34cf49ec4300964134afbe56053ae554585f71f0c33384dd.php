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






    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "getContactSite", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contactSite"]) {
            // line 9
            echo "        <p class=\"how_it_works\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactSite"], "title_site", array()), "html", null, true);
            echo " </p>
        <div class=\"under_how_it_works\"> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactSite"], "description_site", array()), "html", null, true);
            echo " </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactSite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <div class=\"row\" style=\"margin-right: 0px;  margin-left: 0px\";>
        <div class=\"col-xs-hidden col-sm-hidden col-md-1\"></div>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["work"]) ? $context["work"] : null), "works", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "        <div class=\"col-xs-12 col-md-2\" >
            <img class=\"img-responsive img-circle\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "title", array()), "html", null, true);
            echo "\">
            <p class=\"under_plasecholder_sircl\" style=\"word-wrap: break-word;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
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
        return array (  73 => 22,  64 => 19,  58 => 18,  55 => 17,  51 => 16,  45 => 12,  37 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="row" style="margin-right: 0px; margin-left: 0px; font-size: 2vw;">*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     {% for contactSite in home.getContactSite %}*/
/*         <p class="how_it_works"> {{ contactSite.title_site }} </p>*/
/*         <div class="under_how_it_works"> {{ contactSite.description_site }} </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="row" style="margin-right: 0px;  margin-left: 0px";>*/
/*         <div class="col-xs-hidden col-sm-hidden col-md-1"></div>*/
/* */
/*         {% for post in work.works %}*/
/*         <div class="col-xs-12 col-md-2" >*/
/*             <img class="img-responsive img-circle" src="{{ post.attachments.path }}" alt="{{ post.attachments.title }}">*/
/*             <p class="under_plasecholder_sircl" style="word-wrap: break-word;">{{ post.title }}</p>*/
/*         </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="col-xs-hidden col-sm-hidden col-md-1" ></div>*/
/*     </div>*/
/*     <span class="indent"></span>*/
/* </div>*/

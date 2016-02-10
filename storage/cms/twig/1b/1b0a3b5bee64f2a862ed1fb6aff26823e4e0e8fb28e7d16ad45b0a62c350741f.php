<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/pages/test.htm */
class __TwigTemplate_0b3e3db3b047377f01bc8a98f12483deb7db9ee20a0b8852a958152d0c208e34 extends Twig_Template
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
        echo "<div class=\"conteiner\">
    <div class=\"row\">
        <p>
            template test


        <hr />
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["work"], "getWorks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 9
            echo "            <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "title", array()), "html", null, true);
            echo "</h4><br />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <hr />

        </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <p>*/
/*             template test*/
/* */
/* */
/*         <hr />*/
/*             {% for work in work.getWorks %}*/
/*             <h4>{{ work.title }}</h4><br />*/
/*             {% endfor %}*/
/*         <hr />*/
/* */
/*         </p>*/
/*     </div>*/
/* </div>*/

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
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["work"]) ? $context["work"] : null), "works", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "path", array()), "html", null, true);
            echo "
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "title", array()), "html", null, true);
            echo "
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "description", array()), "html", null, true);
            echo "
            <br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        <hr />




        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "getSocial", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 25
            echo "
        ";
            // line 26
            echo twig_escape_filter($this->env, $context["social"], "html", null, true);
            echo "

        <br />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
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
        return array (  87 => 31,  76 => 26,  73 => 25,  69 => 24,  61 => 18,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="conteiner">*/
/*     <div class="row">*/
/*         <p>*/
/*             template test*/
/* */
/* */
/*         <hr />*/
/* */
/*         {% for post in work.works %}*/
/* */
/*             {{ post.id }}*/
/*             {{ post.title }}*/
/*             {{ post.attachments.path }}*/
/*             {{ post.attachments.title }}*/
/*             {{ post.attachments.description }}*/
/*             <br />*/
/*         {% endfor %}*/
/* */
/*         <hr />*/
/* */
/* */
/* */
/* */
/*         {% for social in home.getSocial %}*/
/* */
/*         {{ social }}*/
/* */
/*         <br />*/
/* */
/*         {% endfor %}*/
/* */
/*         </p>*/
/*     </div>*/
/* </div>*/

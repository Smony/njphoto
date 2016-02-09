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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getTheme", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " <!--Вызывем метод getPosts в нашем компоненте и проходимся циклом по полученынм запиям!-->
<h4>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "phone_number", array()), "html", null, true);
            echo "</h4> <!--Выводим заголовок!-->

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
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
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% for item in theme.getTheme %} <!--Вызывем метод getPosts в нашем компоненте и проходимся циклом по полученынм запиям!-->*/
/* <h4>{{ item.phone_number }}</h4> <!--Выводим заголовок!-->*/
/* */
/* {% endfor %}*/
/* */

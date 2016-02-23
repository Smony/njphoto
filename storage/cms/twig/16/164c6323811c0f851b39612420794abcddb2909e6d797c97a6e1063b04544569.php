<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/jorgeandrade/octodonations/components/success/default.htm */
class __TwigTemplate_b95d69e91e914126482a7e34d4dd02ef18e079b45ef9945ead40109c4e15d638 extends Twig_Template
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
        echo "<div class=\"octodonation-card\">
    <div class=\"octodonation-title\">
        <h3>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"octodonation-content\">
    \t<p>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
        echo "</p>
    </div>

    <div class=\"octodonation-action\">
        <a href=\"/\" class=\"btn btn-default\">Go back to home</a>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/jorgeandrade/octodonations/components/success/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="octodonation-card">*/
/*     <div class="octodonation-title">*/
/*         <h3>{{title}}</h3>*/
/*     </div>*/
/* */
/*     <div class="octodonation-content">*/
/*     	<p>{{result}}</p>*/
/*     </div>*/
/* */
/*     <div class="octodonation-action">*/
/*         <a href="/" class="btn btn-default">Go back to home</a>*/
/*     </div>*/
/*     */
/* </div>*/
/* */

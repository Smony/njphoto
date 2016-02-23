<?php

/* D:\OpenServer\domains\october.nj.biz/plugins/jorgeandrade/octodonations/components/donation/default.htm */
class __TwigTemplate_69cdba533abb017c3c15c5e16b50bff4140dbf7272f214c94efa2513b11ce2d7 extends Twig_Template
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
    \t";
        // line 7
        if (((isset($context["showComment"]) ? $context["showComment"] : null) == "on")) {
            // line 8
            echo "    \t\t<p class=\"help-block\">";
            echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : null), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 10
        echo "        <form name=\"octodonation-form\" id=\"octodonation-form\" data-request=\"";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onDonate\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::alert': '#result'\">
        \t<div class=\"form-group\">
        \t\t<label for=\"name\">Name</label>
            \t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\">
        \t</div>
            <div class=\"form-group\">
            \t<label for=\"email\">* Email</label>
            \t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" required>
            </div>
            <div class=\"form-group\">
            \t<label for=\"country\">Country</label>
            \t<input type=\"text\" class=\"form-control\" name=\"country\" id=\"country\" required>
            </div>
            <div class=\"form-group\">
            \t<label for=\"amount\">* Amount</label>
            \t<input type=\"number\" class=\"form-control\" name=\"amount\" id=\"amount\" min=\"5\" required>
            \t<p class=\"help-block\">5 is the minimum amount.</p>
            </div>
            <div class=\"form-group\">
            \t<label for=\"comment\">Comment</label>
            \t<textarea class=\"form-control\" name=\"comment\" id=\"comment\" rows=\"5\"></textarea>
            </div>
        </form>

        <div id=\"result\"></div>
    </div>

    <div class=\"octodonation-action\">
        <input type=\"submit\" class=\"btn btn-default\" form=\"octodonation-form\" value=\"Donate\">
        <p class=\"help-block pull-right\">* Required Fields.</p>
    </div>
    
    <div id=\"result\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/plugins/jorgeandrade/octodonations/components/donation/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="octodonation-card">*/
/*     <div class="octodonation-title">*/
/*         <h3>{{title}}</h3>*/
/*     </div>*/
/* */
/*     <div class="octodonation-content">*/
/*     	{% if showComment == 'on' %}*/
/*     		<p class="help-block">{{comment}}</p>*/
/* 		{% endif %}*/
/*         <form name="octodonation-form" id="octodonation-form" data-request="{{__SELF__}}::onDonate" data-request-update="'{{__SELF__}}::alert': '#result'">*/
/*         	<div class="form-group">*/
/*         		<label for="name">Name</label>*/
/*             	<input type="text" class="form-control" name="name" id="name">*/
/*         	</div>*/
/*             <div class="form-group">*/
/*             	<label for="email">* Email</label>*/
/*             	<input type="email" class="form-control" name="email" id="email" required>*/
/*             </div>*/
/*             <div class="form-group">*/
/*             	<label for="country">Country</label>*/
/*             	<input type="text" class="form-control" name="country" id="country" required>*/
/*             </div>*/
/*             <div class="form-group">*/
/*             	<label for="amount">* Amount</label>*/
/*             	<input type="number" class="form-control" name="amount" id="amount" min="5" required>*/
/*             	<p class="help-block">5 is the minimum amount.</p>*/
/*             </div>*/
/*             <div class="form-group">*/
/*             	<label for="comment">Comment</label>*/
/*             	<textarea class="form-control" name="comment" id="comment" rows="5"></textarea>*/
/*             </div>*/
/*         </form>*/
/* */
/*         <div id="result"></div>*/
/*     </div>*/
/* */
/*     <div class="octodonation-action">*/
/*         <input type="submit" class="btn btn-default" form="octodonation-form" value="Donate">*/
/*         <p class="help-block pull-right">* Required Fields.</p>*/
/*     </div>*/
/*     */
/*     <div id="result"></div>*/
/* </div>*/
/* */

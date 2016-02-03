<?php

/* D:\OpenServer\domains\october.nj.biz/themes/responsiv-flat/pages/samples/about.htm */
class __TwigTemplate_aaa92b418133841b615de2525cd71051ef299950b888dab14d27a4ee65b166cc extends Twig_Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>About us</h3>
    </div>
</section>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-sm-7\">
            <h4 class=\"headline\"><span>Welcome</span></h4>
            <p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.</p>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>
            <p><a href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->pageFilter("samples/contact");
        echo "\" class=\"btn btn-lg btn-primary\">Contact Us</a></p>
        </div>
        <div class=\"col-sm-5\">
            <h4 class=\"headline\"><span>Video intro</span></h4>
            <div class=\"video-container\">
                <iframe src=\"//player.vimeo.com/video/67449472?title=0&amp;byline=0&amp;portrait=0\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class=\"row our-team\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Our team</span></h4>
            <div class=\"row\">
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Founder</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 39
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Engineer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 48
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Sales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-6\">
                    <div class=\"team-member text-center\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                        <div class=\"info\">
                            John Doe
                            <p class=\"text-muted\">Admin Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/responsiv-flat/pages/samples/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 57,  77 => 48,  65 => 39,  53 => 30,  34 => 14,  19 => 1,);
    }
}
/* <section id="layout-title">*/
/*     <div class="container">*/
/*         <h3>About us</h3>*/
/*     </div>*/
/* </section>*/
/* */
/* <div class="container">*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-7">*/
/*             <h4 class="headline"><span>Welcome</span></h4>*/
/*             <p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.</p>*/
/*             <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>*/
/*             <p><a href="{{ 'samples/contact'|page }}" class="btn btn-lg btn-primary">Contact Us</a></p>*/
/*         </div>*/
/*         <div class="col-sm-5">*/
/*             <h4 class="headline"><span>Video intro</span></h4>*/
/*             <div class="video-container">*/
/*                 <iframe src="//player.vimeo.com/video/67449472?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row our-team">*/
/*         <div class="col-sm-12">*/
/*             <h4 class="headline"><span>Our team</span></h4>*/
/*             <div class="row">*/
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <div class="team-member text-center">*/
/*                         <img class="img-responsive center-block" src="{{ 'assets/images/team/aleksey.png'|theme }}" alt="">*/
/*                         <div class="info">*/
/*                             John Doe*/
/*                             <p class="text-muted">Founder</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <div class="team-member text-center">*/
/*                         <img class="img-responsive center-block" src="{{ 'assets/images/team/sam.png'|theme }}" alt="">*/
/*                         <div class="info">*/
/*                             John Doe*/
/*                             <p class="text-muted">Engineer</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <div class="team-member text-center">*/
/*                         <img class="img-responsive center-block" src="{{ 'assets/images/team/aleksey.png'|theme }}" alt="">*/
/*                         <div class="info">*/
/*                             John Doe*/
/*                             <p class="text-muted">Sales</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-3 col-xs-6">*/
/*                     <div class="team-member text-center">*/
/*                         <img class="img-responsive center-block" src="{{ 'assets/images/team/sam.png'|theme }}" alt="">*/
/*                         <div class="info">*/
/*                             John Doe*/
/*                             <p class="text-muted">Admin Team</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/

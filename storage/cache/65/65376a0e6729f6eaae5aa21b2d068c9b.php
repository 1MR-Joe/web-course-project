<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* /components/footer.twig */
class __TwigTemplate_7e2de259c2c192d858bdb5fb6a77b8ee extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<footer>
    <div class=\"left_footer\">
        <div class=\"logo lower_logo\">
            <img src=\"../images/gym_logo.png\" alt=\"logo\" width=\"130px\" height=\"100px\">
            <h1> Five Gym</h1>
        </div>
        <div class=\"left_lower_footer\">
            <img src=\"../images/social/facebook.png\" alt=\"icon\" width=\"30px\" height=\"30px\">
            <img src=\"../images/social/instagram.png\" alt=\"icon\" width=\"30px\" height=\"30px\">
            <img src=\"../images/social/whatsapp.png\" alt=\"icon\" width=\"30px\" height=\"30px\">
            <img src=\"../images/social/snapchat.png\" alt=\"icon\" width=\"30px\" height=\"30px\">
        </div>
    </div>
    <div class=\"right_footer\">
        <div>
            <a href=\"#\" class=\"right_footer_links\">About us</a>
            <a href=\"#\" class=\"right_footer_links\">Jobs</a>
            <a href=\"#\" class=\"right_footer_links\">Blog</a>
            <a href=\"#\" class=\"right_footer_links\">FAQ</a>
            <a href=\"#\" class=\"right_footer_links\">Privacy policy</a>
        </div>
        <div class=\"right_footer_lower\">
            <img src=\"../images/social/phone.png\" alt=\"icon\" width=\"30px\" height=\"30px\" style=\"margin-right: 10px; margin-top: 10px;\">
            <div class=\"footer_right_icons\">
                <label>Tel</label>
                <p>01054874152</p>
            </div>
            <img src=\"../images/social/email.png\" alt=\"icon\" width=\"30px\" height=\"30px\" style=\"margin-right: 10px; margin-top: 10px;\">
            <div class=\"footer_right_icons\">
                <label>Mail</label>
                <p>example@gmail.com</p>
            </div>
            <img src=\"../images/social/location.png\" alt=\"icon\" width=\"30px\" height=\"30px\" style=\"margin-right: 10px; margin-top: 10px;\">
            <div class=\"footer_right_icons\">
                <label>Address</label>
                <p>5-st Lorem, ipsum dolor.</p>
            </div>
        </div>
    </div>
</footer>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/components/footer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "/components/footer.twig", "/home/joe/Documents/semester-5/web/project/public/components/footer.twig");
    }
}

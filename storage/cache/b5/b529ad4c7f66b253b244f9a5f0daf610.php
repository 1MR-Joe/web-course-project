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

/* /components/header.twig */
class __TwigTemplate_da072d31105f397138e728341d70addd extends Template
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
        yield "<header>
    <a href=\"/\" class=\"logo\">
        <img src=\"../images/gym_logo.png\" alt=\"logo\" width=\"110px\" height=\"100px\">
        <h1>Five Gym</h1>
    </a>

    <div class=\"nav-content\">
        <div class=\"navbar\">
            <a href=\"#\">About</a>
            <a href=\"/membership\">Membership</a>
            <a href=\"/products\">Products</a>
            <a href=\"#\">Contact</a>
        </div>
        <div class=\"authentication-section\">
            <a href=\"./register.html\">
                <button type=\"button\" class=\"button-2\">Register</button>
            </a>

            <a href=\"./login.html\">
                <button type=\"button\" class=\"button-1\">Login</button>
            </a>
        </div>
    </div>
</header>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/components/header.twig";
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
        return new Source("", "/components/header.twig", "/home/joe/Documents/semester-5/web/project/public/components/header.twig");
    }
}

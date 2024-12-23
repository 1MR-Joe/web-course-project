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

/* /views/home.twig */
class __TwigTemplate_335e6fe2f7d4ea9a205081a779df78da extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home Page</title>
    <link rel=\"stylesheet\" href=\"../css/style.css\">
    <link rel=\"stylesheet\" href=\"../css/home.css\">
</head>
<body>
    ";
        // line 11
        yield from $this->loadTemplate("/components/header.twig", "/views/home.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "
    <main>
        <div class=\"hero\">
            <div class=\"content\">
                <h2>Lorem ipsum dolor sit amet ipsum.</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nam optio magnam, similique explicabo facere dolor eveniet ducimus veritatis molestias, eos natus est expedita incidunt quod eum, iusto obcaecati aperiam?</p>
                <div class=\"cta\">
                    <button type=\"button\" class=\"button-1\"\">Plans</button>
                    <button type=\"button\" class=\"button-2\"\">Testimonials</button>
                </div>
            </div>
            <img src=\"../images/loopGym2.jpg\" alt=\"\">
        </div>
        <div class=\"metrics-section\">
            <div class=\"metrics-card\">
                <div class=\"content\">
                    <h2>6,154</h2>
                    <P>gym members since January 2024 - up until now</P>
                </div>
            </div>
            <div class=\"metrics-card\">
                <div class=\"content\">
                    <h2>6,154</h2>
                    <P>gym members since January 2024 - up until now</P>
                </div>
            </div>
            <div class=\"metrics-card\">
                <div class=\"content\">
                    <h2>6,154</h2>
                    <P>gym members since January 2024 - up until now</P>
                </div>
            </div>
            <div class=\"metrics-card\">
                <div class=\"content\">
                    <h2>6,154</h2>
                    <P>gym members since January 2024 - up until now</P>
                </div>
            </div>
        </div>
        <div class=\"benefits-section\">
            <div class=\"single-benefit\">
                <div class=\"content\">
                    <h1>Lorem ipsum odor amet, consectetuer adipiscing elit.</h1>
                    <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Mi justo et ex nisl laoreet ipsum. Tellus tristique consequat quam ridiculus vel; ullamcorper pulvinar. Sem est dictum condimentum fames cras interdum condimentum.</p>
                    <ul>
                        <li>Lorem ipsum odor amet, consectetuer adipiscing.</li>
                        <li>Mi justo et ex nisl laoreet ipsum.</li>
                        <li>Tellus tristique consequat quam ridiculus vel; ullamcorper.</li>
                        <li>Lorem Ipsum odor amet.</li>
                    </ul>
                </div>
                <img src=\"../images/loopGym1.jpg\" alt=\"\">
            </div>
            <div class=\"single-benefit\">
                <img src=\"../images/loopGym1.jpg\" alt=\"\">
                <div class=\"content\">
                    <h1>Lorem ipsum odor amet, consectetuer adipiscing elit.</h1>
                    <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Mi justo et ex nisl laoreet ipsum. Tellus tristique consequat quam ridiculus vel; ullamcorper pulvinar. Sem est dictum condimentum fames cras interdum condimentum.</p>
                    <ul>
                        <li>Lorem ipsum odor amet, consectetuer adipiscing.</li>
                        <li>Mi justo et ex nisl laoreet ipsum.</li>
                        <li>Tellus tristique consequat quam ridiculus vel; ullamcorper.</li>
                        <li>Lorem Ipsum odor amet.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"testimonials-section\">
            <p class=\"semi-bold\">Testimonials</p>
            <h1>What Our Customers Think About Us</h1>
            <div class=\"testimonials\">
                <div class=\"testimony-card\">
                    <div class=\"testimony-head\">
                        <div class=\"testimonee-container\">
                            <img src=\"../images/man.png\" alt=\"\">
                            <!-- <div class=\"testimonee-picture\"></div> -->
                            <div class=\"testimonee-info\">
                                <h3 class=\"bold\">John Miller Doe</h3>
                                <p class=\"semi-bold\">CEO And Co-Founder Of ABC Company</p>
                            </div>
                        </div>
                        <img src=\"../images/icons/quote.png\" alt=\"\" class=\"quote\">                    </div>
                    <div class=\"testimony-tail\">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Vulputate rhoncus facilisis, himenaeos dictumst aptent suscipit. Per praesent at nascetur curae dapibus litora inceptos. Cursus aliquam nostra vitae cursus lobortis erat.</p>
                    </div>
                </div>
                <div class=\"testimony-card\">
                    <div class=\"testimony-head\">
                        <div class=\"testimonee-container\">
                            <img src=\"../images/man.png\" alt=\"\">
                            <!-- <div class=\"testimonee-picture\"></div> -->
                            <div class=\"testimonee-info\">
                                <h3 class=\"bold\">John Miller Doe</h3>
                                <p class=\"semi-bold\">CEO And Co-Founder Of ABC Company</p>
                            </div>
                        </div>
                        <img src=\"../images/icons/quote.png\" alt=\"\" class=\"quote\">                    </div>
                    <div class=\"testimony-tail\">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Vulputate rhoncus facilisis, himenaeos dictumst aptent suscipit. Per praesent at nascetur curae dapibus litora inceptos. Cursus aliquam nostra vitae cursus lobortis erat.</p>
                    </div>
                </div>
                <div class=\"testimony-card\">
                    <div class=\"testimony-head\">
                        <div class=\"testimonee-container\">
                            <img src=\"../images/man.png\" alt=\"\">
                            <!-- <div class=\"testimonee-picture\"></div> -->
                            <div class=\"testimonee-info\">
                                <h3 class=\"bold\">John Miller Doe</h3>
                                <p class=\"semi-bold\">CEO And Co-Founder Of ABC Company</p>
                            </div>
                        </div>
                        <img src=\"../images/icons/quote.png\" alt=\"\" class=\"quote\">                    </div>
                    <div class=\"testimony-tail\">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Vulputate rhoncus facilisis, himenaeos dictumst aptent suscipit. Per praesent at nascetur curae dapibus litora inceptos. Cursus aliquam nostra vitae cursus lobortis erat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"cta-section\">
            <div>
                <p class=\"semi-bold\">
                    Tagline
                </p>
                <h1 class=\"txt-capitalized\">Long headline to turn you visitors into users</h1>
                <button type=\"button\" class=\"button-1\">
                    Action
                </button>
            </div>
        </div>
    </main>

    ";
        // line 143
        yield from $this->loadTemplate("/components/footer.twig", "/views/home.twig", 143)->unwrap()->yield($context);
        // line 144
        yield "</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/views/home.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  191 => 144,  189 => 143,  56 => 12,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "/views/home.twig", "/home/joe/Documents/semester-5/web/project/public/views/home.twig");
    }
}

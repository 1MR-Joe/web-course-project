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

/* /views/profile.twig */
class __TwigTemplate_86b66abfe927f5ab1f3ef263ba5fa7e3 extends Template
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
    <title>Gym Profile Page</title>
    <link rel=\"stylesheet\" href=\"styles.css\">
    <link rel=\"stylesheet\" href=\"../css/profile.css\">
</head>
<body>
    ";
        // line 11
        yield from $this->loadTemplate("/components/header.twig", "/views/profile.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "
    <main>
        <div class=\"container\">
            <h2>Personal Info</h2>
            <div class=\"profile-layout\">
                <form class=\"profile\" action=\"\">
                    <div class=\"form_attributes\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" id=\"username\" placeholder=\"John Doe\" required value=\"John Doe\">
                    </div>
    
                    <div class=\"form_attributes\">
                        <label for=\"telephone\">Phone Number</label>
                        <input
                            type=\"tel\"
                            pattern=\"[0-9]{11,}\"
                            minlength=\"11\"
                            maxlength=\"15\"
                            required
                            placeholder=\"Enter at least 11 digits\"
                            id=\"telephone\"
                            value=\"Enter at least 11 digits\"
                        />
                    </div>
    
                    <div class=\"form_attributes\">
                        <label for=\"gender\">Gender</label>
                        <select id=\"gender\" name=\"gender\" required>
                            <option value=\"\" disabled selected>Select your gender</option>
                            <option value=\"male\">Male</option>
                            <option value=\"female\">Female</option>
                        </select>
                    </div>
    
                    <div class=\"form_attributes\">
                        <label for=\"email\">Email</label>
                        <input
                            type=\"email\"
                            required
                            placeholder=\"example@gmail.com\"
                            id=\"email\"
                            value=\"example@gmail.com\"
                        />
                    </div>
    
                    <div class=\"submit_and_cancel\">
                        <input type=\"button\" value=\"Cancel\" class=\"cancel\">
                        <input type=\"submit\" value=\"Save\" class=\"submit\">
                    </div>
                </form>
    
                <div class=\"profile-picture\">
                    <img src=\"placeholder.jpg\" alt=\"Profile Picture\" id=\"profile-img\">
                    <input type=\"file\" id=\"upload-btn\" accept=\"image/*\">
                </div>
            </div>
        </div>
    </main>

    ";
        // line 71
        yield from $this->loadTemplate("/components/footer.twig", "/views/profile.twig", 71)->unwrap()->yield($context);
        // line 72
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/views/profile.twig";
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
        return array (  119 => 72,  117 => 71,  56 => 12,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "/views/profile.twig", "/home/joe/Documents/semester-5/web/project/public/views/profile.twig");
    }
}

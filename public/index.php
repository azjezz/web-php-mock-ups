<?php declare(strict_types=1);

require '../functions.php';

$sample = PHP\Layout\source(
"<?php declare(strict_types=1);

function greet(string \$name): void
{
    echo 'Hello, ' . \$name . ' !';
}

greet('World'); // Hello, World !"
);

$content = <<<HTML
    <div class="hero bg-gray">
        <div class="hero-body">
            <h2>
                <span class='text-bold'>PHP</span> Hypertext Preprocessor
            </h2>
            <pre class="code php">
                <code class="bg-dark text-light">{$sample}</code>
            </pre>
            <a href="/getting-started" class="btn btn-link btn-lg p-centered ">Get Started</a>
        </div>
    </div>
HTML;

PHP\Http\Response\html(
    PHP\Layout\header('PHP'),
    $content,
    PHP\Layout\footer()
);
<?= $this->layout('layout/basic', ['title' => 'PHP']) ?>

<h2>
    <span class='text-bold'>PHP</span> Hypertext Preprocessor
</h2>
<p>
PHP is a popular general-purpose scripting language that is especially suited to web development. <br />
Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.
</p>
<pre class="code php">
    <code class="bg-dark text-light">
&lt?php declare(strict_types=1);

function greet(string $name): void
{
    echo 'Hello, ' . $name . ' !';
}

greet('World'); // Hello, World !
    </code>
</pre>
<a href="/getting-started" class="btn btn-link btn-lg p-centered ">Get Started</a>

<!-- we can have "card"s here of latest blog posts ? -->
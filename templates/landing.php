<?= $this->layout('layout/basic', ['title' => 'PHP']) ?>

<h2>
    <span class='text-bold'>PHP</span> Hypertext Preprocessor
</h2>
<p>
    <span class='text-bold'>PHP</span> is a popular general-purpose scripting language that is especially suited to web development. <br /> <br />
    Fast, flexible and pragmatic, <span class='text-bold'>PHP</span> powers everything from your blog to the most popular websites in the world.
</p>

<pre class="code php"><code class="bg-dark text-light">&lt?php declare(strict_types=1);

function greet(string $name): void
{
    echo 'Hello, ' . $name . ' !';
}

greet('World'); // Hello, World !</code></pre>

<a href="/getting-started" class="btn btn-link p-centered">Get Started</a>
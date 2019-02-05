<?= $this->layout('layout/basic', ['title' => 'PHP']) ?>

<div class="column col-12 p-centered mb-2 pb-2">
    <h2>
        <span class='text-bold'>PHP</span> Hypertext Preprocessor
    </h2>
    <p>
        <span class='text-bold'>PHP</span> is a popular general-purpose scripting language that is especially suited to
        web development. <br /> <br />
        Fast, flexible and pragmatic, <span class='text-bold'>PHP</span> powers everything from your blog to the most
        popular websites in the world.
    </p>
    <div class="columns">
        <div class="column col-6 p-centered">
            <pre class="code php"><code class="bg-dark text-light">&lt?php declare(strict_types=1);

function greet(string $name): void
{
    echo 'Hello, ' . $name . ' !';
}

greet('World'); // Hello, World !</code></pre>
        </div>
<<<<<<< HEAD
    </div>
<br />
</div>

<div class="column col-4">
    <h3 class="text-primary">Latest Releases</h3>
    <hr class="text-secondary" />
    <?php
        foreach (($releases ?? []) as $release) {
            echo $this->fetch('component/release-card', $release);
        }
    ?>
    <br />
    <div class="loading"></div>
</div>
<div class="column col-4">
    <h3 class="text-primary">Latest Articles</h3>
    <hr class="text-secondary" />
    <?php
        foreach (($articles ?? []) as $article) {
            echo $this->fetch('component/article-card', $article);
        }
    ?>
    <br />
    <div class="loading"></div>
</div>
<div class="column col-4">
    <h3 class="text-primary">Upcoming Events</h3>
    <hr class="text-secondary" />
    <?php
        foreach (($events ?? []) as $event) {
            echo $this->fetch('component/event-card', $event);
        }
    ?>
    <br />
    <div class="loading"></div>
</div>
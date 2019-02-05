<?= $this->layout('layout/basic', ['title' => 'PHP']) ?>

<div class="container grid-lg">
    <div class="columns">
        <div class="column col-12 p-centered">
            <h2>
                <span class='text-bold'>PHP</span> Hypertext Preprocessor
            </h2>
            <p>
                <span class='text-bold'>PHP</span> is a popular general-purpose scripting language that is especially suited to web development. <br /> <br />
                Fast, flexible and pragmatic, <span class='text-bold'>PHP</span> powers everything from your blog to the most popular websites in the world.
            </p>
            <?= $this->section('content') ?>
        </div>
        <div class="column col-8">
        <?php
        foreach (($releases ?? []) as $release) {
            echo $this->fetch('component/release-card', $release);
        }
        ?>
        </div>
        <div class="column col-4">
        <?php
        foreach (($events ?? []) as $event) {
            echo $this->fetch('component/event-card', $event);
        }
        ?>
        </div>
    </div>
</div>


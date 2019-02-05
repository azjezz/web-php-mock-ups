<?= $this->layout('layout/basic', ['title' => 'PHP']) ?>

<div class="container grid-lg">
    <div class="columns">
        <div class="column col-12 p-centered mb-2 pb-2">
            <h2>
                <span class='text-bold'>PHP</span> Hypertext Preprocessor
            </h2>
            <p>
                <span class='text-bold'>PHP</span> is a popular general-purpose scripting language that is especially suited to web development. <br /> <br />
                Fast, flexible and pragmatic, <span class='text-bold'>PHP</span> powers everything from your blog to the most popular websites in the world.
            </p>
        </div>
        <div class="column col-8">
        <h3 class="text-primary">Latests releases</h3>        
        <?php
        foreach (($releases ?? []) as $release) {
            echo $this->fetch('component/release-card', $release);
        }
        ?>
        </div>
        <div class="column col-4">
        <h3 class="text-primary">Events</h3>
        <?php
        foreach (($events ?? []) as $event) {
            echo $this->fetch('component/event-card', $event);
        }
        ?>
        </div>
    </div>
</div>


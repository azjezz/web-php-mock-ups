<?= $this->layout('layout/basic', ['title' => $title]) ?>

<div class="container  grid-lg">
    <h2><span class='text-bold'>Getting Started : </span> <?= $this->e($section) ?> </h2>
    <hr />
    <br /><br />
    <div class="columns">
        <div class="column col-4">
            <?= $this->fetch('getting-started/sidebar') ?>
        </div>
        <div class="column col-8">
            <?= $this->section('content') ?>
        </div>
    </div>
</div>
<?= $this->layout('layout/basic', ['title' => $title]) ?>

<div class="container grid-lg">
    <div class="columns">
        <div class="column col-12">
            <h2><span class='text-bold'>Getting Started : </span> <?= $this->e($section) ?> </h2>
            <hr />
            <br />
        </div>
        <div class="column col-4">
            <?= $this->fetch('getting-started/sidebar') ?>
        </div>
        <div class="column col-8">
            <?= $this->section('content') ?>
        </div>
    </div>
</div>
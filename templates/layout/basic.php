<?= $this->fetch('layout/header', ['title' => $title]) ?>

<div class="hero bg-gray main">
    <div class="hero-body">
        <div class="container grid-lg">
            <div class="columns">
                <?= $this->section('content') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->fetch('layout/footer') ?>
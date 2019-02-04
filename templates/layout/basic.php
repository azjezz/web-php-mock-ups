<?= $this->fetch('layout/header', ['title' => $title]) ?>
<div class="hero bg-gray">
    <div class="hero-body">
        <?= $this->section('content') ?>
    </div>
</div>
<?= $this->fetch('layout/footer') ?>
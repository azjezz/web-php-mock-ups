<br />
<div class="card">
  <div class="card-image">
    <img src="<?= $img ?>" class="img-responsive">
  </div>
  <div class="card-header">
    <div class="card-title h5"><?= $this->e($name) ?></div>
    <div class="card-subtitle text-gray"><?= $this->e($date) ?></div>
  </div>
  <div class="card-footer">
    <a href="<?= $url ?>" class="btn btn-link btn-secondary">Read more</a>
  </div>
</div>
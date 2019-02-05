<br />
<div class="card">
  <div class="card-image">
    <a href="<?= $contributor['html_url'] ?>">
      <img src="<?= $contributor['avatar_url'] ?>" class="img-responsive">
    </a>
  </div>
  <div class="card-header">
    <div class="card-title h6"><?= $contributor['login'] ?></div>
  </div>
  <div class="card-footer">
    <small><?= $contributor['contributions'] ?> commits</small>
  </div>
</div>
<br />
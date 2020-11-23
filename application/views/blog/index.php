<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?= heading($title); ?>
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p class="text-right">Nombre d'articles : <?= $this->articles->num_items; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10">
      <ul class="nav nav-pills nav-justified">
        <?php if ($this->auth_user->is_connected) : ?>
          <li role="presentation">
            <?= anchor('blog/nouvel_article', "Nouvel article"); ?>
          </li>
        <?php endif; ?>
      </ul>
    </div>
    <div class="col-md-2">
      <p class="text-right">
        Nombre d'articles : <?= $this->articles->num_items; ?>
      </p>
    </div>
  </div>
</div>
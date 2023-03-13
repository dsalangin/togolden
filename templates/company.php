<main class="content mb-5">
  <ul class="company">
    <?php foreach($fields as $field => $name): ?>
    <li class="company__info row gy-3 ">
      <div class=<?=$isAuth ? 'col-md-9 col-lg-10' : 'col-12'?>>
        <h2><?=$name;?></h2>
        <p><?=$company[$field]?></p>
      </div>
      <?php if($isAuth): ?>
      <button class="col-md-3 col-lg-2 btn comment-button" data-field=<?=$field;?> data-bs-toggle="modal" data-bs-target="#commentModal">Коментировать</button>
      <ul class="comments-block col-12">
        <?php foreach($comments as $comment):?>
          <?php if($comment['field'] == $field):?>
        <li class="comment">
          <p>
            <span class="comment__user"><?=$comment['user'];?></span>
            <span class="comment__date"><?=$comment['date'];?></span>
          </p>
          <p class="comment__text">
          <?=$comment['text'];?>
          </p>
        </li>
          <?php endif;?>
        <?php endforeach;?>
      </ul>
      <?php endif;?>
    </li>
    <?php endforeach;?>
  </ul>
  <div class="row">
  <?php if($isAuth): ?>
    <button class="col-md-4 btn comment-button" data-field='company' data-bs-toggle="modal" data-bs-target="#commentModal">Коментировать компанию</button>
    <ul class="comments-block col-12">
    <?php foreach($comments as $comment):?>
      <?php if($comment['field'] == 'company'):?>
        <li class="comment">
          <p>
            <span class="comment__user"><?=$comment['user'];?></span>
            <span class="comment__date"><?=$comment['date'];?></span>
          </p>
          <p class="comment__text">
          <?=$comment['text'];?>
          </p>
        </li>
      <?php endif;?>
    <?php endforeach;?>
    </ul>
    <?php endif; ?>
  </div>

  <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Прокоментировать</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="mb-3">
              <label for="commentInput" class="form-label">Коментарий</label>
              <textarea class="form-control" id="commentInput" name="comment"></textarea>
            </div>
            <button type="button" class="btn btn-primary" id="sendComment">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</main>
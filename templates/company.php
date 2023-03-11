<main class="content mb-5">
  <ul class="company">
    <?php foreach($infoCategories as $infoCategory => $value): ?>
    <li class="company__info row gy-3 ">
      <div class=<?=$isAuth ? 'col-md-9 col-lg-10' : 'col-12'?>>
        <h2><?=$value;?></h2>
        <p><?=$company[$infoCategory]?></p>
      </div>
      <?php if($isAuth): ?>
      <button class="col-md-3 col-lg-2 btn comment-button">Коментировать</button>
      <ul class="comments-block col-12">
        <li class="comment">
          <p>
            <span class="comment__user">Костик</span>
            <span class="comment__date">21.09.2023</span>
          </p>
          <p class="comment__text">
            Нормальное навание, не отличное конечно, но вполне сносное. Не то, что бы долго придумывалось, но секунд
            5 пришлось подумать.
          </p>
        </li>
      </ul>
      <?php endif; ?>
    </li>
    <?php endforeach; ?>
  </ul>
</main>
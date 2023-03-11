<main class="content mb-5">
  <ul class="content__companies row gy-3">
    <?php foreach($companies as $company): ?>
    <li class="companyCard col-12 col-md-6 col-xl-4">
      <?php if($isAuth): ?>
      <a class="unset"></a>
      <?php endif; ?>
      <a class="companies__company" href=<?='company.php?companyId='.$company['id']?>>
        <h2 class="company__title"><?=$company['name'];?></h2>
        <p class="company__address"><b>Адрес:</b><?=$company['address'];?></p>
        <p class="company__phone"><b>Телефон:</b><?=$company['phoneNumber'];?></p>
        <p class="company__CEO"><b>Генеральный директор:</b><?=$company['ceo'];?></p>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php if($isAuth): ?>
  <button class="content__btn-add" data-bs-toggle="modal" data-bs-target="#myModal">Добавить компанию</button>
  <?php endif; ?>
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Добавить компанию</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="https://echo.htmlacademy.ru/">
            <div class="mb-3">
              <label for="companyName" class="col-form-label">Название:</label>
              <input type="text" class="form-control" id="companyName" name="companyName">
            </div>
            <div class="mb-3">
              <label for="companyInn" class="col-form-label">ИНН:</label>
              <input type="text" class="form-control" id="companyInn" name="companyInn">
            </div>
            <div class="mb-3">
              <label for="companyInfo" class="col-form-label">Общая информация:</label>
              <textarea class="form-control" id="companyInfo" name="companyInfo"></textarea>
            </div>
            <div class="mb-3">
              <label for="companyCEO" class="col-form-label">Генеральный директор:</label>
              <input type="text" class="form-control" id="companyCEO" name="companyCEO">
            </div>
            <div class="mb-3">
              <label for="companyAddress" class="col-form-label">Адрес:</label>
              <textarea class="form-control" id="companyAddress" name="companyAddress"></textarea>
            </div>
            <div class="mb-3">
              <label for="companyPhoneNumber" class="col-form-label">Телефон:</label>
              <input type="text" class="form-control" id="companyPhoneNumber" name="companyPhoneNumber">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
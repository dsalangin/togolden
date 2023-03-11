<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="./style.css" rel="stylesheet">
  <title><?=$title;?></title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/">To<span>go</span>lden</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Компании</a>
            </li>
            <?php if(!$isAuth): ?>
            <li class="nav-item">
              <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#signInModal">Войти</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">Регистрация</a>
            </li>
            <?php else: ?> 
            <li class="nav-item">
              <a class="nav-link active" href="sign-out.php">Выйти</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <?=$content;?>
  </div>


  <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Авторизация</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="sign-in.php" method="post">
            <div class="mb-3">
              <label for="signInEmail" class="form-label">Адрес электронной почты</label>
              <input type="email" class="form-control" id="inpusignInEmailtEmail1" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="signInPassword1" class="form-label">Пароль</label>
              <input type="password" class="form-control" id="signInPassword1" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Регистрация</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="https://echo.htmlacademy.ru/">
            <div class="mb-3">
              <label for="signUpEmail1" class="form-label">Адрес электронной почты</label>
              <input type="email" class="form-control" id="signUpEmail1" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="signUpPassword1" class="form-label">Пароль</label>
              <input type="password" class="form-control" id="signUpPassword1" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registration</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/Form.css">
</head>

<body>
   <div class="wrapper">
      <div class="container">
         <form action="../handlers/registration.php" method="post" class="form-content__form">
            <div class="form__title">
               Реєстрація
            </div>
            <label class="form-content__label">Ім'я</label>
            <input required type="text" name="firstname" class="form-control" placeholder="Введіть Ваше ім'я">
            <label class="form-content__label">Прізвище</label>
            <input required type="text" name="lastname" class="form-control" placeholder="Введіть Ваше прізвище">
            <label class="form-content__label">Email</label>
            <input required type="email" name="email" class="form-control" placeholder="Введіть Ваш email">
            <label class="form-content__label">Пароль</label>
            <input required type="text" name="password" class="form-control" placeholder="Придумайте пароль">
            <label class="form-content__label">Повторіть пароль</label>
            <input required type="text" name="password_check" class="form-control" placeholder="Повторіть пароль">
            <button class="btn btn-primary button">Зареєструватись</button>
            <?php
            ?>
            <div class="message"></div>
         </form>
         <div class="success hidden">
            Дякую за реєстрацію. Реєстрація пройшла успішно
         </div>
      </div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <script>
      $(document).ready(function() {
         $('.form-content__form').submit(function(event) {
            event.preventDefault();
            let form = $(this);
            let message = $('.message');
            let success = $('.success');
            $.ajax({
               type: form.attr('method'),
               url: form.attr('action'),
               data: form.serialize(),
               success: function(data) {
                  if (data == 1) {
                     message.html('<div class="alert alert-danger">Паролі не співпадають!</div>');
                     return false;
                  } else if (data == 2) {
                     message.html('<div class="alert alert-danger">Користувач з таким email вже існує!</div>');
                     return false;
                  } else if (data == 3) {
                     message.html('<div class="alert alert-danger">Введіть правильний формат пошти</div>');
                  } else if (data == 4) {
                     form.trigger('reset');
                     form.addClass('hidden');
                     success.removeClass('hidden');
                  }
               },
               error: function() {
                  message.html('<div class="alert alert-danger">Помилка відправки</div>');
               },
            })
         });
      });
   </script>
</body>

</html>
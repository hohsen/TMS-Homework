<!-- 
Допустим, вы создаете веб-сайт для организации мероприятий, и вам нужно создать страницу для регистрации участников. 
Вы можете использовать функцию $_POST в PHP для обработки формы регистрации, которая будет содержать поля:

Входные данные:
1. Имя
2. Фамилия
3. Электронная почта
4. Чекбокс согласия с обработкой формы

Что требуется:
1. Создать форму (без добавления стилей)
2. В action="register.php" добавить файл для обработки $_POST
3. Валидировать поля, как на клиенте (средствами HTML), так и при помощи PHP -->


<form action="register.php" method="post">
  <p>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
  </p>
  <p>
      <label for="surname">Surname:</label>
      <input type="text" name="surname" id="surname">
  </p>
  <p>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
  </p>
  <p>
      <label for="checkbox">I agree with this form processing</label>
      <input type="checkbox" name="checkbox" id="checkbox">
  </p>
  <button type="submit" name="submit">Submit</button>
</form>



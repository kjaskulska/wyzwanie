    <?php
        $to      = 'k.u.jaskulska@gmail.com';
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $subject = 'Nowa wiadomość od ' . $name . ' (' . $email . ')';
        $message = $_POST['message'];
        $headers = 'Mail od' . $name . ' (' . $email . ')';
        $headers .= 'Content-Type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
        echo '<h2>Dzięki wielkie za wysłanie wiadomości :)</h2>';
    ?>

    <form action="form.php" method="POST">
    <label for="name">Imię</label>
      <input type="text" name="name" id="name">
    <label for="email">E-mail</label>
      <input type="email" name="email" id="email">
    <label for="massage">Tekst wiadomości</label>
      <textarea name="massage" id="massage" rows="3" required/></textarea>
      <input type="submit" name="submit" value="Wyślij wiadomość">
      <input type="reset" name="submit" value="Reset danych">
  </form>

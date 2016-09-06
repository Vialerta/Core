
<!DOCTYPE html>
<html>
<head>
<title>Form Email Tester</title>
</head>
<body>
<form name="testmail" method="post" action="<?php echo htmlentities('../api/mail/valid_email.php'); ?>">
  <input name="uf" type="text" placeholder="Type the UF">
  <input name="city" type="text" placeholder="Type the City">
  <button name="send" type="submit">Send Now</button>
</form>

</body>
</html>

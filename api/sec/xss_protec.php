<?php
//enable a XSS Protection
  header("X-XSS-Protection: 1; mode=block");
  header("session.cookie_httponly = True;");
?>

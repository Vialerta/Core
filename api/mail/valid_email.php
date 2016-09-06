<?php

  // define variables and set to empty values
  $state_post = $city_post = '';

  //Function that validade POST data
  function test_input($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);

      return $data;
  }
      //if the server method was POST, catch the data.
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $state_post = test_input($_POST['uf']);
          $city_post = test_input($_POST['city']);
      }

  //Initial of State (ex RJ)
  $state = strtolower($state_post);

  //Official city name
  $query_city = strtolower($city_post);

    //Function that clear string inputed by $query_city
    function clean($string)
    {
        $string = strtolower(str_replace(' ', '_', $string));

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
    //Clear city name
    $cidade = clean($query_city);

    //Build city email domain
    $email = 'prefeito'.'@'.$cidade.'.'.$state.'.gov.br';

      //Function that verify email existence
     function domain_exists($email, $record = 'MX')
     {
         list($user, $domain) = explode('@', $email);

         return checkdnsrr($domain, $record);
     }
         if (domain_exists($email)) {
             echo 'Email is OK! <br>';
             echo '<b>'.$email.'</b>';
         } else {
             echo 'No MX record exists;
            <br> The previous email was invalid... <br>
            <b>'.$email.'</b><br><hr>
             The correct is... <br>';
             $arr = explode(' ', trim($query_city));
             $correct_city_name = clean($arr[0]);
             $email = 'prefeito'.'@'.$correct_city_name.'.'.$state.'.gov.br';
             echo '<b>'.$email.'</b>';
         }

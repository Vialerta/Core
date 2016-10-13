<?php


/*
       _                    _____                                                   ___
      | |                  (_____)                                                 / __)
 _ _ _| | _   ____ ____       _       ___  ____ ____    _   _  ___  _   _  ____   | |__ ____  ____ ____
| | | | || \ / _  )  _ \     | |     /___)/ _  ) _  )  | | | |/ _ \| | | |/ ___)  |  __) _  |/ ___) _  )
| | | | | | ( (/ /| | | |   _| |_   |___ ( (/ ( (/ /   | |_| | |_| | |_| | |      | | ( ( | ( (__( (/ / _ _ _
 \____|_| |_|\____)_| |_|  (_____)  (___/ \____)____)   \__  |\___/ \____|_|      |_|  \_||_|\____)____|_|_|_)
                                                       (____/


*/

//clear show erros
error_reporting(0);

$whatsyournameserver = array('OpenBSD', 'Windows NT', 'Ubuntu', 'CentOS', 'Oracle Linux', 'Fedora', 'Debian');

$whatsyournamesystem = array('Kode C ANSII', 'C#', 'Python', 'Ruby', 'Rails', 'ASP.NET', 'Java EE');

  $rand_keys_server = array_rand($whatsyournameserver);
  $rand_keys_system = array_rand($whatsyournameserver);

  $whatsyournameserver = $whatsyournameserver[$rand_keys_server];
  $whatsyournamesystem = $whatsyournamesystem[$rand_keys_system];

//Spoof is Good (iak iak iak) :D
header('X-Powered-By:'.$whatsyournameserver);
header('Server:'.$whatsyournamesystem);

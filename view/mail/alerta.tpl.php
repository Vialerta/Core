<?php

$set_default_url = "http://$_SERVER[HTTP_HOST]";

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if !mso]><!-->
    <title>Email</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <!--[if (gte mso 9)|(IE)]>
    <style type="text/css">
        table {border-collapse: collapse;}
    </style>
    <![endif]-->

<style>
/* Basics */
body {
    margin: 0 !important;
    padding: 0;
    background-color: #fff;
}
table {
    border-spacing: 0;
    font-family: sans-serif;
    background-color: white;
    color: #333333;

}
td {
    padding: 0;
}
img {
    border: 0;
}
div[style*="margin: 16px 0"] {
    margin:0 !important;
}
.wrapper {
    width: 100%;
    table-layout: fixed;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
.webkit {
    max-width: 600px;
    margin: 0 auto;
}
.outer {
margin: 0 auto;
    width: 100%;
    max-width: 600px;
}

.full-width-image img {
    width: 100%;
    max-width: 600px;
    height: auto;
    border-radius: 2px;
}

.inner {
padding: 10px;
}
p {
    margin: 0;
    line-height: 1.5em;
    text-align: justify;
}
a {
    color: #ee6a56;
    text-decoration: underline;
}
.h1 {
    font-size: 21px;
    font-weight: lighter;
    Margin-bottom: 18px;
}
.h2 {
    font-size: 18px;
    font-weight: bold;
    Margin-bottom: 12px;
}

/* One column layout */
.one-column .contents {
    text-align: left;
}
.one-column p {
    font-size: 14px;
    margin-bottom: 10px;
}
.rodape{
    background-color: #fff;
    color: grey;
    font-size: 0.8em;
    text-align: center;
}
.button{
    text-align: center;
    margin: 0 auto;
    background-color: #013D5F;
    border:none;
    font-size: 1.0em;
    border-radius: 2px;
    color: white;
    padding:  10px 15px;
}
hr {
    box-sizing: content-box;
    height: 0;
    margin: 40px 0;
    border: 0;
    border-top: 1px solid #ddd;
}
</style>

</head>
<body>
    <center class="wrapper">
        <div class="webkit">
            <table class="outer" align="center">
                <tr>
                <td class="inner contents" style="text-align:center;">
                    <img width="100" src="<?php echo $set_default_url ?>/core/view/mail/assets/logo.png" >
                </td>
            </tr>
                <tr>
                   <td class="full-width-image">
                       <img src="http://placehold.it/1359x377" width="600" alt="" />
                   </td>
               </tr>



            <tr>
            <td class="inner contents"><br />
                <p class="h1">Lorem ipsum dolor sit amet</p>
                <p>Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut erat.</p><br />

            </td>
        </tr>
        <tr>
        <td class="inner contents">
                <button class="button">Sign In</button>
        </td>
    </tr>
        <tr>
        <td class="inner contents rodape">

            <p>rodape aqui</p>
        </td>
    </tr>
            </table>
        </div>
    </center>
</body>
</html>

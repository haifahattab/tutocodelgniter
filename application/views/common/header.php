<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>    
    <link rel="stylesheet" href="<?= base_url()."assets/css/bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?= base_url()."assets/css/theme.css";?>">
    <script src="jquery-2.1.1.min.js"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <style>
      a{
        color: grey;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![ endif ] -->
  </head>
  <body>
    <nav class="navbar navbar-inverse bg-dark mb-2">
      <div class="container-fluid">
        <div class="navbar-header row">
          <a class="navbar-brand" href="/index.html">EL ABED Haifa</a>
          <ul class="nav navbar">
            <li class="mr-4"><?= anchor('index',"Accueil"); ?></li>
            <li><?= anchor('contact', "Contact"); ?></li>

          </ul>
        </div>
      </div>
    </nav>
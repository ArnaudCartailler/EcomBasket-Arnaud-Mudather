<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>iShoesYou</title>
  <meta name="description" content="Basket e-commerce, discover our baskets">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

<?php include("header.php"); ?>


<?php

$products = array (

  array(
    'name' => 'Basket-Dunk',
    'price' => '80€',
    'size' =>'43',
    'src' => 'img/basketdunk.jpg',
    'color' =>'blanc',
    'stock' => 'oui',
    'summary' => 'Produit fait pour la pratique du basket-ball',
    ),

    array(
      'name' => 'Basket-Ceyue',
      'price' => '120€',
      'size' =>'43',
      'src' => 'img/ceyue.jpg',
      'color' =>'blanc',
      'stock' => 'oui',
      'summary' => 'Produit fait pour la balade',
      ),

      array(
        'name' => 'Basket-Spider',
        'price' => '90€',
        'size' =>'43',
        'src' => 'img/spider.jpg',
        'color' =>'blanc',
        'stock' => 'oui',
        'summary' => 'Produit fait pour la sortie de spider-man',
        ),

        array(
          'name' => 'Basket-Reb',
          'price' => '150€',
          'size' =>'43',
          'src' => 'img/reb.jpg',
          'color' =>'blanc',
          'stock' => 'oui',
          'summary' => 'Produit fait pour craner',
        ),
);

  ?>


<div class="container-fluid my-5">
  <div class="row">

    <?php foreach($products as $key => $value){ ?>

      <div class="product col-md-3 col-sm-6">
        <a href="product.php?index=<?php echo $key; ?>">
          <img class="img-fluid" width="250" src="<?php echo $value['src'] ?>" alt="basketdunk">
        </a>
          <div class="spec">
            <p><?php echo $value['name'] ?></p>
            <p class="price"><?php echo $value['price'] ?></p>
        </div>
      </div>

      <?php

      }

      ?>

  </div>
</div>



<?php include("footer.php"); ?>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>

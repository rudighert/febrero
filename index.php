<!DOCTYPE HTML>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="css/style.css" media="screen" />
    <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <title>♥ ♥ ♥Lissy♥ ♥ ♥</title>
  </head>


<?php

  function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
  }

  $baraja   = array_fill(0, 12, 'card');
  $imagenes = array("url1","url2","url3","url4","url5","url6");
  $random   = array_merge(array_values(randomGen(0,5,6)),array_values(randomGen(0,5,6)));

?>
  <body>

    <header>
    </header>


    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3">
      </div>
      <div class="col-xs-9 col-sm-9 col-md-9">
        <div class="row">
          <?php foreach ($baraja as $key => $value): ?>
            <div class="col-xs-3 col-sm-3 col-md-3 content_card">
              <div class="flip-container" data-number="<?php echo $random[$key] ?>">
                <div class="flipper">
                  <div class="front">
                    <div class="card aback"></div>
                  </div>
                  <div class="back">
                    <div class="card face">
                      <h1><?php echo $random[$key] ?></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>





  </body>




<script type="text/javascript">

  var click = 0;
  var prev  = -1;
  $(document).ready(function(){
    $('.content_card').on('click','.flip-container', function(){
      $(this).addClass('clicked');
      click++;
      click = click > 2 ? 1 : click;

      var number = $(this).data('number');
      if(click==2){
        if(prev == number){
          $(this).addClass('pair');
          $('.flip-container[data-number="'+prev+'"]').addClass('pair');
          $('.flip-container[data-number="'+number+'"]').addClass('pair');
        }else{
          setTimeout(function(){ $('.flip-container').removeClass('clicked'); }, 1000);

        }

      }else{
        prev = $(this).data('number');
        console.log(prev);
        console.log(number);

      }


    })
  })


</script>

</html>
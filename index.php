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
      <div class="letter">
        holaaaaa
      </div>
      <div class="col-xs-3 col-sm-3 col-md-3">
        <div class="indications">
          <h3>Indicaciones:</h3>
          <p>Debes encontrar los pares para obtener tu gran premio, ojo, solo puedes <span>equivocarte 3 veces</span></p>
        </div>
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
  var size_cards = 12;
  var attempts = 0;
  var indications = '';


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
          if($('.flip-container.pair').size()==size_cards){
            $('.letter').show('slow')
          }
        }else{
          attempts++;

          if(attempts==1)
            $('.indications p').html("texto 1");
          if(attempts==2)
            $('.indications p').html("texto 2");
          setTimeout(function(){ $('.flip-container').removeClass('clicked'); }, 1000);

        }

      }else{
        prev = $(this).data('number');
      }


    })
  })


</script>

</html>
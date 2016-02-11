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
  $text     = ["L","I","S","y","","T","E","","A","M","O","♥"];
?>
  <body>

  <header>
  </header>

  <div class="wrapper">
    <div class="row">
      <div class="letter">
        Como ves ya has ganado! De todas formas, ibas a ganar igual.... Jajajajaja
        Todo lo que ha pasado hasta acá lissy realmente es lo más lindo de mi vida, he dado lo mejor que he podido a tu lado y de alguna u otra forma me las ingenio para darte alegrías .... Feliz día del amor mi lissy más linda ... En este día solo quiero recordarte lo feliz que estoy a tu lado, que te amo demasiado y sigo dando las gracias por estar contigo, compartir junto a ti y hacer todo lo que se nos ocurra ... Muchas cosas a tu lado tienen mucho sentido en este momento, como la frase que siempre me decían mis viejos "tranquilo, ya llegará la persona indicada" y siento que eres tú, me lo dice mi cabeza y me lo dice mi corazón... Sé que estamos partiendo, que falta mucho camino por recorrer, que la magia del principio de una relación no perdura todo el tiempo pero eso no quiere decir que no vayamos evolucionando y creciendo como pareja ... La verdad es que quiero una vida contigo Lissy , me encantas tú y el mundo que te rodea, amo quién eres por dentro y por fuera y me enamora sentir que a tu lado soy cada vez mejor .... Te amo como nunca antes pensé poder , todo lo que siento por ti es totalmente nuevo y me encanta .... Este es el primero de muchos días del amor a tu lado, y espero que la vida me de la oportunidad de sorprenderte cada día.
        Este es mi regalo más ñoño que te he dado , pero sabes que soy informático jajajajaja pero de todas formas te tengo algo chiquitito que espero que te guste, te amo lissy, todos los días es más y todos los días quiero pasar más a tu lado  ...
        Te amo con locura , y como no? Si eres el amor que tanto soñé ♥ ♥ ♥ ♥ ♥ ♥
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">
          <?php foreach ($baraja as $key => $value): ?>
            <div class="col-xs-3 col-sm-3 col-md-3 content_card">
              <div class="flip-container" data-number="<?php echo $random[$key] ?>">
                <div class="flipper">
                  <div class="front">
                    <div class="card aback">
                      <div class="char"><?php echo  $text[$key] ?></div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="card face" style="background: url(images/<?php echo $random[$key] ?>.jpg) center no-repeat; background-size: cover">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>

  </div>

  <div class="preload">
    <img src="images/0.jpg">
    <img src="images/1.jpg">
    <img src="images/2.jpg">
    <img src="images/3.jpg">
    <img src="images/4.jpg">
    <img src="images/5.jpg">
    <img src="images/letter.png">
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
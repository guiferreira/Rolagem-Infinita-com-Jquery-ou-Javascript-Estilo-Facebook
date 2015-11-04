<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .loding{
      position: fixed;
      left: 50%;
      bottom: 10px;
    }

    </style>
  </head>
  <body>
  


<?php for ($i=0; $i < 7; $i++) { ?>
  

    <h1>Hello, world! <?php echo $i; ?></h1>
    <p>Lorem ipsum dolor sit amet, 
      consectetur adipiscing elit, sed do 
      eiusmod tempor incididunt ut labore 
      et dolore magna aliqua. Ut enim ad minim 
      veniam, quis nostrud exercitation ullamco 
      laboris nisi ut aliquip ex ea commodo consequat. 
      Duis aute irure dolor in reprehenderit in voluptate 
      velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, 
      sunt in culpa qui officia deserunt 
      mollit anim id est laborum.</p><br><br>

<?php }  ?>


  
   
    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8">
    var cont = 1;
    var pag = 0; 
    $(window).scroll(function () {

      if(($(window).scrollTop() + $(window).height()) > ($('body').height() - 100) ){
          if(cont){
            
            $('.loding').removeClass('hide');
            setTimeout(function() {
              $('.loding').addClass('hide');
              carregaPagina(pag);
              pag++;
              cont = 1;            

            }, 400);
            
            cont = 0;
          }
          
      }
    });

    function carregaPagina(param){
      var array = [];
      for (var i = 0; i < param; i++) {
        array[i] = '<h1>Hello, world!'+i+'</h1>'+
        '<p>Lorem ipsum dolor sit amet,'+
          'consectetur adipiscing elit, sed do'+
         'eiusmod tempor incididunt ut labore'+
         'et dolore magna aliqua. Ut enim ad minim'+
         'veniam, quis nostrud exercitation ullamco'+
          'laboris nisi ut aliquip ex ea commodo consequat.'+
          'Duis aute irure dolor in reprehenderit in voluptate'+
         'velit esse cillum dolore eu fugiat nulla pariatur.'+
          'Excepteur sint occaecat cupidatat non proident,'+
          'sunt in culpa qui officia deserunt'+
          'mollit anim id est laborum.</p><br><br>';
      };

      $('body').append(array)
        

    }


    </script>


  <img class="loding hide" src="img/loding.gif" height="40" width="40">

  </body>
</html>
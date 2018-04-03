<!DOCTYPE html>
<html>
<head>
    @yield('title')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet"> 
    <style type="text/css">
      body{
        background-color: #02242E;
        color: white;
        font-family: cursive;
      }
      .maior{
        font-size: 3.8em;
      }
      .Audiowide
      {
        font-family: 'Audiowide', cursive;
      }
      .face
      {
        max-width:25%;
        width: auto;
      }
      .ranking
      {
        text-align: right;
        border-style: solid;
        margin-left: 40%;
        margin-top: 10%;
      }
      .flot
      {
        float: left;
      }
      .menor
      {
        font-size: 1.2em;
      }
      div.tres {
         width:60em;
         height:8em;
         border-style: solid;
         border-color: black;
      };
      .img-circle {
          border-radius: 50%;
      }
          .circleb{
      border-radius: 50%;
      margin: 0 auto;
      overflow: hidden;
      width: 100px;
      height: 100px;
      box-shadow: 3px 3px 5px #555; /* sombra deslocada em 3px para baixo e 3px para direita, borrada em 5px e com cor cinza */
    }
   .circle{
          width: 100%;
          height: 100%;
          overflow: hidden;
          background-size: cover; /*ajusta a imagem dentro do div, mantendo a proporção da imagem */
          background-position: center center
        }
    .histo {
        border-style: solid;
        border-color: black;
        width: 20%;
        height: 550px;
        margin-top: 6%;
        margin-left: 2%;
        display:inline-block;
        *display:inline;
        *zoom:1;
        vertical-align:top;
    }
    .circlem{
      border-radius: 50%;
      overflow: hidden;
      width: 40px;
      height: 40px;
      box-shadow: 3px 3px 5px #555; /* sombra deslocada em 3px para baixo e 3px para direita, borrada em 5px e com cor cinza */
    }
    .slot-itens{
      border-radius: 30%;
      overflow: hidden;
      width: 40px;
      height: 40px;
      /* sombra deslocada em 3px para baixo e 3px para direita, borrada em 5px e com cor cinza */
      float: left;
      margin-left: 1px;
      background-color: rgba(142,136,136,0.5);
    }
    .scroll { 
        overflow-x: scroll;
        overflow-y: hidden;
        white-space:nowrap;
        position: absolute;
    } 
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>  
</body>
</html>
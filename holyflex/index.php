<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Holy Grail</title>
  <style>
    * {
      font-size: 36px;
      font-family: Georgia;
    }
    .main {
      background-color: teal;
      color:white;
    }
    footer {
      background-color: tomato;
      color:white;
    }

    html, body {
      width: 100%;
      height: 100%;
      margin: 0;
    }

    /* items flex/expand vertically */
    .vbox {
      /* previous syntax */
      display: -webkit-box;
      display: -moz-box;
      display: box;

      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -ms-box-orient: vertical;
      box-orient: vertical;

      /* current syntax */
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flex;
      display: flex;

      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    /* items flex/expand horizontally */
    .hbox {
      /* previous syntax */
      display: -webkit-box;
      display: -moz-box;
      display: -ms-box;
      display: box;

      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -ms-box-orient: horizontal;
      box-orient: horizontal;

      /* current syntax */
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flex;
      display: flex;

      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
    }

    .main {
      /* previous syntax */
      -webkit-box-flex: 1;
      -moz-box-flex: 1;
      -ms-box-flex: 1;
      box-flex: 1;

      /* current syntax */
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1;
    }

    /*
    Tamanho do footer pode ser definido tanto em % como em px
    Também pode ficar indefinido, ajustando automaticamente ao conteúdo
    */
    footer {
      height: 25%;
    }

    /* O Conteúdo pode usar os tamanhos e alinhamento padrão */
    main {
      width:100%;
      text-align: center;
    }
</style>
</head>
<body class="vbox">
  <section class="main hbox">
    <main>
      Conteúdo do Site
      <br>Alinhado ao Centro
    </main>
  </section>
  <footer>Rodapé - Altura definida em 25%</footer>
</body>
</html>
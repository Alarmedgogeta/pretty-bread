<html>
  <head>
    <meta charset="utf-8" />
    <title>Pedido de Pan</title>
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
      }
      body {
        background: #ffffff;
      }
      header {
        width: 100%;
        overflow: hidden;
        background: saddlebrown;
        margin-bottom: 20px;
      }
      header .logo {
        color: black;
        font-size: 50px;
        line-height: 100px;
        float: left;
      }
      header nav {
        float: right;
        line-height: 100px;
      }
      header nav a {
        display: inline-block;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        line-height: normal;
        font-size: 20px;
        font-weight: bold;
        -webkit-transition: 500ms ease;
        -o-transition: 500ms ease;
        transition: 500ms ease;
      }
      header nav a:hover {
        background: yellow;
        border-radius: 50px;
      }
      #con {
        float: right;
        width: 99%;
      }
      #con #pri {
        float: left;
        width: 99%;
        background: #ffffff;
        border: 2px solid #ffffff;
      }
      h1 {
        text-align: left;
        color: #757c8d;
        margin: 20px;
      }
      input[type="text"] {
        border-radius: 5px;
        margin: 20px;
        background: #f7f7f7;
        border: 1 solid #ccc;
        color: #777;
        max-width: 100%;
        outline: none;
        padding: 8px;
      }
      label {
        font-weight: bold;
        color: #444;
        font-size: 1rem;
      }
      p {
        font-size: 1rem;
        color: black;
        margin: 20px;
      }
      p :hover {
        color: #757c8d;
      }
      textarea {
        margin: 20px;
      }
      a {
        color: black;
      }
      .est {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
      }
      div label.rat {
        color: black;
        text-align: right;
      }
      .lol {
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
      }
      textarea {
        background-color: #f7f7f7;
      }
      input[type="submit"] {
        -webkit-appearance: button;
        background-color: #757c8d;
        border: 0;
        color: pointer;
        font-size: 12px;
        padding: 0.7917em 1.5em;
        text-transform: uppercase;
        margin: 20px;
        color: white;
      }
      input[type="submit"]:hover
      {
        color: black;
        opacity: 0.6;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">Pretty Bread</div>
      <nav>
        <a href="#">Tienda</a>
        <a href="#">Acerca de</a>
        <a href="#">Contactenos</a>
        <a href="#">Cuenta</a>
      </nav>
    </header>
    <div>
      <img width="1350" height="700" src="dulce.jpg" alt="imagen generica" />
    </div>
    <div id="con">
      <div id="pri">
        <h1>Contacto</h1>
        <p>
          Si desea almacenar nuestros productos horneados para su cafetería,
          tienda de delicatessen o tienda o si desea utilizar nuestros productos
          como ingredientes en su restaurante, tienda de delicatessen o
          cafetería, comuníquese con nosotros en:
        </p>
        <p>Telefono: 917 102 8784</p>
        <p>Email: <a href="#">alandiazyanez@outlook.com</a></p>
        <div class="est">
          <label for="nombre"
            >Nombre(s): &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; Apellidos:</label
          >

          <br />
          <input
            id="nombre"
            type="text"
            size="50%"
            maxlength="100"
            name="nombre"
            value=""
          />
          <input
            id="apellidos"
            type="text"
            size="50"
            maxlength="100"
            name="apellidos"
            value=""
          /><br />
        </div>
        <div class="lol">
          <label for="correo">Correo:</label><br />
          <input
            id="correo"
            type="text"
            size="100"
            maxlength="100"
            name="correo"
            value=""
          /><br />
        </div>
        <div class="lol">
          <label for="tele">Telefono:</label><br />
          <input
            id="tele"
            type="text"
            size="100"
            maxlength="100"
            name="tele"
            value=""
          /><br />
        </div>
        <div class="lol">
          <label for="asu">Asunto:</label><br />
          <input
            id="asu"
            type="text"
            size="100"
            maxlength="100"
            name="asu"
            value=""
          /><br />
        </div>
        <div class="lol">
          <label for="mensa">Mensaje: </label><br />
          <textarea cols="100" rows="10" type="text" name="mensa">
Escriba su Mensaje</textarea
          ><br />
          <input id="alta" type="submit" value="Enviar" />
        </div>
      </div>
    </div>
  </body>
</html>

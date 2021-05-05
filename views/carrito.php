<html>
  <head>
    <meta charset="utf-8" />
    <title>Carrito</title>
    <style type="text/css">
      body {
        background: white;
      }
      * {
        margin: 0;
        padding: 0;
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
        width: 100%;
      }
      #con #pri {
        float: left;
        width: 100%;
        background: white;
        border: 2px solid white;
      }
      .art {
        display: flex;
      }

      #con #pri .art img {
        float: left;
        margin-left: 20px;
        position: relative;
        display: inline-block;
      }

      li.pucha {
        border-top: 2px solid black;
        clear: both;
        float: none;
        padding: 1em 0;
        margin-top: 1em;
        text-align: center;
        width: 100%;
      }
      li.pucha input {
        font-size: 1.3em;
        color: white;
        text-decoration: none;
        padding: 3px;
        padding-left: 3px;
        padding-right: 3px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 100;
        font-size: 20px;
        background-color: #006505;
        border-radius: 15px;
        border: 3px double #006505;
        width: 40%;
      }
      .pucha:hover {
        opacity: 0.6;
        text-decoration: none;
      }

      h1 {
        text-align: center;
      }

      .contenedor_texto {
        text-align: left;
        width: 100%;
      }
      .contenedor_cantidad {
       display: flex;
       align-items: center;
        width: 28%;
      }
     a
     {
       text-align: right;
     }
     h3
     {
       text-align: right;
       margin-right: 405px;
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
    <div id="con">
      <div id="pri">
        <h1>Realizar el Pedido</h1>
        <h2>Carrito</h2>
        <hr />
        <h3>Cantidad&nbsp;&nbsp;Precio</h3>
        <div class="art">
          <div class="contenedor_imagen">
            <img
              width="100"
              height="100"
              src="receta-de-conchas-de-pan.jpg"
              alt="imagen generica"
            />
          </div>
        <div>
          <div class="contenedor_texto">
            <h2>Concha Deliciosa</h2>
          </div>
            <br />
            <div>
            <p>
              La concha es una variedad de pan de dulce mexicano. Es llamada así
              por su semejanza con una concha de mar. 
            </p>
          </div>
        </div>
            <div class="contenedor_cantidad">
              <input type="text" name="can" value="" size="5" />&nbsp;&nbsp;<input type="text" name="can" value="" size="5" />&nbsp; &nbsp; <a href="#">Eliminar</a>
            </div>
            
        </div>
        <br />
        <div class="art">
          <div class="contenedor_imagen">
            <img
              width="100"
              height="100"
              src="receta-de-conchas-de-pan.jpg"
              alt="imagen generica"
            />
          </div>
        <div>
          <div class="contenedor_texto">
            <h2>Concha Deliciosa</h2>
          </div>
            <br />
            <div>
            <p>
              La concha es una variedad de pan de dulce mexicano. Es llamada así
              por su semejanza con una concha de mar.
            </p>
          </div>
        </div>
            <div class="contenedor_cantidad">
              <input type="text" name="can" value="" size="5" />&nbsp;&nbsp;<input type="text" name="can" value="" size="5" />&nbsp; &nbsp; <a href="#">Eliminar</a>
            </div>
        </div>

        <li class="pucha">
          <input id="alta" type="submit" value="Siguiente" />
        </li>
      </div>
    </div>
  </body>
</html>

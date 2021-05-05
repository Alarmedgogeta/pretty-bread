<html>
  <head>
    <meta charset="utf-8" />
    <title>Agregar Domicilio</title>
    <style type="text/css">
      body {
        background: #ededed;
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
        width: 80%;
      }
      #con #pri {
        float: left;
        width: 80%;
        background: #ffffff;
        border: 2px solid #ffffff;
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
        margin-left: 18px;
      }
      .est {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
      }
      .lol {
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
      }
      h1 {
        text-align: left;
        color: black;
        margin-left: 270px;
        padding: 10px;
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
     .vinculo_olvidado
     {
       font-size: 12px;
       
       margin-left: 300px;
     }
     .vinculo_numext{
       font-size: 12px;
       margin-left: 670px;
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
    <h1>Agregar Domicilio</h1>
    <div id="con">
      <div id="pri">
        <div class="lol">
          <label for="Nombre_Apellido">Nombre Apellidos</label><br />
          
          <input
            id="nom_ap"
            type="text"
            size="40"
            maxlength="100"
            name="nom_ap"
            value=""
          />
          <br />
        </div>
        <div class="vinculo_olvidado">
          <a href="#">Si no lo sabe</a>
        </div>
        <div class="lol">
          <input
            id="cp"
            type="text"
            size="40"
            maxlength="100"
            name="cp"
            value="Codigo Postal"
          />
          <br /> 
        </div>
        <div class="est">
          <input
            id="estado"
            type="text"
            size="40%"
            maxlength="100"
            name="estado"
            value="Estado"
          />
          <input
            id="mun"
            type="text"
            size="40"
            maxlength="100"
            name="mun"
            value="Municipio/Alcaldia"
          /><br />
        </div>
        <div class="lol">
          <input
          id="col"
          type="text"
          size="40"
          maxlength="100"
          name="col"
          value="Colonia"
        /><br />
        </div>
        <div class="vinculo_numext">
          <a href="#">Sin Numero</a>
        </div>
        <div class="est">
          <input
            id="calle"
            type="text"
            size="40%"
            maxlength="100"
            name="calle"
            value="Calle"
          />
          <input
            id="ne"
            type="text"
            size="40"
            maxlength="100"
            name="ne"
            value="Numero Exterior"
            />
          <br />   
        </div>
        <div class="lol">
          <input
            id="ni"
            type="text"
            size="40"
            maxlength="100"
            name="ni"
            value="N* Interior/Depto(opcional)"
          /><br />  
        </div>
        <div class="est">
          <input
            id="c1"
            type="text"
            size="40%"
            maxlength="100"
            name="c1"
            value="Calle 1"
          />
          <input
            id="c2"
            type="text"
            size="40"
            maxlength="100"
            name="c2"
            value="Calle 2"
          /><br />   
        </div>
        <li class="pucha">
          <input id="alta" type="submit" value="Siguiente" />
        </li>
      </div>
    </div>
  </body>
</html>


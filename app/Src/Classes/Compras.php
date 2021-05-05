<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretty-bread.com</title>
</head>
<style>
@media screen {
    h1,h2,h3,h4,h5,h6,p,label,span, form{
        margin: 0vw;
        padding: 0vw;
    }
    body{
    background-color: rgb(252, 252, 252);
    }
    .head{
        background-color: blue;
    }
    .head_Menu{
        display: flex;
        justify-content: space-between;
        padding: 0px;
    }
    .head_Menu #Titu{
        background-color: rgb(255, 163, 25);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        width:11%;
        font-family: Arial, Helvetica, sans-serif;
    }
    .head_Menu .head_Menu-{
        background-color: rgb(151, 81, 0);
        display: flex;
        justify-content: flex-end;
        width: 89%;
        height: 35px;
        font-family: Arial, Helvetica, sans-serif;
    }
    /* a{
        text-decoration: none;
    
    } */
    .head_Menu .head_Menu-opc{
        /* background-color: rgb(241, 21, 168); */
        font-size: 20px;
        padding-right: 8px;
        padding-left: 8px;
        font-family: Arial, Helvetica, sans-serif;
        border-right: solid rgb(255, 202, 103);
        color: white;
        display: flex;
        align-items: center;
    }
    .head_Menu-opc:hover{
        color: black;
        background-color: rgb(255, 202, 103);
        cursor: pointer;
    }
    .head_Menu #EsteNo{
        border-right: none;
    }
    .Main_B{
        display: flex;
        justify-content: center;
    }
    .body{
        /* background-color: rgb(197, 197, 197); */
        width: 85%;
    }
    .body .body_top{
        background-color: rgb(201, 201, 201);
        display: flex;
        justify-content: space-between;
        padding-top: 20px;
        padding-bottom: 25px;
        margin-top: 5px;
        padding-left: 5px;
        margin-bottom: 5px;
        border-radius: 10px;
    }
    .body .body_top .body_top-Tit{
        font-size: 32px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    .body .body_top .body_top-Inter .opcs-b{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: blue;
        background-color: unset;
        border: unset;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 90px;
    }
    .opcs-b:hover{
        cursor: pointer;
    }
    .body .body_comprs .body_comprs-Comp{
        background-color: rgb(223, 223, 223);
        margin-bottom:10px ;
        border: 3px solid rgb(168, 168, 168);
    }
    .body .body_comprs .body_comprs-Comp .body_comprs-Comp_Date{
        /* background-color: rgb(252, 188, 220); */
        display: flex;
        justify-content: space-between;
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 20px;
    }
    .body .body_comprs .body_comprs-Comp .body_comprs-Comp_Date .Date_Del{
        /* background-color: rgb(136, 129, 133); */
        font-size: 24px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .body .body_comprs .body_comprs-Comp .body_comprs-Comp_Info{
        /* background-color: rgb(255, 57, 172); */
        display: flex;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 30px;
        font-family: Arial, Helvetica, sans-serif;
        
    }
    .body .body_comprs .body_comprs-Comp .body_comprs-Comp_Info .Foto_P{
        /* background-color: rgb(0, 255, 13); */
        width: 12%;
        display: flex;
        justify-content: center;
        padding-left: 10px;
    }
    .body .body_comprs .body_comprs-Comp .body_comprs-Comp_Info .NyP{
        /* background-color: rgb(11, 129, 0); */
        width: 30%;
        display: flex;
        flex-direction: column;
        padding-left: 20px;
    }
    .body .body_comprs .body_comprs-Comp .body_comprs-Comp_Info .Detall{
        font-size: 20px;
        /* background-color: rgb(95, 155, 71); */
        width: 58%;
        display: flex;
        justify-content: flex-end;
    }
    .Nom_P{
        font-size: 30px;
        color: blue;
    }
    .Precio_Cant{
        font-size: 25px;
        color: rgb(129, 129, 129);
    }
    .Detall{
        color: blue;
        font-size: 20px;
    }
    .Detall:hover{
    cursor: pointer;
    }
    .Volv_comp{
        font-size: 17px;
        color: white;
        background-color: rgb(0, 8, 122);
    }
    .Volv_comp:hover{
        color: rgb(0, 0, 0);
        background-color: rgb(0, 255, 242);
        cursor: pointer;
    }
    .Imagen_P{
        height: 170px;
        width: 175px;
        border: 1px solid black;
    }
    .foot{
        background-color: rgb(101, 253, 253);
    }
}
</style>

<body> 
<?php    
echo "
        <div class='head_Menu'>
            <h2 id='Titu'>
                Pretty Bread
            </h2>
            <div class='head_Menu-'>
                <div class='head_Menu-opc'>
                Tienda
                </div>
                <div class='head_Menu-opc'>
                Acerca de 
                </div>
                <div class='head_Menu-opc'>
                Contactos 
                </div>
                <div class='head_Menu-opc' id='EsteNo'>
                Cuenta
                </div>
            </div>
        </div>
        <div class='Main_B'>
            <div class='body'>
                <div class='body_top'>
                    <span class='body_top-Tit'>
                        Compras
                    </span>
                    <div class='body_top-Inter'>
                        <select name='busc_comp' class='opcs-b'>
                            <option class='color' value='All' selected>Todas</option>
                            <option class='color' value='Rec'>Recientes</option>
                            <option class='color' value='Ant'>Antiguas</option>
                        </select>
                    </div>
                </div>
                <div class='body_comprs'>
                    <div class='body_comprs-Comp'>
                        <div class='body_comprs-Comp_Date'>
                            <span class='Date_Del'>
                                Entregado dd de 'Mes'
                            </span>
                            <input type='button' value='Volver Comprar' class='Volv_comp'>
                        </div>
                        <div class='body_comprs-Comp_Info'>
                            <div class='Foto_P'>
                                <img src='cuernito.jpg' alt='Imagen no disponible' class='Imagen_P'>
                            </div>
                            <div class='NyP'>
                                <span class='Nom_P'>
                                    Cuernito 
                                </span>
                                <span class='Precio_Cant'>
                                    $199.00 x 30 Unidades
                                </span>
                            </div>
                            <div class='Detall'>
                                Ver detalles
                            </div>
                        </div>
                    </div>
                    <div class='body_comprs-Comp'>
                        <div class='body_comprs-Comp_Date'>
                            <span class='Date_Del'>
                                Entregado dd de 'Mes'
                            </span>
                            <input type='button' value='Volver Comprar' class='Volv_comp'>
                        </div>
                        <div class='body_comprs-Comp_Info'>
                            <div class='Foto_P'>
                                <img src='cuernito.jpg' alt='Imagen no disponible' class='Imagen_P'>
                            </div>
                            <div class='NyP'>
                                <span class='Nom_P'>
                                    Cuernito 
                                </span>
                                <span class='Precio_Cant'>
                                    $199.00 x 30 Unidades
                                </span>
                            </div>
                            <div class='Detall'>
                                Ver detalles
                            </div>
                        </div>
                    </div>
                    <div class='body_comprs-Comp'>
                        <div class='body_comprs-Comp_Date'>
                            <span class='Date_Del'>
                                Entregado dd de 'Mes'
                            </span>
                            <input type='button' value='Volver Comprar' class='Volv_comp'>
                        </div>
                        <div class='body_comprs-Comp_Info'>
                            <div class='Foto_P'>
                                <img src='cuernito.jpg' alt='Imagen no disponible' class='Imagen_P'>
                            </div>
                            <div class='NyP'>
                                <span class='Nom_P'>
                                    Cuernito 
                                </span>
                                <span class='Precio_Cant'>
                                    $199.00 x 30 Unidades
                                </span>
                            </div>
                            <div class='Detall'>
                                Ver detalles
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
?>
    </body>
</html>
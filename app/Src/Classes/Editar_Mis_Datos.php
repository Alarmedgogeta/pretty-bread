<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="Edit_Cliente_Dat.css" type="text/css"> -->
    <title>Pretty-bread.com</title>
</head>
<style>
    @media screen {
        h1,h2,h3,h4,h5,h6,p,label,span, form{
            margin: 0vw;
            padding: 0vw;
        }
        div{
            /* border: 1px black groove; */
            padding: 4px;
        }
        body{
        background-color: rgb(190, 190, 190);
        }

    /* ---------EDITAR MIS DATOS--------- */
        .head_{
            /* background-color: violet; */
            padding: 0px;
        }
    .head_Menu{
        /* background-color: rgb(71, 149, 223); */
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
    }
    .head_Menu .head_Menu-{
        background-color: rgb(151, 81, 0);
        display: flex;
        justify-content: flex-end;
        width: 89%;
        height: 70%;
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
    }
    .head_Menu-opc:hover{
        color: black;
        background-color: rgb(255, 202, 103);
        cursor: pointer;
    }
    .head_Menu #EsteNo{
        border-right: none;
    }
    .head_main{
        width: 70vw;
        background-color: lightslategray;
        height: 40px;
    }
    .body_TC_TCD{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        background-color: rgb(255, 170, 170);
    }
    .Msj{
        font-size: 20px;
        font-weight: bold;
    }
    .body_TC_NomyNum_Col1{
        display: flex;
        align-items: center;
        border-radius: 10px;
        border-left: solid 6px rgb(128, 151, 255);
        background-color: rgb(150, 150, 150);
    }
    .body_TC_Datos_PyC{
        display: flex;
        flex-direction: column;
        background-color: rgb(255, 255, 255);
        height: 470px;
        border-radius: 10px;
    }
    .Data_usr{
        font-size: 30px;
        display: flex;
        align-items: center;
    }
    .Data_usr_In{
        height: 50px;
        display: flex;
        align-items: center;
        border-radius: 10px;
        background-color: rgb(156, 156, 156);
    }

    .Data_usr_In .I_{
        height: 30px;
        font-size: 25px;
        width: 98%;
    }
    .Data_usr_In .Data_usr_In-{
        /* background-color: fuchsia; */
        width: 360px;
    }
    #Data_usr_NyAps{
        display: flex;
        height: 50%;
    }
    .body_TC_Datos_PyC2{
        display: flex;
        flex-direction: column;
        width: 960px;
        height: 150px;
    }
    .Border_R{
        background-color: rgb(81, 255, 1);
        border-radius: 10px;
        height: 150px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .body_TC_Datos_PyC-NyP-T,.body_TC_Datos_PyC-email{
    /* background-color: yellow; */
    display: flex;
    flex-direction: column;
    /* justify-content: space-between; */
    height: 30%;
    }
    /* .body_TC_Mainext_{
        display: flex;
        justify-content: center;
        background-color: greenyellow;
    } */
    .body_TC_Mainext{
        /* background-color: rgb(252, 0, 218); */
        display: flex;
        justify-content: center;
        padding-top: 20px;
    }

    .body_TC_Tarjs{
        font-size: 38px;
        height: 60px;
        display: flex;
        align-items: center;
        border-bottom: 4px solid gray;
    }

    #NA, #NA2, label{
        font-size: 20px;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
    }
    .body_TC_{
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        width: 1050PX;
        height: 700px;
    }
    /* .body_TC_NomNumYFechCs{
        height: 580px;
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        /* background: rgb(255, 202, 103);
    }*/
    .body_TC_NomyNum_Col2{
        width: 940px;
        padding-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    .Link_Men,.Titulo,.Msj,.Letra,.Data_usr, #Titu{
        font-family: Arial, Helvetica, sans-serif;
    }

    .body_TC_NomyNum_I,.body_TC_NomyNum_R {
        height: 50px;
        width: 29vw;
        display: flex;
    }
    .body_TC_FexyCS_Col1{
        height: 110px;
    }

    .body_TC_Btn{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0vw;
        height: 7vw;
        margin-left: 8px;
        margin-right: 8px;
        background-color: white;
        border-radius: 10px;
    }
    #sig{
        width: 40vw;
        height: 3vw;
        font-size: 2vw;
        color: rgb(255, 255, 255);
        font-style: normal;
        background-color: rgb(100, 190, 9);
    }

    }

</style>

<body>

<?php
echo "
<div class='head_'>
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
</div>
<form action='.php' method='POST'>
    <div class='body_TC_Mainext_'>
        <div class='body_TC_Mainext'>
            <div class='body_TC_'>
                <div class='body_TC_NomNumYFechCs'>                   

                        <div class='body_TC_Datos_PyC'>
                            <div class='body_TC_Tarjs'>
                            <span class='Titulo'>
                                Editar Mis Datos
                            </span>
                        </div>
                            <div class='body_TC_Datos_PyC-NyP-T'>
                                <div class='Data_usr'>
                                Nombre y apellidos
                                </div>
                                <div class='Data_usr_In' id='Data_usr_NyAps'>
                                    <div class='Data_usr_In-'>
                                    <input type='text' name='I_Nom' id='Nom' class='I_'/> 
                                        <label for='I_Nom'>Nombre(s)</label>
                                    </div>
                                    <div class='Data_usr_In-'>
                                        <input type='text' name='I_Aps' id='Nom' class='I_'/> 
                                        <label for='I_Nom'>Apellidos</label>
                                    </div>
                                </div>
                            </div>
                            <div class='body_TC_Datos_PyC-email'>
                                <div class='Data_usr'>
                                E-mail
                                </div>
                                <div class='Data_usr_In'>
                                <input type='email' name='I_Mail' id='email' class='I_'/>
                                </div>
                            </div>

                            <div class='body_TC_Datos_PyC-NyP-T'>
                                <div class='Data_usr'>
                                Tel&eacute;fono
                                </div>
                                <div class='Data_usr_In'>
                                <input type='text' name='I_Tel' id='Tel' maxlength='10' class='I_'/>
                                </div>
                            </div> 
                        </div>
                </div>
                <div class='body_TC_Btn'>
                    <input type='submit' value='Siguiente' id='sig'/>
                </div>
            </div>
        </div>
    </div>
</form>
";
?>
</body>
</html>
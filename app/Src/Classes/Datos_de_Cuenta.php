<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Datso_Cliente.css" type="text/css">
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

    /* ---------MIS DATOS--------- */
    .head_main{
        width: 70vw;
        background-color: lightslategray;
        height: 40px;
    }
    .TLabel{
        height: 45px;
        /* background-color: cyan; */
    }
    .body_TC_TCD{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        /* background-color: rgb(201, 201, 201); */
        border-radius: 10px;
        height: 160px;
    }
    #Exicon{
        height: 100%;
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
        height: 210px;
        border-radius: 10px;
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
    justify-content: space-between;
    height: 30%;
    }
    #Carg_RFC{
        border-radius: 10px;
        background-color: rgb(70, 152, 247);
        height: 50px;
        font-size: 20px;
        color: white;
    }

    .body_TC_Mainext{
        /* background-color: rgb(252, 0, 218); */
        display: flex;
        justify-content: center;
        padding-top: 20px;
    }

    /* .body_TC_avance{
        height: 50px;
        border: none;  
        border-bottom: 4px black solid;
        display: flex;
        align-items: center;
        background: rgb(255, 103, 103);

    } */
    .body_TC_avance_{
        display: flex;
        justify-content: space-between;
        border: 2px none;
        width: 480px;
        font-size: 20px;
        
    }
    .body_TC_Tarjs{
        font-size: 38px;
        /* background-color: rgb(243, 104, 104); */
        height: 3.5vw;
        display: flex;
        align-items: center;
    }
    .body_TC_Tarjs-min{
        font-size: 28px;
        background-color: rgb(230, 230, 230);
        height: 3.5vw;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: solid 3px rgb(104, 104, 104);
        margin-bottom: 10px;
    }

    .body_TC_TCD_input{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 290px;
    }
    .body_TC_TCD_input-DataP{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        height: 240px;
    }

    #NA, #NA2{
        font-size: 20px;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
    }

    .Data_usr{
        font-size: 20px;
        display: flex;
        align-items: center;
    }
    .body_TC_{
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        width: 1050PX;
        height: 700px;
    }
    .body_TC_NomNumYFechCs{
        height: 180px;
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        /* background: rgb(255, 202, 103); */
    }
    .body_TC_NomNumYFechCs-2{
        height: 310px;
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        /* background: rgb(255, 202, 103); */
    }
    .body_TC_NomNumYFechCs-DataP{
        height: 250px;
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        background: rgb(23, 93, 197);
    }
    .body_TC_TCD,.body_TC_NomyNum, .body_TC_FexyCS{
        display: flex;
    }

    .body_TC_NomyNum, .body_TC_FexyCS{
        background-color: cornflowerblue;
        justify-content: space-between;
        height: 150px;
    }

    .body_TC_NomyNum_Col2{
        width: 940px;
        padding-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    #TC{
        height: 55px;
    }
    #TD{
        height: 55px;
        width: 900px;
    }
    .Link_Men,.Titulo,.Msj,.Letra,.Data_usr{
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
    .body_TC_FexyCS_Col1_MA{
        display: flex;
        justify-content: space-between;
        width: 280px;
    }
    .body_TC_FexyCS_Col2{
        width: 40vw;
        height: 110px;
    }
    .body_TC_FexyCS_Col2_{
        width: 40vw;
        height: 110px;
        display: flex;
        flex-direction: column;
    }

    .body_TC_Btn{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0vw;
        height: 7vw;
        margin-left: 8px;
        background-color: white;
        border-radius: 10px;
    }
    .Letra{
        font-size: 35px;
    }
    #sig{
        width: 40vw;
        height: 3vw;
        font-size: 2vw;
        color: rgb(255, 255, 255);
        font-style: normal;
        background-color: rgb(100, 190, 9);
    }
    #Cv_1{
        width: 240px;
        height: 50px;
        margin-left: 10px;
    }
    #txtNom,#cs,#txtNum{
        height: 2vw;
        font-size: 25px;
    }
    .M_A{
        font-size: 24px;
        width: 70px;
        height: auto;
    }
    #cs{
        width: 100px;
    }
    #txtNom{
        width: 350px;
    }

    #txtNum{
        width: 340px;
    }
    #flec{
        color: cornflowerblue;
    }

    }
</style>

<body>
<?php
echo"
<div class='head_'>
</div>
<form action='.php' method='POST'>
    <div class='body_TC_Mainext_'>
        <div class='body_TC_Mainext'>
            <div class='body_TC_'>
                <div class='body_TC_NomNumYFechCs-2'> 
                    <div class='body_TC_TCD_input'>                    
                        <div class='body_TC_Tarjs-min'>
                            <span class='Titulo'>
                                Datos de Cuenta
                            </span>
                            <span>
                                <a href='#' id='NA'>Necesito Ayuda</a>
                            </span>
                        </div>
                        <div class='body_TC_Datos_PyC'>
                            <div class='body_TC_Datos_PyC-email'>
                                <div class='Data_usr'>
                                E-mail
                                </div>
                                <div class='Data_usr'>
                                kkkkkkk@lllll.com
                                </div>
                                <div class='Data_usr' id='flec'>
                                    
                                </div>
                            </div>
                            <div class='body_TC_Datos_PyC-NyP-T'>
                                <div class='Data_usr'>
                                Nombre y apellidos
                                </div>
                                <div class='Data_usr'>
                                ALAN DÍAS CAMARO PEDRO
                                </div>
                                <div class='Data_usr' id='flec'>

                                </div>
                            </div>
                            <div class='body_TC_Datos_PyC-NyP-T'>
                                <div class='Data_usr'>
                                Teléfono
                                </div>
                                <div class='Data_usr'>
                                55 5555 5555
                                </div>
                                <div class='Data_usr'>
                                    <a href='#' id='NA2'>Agregar</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class='body_TC_Btn'>
                    <input type='submit' value='Siguiente' id='sig'>
                </div>
            </div>
        </div>
    </div>
</form>
";
?>
</body>
</html>
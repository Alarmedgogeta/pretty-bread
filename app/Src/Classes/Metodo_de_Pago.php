<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css" type="text/css">
    <title>Pretty-bread.com</title>
</head>
<body>

<?php
echo "
<div class='head_2'>
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
        <div class='body_TC_avance'>
            <div class='body_TC_avance_'>
                <span class='Link_Men' onclick=''>CARRITO</span><span>&nbsp;&nbsp;>&nbsp;</span>
                <span class='Link_Men' onclick=''>DIRECCI&Oacute;N</span><span>&nbsp;&nbsp;>&nbsp;</span>
                <span class='Link_Men' onclick=''>M&Eacute;TODO DE PAGO</span>
            </div>
        </div>
        <div class='body_TC_Mainext'>
            <div class='body_TC_'>
                <div class='body_TC_Tarjs'>
                    <span class='Titulo'>
                        Tarjeta de Cr&eacute;dito o D&eacute;bito
                    </span>
                </div>
                <div class='body_TC_NomNumYFechCs'>
                    <div class='body_TC_TCD'>
                        <div class='body_TC_NomyNum_Col1'>
                            <span class='TLabel'>
                                Tarjetas de Cr&eacute;dito 
                            </span>
                            <div class='body_TC_NomyNum_Col1_IMG'>
                                <img src='Credit.png' alt='No se encuentra Imagen' id='TC'>
                            </div>
                        </div>
                        <div class='body_TC_NomyNum_Col2'>
                            <span class='TLabel'>
                                Tarjetas de D&eacute;dito 
                            </span>
                            <div class='body_TC_NomyNum_Col2_IMG'>
                                <img src='Debit.png' alt='No se encuentra Imagen' id='TD'>
                            </div>
                        </div>
                    </div>
                    <div class='body_TC_NomyNum'>
                        <div class='body_TC_FexyCS_Col1'>
                            <span class='Letra'>
                                Nombre de titular: <span class='aster'>*</span>
                            </span>
                            <div class='body_TC_NomyNum_R'>
                                <input type='text' name='Name' id='txtNom' onchange='this.style.color='black'' placeholder='Como aparece en la Tarjeta' required>
                            </div>
                        </div>
                        <div class='body_TC_FexyCS_Col2'>
                                <span class='Letra'>
                                    N&uacute;mero de tarjeta: <span class='aster'>*</span>
                                </span>
                                <div class='body_TC_NomyNum_R'>
                                    <input type='text' name='NoTjt' id='txtNum' maxlength='16'  onchange='this.style.color='black'' required>
                                </div>
                        </div>
                    </div>
                    <div class='body_TC_FexyCS'>
                        <div class='body_TC_FexyCS_Col1'>
                            <span class='Letra'>
                                Fecha de expiraci&oacute;n: <span class='aster'>*</span>
                            </span>
                            <div class='body_TC_FexyCS_Col1_MA'>
                                <select name='Mes' required class='M_A' onchange='this.style.color='black''>
                                    <option>MM</option>
                                    <option value='01'>01</option>
                                    <option value='02'>02</option>
                                    <option value='03'>03</option>
                                    <option value='04'>04</option>
                                    <option value='05'>05</option>
                                    <option value='06'>06</option>
                                    <option value='07'>07</option>
                                    <option value='08'>08</option>
                                    <option value='09'>09</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                </select>
                                <select name='An' required class='M_A' onchange='this.style.color='black''>
                                    <option>AA</option>
                                    <option value='21'>21</option>
                                    <option value='22'>22</option>
                                    <option value='23'>23</option>
                                    <option value='24'>24</option>
                                    <option value='25'>25</option>
                                    <option value='26'>26</option>
                                    <option value='27'>27</option>
                                    <option value='28'>28</option>
                                    <option value='29'>29</option>
                                    <option value='30'>30</option>
                                    <option value='31'>31</option>
                                    <option value='32'>32</option>
                                </select>
                            </div>
                        </div>
                        <div class='body_TC_FexyCS_Col2_'>
                            <span class='Letra'>
                                C&oacute;digo de seguridad: <span class='aster'>*</span>
                            </span>
                            <div class='body_TC_NomyNum_R'>
                                <input type='text' name='CS' id='cs' maxlength='3' onchange='this.style.color='black'' placeholder='3 D&iacute;gitos' required>
                                    <img src='CD.png' alt='Imagen no disponible' id='Cv_1'>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="Pizzas.css">

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    

</head>
<body style="background: rgb(220, 132, 29)">
    <?php
        session_start();
        if($_SESSION['EfetuadoLogin'] == "No"){
            $_SESSION['MensagemRequerLogin'] = "É necessário realizar o login para continuar";
            header('Location: loginScreen.php');
        }
    ?>

        <div class="container">
            <div class = row> 

                <div class="col-md-3" style = "margin-top: 90px; position: absolute;" >
                   
                    <button class = "btnMenu"></button>
                    
                    <div class = "menuLista">
                        <button class = "btnCancelaMenu"></button>
                        <a class="buttonA" href = "FacaSeuPedido.php" style = "left: 38px; top: 48px;" >Faça seu pedido</a>
                        <a class="buttonA" href = "Cardapio.php" style = "left: 38px; top: 96px;" >Cardápio</a>
                        <a class="buttonA" href = "Promocoes.php" style = "left: 38px; top: 146px;" >Promoções</a>
                        <a class="buttonA" href = "Contato.php" style = "left: 38px; top: 197px;" >Contato</a>
                    </div>

                </div>

                <div class="col-md-7" style = "margin-left: 235px; margin-top: 90px; position: absolute;" >
                    <div class = "titleRectangle"></div>
                    
                    <div class = "hoveringArea">
                        <div class = "btnPortuguesa">
                            <img  src = "Imagens/Pizzas/PizzaPortuguesa.png"  width="337px" height="225px" style = "top: 100px; left: 0px;">
                            
                            <div class = "textoHover" style = "top: 297px; left: 0px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>
                
                    <div class = "hoveringArea">
                        <div class = "btnQuatroQueijos">
                            <img  src = "Imagens/Pizzas/PizzaQuatroQueijos.png"  width="337px" height="225px" style = "top: 100px; left: 343px;">
                            
                            <div class = "textoHover" style = "top: 297px; left: 343px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>

                    <div class = "hoveringArea">
                        <div class = "btnMarguerita">
                            <img  src = "Imagens/Pizzas/PizzaMarguerita.jpg"  width="337px" height="225px" style = "top: 500px; left: 0px;">

                            <div class = "textoHover" style = "top: 697px; left: 0px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>

                    <div class = "hoveringArea">
                        <div class = "btnCalabresa">
                            <img  src = "Imagens/Pizzas/PizzaCalabresa.jpg"  width="337px" height="225px" style = "top: 500px; left: 343px;">
                            
                            <div class = "textoHover" style = "top: 697px; left: 343px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class = "hoveringArea">
                        <div class = "btnPeperoni">
                            <img  src = "Imagens/Pizzas/PizzaPepperoni.png"  width="337px" height="225px" style = "top: 900px; left: 0px;">

                            <div class = "textoHover" style = "top: 1097px; left: 0px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div> 
                    </div>

                    <div class = "hoveringArea">
                        <div class = "btnFrango">
                            <img  src = "Imagens/Pizzas/PizzaFrango.jpg" width="337px" height="225px" style = "top: 900px; left: 343px;">

                            <div class = "textoHover" style = "top: 1097px; left: 343px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>

                    <div class = "hoveringArea">
                        <div class = "btnBacon">
                            <img  src = "Imagens/Pizzas/PizzaBacon.jpg" width="337px" height="225px" style = "top: 1300px; left: 0px;">

                            <div class = "textoHover" style = "top: 1497px; left: 0px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>

                    <div class = "hoveringArea">
                        <div class = "btnAtum">
                            <img  src = "Imagens/Pizzas/PizzaAtum.jpg" width="337px" height="225px" style = "top: 1300px; left: 343px;">

                            <div class = "textoHover" style = "top: 1497px; left: 343px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>

                    <div class = "hoveringArea">
                        <div class = "btnPalmito">
                            <img  src = "Imagens/Pizzas/PizzaPalmito.jpeg" width="337px" height="225px" style = "top: 1700px; left: 0px;">

                            <div class = "textoHover" style = "top: 1897px; left: 0px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>

                    <div class = "hoveringArea">
                        <div class = "btnMuçarela">
                            <img  src = "Imagens/Pizzas/PizzaMuçarela.jpg" width="337px" height="225px" style = "top: 1700px; left: 343px;">
                            
                            <div class = "textoHover" style = "top: 1897px; left: 343px;">
                                <a style = "  position: absolute; left:114px;">COMPRE JÁ!</a>
                            </div>
                        </div>
                    </div>

                    <div class = "Titulo">
                        <img  src = "Imagens/Pizzas/Titulo.png" style = "top: 17px; left: 274px;">
                    </div>

                    <div style = "position: absolute; top: 334px; left: 11px; width: 337px">
                        <img style = "left: 90px" src = "Imagens/Pizzas/nomePizzaPortuguesa.png" >
                        <br>
                        <p class = "texto">Muçarela, Presunto, Pimenta, Pimentão, Cebola, Alho e Azeitona</p>
                        <div class = "Retangulo">R$ 40,00</div>
                    </div>

                    <div style = "position: absolute; top: 334px; left: 354px; width: 337px">
                        <img style = "left: 82px" src = "Imagens/Pizzas/nomePizzaQuatroQueijos.png" >
                        <br>
                        <p class = "texto">Muçarela, Provolone, Parmesão e Requeijão</p>
                        <div class = "Retangulo">R$ 30,00</div>
                    </div>

                    <div style = "position: absolute; top: 734px; left: 11px; width: 337px">
                        <img style = "left: 90px" src = "Imagens/Pizzas/nomePizzaMarguerita.png" >
                        <br>
                        <p class = "texto">Muçarela, Tomate e Manjericão</p>
                        <div class = "Retangulo">R$ 36,00</div>
                    </div>

                    <div style = "position: absolute; top: 734px; left: 354px; width: 337px">
                        <img style = "left: 90px" src = "Imagens/Pizzas/nomePizzaCalabresa.png" >
                        <br>
                        <p class = "texto">Muçarela, Calabresa e Molho de Tomate</p>
                        <div class = "Retangulo">R$ 30,00</div>
                    </div>

                    <div style = "position: absolute; top: 1134px; left: 11px; width: 337px">
                        <img style = "left: 95px" src = "Imagens/Pizzas/nomePizzaPepperoni.png" >
                        <br>
                        <p class = "texto">Pepperoni, Muçarela e Molho de Tomate</p>
                        <div class = "Retangulo">R$ 40,00</div>
                    </div>

                    <div style = "position: absolute; top: 1134px; left: 354px; width: 337px">
                        <img style = "left: 47px" src = "Imagens/Pizzas/nomePizzaFrango.png" >
                        <br>
                        <p class = "texto">Frango, Catupiry e Azeitona</p>
                        <div class = "Retangulo">R$ 36,00</div>
                    </div>

                    <div style = "position: absolute; top: 1534px; left: 11px; width: 337px">
                        <img style = "left: 107px" src = "Imagens/Pizzas/nomePizzaBacon.png" >
                        <br>
                        <p class = "texto">Bacon, Muçarela, Tomate e Cebola</p>
                        <div class = "Retangulo">R$ 40,00</div>
                    </div>

                    <div style = "position: absolute; top: 1534px; left: 354px; width: 337px">
                        <img style = "left: 109px" src = "Imagens/Pizzas/nomePizzaAtum.png" >
                        <br>
                        <p class = "texto">Atum, Cebola, Azeitona e Molho de Tomate</p>
                        <div class = "Retangulo">R$ 36,00</div>
                    </div>
                    
                    <div style = "position: absolute; top: 1934px; left: 11px; width: 337px">
                        <img style = "left: 102px" src = "Imagens/Pizzas/nomePizzaPalmito.png" >
                        <br>
                        <p class = "texto">Palmito, Muçarela e Orégano</p>
                        <div class = "Retangulo">R$ 36,00</div>
                    </div>

                    <div style = "position: absolute; top: 1934px; left: 354px; width: 337px">
                        <img style = "left: 92px" src = "Imagens/Pizzas/nomePizzaMuçarela.png" >
                        <br>
                        <p class = "texto">Muçarela, Tomate e Orégano</p>
                        <div class = "Retangulo">R$ 30,00</div>
                    </div>

                    <div class = "titleRectangle" style = "position: absolute; top: 2070px; height: 150px;">
                        <a class="btnBase" href = "Massas.php" style = "left: 21px; top: 27px;" >MASSAS</a>
                        <a class="btnBase" href = "Saladas.php" style = "left: 241px; top: 27px;" >SALADAS</a>
                        <a class="btnBase" href = "Lanches.php" style = "left: 461px; top: 27px;" >LANCHES</a>
                        <a class="btnBase" href = "Bebidas.php" style = "left: 128px; top: 85px;" >BEBIDAS</a>
                        <a class="btnBase" href = "Sobremesas.php" style = "left: 349px; top: 85px;" >SOBREMESAS</a>
                    
                    </div>                
                    

                    <div class = "MensagemPortuguesa">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Portuguesa</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Portuguesa">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                                <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemQuatroQueijos">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center> 
                                        Qual a Quantidade desejada de <b>Pizzas de Quatro Queijos</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Quatro Queijos">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                            <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                                <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemMarguerita">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Marguerita</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Marguerita">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                            <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                                <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemCalabresa">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Calabresa</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Calabresa">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                                <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemPeperoni">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 500px; height: 193px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Peperoni</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Peperoni">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                               <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemFrango">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 525px; height: 190px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Frango com Catupiry</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Frango com Catupiry">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                               <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemBacon">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 525px; height: 190px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Bacon</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Bacon">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                               <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemAtum">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 525px; height: 190px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Atum</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Atum">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                               <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemPalmito">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 525px; height: 190px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Palmito</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Palmito">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                               <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                    <div class = "MensagemMuçarela">
                        <div class='container p-3 my-3 bg-dark text-white' style = "width: 525px; height: 190px; position: absolute; left: 93px; border-radius: 20px;">
                            <form action="AtualizaFood.php" method="post">
                                <div class="form-group">
                                    <p align = center>
                                        Qual a Quantidade desejada de <b>Pizzas de Muçarela</b> ?
                                    </p><br>
                                        <input type = "hidden" name = "pizza" value = "Pizza de Muçarela">
                                        <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                    <p align = center>
                                        <input class="form-control" type="number" name="qtd" placeholder="1-9" min = "1" max = "9" style='border-radius: 30px; width: 70px;' required>
                                    </p>
                                    <table width = 100%>
                                        <tr>
                                            <td>
                                                <input class="btn btn-block btn-success" type="submit" value="Comprar" name="comprar">
                                            </td>
                                            <td align = right>
                                               <div class = "btncancelar">
                                                    <button type ="button" class="btn btn-danger"> Cancelar</button>
                                                <div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-2" style = "margin-top: 90px; margin-left: 935px; position: absolute;" >
                    <div class="menuEsquerdo">
                        <form action="AtualizaFood.php" method="post">
                            <div class="form-group">
                                <input type = "hidden" name = "telaAnterior" value = "Pizzas">
                                <input class="btn btn-light" type="submit" value="Seguir para o caixa" name="Caixa" style = "text-align: left; width: 214px;"> <img  src = "Imagens/Comum/Carrinho.png"  width="42px" height="35px" style = "top: 2px; left: 160px;">
                            </div>  
                        </form>

                    </div>
                    <div class="menuEsquerdo" style = "top: 85%; ">
                        <a class="btn btn-light" href = "telaInicial.php" style = "width: 100px; left:120px;"> Voltar </a>
                    </div>
                </div>

            </div>


        </div>
        

    <script>

    $("div.menuLista").hide();

    $("div.MensagemPortuguesa").hide();
    $("div.MensagemQuatroQueijos").hide();
    $("div.MensagemMarguerita").hide();
    $("div.MensagemCalabresa").hide();
    $("div.MensagemPeperoni").hide();
    $("div.MensagemFrango").hide();
    $("div.MensagemBacon").hide();
    $("div.MensagemAtum").hide();
    $("div.MensagemPalmito").hide();
    $("div.MensagemMuçarela").hide();
    

        $("button.btnMenu").click(function() {
            $("div.menuLista").fadeIn('slow').animate
            ({}, (1500));
        });

        $("button.btnCancelaMenu").click(function(){
            $("div.menuLista").hide(1500);
        });

    
        $("div.btnPortuguesa").click(function() {
            $("div.MensagemPortuguesa").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnQuatroQueijos").click(function() {
            $("div.MensagemQuatroQueijos").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnMarguerita").click(function() {
            $("div.MensagemMarguerita").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnCalabresa").click(function() {
            $("div.MensagemCalabresa").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnPeperoni").click(function() {
            $("div.MensagemPeperoni").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnFrango").click(function() {
            $("div.MensagemFrango").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnBacon").click(function() {
            $("div.MensagemBacon").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnAtum").click(function() {
            $("div.MensagemAtum").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnPalmito").click(function() {
            $("div.MensagemPalmito").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemMuçarela").hide();
        });

        $("div.btnMuçarela").click(function() {
            $("div.MensagemMuçarela").fadeIn('slow').animate
            ({}, (1500));
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
        });



        $("div.btncancelar").click(function() {
            $("div.MensagemPortuguesa").hide();
            $("div.MensagemQuatroQueijos").hide();
            $("div.MensagemMarguerita").hide();
            $("div.MensagemCalabresa").hide();
            $("div.MensagemPeperoni").hide();
            $("div.MensagemFrango").hide();
            $("div.MensagemBacon").hide();
            $("div.MensagemAtum").hide();
            $("div.MensagemPalmito").hide();
            $("div.MensagemMuçarela").hide();
        });

</script>
        
    
</body>
</html>
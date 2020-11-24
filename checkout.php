<?php
session_start();
if (!isset($_SESSION['carrito'])) {
  header('Location: ./index.php');
}
$arreglo = $_SESSION['carrito'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?>
    <form action="./thankyou.php" method="POST">
      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="border p-4 rounded" role="alert">
                ¿Ya eres cliente? <a href="#">Click aquí</a> para iniciar sesion
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
              <h2 class="h3 mb-3 text-black">Detalles de Facturación</h2>
              <div class="p-3 p-lg-5 border">
                <div class="form-group">
                  <label for="c_country" class="text-black">País <span class="text-danger">*</span></label>
                  <select id="c_country" class="form-control" name="country">
                    <option value="1">Seleccione un país</option>
                    <option value="2">España</option>
                    <option value="3">Alemania</option>
                    <option value="4">Paises Bajos</option>
                    <option value="5">Portugal</option>
                    <option value="6">Suecia</option>
                    <option value="7">Bélgica</option>
                    <option value="8">Francia</option>
                    <option value="9">Finlandia</option>
                  </select>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_companyname" class="text-black">Nombre de la empresa </label>
                    <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="c_address">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_state_country" class="text-black">País / Estado <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                  </div>
                  <div class="col-md-6">
                    <label for="c_postal_zip" class="text-black">Código postal <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip" placeholder="29000">
                  </div>
                </div>

                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="c_email_address" class="text-black">Correo electrónico <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email_address" name="c_email_address">
                  </div>
                  <div class="col-md-6">
                    <label for="c_phone" class="text-black">Teléfono <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_phone" name="c_phone">
                  </div>
                </div>

                <div class="form-group">
                  <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> ¿Aún no eres cliente?</label>
                  <div class="collapse" id="create_an_account">
                    <div class="py-2">
                      <p class="mb-3">Cree una cuenta ingresando la información anterior y su nueva contraseña a continuación. Si ya eres cliente, inicie sesión en la parte superior de la página.</p>
                      <div class="form-group">
                        <label for="c_account_password" class="text-black">Contraseña</label>
                        <input type="password" class="form-control" id="c_account_password" name="c_account_password">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
                  <div class="collapse" id="ship_different_address">
                    <div class="py-2">

                      <div class="form-group">
                        <label for="c_diff_country" class="text-black">País <span class="text-danger">*</span></label>
                        <select id="c_diff_country" class="form-control">
                          <option value="1">Seleccione un país</option>
                          <option value="2">España</option>
                          <option value="3">Alemania</option>
                          <option value="4">Paises Bajos</option>
                          <option value="5">Portugal</option>
                          <option value="6">Suecia</option>
                          <option value="7">Bélgica</option>
                          <option value="8">Francia</option>
                          <option value="9">Finlandia</option>
                        </select>
                      </div>


                      <div class="form-group row">
                        <div class="col-md-6">
                          <label for="c_diff_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                        </div>
                        <div class="col-md-6">
                          <label for="c_diff_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-12">
                          <label for="c_diff_companyname" class="text-black">Nombre de la empresa </label>
                          <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-12">
                          <label for="c_diff_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_address" name="c_diff_address">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-6">
                          <label for="c_diff_state_country" class="text-black">País / Estado <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                        </div>
                        <div class="col-md-6">
                          <label for="c_diff_postal_zip" class="text-black">Código Postal <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip" placeholder="29000">
                        </div>
                      </div>

                      <div class="form-group row mb-5">
                        <div class="col-md-6">
                          <label for="c_diff_email_address" class="text-black">Correo electrónico <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                        </div>
                        <div class="col-md-6">
                          <label for="c_diff_phone" class="text-black">Teléfono <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone">
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <label for="c_order_notes" class="text-black">Nota de pedido</label>
                  <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="El porterillo no funciona, la clave de acceso al portal es 0000..."></textarea>
                </div>

              </div>
            </div>
            <div class="col-md-6">

              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="h3 mb-3 text-black">Cupón de Descuento</h2>
                  <div class="p-3 p-lg-5 border">
                  <div class="input-group w-75" id="datosCupon" style="display: none;">
                      <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Cupón válido</h4>
                        <p id="textoCupon"></p>
                        <p id="textoCupon2"></p>
                      </div>
                    </div>
                    <div id="msg_error" style="display: none;" class="alert alert-danger" role="alert">
                      Cupón no válido
                    </div>
                    <label id="pEliminar" for="c_code2" class="text-black mb-3">Introduzca aquí su cupón de descuento, si dispone de alguno</label>
                    <div class="input-group w-75" id="formCupon">
                      <input type="text" class="form-control" id="c_code2" placeholder="Código del cupón" aria-label="Coupon Code" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Aplicar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="h3 mb-3 text-black">Your Order</h2>
                  <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-5">
                      <thead>
                        <th>Product</th>
                        <th>Unidad</th>
                        <th>Total</th>
                      </thead>
                      <tbody>

                        <?php

                        // Variables para "Total del carrito"
                        $subtotal = 0;
                        $envio = 5.90;
                        $iva = 0;
                        $total = 0;


                        // Hacemos dinámica la tabla con el precio total en la página del "Checkout"
                        $total = 0;
                        for ($i = 0; $i < count($arreglo); $i++) {
                          //$total = $total + ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
                          $singlePrice = $arreglo[$i]['Precio'];
                          $totalProduct = $arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'];

                          // Calcular "Total del carrito"
                          $subtotal = $subtotal + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
                          $iva = $subtotal * 0.21;
                          $total = ($subtotal) + ($envio) + ($iva);


                          // Formato para que todos los precios tengan dos decimales
                          $format_subtotal = number_format($subtotal, 2);
                          $format_envio = number_format($envio, 2);
                          $format_iva = number_format($iva, 2);
                          $format_total = number_format($total, 2);

                        ?>
                          <tr>
                            <td><?php echo $arreglo[$i]['Nombre']; ?><strong class="mx-2">x</strong><?php echo $arreglo[$i]['Cantidad'] ?></td>
                            <td><?php echo number_format($singlePrice, 2); ?> €</td>
                            <td><?php echo number_format($totalProduct, 2); ?> €</td>
                          </tr>

                        <?php } ?>

                        <!-- Subtotal -->
                        <tr style="border-top: 1.5px solid black;">
                          <td>Subtotal</td>
                          <td></td>
                          <td><?php echo $format_subtotal ?> €</td>
                        </tr>
                        <!-- IVA -->
                        <tr>
                          <td>IVA 21%</td>
                          <td></td>
                          <td><?php echo $format_iva ?> €</td>
                        </tr>
                        <!-- Envio -->
                        <tr>
                          <td>Envío GLS (24h)</td>
                          <td></td>
                          <td><?php echo $format_envio ?> €</td>
                        </tr>
                        <!-- Total -->
                        <tr style="font-weight: 600">
                          <td>Total</td>
                          <td></td>
                          <td><?php echo $format_total ?> €</td>
                        </tr>


                      </tbody>
                    </table>

                    <div class="border p-3 mb-3">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                      <div class="collapse" id="collapsebank">
                        <div class="py-2">
                          <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div>

                    <div class="border p-3 mb-3">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                      <div class="collapse" id="collapsecheque">
                        <div class="py-2">
                          <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div>

                    <div class="border p-3 mb-5">
                      <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                      <div class="collapse" id="collapsepaypal">
                        <div class="py-2">
                          <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Place Order</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
    </form>
    <?php include("./layouts/footer.php"); ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  <script>
    // Script para validar los cupones, mediante una peticion ajax.
    $(document).ready(function() {
      $("#button-addon2").click(function() {
        var codigo = $("#c_code2").val();
        $.ajax({
          url: "./php/validarCodigo.php",
          data: {
            codigo: codigo
          },
          method: 'POST'
        }).done(function(respuesta) {
          // Si cumple la condición muestra el alert de bootstrap
          if (respuesta == "cupon no valido" || respuesta == "error") {
            $("#msg_error").show();
            //alert('respuesta');
          }
          else {
            var arreglo = JSON.parse(respuesta);
            if (arreglo.tipo == "moneda"){
              $("#textoCupon").text("Su cupón es de: "+arreglo.valor+" €");
              $("#textoCupon2").text("Válido hasta el : "+arreglo.fecha_vencimiento);
            }
            else {
              $("#textoCupon").text("Su cupón es del: "+arreglo.valor+" %");
              $("#textoCupon2").text("Válido hasta el : "+arreglo.fecha_vencimiento);
            }
            $("#formCupon").hide();
            $("#pEliminar").hide();
            $("#datosCupon").show();
          }
        })
      });
      // Cuando se escribe de nuevo se oculta el alert-danger de bootstrap
      $("#c_code2").keyup(function() {
        $("#msg_error").hide();
      });
    });

    /*$(document).ready(function(){
      $("#button-addon2").click(function(){
        var codigo = $("#c_code").val();
        $.ajax({
          url: '.php/validarCodigo.php',
          data:{
            codigo:codigo
          },
          method: 'POST'
        }).done(function(respuesta){
          alert('respuesta');
        })
      });
    });*/
  </script>

</body>

</html>
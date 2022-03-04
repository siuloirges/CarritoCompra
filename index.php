<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="box.css">
    <link rel="stylesheet" href="factura.css">

</head>
<body>

    <div class="padre">

            <div class="form window">

                <form action="get">
                    
                    <div class="campo">
                        <label for="">Nombre</label>
                        <input type="text" id="nombre" required></input>
                    </div>

                    <div class="campo">
                        <label for="">Precio</label>
                        <input type="number" id="precio" required></input>
                    </div>

                    <div class="campo">
                        <label for="">Cantidad</label>
                        <input type="number" id="cantidad" required></input>
                    </div>

                    <div class="campo">
                        <label for="">Iva %</label>
                        <input type="number" step="any" id="iva" required></input>
                    </div>

                    <div class="campo">
                        <label for="">Descuento%</label>
                        <input type="text" step="any" id="descuento" required></input>
                    </div>
    
                    <div class="row">
                        <!-- <input type="reset" value="Limpiar" class="botonEnviar"></input> -->
                        <input id="send" type="button" value="Añadir" class="buton" onclick="annadirAlCarrito()"></input>
                    </div>

                    <div class="row">
                        <input id="send" type="button" value="Calcular Total" class="buton" onclick="calcularFactura()"></input>
                    </div>

                    

                </form>


            </div>


            <div class="cart window" id="cart">

   
                 
                   

            </div>


            <div class="factura window" id="factura">

            </div>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/index.js"></script>
    
</body>
</html>
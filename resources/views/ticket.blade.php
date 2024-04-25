<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/ticket.blade.css">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <h1>Venta de Tickets de Parrillada</h1>

    <section id="inicio">
        <h2>Bienvenido a nuestro evento de Parrillada</h2>
        <p>!Sumérgete en una experiencia gastronómica inolvidable con nuestra parrillada! 
            Disfruta de jugosas carnes a la parrilla, acompañadas de sabrosas guarniciones y aderezos 
            caseros que deleitarán tu paladar.</p>
    </section>
    </section>
    <div>
        <table>
            <div class="cliente">
                <h2></h2>
                <form action="#" method="post">
                    <div>
                        <label for="nombre">Nombre:</label><br>
                        <input type="text" id="nombre" name="nombre" required><br>
                    </div>
                    <div>
                        <label for="direccion">Dirección:</label><br>
                        <input type="text" id="direccion" name="direccion" required><br>
                    </div>
                    <div>
                        <label for="tickets">Cantidad de Tickets:</label><br>
                        <input type="number" id="tickets" name="tickets" required><br>
                    </div>
                    <div>
                        <p>Parte:</p>
                        <input type="radio" id="pecho" name="carne" value="pecho" required>
                        <label for="pecho">Pecho</label><br>
                        <input type="radio" id="pierna" name="carne" value="pierna" required>
                        <label for="pierna">Pierna</label><br>
                        <input type="radio" id="crudo" name="carne" value="crudo" required>
                        <label for="crudo">crudo</label><br>
                    </div><br>
                    <div>
                        <p>Método de Pago:</p>
                        <input type="radio" id="efectivo" name="pago" value="efectivo" required>
                        <label for="efectivo">Efectivo</label><br>
                        <input type="radio" id="yape" name="pago" value="yape" required>
                        <label for="yape">YAPE</label><br>
                        <input type="radio" id="plin" name="pago" value="plin" required>
                        <label for="plin">PLIN</label><br>
                        <input type="radio" id="transferencia" name="pago" value="transferencia" required>
                        <label for="transferencia">TRANSPARENCIA</label><br>
                    </div>
                    <br>
                    <input type="submit" value="Enviar">
                </form>
                <div class="bebidas">
                    <h2>Bebidas</h2>
                    <li><img src="img/coca cola.png" whidth="200" height="60"> COCA COLA</li>
                    <li><img src="img/guarana.png" whidth="200" height="60"> GUARANÁ</li>
                    <li><img src="img/inka-kola.png" whidth="200" height="60"> INKA KOLA</li>
                    <li><img src="img/agua.png" whidth="200" height="60"> AGUA</li>
                </div>
            </div>
        </table>
    </div>
    <footer id="contacto">
        <div class="contactos">
            <h2>Contactos</h2>
            <ul>
                <li><img src="img/img7.png"> Email: info@parrillada.com</li>
                <li><img src="img/img8.png"> Teléfono: 945281624</li>
                <li><img src="img/img9.png"> Whatsapp: +51 965724576</li>
            </ul>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
    
    
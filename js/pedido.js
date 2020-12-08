window.onload = function() {
    var ped_sec = document.getElementById("pedidos");
    var numero = document.getElementById("numero");
    var estado = document.getElementById("estado");
    var producto = document.getElementById("producto");
    var cantidad = document.getElementById("cantidad");
    var precio = document.getElementById("precio");
    var total = document.getElementById("total");
    var fecha = document.getElementById("fecha");
    var horario = document.getElementById("horario");
    var direccion = document.getElementById("direccion");
    var receptor = document.getElementById("receptor");
    var mensaje = document.getElementById("mensaje");
    var imagen = document.getElementById("imagen");

    CargarProductos();

    function CargarProductos() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                leerJSON(this);
            }
        }

        xhttp.open("GET", "data/pedidos.txt", true);
        xhttp.send();
    }

    function leerJSON(respuestaJSON) {
        var data = JSON.parse(respuestaJSON.responseText);
        data = data.pedidos;

        
        var num = numero.innerHTML;
        var existe = false;

        for(var i in data) {

            if(data[i].numero == num){
                existe = true;
                estado.innerHTML = data[i].estado;
                producto.innerHTML = data[i].producto;
                cantidad.innerHTML = data[i].cantidad + " unidad";
                precio.innerHTML = data[i].precio;
                total.innerHTML = data[i].total;
                fecha.innerHTML = data[i].fecha_entrega;
                horario.innerHTML = data[i].horario;
                direccion.innerHTML = data[i].direccion;
                receptor.innerHTML = data[i].receptor;
                mensaje.innerHTML = data[i].mensaje;
                imagen.src = data[i].imagen;
            }
        }
        
        if(!existe) {
            var elemento = `
                <div class="row justify-content-center bg-pink">
                    <div>
                        <h2 class="my-2">No se encontraron coincidencias</h2>
                    </div>
                </div>`
            
            ped_sec.innerHTML += elemento;
        }
    }
}
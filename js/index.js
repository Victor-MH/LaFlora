console.log("Hola mundo");

window.onload = function() {
    var btn_buscar = document.getElementById("btn_buscar");
    btn_buscar.addEventListener("click", CargarProductos);

    var prod_sec = document.getElementById("productos");
    console.log(prod_sec);

    var input_ocasion = document.getElementById("ocasion");

    function CargarProductos() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                leerJSON(this);
            }
        }

        xhttp.open("GET", "data/productos.txt", true);
        xhttp.send();
    }

    function leerJSON(respuestaJSON) {
        var data = JSON.parse(respuestaJSON.responseText);
        data = data.productos;

        var ocasion = input_ocasion.value.toLowerCase();

        prod_sec.innerHTML = "";
        
        for(var i in data) {

            if(data[i].ocasion == ocasion){
                
                var elemento = `
                    <div class="col-sm-6 col-lg-3  my-2 bg-pink-light" >
                        <div class="card-body">
                            <img class="card-img-top img-fluid p-1" width="100%" src="${data[i].imagen}" alt="">
                            <div>
                                <h3 class="card-title">${data[i].nombre}</h3>
                                <h5>${data[i].precio}</h5>
                                <a href="#" class="btn bg-beige text-purple">Comprar</a>
                            </div>
                        </div>
                    </div>`;

                prod_sec.innerHTML += elemento;
            }
        }
        
        if(prod_sec.innerHTML === "") {
            var elemento = `
                <div class="my-4">
                    <h2>No se encontraron coincidencias</h2>
                </div>`;
            prod_sec.className = "row mx-auto w-85"
            prod_sec.innerHTML += elemento;
        }
    }
}
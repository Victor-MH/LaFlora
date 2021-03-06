window.onload = function() {
    var banderainicial = true;

    var btn_buscar = document.getElementById("btn_buscar");
    btn_buscar.addEventListener("click", CargarProductos);

    var prod_sec = document.getElementById("productos");

    var input_ocasion = document.getElementById("ocasion");

    function CargarProductos() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                if(banderainicial){
                    prodInicial(this);
                    banderainicial = false;
                }
                else{
                    leerJSON(this);
                }
            }
        }

        xhttp.open("GET", "data/productos.txt", true);
        xhttp.send();
    }

    function leerJSON(respuestaJSON) {
        var data = JSON.parse(respuestaJSON.responseText);
        data = data.productos;

        var title = document.getElementById("prod_title");

        var ocasion = input_ocasion.value;
        ocasion = ocasion.toLowerCase();

        prod_sec.innerHTML = "";
        
        for(var i in data) {

            if(data[i].ocasion == ocasion){
                
                var titulo = ocasion[0].toUpperCase() + ocasion.slice(1);
                title.innerHTML = titulo;

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
                <div class="my-4 text-center w-75 mx-auto">
                    <h2>No se encontraron coincidencias</h2>
                </div>`;
            prod_sec.className = "row"
            prod_sec.innerHTML += elemento;

            title.innerHTML = "";
        }
    }

    function prodInicial(respuestaJSON) {

        var data = JSON.parse(respuestaJSON.responseText);
        data = data.productos;
        const datasize = data.length;

        prod_sec.innerHTML = "";

        var randProd = [];

        for(var i = 0; i < 4; i++) {
            var n, exists;

            do {
                n = randInt(datasize);
                exists = randProd.includes(n);
            }while(exists);

            randProd.push(n);
        }

        for(var i in randProd) {

            var elemento = `
                <div class="col-sm-6 col-lg-3  my-2 bg-pink-light" >
                    <div class="card-body">
                        <img class="card-img-top img-fluid p-1" width="100%" src="${data[randProd[i]].imagen}" alt="">
                        <div>
                            <h3 class="card-title">${data[randProd[i]].nombre}</h3>
                            <h5>${data[randProd[i]].precio}</h5>
                            <a href="#" class="btn bg-beige text-purple">Comprar</a>
                        </div>
                    </div>
                </div>`;

            prod_sec.innerHTML += elemento;
        }
    }

    const randInt = max => Math.floor(Math.random() * Math.floor(max));

    CargarProductos();
}
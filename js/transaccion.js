const btnEnviar = document.getElementById("terminar")

cargar();

function cargar() {
    console.log("cargando...")
    btnEnviar && btnEnviar.addEventListener("click", (e)=> terminarCompra(e))
}



async function postData(url = '', data = {}) {
  // Opciones por defecto estan marcadas con un *
  const response = await fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  });
  return response.text(); // parses JSON response into native JavaScript objects
}

async function terminarCompra(e) {
    e.preventDefault()
    const productos = JSON.parse(localStorage.getItem("productos"));
    console.log("comprando")
    if (productos.length > 0) { 

        const response = await postData("../models/comprar.php", {
            productos: productos,
            total: productos.reduce((prev, curr) => prev + ((curr.precio / 1) * curr.cantidad), 0)
        });
        console.log(response)
       
    }
}
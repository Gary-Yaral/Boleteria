<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/results.css">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<body>
	<div class="opciones">
        <a href="formulario boleto.php"><input type="button" value= "GENERAR"></a>
        <a href="buscarboleto.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGboleto.php"><input type="button" value= "REGISTROS"></a>
	</div>
	<!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Nuevo Boleto</h1>
    <div class="form-buscar" id='formulario'>
        <label for="">Destinos</label>
        <select name="horario" id="horario">
            <option value="empty">Seleccione la ruta</option>
<?php


//obtengo la hora actual

date_default_timezone_set('America/Guayaquil');
$fecha_actual = date('Y').'-'.date('m').'-'.date('d');
$hora_actual = strftime("%H:%M");

// Traemos las rutas disponibles para la hora actual
$con = mysqli_connect("localhost","root","","boletos"); 
$table = "horario"; 
$sql = "SELECT * FROM $table WHERE hora_salida >= '$hora_actual' ORDER BY hora_salida";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

// consultamos el destino de las rutas disponibles
$table1 = "ruta"; 
$sql1 = "SELECT * FROM $table1";
$resultado1 = $con->query($sql1);
$filas1 = mysqli_num_rows($resultado1); 

$r_ids= array();

$j = 0;
while ($fila = $resultado->fetch_assoc()){ 
    $r_ids[$j][0] = $fila["id_ruta"];
    $r_ids[$j][1] = $fila["id_horario"];
    $r_ids[$j][2] = $fila["hora_salida"];
    $j++; 
}

while ($fila1 = $resultado1->fetch_assoc()){ 
    $existe = false;   
    $ruta1=$fila1["id_ruta"]; 
    $origen = $fila1["origen"]; 
    $destino = $fila1["destino"]; 
    for($m = 0; $m < count($r_ids); $m++) {
        if($ruta1 == $r_ids[$m][0]){
?>
     <option value="<?php echo $r_ids[$m][1] ?>"><?php echo $origen.'-'.$destino.' - '.$r_ids[$m][2] ?></option>
<?php
        }
    }
}

 ?>

    </select>
    <aside id="mensaje" class="mensaje-agotado hidden"></aside>
    <form class="form-boleto hidden" action="">
        <section>
            <span class="boleto-text">Asiento n°: </span>
            <span for="" id="asiento"></span>
        </section>
        <section>
            <span class="boleto-text">Nº de Bus: </span>
            <span for="" id="bus"></span>
        </section>
        <section>
            <span class="boleto-text">Destino: </span>
            <span for="" id="destino"></span>
        </section>
        <section>
            <span class="boleto-text">Valor: </span>
            <span>$</span><span for="" id="valor"></span>
        </section>
        <section>
            <span class="boleto-text">Hora Salida: </span>
            <span for="" id="salida"></span>
        </section>
        <section>
            <select name="pasajero" id="pasajero">
                <option value="1">Consumidor Final</option>
                <option value="2">Consumidor Especial</option>
            </select>
        </section>
        <section id="cliente" class="hidden">     
            <input type="hidden" name="id_horario" id="id_horario">     
            <span class="boleto-text" for="cedula">Cèdula/R.U.C</span>
            <input type="text" name="cedula" id="cedula" value="">     
            <span class="boleto-text" for="apellidos">Apellidos: </span>
            <input type="text" name="apellidos" id="apellidos" value="">
            <span class="boleto-text" for="nombres">Nombres: </span>
            <input type="text" name="nombres" id="nombres" value="">
            <span class="boleto-text" for="telefono">Teléfono: </span>
            <input type="text" name="telefono" id="telefono" value="">
            <span class="boleto-text" for="email">Email: </span>
            <input type="text" name="email" id="email" value="">
        </section>
        <input type="submit" value="Generar">
    </form>
</div>



<script>
    const form = document.querySelector('.form-boleto');
    const horario = document.querySelector('#horario');
    let mensaje = document.querySelector('#mensaje');
    let cedula = document.querySelector('#cedula');
    let asiento = document.querySelector('#asiento');
    let bus = document.querySelector('#bus');
    let destino = document.querySelector('#destino');
    let valor = document.querySelector('#valor');
    let salida = document.querySelector('#salida');
    let cliente= document.querySelector('#cliente');
    let pasajero= document.querySelector('#pasajero');
    let id_horario= document.querySelector('#id_horario');


    horario.addEventListener('change', (e) => {
        e.preventDefault();
        let seleccionado = e.target;
        if(seleccionado.value !== "empty") {  
            const formData = new FormData();
            formData.append('horario', seleccionado.value);     
            fetch('verificar_disponibles.php',{
                method: 'POST',
                body: formData
            })
            .then(r => r.json())
            .then(r => {
                if(r.mensaje){
                   mensaje.innerHTML = r.mensaje
                   mensaje.classList.remove('hidden')
                   form.classList.add('hidden')
                    return;
                }

                mensaje.classList.add('hidden')
                form.classList.remove('hidden')

                asiento.innerHTML = r.next;
                bus.innerHTML = r.bus;
                destino.innerHTML = r.destino;
                valor.innerHTML = parseFloat(r.valor).toFixed(2);
                salida.innerHTML = r.salida;
                id_horario.value = r.horario;


            }) 
            return;
        } else {
            mensaje.innerHTML = ""
            mensaje.classList.add('hidden')
            form.classList.add('hidden')
            resetear()
            return;
        }
    })

    pasajero.addEventListener('change', (e) => {
        let clienteSelecionado = e.target;
        clienteSelecionado = clienteSelecionado.value;
        if(clienteSelecionado !=="1") {
            cliente.classList.remove('hidden')
        } else {
            cliente.classList.add('hidden')
        }
    })

    function resetear() {
        horario.value="empty";
        cliente.classList.add('hidden')
        mensaje.classList.add('hidden')
        form.reset();
        form.classList.add('hidden')
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        var dialog = confirm("Desea generar boleto?");
        if (dialog) {
            const formData = new FormData(form);
            formData.append('asiento', asiento.innerHTML)
            formData.append('bus', bus.innerHTML)
            formData.append('destino', destino.innerHTML)
            formData.append('valor', valor.innerHTML)

            fetch('guardar_boleto.php',{
                    method: 'POST',
                    body: formData
            })
            .then(r => r.json())
            .then(r => {
                if(r === true){
                    alert('Boleto generado');
                    let imp = confirm("¿Desea imprimir boleto?")
                    if(imp) {
                        alert('Boleto se está imprimiendo');
                        resetear();
                    } else {
                        resetear();
                    }
                    return;
                }else{
                    alert('No se podido generar boleto');
                }
            })
        }
    })

</script>
</body>

</html>
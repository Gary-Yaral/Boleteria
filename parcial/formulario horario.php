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
        <a href="formulario horario.php"><input type="button" value= "INGRESAR"></a>
        <a href="buscar horario.php"><input type="button" value= "BUSCAR"></a>
        <a href="CGhorario.php"><input type="button" value= "REGISTROS"></a>
	</div>
    <!-- Titulo de busqueda -->
	<h1 class="titulo-resultados" >Nuevo Horario</h1>
    <form class="form-editar" action='procesar horario.php' method='post'>
        <div>
            <label for="">N° Ruta</label>
            <select name="id_ruta" id="id_ruta" required>
                <option value="">Seleccione la ruta</option>
    <?php
    $con = mysqli_connect("localhost","root","","boletos");
    $table = "ruta"; 
    $sql = "select * from $table";
    $resultado = $con->query($sql);
    $filas = mysqli_num_rows($resultado);


    if($filas === 0){
        ?>
            <h3 class="No-resultado">No existen datos</h3>
        <?php
    } else {
                
        while ($fila = $resultado->fetch_assoc()){
            $id_ruta = $fila['id_ruta'];
            $origen = $fila['origen'];
            $destino = $fila['destino'];
    ?>
                <option value="<?php echo $id_ruta ?>"><?php echo $origen.'-'.$destino ?></option>
    <?php
        }
    }

    ?>
            </select>
        </div>
        <div>
            <label for="">Hora salida</label>
            <select name="hora_salida" id="rango_hora" required>
                <option value="">Seleccione primero la ruta</option>
            </select>
        </div>
        <div>
            <label for="">Bus</label>
            <select name="id_bus" id="id_bus"  required>
                <option value="">Seleccione el bus</option>
    <?php

$table = "bus"; 
$sql = "select * from $table";
$resultado = $con->query($sql);
$filas = mysqli_num_rows($resultado);

while ($fila = $resultado->fetch_assoc()){
    $id_bus = $fila['id_bus'];
    $placa = $fila['placa'];
?>
            <option value="<?php echo $id_bus ?>"><?php echo $id_bus.'-'.$placa ?></option>
<?php
}

?>
        </select>
        </div>
        <section>
            <input type='reset' value=Limpiar>
            <input type='submit' value="Registrar">
        </section>
    </form>
    <script>
        const form = document.querySelector('form');
        const id_ruta = document.querySelector('#id_ruta');
        const rango_hora = document.querySelector('#rango_hora');
        id_ruta.addEventListener('change', (e) => {
            const ruta = e.target;
            if(ruta.value === "") {        
                rango_hora.innerHTML = "";
                let opc = document.createElement('option');
                    opc.innerHTML = "Seleccione primero la ruta";
                    opc.value = "";
                    rango_hora.appendChild(opc);
                    return;
            }

            const formData = new FormData();
            formData.append('id_ruta', ruta.value);
            fetch('generar_horario.php', {
                method:'POST',
                body: formData
            })

            .then(r => r.json())
            .then(r => {
                const hora_inicial = "00:00";
                let opcion1 = "Seleccione una hora";
                let opc = document.createElement('option');
                let opc2 = document.createElement('option');
                opc.innerHTML = opcion1;
                opc2.innerHTML = hora_inicial;
                rango_hora.innerHTML = "";
                opc.value = "";
                rango_hora.appendChild(opc);
                rango_hora.appendChild(opc2);
                const rango = r.tiempo_espera.split(':').map(n => parseInt(n))

                let n = hora_inicial.split(':');
                let final = 23;
                let hora = 0;
                let minuto = 0;
                let i = 1;
                while(hora <= 23) {
                    let opcion = document.createElement('option');
                    hora = rango[0] * i;      
                    minuto = rango[1] * i; 
                    if(minuto >= 60) {
                        m = Math.trunc(minuto / 60);
                        hora = hora + m
                        minuto = Math.trunc(Math.round(((minuto / 60) - m) * 60).toFixed(2));
                        if(minuto < 10 ) {
                            minuto = '0'+ minuto
                        } 
                    }   

                    if(hora < 24 ) {
                        if(hora < 10 ) {
                            hora = '0' + hora
                        }

                        if(minuto === 0 ) {
                            minuto = '0'+ minuto
                        } 

                        opcion.innerHTML = hora+':'+ minuto;
                        opcion.value = hora+':'+ minuto;
                        rango_hora.appendChild(opcion);
                    }            
                    i++;                          
                }
            })
        })

    </script>
</body>
</html>

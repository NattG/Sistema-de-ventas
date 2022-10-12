<?php 
 include("head.php");
 if($_SESSION['nivel']==1){
    include("encabezado.php");
 }else{
    if($_SESSION['nivel']==2){
        include("encabezado2.php");
     }
 }
?>  
    
<body>
    <div class="row pb-4">
    <div class="col-md-2"></div>
    <div class="col-md-8"><br>
        <form role="form" method="get">
            <h2>Buscar Empleado</h2>
            <div class="form-group">
                <label>Nombre </label></br>
                <input class="form-control" type="text" name="nombre" id="nombre">
            </div><br>
            <center>
                <input type="submit" name="Buscar" value="Buscar Empleado" id="Buscar" class="btn btn-primary"></center>
            <br>
            <table class="table">
                <thead class="table-dark">
                    <tr aling="center">
                        <th scoope="col">Cargo</th>
                        <th scoope="col">Carnet</th>
                        <th scoope="col">Nombre Completo</th>
                        <th scoope="col">Direccion</th>
                        <th scoope="col">Telefono</th>
                        <th scoope="col">Fecha de Nacimiento</th>
                        <th scoope="col">Genero</th>
                        <th scoope="col">Intereses</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
                
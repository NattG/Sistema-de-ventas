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
            <h1>Buscar Proveedor</h1>
            <div class="form-group">
                <label>Proveedor</label></br>
                <input class="form-control" type="text" name="empresa" id="empresa">
            </div><br>
            <center>
                <input type="submit" name="Buscar" value="Buscar Proveedor" id="Buscar" class="btn btn-primary"></center>
            <br>
            <table class="table">
                <thead class="table-dark text-center">
                    <tr aling="center">
                        <th scoope="col">Empresa</th>
                        <th scoope="col">Contacto</th>
                        <th scoope="col">Email</th>
                        <th scoope="col">Telefono</th>
                        <th scoope="col">Direccion</th>
                        <th scoope="col">Logo</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
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
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form role="form" method="get"><br>
            <h1>Cargo</h1>
            <div class="form-group">
                <label>Cargo</label></br>
                <input class="form-control" type="text" name="cargo" id="cargo">
            </div><br>
            <center>
                <input type="submit" name="Buscar" value="BuscarCargo" id="Buscar" class="btn btn-primary"></center>
            <br>
            <table class="table">
                <thead class="table-dark">
                    <tr aling="center">
                        <th scoope="col">CARGO</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
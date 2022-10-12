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
    <div class="col-md-3"></div>
    <div class="col-md-6"><br>
        <form role="form" method="get">
            <h1>Cliente</h1>
            <div class="form-group">
                <label>Cliente</label></br>
                <input class="form-control" type="text" name="nit" id="nit">
            </div><br>
            <center>
                <input type="submit" name="Buscar" value="Buscar Cliente" id="Buscar" class="btn btn-primary"></center>
            <br>
            <table class="table">
                <thead class="table-dark">
                    <tr aling="center">
                        <th scoope="col">Razon Social</th>
                        <th scoope="col">NIT / CI</th>
                        <th scoope="col" colspan="2">OPERACIONES</th>
                    </tr>
                </thead>
                
            
        
    
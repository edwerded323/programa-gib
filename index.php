<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evalucion1</title>

    <!-- boostras 5-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- sweetalet2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- animacion sweetaleet2--> 
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<body>
  
<div class="container mt-3">
  <h3>Hallar area del Terreno</h3>
  
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Click para hallar area
  </button>
</div>


<?php
if(isset($_POST['A'])){
include_once "class.area.php";
$areadelterreno = new Terreno;
$areadelterreno->CalcularTerreno ();
 }

?>


    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Escriba los Datos </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container -m3">

            <FORM ACTION="index.php" method="POST"> 

                <div class="mb-4 mt-4">
                <label for="A">Ingrese el lado A</label>
                <input type="text" class="form-control" id=a placeholder=" lado A" name="A">
                </div>
                <div class="mb-4 mt-4">
                <label for="B">Ingrese el lado B</label>
                <input type="text" class="form-control" id=B placeholder=" lado B" name="B">
                
                </div>
                <div class="mb-4 mt-4">
                <label for="C">Ingrese el lado C</label>
                <input type="text" class="form-control" id=C placeholder=" lado C" name="C">
                
                </div>
                <div>
      
                </div>

                <button type="submit" class="btn btn-primary">calcular</button>

                <div class="container mt-3">
              
                       <img src="prueba1.png" class="rounded" alt="Cinque Terre" width="304" height="236"> 
                      </div>

            </form>



        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



</body>
</html>
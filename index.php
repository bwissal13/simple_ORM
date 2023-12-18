<?php
require "./database/conex.php";
require "Crud.php";
class insert extends Crud {
}
$test= new insert();
$test->insertRecord("users",['First_name'=> "anaaa",'Last_name'=>"taniaaana",'Email'=>"chiiihaja","Phone"=>15]);

if ($test) {
    echo " Added successfully!";
} else {
    echo "Error.";
}
// $test1 = new Crud() ;
// $test1->updateRecord("users",['First_name'=> "anaaatest",'Last_name'=>"tanianatest",'Email'=>"chihajatest","Phone"=>15],1);
// $test3 = new Crud();
// $test3-> deleteRecord("users",1);
// $test3 = new Crud();
// $test3-> selectRecords("users","First_name= 'ana'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<!-- <form action="OOP-crud.php">
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">First_name</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last_name</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 ">
    <label class="form-check-label" for="exampleCheck1">Phone</label>
    <input type="text" class="form-control" id="exampleCheck1">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
</body>
</html>

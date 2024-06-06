<?php

if(isset($_POST['id'])){
  require_once('../classes/todoController.php');

$id=$_POST['id'];
  $update=new TodoController();
$updateTodo=$update->updateTodo($id);

if($updateTodo){
  echo 'successfully updated!!';
}else{
  echo 'something went wrong!!';
}

}


?>
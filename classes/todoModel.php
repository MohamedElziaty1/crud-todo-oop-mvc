<?php require_once("DbConnect.php");?>

<?php
class TodoModel extends DbConnect{
protected function addTodoDb($todo){
  $date=date('y-m-d H-m-sa');
$sql='INSERT INTO todos(todoName,createdDate) value(?,?)';

$stmt=$this->connect()->prepare($sql);
$result=$stmt->execute([$todo,$date]);
return $result;
}

protected function getTodosDb(){
$sql='SELECT * FROM todos';
$stmt=$this->connect()->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll();
return $result;


}
protected function updateTodoDb($id){
  $sql="UPDATE todos SET completed='yes' WHERE id=?";
  $stmt=$this->connect()->prepare($sql);
  $result=$stmt->execute([$id]);
  return $result;
  
  
  }
  protected function DeleteTodoDb($id){
    $sql="DELETE FROM todos WHERE id=?";
    $stmt=$this->connect()->prepare($sql);
    $result=$stmt->execute([$id]);
    return $result;
    
    
    }
}



?>
<?php require_once("todoModel.php")?>

<?php
class TodoController extends TodoModel{

  public function addTodo($todo){
return $this->addTodoDb($todo);
  }
  public function updateTodo($id){
    return $this->updateTodoDb($id);
      }
      public function deleteTodo($id){
        return $this->deleteTodoDb($id);
          }
}

?>
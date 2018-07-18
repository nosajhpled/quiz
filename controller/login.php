<?php
include('./core/controller.php');
Class Login extends Controller
{
  public function __construct()
  {
          parent::__construct();
  }

  public function go($post)
  {
    if (count($post) > 0 ) {$this->ProcessForm($post);}
    $this->view();
  }

  public function view()
  {
    include("./view/login.php");
  }

  private function ProcessForm($post)
  {
    echo "process";
    $formCheck = array("user"=>"require","password"=>"require");
    if (!$this->formCheck($formCheck,$post))
    {
      echo ('Fail--'.$this->formCheck($formCheck,$post));
    }
    else
    {
      echo ('Suc--'.$this->formCheck($formCheck,$post));
    }
  }

  private function formCheck($formCheck, $post)
  {
    $return = true;
    foreach($formCheck as $field=>$validation)
    {
      switch($validation)
      {
        case "require":
          $return = !$return ? $return : $this->Required($post[$field]);
        break;
      }
    }
    return $return;
  }

  private function Required($field)
  {
    return !empty($field);
  }
}
?>

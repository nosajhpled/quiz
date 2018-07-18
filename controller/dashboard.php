<?php
include('./core/controller.php');
Class Dashboard extends Controller
{
  public function __construct()
  {
          parent::__construct();
  }

  public function view()
  {
    include("./view/dashboard.php");
  }
}
?>
<?php $controller = new Dashboard(); ?>

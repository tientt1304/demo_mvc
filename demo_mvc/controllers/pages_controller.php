<?php
require_once('controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $data = array(
      'name' => 'Thảo Tiên và Anh Tú',
      'age' => 20
    );
    $this->render('home', $data);
  }

  public function error()
  {
    $this->render('error');
  }
}
?>
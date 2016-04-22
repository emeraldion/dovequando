<?php
	require_once(dirname(__FILE__) . "/base_controller.php");
  require_once(dirname(__FILE__) . "/../models/raccomandata.php");
  require_once(dirname(__FILE__) . "/../include/db.inc.php");

	class TrackController extends BaseController
	{
    public function index()
    {
      $conn = Db::get_connection();

      $raccomandata_factory = new Raccomandata();
      $this->raccomandate = $raccomandata_factory->find_all(array(
        'where_clause' => "`utente` = '{$conn->escape($_COOKIE['username'])}'"
      ));

      Db::close_connection($conn);
    }
	}
?>

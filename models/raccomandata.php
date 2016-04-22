<?php
  require_once(dirname(__FILE__) . "/base.php");

  class Raccomandata extends ActiveRecord
  {
    protected $table_name = 'dovequando_raccomandate';

    function pretty_date()
    {
      return strftime('%a, %e %B %Y', strtotime($this->data));
    }
  }

?>

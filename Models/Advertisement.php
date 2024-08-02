<?php
class Advertisement {
    public $id;
    public $userid;
    public $title;
    public $username;

    // Constructor to initialize the Advertisement object
    public function __construct($id, $userid, $title, $username = null) {
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
        $this->username = $username;
    }
}
?>


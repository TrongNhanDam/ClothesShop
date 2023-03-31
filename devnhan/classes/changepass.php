<?php
include_once '../lib/database.php';
include_once '../helpers/format.php';
?>
<?php
class changepass
{
    private $db;
    // private $fm;
    public function __construct()
    {
        $this->fm = new Format();
        $this->db = new Database();
    }
    public function testOldPass($old_pass)
    {
        $query = "SELECT * FROM tbl_admin where adminPass = ?";
        $result = $this->db->testOldPass($query, $old_pass);
        if ($result)
            return true;
        return false;
    }
    public function updatePass($newpass)
    {
        $query = "UPDATE tbl_admin set adminPass = ? ";
        $result = $this->db->updatePass($query, $newpass);
        if ($result)
            return true;
        return false;
    }
}

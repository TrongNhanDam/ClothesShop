<?php
include_once '../lib/database.php';
?>
<?php
class feedback
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert_feedback($email, $content)
    {
        $query = "INSERT INTO tbl_feedback (feedEmail, feedContent) VALUES(?, ?)";
        $result = $this->db->insertFeedback($query, $email, $content);
        return $result;
    }
    public function list_feedback()
    {
        $query = "SELECT * FROM tbl_feedback order by feedId desc";
        $result = $this->db->listFeedback($query);
        return $result;
    }
    public function del_feedback($idFeedback)
    {
        $query = "DELETE from tbl_feedback where feedId = ? ";
        $result = $this->db->delOnePara($query, $idFeedback);
        if ($result)
            return true;
        return false;
    }
}

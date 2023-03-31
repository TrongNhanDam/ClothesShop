<?php
include_once '../lib/database.php';
?>
<?php
class slider
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert_slider($value_input_slider)
    {
        $query = "INSERT INTO tbl_slider (sliderImg) VALUES(?)";
        $result = $this->db->insertSlider($query, $value_input_slider);
        return $result;
    }
    public function list_slider()
    {
        $query = "SELECT * FROM tbl_slider order by sliderId desc";
        $result = $this->db->listSlider($query);
        return $result;
    }
    public function del_slider($idSlider)
    {
        $query = "DELETE from tbl_slider where sliderId = ? ";
        $result = $this->db->delOnePara($query, $idSlider);
        if ($result)
            return true;
        return false;
    }
}

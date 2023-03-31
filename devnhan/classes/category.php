<?php
include_once '../lib/database.php';
include_once '../helpers/format.php';
?>
<?php
class category
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->fm = new Format();
        $this->db = new Database();
    }

    public function insert_category($value_input_cate)
    {
        $catName = $this->fm->validation($value_input_cate);
        // $user = $this->db->link->quote($user);
        // $pass = $this->db->link->quote($pass);
        if (empty($value_input_cate)) {
            return false;
        }
        $query = "INSERT INTO tbl_category(catName) VALUES(?)";
        $result = $this->db->insertCategory($query, $value_input_cate);
        return $result;
    }
    public function list_category()
    {
        $query = "SELECT * FROM tbl_category order by catId desc";
        $result = $this->db->selectList($query);
        return $result;
    }
    public function getCateById($id)
    {
        $query = "SELECT * FROM tbl_category where catId = ?";
        $result = $this->db->selectCateName($query, $id);
        return $result;
    }
    public function update_category($cateName, $idCate)
    {
        // $cateName = $this->fm->validation($cateName);
        // $user = $this->db->link->quote($user);
        // $pass = $this->db->link->quote($pass);
        $query = "UPDATE tbl_category set catName=? where catId = ?";
        $result = $this->db->updateCate($query, $cateName, $idCate);
        if ($result)
            return true;
        return false;
    }
    public function del_category($idCate)
    {
        $query = "DELETE from tbl_category where catId = ? ";
        $result = $this->db->delOnePara($query, $idCate);
        if ($result)
            return true;
        return false;
    }
}

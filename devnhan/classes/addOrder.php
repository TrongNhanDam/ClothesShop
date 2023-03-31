<?php
include_once "../lib/database.php";

class addOrder
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addToOrder(
        $uName,
        $uEmail,
        $uPhone,
        $uAddress,
        $uPro,
        $uDis,
        $uWar
    ) {
        $query = "INSERT INTO tbl_order (orderTenNguoiNhan, orderEmailNguoiNhan, orderSdtNguoiNhan, orderDiaChiNguoiNhan, orderAdPro, orderAdDis, orderAdWar) values(?,?,?,?,?,?,?)";
        $result = $this->db->insertRowOrder(
            $query,
            $uName,
            $uEmail,
            $uPhone,
            $uAddress,
            $uPro,
            $uDis,
            $uWar
        );
        if ($result) {
            return true;
        }
        return false;
    }
    public function getShowOrder()
    {

        $query = "SELECT * FROM tbl_order";
        $result = $this->db->listOrder($query);
        if ($result)
            return $result;
        return false;
    }
}

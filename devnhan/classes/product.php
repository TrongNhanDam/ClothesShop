<?php
include_once '../lib/database.php';
include_once '../helpers/format.php';
class Product
{
    private $db;
    // private $fm;
    public function __construct()
    {
        // $this->fm = new Format();
        $this->db = new Database();
    }

    public function insert_product(
        $productName,
        $cateSelect,
        $productDes,
        $productPrice,
        $productSizeS,
        $productSizeM,
        $productSizeL,
        $productSizeXL,
        $productQuanityAnother,
        $productImg
    ) {
        $query = "INSERT INTO tbl_product(productName, catId, productDes, productPrice, productSS, productSM, productSL, productSXL, productQuantity, productImg) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $result = $this->db->insertProduct(
            $query,
            $productName,
            $cateSelect,
            $productDes,
            $productPrice,
            $productSizeS,
            $productSizeM,
            $productSizeL,
            $productSizeXL,
            $productQuanityAnother,
            $productImg
        );
        if ($result) {
            return $result;
        }
        return false;
    }
    public function getShowProductById($productId)
    {
        $query = "SELECT * FROM tbl_product where productId = ?";
        $result = $this->db->listProductById($query, $productId);
        if ($result) {
            return $result;
        }
        return false;
    }
    public function update_product(
        $productId,
        $productName,
        $cateSelect,
        $productDes,
        $productPrice,
        $productSizeS,
        $productSizeM,
        $productSizeL,
        $productSizeXL,
        $productQuanityAnother,
        $productImg
    ) {
        $query = "UPDATE tbl_product set 
        productName	= ? ,
        catId = ? ,
        productDes = ? ,
        productPrice = ? ,
        productSM = ? ,
        productSL = ? ,
        productSXL = ? ,
        productSS = ? ,
        productQuantity = ? , 
        productImg = ? 
        where productId = ?";
        $result = $this->db->updateProduct(
            $query,
            $productName,
            $cateSelect,
            $productDes,
            $productPrice,
            $productSizeM,
            $productSizeL,
            $productSizeXL,
            $productSizeS,
            $productQuanityAnother,
            $productImg,
            $productId
        );
        if ($result) {
            return $result;
        }
        return false;
    }
    public function list_product()
    {
        $query = "SELECT * FROM tbl_product order by catId desc";
        $result = $this->db->listProduct($query);
        return $result;
    }
    public function listProductCateId($cateId)
    {
        $query = "SELECT * FROM tbl_product where catId = ? order by catId desc";
        $result = $this->db->listProductByCateId($query, $cateId);
        if ($result) {
            return $result;
        }
        return false;
    }
    public function product_del($productId)
    {
        $query = "DELETE from tbl_product where productId = ? ";
        $result = $this->db->delOnePara($query, $productId);
        if ($result)
            return true;
        return false;
    }
}

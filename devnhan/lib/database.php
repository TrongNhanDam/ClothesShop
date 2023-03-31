
<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

include_once __DIR__ . '/../config/config.php';
?>
<?php
class Database
{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {

        try {
            $this->link = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
    // Select or Read data and delete
    public function selectList($query)
    {
        $result = $this->link->prepare($query);
        $result->execute();
        $value = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($result->rowCount() > 0) {
            return $value;
        } else
            return false;
    }
    public function delOnePara($query, $id)
    {
        $delete_row = $this->link->prepare($query);
        $delete_row->execute([$id]);
        if ($delete_row)
            return $delete_row;
        return false;
    }
    // Password
    public function testPassAdmin($query, $user, $pass)
    {
        $result = $this->link->prepare($query);
        $result->execute([$user, $pass]);
        $count = $result->rowCount();
        $value = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($count > 0) {
            return $value;
        } else
            return false;
    }
    public function updatePass($query, $newpass)
    {
        $update_row = $this->link->prepare($query);
        $update_row->execute([$newpass]);
        if ($update_row) {
            return $update_row;
        }
        return false;
    }
    public function testOldPass($query, $oldpass)
    {
        $row = $this->link->prepare($query);
        $row->execute([$oldpass]);
        if ($row->rowCount() > 0) {
            return $row;
        }
        return false;
    }
    // Category
    public function insertCategory($query, $value_input_cate)
    {
        $result = $this->link->prepare($query);
        $result->execute([$value_input_cate]);
        if ($result) {
            return $result;
        }
        return false;
    }
    public function updateCate($query, $catName, $idCate)
    {
        $update_row = $this->link->prepare($query);
        $update_row->execute([$catName, $idCate]);
        if ($update_row)
            return $update_row;
        return false;
    }
    public function selectCateName($query, $id)
    {
        $result = $this->link->prepare($query);
        $result->execute([$id]);
        if ($result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }
    // Product
    public function insertProduct(
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
    ) {
        $insert = $this->link->prepare($query);
        $result = $insert->execute([
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
        ]);
        if ($result) {
            return true;
        }
        return false;
    }
    public function updateProduct(
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
    ) {
        $update = $this->link->prepare($query);
        $result = $update->execute([
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
        ]);
        if ($result)
            return true;
        return false;
    }
    public function listProduct($query)
    {
        $result = $this->link->prepare($query);
        $result->execute();
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($result->rowCount() > 0) {
            return $rows;
        }
        return false;
    }
    public function listProductByCateId($query, $cateId)
    {
        $result = $this->link->prepare($query);
        $result->execute([$cateId]);
        if ($result->rowCount() > 0) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }
    public function listProductById($query, $productId)
    {
        $result = $this->link->prepare($query);
        $result->execute([$productId]);
        if ($result->rowCount() > 0) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }
    // addcart
    public function insertRowOrder(
        $query,
        $uName,
        $uEmail,
        $uPhone,
        $uAddress,
        $uPro,
        $uDis,
        $uWar
    ) {
        $insert = $this->link->prepare($query);
        $result = $insert->execute([
            $uName,
            $uEmail,
            $uPhone,
            $uAddress,
            $uPro,
            $uDis,
            $uWar
        ]);
        if ($result)
            return true;
        return false;
    }
    public function listOrder($query)
    {
        $rows = $this->link->prepare($query);
        $rows->execute([]);
        if ($rows->rowCount() > 0) {
            return $rows->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }
    // slider 
    public function insertSlider($query, $value_input)
    {
        $result = $this->link->prepare($query);
        $result->execute([$value_input]);
        if ($result) {
            return $result;
        }
        return false;
    }
    public function listSlider($query)
    {
        $result = $this->link->prepare($query);
        $result->execute();
        $value = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($result->rowCount() > 0) {
            return $value;
        } else
            return false;
    }
    // feedback 
    public function insertFeedback($query, $email, $content)
    {
        $result = $this->link->prepare($query);
        $result->execute([$email, $content]);
        if ($result) {
            return $result;
        }
        return false;
    }
    public function listFeedback($query)
    {
        $result = $this->link->prepare($query);
        $result->execute();
        $value = $result->fetchAll(PDO::FETCH_ASSOC);
        if ($result->rowCount() > 0) {
            return $value;
        } else
            return false;
    }
}

<?php

class Product
{
    private $db;
    private $table = "products";

    public function __construct()
    {
        $this->db = new Database;
    }

    public function read()
    {
        $sql = "SELECT * FROM $this->table ORDER BY sku ASC";

        $query = $this->db->dbh->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function massDelete($ids)
    {
        // check if method is post
        $id = json_decode($ids);

        return $this->db->delete($this->table, $id);
    }
    public function addProduct($data)
    {

        $name = $data['name'];
        $sku = $data['sku'];
        $price = $data['price'];
        $type = $data['productType'];
        $attribute = "";

        if ($type == "DVD") {
            $attribute = "Size: " . $data['size'] . "MB";
        } else if ($type == "Book") {
            $attribute = "Weight: " . $data['weight'] . "kG";
        } else {
            $attribute = "Dimension: " . $data['length'] . "x" . $data['width'] . "x" . $data['height'];
        }

        return $this->db->create("products", [
            "sku" => $sku,
            "name" => $name,
            "price" => $price,
            "productType" => $type,
            "attribute" => $attribute,
        ]);
    }
}

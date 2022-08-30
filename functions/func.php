<?php
include_once 'db.php';

interface MyFunction
{
    public function productList();
    public function addProduct($data);
    public function massDelete($ids);
}


class MyFunctionImplementation implements MyFunction
{
    public function productList()
    {
        $db = new DB();

        return $db->read("products");
    }

    public function addProduct($data)
    {
        $db = new DB();

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

        return $db->create("products", [
            "sku" => $sku,
            "name" => $name,
            "price" => $price,
            "productType" => $type,
            "attribute" => $attribute,
        ]);
    }

    public function massDelete($ids)
    {
        $id = json_decode($ids);

        $db = new DB();

        return $db->delete("products", $id);
    }
}

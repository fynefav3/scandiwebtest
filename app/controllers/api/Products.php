<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Products extends ApiController
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }
    public function about($id)
    {
        echo 'hello' . $id;
        # code...
    }
    public function Index($var = null)
    {
        $products = $this->productModel->read();
        echo json_encode($products);
        // echo "fresh";
    }
}

<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class AddProduct extends ApiController
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function Index()
    {
        $this->productModel->addProduct($_POST);
        header("Location: ../");
    }
}

<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Delete extends ApiController
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function Index($var = null)
    {
        $ids = $_POST['ids'];
        echo $this->productModel->massDelete($ids);
    }
}

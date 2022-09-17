<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Pages extends Controller
{
    public function __construct()
    {
    }
    public function addProduct()
    {
        $this->view('pages/add-products');
    }
    public function Index($var = null)
    {

        $data = [
            'title' => "My MVC Framework",
        ];
        $this->view('pages/index', $data);
    }
}

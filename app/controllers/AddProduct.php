<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class AddProduct extends Controller
{
    public function __construct()
    {
    }

    public function Index()
    {
        $this->view('pages/add-products');
    }
}

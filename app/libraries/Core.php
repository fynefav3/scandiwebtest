<?php

/**
 *  App Core class
 * Creates URL and loads controller
 * URL FORMAT  /controller/method/params
 */
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $param = [];
    public function __construct()
    {
        // print_r($this->geturl());
        $url = $this->geturl();
        // var_dump($url);
        if (isset($url[0]) && $url[0] == 'api') {
            // var_dump($url);
            // print('apis');
            if (file_exists('app/controllers/api/' . ucwords($url[1]) . '.php')) {
                $this->currentController = ucwords($url[1]);
                //unset 0  index
                unset($url[1]);
            }
            // die($this->currentController . $this->currentMethod);
            //require controllers
            require_once 'app/controllers/api/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;
            //check
            if (isset($url[2])) {
                //check if method exists in controller
                if (method_exists($this->currentController, $url[2])) {
                    $this->currentMethod = $url[2];
                    unset($url[2]);
                }
            }
            // Get Params
            $this->params = $url ? array_values($url) : [];
            // call a callback with array of params
            call_user_func_array([
                $this->currentController,
                $this->currentMethod
            ], $this->params);
        } else {
            // die;
            //Look for controllers
            if (isset($url[0]) && file_exists('app/controllers/' . ucwords($url[0]) . '.php')) {
                $this->currentController = ucwords($url[0]);
                //unset 0  index
                unset($url[0]);
            }
            //require controllers
            require_once 'app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;
            //check
            if (isset($url[1])) {
                //check if method exists in controller
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }
            // Get Params
            $this->params = $url ? array_values($url) : [];
            // call a callback with array of params
            call_user_func_array([
                $this->currentController,
                $this->currentMethod
            ], $this->params);
        }
    }
    public function geturl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            // var_dump($url);
            return $url;
        }
    }
}

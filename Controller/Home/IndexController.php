<?php
namespace Controller\Home;
use Controller\Controller;
use Model\DB;
class IndexController extends Controller
{
    public function index()
    {
        $this->display('Index/index');
    }

    public function login()
    {
        echo "string";
    }

    public function register()
    {
        echo 'this is register action';
    }
}
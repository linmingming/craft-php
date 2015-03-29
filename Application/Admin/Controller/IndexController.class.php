<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index() {
        $this->display('login');
    }

    public function main() {
        $this->display();
    }

    public function login() {
        $this->display();
    }


    public function test() {
        $this->show('sdfdsfdsfsd');
    }
}
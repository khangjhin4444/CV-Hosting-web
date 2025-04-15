<?php


class HomeController {
    

    public function index() {
        require_once dirname(__DIR__) . '/views/home.php';
    }

    public function authentication() {
        require_once dirname(__DIR__) . '/views/authentication.php';
    }

    public function createCv() {
        require_once dirname(__DIR__) . '/views/create_cv.php';
    }

    public function myCvs() {
        require_once dirname(__DIR__) . '/views/my_cvs.php';
    }

    public function contact() {
        require_once dirname(__DIR__) . '/views/contact.php';
    }

    public function admin() {
        require_once dirname(__DIR__) . '/views/admin.php';
    }

    public function notFound() {
        require_once dirname(__DIR__) . '/views/404.php';
    }
}
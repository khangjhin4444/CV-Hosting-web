<?php


class HomeController {
    

    public function index() {
        require_once dirname(__DIR__) . '/views/home.php';
    }

    public function authentication() {
        require_once dirname(__DIR__) . '/views/authentication.php';
    }

    public function getRole() {
        require_once dirname(__DIR__) . '/views/get_role.php';
    }

    public function experience() {
        require_once dirname(__DIR__) . '/views/experience.php';
    }

    public function select_template() {
        require_once dirname(__DIR__) . '/views/select_template.php';
    }

    public function information() {
        require_once dirname(__DIR__) . '/views/information.php';
    }

    public function myCvs() {
        require_once dirname(__DIR__) . '/views/my_cvs.php';
    }

    public function viewTemplates() {
        require_once dirname(__DIR__) . '/views/view_templates.php';
    }

    public function generate_share_link() {
        require_once dirname(__DIR__) . '/views/generate_share_link.php';
    }
   
    public function delete_cv() {
        require_once dirname(__DIR__) . '/views/delete_cv.php';
    }

    public function admin() {
        require_once dirname(__DIR__) . '/views/admin.php';
    }

    public function notFound() {
        require_once dirname(__DIR__) . '/views/404.php';
    }
}
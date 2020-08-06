<?php
include_once ROOT . '/engine/models/Admin.php';
include_once ROOT . '/engine/models/Invoice.php';
class AdminController
{
    public function actionDashboard(){
        if (!isset($_COOKIE['id'])){
            header("Location: /admin");
        }
        require_once ROOT . '/engine/views/admin/dashboard.php';
        return true;
    }
    public function actionLogin(){
        $res = Admin::authorization();
        if ($res){
//            print_r($res);
            setcookie('id', $res['id'], time()+3600, '/');
            header("Location: /admin/dashboard");
        }else{
            $_POST['msg'] = 'Incorrect password or email';
        }
        require_once ROOT . '/engine/views/admin/login.php';
        return true;
    }
    public function actionLogout(){
        $check = Admin::logout();
        if ($check){
            setcookie('id', '', time()-3600, '/');
            header("Location: /admin");
        }else{
            echo "No";
        }
        return true;
    }
    public function actionInvoice(){
        $arr = Invoice::getInvoices();
        $id = '';
        if (!isset($_COOKIE['id'])){
            header("Location: /admin");
        }else{
            $id = $_COOKIE['id'];
        }
        $detail = Admin::getAdminDetail($id);
//        print_r($arr);
        require_once ROOT . '/engine/views/admin/invoice.php';
        return true;
    }
    public function actionCreate(){

        require_once ROOT . '/engine/views/admin/create.php';
        return true;
    }
    public function actionCreateInvoice(){
        if (isset($_POST['name'])){
            $name = $_POST['name'];
            $supply = $_POST['supply'];
            $invoice = $_POST['invoice'];
            $comment = $_POST['comment'];
            $res = Admin::create($name, $supply, $invoice, $comment);
            if ($res){
                header("Location: /admin/invoice");
            }else{
                header("Location: /admin/create");
            }
        }
//        print_r($_POST);
        return true;
    }
    public function actionDeleteInvoice($id){
        $res = Admin::delete($id);
        if ($res){
            header("Location: /admin/invoice");
        }else{
            header("Location: /admin/invoice");
        }
        return true;
    }
    public function actionEdit($id){
        $res = Invoice::getInvoiceById($id);

        require_once ROOT . '/engine/views/admin/edit.php';
        return true;
    }
    public function actionEditInvoice(){
        if (isset($_POST['name'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $supply = $_POST['supply'];
            $invoice = $_POST['invoice'];
            $comment = $_POST['comment'];

            $res = Admin::update($id, $name, $supply, $invoice, $comment);
            if ($res){
                header("Location: /admin/invoice");
            }else{
                header("Location: /admin/edit/$id");
            }
        }
//        print_r($_POST);
        return true;
    }
}
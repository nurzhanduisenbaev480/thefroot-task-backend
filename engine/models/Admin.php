<?php


class Admin
{
    public static function getAdminDetail($id){
        $result = Connection::query("SELECT *FROM `user` WHERE `id`='$id'");
        if ($result){
            return $result->fetch(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
    public static function authorization(){
        $email = '';
        $password = '';
        if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        $result = Connection::query('SELECT *FROM user WHERE email="'.$email.'" AND password="'.md5($password).'"');
        if ($result){
            $row = $result->fetch(PDO::FETCH_ASSOC);
//            self::auth($row['id']);
            return $row;
        }else{
            return false;
        }

    }

    public static function logout(){
        if (isset($_COOKIE['id'])){
            return true;
        }
        return false;
    }
    public static function create($number, $supply, $invoice, $comment){
        $result = Connection::query("INSERT INTO `invoice`(`number`, `supplyDate`, `invoiceDate`, `comment`) VALUES ('$number','$supply','$invoice','$comment')");
        if ($result){
            return true;
        }else{
            return false;
        }
    }
    public static function delete($id){
        $sql = "DELETE FROM `invoice` WHERE `id`='$id'";
        $result = Connection::query($sql);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
    public static function update($id,$number, $supply, $invoice, $comment){

        $sql = "UPDATE invoice SET `number`='$number', `supplyDate`='$supply', `invoiceDate`='$invoice', `comment`='$comment' WHERE `id`='$id'";
        $result = Connection::query($sql);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
}
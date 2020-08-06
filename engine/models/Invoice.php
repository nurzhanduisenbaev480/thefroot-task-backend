<?php
class Invoice
{
    public static function getInvoices(){
        $result = Connection::query("SELECT *FROM invoice");
        $arr = [];
        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){

            $arr[$i]['name'] = $row['number'];
            $arr[$i]['id'] = $row['id'];
            $arr[$i]['supply'] = $row['supplyDate'];
            $arr[$i]['invoice'] = $row['invoiceDate'];
            $arr[$i]['comment'] = $row['comment'];
            $i++;
        }
        return $arr;
    }
    public static function getInvoiceById($id){
        $result = Connection::query("SELECT *FROM invoice WHERE `id`='$id'");

        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
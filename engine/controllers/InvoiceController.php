<?php
include_once ROOT . '/engine/models/Invoice.php';
class InvoiceController
{

    public function actionIndex(){
        $arr = Invoice::getInvoices();

        require_once ROOT . '/engine/views/invoice/index.php';
        return true;
    }

}
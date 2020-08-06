<?php
return [
    // Admin

    'invoice/([0-9]+)' => 'invoice/viewInvoice/$1',
    'invoice' => 'invoice/index',
    'admin/dashboard' => 'admin/dashboard',
    'admin/logout' => 'admin/logout',
    'admin/delete/([0-9]+)' => 'admin/delete/$1',
    'admin/deleteInvoice' => 'admin/deleteInvoice',
    'admin/edit/([0-9]+)' => 'admin/edit/$1',
    'admin/editInvoice' => 'admin/editInvoice',
    'admin/create' => 'admin/create',
    'admin/createInvoice' => 'admin/createInvoice',
    'admin/invoice' => 'admin/invoice',
    'admin' => 'admin/login',
    '' => 'front/index'
];

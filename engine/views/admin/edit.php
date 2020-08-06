<?php include ROOT . '/engine/views/layout/admin/header.php'; ?>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/admin/logout">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include ROOT . '/engine/views/layout/admin/sidebar.php'; ?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Invoice Edit</h1>
                <p><?php if (!empty($msg)) echo $msg['error']?></p>
                <div class="invoice__content">
                    <div class="invoice__create" style="border: 1px solid #eeeeee;padding: 1rem;">
                        <form action="/admin/editInvoice" method="post">
                            <input type="hidden" value="<?php echo $res['id'];?>" name="id">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Number:</label>
                                    <div class="input-group">
                                        <input type="text" value="<?=$res['number'];?>" autocomplete="off" name="name" class="form-control" id="name">
                                        <button class="input-group-text" id="setting" type="button">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6" id="date">
                                    <label for="invoice">Invoice Date:</label>
                                    <div class="input-group">
                                        <input type="text" value="<?=$res['invoiceDate'];?>" autocomplete="off"  name="invoice" class="form-control" id="invoice">
                                        <button class="input-group-text" id="toggle" type="button">
                                            <i class="fa fa-calendar-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" id="date2">
                                    <label for="supply">Supply Date:</label>
                                    <div class="input-group">
                                        <input type="text" value="<?=$res['supplyDate'];?>" autocomplete="off"  name="supply" class="form-control" id="supply">
                                        <div class="input-group-append">
                                            <button class="input-group-text" id="toggle2" type="button">
                                                <i class="fa fa-calendar-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="comment">Comment:</label>
                                    <textarea name="comment" id="comment" class="form-control"><?=$res['comment'];?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right mt-3" id="save">Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; The Froot 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php include ROOT . '/engine/views/layout/admin/footer.php'; ?>

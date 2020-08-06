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
                <h1 class="mt-4">Invoice</h1>
                <div class="invoice__action mb-3">
                    <a href="/admin/create" class="btn btn-primary add">Add new</a>
                </div>
                <div class="invoice__content">
                    <table class="table table-hover">
                        <thead class="table-secondary">
                        <tr>
                            <th>Create</th>
                            <th>№</th>
                            <th>Supply</th>
                            <th>Comment</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($arr as $item):?>
                            <tr id="<?php echo $item['id'];?>" style="cursor: pointer;">
                                <td><?php echo $item['invoice']?></td>
                                <td><?php echo $item['name']?></td>
                                <td><?php echo $item['supply']?></td>
                                <td><?php echo $item['comment']?></td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="/admin/edit/<?php echo $item['id']?>" class="btn btn-success update">Edit</a>
                                        <?php if($detail['role'] == 'administrator'):?>
                                            <a href="/admin/deleteInvoice/<?php echo $item['id']?>" class="btn btn-danger delete">Delete</a>
                                        <?php endif;?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
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

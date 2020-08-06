<?php include ROOT . '/engine/views/layout/header.php';?>
<div class="container">
    <?php include ROOT . '/engine/views/layout/navbar.php';?>
</div>
<div class="container">
    <div class="row" style="padding-left: 1rem;">
        <div class="col-md-12 col-sm-12">
            <h3 class="invoice__header mt-5 ml-3">Invoices</h3>
            <div style="background: #ffffff;padding: .5rem 1rem;">

                <div class="invoice__content">
                    <table class="table table-hover">
                        <thead class="table-secondary">
                        <tr>
                            <th>Create</th>
                            <th>№</th>
                            <th>Supply</th>
                            <th>Comment</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($arr as $item):?>
                            <tr>
                                <td><?=$item['invoice'];?></td>
                                <td><?=$item['name'];?></td>
                                <td><?=$item['supply'];?></td>
                                <td><?=$item['comment'];?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/engine/views/layout/footer.php';?>

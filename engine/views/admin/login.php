<?php include ROOT . '/engine/views/layout/header.php'; ?>
    <div class="container">
        <h2 class="title mt-5" style="display:flex;justify-content: center;">Login</h2>
        <?php if(isset($_POST['msg'])):?>
        <?php endif;?>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="/admin/login" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php include ROOT . '/engine/views/layout/footer.php';?>
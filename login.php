<?php
$pageTitle = 'login';
require_once 'fragmenrts/header.php';
?>
<body>
<div class="container">
    <?php
        if (isset($_GET['errorMessage'])) {
    ?>
    <div class="alert alert-danger">
        <?=$_GET['errorMessage'] ?>
    </div>
    <?php
        }
    ?>
    <form action="processLogin.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input
                    name="email"
                    type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="file">Picture</label>
            <input type="file" name="picture" class="form-control" id="file" placeholder="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<?php
require_once 'fragmenrts/footer.php';
?>
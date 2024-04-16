<?php
include "nav.php";
include "footer.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .main {
        margin-left: 500px;
    }
    </style>
</head>

<body>
<div class="main">
        <h2 class="mt-5">User Role</h2>
        <form method="POST">
            <div class="col-5">
                <label for="inputrole" class="form-label">Role</label>
                <input type="email" class="form-control" id="inputrole" placeholder="Role" name="role">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary  mt-2" name="submit">Save</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
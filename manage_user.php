<?php
include "dbconn.php";
include "nav.php";
include "footer.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .user_button {
        float: right;
        margin-top: 20px;
        margin-right: 10px;
    }
    </style>
</head>
<body>
    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success user_button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create user
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="adduser" method="POST">
                            <div class="form-group">
                                <label for="completefname">First Name</label>
                                <input type="text" class="form-control" id="completefname"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="completelname">Last Name</label>
                                <input type="text" class="form-control" id="completelname"
                                    placeholder="Last Name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="completemail">Email</label>
                                <input type="text" class="form-control" id="completemail"
                                    placeholder="email">
                            </div>
                            <div class="form-group mt-3">
                                <label for="completerole">Role</label>
                                <input type="text" class="form-control" id="completelrole"
                                    placeholder="Role">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container">
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>navneet</td>
                <td>kaur</td>
                <td>nk6914433@gmail.com</td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
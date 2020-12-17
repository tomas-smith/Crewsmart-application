<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>

    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="main.php">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="process.php">List</a>
            </li>

        </ul>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>




    <form action="process.php" method="post" enctype="multipart/form-data" id="myForm">
        <!--FIRST TABLE (Name, Surname, Nationality) -->
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" name="surname">
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" name="nationality">
        </div>

        <!--SECOND TABLE (Phone, email, address) -->
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" name="phone_number">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="Emailr">
        </div>
        <div class="form-group">
            <label for="Address_1">Address 1</label>
            <input type="text" class="form-control" name="Address_1">
        </div>
        <div class="form-group">
            <label for="Address_2">Address 2</label>
            <input type="text" class="form-control" name="Address_2">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit_query" value="Publish" id="submit_query">

        </div>
    </form>
</body>
<footer class="navbar fixed-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 ">Trademark</div>

            <div class="col-lg-8 ">© 2020 Copyright:</div>






        </div>
    </div>
    <!--Scripts -->
    <script>
        $(document).ready(function() {

            $("#submit_query").click(function() {
                $.ajax({
                    url: "/process.php",
                    method: "post",
                    async: false,
                    data: {
                        refresh: "very yes"
                    }
                });

                //  $("#myForm").submit(); // Submit the form
            });
        });
    </script>
    <!--Scripts -->
</footer>

</html>
<!-- Footer -->

<!-- Footer -->
<?php 
if (isset($_POST['first_name'])){
    print_r($_POST);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <table class="table table -bordered table hover table-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Nationality</th>
                <th>See more</th>
            </tr>
        </thead>
        <tbody>
        <td>10</td>
        <td>Tomas</td>
        <td>BOOTSTRAP tutorial</td>
        <td >
                    <div class="dropdown">
                        <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-cog"></i>
                        </a>    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </td>

        </tbody>

    </table>

</body>
<footer class="navbar fixed-bottom">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 ">Trademark</div>
        
        <div class="col-lg-8 ">© 2020 Copyright:</div>
        
        
  
    

    
    </div>
    </div>
    
</footer>
</html>
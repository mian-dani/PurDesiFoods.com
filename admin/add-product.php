
<?php 

if(isset($_POST['submit'])){
    require "connection.php";

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    
    $q = "INSERT INTO products (title , price, description) VALUES ('{$title}', '{$price}', '{$desc}' )";
    $result = mysqli_query($conn, $q) or die("Query failed to insert product details in database") ;


}



?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body class="d-flex justify-content-center align-items-center bg-light">
<section class="d-flex justify-content-center align-items-center bg-secondary rounded-3 h-75 w-50">
        <div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <input class="my-2 rounded-2 w-100" style="height: 40px" type="text" placeholder="Title" name="title" /> <br>
                <textarea class="my-2 rounded-2 w-100 h-25" name="desc" id="" placeholder="Enter Description of Product"> </textarea> <br>
                <input class="my-2 rounded-2 w-100" style="height: 40px" type="number" placeholder="Price" name="price" id=""> <br>
                <input class="my-2" type="file" name="img"> <br>
                <button class="my-2 btn btn-danger rounded-2 w-100" name="submit" style="height: 40px" class="button">Submit</button>
            </form>
        </div>
    </section>
</body>
   
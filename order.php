<?php 
if (isset($_POST['submit'])){
    require "connection.php";
    $uname = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $qty = mysqli_real_escape_string($conn, $_POST['quantity']);

    $q = "INSERT INTO orders (name, address, phone, qty) VALUES ('{$uname}','{$address}','{$phone}','{$qty}')";
    $result = mysqli_query($conn, $q) or die("Query failed to insert order into DB");
}
?>


<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body class="d-flex justify-content-center align-items-center bg-light">
<section class="d-flex justify-content-center align-items-center bg-secondary rounded-3 h-75 w-50">
        <div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <input class="my-2 rounded-2 w-100" style="height: 40px" type="text" placeholder="Name" name="name" /> <br>
                <input class="my-2 rounded-2 w-100" style="height: 40px" name="address" id="" placeholder="Parcel Address"> </input> <br>
                <input class="my-2 rounded-2 w-100" style="height: 40px" type="number" placeholder="Phone (03001234567)" name="phone" id=""> <br>
                <input class="my-2 rounded-2 w-100" style="height: 40px" type="number" placeholder="Qty (1,2,3...)" name="quantity" id=""> <br>
                <button class="my-2 btn btn-danger rounded-2 w-100" name="submit" style="height: 40px" class="button">Submit</button>
            </form>
        </div>
    </section>
</body>


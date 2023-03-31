
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body class="d-flex justify-content-center align-items-center">
    

<section class="h-75 w-50">
    <div>
            <?php 
            include "connection.php";
            $q= "SELECT * FROM orders";
            $result = mysqli_query($conn,$q);
            if(mysqli_num_rows($result) > 0){    
        ?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Order id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Quantity</th>
            <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
                <?php
                while($data = mysqli_fetch_assoc($result)){
                ?>
            <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['phone'] ?></td>
            <td><?php echo $data['qty'] ?></td>
            <td><?php echo $data['address'] ?></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
        <?php }?>
    </div>
</section>

</body>



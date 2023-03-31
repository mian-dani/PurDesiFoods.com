<body class="">
  

  <!-- < products gallery section > -->
  <section class="py-5 text-dark bg-light">
    <h1 class="" style="text-align: center"> Products </h1>
        <div class="container text-center ">
            <div class="row mt-5">
             <?php 
               include "connection.php";

               $q="SELECT * FROM products";
               $result= mysqli_query($conn,$q) or die("Query failed to retreive products");
               if(mysqli_num_rows($result) > 0){
                while($data = mysqli_fetch_assoc($result)){

              ?>
              <div class="col">
                <div class="card my-2" style="width: 18rem">
                    <img class="card-img-top" src="images/honey.png" alt="" >
                  <div class="card-body">
                    <h5><?php echo $data['title']; ?></h5>
                    <h5 class="text-success">Rs: <?php echo $data['price']; ?></h5>
                    <p><?php echo $data['description']; ?></p>
                    <a class="btn btn-primary" href="order.php?id=<?php echo $data['id']; ?>">Buy Now</a>
                  </div>
                </div>
              <!-- <div class=" col my-2">
                <div class="card">
                    <img class="bg-light rounded-3 p-2" src="images/honey.png" alt="" style="width: 18rem">
                  <div style="width: 18rem" class=" card-body p-2">
                    <h5><?php echo $data['title']; ?></h5>
                    <h5 class="text-success">Rs: <?php echo $data['price']; ?></h5>
                    <p><?php echo $data['description']; ?></p>
                    <a class="btn btn-primary" href="order.php?id=<?php echo $data['id']; ?>">Buy Now</a>
                  </div>
                </div> -->
                <!-- <div class="card mt-5" style="width: 18rem;">
                    <img src="images/honey.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $data['title']; ?></h5>
                      <p class="card-text"><?php echo $data['description']; ?></p>
                      <a href="#" class="btn btn-primary"><?php echo $data['price']; ?></a>
                    </div>
                    
                </div> -->
                </div>
              
              
            <?php 
            }
          }
            ?>
            </div>
        </div>
    </section>
     <!-- /< peoducts gallery section > -->


     </body>
<?php
 

?>



  <!-- < products gallery section > -->
  <section class="pb-5">
    <h1> Products </h1>
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
                <div>
                    <img class="bg-light rounded-3 p-2" src="images/honey.png" alt="" style="width: 18rem">
                  <div>
                    <h5><?php echo $data['title']; ?></h5>
                    <p><?php echo $data['description']; ?></p>
                    <a class="btn btn-primary" href=""><?php echo $data['price']; ?></a>
                  </div>
                </div>
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
<?php require "include/header.php";
require_once "config.php";


 

$select = $conn->query("SELECT * FROM images");
$select->execute();

$rows = $select->fetchAll(PDO::FETCH_OBJ);

?>


  <section class="showcase">
    <div class="container grid">
      <div class="showcase-text">
        <h1>Easy shopping</h1>
        <p>Shop with ease on our platform</p>
        <a class="btn btn-outline" href="detail.php">Contact us</a>
      </div>
      
      <div class="showcase-form card">
       <h2>Request for our services</h2>
       <form action="" method="get" accept-charset="utf-8">
         
         <div class="form-control">
           <input type="text" name="name" id="" placeholder="Name" required />
         </div>
         
         <div class="form-control">
           <input type="text" name="company" id="" placeholder="Company Name" required />
         </div>
         
          <div class="form-control">
           <input type="email" name="email" id="" placeholder="Email" required />
         </div>
         <input type="submit" class="btn btn-primary" name="" id="" value="send" />
       </form>
      </div>
    </div>
  </section>
  
  <!---stats---->
  
  <section class="stats">
    <div class="container">
      <h3 class="stats-heading text-center my-1">
        welcome to the biggest platform  shopping website where you can all your used and new products to student both on campus and off campus
      </h3>
      
      <div class="grid grid-3 text-center my-4">
        
        <div>
          <i class="fa fa-server fa-2x"></i>
        <h3>10, 345, 405</h3>
        <p class="text-secondary">Shop now for all products</p>
        </div>
        
        
        <div> 
         <i class="fa fa-upload fa-2x"></i>
        <h3>987 TB</h3>
        <p class="text-secondary">Enjoy endless deal and discount</p>
        </div>
        
        <div> 
         <i class="fa fa-project-diagram fa-2x"></i>
        <h3>2, 365, 265</h3>
        <p class="text-secondary">Discover the online shopping world</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="cli">
    <div class="container grid">
      <img src="images/ecom 2.jpg" alt="" />
      <div class="card">
        <h3>Easy to use, cross platform </h3>
      </div>
      <div class="card">
        <h3>Shop within seconds</h3>
      </div>
    </div>
  </section>

<section class="cloud bg-primary my-2 py-2">
    <div class="continer grid">
      <div class="text-center">
          <h2 class="lg">E-commerce platform</h2>
          <p class="lead my-1">The best E-commerce platform that helps to you sell online in minutes</p>
          <a href="tel:07059210213" class="btn btn-dark">Get in touch with the admin</a>
      </div>
      <img src="images/ecom.jpg" alt="" />

    </div>
</section>

<section class="languages">
  <h2 class="md text-center my-2">
  Available products and services
  </h2>
  
  <div class="container flex">
  <?php
   foreach($rows as $row) : ?>
    <div class="card">
      <h4>  Item:
        <?php echo $row->title ?> </h4>
      <img src="img/<?php echo $row->img ?>" width="110" height="120" alt="" />
      <a  href="detail.php?id=<?php echo $row->id ?>">
        <h5 class="btn btn-primary">
          view more
        </h5>
      </a>
      <h5 class="">
      Owner:
        <?php echo $row->username ?>
      </h5>

    </div>
    <?php endforeach;  ?>
   
      
    <!-- <div class="card">
      <h4>Rubby</h4>
      <img src="images/ruby.png" alt="" />
    </div> -->


    <!-- <div class="card">
      <h4>Php</h4>
      <img src="images/node.png" alt="" />
    </div> -->

    <!-- <div class="card">
      <h4>scala</h4>
      <img src="images/scala.png" alt="" />
    </div> -->

    <!-- <div class="card">
      <h4>scala</h4>
      <img src="images/scala.png" alt="" />
    </div> -->

    <!-- <div class="card">
      <h4>scala</h4>
      <img src="images/scala.png" alt="" />
    </div> -->

  </div>
</section>  

<!-------Footer-->
<?php require "include/footer.php" ?>
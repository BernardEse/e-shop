<?php require "include/header.php" ?>
<?php require "config.php"; 

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $select = $conn->query("SELECT * FROM images WHERE id='$id'");

  $select->execute();
  $row = $select->fetch(PDO::FETCH_OBJ);
}


?>
  <!-------showcase-->
 
  <section class="stats">
    <div class="container">
      <h3 class="stats-heading text-center my-1">
        welcome to the best platform of building application of all
        type with modern architecture and scaling 
      </h3>
      
      <div class="grid grid-3 text-center my-4">
        
        <div><i class="fas fas-server fa-3x"></i>
        <h3>10, 345, 405</h3>
        <p class="text-secondary">Deployment</p>
        </div>
        
        
        <div> 
         <i class="fas fas-upload fa-3x"></i>
        <h3>987 TB</h3>
        <p class="text-secondary">Published</p>
        </div>
        
        <div> 
         <i class="fas fas-project-diagram fa-3x"></i>
        <h3>2, 365, 265</h3>
        <p class="text-secondary">Project</p>
        </div>
      </div>
    </div>
  </section>
  <!---stats---->
  <section class="cli">
    <div class="container grid">
      <img src="images/new.jpg" alt="" />
      <div class="card">
        <h3>Easy to use, cross platform CLI </h3>
      </div>
      <div class="card">
        <h3>Deploy in seconds</h3>
      </div>
    </div>
  </section>


<section class="cloud bg-primary my-2 py-2">
    <div class="continer grid">
       <img src="img/<?php echo $row->img ?>" alt="" />
      <div class="text-center">
          <h2 class="lg"><?php echo $row->title ?></h2>
          <p class="lead my-1"><?php echo $row->description ?></p>
          <a href="payment.php" class="btn btn-dark">Read More</a>
      </div>
      <!-- <img src="images/medai 2.jpg" alt="" /> -->

    </div>
</section>


<!-------Footer-->
<?php require "include/footer.php" ?>
<?php
require_once 'include/header.php';
require_once 'config.php';
?>

<?php 

if (isset($_POST['submit'])) {
   if ($_POST['title'] == '' OR $_POST['description'] == '') {
   echo 'one or more inputs are empty';
   }else {
   $title = $_POST['title'];
    $description = $_POST['description'];
    $img =  $_FILES['img']['name'];
    $username = $_POST['username'];
  

     $dir = "img/" . basename($img);

     $insert = $conn->prepare("INSERT INTO images (title, description, img, username) VALUES (:title, :description, :img, :username)"); 
       
     $insert->execute([
        ':title' => $title,
        ':description' => $description,
        ':img' => $img,
        ':username' =>  $username  
    ]);

    if (move_uploaded_file($_FILES['img']['tmp_name'], $dir)) {
      header("location:index.php");
    }

   }
}


?>



<style>
      /* html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      } */
      body, div, h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
      p {
      font-size: 12px;
      }
      hr {
      color: #a9a9a9;
      opacity: 0.3;
      }
      .main-block {
      max-width: 340px; 
      min-height: 460px; 
      padding: 10px 0;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
      form {
      margin: 0 30px;
      }
      .account-type, .gender {
      margin: 15px 0;
      }
      input[type=radio] {
      display: none;
      }
      label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
      label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      input[type=text], input[type=password] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 0 0 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      input[type=password] {
      margin-bottom: 15px;
      }
      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <h1>Create here</h1>
      <form action="create.php" method="POST" enctype="multipart/form-data">
        <hr>
        <div class="account-type">
          <input type="radio" value="none" id="radioOne" name="account" checked/>
          <label for="radioOne" class="radio">Personal</label>
          <input type="radio" value="none" id="radioTwo" name="account" />
          <label for="radioTwo" class="radio">Company</label>
        </div>
        <hr>
        <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
        <input type="text" name="title" id="name" placeholder="Title" required/>

        <label id="icon" for="name"><i class="fas fa-user"></i></label>
        <input type="text" name="description" id="name" placeholder="Description" required/>

        <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
        <input type="file" name="img" id="name" placeholder="Image" required/>

        <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
        <input type="text" name="username" id="name" placeholder="Name" required/>

        <hr>
        <div class="gender">
          <input type="radio" value="none" id="male" name="gender" checked/>
          <label for="male" class="radio">Male</label>
          <input type="radio" value="none" id="female" name="gender" />
          <label for="female" class="radio">Female</label>
        </div>
        <hr>
        <div class="btn-block">
          <p>By clicking Register, you agree on our <a href="">Privacy Policy for Bernard</a>.</p>
          <button type="submit" name="submit" href="/">Submit</button>
        </div>
      </form>
    </div>



  <!--  -->
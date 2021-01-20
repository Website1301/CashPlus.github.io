<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.mySlides {display:none;}
body {font-family: Times New Roman;}
.navbar {
  width: 100%;
 background-color:#e6ffff;
  overflow: auto;
}
.navbar a{
   float:right;
   padding:16px;
   color:#000066;
   text-decoration:none;
   font-size: 20px;
}
.navbar a:hover{
   background-color:#0000cc:
}

@media screen and (max-width:200px)
.navbar a{
   float:none;
   display:block;
 }
}
</style>
</head>
<style>
body{
  background-image: url('https://media.istockphoto.com/photos/stack-of-coins-on-wood-desks-and-loft-wall-backgrounds-with-sunlight-picture-id1254701717?k=6&m=1254701717&s=170667a&w=0&h=Ol0Axcr6ewYCX9XrIZnDIQF7g8v3ATNZSChxyGDLgmU=');
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size:100% 100%;
}
</style>
<body>
<h4 style ="color:Black;text-align:left;font-family: Times New Roman;">Cash Plus<i class="fa fa-university"></i></h1>
<div class="navbar">
<a href="transactionhistory.php"><b>Transaction History</b></a>
<a href="transfermoney.php"><b>Transfer Money</b></a>
 <a href="createuser.php"><b>Create User</b></a>
<a href="index.php"><b>Home</b></a>
</div>  
<style>
table {
  font-family: Tmes New Roman, sans-serif;
  border-collapse: collapse;
  width: 65%;
  color:White;
}

td, th {
  border: 1px solid #e6ffff;
  text-align: center;
  padding: 4px;
}

tr:nth-child{
  background-color:#ffeee6;
} 

</style>
<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
       <h2 style ="color:#990000;text-align:left;font-family: Times New Roman;"><b>Transfer Money</b></h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2"><h5 style="color:DarkRed;"><b> ID</h5></b></th>
                            <th scope="col" class="text-center py-2"><h5 style="color:DarkRed;"><b>Name</h5></b></th>
                            <th scope="col" class="text-center py-2"><h5 style="color:DarkRed;"><b>E-mail</h5></b></th>
                            <th scope="col" class="text-center py-2"><h5 style="color:DarkRed;"><b>Balance</h5></b></th>
                            <th scope="col" class="text-center py-2"><h5 style="color:DarkRed;"><b>Operation</h5></b></th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selectuserdetails.php"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
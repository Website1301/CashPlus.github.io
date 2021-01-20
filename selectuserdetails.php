

<!DOCTYPE html>
<html>
<head>
<title>Cash Plus</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
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
</head>
<body>
<h2 style ="color:#990000;text-align:left;font-family: Times New Roman;"><b>Transaction</b></h2>
<section>
<table>
  <tr>
    <th><h5 style="color:DarkRed;"><b>Id</h5></b></th>
    <th><h5 style="color:DarkRed;" ><b>Name</h5></b></th>
    <th><h5 style="color:DarkRed;"><b>Email</h5></b></th>
    <th><h5 style="color:DarkRed;"><b>Balance</h5></b></th>   
  </tr>
<tr>
    <td>              </td>
    <td>              </td>
    <td>              </td>
    <td>              </td>
  </tr>
</body>
</table>
</section>
<br>
 
<style>
body {font-family: TimesNewRoman;}
* {box-sizing: border-box;}
/* Add styles to the form container */
.container {
  position: left;
  right: 0;
  margin: 20px;
  max-width: 950px;
  padding: 16px;
  background-color: AntiqueWhite;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 15px;
  border: 1px solid #800000;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 4px;
  margin-bottom: 10px;
  resize: horizontal;
   background-color: #ffeee6;
}
.container1 {
  position: center;
  right: 0;
  text-align: center;  
}
input[type=submit] {
  background-color: White;
  color: Marroon;
  padding: 12px 20px;
  border-color: DarkRed;
  border-radius: 4px;
  cursor: pointer;
  position:center; 
}

input[type=submit]:hover {
  background-color: White;
    position:center;
}

.container {
  border-radius: 5px;
  background-color:transparent;
  padding: 20px;
}
</style>
</head>
<body>
<body style="background-color:AntiqueWhite;">
<body>
<div class="container">
  <form action="transactionhistory.php">
<label for="Transfer to"><h2 style ="color:White;text-align:left;font-family: Times New Roman;"><b>Transfer To:</b></h2></label>
    <select id="Choose" style ="color:#990000;font-family: Times New Roman;" name="Choose">
       <h4><option value="Choose" style ="color:#990000;font-family: Times New Roman;">Choose </h4></option>
       <h4><option value="Avani(20000)" style ="color:#990000;font-family: Times New Roman;">Avani(20000)</h4></option>
       <h4><option value="Kaviya(30000)" style ="color:#990000;font-family: Times New Roman;">Kaviya(30000)</h4></option>
       <h4><option value="Jennifer(40000)" style ="color:#990000;font-family: Times New Roman;">Jennifer(40000)</h4></option>    
       <h4><option value="Juhi(50000)" style ="color:#990000;font-family: Times New Roman;">Juhi(50000)</h4></option>
       <h4><option value="Piyush(60000)" style ="color:#990000;font-family: Times New Roman;">Piyush(60000)</h4></option>
       <h4><option value="Soumitra(40000)" style ="color:#990000;font-family: Times New Roman;">Soumitra(40000)</h4></option>
       <h4><option value="Reehan(70000)" style ="color:#990000;font-family: Times New Roman;">Reehan(70000)</h4></option>
        <h4><option value="David(30000)" style ="color:#990000;font-family: Times New Roman;">David(30000)</h4></option>
        <h4> <option value="Nidhi(20000)" style ="color:#990000;font-family: Times New Roman;">Nidhi(20000)</h4></option>
        <h4> <option value="Soham(50000)" style ="color:#990000;font-family: Times New Roman;">Soham(50000)</h4></option>
    </select>
   <label for="Amount"><h2 style ="color:White;text-align:left;font-family: Times New Roman;"><b>Amount</b></h2></label>
    <input type="text" id="Amt" name="Amount"  placeholder="Amount" style ="color:#990000;font-family: Times New Roman;"
 >
<br>
<br>
<div class="container1">
<h4><b><a href="transactionhistory.php"><input type="Submit" value="Transfer" style ="color:#990000;text-align:center;font-family: Times New Roman;"</b></h4></a>
  </form>
</div>
</style>
</body>
</head>
</html>
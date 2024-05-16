<?php include("db.php");

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMSYSTEM</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
<form method="POST" action="#">
    <div class="center">
        <h1>Employee Data Entry Automation Software</h1>
       
            <div class="form">

                <input type="text" name="id" placeholder="Search ID" class="textfield">

                <input type="text" name="name" placeholder="Employee Name" class="textfield">


                <select name="gender" class="textfield">
                    <option value="Not Select">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>


                <input type="text" name="email" placeholder="Email" class="textfield">


                <input type="text" name="salary" placeholder="Employee Salary" class="textfield">

                <select name="department" class="textfield">
                    <option value="Not Select">Select Department</option>
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Team Manager">Team Manager</option>
                    <option value="Sales Manager">Sales Manager</option>
                    <option value="Area Manager">Area Manager</option>
                </select>
                

                <textarea name="address" class="textfield ">Address</textarea>
                <input type="Submit" value="Search" class="btn" style="background-color: gray;">
                <input type="Submit"  name="save" value="save" class="btn" style="background-color: green;">
                <input type="Submit" value="Modify" class="btn">
                <input type="Submit" value="Delete" class="btn" style="background-color: red;">
                <input type="Submit" value="Clear" class="btn" style="background-color: blue;">

            </div>
      
    </div>

    </form>

</body>

</html>

<?php
    //variable declare
    $name=$gender=$salary=$email=$department=$address="";

if(isset($_POST["save"])){
   // $id=$_POST["id"];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $salary=$_POST['salary'];
    $department=$_POST['department'];
    $address=$_POST['address'];

    $sql="INSERT INTO employee(name,gender,email,salary,department,address)

     VALUES ('$name',' $gender','$email','$salary','$department','$address')";
     $result=mysqli_query($conn,$sql);

     if($result){
        echo "data is insert into database";
     }else{
        echo "data is  not insert into database";
     }



}

?>
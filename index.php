<?php include("db.php");

 ?>

<?php
//search logic

if(isset($_POST["searchdata"])){

    $search=$_POST['search'];

    $sql="SELECT * FROM employee  WHERE id='$search'";
    $data=mysqli_query($conn,$sql);

   // $row=mysqli_num_rows($data);

       $result= mysqli_fetch_assoc($data);
      // $name=$result["name"];
     // echo $result['name'];
     // echo $name;

}


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

    <div class="center">
        <form method="POST" action="#">
            <h1>Employee Data Entry Automation Software</h1>

            <div class="form">

                <input type="text" name="search" placeholder="Search ID" class="textfield"
                    value="<?php if(isset($_POST['searchdata'])){ echo $result['id']; }?>">

                <input type="text" name="name" placeholder="Employee Name" class="textfield"
                    value="<?php if(isset($_POST['searchdata'])){ echo $result['name']; }?>">


                <select class="textfield" name="gender">
                    <option value="Not Selected">Select Gender</option>
                    <option value="Male" <?php 
                    if($result['gender'] == 'Male') 
                    {
                        echo "selected";
                    }
                    ?>>Male</option>


                    <option value="Female" <?php 
                    
                    if($result['gender']=='Female') 
                    {
                        echo"selected";
                    }
                    ?>>Female</option>
                    <option value="Other" <?php 
                    if($result['gender'] == 'Other'){
                        echo "selected";
                    }
                    ?>>Other</option>
                </select>


                <input type="text" name="email" placeholder="Email" class="textfield" value="<?php if(isset($_POST['searchdata'])){
                    echo $result['email'];}?>">


                <input type="text" name="salary" placeholder="Employee Salary" class="textfield"
                    value="<?php if(isset($_POST['searchdata'])){ echo $result['salary']; }?>">

                <select name="department" class="textfield">
                    <option value="Not Select">Select Department</option>
                    <option value="Software Engineer" <?php if($result['department'] == 'Software Engineer') 
                    {
                        echo "selected";
                    }
                    ?>>Software Engineer</option>
                    <option value="Team Manager" <?php 
                     if($result['department'] == 'Team Manager') 
                    {
                        echo "selected";
                    }
                    ?>>Team Manager</option>
                    <option value="Sales Manager" <?php if($result['department']=='Sales Manager') 
                    {
                        echo"selected"
                    ;}
                    ?>>Sales Manager</option>
                    <option value="Area Manager" <?php 
                    if($result['department']=='Area Manager') 
                    {
                        echo"selected";
                    }
                    ?>>Area Manager</option>
                </select>


                <textarea name="address"
                    class="textfield "> <?php if(isset($_POST['searchdata'])){ echo $result['address']; }?> </textarea>
                <input type="Submit" name="searchdata" value="Search" class="btn" style="background-color: gray;">
                <input type="Submit" name="save" value="Save" class="btn" style="background-color: green;">
                <input type="Submit"  value="Modify" class="btn">
                <input type="Submit" name="delete"  value="Delete" class="btn" style="background-color: red;">
                <input type="Submit" value="Clear" class="btn" style="background-color: blue;">

            </div>

        </form>

    </div>



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

<?php
// data delete query logic
if(isset( $_POST["delete"])){

    $id=$_POST['search'];

    $sql= "DELETE FROM employee Where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "delete data from databaes";
    }else{

        echo "data is not delete from database";
    }
}


?>
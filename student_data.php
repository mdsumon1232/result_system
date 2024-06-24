<?php
 require('connection.php');

 $error_message = "";
 $success_message = "";

 if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];

    if(empty($full_name) || empty($roll) || empty($class) || empty($father_name) || empty($mother_name)){
        $error_message = "Fill all the flied";
    }
    else{
        $insert_data = "INSERT INTO students_details (full_name , roll	, class	 , father_name , mother_name)
                        VALUES ('$full_name' , '$roll' , '$class' , '$father_name' , '$mother_name') ";

        $insert_data_query = $conn -> query($insert_data);

        if($insert_data_query){
            $success_message = "Data insert successful";
        }
        else{
            echo "something wrong";
        }

}
    
 }
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student data entry</title>
</head>
<body>
    <?php require('header.php') ?>
  <div class="container mx-auto h-screen flex items-center justify-center">
  <form action="student_data.php" method="post" class="border lg:w-1/3 w-3/4 p-5 bg-[#03AED2]  rounded">
        <h2 class="text-center text-2xl my-5" >Student Data Entry</h2>
        <div class="mb-3 w-full">
        <label for="full_name" class="block text-xl ps-3">Full Name</label>
        <input type="text" placeholder="Full Name" name="full_name" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
        </div>
        <div class="mb-3">
            <label for="roll" class="block text-xl ps-3">Roll</label>
            <input type="number" placeholder="Roll" name="roll" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
        </div>
        <div class="mb-3">
            <label for="class" class=" text-xl ps-3 me-5">Class:</label>
            <select name="class" id="">
                <option value="six">Six</option>
                <option value="seven">Seven</option>
                <option value="eight">Eight</option>
                <option value="Nine">Nine</option>
                <option value="Ten">Ten</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="father's_name" class="block text-xl ps-3">Father's Name</label>
            <input type="text" placeholder="Father's Name" name="father_name" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
        </div>
        <div class="mb-3">
            <label for="mother's_name" class="block text-xl ps-3">Mother's Name</label>
            <input type="text" placeholder="Mother's Name" name="mother_name" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
        </div>
          <div class="">
          <?php
             echo isset($_POST['submit']) ? "<p class='text-xl text-[#FFA62F]'>" . $error_message . "</p>" : "";
             echo isset($_POST['submit']) ? "<p class='text-xl text-green-700'>" . $success_message . "</p>" : "";
            ?>
          </div>
        <input type="submit" name="submit" value="Submit" class="bg-[#FFA62F] w-64 h-10 rounded cursor-pointer my-5 block mx-auto text-xl">

    </form>
  </div>
</body>
</html>
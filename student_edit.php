<?php
    require('connection.php');
   
    $update_id = "";

    if(isset($_GET['id'])){
        $update_id = $_GET['id'];
    }
   
    $select_details = "SELECT * FROM students_details WHERE student_id = '$update_id' ";

    $query = $conn -> query($select_details);

    $fetch_data = mysqli_fetch_array($query);
    $id = $roll = $class = $father_name = $mother_name = "";

    if($fetch_data){
        $full_name = $fetch_data['full_name'];
    $id = $fetch_data['student_id'];
    $roll = $fetch_data['roll'];
    $class = $fetch_data['class'];
    $father_name = $fetch_data['father_name'];
    $mother_name = $fetch_data['mother_name'];
    }


//  receive data from form

if(isset($_POST['update'])){
    $full_name = $_POST['full_name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];


// $update = "UPDATE students_details SET full_name = '$full_name' , roll = '$roll' , class = '$class' , father_name = '$father_name',
//            mother_name = '$mother_name' WHERE student_id = '$id'";

//            $query = $conn -> query($update);
//            if($query){
//             echo "data update successful";
//            }
//            else{
//             echo "something wrong";
//            }



}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student data edit</title>
</head>
<body>
    <?php require('header.php') ?>
  <div class="container mx-auto h-screen flex items-center justify-center">
  <form action="student_edit.php" method="post" class="border lg:w-1/3 w-3/4 p-5 bg-[#03AED2]  rounded">
        <h2 class="text-center text-2xl my-5" >Student Data Edit</h2>
        <div class="mb-3 w-full">
        <label for="full_name" class="block text-xl ps-3">Full Name</label>
        <input type="text" placeholder="Full Name" value="<?php echo $full_name ?>"  name="full_name" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
        </div>
        <div class="mb-3">
            <label for="roll" class="block text-xl ps-3">Roll</label>
            <input type="number" placeholder="Roll" value="<?php echo $roll ?>" name="roll" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
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
            <input type="text" placeholder="Father's Name" value="<?php echo $father_name ?>" name="father_name" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
        </div>
        <div class="mb-3">
            <label for="mother's_name" class="block text-xl ps-3">Mother's Name</label>
            <input type="text" placeholder="Mother's Name" value="<?php echo $mother_name ?>" name="mother_name" class="w-full mt-3 h-10 p-2 rounded border border-black outline-none">
        </div>
          <div class="">
          
          </div>
        <input type="submit" name="update" value="Update" class="bg-[#FFA62F] w-64 h-10 rounded cursor-pointer my-5 block mx-auto text-xl">
   
    </form>
  </div>
</body>
</html>
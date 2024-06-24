<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <script src="https://cdn.tailwindcss.com"></script>
<!-- php code start -->
 <?php
 require('connection.php');
 $error_message = "";
 if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $has_password = md5($password);
   

    if(empty($email) && empty($password)){
        $error_message = "Fill the flied";
    }
    else{


        $select_data = "SELECT * FROM user_details WHERE email = '$email' AND password = '$has_password' ";
    $select_data_query = $conn -> query($select_data);
    if($select_data_query -> num_rows > 0){
        header('location:dashboard.php');
    }
    else{
        $error_message = "password does not match";
    }

    }


 }

?>
<!-- php code start -->
</head>
<body class="bg-[#F6F5F2]">
    <div class="container flex items-center justify-center h-screen mx-auto border">
        <form action="index.php" method="post" class="border flex flex-col items-center lg:w-1/3 w-3/4 p-5 bg-[#03AED2]  rounded">
            <h1 class="text-center text-2xl text-white my-2">Admin Login</h1>
            <input type="email" placeholder="admin email" name="email" require class="border border-black h-10 my-2 rounded p-2 w-full ">
            <input type="password" placeholder="password" name="password" require class="border border-black h-10 my-2 rounded p-2  w-full">
             <div class=" w-full my-2">
                <?php
                 echo isset($_POST['login']) ? "<p class='text-xl text-[#FFA62F]'>" . $error_message . "</p>" : "";
                ?>
             </div>
            <input type="submit" name="login" value="login" class="bg-[#FFA62F] mt-3 py-2 text-xl w-1/2 rounded cursor-pointer">
        </form>
    </div>
</body>
</html>
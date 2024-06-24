<?php  require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list of class nine</title>
    
    <?php  require('header.php'); ?>

</head>
<body>
   <div class="container mx-auto">
   <h2 class="text-center my-5 text-2xl font-bold">Student list of class nine</h2>
    <div>
        <?php 
        echo "<table class=' w-1/2 mx-auto my-10'>
        <tr class='bg-[#F1E5D1] py-5'> 
                <th class=' text-xl px-2 py-2 text-left '> Roll </th>
                <th class=' text-xl px-2 py-2 text-left '> Full Name </th>
                <th class=' text-xl px-2 py-2 text-left '> Father's Name </th>
                <th class=' text-xl px-2 py-2 text-left '> Mother's Name </th>
                <th class=' text-xl px-2 py-2 text-center ' colspan='2'> Action </th>
            </tr>
        ";
         
          $select_data = "SELECT* FROM students_details WHERE class = 'Ten' ";
          $select_data_query = $conn -> query($select_data);

          while($six_students = mysqli_fetch_array($select_data_query)){
            echo "
               <tr class = 'odd:bg-[#F1E5D1] even:bg-[#FFE8C8] px-2'>
             <td class='py-2 px-5 text-lg'> $six_students[roll] </td>
             <td class='text-lg'> $six_students[full_name] </td>
             <td class='text-lg'> $six_students[father_name] </td>
             <td class='text-lg'> $six_students[mother_name] </td>
             <td > <a href='' class=' bg-green-500 text-black text-lg mb-1 px-4 py-2 rounded' > Edit </a> </td>
             <td class='text-lg'> <a href='' class=' bg-red-500 text-white text-lg mb-1 px-4 py-2 rounded' > Delete </a> </td>

               </tr>
            ";
          }

          echo "</table>"

         ?>
    </div>
   </div>
</body>
</html>
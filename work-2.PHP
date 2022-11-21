<?php
  $name = "Poonyarit Kwangthong";
  $weight ="66";
  $hight ="170";
  $age ="20";
  $nationality ="thai";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="grid grid-rows-3 grid-flow-col gap-4">
    <h1 class = "row-span-3 ... bg-purple-300 text-red-700 text-5xl bg-black">My Name
       <?php echo "$name";?>
    <h1 class = "col-span-2 ... bg-red-300 text-pink-700 text-5xl">My weight
       <?php echo "$weight";?> 
    <h1 class = "row-span-2 col-span-2 ... bg-orange-300 text-yellow-700 text-5xl">My Hight
       <?php echo "$hight";?> 
    <h1 class = "text-center text-orange-700 text-6xl">My Age
       <?php echo "$age";?>
    <h1 class = "text-center text-purple-700 color: rgb-220 38 38 text-9xl">My Nationality
       <?php echo "$nationality";?>  
    </h1>
    </div>
    <?php
       if($weight<60){
   ?>
     <h4 class="text6xl text-right">You are Noob</h4>
    <?php
       }else{
    ?>
     <a class="bg-indigo-500 shadow-lg shadow-indigo-500/50 ... text-right text-4xl" href="next-01.php">You cool</a>
    <?php
     }
    ?>
    
</body>
</html>
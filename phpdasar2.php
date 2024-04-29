<?php

//array multidimensi====================================================================//
echo"array multidimensi"."<br />"."<br />";

 $siswaRPL = [ 
    ["nama" => "usep","kelas" => "11","jurusan" => "RPL"],
    ["nama" => "udin","kelas" => "12","jurusan" => "RPL"],
    ["nama" => "ucok","kelas" => "10","jurusan" => "RPL"],
    ["nama" => "ucok","kelas" => "10","jurusan" => "RPL"],
    ["nama" => "ucok","kelas" => "10","jurusan" => "RPL"],
    ["nama" => "ucok","kelas" => "10","jurusan" => "RPL"],
 ];

 echo $siswaRPL[0]["nama"];
 echo $siswaRPL[0]["kelas"];
 echo $siswaRPL[0]["jurusan"];
 echo "<hr />";
 echo $siswaRPL[1]["nama"];
 echo $siswaRPL[1]["kelas"];
 echo $siswaRPL[1]["jurusan"];
 echo "<hr />";
 echo $siswaRPL[2]["nama"];
 echo $siswaRPL[2]["kelas"];
 echo $siswaRPL[2]["jurusan"];
 echo "<hr />"."<br />";

//Perulangan FOR====================================================================//
 echo"perulangan FOR"."<br />"."<br />";

 for($i = 0; $i < 6; $i = $i + 1){
   echo $siswaRPL[$i]["nama"]."<br/>";
 }
 echo "<hr />"."<br />";

//Perulangan WHILE====================================================================//
 echo"perulangan WHILE"."<br />"."<br />";
 $i = 0;
 while($i < 2){
   echo $i;
   $i++;
 }
 echo "<hr />"."<br />";

 //perulangan foreach====================================================================//
 echo"perulangan FOREACH"."<br />"."<br />";
 $siswaTKJ = ["justin","clark","adams"];

 foreach($siswaTKJ as $siswa){
   echo $siswa."<br/>";
 }
 echo "<hr />";
 $siswaTKJ = ["nama" => "pragos", "kelas" => 11, "jurusan" => "TKJ"];
 
 foreach($siswaTKJ as $key => $siswa){
   echo"$key : $siswa <br/>";
 }

 echo "<hr />";
 $buying = [["mouse","monitor","keyboard"], ["mousepad","stand","speaker"]];

 foreach($buying as $setup){
   foreach($setup as $i){
      echo $i."<br/>";
   }
 }
?> 
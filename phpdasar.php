<?php
 //tugas 1
 echo "<h1>halo dunia</h1>";
    
 //tugas 2
     $nama = "fatan " ;
     $umur = "17";
     $kelakuan  = "santui";
     
     echo "<p>ini adalah ".$nama."<br>"
     .$nama."baru berumur ".$umur." tahun"."<br>". "tapi dia tidak pernah ".$kelakuan."<br>"."jadilah seperti ".$nama."<br><br>";
     
 //tugas 3
     $nilai = 95 ;
     
     if ($nilai > 90){
        echo "Nilai kamu = A";
     }elseif ($nilai > 74 && $nilai < 90) {
        echo "Nilai kamu = B";
     }else {
        echo "Nilai kamu = C";
     }
     
      /*
 $nilai = 90;

 if($nilai < 85) echo "C";
 else if ($nilai > 85 AND $nilai < 90) echo "B";
 else if ($nilai > 90) echo "A";
 */
?>
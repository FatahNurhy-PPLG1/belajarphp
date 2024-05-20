<?php 
$jurusan = [
    [
      "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun", "nilai_uas" => 90],
        ["nama" => "fattah", "umur" => "19 tahun", "nilai_uas" => 60],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun", "nilai_uas" => 75],
          ["nama" => "marsina", "umur" => "20 tahun", "nilai_uas" => 70],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun", "nilai_uas" => 40],
          ["nama" => "Fariz", "umur" => "20 tahun", "nilai_uas" => 80],
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
  <div class="container my-5">
    
      <h1>Data Siswa</h1>
      <?php foreach ($jurusan as $jurusan){?>
    <table class="table">
      <h1> <?php echo $jurusan["nama"]?> </h1>
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
          <th scope="col">Nilai Uas</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Nilai Dalam Huruf</th>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach ($jurusan["siswa"] as $output){?>
        <tr class="<?php if($output['nilai_uas'] >= 75 ) echo 'table-success'; else echo 'table-danger'?>">
      
          <td><?php echo $output["nama"]?></td>
          <td><?php echo $output["umur"]?></td>
          <td><?php echo $output["nilai_uas"]?></td>          
          <td style="<?php if($output['nilai_uas'] >= 75 ) echo 'background : green'; else echo 'background : red '?>">
            <?php 
            if($output['nilai_uas'] >= 75){
              echo "LULUS";
            }else{
              echo "Remedial";
            }
            ?>
          <td>
            <?php 
             if ($output['nilai_uas'] >= 90){
              echo "A";
            }elseif ($output['nilai_uas'] >= 80 && $output['nilai_uas'] < 90) {
              echo "B";
            }elseif ($output['nilai_uas'] >= 75 && $output['nilai_uas'] < 80)  {
              echo "C";
            }else{
              echo "D";
            }
            ?>
          </td>
          </td>
        </tr>
        <?php }; ?>
      </tbody>                                                            
    </table>
    <?php }; ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html> 
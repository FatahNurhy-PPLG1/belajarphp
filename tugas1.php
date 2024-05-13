<?php 
$wisata = [
    ["nama" => "Ragunan Jakarta", "lokasi" => "Jakarta", "Hari" => "senin - rabu", "foto" => "https://www.nativeindonesia.com/foto/2021/09/burung-pelikan-timor.jpg"],
    ["nama" => "Gunung Merapi", "lokasi" => "Magelang", "Hari" => "senin - rabu", "foto" => "https://awsimages.detik.net.id/community/media/visual/2020/11/06/penampakan-merapi-dari-kaliadem-2_169.jpeg"],
    ["nama" => "Gunung Tangkuban Parahu", "lokasi" => "Bandung", "Hari" => "senin - rabu", "foto" => "https://asset.kompas.com/crops/ilcgxQBDmeUuoES_SK8mjjhAEvU=/0x0:1000x667/750x500/data/photo/2022/06/27/62b946699ed13.jpg"],
  ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container my-5">
      <h1 class="text-center"> TRIP TO INDONESIA </h1>
      <br>
      <br>
      
      <?php foreach ($wisata as $tempat): ?>
        <div class="d-flex gap-5 justify-content-center mt-0">
        <div class="card" style="width: 18rem">
          <img src="<?php echo $tempat['foto']; ?>" 
          class="card-img-top" 
          alt="..." 
          />
          <div class="card-body">
          <h5 class="card-title"><?php echo $tempat['nama']; ?></h5>
            <p class="card-text">
              Lokasi: <?php echo $tempat['lokasi']; ?><br>
              Hari Buka: <?php echo $tempat['Hari']; ?>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
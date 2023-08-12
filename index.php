<?php  
require 'retrieving\skill.php';
require 'retrieving\project.php';
require 'retrieving\certificate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Bagas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="asset\css\index.css" rel="stylesheet" >
    <link rel="icon" type="image/x-icon" href="https://th.bing.com/th/id/R.72ba53451cf983dafd6320b566faba27?rik=6d6i2mciy5m76A&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_35733.png&ehk=7c96kwF77CQPehHzXCgg8f0n0IydXkKWZiaUXObI07A%3d&risl=&pid=ImgRaw&r=0">
    
</head>
<body style="height: 1200px; margin:0;">
<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light " >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>Portofolio</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#profile">Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contact_me
          </a>
          <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
            <li>
              <div class="d-flex">
                <p class="ms-1 me-2">Email</p>
                <a href="mailto:111202214715@mhs.dinus.ac.id" title="Email">
                  <i class="fa-regular fa-envelope" style="color: #d91212;"></i>
                </a> 
              </div>
            </li>
            <li>
              <div class="d-flex">
                <p class="ms-1 me-2">Github </p>
                <a href="https://github.com/BagasA11" class="me-1" target="_blank" title="github">
                  <i class="fa-brands fa-github" style="color: #181d26;"></i>
                </a>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <p class="ms-1 me-2">WhatsApp </p>
                <a href="https://wa.me/6282112897283" title="WhatsApp">
                  <i class="fa-brands fa-whatsapp" style="color: #08a63f;"></i>
                </a>
              </div>      
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#project">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skill">Skill</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#certificate_header">certificate</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- layout -->

  
  <!-- void between content and navbar -->
  <div class="mt-3 mb-5" style="height: 35px;"></div>
  
  <!-- profile -->
  <div class="container">
    <div class="row flex-wrap justify-content-around mb-2 mt-5" id="profile">
      <!-- left column -->
      <div class="col-sm-8" id="left_column">
        <h4>Hello,</h4>
        <span class="d-flex justify-content-start mb-3">
          <h3>I am</h3><h3 class="ms-2" style="color: red;">Bagas Rayhan Sebastian</h3>
        </span>
        <p class="text-start fw-light font-monospace">Mahasiswa Teknik Informatika</p>
        <div class="text-start text-wrap mb-2">
          Saya adalah mahasiswa Teknik Informatika Udinus yang selalu termotivasi untuk mempelajari hal baru di bidang
          pemograman. Saya memiliki kemampuan problem solving, kreatif, dan mampu berkerja secara individu
          atau tim. Saya memiliki pengalaman dalam membangun software, seperti sistem manajemen kasir untuk kompetisi capstone, 
          komputasi gerak parabola untuk matakuliah Fisiska I, dll 
        </div>
      </div>
      <!-- right column -->
      <div class="col-sm-3" id="right_column">
        <!-- photo profile-->
        <div class="profile-img border-primary ps-3" 
        style="height:70%; overflow: hidden;">
          <img class="border-light"
          src="asset\img\mockup\A11202214715.jpg" 
          style="border-radius: 5%; border:5px solid;">
        </div>
        <!-- contact -->
        <span class="d-flex justify-content-end mt-3" id="contact_me">
          <p style="font-weight: bold;" class="me-3 text-danger" >Contact me:</p>
          <!-- email -->
          <a href="mailto:111202214715@mhs.dinus.ac.id" class="me-1" title="Email">
            <i class="fa-regular fa-envelope" style="color: #d91212;"></i>
          </a>
          <!-- github -->
          <a href="https://github.com/BagasA11" class="me-1" target="_blank" title="github">
            <i class="fa-brands fa-github" style="color: #181d26;"></i>
          </a>
          <a href="https://wa.me/6282112897283" title="WhatsApp">
            <i class="fa-brands fa-whatsapp" style="color: #08a63f;"></i>
          </a>
        </span>
      </div>
    </div>
  </div>

  <!-- project slider -->
  <h3 style="text-align: center;">Latest Project</h3>
  <div id="project" class="d-flex mb-5">
    <?php $i = 0; ?>
    <?php foreach($project as $item): ?>
      <div class="card-project me-3 border-danger bg-light">
        <a class="gambar" href="asset\img\mockup\<?= $item['img']?>" target="_blank">
          <img src="asset\img\mockup\<?= $item['img']?>">
        </a>
        <div class="deskripsi">
          <h6><?= $item['title']?></h6>
          <p class="descitem ms-1"><?= $item['desc']?></p>
          <p class="text-danger date ms-2">bahasa: <?= $item['lgn']?></p>
          <a style="background-color: red; color: #fff;" 
          class="btn download" href="download.php/?encrypt=<?= password_hash($item['id'], PASSWORD_BCRYPT)?>">
            Download
          </a><br>
          <small class="date"><?= $item['date']?></small>
        </div>
      </div>
      <?php $i++; ?>
    <?php endforeach; ?>
  </div>
  <!-- skill -->
  <div class="container-fluid mt-3 mb-3" id="skill">
    <h3 style="text-align: center;">Relevant Skill</h3>
    <div class="d-flex justify-content-center flex-wrap mb-3">
      <?php foreach ($skill as $item): ?>
        <div class="ms-2 me-2" style="height: 90px; width:50px;">
          <div class="skil-logo" style="object-fit: fill ;height: 50px; width:100%;">
            <img src="asset\img\skill\<?= $item['img']?>" style="width: 100%; height:100%">
          </div>
          <p class="text-center" style="font-size: 9px;"><?= $item['title']?></p>
        </div>
      <?php endforeach; ?>
      
    </div>
  </div>
          
  <!-- certification -->
  <div class="container-fluid mt-5">
    <h3 class="mb-3" style="text-align: center;" id="certificate_header">Certification</h3>
    <div class="d-flex justify-content-center flex-wrap">
      <?php foreach ($certificate as $item): ?>
        <div class="ms-2 me-2" style="height: 150px; width:100px;">
          <div class="skil-logo" style="object-fit: fill ;height: 100px; width:100%;">
          <a href="asset\img\certificate\<?= $item['img']?>" target="_blank">
            <img src="asset\img\certificate\<?= $item['img']?>" style="width: 100%; height:100%">
          </a>  
          </div>
          <p class="text-center" style="font-size: 12pt;"><?= $item['title']?></p>
          <a style="color: #fff; background-color:red"
          href="certificate-download.php/?hash=<?= password_hash($certificate[0]['id'], PASSWORD_BCRYPT)?>"
          class="btn"
          >
            Download
          </a>    
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="mt-3 mb-5" style="height: 10px;"></div>
  <!-- footer -->
  <footer class="container-fluid mb-3 bg-light">
    <div class="d-flex justify-content-center fs-5 font-monospace fw-bolder">
      <p class="text-danger me-1">Hut RI</p>
      <p class="text-light" style="text-shadow: 2px 2px black;">ke -78</p>
    </div>
    <div class="d-flex justify-content-center">
      <p class="me-1">Copy Right</p>
      <a href="#">@2023</a>
    </div>
  </footer>
  
<script src="https://kit.fontawesome.com/8cf59ae923.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
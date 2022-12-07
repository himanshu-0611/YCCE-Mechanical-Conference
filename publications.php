<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Publications</title>
  <style>
    @media (max-width: 620px) and (min-width: 350px) {
        .publication{
          padding-left: 1.5rem;
          padding-right: 1.5rem;
        }
        }
  </style>
 <?php $page = 'publications'; include('styles.php') ?>

</head>
<body>
<?php include('navnheader.php') ?>

<!-- Content  -->
<div class="container-fluid pad-0">
    <div class="banner-inner text-center">
      <h3><strong>Publications</strong></h3>
    </div>
  </div>
  
  <div class="publication">
  <div style="max-width:600px; margin:auto; font-size:1.1rem;" class="publications py-5 mb-5">
  <p>Journals:</p>
  <ul>
    <li>Journal of Institute of Engineers: Series C, Springer</li>
    <!-- <li>World Journal of Engineering, Emerald</li> -->
    <li>Recent Advances in Materials, Manufacturing and Machine Learning (CRC Press, Taylor & Francis)</li>
    <li>Journal of Advances in Materials and Processing Technologies (Taylor and Francis)</li>
    <!-- <li>Lecture Notes In Mechanical Engineering (Springer) (In process)</li> -->
    <!-- <li>Materials Today: Proceedings (Elsevier) (In process)</li>
    <li>AIP Conference Proceedings (AIP Publishing) (In process)</li> -->
  </ul>
  <p class="my-3">Book Chapter:</p>
  <ul>
    <li>Advances in Mechanical Engineering and Interdisciplinary Sciences, CRC Press, Taylor & Francis</li>
    <!-- <li>Advanced Manufacturing Processes, CRC Press, Taylor & Francis </li> -->
    <!-- <li>Lecture notes in Mechanical Engineering, Springer (In Process)</li> -->
  </ul>
  </div>

  </div>

  <div class="pub_img " style="max-width:700px; margin:auto; display:flex;margin-top:-90px; margin-bottom: 25px">
    <img src="./img/publishers/springer.png" alt="Springer">
    <img src="./img/publishers/TnF.png" alt="">
    <!-- <img src="./img/publishers/aip.png" alt="">
    <img src="./img/publishers/mattoday.png" alt=""> -->
  
  </div>  
<?php include('footer.php') ?>


</body>

</html>

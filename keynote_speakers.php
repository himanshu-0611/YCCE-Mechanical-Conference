<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keynote Speakers</title>
  <?php $page = 'keynote_speakers';
 include('styles.php') ?>
  <style>
    .cardd {
      box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15), 0px 0px 10px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      max-width: 270px;
      --bs-gutter-x: 0rem;
      margin: 40px 50px 20px 50px;
    }

    .cardd>img {
      height: 280px;
      width: 100%;
      margin: auto;

      padding: 0;
      border-radius: 8px 0px;
      --bs-gutter-x: 0rem;

    }

    /* ** MyH1 CSS *** */
    .myh1 {
      margin: auto;
      width: 360px;
      font-size: 2.5em;
      font-weight: bolder;
      padding-bottom: 10px;
      border-bottom: 3px solid #222;
      box-sizing: border-box;
      text-align: center;
    }

    .myspan1 {
      font-weight: 200;
    }

    @media (max-width: 600px) and (min-width: 300px) {
      .myh1 {
        width: 285px;
        font-size: 2em;
      }
    }

    /* ** MyH1 CSS *** */
  </style>
</head>

<body>
  <?php include('navnheader.php') ?>

  <br>

  <div class="container py-5 key_speakers">
    <h1 class="myh1">Keynote&nbsp;<span class="myspan1">Speakers</span></h1>
    <div class="container mt-1" style="max-width:1000px;">
      <div class="row d-flex justify-content-around">
        <!-- <h1 style="text-align: center">Coming Soon...</h1> -->
        <div class="container mt-1" style="max-width:1000px;">
          <div class="row d-flex justify-content-around">

            <div class="cardd">
              <img src="./img/keynoteSpeakers/1.png" alt="Dr. Alessandro Ruggiero" />
            </div>

            <div class="cardd">
              <img src="./img/keynoteSpeakers/2.png" alt="Dr. Hassan Saad Ifti" />
            </div>

            <div class="cardd">
              <img src="./img/keynoteSpeakers/3.png" alt="Dr. Nauman Dawalatabad" />
            </div>

            <div class="cardd">
              <img src="./img/keynoteSpeakers/4.png" alt="Dr. Tushar Shinde" />
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include('footer.php') ?>


</body>

</html>
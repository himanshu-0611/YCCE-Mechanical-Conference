<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keynote Speakers</title>
    <?php $page = 'rammml2022'; include('styles.php') ?>
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <style>
        .cardd {
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15), 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            max-width: 200px;
            --bs-gutter-x: 0rem;
            margin-top: 20px;
        }

        .cardd>img {
            height: 280px;
            width: 100%;
            margin: auto;

            padding: 0;
            border-radius: 8px 0px;
            --bs-gutter-x: 0rem;

        }

        body{
          margin-top: 0px;
          margin-left: 0px;
        }

        .pie1>img {
          height: 350px;
          width: auto;
        }

        .pie2>img {
          height: 470px;
          width: auto;
        }

        /* ***** MyH1 CSS ****** */
        .myh1{
            margin:auto; 
            width:360px; 
            font-size: 2.5em; 
            font-weight: bolder; 
            padding-bottom: 10px; 
            border-bottom: 3px solid #222;
            box-sizing: border-box;
            text-align:center;
        }

        .myspan1{
            font-weight: 200;
        }

        @media (max-width: 600px) and (min-width: 300px) {
        .myh1{
            width: 285px;
            font-size: 2em;
        }
        }
    /* ***** MyH1 CSS ****** */

    /* ***** Pie1 CSS ****** */
    @media (max-width: 600px) and (min-width: 470px) {
        .pie1 img{
            height:300px;
            width:400px;
            }
        }
    
    @media (max-width: 470px) and (min-width: 350px) {
        .pie1 img{
            height:200px;
            width:300px;
            }
    
        .pie2 img{
            height:300px;
            width:300px;
            }
        }
    
    /* ***** Pie1 CSS ****** */

    </style>
</head>
<body>
    <?php include('navnheader.php') ?>

    <!-- Content  -->
    <div class="container py-5 key_speakers">
        <h1 class="myh1">Keynote&nbsp;<span class="myspan1">Speakers</span></h1>
        <!-- profile container   -->

        <div class="container mt-1" style="max-width:1000px;">
            <div class="row d-flex justify-content-around">

                <div class="cardd">
                    <img src="./img/keynoteSpeakers/BjornSchuller.jpg" alt="Bjorn Schuller" />
                    <p class="text-center pt-2">
                        <b>Bjorn Schuller</b> <br>
                        <span style="font-size:0.9rem;">Professor</span> <br>
                        <span style="font-size:0.7rem;">AI Imperial College London & University of Augsburg</span> <br>
                        <span style="font-size:0.7rem;">CSO, audEERING</span>
                    </p>
                </div>

                <div class="cardd">
                    <img src="./img/keynoteSpeakers/Rajiv Gupta.jpg" alt="Rajiv Gupta" />
                    <p class="text-center pt-2">
                        <b>Dr.Rajiv Gupta</b> <br>
                        <span style="font-size:0.9rem;">Associate Professor</span> <br>
                        <span style="font-size:0.7rem;">Materials Science and Engineering</span> <br>
                        <span style="font-size:0.7rem;">North Carolina State University, USA</span>
                    </p>
                </div>

                <div class="cardd">
                    <img src="./img/keynoteSpeakers/AbhishekSharma.jpg" alt="Abhishek Sharma" />
                    <p class="text-center pt-2">
                        <b>Dr. Abhishek Sharma</b> <br>
                        <span style="font-size:0.7rem;display:block;margin-top:0.5rem"></span>
                        <span style="font-size:0.7rem;">Joining and Welding Research Institute</span> <br>
                        <span style="font-size:0.7rem;">Osaka University, Japan</span>
                    </p>
                </div>


            </div>
        </div>

    </div><br>
    <!-- Gallery -->
        
    <div class="gallery">
    <h3 class="myh1">Photo <span class="myspan1">Gallery</span></h3>
        <div class="container1">
            <div class="box1">

                <div class="dream1">
                    <img src="img/Gallery/1.jpg">
                    <img src="img/Gallery/2.jpeg">
                    <img src="img/Gallery/3.jpeg">
                    <img src="img/Gallery/4.jpeg">
                    <img src="img/Gallery/5.jpg">
                    <img src="img/Gallery/15.jpg">
                </div>

                <div class="dream1">
                    <img src="img/Gallery/6.jpg">
                    <img src="img/Gallery/7.jpg">
                    <img src="img/Gallery/8.jpeg">
                    <img src="img/Gallery/9.jpg">
                    <img src="img/Gallery/10.jpeg">

                </div>

                <div class="dream1">
                    <img src="img/Gallery/11.jpg">
                    <img src="img/Gallery/12.jpg">
                    <img src="img/Gallery/13.jpg">
                    <img src="img/Gallery/17.jpg">
                    <img src="img/Gallery/18.jpeg">
                </div>
            </div>
        </div>

        
        <!-- Gallery -->

    <div class="pie" style="text-align: center"><br>
        <h3>Participating Countries (Other than India)</h3><br>
        <div class="pie1">
        <img src = "img/count.png"><br><br>
        </div>
        <div class="pie2">
        <h3>No. of Papers published in different Journals/Proceedings</h3><br>
        <img src = "img/jour.png"><br>
        </div>
        <br>

    </div>
    
    <?php include('footer.php') ?>


</body>

</html>
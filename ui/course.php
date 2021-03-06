<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>
    Course Name
  </title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/heather.css">
  <link rel="stylesheet" href="../css/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/tools.js"></script>

</head>

<style>
  body {
    background-color: #f5f5f5;
  }

  #navbar {
    background-color: #fff;
    position: sticky;
    top: 0px;
  }

  a:link {
    color: #98b27d;
    background-color: transparent;
    text-decoration: none;
  }

  a:visited {
    color: #737373;
    background-color: transparent;
    text-decoration: none;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light py-4 px-md-5 position-relative z-index-1" id="navbar">
    <a class="navbar-brand" href="#">
      <h1 class="h3 mt-0">
        All-In-One
      </h1>
    </a><button class="navbar-toggler" type="button" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse ms-lg-5 mt-4 mt-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="learner_index.php"><span>Home</span></a>
        </li>
      </ul>
      <ul class="navbar-nav mt-4 mt-lg-0 ms-auto align-items-center">
        <li class="nav-item">
          <a class="primary-text-color"><strong>Welcome, Heather [LEARNER]</strong></a>
        </li>
      </ul>
  </nav>


  <section>
    <div class="container py-7 py-lg-10">
      <div class="row justify-content-center">

        <div class="text-center col-lg-6">
          <h2 class="h2 text-color text-center" style="margin-top: 10px">
            Section 1: Introduction
          </h2>

          <!-- Progress Bar -->
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <br>
                <div class="col-md-12">
                  <div class="progress" style="margin: auto;">
                    <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success"
                      role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <p class="paragraph second-text-color text-center" style="margin-top: 20px">
          </p>
          <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" href="#">Course Homepage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Final Quiz</a>
            </li>
          </ul>

        </div>
      </div>

      <!-- Section Contents -->
      <div class="row align-items-stretch justify-content-center mt-5 mt-md-7">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <!-- Lecture Video -->
          <h4 class="h4 text-color text-left" style="margin-top: 0px">
            Lecture Video
          </h4>
          <br>
          <div class="text-center radius-20 position-relative overflow-hidden px-0" style="height: 450px; width: 100%">
            <div class="media bg-cover">
              <img class="cover" src="../img/printer.jpg" alt="">
              <div class="filter gradient-filter"></div>
            </div><button class="btn primary-color btn-circle btn-lg center-content-align position-absolute"
              id="play_button"><i class="bi bi-play-fill icn-sm light-text-color" onclick="play_video()"></i></button>
          </div><br>
          <hr>
          <!-- Lecture Slides -->
          <h4 class="h4 text-color text-left" style="margin-top: 15px">
            Lecture Slides
          </h4>
          <h5 class="h5 text-color text-left" style="margin-top: 40px">
            <!-- Edit href to lead to PDF document -->
            <a
              href="https://docs.google.com/document/d/1TqPV7qp9BE0Q6Krb-4fDxJv-z9ufF8tWiembl8SsFgg/edit#" id="slides">Intro_Slides_Lesson1.pdf</a>
          </h5>
          <br>
          <hr>
          <!-- Ungraded Quiz -->
          <h4 class="h4 text-color text-left" style="margin-top: 15px">
            Ungraded Quiz
          </h4>
          <h5 class="h5 text-color text-left" style="margin-top: 40px">
            <!-- Edit href to lead to ungraded quiz document -->
            <a href="ungradedquizdetails.html">Ungraded Quiz</a>
          </h5>
        </div>
      </div>
    </div>



  </section>
</body>

<script>
  function play_video() {
    location.href = "https://www.youtube.com/watch?v=btGYcizV0iI"
  }
</script>

<script>
  var count = 0
  document.getElementById("play_button").onclick = function () {
    count += 1
    alert(count)
  }

  document.getElementById("slides").addEventListener("click", () => {
    count += 1
    alert(count)
  });
</script>

</html>
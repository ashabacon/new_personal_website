<?php $additionalCSS = '<link href="css/projects.css" rel="stylesheet">';
  require_once("components/header.php");
  require_once("components/navbar.php");
?>


  <!-- integrate Scrollspy!!!!!! -->


    <div class='section-header'>
      <header><h1>Projects</h1></header>
      <hr width='75px' align='center'>
    </div>
    <div>
      <section class='projects'>
        <div class='container'>
            <div class="card-columns centerBlock">
              <a class="btn" href="/casestudies">
                <div class="card zoom">
                  <img src="/images/bodyclockcard.png" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Body Clock</h5>
                    <p class="card-text">A mobile application to help international
                      travelers mediate the affects of jet lag
                    </p>
                  </div>
                </div>
              </a>
              <a class="btn" href="#">
                <div class="card zoom">
                  <img src="/images/Design1.png" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Cereal Box Redesign</h5>
                    <p class="card-text">A redesign of the conventional cereal box to
                      fit the cereal needs of the everyday consumer
                      <!--been updated since the early 60s! -->
                    </p>
                  </div>
                </div>
              </a>
            </div>
              <!-- <div class="row justify-content-around">
                <div class='col'>
                  <div class="card" style="width: 18rem;">
                    <img src="/images/bodyclockcard.png" class="card-img-top">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the
                        card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div> -->
            <!-- <div class='col'>
              <div class='project-info centerBlock zoom'>
                <h4>Roles</h4>
                <hr width='20px' align='center'>
                <p>UX Researcher  /  UX Designer </br>/ Developer</p>
              </div>
            </div>
            <div class='col'>
              <div class='project-info centerBlock zoom'>
                <h4>Tags</h4>
                <hr width='20px' align='center'>
                <p>Usability Test  /  Product </br>Design
                    /  Survey & Interview </br>/ Product Development
                </p>
              </div>
            </div>
            <div class='col'>
              <div class='project-info centerBlock zoom'>
                <h4>Software</h4>
                <hr width='20px' align='center'>
                <p>Figma / React / JavaScript/ HTML / CSS</p>
              </div>
            </div> -->
        </div>
      </section>
    </div>
    <?php require_once("components/footer.php"); ?>
  </body>
</html>

<?php
	$additionalCSS = '<link href="css/section.css" rel="stylesheet">';
  // $title = 'Section';
	require_once("components/header.php");
	require_once("components/navbar.php");
?>



    <section class="welcome">
      <div id="welcome">
        <h1>Welcome to Section A05 for COGS 101A</h1>
      </div>
      <div class="container" id="message">
        <div class="row" align='center'>
          <div class='col-md-5'>
            <img src='images/DSC07572_result.JPG'
            height='235' hspace="100">
          </div>
          <div class='col-sm-6'>
            <p>
              Hello! My name is Asha Bacon and I am a fourth year undergrad at UCSD studying Cognitive Science
              with a specialization in HCI. This is my first time IAing a class,
              so I will do my best but am always open to suggestions for improvement.
              I am terrible at cooking and social isolation, so we shall see how this quarantine goes :^).<br><br>
              Here is my zoom link: <a href="https://ucsd.zoom.us/j/294024686">Section A05</a></br>
              Email: avbacon@ucsd.edu
            </p>
          </div>
      </div>
    </div>
    </section>
    <div id='coursematerials'>
      <img src='images/coursematerials.svg' width='100%' min-height='300px'>
    </div>
    <section id="schedule">
      <div align='center'>
        <table class="table table-responsive-sm table-bordered table-hover">
	        <thead>
	          <tr class='table-secondary'>
	            <th style="width: 150px;" scope="col">Week</th>
	            <th style="width: 350px;" scope="col">Due</th>
	            <th style="width: 350px;" scope="col">Links</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <th scope="row">1</th>
	            <td>Ch1 reading</br>4/6:  Quiz 1, Beginning Survey</td>
	            <td>
	              <a target="_blank"
	              href='https://www.biomotionlab.ca/Demos/BMLwalker.html'>
	                Biological Movement Simulator
	              </a>
	            </td>
	          </tr>
	          <tr>
	            <th scope="row">2</th>
	            <td>Ch2 reading</br>4/13:  Quiz 2</td>
	            <td>
	              <a target="_blank"
	              href='https://docs.google.com/presentation/d/1HOrbaFM9-5_ORU13eoPozvWT1GAs_mHFDp5LNun6SSo/edit?usp=sharing'>
	                Week 2 section slides
	              </a>
	            </td>
	          </tr>
	          <tr>
	            <th scope="row">3</th>
	            <td>Ch3 & 4 readings</br>4/20:  Quiz 3</td>
	            <td>
	              <a target="_blank"
	              href='https://docs.google.com/presentation/d/18KO4U3GAIMYcLWpyN7nFssybPWy4BWd7Vq-6JpXPWoU/edit?usp=sharing'>
		              Week 3 section slides
	              </a>
	            </td>
	          </tr>
	          <tr>
	            <th scope="row">4</th>
	            <td>Ch9 reading</br>4/27:  Quiz 4, Midterm 1</td>
	            <td>
	              <a target="_blank"
	              href='https://docs.google.com/presentation/d/18KO4U3GAIMYcLWpyN7nFssybPWy4BWd7Vq-6JpXPWoU/edit?usp=sharing'>
		              Week 3 section slides
	              </a>
	            </td>
	          </tr>
          </tbody>
        </table>
      </div>
    </section>
    <?php require_once("components/footer.php"); ?>
  </body>
</html>

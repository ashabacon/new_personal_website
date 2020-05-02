<?php $additionalCSS = '<link href="css/work.css" rel="stylesheet">';
  require_once("components/header.php");
  require_once("components/navbar.php");
?>

    <section class="work-experience">
      <div class='section-header'>
        <header><h1>Work Experience</h1></header>
        <hr width='75px' align='center'>
      </div>
      <div class='experience-list container'>
        <div>
          <h3>Instructional Assistant, <a href="https://ucsd.edu/">UC San Diego</a></h3>
          <p class='date'>Apr 2020 – Present</p>
          <ul>
            <li>Structures and teaches weekly lectures for students to review class material</li>
            <li>Collobaritively writes and grades quizzes and exams in a timely manner</li>
            <!-- <li></li> -->
          </ul>
        </div>
        <div>
          <h3>Research Assistant, <a href="https://ucsd.edu/">UC San Diego</a></h3>
          <p class='date'>Apr 2019 - Mar 2020</p>
          <ul>
            <li>Worked with a team to design a BCI study on the relationship between sound and architecture</li>
            <li>Served as RA for recent EEG study</li>
            <li>Solely responsible for an assortment of research critical tasks
              including Client setup/clean-up, statistical analysis and decoding of experimental data</li>
          </ul>
        </div>
        <div>
          <h3>Software Engineer Intern, <a href="https://www.menlosecurity.com/">Menlo Security</a></h3>
          <p class='date'>Jun 2019 – Sept 2019</p>
          <ul>
            <li>Redesigned the company’s public website, products, and admin panels
              to have a cohesive, modern image</li>
            <li>Refactored old JavaScript code in Angular</li>
            <li>Collaborated with the company’s design and engineering team to update the company’s web UI</li>
          </ul>
        </div>
        <div>
          <h3>Junior QA Engineer, <a href="https://www.menlosecurity.com/">Menlo Security</a></h3>
          <p class='date'>Sept 2017 – Aug 2018</p>
          <ul>
            <li>Developed regression and functional testing suites using TestRail</li>
            <li>Managed deliverables and testing progress using JIRA</li>
            <li>Served as a gatekeeper of Jenkins deployments to VMWare production machines</li>
          </ul>
        </div>
      </div>
    </section>
    <?php require_once("components/footer.php"); ?>
  </body>
</html>

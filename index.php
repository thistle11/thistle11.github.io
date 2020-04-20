<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Portfolio</title>
    <link rel="icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <main>
      <!-- ***********************  ABOUT / PROFILE  *********************** -->
      <header>
       <div class="content-wrap item-details">
       <h1><a href="Index.php">NSCC Project Portfolio</a></h1>  
       </div>
      </header>

      <!-- ********************  PROJECTS / PORTFOLIO  ********************* -->
      <section class = "projects">
       <div class="content-wrap divider">
        <h2>Projects</h2>
        <p>View selected projects below. Source data can be found on <a href="https://github.com/thistle11">my github page.</a></p>

        <!-- Copy the whole <section> block to add more projects. -->
        <section class="project-item">
          <img src="images/global_covid.jpg" alt="Covid Map">
          <h3>COVID-19 Daily - Global</h3>
          <p>Daily Corona Virus analysis globally by category. </p>
          <a class="btn" href="COVID_Global.php">View project / case study</a>
        </section>
        <section class="project-item">
          <img src="images/covid_red.jpg" alt="Covid Micro">
          <h3>COVID-19 Daily - Canada</h3>
          <p>Daily Corona Virus analysis in Canada by category. </p>
          <a class="btn" href="COVID_Canada.php">View project / case study</a>
        </section>
        <section class="project-item">
          <img src="images/employment.jpg" alt="Different Jobs">
          <h3>Capstone - Employment Analysis</h3>
          <p>National historical employment analysis - Outlook for Canada. </p>
          <a class="btn" href="Employment.php">View project / case study</a>
        </section>
          <!-- End of Project block. -->
       </div>
      </section>

      <!-- ***********************  WORK EXPERIENCE  *********************** --
      <section class = "work_experience">
       <div class="content-wrap item-details divider">
        <h2>Work Experience</h2>
        <p>More like Jerk Experience</p>
        <!-- Copy this whole <section> block to add more jobs. --
        <section class="job-item">
          <div class="job-details">
            <h3>Financial Trader</h3>
            <p>Self-Employed</p>
            <p>2016-2018</p>
          </div>
          <div class = "job-summary">
            <h4>Day Trader</h4>
          <p>Day to day included:</p>
          <ul>
            <li>Research.</li>
            <li>Planning. </li>
            <li>Execution. </li>
            <li>Repeat.</li>
          </ul>
          </div>
        </section>
        <section class ="job-item">
          <div class="job-details">
            <h3>Property Manager</h3>
            <p>Self-Employed</p>
            <p>2016-2018</p>
          </div>
          <div class = "job-summary">
            <h4>Property Manager</h4>
          <p>Day to day included:</p>
          <ul>
            <li>Research.</li>
            <li>Planning. </li>
            <li>Execution. </li>
            <li>Repeat.</li>
          </ul>
          </div>
        </section>
        <!-- End of Job block. -->
       </div> 
      </section>

      <!-- ******************  EDUCATION & CERTIFICATIONS ****************** -->
      <section class = "education">
       <div class="content-wrap item-details">
        <h2>Business Intelligence Analytics</h2>

        <!-- Copy this whole <section> block to add more schools. -->
        <!-- <section> -->
          <h3 >Halifax, Nova Scotia</h3>
          <h4>NSCC | Institute of Technology Campus | 2019-2020</h4>
        <!--</section> -->
        <!-- End of School block. -->
       </div>
      </section>

      <!-- *****************  CONTACT INFO / SOCIAL MEDIA  ***************** -->
      <footer>
       <div class="content-wrap">
        <h2>Stay Connected</h2>

        <!-- Social media and contact links. Add or remove any networks. -->
        <ul class = "contact-list">
          <li><a href="https://www.linkedin.com/in/markdthistle/">LinkedIn</a></li>
          <li><a href="https://github.com/thistle11">Github</a></li>
          <li><a href="mailto:mark.d.thistle@gmail.com">Email</a></li>
        </ul>
       </div>
      </footer>
</main>
  </body>
</html>

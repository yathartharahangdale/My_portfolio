<?php
// You can later add backend logic here (e.g., database insert or email sending etc)
?>

<!DOCTYPE html>
<html>
  <head>
      <title>My Profilo Page</title>
      <link href="Style.css" rel="stylesheet">
      <script src="script.js"></script>
  </head>
  <body>
      <header>
          <h1>MY Profilo Page</h1>
          <nav>
              <ul>
                  <li><a href="#home">Home</a><br><br><br></li>
                  <li><a href="#Profile">About</a><br><br><br></li> 
                  <li><a href="#project">Project</a><br><br><br></li> 
                  <li><a href="#intership">Internship</a><br><br><br></li>  
                  <li><a href="#Skills">Skills</a><br><br><br></li>       
                  <li><a href="#contact">Contact</a><br><br><br></li>             
              </ul>
          </nav>
      </header>
        
      <section class="home" id="home">
        <div class="content">
          <h3>Hello, my name is</h3>
          <h1>Yatharth Rahangdale</h1>
          <h3>And I'm a <div class="typing"><span>Web Developer</span></div> </h3>
          <a href="#contact" class="btn">Hire me</a>
        </div>
        <div class="image-container">
          <img src="Images/Yath_official222.jpg" alt="Yatharth Rahangdale" />
        </div>
      </section>

      <section id="Profile">
        <h2>About Me</h2>
        <div id="p">who i am</div>
        <div class="pft">
          <div class="img">
             <img src="Images/Yath_official222.jpg" width="200" height="200">
          </div>
          <div class="intro">
            <h3>I'm Yatharth and I'm a
              <div class="typing">
               <span>Web Developer</span>
               <span>APP Developer</span>
               <span>Programmer</span>
               <span>Designer</span>
               <span>Freelancer</span>
              </div>
            </h3>
            <p>B.E. Computer Engineering student with a strong foundation in programming and technology from Government Polytechnic. Former President of COSA, with proven leadership and collaboration skills. Proficient in Python, C++, JavaScript, and experienced with React, Php, HTML, MySQL & JS. Passionate about building real-world applications and contributing to impactful, tech-driven solutions.</p>
          </div>
        </div>
     </section>

      <section id="project">
          <h2>My Project</h2>
          <div id="p">what i provide</div>
          <div class="projt">
              <div class="pjt">
                 <img src="Images/Website_Internet.jpg" width="70" height="70">
                 <h3>Diploma Paper Hub</h3>
                 <p>I done My project in HTML, JS, CSS and PHP.<br></p>
              </div>
              <div class="pjt">
                 <img src="Images/Website_Internet.jpg" width="70" height="70">
                 <h3>Profilo Webpage</h3>
                 <p>I done My project in HTML, CSS.<br></p>
              </div>
              <div class="pjt">
                 <img src="Images/Website_Internet.jpg" width="70" height="70">
                  <h3>JDIET Paper Hub</h3>
                  <p>I done My project in HTML, JS, CSS and PHP.<br></p>
              </div>
            </div>
        </section>

        <section id="Skills">
            <h2>My Skills</h2>
            <div id="p">what i know</div>
            <div class="sk">
              <div class="circle-container">
                <img src="Images/C.jpg" width="70" height="70" class="image1">
                <img src="Images/C++.jpg" width="70" height="70" class="image2">
                <img src="Images/Python.jpg" width="70" height="70" class="image3">
                <img src="Images/Skills.jpg" width="70" height="70">
                <img src="Images/Html.jpg" width="70" height="70" class="image4">
                <img src="Images/Css.jpg" width="70" height="70" class="image5">
                <img src="Images/JS.jpg" width="70" height="70" class="image6">
                <img src="Images/Java.jpg" width="70" height="70" class="image7">
                <img src="Images/React_Js.jpg" width="70" height="70" class="image8">
                <img src="Images/SQL.jpg" width="70" height="70" class="image9">
                <img src="Images/Php.jpg" width="70" height="70" class="image10">
              </div>
            </div>
        </section>
  
        <section id="intership">
            <h2>My Internship</h2>
            <div id="p">who with me</div>
            <div class="intern">
                 <div class="intern_dtl">
                  <img src="Images/Sy_IT.jpg" width="70" height="70">
                  <h3>Symphonix IT</h3>
                  <p>I done My Internship in HTML, JS, PHP, CSS.<br>
                     Duration is of 6 weeks
                  </p>
               </div>
               <div class="intern_dtl">
                  <img src="Images/ExcelR.jpg" width="70" height="70">
                  <h3>Excelr</h3>
                  <p>I done My Internship program in Full Stack Development.<br>
                     Duration is of 15 days.
                  </p>
               </div>
               <div class="intern_dtl">
                  <img src="Images/Sy_IT.jpg" width="70" height="70">
                  <h3>Symphonix IT</h3>
                  <p>I done My Internship in IOT.<br>
                     Duration is of 6 weeks
                  </p>
               </div>
            </div>
        </section>
          
        <section id="contact">
             <h2>Contact Me</h2>
             <div id="p">Get In Touch</div>
             <div class="cnt">
                <div class="cnt_dt">
                  <h3>Reach me out</h3>
                  <p>You can connect me</p>
                  <table>
                    <tr>
                      <td><img src="Images/Admin.jpg" width="20" height="20"></td>
                      <td><p>Name<br>Yatharth</p></td>
                    </tr>
                    <tr>
                      <td><img src="Images/Location.jpg" width="20" height="20"></td>
                      <td><p>Address<br>Yavatmal, India</p></td>
                    </tr>
                    <tr>
                      <td><img src="Images/Contact.jpg" width="20" height="20"></td>
                      <td><p>Phone<br>9156240822</p></td>
                    </tr>
                    <tr>
                      <td><img src="Images/E-mail.jpg" width="20" height="20"></td>
                      <td><p>Email<br>yathartharahangdale@gmail.com</p></td>
                    </tr>
                  </table>
               </div>
               <div class="message">   
                  <h3>Message me</h3>           
                  <form action="contact.php" method="POST">
                    <input type="text" placeholder="Enter name here..." name="name">
                    <input type="email" placeholder="Enter email here..." name="email"><br>
                    <input type="text" placeholder="Enter subject here..." name="subject"><br>
                    <textarea name="mess" placeholder="Enter Message here..." cols="25"></textarea><br>
                    <input type="submit" value="Submit" name="submit" id="submit"><br>
                  </form>
               </div>
             </div>
        </section>

        <footer>
            <p> © Yatharth Rahangdale @ All rights Reserved</p>
            <p>Developed by Yatharth</p>
        </footer>
    </body>
</html>

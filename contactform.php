<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <title>Document</title>
    <style>

      body {
        margin: 0;
        padding: 0;
        overflow-X: hidden;
      }

      #bgimage {
        position: relative;
        background-image: url(images/model-1.jpeg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100vw;
        margin:0;
        z-index: -3;
      }

      .overlay {
        position:absolute;
        top: 0;
        left:0;
        margin:0;
        background-color: rgba(0, 0, 0, .5);
        height: 100vh;
        width: 100vw;
        z-index: -1;
      }

/*******************
mobile nav
*******************/
#mobile-nav {
  position: relative;
  width: 100vw;
  height: 10vh;
  background: #000;
  display: none;
}

.nav-links {
  display: flex;
  list-style: none;
  width: 50%;
  height: 100%;
  justify-content: space-around;
  align-items: center;
  margin-left: auto;
}

.nav-links li a {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
}

@media screen and (max-width: 768px) {

  /***** animated mobile menu https://www.youtube.com/watch?v=H4MkGzoACpQ 
  ************************************************************************/
  #bgimage {
    height: 90vh;
  }
  .line {
    width: 30px;
    height: 3px;
    background: #fff;
    margin: 5px;
    
  }

  #mobile-nav {
    display: block;
    position: relative;
    /*z-index: 200;*/
  }

  .hamburger {
    position: absolute;
    cursor: pointer;
    right: 5%;
    top: 50%;
    transform: translate(-5%, -50%);
    z-index: 12;
    /*display: block;*/
  }

  .nav-links {
    position: fixed;
    background: crimson;
    top: -20px;
    height: 110vh;
    width: 100%;
    flex-direction: column;
    clip-path: circle(100px at 90% -20%);
    -webkit-clip-path: circle(1500px 90% -20%);
    transition: all 1s ease-out;
    pointer-events: none;
    z-index: 10;
    margin: 0 auto;
    padding-left: 0;
  }

  .nav-links.open {
    clip-path: circle(1100px at 90% -20%);
    -webkit-clip-path: circle(1500px at 90% -20%);
    pointer-events: all;
  }

  .nav-links li {
    opacity: 0;
  }

  .nav-links li a {
    font-size: 25px;
    transition: color .5s;
  }

  .nav-links li a:hover {
    color: rgba(255, 255, 255, 0.5);
  }

  .nav-links li:nth-child(1) {
    transition: all 0.5s ease 0.2s;
  }

  .nav-links li:nth-child(2) {
    transition: all 0.5s ease 0.4s;
  }

  .nav-links li:nth-child(3) {
    transition: all 0.5s ease 0.6s;
  }

  li.fade {
    opacity: 1;
  }

  #nav {
    display: none;
  }
}

/*******************
desktop nav
*******************/

      #nav {
        position:absolute;
      }

  #nav ul {
    position: absolute;
    z-index: 2;
    background: #000;
  display: flex;
  justify-content: center;
  list-style-type: none;
  width: 100vw;
  top: -103vh;
}

#nav li {
  padding-bottom: 10px;
}

#nav a {
  display: inline-block;
  padding: 10px;
}

li,
a {
  /*display: block !important;*/
  color: #fff;
  text-decoration: none;
  font-family: "Times New Roman", Times, serif;
  font-size: 2vw;
}

#nav ul li .hidetext {
  position: absolute;
}

li a:hover {
  color: crimson;
}

.current-mobile {
color: rgba(255, 255, 255, 0.5) !important;
}

.current {
  color: crimson;
}

      main {
        position: absolute;
        width: 60vw;
        top: 20%;
        left: 20%;
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: 0 0 20px 0 rgba(220, 20, 60, 0.7);
      }

      main h2 {
        text-align: center;
        font-size: 2.5vw;
        color: #fff;
      }

      main h2 span {
        color:crimson;
      }

      .contact-form input {
        display: block;
        padding-left: 5px;
        font-size: 15px;
        width: 100%;
        height: 100%;
      }

      .contact-form textarea {
        width: 50%;
        padding-left: 5px;
        font-size: 18px;
        height: 100%;
      }

      .contact-form {
        position: relative;
        display: grid;
        width: 100%;
        grid-template-columns: 40% 50%;
        grid-template-rows: 40px 40px 40px 100px;
        gap: 20px;
        padding-bottom: 2em;
        justify-content: center;
        align-items: center;
        grid-template-areas:
          "name subject"
          "mail textarea"
          "mobile textarea"
          "submitBtn textarea";
      }

      #name {
        grid-area: name;
        width: 100%;
      }

      #subject {
        grid-area: subject;
        width: 100%;
      }

      #mail {
        grid-area: mail;
        width: 100%;
      }

      #mobile {
        grid-area: mobile;
        width: 100%;
      }

      #textarea {
        grid-area: textarea;
        width: 100%;
      }

      .submitBtn {
        position: absolute;
        bottom: -3px;
        display: block;
        grid-area: submitBtn;
        width: 103.3%;
        height: 40px;
        background: crimson;
        border: none;
        color: #fff;
        transition: background .5s;
      }

      .submitBtn:hover {
        color:crimson;
        background:#fff;
        cursor: pointer;
        width:105%;
      }
      
/*********************
Footer
*********************/

footer {
  position: relative;
  display: flex;
  width: 100vw;
  height: 15vh;
  background: #fff;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  margin-top: 3vh;
  text-align: center;
  align-items: center;
}

footer p {
  color: #333;
  width: 90vw;
  margin: 0 auto;
}

footer p a {
  display: inline;
  font-size: 20px;
}

/***********************
Medi Queries
***********************/
@media(max-width: 768px) {
.contact-form {
        position: relative;
        display: grid;
        width: 90%;
        grid-template-columns: 100%;
        grid-template-rows: minmax(30px auto);
        gap: 10px;
        padding-bottom: 2em;
        justify-content: center;
        margin: 0 auto;
        align-items: center;
        grid-template-areas:
         /* "name subject"
          "mail textarea"
          "mobile textarea"
          "submitBtn textarea"*/
          "name"
          "mail"
          "mobile"
          "subject"
          "textarea"
          "submitBtn";
      }

      #name {
        grid-area: name;
      }

      #subject {
        grid-area: subject;
       
      }

      #mail {
        grid-area: mail;
        
      }

      #mobile {
        grid-area: mobile;
      }

      #textarea {
        grid-area: textarea;
        width:100.5%;
      }

      .submitBtn {
        position: absolute;
        bottom: -3px;
        display: block;
        grid-area: submitBtn;
        width: 102.7%;
        height: 40px;
        background: crimson;
        border: none;
        color: #fff;
        top: 5px;
        transition: background .5s;
      }

      main {
        height: 78%;
        padding-right:1.5%;
      }
}

    </style>
  </head>
  <body>
  <nav id="mobile-nav">
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a class="current-mobile" href="contactform.php">Contact</a>
        </li>
      </ul>
    </nav> 
    <div class='overlay'></div>
    <div id="bgimage"></div>
      <div id="nav">
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="about.html">About</a>
          </li>
          <li>
            <a class="current" href="contactform.php">Contact</a>
          </li>
        </ul>
      </div>
    <main class="animated bounceInLeft">
      <h2><span>angle</span>hair</h2>
      <form class="contact-form" action="contactformPHP.php" method="post">
        <input id="name" type="text" name="name" placeholder="First Name" required/>
        <input id="mail" type="text" name="mail" placeholder="Email" required/>
        <input id="mobile" type="tel" name="mobile" placeholder="Mobile" required/>
        <input id="subject" type="text" name="subject" placeholder="Subject" required />
        <textarea
          id="textarea"
          name="message"
          cols="30"
          rows="5"
          placeholder="Message"
          required
        ></textarea>
        <button class="submitBtn" type="submit" name="submit">Send</button>
      </form>
    </main>

    <footer>
      <p>
        Website designed by<a href="https://vergildkelley.com/" target="_blank">
          <span style="color: crimson;"
            >Vergil D. Kelley Web Design & Development</span
          ></a
        >
        &copy 2020 All other trademarks, service marks and trade names
        referenced in this material are the property of their respective owner
      </p>
    </footer>
    <script>
      /*****************************
       MOBILE NAV
      *****************************/
      const hamburger = document.querySelector(".hamburger");
      const navLinks = document.querySelector(".nav-links");
      const links = document.querySelectorAll(".nav-links li");

      hamburger.addEventListener("click", () => {
        navLinks.classList.toggle("open");
        links.forEach((link) => {
          link.classList.toggle("fade");
        });
      });
    </script>
  </body>
</html>

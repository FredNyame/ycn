<?php
$pagetitle = 'Contact Us | Yes I can Educational Center';
 include 'processForm.php';
 include 'header.php';
?>

    <!--Header page for the homepage-->
<header class="bck-wrapper" id="con-head">
  <?php
   include 'navbar.php';
  ?>
  <div class="container">
<div class="middle-con">
  <h1 class="about-h1">
    STAY IN TOUCH
  </h1>
</div>
</div>
</header>
    <!--End header page for the homepage-->

    <!--Section page for the homepage-->
<section id="conatct-first">
  <div class="contat-con">
    <div class="container">
      <div class="sub-head subAni" id="cSubHead">
       <h3 class="h3-core">How can we help you?</h3>
       <hr class="line-hr">
      </div>
    </div>
  </div>

<div class="form-con">
  <div class="container">
    <p class="form-p">For all general enquiries please form the form below and a reply will be sent to you as soon as possible.</p>
    <form id="formsubmit" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <label for="name">Your Full Name</label>
      <input id="name" type="text" name="name" placeholder="Please enter your name" value="<?php echo isset($_POST['name']) ? $name : '';?>">
      <p id="nameerr" class="error-msg"></p>
      <label for="email">Email Address</label>
      <input id="email" type="text" name="email" placeholder="Example@email.com" value="<?php echo isset($_POST['email']) ? $email : '';?>">
      <p id="emailerr" class="error-msg"></p>
      <label for="message">How can we help you?</label>
      <textarea id="message" name="message" id="" cols="30" rows="10" placeholder="What on your mind?"><?php echo isset($_POST['message']) ? $message : '';?></textarea>
      <p id="messageerr" class="error-msg"></p>
      <input id="submit" type="submit" name="submit" value="SEND MESSAGE">
      <p id="success" class="error-suc"></p>
    </form>
  </div>
</div>

<div class="info-con">
<div class="container">
  <h3 class="info-h3">For Quick Contact</h3>
<div class="col-6 text-center">
  <p class="text-p"><a href="tel+347-498-5527"><i class="fa fa-phone" aria-hidden="true"></i>347-498-5527</a></p>
  <p class="text-p"><a href="tel+347-596-0307"><i class="fa fa-phone-square" aria-hidden="true"></i>347-596-0307</a></p>
  <p class="text-p"><a href="tel+347-213-5045"><i class="fa fa-phone" aria-hidden="true"></i>347-213-5045</a></p>
</div>
<div class="col-6 text-center">
 <p class="text-p"><a href="mailto:yesican.ec@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>yesican.ec@gmail.com</a></p>
 <p class="text-p"><a href="mailto:davidyesican@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>davidyesican@gmail.com</a></p>
</div>
</div>
</div>
</section>
    <!--End Section page for the homepage-->

<?php
 include 'footer.php';
?>
<script src="js/conScroll.js"></script>
<script src="js/form.js"></script>
 </body>
</html>

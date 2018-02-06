<?php
$pagetitle = 'Yes I can Educational Center';
  include 'header.php';
 ?>
    <!--Header page for the homepage-->
<header class="header-con" id="header-height">
 <?php
  include 'navbar.php';
 ?>
<div class="con-wrap">
  <div class="middle-con" id="mid-con">
    <div class="h3-con" id="h3-id">
      <h3> YES&nbsp;I&nbsp;CAN </h3>
      <h3 class="text-center"> EDUCATIONAL CENTER  </h3>
    </div>
    <div id="h1-id">
      <h1 class="h1-con"> We Help High School Students Strengthen <br> Their Academic and Career Goals.</h1>
      <a href="http://www.xulonpress.com/bookstore/bookdetail.php?PB_ISBN=9781612154893" class="book_order">ORDER BOOK</a>
    </div>
  </div>
</div>
</header>
<!--End Header page for the homepage-->

<!--Section side for the homepage-->
<section id="first-sec">
<div class="container">
<div class="sub-head">
 <h3 class="h3-core">CORE DISCIPLINES</h3>
 <hr class="line-hr">
</div>
<div id="cardList">
  <div class="col-4">
  <div class="card-con first-card">
    <img src="images/time.png" alt="icon" class="cn_im">
    <h3 class="card-h3">Time Management</h3>
    <p class="card-p">Coaching students to develop the time management and study skills required for their career excellence. </p>
  </div>
  </div>
  <div class="col-4">
  <div class="card-con second-card">
    <img src="images/educate.svg" alt="icon" class="cn_im">
    <h3 class="card-h3">Mentorship</h3>
    <p class="card-p">Assisting students to think and reflect on their lives, behavior, failure and success through the book.</p>
  </div>
  </div>
  <div class="col-4">
  <div class="card-con third-card" >
    <img src="images/career.png" alt="icon" class="cn_im">
    <h3 class="card-h3">Career Builder</h3>
    <p class="card-p">Educating students on the consequences of their actions and helping them make the right choices.</p>
  </div>
  </div>
</div>
</div>
</section>

<!--Video section-->
<section id="second-sec">
<div class="video-con">
<div class="container">
<div class="sub-head">
 <h3 class="h3-core">Get To Know Us </h3>
 <hr class="line-hr">
</div>
<div class="video-wrap" id="vid">
   <iframe src="https://www.youtube.com/embed/UrcEh8RWkpI"></iframe>
</div>
</div>
</div>
</section>
<!-- End Video section-->

<!--Book detail section-->
<section id="third-sec">
<div class="book-con">
<div class="container">
<div class="sub-head">
 <h3 class="h3-core">Overview On Product</h3>
 <hr class="line-hr">
</div>
<div class="row-con">
<div class="col-6">
  <div class="img-in">
    <img src="images/Yes.jpg" alt="book icon">
  </div>
</div>
<div class="col-6">
<div class="book_detail">
<div class="book-head" id="bck">
  <h2 class="h2-muted">Simple <span class="book-des">Description</span></h2>
  <hr class="line-hre">
</div>
<div id="book-wrap">
  <p> “Yes I Can” is designed to help High School Students strengthen their academic and career goals.
  It offers students strategies for improving Study Skills, Time Management and Career Planning. David S. Kyere is the author of “Yes I Can”.</p>
  <button class="btn-con" id="btn-wrap">
    <a href="http://www.xulonpress.com/bookstore/bookdetail.php?PB_ISBN=9781612154893" role="buttom">Order book </a>
  </button>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--End Book detail Section-->

<?php
 include 'footer.php';
?>
<script src="js/scroll.js"></script>
  </body>
</html>

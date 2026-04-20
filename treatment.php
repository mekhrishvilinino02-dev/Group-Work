<?php 
include 'data.php'; 
include 'header.php'; 
?>

<div class="sub_page">
  <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Hospital <span>Treatment</span></h2>
      </div>
      <div class="row">
        <?php foreach ($treatments as $item): ?>
          <div class="col-md-6 col-lg-3">
            <div class="box">
              <div class="img-box">
                <img src="images/<?php echo $item['img']; ?>" alt="">
              </div>
              <div class="detail-box">
                <h5><?php echo $item['title']; ?></h5>
                <p><?php echo $item['desc']; ?></p>
                <a href="">Read More</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>
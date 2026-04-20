<?php include 'header.php'; ?>

<div class="sub_page">
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Get In Touch</h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="confirmation.php" method="POST">
              <div>
                <input type="text" name="full_name" placeholder="Full Name" required />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" required />
              </div>
              <div>
                <input type="text" name="phone" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button type="submit">SEND</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

<?php include 'footer.php'; ?>
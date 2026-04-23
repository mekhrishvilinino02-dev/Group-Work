<?php include 'header.php'; ?>

<section class="appointment_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <div style="background: #ffffff; padding: 40px; border-radius: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.1); margin-top: 50px;">
                    
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        // 1. Get In Touch ფორმის დამუშავება
                        if (isset($_POST['contact_submit'])) {
                            echo "<h2 style='color: #00c6a9;'>Your form is submitted.</h2>";
                        } 

                        // 2. Footer Subscribe ფორმის დამუშავება
                        elseif (isset($_POST['subscribe_submit'])) {
                            echo "<h2 style='color: #00c6a9;'>You're subscribed!</h2>";
                        }

                        // 3. Book Appointment ფორმის დამუშავება
                        elseif (isset($_POST['book_appointment_submit'])) {
                            $name = htmlspecialchars($_POST['name']);
                            $doctor = htmlspecialchars($_POST['doctor']);
                            $dept = htmlspecialchars($_POST['department']);
                            $phone = htmlspecialchars($_POST['phone']);
                            $symptoms = htmlspecialchars($_POST['symptoms']);
                            $date = htmlspecialchars($_POST['date']);

                            echo "<h3 style='color: #00c6a9;'>მადლობა, $name!</h3>";
                            echo "<h4 style='margin-bottom: 20px;'>თქვენი ჯავშანი წარმატებით მიღებულია.</h4>";
                            
                            echo "<div style='text-align: left; display: inline-block; font-size: 18px; line-height: 2;'>";
                            echo "<b>ექიმი:</b> $doctor <br>";
                            echo "<b>განყოფილება:</b> $dept <br>";
                            echo "<b>ტელეფონი:</b> $phone <br>";
                            echo "<b>სიმპტომები:</b> $symptoms <br>";
                            echo "<b>თარიღი:</b> $date";
                            echo "</div>";
                        }

                    } else {
                        // თუ გვერდზე პირდაპირი ლინკით შევიდნენ
                        echo "<h2>მონაცემები ვერ მოიძებნა.</h2>";
                    }
                    ?>

                    <div class="btn-box" style="margin-top: 30px;">
                        <a href="index.php" style="background: #00c6a9; color: white; padding: 10px 25px; border-radius: 5px; text-decoration: none;">მთავარზე დაბრუნება</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
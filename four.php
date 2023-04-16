<?php include_once 'structural-php/header.php';
?>
    <div class="header">
      <!-- <h2>Test</h2> -->

    </div>

<div class="container">                                  <!-- Container for entire page -->
    <div class="margin-left">                            <!--  Left Margin Container Div -->
    </div>

    <div class="middle-container">                       <!-- Middle Container -->

      <?php include_once 'navigation.php';
      ?>                                                        <!-- Navigation -->

      <div class="main-content-container">               <!--  Main Content Container-->

  <h3>Example of typewriter effect</h3>
  <p>For this exercise I am demonstrating the typewriter effect as well as using a Javascript object to demonstrate details about a game character</p>

  <p>I also added some buttons underneath the avatar for some interaction</p>

        <div class="tasks">
          <div class="avatar-card">
            <img src="assets/profile-young-tshirt.png" alt="no-image">
            <div class="avatar-button">
              <button type="button" name="button" onclick="alert('Individual Added to Privacy Protection Watchlist')"> + Watchlist</button>
              <button type="button" name="button" onclick="alert('Individual Ignored')"> - Ignore</button>
            </div>
          </div>

        <div>

          <div id="avatar-text"><div id="character1-data"></div></div>
          <div id="character1-form">

            <p>Privacy Agent Notes</p>
              <textarea id="message" name="message" rows="5" cols="40"></textarea>
              <span>

              <input type="button" value="Submit">
            </span>

        </div>
        </div>



            <button type="button" name="button" onclick="alert('Evaluation Completed')"> Complete Evaluation</button>
        </div>
      </div>                                              <!--  END Main Content Container -->
    </div>                                                <!-- END Middle Container -->

    <div class="margin-right">                         <!-- Right Margin Container Div -->
    </div>
  </div>                                                  <!-- END Container for entire page -->



<?php
include_once 'structural-php/footer.php';
?>

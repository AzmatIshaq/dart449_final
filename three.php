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
        <div class="training-container">
          <div class="training-variables-left">
              <p> <span>Excessive Debt</span> </p>
              <p> <span>Pickleball Player</span> </p>
              <p> <span> Var</span> </p>
              <p> <span> Var</span> </p>
          </div>
          <div class="training-dummy-profile">
            <img src="assets/profile-purp-hair.png" alt="no-image">
          </div>

          <div class="training-variables-right">
              <p> <span class="training-drag"> test </span> </p>
              <p> <span> Var</span> </p>
              <p> <span> Var</span> </p>
              <p> <span> Var</span> </p>
          </div>

          <!-- Created with help of Chat GPT -->
          <button onclick="startProgress()">Start Progress</button>
          <div class="progress-container">
            <div class="progress-bar"></div>
            <span class="progress-text">0%</span>
          </div>

        </div>
      </div>                                              <!--  END Main Content Container -->
    </div>                                                <!-- END Middle Container -->

    <div class="margin-right">                         <!-- Right Margin Container Div -->
    </div>
  </div>                                                  <!-- END Container for entire page -->



<?php
include_once 'structural-php/footer.php';
?>

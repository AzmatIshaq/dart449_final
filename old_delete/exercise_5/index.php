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
      ?>                                                 <!-- Navigation -->

      <div class="main-content-container">               <!--  Main Content Container-->
        <h3>Exercise 5</h3>
        <p>You can drag the elements on the left onto the squares at the bottom. Once that is complete click the analyze button to get an analysis of your work</p>
        <div class="training-container">
          <div class="training-variables-left">
            <div id="training-analysis-text">

            </div>
              <p class="training-drag"> <span> Credit Card Debt Increased </span> </p>
              <p class="training-drag"> <span> Joined Pickleball League </span> </p>
              <p class="training-drag"> <span> Engagement Announced on Lifebook </span> </p>
              <p class="training-drag"> <span> Purchased Melatonin Sleep Aid </span> </p>
          </div>
          <div class="training-dummy-profile">
            <img src="assets/profile-purp-hair.png" alt="no-image">
          </div>

          <!-- Created with help of Chat GPT -->
          <div>
            <button onclick="startProgress()">Analyze Data</button>

          <div class="progress-container">
            <div class="progress-bar"></div>
            <span class="progress-text">0%</span>
          </div>
        </div>



        </div>

        <!-- Droppable Container -->
        <div class="training-variables-right">
            <div class="droppable"> <p> <span> Personal </span> </p> </div>

            <div class="droppable"> <p> <span> Health </span> </p> </div>

            <div class="droppable"> <p> <span> Social </span> </p> </div>

            <div class="droppable"> <p> <span> Financial </span> </p> </div>

        </div>

      </div>                                              <!--  END Main Content Container -->
    </div>                                                <!--  END Middle Container -->

    <div class="margin-right">                            <!-- Right Margin Container Div -->
    </div>
  </div>                                                  <!-- END Container for entire page -->



<?php
include_once 'structural-php/footer.php';
?>

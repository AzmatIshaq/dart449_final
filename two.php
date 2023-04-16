<?php include_once 'structural-php/header.php';?>

    <div class="header">
      <!-- <h2>Test</h2> -->

    </div>

<div class="container">                                  <!-- Container for entire page -->
    <div class="margin-left">                            <!--  Left Margin Container Div -->
    </div>

    <div class="middle-container">                       <!-- Middle Container -->

      <?php include_once 'navigation.php';?>             <!-- Navigation -->

      <div class="main-content-container">               <!--  Main Content Container-->

        <div class="tasks-cards-container">              <!--  Tasks Cards Container-->

          <div class="tasks-cards" id="task-card-1">
            <div class="task-number-container">
              <div class="task-number">
                1
              </div>
            </div>

            <div class="task-card-image">
              <img src="assets/profile-black-tie.png" alt="no-image">
            </div>

            <div class="task-card-text">
              <p>Turned off microphone access. Very little data about internet habits. May be rerouting their data, we cannot guarantee their data is protected unless we have access to it. Send use a note reminding them to allow data access so they can be protected.</p>
            </div>
          </div>

          <div class="tasks-cards" id="task-card-2">
            <div class="task-number-container">
              <div class="task-number">
                2
              </div>
            </div>

            <div class="task-card-image">
              <img src="assets/profile-purp-hair.png" alt="no-image">
            </div>

            <div class="task-card-text">
              <p>User attended political rally. Evaluate data for privacy protection.</p>
            </div>
          </div>

          <div class="tasks-cards" id="task-card-3">
            <div class="task-number-container" id="task-number-3">
              <div class="task-number">
                3
              </div>
            </div>

            <div class="task-card-image">
              <img src="assets/profile-young-tshirt.png" alt="no-image">
            </div>

            <div class="task-card-text">
              <p>PRIORITY: User Privacy Protection Bracelet not providing data for 24 hours.</p>
            </div>

            <!-- Overlay -->
                <!-- <div class="modal-backdrop"></div> -->

                    <button id="open-overlay">Open Overlay</button>
                    <div class="overlay-container">

                  <div class="overlay">
                    <div class="overlay-content">
                      <img id="map" src="assets/world-map.png" alt="no-image">
                      <button id="close-overlay">Close Overlay</button>
                    </div>
                  </div>
                </div>
          </div>

        </div>                                             <!--  END Tasks Cards Container -->



      </div>                                              <!--  END Main Content Container -->
    </div>                                                <!-- END Middle Container -->

    <div class="margin-right">                         <!-- Right Margin Container Div -->
    </div>
  </div>                                                  <!-- END Container for entire page -->



<?php
include_once 'structural-php/footer.php';
?>

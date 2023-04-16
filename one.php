<?php include_once 'structural-php/header.php';
?>


<div class="container">                                  <!-- Container for entire page -->
    <div class="margin-left">                            <!--  Left Margin Container Div -->
    </div>

    <div class="middle-container">                       <!-- Middle Container -->

      <?php include_once 'navigation.php';
      ?>                                                        <!-- Navigation -->

      <div class="main-content-container">               <!--  Main Content Container-->

        <div class="profile-template">
          <div class="profile-header">
              <h3>Privacy Agent Valery #3323</h3>
            </div>
            <div class="profile-photo"><img src="assets/profile-purp-hair.png" alt="Profile picture"></div>
            <div class="profile-name">
              <p>test</p>
            </div>
            <div class="profile-bio">
                <p>test</p>

            <!-- Text Input section -->
            <div id="user-input-interaction">
              <form>
                <label for="userInput">Enter some text:</label>
                <input type="text" id="userInput" name="userInput">
                <input type="button" value="Submit" onclick="displayText()">
              </form>

              <p id="output"></p>
            </div>

            </div>
            <div class="profile-evaluation">
              <br>
                      <p> Update evaluation </p>
              <br>

  <!-- Progress Bar -->

     <div id="button-interactions">
       <h3>Interaction</h3>

       <!-- Created with help of Chat GPT -->
       <button onclick="startProgress()">Start Progress</button>
       <div class="progress-container">
         <div class="progress-bar"></div>
         <span class="progress-text">0%</span>
       </div>

          <p>
          Evaluation determined limited access to data. Social credit decreased. Enable more privacy protection features:
          <br>
          Device Microphone Access: Only allowed access for average of 22 hours per day. (add actual data and information about privacy here)
          </p>

          </div>

      </div>

        <div class="profile-biometrics"></div>

        </div>                                            <!-- END Profile Template -->
      </div>                                              <!--  END Main Content Container -->
    </div>                                                <!-- END Middle Container -->

    <div class="margin-right">                            <!-- Right Margin Container Div -->
    </div>
  </div>                                                  <!-- END Container for entire page -->



<?php
include_once 'structural-php/footer.php';
?>

<?php
/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 17:09
 */
?>

<!DOCTYPE html>
<html>

<?php  include 'includes/header.php';  ?>

<body>

<?php  include 'includes/navbar.php';  ?>

  <!--Form Advance-->          
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <h4 class="header2">Form request</h4>
        <div class="row">
          <form class="col s12" role="form" action="../controller/controller_register.php" name="register_request" method="post" accept-charset="UTF-8">
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name" type="text" name="firstname" required>
                <label for="first_name">First Name</label>
              </div>
            
              <div class="input-field col s6">
                <input id="last_name" type="text" name="lastname" required>
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <!--
            <div class="row">
              <div class="input-field col s12">
                <input id="email5" type="email">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password6" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            -->
            <div class="row">
              <div class="input-field col s6" >
                  <select class="browser-default" name="personality"  required>
                    <option value="" disabled selected>Lawyer profile</option>
                    <option value="Pitbull">Pitbull</option>
                    <option value="Diplomate">Diplomate</option>
                    <option value="Badass">Badass</option>
                    <option value="I don't care">I don't care</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                  <select class="browser-default" name="gender" required>
                    <option value="" disabled selected>Lawyer gender</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="I don't care">I don't care</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                  <select class="browser-default" name="position" required>
                    <option value="" disabled selected>Lawyer position</option>
                    <option value="10 km">10 km</option>
                    <option value="30 km">30 km</option>
                    <option value="50 km">50 km</option>
                    <option value="I don't care">I don't care</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                  <select class="browser-default" name="experience" required>
                    <option value="" disabled selected>Lawyer experience</option>
                    <option value="Less than 3 years">Less than 3 years</option>
                    <option value="Between 3 and 5 years">Between 3 and 5 years</option>
                    <option value="More than 5 years">More than 5 years</option>
                    <option value="I don't care">I don't care</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                  <select class="browser-default" name="subDomain">
                    <option value="" disabled selected>Choose a domain</option>
                    <option value="Less than 3 years">Haha</option>
                    <option value="Between 3 and 5 years">Hoho</option>
                    <option value="More than 5 years">Hehe</option>
                    <option value="I don't care">Huhu</option>
                  </select>
              </div>
            </div>
            <!--<div class="row">
              <div class="input-field col s12">
                <textarea id="message5" class="materialize-textarea" length="120"></textarea>
                <label for="message">Message</label>
              </div>-->
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="register_request">Submit
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<?php  include 'includes/footer.php';  ?>

</html>


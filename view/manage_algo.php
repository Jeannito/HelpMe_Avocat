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
        <h4 class="header2">Form coefficient</h4>
        </br>
        <div class="row">
          <form class="col s12" role="form" action="../controller/controller_change_coefficient.php" name="register_request" method="post" accept-charset="UTF-8" onSubmit="return verify(this.experience, this.gender, this.personality, this.position)">
          <?php
          require_once '../model/model_criterion.php';
          $criterionForm = ModelCriterion::getCriterionForm();
          foreach ($criterionForm as $criterions) {

          ?>
            <div class="row">
              <div class="input-field col s8">
                <input id="first_name" type="text" name="<?php echo $criterions['name'];?>" value ="<?php echo $criterions['coefficient'];?>" required>
                <label for="first_name">Coefficient <?php echo $criterions['name'];?></label>
              </div>
            </div>
            <?php } ?>
              <div class="row">
              <input type="hidden" name="type" value="form">
                <div class="input-field col s8">
                  <button class="btn light-blue waves-effect waves-light right" type="submit" name="register_request">Change coefficient
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        <h4 class="header2">HelpMe coefficient</h4>
        </br>
        <div class="row">
          <form class="col s12" role="form" action="../controller/controller_change_coefficient.php" name="register_request" method="post" accept-charset="UTF-8" onSubmit="return verify(this.rating, this.point, this.revenue, this.cases)">
          <?php
          require_once '../model/model_criterion.php';
          $criterionHelpMe = ModelCriterion::getCriterionHelpMe();
          foreach ($criterionHelpMe as $criterions) {

          ?>
            <div class="row">
              <div class="input-field col s8">
                <input id="first_name" type="text" name="<?php echo $criterions['name'];?>" value ="<?php echo $criterions['coefficient'];?>" required>
                <label for="first_name">Coefficient <?php echo $criterions['name'];?></label>
              </div>
            </div>
            <?php } ?>
              <div class="row">
                <input type="hidden" name="type" value="helpme">
                <div class="input-field col s8">
                  <button class="btn light-blue waves-effect waves-light right" type="submit" name="register_request">Change coefficient
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</body>

<script type="text/javascript">
<!-- Debut

var fieldalias="password"

function verify(element1, element2, element3, element4)
 {
  var passed=false;
  if ((element1 + element2 + element3 + element4) == 1)
  {
    passed=true;
  }
  else{
    alert("The sum of coefficient have to be equals at one");
  }
  return passed;
 }

</script>

<?php  include 'includes/footer.php';  ?>

</html>


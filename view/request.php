<?php
/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:39
 */
?>

<!DOCTYPE html>
<html>

<?php  include 'includes/header.php';  ?>

<body>

<?php  include 'includes/navbar.php'; ?>

</br>
</br>
</br>

<?php
require_once '../model/model_request.php';
$req = ModelRequest::GetRequest($_POST['id_request']); 
require_once '../model/model_user.php';
$user = ModelUser::GetUser($req['idUser']); ?>

      <div class="box">
      <div class='container'>           
            <table class='responsive-table'>
              <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Sub Domain</th>
                <th>Gender</th>
                <th>Personnality</th>
                <th>Location</th>
                <th>Experience</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                <td><?php echo $user['firstname'];?></td>
                <td><?php echo $user['lastname'];?></td>
                <td><?php echo $req['subDomain'];?></td>
                <td><?php echo $req['gender'];;?></td>
                <td><?php echo $req['personality'];;?></td>
                <td><?php echo $req['position'];;?></td>
                <td><?php echo $req['experience'];;?></td>
                <?php if($req['isTreated'] == 0 ){ ?>
                <td>
                <form action="../controller/controller_find_lawyers.php"  name="profil" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                <input type="hidden" name="id_request" value="<?php echo $_POST['id_request'];?>">
                <input   class="btn btn-primary btn btn-primary light-blue" type="submit" value="Find lawyers"/>
                </form>
                </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
      </div>

<?php if($req['isTreated'] == 0 ){ ?>

<?php } else {
?>
  <!-- //////////////////////////////////////////////////////////////////////////// -->
    <div class="section scrollspy" id="work">
    <div class="container">
        <h4 class="header text_b light-blue-text">Request <?php echo $req['id'];?></h4>
        </br>
        <div class="row">
        <?php 
        require_once '../model/model_lawyer.php';
        $possibleLawyer = ModelLawyer::GetLawyerByRequest($req['id']);
        foreach ($possibleLawyer as $onepossiblelawyer) {
            $lawyerInfo = ModelLawyer::GetInformationById($onepossiblelawyer['idLawyer']);
            ?>
            <div class="col s12 m4 16">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  light-blue accent-2"><?php echo ($onepossiblelawyer['finalCompatibility']*100);?> % </a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php echo $lawyerInfo['firstname'];?> <?php echo $lawyerInfo['lastname'];?> <i class="mdi-navigation-more-vert right"></i></span>

                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"> Lawyer's information<i class="mdi-navigation-close right"></i></span>
                        <p>Gender : <?php echo $lawyerInfo['gender'];?></p>
                        <p>Experience : <?php echo $lawyerInfo['experience'];?></p>
                        <p>Proximity : <?php echo $lawyerInfo['proximity'];?></p>
                        <p>Personality : <?php echo $lawyerInfo['personality'];?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php } ?>

</body>

</br>
</br>
</br>

<?php  include 'includes/footer.php';  ?>

</html>
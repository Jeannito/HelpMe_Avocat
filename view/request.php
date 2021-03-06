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
                <td><?php echo $req['gender'];?></td>
                <td><?php echo $req['personality'];?></td>
                <td><?php echo $req['position'];?></td>
                <td><?php echo $req['experience'];?></td>
                <?php/* if($req['isTreated'] == 0 ){ */?>
                <td>
                <form action="../controller/controller_find_lawyers.php"  name="profil" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                <input type="hidden" name="id_request" value="<?php echo $_POST['id_request'];?>">
                <input   class="btn btn-primary btn btn-primary light-blue" type="submit" value="Find lawyers"/>
                </form>
                </td>
                <?php/* } */?>
                </tr>
            </tbody>
        </table>
      </div>

<?php if($req['isTreated'] == 0 ){ ?>

<?php } else {
?>
    </br>
    <p class="center">The time for the last execution is <?php echo $req['executionTime'];?> secondes</p>
    </br>
  <!-- //////////////////////////////////////////////////////////////////////////// -->
    <div class="section scrollspy" id="work">
    <div class="container">
        <h4 class="header text_b light-blue-text">Request <?php echo $req['id'];?></h4>
        </br>
        <div class="row">
        <?php 
        require_once '../model/model_lawyer.php';

        for($i=$req['numberOfExecution']; $i>0; $i--){

            $possibleLawyer = ModelLawyer::GetLawyerByRequest($req['id']); 

            $tab = array(

                'idRequest' => $req['id'],

                'executionNumber' => $i

                );

            $resultat = ModelLawyer::GetExecutionDate($tab); 

            ?>

            <h5 class="header text_b light-blue-text">Execution number <?php echo $i;?></h5>

            <p>Execution date : <?php echo $resultat['executionDate'];?></p>


            <?php foreach ($possibleLawyer as $onepossiblelawyer){

                if($onepossiblelawyer['executionNumber'] == $i){

                    $lawyerInfo = ModelLawyer::GetInformationById($onepossiblelawyer['idLawyer']);
                    ?>
                    <div class="col s12 m4 16">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  light-blue accent-2"><?php echo ($format = number_format($onepossiblelawyer['finalCompatibility']*100, 2));?> % </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><?php echo $lawyerInfo['firstname'];?> <?php echo $lawyerInfo['lastname'];?> <i class="mdi-navigation-more-vert right"></i></span>

                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"> Lawyer's information<i class="mdi-navigation-close right"></i></span>
                                <p>Gender : <?php echo $lawyerInfo['gender'];  
                                if($lawyerInfo['gender'] == $req['gender']){?>
                                    <img src="../images/green.png" alt="Right criterion" />
                                <?php
                                } else {
                                ?>
                                    <img src="../images/red.png" alt="Right criterion" />
                                <?php
                                }
                                ?>
                                </p>
                                <p>Exp : <?php echo $lawyerInfo['experience'];
                                if($lawyerInfo['experience'] == $req['experience']){?>
                                    <img src="../images/green.png" alt="Right criterion" />
                                <?php
                                } else {
                                ?>
                                    <img src="../images/red.png" alt="Right criterion" />
                                <?php
                                }
                                ?>
                                </p>
                                <p>Proximity : <?php echo $lawyerInfo['proximity'];
                                if($lawyerInfo['proximity'] == $req['position']){?>
                                    <img src="../images/green.png" alt="Right criterion" />
                                <?php
                                } else {
                                ?>
                                    <img src="../images/red.png" alt="Right criterion" />
                                <?php
                                }
                                ?>
                                </p>
                                <p>Personality : <?php echo $lawyerInfo['personality'];
                                if($lawyerInfo['personality'] == $req['personality']){?>
                                    <img src="../images/green.png" alt="Right criterion" />
                                <?php
                                } else {
                                ?>
                                    <img src="../images/red.png" alt="Right criterion" />
                                <?php
                                }
                                ?>
                                </p>
                                <p>Rating : <?php echo $lawyerInfo['rating'];?>/5</p>
                                <p>Point : <?php echo $lawyerInfo['point'];?></p>
                                <p>Cases : <?php echo $lawyerInfo['cases'];?></p>
                                <p>Revenue : <?php echo $lawyerInfo['revenue'];?> €</p>
                                <p>Execution Number : <?php echo $onepossiblelawyer['executionNumber'];?></p>
                            </div>
                        </div>
                    </div>

            <?php
                    }
                }
            }
            ?>
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
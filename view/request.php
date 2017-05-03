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
        <h4 class="header text_b red-text">Request 1 </h4>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">56 %</a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Erick Taru <i class="mdi-navigation-more-vert right"></i></span>

                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"> Réhabilitation des locaux du BDE <i class="mdi-navigation-close right"></i></span>
                        <p>Ré-aménager et ré-organiser la disposition des locaux du BDE. L'objectif serait de le rendre plus ouvert aux élèves afin d'en faire un endroit dynamique et convivial.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">56 %</a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Jean Bruté de Rémur <i class="mdi-navigation-more-vert right"></i></span>

                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Dissociation BDA/BDE <i class="mdi-navigation-close right"></i></span>
                        <p>Dissocier le BDA du BDE afin de laisser plus de responsabilité et de liberté aux différents clubs qui le composent. L'avantage serait qu'il puisse disposer de son propre budget afin de mener à bien de plus gros projets.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">56 %</a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Samuel Orru<i class="mdi-navigation-more-vert right"></i></span>

                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Création d'une Team chargée de créer des petits événements <i class="mdi-navigation-close right"></i></span>
                        <p>Le but de la team petit évent serait de dynamiser les périodes entre chaque grand rendez-vous, en organisant des petits événements (ex: petit dejeuner, repas, tournois).</p>
                    </div>
                </div>
            </div>
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
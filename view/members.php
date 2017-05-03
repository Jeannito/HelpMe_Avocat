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

<?php  include 'includes/navbar.php';  ?>

	</br>

    <div>
      <form action="../controller/controller_recherche_vin.php" name="search" class="navbar-form" role="search" method="post" accept-charset="utf-8">
        <div class="form-group">
          <input type="text" name="motclef" id="Userlogin" class="form-control" placeholder="Tapez le mot clé">
        </div>
        <button type="submit" class="btn btn-default light-blue"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
        </form>
    </div>

    </br>

      <div class="box">
      <div class='container'>           
            <table class='responsive-table'>
              <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
              </tr>
              </thead>
              <tbody>
    <?php
	require_once '../model/model_user.php';
	$user = ModelUser::GetAllMembers();

    foreach ($user as $member) {
      $firstname = $member -> firstname;
      $lastname = $member -> lastname;
      $id_user = $member -> id;


    ?>
          <tr>
           <td><?php echo $firstname;?></td>
           <td><?php echo $lastname;?></td>
           <td>
            <form action="../controller/controller_member_profile.php"  name="profil" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
            <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
            <input   class="btn btn-primary btn btn-primary light-blue" type="submit" value="User Profile"/>
            </form>
           </td>
          </tr>
      <?php }?>
      </tbody>
      </table>
      </div>

</br>
</br>
</br>

</body>

<?php  include 'includes/footer.php';  ?>

</html>
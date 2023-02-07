<!DOCTYPE html>
<html lang="en">
<body>

  <?php 
    $this->load->view("tete");
  ?>

<?php 
  $this->load->view("header");
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
   
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $name;?></h2>
              <h3>Web Master</h3>
             
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Ajouter Categorie</button>
                </li>
                
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Supprimer Categorie</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Ajout Categorie</h5>
                    <form action="<?php echo site_url('ajout');?>" method="get">
                      <input type="text" name="categorie" class="form-control">
                      <div class="text-center"><br>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                    </form>

                </div>

               
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                  <ul class="list-group">
                      <?php foreach($categorie->result_array() as $row) { ?>
                        <li class="list-group-item"><span><?php echo $row['nom'];?></span><button class="btn-danger" style="float: right"><a href="<?php echo site_url("ajout/delete");?>?idC=<?php echo $row['idC'];?>" style="color: white">Delete</a></button></li>
                      <?php } ?>
                    </ul>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

</body>

</html>
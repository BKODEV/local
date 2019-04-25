<nav class="main-nav navbar navbar-expand-lg navbar-light" style="background-color:#aa2b38;">
      <a class="navbar-brand" href="#">
          <img src="../images/logo.png" width="150">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link nav-l" href="index.php">Acceuil</a>
          </li>
          <li class="nav-item">
              <a class="nav-link nav-l" href="construction.php">Constructions</a>
          </li>
          <li class="nav-item">
              <a class="nav-link nav-l" href="devis.php">Demander un dévis</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link nav-l dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Recrutements
              </a>
              <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="#">Recrutement ouvrier</a>
              <a class="dropdown-item" href="#">Postuler </a>
              </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default"
              aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="<?php echo'profil.php?id='.$_SESSION['id'];?>">Mon Compte</a>
              <a class="dropdown-item" href="../admin/deconnexion-user.php">Deconnexion</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
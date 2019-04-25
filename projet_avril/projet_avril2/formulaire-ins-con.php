<!-- Popup d'inscription -->
<div id="inscription" class="modal">
    <!-- Material form register -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4 bg-danger">
    <strong>Inscrivez - vous</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form action="admin/traitement.php" method="post" class="text-center" style="color: #3f4dc9;" background-color>

        <div class="form-row">
          
        Vous êtes :
            <div class="col">
                <!-- Type d'utilisateur -->
                <div class="md-form">
                    <label for="particulier">Particulier</label>
                    <input type="radio" id="particulier" name="type" value="particulier">
                </div>
            </div>
            <div class="col">
                <div class="md-form">
                    <label for="entreprise">Entreprise</label>
                    <input type="radio" id="entreprise" name="type" value="entreprise">
                </div>
            </div>
        </div>
        <!--Nom et prenom-->
        <div class="md-form mt-0">
            <label for="nom">Nom et prenom</label>
            <input type="text" id="nom" class="form-control" name="nom" placeholder="Ou nom Entreprise">
        </div>
        <!--Profession-->
        <div class="md-form mt-0">
            <label for="profession">Profession</label>
            <input type="text" id="profession" class="form-control" name="profession" placeholder="domaine pour entreprise">
        </div>
        <!--ville-->
        <div class="md-form mt-0">
            <label for="ville">Ville</label>
            <input type="text" id="ville" class="form-control" name="ville">
        </div>
        <!--adresse-->
        <div class="md-form mt-0">
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" class="form-control" name="adresse">
        </div>
        <!-- Contact -->
        <div class="md-form">
            <label for="phone">Numero de telephone</label>
            <input type="text" id="phone" class="form-control" name="contact">
        </div>
        <!-- E-mail -->
        <div class="md-form mt-0">
            <label for="email">E-mail</label>
            <input type="email" id="email" class="form-control" name="email">
        </div>
        <!--nom d'utilisateur-->
        <div class="md-form mt-0">
            <label for="pseudo">Nom utilisateur</label>
            <input type="text" id="pseudo" class="form-control" name="pseudo">
        </div>
        <!-- Password -->
        <div class="md-form">
            <label for="mdp1  ">Password</label>
            <input type="password" id="mdp1" class="form-control" name="mdp1">
            <small id="mdpmessage" class="form-text text-muted mb-4">
                Plus de 8 caractères recommandés
            </small>
        </div>
        <div class="md-form">
            <label for="mdp2">Password</label>
            <input type="password" id="mdp2" class="form-control" name="mdp2">
            <small id="mdpmessage" class="form-text text-muted mb-4">
                Les caractères doivent être identiques
            </small>
        </div>

        

        <!-- Sign up button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" id="inscription-s">Inscrivez - vous</button>

        <!-- Social register -->
        <a href="#!">Vous avez un compte? connectez-vous!!:</a>
        </a>

        <hr>

        <!-- Terms of service -->
        <p>En cliquant sur 
            <em>s'inscrire</em> vous accepter nos
            <a href="#!" target="_blank">conditions</a>
    </form>
    <!-- Form -->
</div>

</div>
<!-- Material form register -->
  <a href="#" rel="modal:close">Close</a>
</div> 


<!--connexion-->

<div id="connexion" class="modal">
  <!-- Material form subscription -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4">
    <strong>Connexion</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5">

    <!-- Form -->
    <form action="admin/connexion.php" method="post" class="text-center" style="color: #757575;">

        <!-- Username -->
        <div class="md-form mt-3">
            <input type="text" id="utilisateur" class="form-control" name="utilisateur">
            <label for="utilisateur">Nom d'utilisateur</label>
        </div>

        <!-- mot de passe -->
        <div class="md-form">
            <input type="password" id="mdp" class="form-control" name="mdp">
            <label for="mdp">Mot de passe</label>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" id="connexion-s">Se connecter</button>

    </form>
    <!-- Form -->

</div>

</div>
<!-- Material form subscription -->
</div>

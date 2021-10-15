<header >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img class="logo" src="https://cdn.1min30.com/wp-content/uploads/2018/10/Leboncoin-logo.jpg" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=$root?>accueil">Accueil <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?=$root?>publier">Déposer une annonce</a>
      </li>

      
      
      <li class="nav-item">
        <a class="nav-link" href="<?=$root?>contact">se connecter</a>
      </li>
      <?php if($url=='accueil' || $url==''){?>
        <li class="nav-item">
          <form class="form-search nav-link" method="POST" action='' id="s" >
            <div class="input-append  ">
              <input type="text" class="input-medium search-query" name="recherche" placeholder="recherche" value="">
              <input type="SUBMIT" class="add-on" value="recherche!" name="submit-recherche"> 
            </div>
          </form>
        </li>
      <?php } ?>
    </ul>
    
  </div>
</nav>
</header>
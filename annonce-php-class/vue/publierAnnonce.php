<!DOCTYPE html>
<html lang="en">
    <?php include_once('head.php');
    ?>
    
    <body>
        <?php include_once('header.php');
        ?>
        <div class="container">

            <main class="pt-4 pb-4">
                

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quel est le titre de l'annonce ?</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" >
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Prix</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="prix" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Adresse</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="adresse" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ajouter une image</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Choisissez une catégorie suggérée</label>
                        <select class="form-control" name="categories">
                            <option value="voiture">Voiture</option>
                            <option value="maison">Maison</option>
                            <option value="multimedia">Multimédia</option>
                            <option value="loisir">Loisir</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" name="publier-annonces" value='publier'>
                </form>



                <!-- <form method="POST" enctype="multipart/form-data">
                    <input type="text" name="titre" placeholder="Titre">
                    <br>
                    <textarea name="contenu"></textarea>
                    <br>
                    <input type="file" id="image" name="image">
                    <div id="list"></div>
                    <br>
                    <input type="submit" name="publier-article" value="Publier l'article">
                </form> -->
                
            </main> 
        </div>
        <?php include_once('footer.php');
        ?>   


        
        
    </body>
</html>
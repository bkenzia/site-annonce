<!DOCTYPE html>
<html lang="en">
    <?php include_once('head.php');?>
    
    <body>
        <?php include_once('header.php');
        ?>
        <div class="container">

            <main class="pt-4 pb-4">
                <h2>Article</h2>
               <?php foreach($annonces as $annonce){?>

                <article>
                    <div class="row  w-50" id='annonces'>
                        <img class="col-lg-12" id="image_annonce" src="/MVC/annonce-php-class/public/images/<?= $annonce['image']?>" alt="">
                        <div class="col-lg-12 text-center">
                        <div >
                            <h2><?=$annonce['nom'];?></h2>
                            <p> <i>prix : </i><?= $annonce['prix']?>€</p>
                            </div>
                            <div >
                                <p><i>adresse :</i> <?=$annonce['adresse']?></p>
                                <p><i> catégorie :</i> <?=$annonce['categories']?></p>
                            </div>
                        </div>
                    </div>
                            
                </article>
              <?php }?>
            </main> 
        </div>
        <?php include_once('footer.php');
        ?>   


        
        
    </body>
</html>
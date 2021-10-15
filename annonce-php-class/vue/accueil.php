<!DOCTYPE html>
<html lang="en">
    <?php include_once('head.php');
    ?>
    
    <body>
        <?php include_once('header.php');
        ?>
        <div class="container">

            <main class="pt-4 pb-4">
                <h2>Annonces : Centre</h2>
                <ul>
                <?php if($valid){?>
                    <?php foreach($rechercheResult as $annonce){?>
                        <li>
                            <article>
                                <a href="<?=$root?>article/<?=$annonce['id'] ?>">

                                    <div class="row  w-50" id='annonces'>
                                        <img class="col-lg-6" id="image_annonce" src="public/images/<?= $annonce['image']?>" alt="">
                                        <div class="col-lg-4">
                                            <div >
                                                <h2><?=$annonce['nom'];?></h2>
                                                <p><?= $annonce['prix']?>€</p>
                                            </div>
                                            <div >
                                                <p><i>adresse :</i> <?=$annonce['adresse']?></p>
                                                <p><i> catégorie :</i> <?=$annonce['categories']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </li> 
                    <?php }?>
                <?php }else{?>
                

                    <?php foreach($annonces as $annonce){?>
                        <li>
                            <article>
                                <a href="article/<?=$annonce['id'] ?>">

                                    <div class="row  w-50" id='annonces'>
                                        <img class="col-lg-6" id="image_annonce" src="public/images/<?= $annonce['image']?>" alt="">
                                        <div class="col-lg-4">
                                            <div >
                                                <h2><?=$annonce['nom'];?></h2>
                                                <p><?= $annonce['prix']?>€</p>
                                            </div>
                                            <div >
                                                <p><i>adresse :</i> <?=$annonce['adresse']?></p>
                                                <p><i> catégorie :</i> <?=$annonce['categories']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </li> 
                    <?php }?>
                <?php } ?>
                    
                
                </ul>
    
            </main> 
        </div>
        <?php include_once('footer.php');
        ?>   


        
        
    </body>
</html>
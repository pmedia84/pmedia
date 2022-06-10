<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Get your business online for just £100. Limited time offer. We will build you a custom website that will give you everything to get started online">
    <meta property="og:title" content="Parrot Media: Websites" />
    <meta property="og:description" content="Some examples of our latest designs. All our designs are fully mobile responsive so they will look amazing on any device." />
    <meta property="og:image" content="https://www.parrotmedia.co.uk/img/ogdata/ogportfolio.jpg" />
    <meta property="og:type" content="website" />
    <title>Parrot Media : Blog</title>



<?php 
include("inc/nav.inc.php");
include("db/connect.php");
$article_query= ('SELECT * FROM articles');
$article_result = $conn->query($article_query);

?>

<main>



<div class="hero container blog-hero ">
    <div class="herotextbody">
        <div class="">
            <h1 class="herotitle">News And Advice</h1>
            <p class="herosubtitle">Helpful tips and tricks from us at Parrot Media to help you develop your online presence</p>
        </div>

        
    </div>

</div>
<section class="container">
    <div class="banner m-b-2">
        <h2 class="section-title">Articles</h2>
        <p class="lead">Here you can find our latest news and articles.</p>
    </div>
<div class="gridcontainer">
    <?php foreach ($article_result as $article):
    $article_content = html_entity_decode($article['article_content']);
    $date_posted = strtotime($article['date_posted']);

   



    ?>
    
    <div class="blog-card">
        <div class="blog-card-title">
            <a href="article?article_id=<?=$article['article_id'];?>">
                <h2><?=$article['article_title'];?></h2>
            </a>
            <img class="blog-card-profile-pic" src="img/user-krb.jpg" alt="">
        </div>
        <div class="blog-card-content">
            <p><?=$article['article_description'];?></p>
        </div>
    <div class="blog-card-footer">
        <span><?=date("F / jS / Y", $date_posted);?></span>
    </div>
    </div>
    
    
        <?php endforeach;?>
</div>




</section>





</main>
<?php include("inc/footer.inc.php");?>
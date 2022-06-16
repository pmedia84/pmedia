<?php 
include("db/connect.php");
if (isset($_GET['article_id'])){
   
};

$article_query= ('SELECT * FROM articles where article_id ='. $_GET['article_id']);
$article_result = $conn->query($article_query);
$article = $article_result->fetch_assoc();
$header_img = $article['article_header_img'];

if($header_img <= 0){
    $header_img = "blog-hero.webp";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="<?=$article['article_description'];?>">
    <meta property="og:title" content="<?=$article['article_og_title'];?>" />
    <meta property="og:description" content="<?=$article['article_og_description'];?>" />
    <meta property="og:image" content="https://www.parrotmedia.co.uk/img/ogdata/<?=$article['article_og_img_filename'];?>" />
    <meta property="og:type" content="article" />
    <title>Parrot Media : <?=$article['article_title'];?></title>



<?php 
include("inc/nav.inc.php");




?>

<main>



<div class="hero container blog-hero " style="background-image: url('img/<?=$header_img;?>');">
    <div class="herotextbody">
        <div class="">
            <h1 class="herotitle"><?=$article['article_title'];?></h1>
            <p class="herosubtitle"><?=$article['article_subtitle'];?></p>
        </div>

        
    </div>

</div>
<section class="container">
    <div class="banner m-b-2">
        <h2 class="section-title"><?=$article['article_title'];?></h2>
        <p class="lead"><?=$article['article_subtitle'];?></p>
    </div>


    <div class="blog-content">
        <?=$article['article_content'];?>
        
      
    </div>

</section>





</main>
<?php include("inc/footer.inc.php");?>



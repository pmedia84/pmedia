<!DOCTYPE html>
<html lang="en">

<head>
<meta property="og:title" content="Parrot Media: Limited Time Offer" />
<meta property="og:description" content="Get your business online for less with Parrot Media. Custom built website for only £100" />
<meta property="og:image" content="https://www.parrotmedia.co.uk/img/promo-ad.png"/>
<meta property="og:type" content="website" />
    <title>Parrot Media : Special Offers - Custom Website for £100</title>

    <?php include("inc/nav.inc.php"); ?>

<main>
<section class="containerfw hero portfoliohero ">
           

           </div>
       </section>
       <section class="container banner">
           <h1 class="bannertitle">Portfolio</h1>
       <p class="m-b-1 lead">Some examples of some of the work we have done. </p>
       <p class="lead">This is just a taste of what we can do, if you don't see a design here that quote does it for you, do not worry. We have something for everyone</p>

       </section>
       <div class="container">
<?php 



    $db = new mysqli("localhost", "root", "", "portfolio");

    $query = "SELECT `id`, `name`, `content`, `imageurl` FROM `client` WHERE 1;";
    $result = $db->query($query);
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $content = $row['content'];
        $imageurl = $row['imageurl'];
        echo "
        
        
        <div class=''>
                <div class=''>
                    <h1>$name</h1>
                    

                </div>
                <p>$content</p>
                <img src='img/$imageurl' alt=''>
            
        </div>
        
        
        
        \n";
    }
    
    ?>

</div>

<?php include("inc/footer.inc.php"); ?>
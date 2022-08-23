<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parrot Media : Contact Us</title>

    <?php include("inc/nav.inc.php"); ?>

    <main>
    <div class=" hero contacthero">
            <div class="herotextbody herocard">

                <h1 class="herotitle">Contact Us</h1>
                <p class="herosubtitle">Need to get in touch with us? Or have a technical support question?</p>
                <p class="herosubtitle">Simply fill out the form below and we will be in contact with 24 Hours</p>


                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Web Design</li>
                    <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Web Development</li>
                    <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Social Media Marketing</li>
                    <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Web Hosting</li>

                </ul>

            </div>

        </div>
        <section class="container banner">
            <h1 class="bannertitle">Contact Us</h1>
        <p class="m-b-1 lead">Parrot Media are here to help you grow your business. Contact us to find out how we can help your business online. From web design and development to social media marketing, we have something for everyone!</p>

        </section>

        <?php include("inc/contact.inc.php");?>


        <script>
  $(document).ready(function() {
    $("[href]").each(function() {
      if (this.href == window.location.href){
        $(this).addClass("activelink");
      }
    });
  });
</script>
        <?php include("inc/footer.inc.php"); ?>
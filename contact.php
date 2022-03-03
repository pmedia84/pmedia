<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parrot Media : Contact Us</title>

    <?php include("inc/nav.inc.php"); ?>

    <main>
        <section class="containerfw hero contacthero">
           

            </div>
        </section>
        <section class="container banner">
            <h1 class="bannertitle">Contact Us</h1>
        <p class="m-b-1 lead">Parrot Media are here to help you grow your business. If you would like a quotation, please fill out our <a href="quote_request">Quote Request Form.</a> For anything else, or you simply just want to say hello, then use this form below:</p>

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
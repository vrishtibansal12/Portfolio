<?php
    require "header.php";
?>
<style>
</style>
<header class="masthead text-center">
      <div class="container">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="margin-top: 200px;"><strong>Welcome to Certificate Mailer!</strong><br> I hope that satisfies your needs. Please provide feedback.</h1>
        </div>
      </div>
</header>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script>
    $("nav .navbar-nav .nav-link").click(function(e){
        $("nav .navbar-nav .nav-link").find(".active").removeClass("active");
        var idClicked = e.target.id;
        $(idClicked).addClass("active");
        
    });

</script>
<?php
    require "footer.php";
?>
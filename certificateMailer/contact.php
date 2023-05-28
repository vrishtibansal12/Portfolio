<?php
    require "header.php";
?>
<style>
@import url(https://fonts.googleapis.com/css?family=Cabin);

body {
    width: 100%;
    margin: 0;
    font-family: sans-serif;
    /* background: url('https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=fb402c127c7cd94ea407693b501332d3'); */
    background-size: cover;
    font-family: 'Cabin', sans-serif;
}

header {
    background: #000;
    margin: 0 auto;
    width: 100%;
    padding: 0;
    opacity: 0.7;
}

h1 {
    text-align: center;
    color: black;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin: 0;
    font-family: 'Cabin', sans-serif;
    font-size: 25px;
    padding: 30px;
}

h3 {
    text-align: center;
    color: black;
    margin: 0;
    font-family: 'Cabin', sans-serif;
    padding: 10px;
}

h3 a {
    text-decoration: none;
    color: #000;
}

#formContainer {
    height: auto;
    width: 50%;
    font-family: 'Cabin', sans-serif;
    margin: 0 auto;
    margin-top: 40px;
    display: block;
    background: white;
    padding: 20px;
    border-radius: 15px;
}

form {
    font-family: 'Cabin', sans-serif;
    padding: 0;
    width: 90%;
    border-radius: 15px;
    margin: 0 auto;
    margin-bottom: 20px;
}

.feedback-input {
    color: #000;
    font-family: 'Cabin', sans-serif;
    font-weight: 400;
    font-size: 18px;
    border-radius: 0;
    margin-right: 0;
    line-height: 22px;
    background-color: none;
    padding: 13px 13px 13px 13px;
    margin-bottom: 10px;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    border-bottom: 2px solid #343a40;
    border-top: none;
    border-left: none;
    border-right: none;
}

.feedback-input:focus {
    box-shadow: 0;
    color: #343a40;
    transition: .4s ease;
    outline: none;
    border-bottom: 2px solid black;
    padding: 13px 13px 13px 13px;
}

.focused {
    color: #000;
    border: #000 solid 3px;
}

textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize: vertical;
}

#button-blue {
    font-family: 'Cabin', sans-serif;
    font-weight: 400;
    width: 100%;
    border: none;
    cursor: pointer;
    background-color: #343a40;
    color: white;
    font-size: 24px;
    padding-top: 22px;
    padding-bottom: 22px;
    margin-top: -4px;
    font-weight: 700;
    transition: .3s ease;
}

#button-blue:hover {
    background-color: rgba(0, 0, 0, 0);
    color: white;
    background: #000;
}

.submit:hover {
    color: #fff;
}
</style>
<div id="formContainer" class="container">
    <div class="eight">
        <h1><strong>Contact form</strong></h1>
    </div>

    <form action="https://formsubmit.co/dc67e8843af33001001eebc9e5fd74f0" method="post">
        <p class="name">
            <input name="name" type="text" class="feedback-input" placeholder="Name" id="name" />
        </p>

        <p class="email">
            <input name="email" type="text" class="feedback-input" id="email" placeholder="Email" />
        </p>

        <p class="text">
            <textarea name="text" class="feedback-input" id="comment" placeholder="Comment"></textarea>
        </p>

        <div class="submit">
            <input type="submit" value="SEND!" id="button-blue" />
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
// $("nav .navbar-nav .nav-link").click(function(e){
//     $("nav .navbar-nav .nav-link").find(".active").removeClass("active");
//     var idClicked = e.target.id;
//     $(idClicked).addClass("active");
// });

$("#contact").addClass("active");
</script>
<?php
    require "footer.php";
?>
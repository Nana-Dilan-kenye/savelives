 
<script src="/preloader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function ($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).on("load", function () {
    $('.preloader-wrapper').fadeOut();
    $('body').removeClass('preloader-site');
});
</script>
<script src="https://use.fontawesome.com/ca84490cc7.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/akjpro/form-anticlear/base.js"></script>
</body>

</html>
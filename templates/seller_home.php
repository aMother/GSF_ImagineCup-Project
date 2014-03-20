<script>

    $(function () {
        $('#sellerNavbar').append(nav);
        $('#home').addClass('active');
    })
</script>
<script src="../html/js/sellerNavbar.js"></script>
<div id="sellerNavbar" class="navbar navbar-inverse navbar-fixed-top">
</div>
<div style="margin-top: 50px;">
     <h3>Your Notifications</h3>
    <p class="text-info"><small>You will receive a notification here when someone will accept to buy food  we requested from your shop's database. We request you to respect our word. And Remember to update person's score as +1 if he comes and -1 if he didn't come to buy. Person will tell you his id when he comes.</small></p>
   
    <?php
        require("../html/accept_notifications.php");
    ?>
</div>
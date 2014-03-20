<script>

    $(function () {
        $('#buyerNavbar').append(nav);
        $('#home').addClass('active');
    })
</script>
<script src="../html/js/buyerNavbar.js"></script>
<div id="buyerNavbar" class="navbar navbar-inverse navbar-fixed-top">
</div>
<div style="margin-top: 50px;" class="span12">
    <p class="text-info"><small>You will recieve your all Notifications such as invitations, food going  to expire in near-by shops here.</small></p>
    <div class="span8">
        <h3>Food Notifications</h3>
        <?php 
            require("../html/food_notifications.php");
        ?>
        <h3>Invitations</h3>
        <span class="help-block"><small class="text-info">If you want to meet the person contact him/her by email. Currently, this is all we have</small></span>
        <?php
            require("../html/invitation_notifications.php");
        ?>
    </div>

</div>
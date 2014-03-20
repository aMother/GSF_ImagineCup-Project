<script>

    $(function () {
        $('#buyerNavbar').append(nav);
        $('#score').addClass('active');
    })
</script>
<script src="../html/js/buyerNavbar.js"></script>
<div id="buyerNavbar" class="navbar navbar-inverse navbar-fixed-top">
</div>
<div style="margin-top: 50px;" class="span12">
    <p class="text-info">
        <small>Your Score helps others to know more about you. It's implications will be published soon.</small>
    </p>
    <h2>Score</h2>

    <?php
        echo ($tell);
        
    ?>
</div>
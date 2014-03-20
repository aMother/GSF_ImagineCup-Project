<script>

    $(function () {
        $('#buyerNavbar').append(nav);
        $('#present').addClass('active');
    })
</script>
<script src="../html/js/buyerNavbar.js"></script>
<div id="buyerNavbar" class="navbar navbar-inverse navbar-fixed-top">
</div>
<div style="margin-top:50px;" class="span8 offset2">
<p class="text-info"><small>Are you wishing to shop nearby your present location. Please allow us to tell you shops nearby you where food is going to expire</small></p>
<h3>Helping You Shop</h3>
<form action="../html/present.php" method="post">
    
<input type="hidden" name="latitude" id="latitude"/><br/>
<input type="hidden" name="longitude" id="longitude"/>
<div id='mapDiv' style="width: 80%; height: 300px;"></div>
<p id="mode" class="muted"></p>
<button type="button"  id="trackbtn" class="btn btn-primary" data-loading-text="Tracking...">Track My Location</button>
<span class="help-block"><small class="text-info">---Allow us to track-- <br/>You will be able to improve it <b>By Dragging Pushpin</b>.</small></span>
<div>   
<div>
    <button class="btn btn-inverse btn-large" type="submit">Search For Near By Shops</button>
    <span class="help-block"><small class="text-info">Be sure to indentify your location on map before searching.</small><br/><small class="text-warning">Notifications if any will appear on your home and you will be redirected to it</small></span>

</div>


</div>
    </form>
</div>
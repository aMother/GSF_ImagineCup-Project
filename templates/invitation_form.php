<script>

    $(function () {
        $('#buyerNavbar').append(nav);
        $('#invite').addClass('active');
  
    })
</script>

<script src="../html/js/buyerNavbar.js"></script>
<div id="buyerNavbar" class="navbar navbar-inverse navbar-fixed-top">
</div>
<div class="span8 offset2" style="margin-top: 50px;">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#person" data-toggle="tab">Person - you wish to Invite</a></li>
        <li><a href="#venue" data-toggle="tab">Venue & Time</a></li>
        <li><a href="#invitation" data-toggle="tab">Invitation</a></li>
    </ul>
    <form action="../html/invite.php" method="post">
        <div class="tab-content">
            <div class="tab-pane active" id="person">
                <span class="help-block"><small class="text-info">You can invite someone with whom you wish to share...</small></span>
                <h3>Invite Someone</h3>
               <input type="text" name="name" id="name" placeholder="Tell us person's name"/>
               <span class="help-block"><small class="text-warning">Be Careful with spelling</small></span>
            </div>
            <div class="tab-pane" id="venue">
                <span class="help-block"><small class="text-warning">We suggest you not to choose any ghosty place if meeting first time</small></span>
                <h3>Venue and Time</h3>
                <input type="text" name="time" id="time" placeholder="Time"/>
                <span class="help-block"><small class="text-info">eg 3 December 2013, 21:00</small></span>
                <input type="text" name="place" id="place" placeholder="Venue Name And Address"/>
                 <span class="help-block"><small class="text-info">eg Oak Park Ave, City, Country</small></span>
                <input type="hidden" id="latitude" name="latitude"/>
                <input type="hidden" id="longitude" name="longitude"/>
                <div id='mapDiv' style="   position: relative; width: 60%; height: 300px; margin-bottom: 10px;  border-radius: 5px; box-shadow: 3px 3px 5px 1px rgb(112, 155, 234);"></div>
                <p id="mode"></p>
                <p style="width: 60%" ><small class="text-info">If Venue is near your present location --- Allow us to track <br/>Else --- Search Below.<br/> In both cases you will be able to improve it.</small></p>
                <input type="button"  id="trackbtn" data-loading-text="Tracking..." class="btn btn-primary" value="Track Venue"/>
                <div>
                    <p class="lead"><b>or</b></p>    
                    <div class="input-append form-search">
                    <input id="txtQuery" type="text" class="search-query" placeholder="Type Venue Address here">
                    <button type="button" id="search" data-loading-text="Searching..." class="btn"><i class="icon-search"></i></button>
                    <span class="help-block"><small class="text-info">eg Oak Park Ave, City, Country</small></span>
                </div>
            </div> 
            </div>
            <div class="tab-pane" id="invitation">
                <fieldset style="margin-top: 30px;">
                    <label><strong>Any Message You Wish To Convey</strong></label>
                    <textarea rows="5" name="message" placeholder="Message"></textarea>
                </fieldset>
                <fieldset style="margin-top: 30px;">
                    <button class="btn btn-primary" type="submit">Send Invitation</button>
                </fieldset>


                


            </div>     
        </div>
    </form>
    
</div>

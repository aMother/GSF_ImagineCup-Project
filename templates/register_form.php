<div class="span8 offset2">
    <h3>Register</h3>
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#name" data-toggle="tab">Name</a></li>
        <li><a href="#as" data-toggle="tab">Registering As</a></li>
        <li><a href="#presentAddress" data-toggle="tab">Present Address</a></li>
        <li><a href="#uid" data-toggle="tab">Create Account</a></li>
    </ul>
    <form action="../html/register.php" method="post">
    <div class="tab-content">
        <div class="tab-pane active" id="name">
            <input type="text" name="firstname" id="firstname" placeholder="First" /><br/>
            <input type="text" name="lastname" id="lastname" placeholder="Last" />
            <span class="help-block">
                <small class="text-info">Your name will help people to identify you here.</small><br/>
                <small class="text-warning">So, please provide your name by which people know you</small>
            </span>
        </div>
        <div class="tab-pane" id="as">
            <p>Registering As:</p>
                <label class="radio"><input type="radio" name="ras" value="b" checked/>Person</label>
                <span class="help-block"><small class="text-info">By Person we just mean that you are bonding us as a 'Person'. In next section you will provide your present address of residence.</small></small></span>
                <label class="radio"><input type="radio" name="ras" value="s"/>Shop</label>
                <span class="help-block"><small class="text-info">By Shop we just mean that you are bonding us as a 'Shop' of food products. In next section you will provide your shop's present address</small><br/><br/><small class="text-warning">We need this distinction to identify the services you may need from us. So, even if you have registered your shop. You are invited to register as a person.<br/>One of the many reason is that:<br/> We Can't ask shops to dine with each other. But, we can ask persons...<br/></small></span>
        </div>
        <div class="tab-pane" id="presentAddress">
            <span class="help-block">
                <small class="text-info">Scroll down to bottom to know, Why we need your present address ?</small>
            </span>
            <input type="hidden" name="latitude" id="latitude"/><br/>
            <input type="hidden" name="longitude" id="longitude"/>
            <div id='mapDiv' style="width: 400px;"></div>
            <p id="mode" class="muted"></p>
            <button type="button"  id="trackbtn" class="btn btn-primary" data-loading-text="Tracking...">Track My Address</button>
            <span class="help-block"><small class="text-info">If assessing us from near your present address --- allow us to track<br/>Else --- Search below<br/>In both cases you will be able to improve it <b>By Dragging Pushpin</b>.</small></span>
            <div>
                <p class="lead"><b>or</b></p>    
                <div class="input-append form-search">
                    <input id="txtQuery" type="text" class="search-query" placeholder="Type your Address here"/>
                    <button type="button"  id="search" class="btn btn-inverse" data-loading-text="Searching..."><i class="icon-search icon-white"></i></button>
                </div>  
                <span class="help-block"><small>
                        eg: 77 Massachusetts Ave, Cambridge, MA 02139, United States
                    </small></span>     
            </div>
            <div>
                <span class="help-block">
                    <small class="text-info">We need your address to help you: </small>
                </span>
                <dl class="dl-horizontal text-info">
                    <dt><small>Connect, Save and Share</small></dt>
                    <dd><small>By providing information about nearby shops, where food is going to expire<br/> or <br/>giving your information to persons if you are bonding us as shop.</small></dd>
                    <dd><small>By providing information about nearby people willing to share surplus food you have or they have, which if not shared will be wasted<small class="muted"><br/>-NA- for those who bonded as shop</small></small></dd>
                    <dd><small>By providing information about nearby people wishing to connect and share some moments with you.<small class="muted"><br/>-NA- for those who bonded as shop</small></small></dd>

                </dl>
                <span class="help-block"><small class="text-warning">We will not use your address to:</small></span>
                <dl class="dl-horizontal text-warning">
                    <dt><small>Exploit your identity</small></dt>
                    <dd><small>Your address will be only used by our databases. We will not share it with any one else without your permission.</small></dd>
                </dl>
            </div>
        </div>
            <div class="tab-pane" id="uid">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" name="email" id="email" placeholder="E-mail"/>
                </div>
                <span class="help-block"><small class="text-info">Your email will be used as your unique identity.</small></span>
                <input type="password" name="password" id="password" placeholder="New Password" /><br/>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm here" /><br/>
                <input type="submit" value="Register Me" class="btn btn-info"/>
            </div>
        </div>
    </form>
</div>
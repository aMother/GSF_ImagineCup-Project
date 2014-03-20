<script>

    $(function () {
        $('#sellerNavbar').append(nav);
        $('#shopfood').addClass('active');
      
    })
</script>
<script src="../html/js/sellerNavbar.js"></script>

<div id="sellerNavbar" class="navbar navbar-inverse navbar-fixed-top">
</div>
<div class="span8 offset2" style="margin-top: 50px;">
    <ul class="nav nav-tabs" id="myTab">
        <li><a href="#how" data-toggle="tab">How it works ?</a></li>
        <li class="active"><a href="#new" data-toggle="tab">Add Data</a></li>
        <li ><a href="#viewUpdate" data-toggle="tab">View or Update Data</a></li>
    </ul>
    <div class="tab-content">
         <div class="tab-pane" id="how">
             <p class="text-info">
                 We work very hard to ensure that nothing goes wasted.<br/>
                 We only ask you to add your shop's food data to our database and keep updating it. Once you did this we take care of everything else. Our automated programs keep checking that which food is going to expire on the basis of data you provide us while adding. Once program saw any such food item or items. Another program searches for persons on our site who are nearby your shops and send food request to them on behalf of your shop. If any person accept that you will be notified about it in your home page. 
             </p>
             <span class="help-block"><small class="text-warning">If you ever try to abuse our services for your advertisement we bet we will catch you (such programs are currently under development).And will never help you in future.</small></span>
        </div>
        <div class="tab-pane" id="viewUpdate">
            <small class="text-info">Here you will be able to view the information we are having of your shop's food. Always try to give us your latest status of shop's food.</small>
            <h3>Your Data With Us</h3>
            <span class="help-block">
                <small>You are required to update data daily by providing new units in form</small>
               </span>
            <?php require('../html/viewFood.php'); ?>
        </div>

        <div class="tab-pane active" id="new">
            <h3>Add Food</h3>
            <p class="text-info"><small>We request you to add food here whenever you buy it for your shop. And we promise you that we will try our best nothing that goes wasted</small></p>
            <form action="../html/addFood.php" method="post" >
                    <input type="text" data-provide="typeahead" data-source='["Bread", "Butter", "Cheese" , "Milk",  "Fruits", "Vegetables"]' name="name" id="name" placeholder="Food name" autocomplete="off"/>
                    <span class="help-block"><small class="text-info">eg Milk</small></span>
                    <input type="text" name="units" id="units" placeholder="Food units"/>
                    <span class="help-block"><small class="text-info">eg 3</small></span>
                    <div class="input-append">
                        <input class="input-medium" type="text" name="qunit" id="qunit" placeholder="Quantity per unit"/>
                        <div class="btn-group">
                            <select name="unit" class="input-small">
                                <option value="">Unit</option>
                                <option value="gm">gm</option>
                                <option value="oz">oz</option>
                                <option value="lb">lb</option>
                                <option value="kg">kg</option>
                                <option value="ml">ml</option>
                                <option value="l">l</option>
                            </select>
                        </div>
                    </div><br/>
                    <span class="help-box"><small class="text-info">eg 250 ml, where Unit is choosed from dropdown list</small></span><br/><br/>
                    <input type="text" placeholder="Sell-by Date" name="sellby"/>
                    <span class="help-block">
                        <small class="text-info">eg YYYY-MM-DD</small><br/>
                        <small class="text-warning">Using wrong format could result in fatal error. So, use correct format i.e. YYYY-MM-DD</small>

                    </span>
                    <textarea name="description" rows="3" placeholder="Description"></textarea>
                    <span class="help-block"><small class="text-info">eg Milk is chocolate flavored. Maker is Nestle </small></span>
                    <input type="submit" class="btn" value="Add">
             </form>  
        </div>     
    </div>
</div>
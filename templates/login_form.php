<div class="span6" id="login_form.php">
<form action="../html/login.php" method="post" class="form-horizontal">
    <fieldset>
        <legend><h3>Log In</h3></legend>
    <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input type="email" name="email" id="email" placeholder="Email" required/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" name="password" id="password" placeholder="Password"required/>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
            <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn">Log In</button><span><small> &nbsp; &nbsp; or <a href="../html/register.php"> &nbsp; &nbsp; Register</a></small></span>
        </div>
    </div>
    </fieldset>
</form>
</div>
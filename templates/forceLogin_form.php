<div class="span6" id="login_form.php">
<form action="../html/login.php" method="post" class="form-horizontal">
    <p class="lead text-error">You must Log In to view the page you are trying to visit.</p>
    <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input type="text" name="email" id="email" placeholder="E-mail" autofocus="on"/>
        </div> 
    </div>
    <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" name="password" id="password" placeholder="Password"/>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
            <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn">Log In</button><span><small> &nbsp; &nbsp; or <a href="../html/register.php">Register</a></small></span>
        </div>
    </div>
</form>
</div>
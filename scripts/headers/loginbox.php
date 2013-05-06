<?php ?>

<div class="loginbox container">
    <div class="loginbox-inner row">
        <form autocomplete="off" method="post" action="register.php" class="span5 offset1">
            <h3>Register</h3>
            <input type="email" max="50" name="useremail" placeholder="Email" class="span3" required/><br/>
            <input type="password" min="7" max="25" name="userpassword" placeholder="Password" class="span3" required/><br/>
            <input type="password" min="7" max="25" name="userpasswordagain" placeholder="Retype Password" class="span3" required/><br/>
            <input type="submit" class="btn btn-primary " value="Register" class="span3"/>
        </form>
        <form autocomplete="off" class="span4 offset2">
            <h3>Login</h3>
            <input type="text" name="reguseremail" placeholder="Email" class="span3" required/><br/>
            <input type="password" name="reguserpassword" placeholder="Password" class="span3" required/><br/>
            <input type="button" class="btn btn-primary " value="Login" />
        </form>
    </div>
</div>
<hr/>
<script src="js/jq1.7.js"></script>
<script type="text/javascript">
    $('document').ready(function() {
        $('.loginclick').click(function(e) {
            e.preventDefault();
            $('.loginbox').stop().slideToggle(700);
        });
    });
</script>
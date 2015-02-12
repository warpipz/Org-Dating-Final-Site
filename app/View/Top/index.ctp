<?php 
	$disp = 'none';
	$topDisp = 'block';
	if($this->Session->check('LOG_ERR_USR')){ 
		$disp = 'block';
		$topDisp = 'none';
	} 
?>
<div class="divisions top-divs" style="display:<?php echo $topDisp;?>" id="top-div">
	<?php if($event){?>
	<h1 class="text-center top-title"><?php echo $event['Event']['title'];?></h1>
    <p class="text-center">
        <button class="btn btn-primary btn-solo top-btn" data-id="registration-container">
        	<i class="fa fa-pencil-square-o"></i> Signup
        </button>
        <button class="btn btn-primary btn-solo top-btn" data-id="top-login">
        	<i class="fa fa-check-square-o"></i> Login
        </button>
    </p>
    <?php }else{ ?>
    	<h1 class="text-center top-title">There is no event Today</h1>
    <?php } ?>
</div>

<div class="divisions top-divs" style="display:<?php echo $disp;?>" id="top-login">
	<?php if($this->Session->check('LOG_ERR_USR')){?>
    	<div class="alert alert-danger"><?php echo $_SESSION['LOG_ERR_USR'] ;?></div>
        <?php unset($_SESSION['LOG_ERR_USR']);?>
    <?php }
        
     ?>
	<h3>Participants Login</h3>
    <form action="?" method="post">
        <table class="table">
            <tr>
                <th>Username</th>
                <td><input type="text" class="form-control" name="login_id" /></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" class="form-control" name="login_pw" /></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">                  
                    <a class="btn btn-primary btn-solo top-btn" data-id="top-div">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                    <button class="btn btn-primary btn-solo">
                        <i class="fa fa-check-square-o"></i> Login
                    </button>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="divisions top-divs" id="registration-container" style="display:none">
	<h3>Participants Registration</h3>
    <form action="<?php echo FOLDER;?>/user/registration" method="post" id="regForm" onsubmit="return false;">
        <table class="table">
            <tr>
                <th>Username</th>
                <td><input type="text" class="form-control" name="login_id" /></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" class="form-control" name="login_pw" /></td>
            </tr>
            <tr>
                <th>Confirm Password</th>
                <td><input type="password" class="form-control" name="clogin_pw" /></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <a class="btn btn-primary btn-solo top-btn" data-id="top-div">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                    <button class="btn btn-primary btn-solo">
                        <i class="fa fa-arrow-circle-right"></i> Next
                    </button>
                    
                </td>
            </tr>
        </table>
    </form>
</div>
<?php if(!$this->Session->check('LOGGED')){?>
<div class="divisions" style="display:none">
	<h3>Site management</h3>
	<p class="text-center">
    	<a href="<?php echo FOLDER?>/organizer" class="btn btn-primary btn-solo">
    		<i class="fa fa-user-secret"></i> Enter
    	</a>
    </p>
    <br />
</div>
<?php } ?>
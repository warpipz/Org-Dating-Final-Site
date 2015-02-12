<?php $logged = $this->Session->read('LOGGED');?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo ($logged['User']['type']==3)?   FOLDER.'/event':FOLDER;?>"><i class="fa fa-venus-mars"></i> Dating Site</a>
    </div>    
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <?php if($logged['User']['type']==3 || $logged['User']['type']==2){?>
          <li><a href="<?php echo FOLDER?>/event"><i class="fa fa-calendar"></i> Events</a></li>
          <?php if($logged['User']['type']==3){?>
      	    <li><a href="<?php echo FOLDER?>/admin/organizer"><i class="fa fa-user-secret"></i> Organizer</a></li>
          <?php } ?>
          <li><a href="<?php echo FOLDER?>/organizer/users"><i class="fa fa-users"></i> Users</a></li>        
        <?php }?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            	<i class="fa fa-inbox"></i> 
                Notifications 
                <span class="notification-counter">
                  <?php echo ($status) ? $status : '';?>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-notif" role="menu">
              <?php echo $this->element('notifications');?>
              <li class="divider"></li>
              <li class="text-center"><strong><a href="<?php echo FOLDER;?>/notification/index">Show All</a></strong></li>
          	</ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $logged['User']['login_id'];?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo FOLDER?>/organizer/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style type="text/css">
.circleDiv {
	float: left;
	width: 100px;
	height: 100px;
	border-radius: 100px;
	border: 2px solid black;
	margin: 15px;
	text-align: center;
	position: relative;
}
.circleDiv:hover {
	float: left;
	width: 100px;
	height: 100px;
	border-radius: 100px;
	border: 2px solid black;
	margin: 15px;
	text-align: center;
	position: relative;
	background: rgb(0, 168, 255);
}
.numText {
	font-size: 2em;
	position: absolute;
	top: 28%;
	left: 0;
	right: 0;
	color: black;
	text-decoration: none;
}
.circleBodyCont{
	margin: 0 auto;
	width: 100%;
	text-align: center;
}
</style>
<div class="divisions" id="eventNumber">
<h3>プロフィールの確認/Check profile</h3>
</div>
<div class="circleBodyCont">
<?php
 	$x=1;
	$arr = array();

	
		foreach ($event_user as $key => $mgaJoiner) {		
		?>	
			<a href="/newdating/party/user_profile/<?php echo $mgaJoiner['EventUser']['id']?>" title="<?php echo $mgaJoiner['User']['login_id'];?>">
			<div class="circleDiv">
				<span class="numText"><?php echo $mgaJoiner['EventUser']['number'];?></span>
			</div>
			</a>
		<?php
	
		} // end foreach
	
?>
</div>
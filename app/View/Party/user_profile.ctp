<style type="text/css">
.inputContainer{
	border-bottom: 1px solid #eee;
}
.textDisp{
	padding: 5px;
	!background: rgb(66, 184, 221);
	color: #fff;
	margin-bottom: 5px;
	width: 100%;
	!border-radius: 10px;
}
.btnStyle{
	padding: 10px 50px;
	text-decoration: none;
	cursor: pointer;
	border-radius: 3px;
	color: white;
	border: 0;
}
.back{
	background: rgb(223, 117, 20);
}
.send{
	background: rgb(66, 184, 221);
}
.wrap { !padding: 8px; }
.bar-main-container {
 ! margin: 10px auto;
  width: 100%;
  !height: 50px;
  height: 35px;
  !border-radius: 4px;
  font-family: sans-serif;
  font-weight: normal;
  font-size: 0.8em;
  color: #FFF;
}
.bar-percentage, .bar-percentage01, .bar-percentage02, .bar-percentage03, .bar-percentage04 {
	float: left;
	background: rgba(0,0,100,0.13);
	padding: 10px 0px;
	width: 12%;
	height: 100%;
	text-align: center;
	position: relative;
}
.bar, .bar01, .bar02,.bar03, .bar04 {
  float: left;
  margin-top: 9px;
  position: relative;
  background: #FFF;
  !height: 100%;
  height: 15px;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
}
.bar-container{
	width: 85%;
	float: right;
	margin-right: 3%;
}
.azure   { background: #38B1CC; }
.emerald { background: #2CB299; }
.violet  { background: #EF75C0; }
.yellow  { background: #EFC32F; }
.red     { background: #E44C41; }
!h1{
	margin: 0 !important;
	border-bottom: 5px solid #FF0066;
	border-top: 1px solid #eee;
	width: 100%;
	border-left: 1px solid #eee;
	border-right: 1px solid #eee;
	position: relative;
	background: #FFC6E2;
}
.subpercent_cont{
	padding: 10px;
	width: 100%;
}
.repContmain{
	width: 100%;
	background: rgba(60,80,250,0.1);
	position: relative;
}
!h4{
	padding: 8px;
	color: #fff;
	background: #cccccc;
	border-left: 5px solid #555;
	margin: 0;
}
!h5{
	padding: 5px;
	color: #fff;
	background: #cccccc;
	border-left: 5px solid lightseagreen;
	margin: 0;
}
!h6{
	padding: 3px;
	color: #fff;
	background: #cccccc;
	border-left: 5px solid orange;
	margin: 0;
}
.PrevbtnCont{
	width: 100%;
	text-align: center;
	padding: 10px;
}
.inputContainer{
	width: 45%;
}
!table{
	border-spacing: 14px 25px;
	width: 100%;
}
.headerTitle .rep{
	margin-bottom: -29px;
}
.percentText{
	float:right;
}
.aQuestion{
	padding-left: 5px;
}
</style>
<script>
$(document).ready(function(){
	
	$('.rePOTAsyon').hide();
	$('.sendMeNowSaAdmin').click(function(){
		window.location.href = "/newdating/party/time_sheet";
		/* if ($('td.aQuestion:not(:has(:radio:checked))').length) {
			window.location.href = "http://prototype.old-version.net/newdating/party/time_sheet";
		}
		*/
	});

	$('.checkall').change(function(event) {
		  $("input:radio").prop('checked', $(this).prop("checked"));
	});
	$('#saveRate').click(function(){
		if ($('td.aQuestion:not(:has(:radio:checked))').length) {
			alert('Please rate all categories.');
			return false;
		}else{
			$('form').submit();
			//window.location.href = "http://prototype.old-version.net/newdating/party/check_profile";
		}
	});
	$('#disabledDaw').click(function(){
		alert('Already rated, rate another or click next.');
	})
	
});
</script>
<div class="divisions" id="eventNumber">
	<?php 
		if($is_rate){
			echo "pang Final Time na";
		}
	?>


	<?php //pr($user);?>
	<h3>情報をご入力してください。/Profile</h3>	
	<!-- <form method="post" onsubmit="return false;" id="frmUpdInf" action="?">	 -->
	<table class="table">			
		<tbody>
			<tr>
				<th>お名前（ニックネーム）/Name <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['name'];?></td>
			</tr>
			<tr>
				<th>フリガナ/ Phonetic <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['phonetic'];?></td>
			</tr>
			<tr>
				<th>性別/Gender <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['genderName'];?></td>
			</tr>
			<tr>
				<th>Birthday <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['day']."/".$data['UserMeta']['month']."/".$data['UserMeta']['year'];?></td>
			</tr>
			<tr>
				<th>Blood type <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['bloodtype']?></td>
			</tr>
			<tr>
				<th>Present Perfecture <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['present_prefecture']?></td>
			</tr>
			<tr>
				<th>Born Perfecture <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['born_prefecture']?></td>
			</tr>
			<tr>
				<th>Body <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['body']?></td>
			</tr>
			<tr>
				<th>Centimeter <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['cm']?></td>
			</tr>
			<tr>
				<th>Kilogram<span class="need"></span></th>
				<td><?php echo $data['UserMeta']['kg']?></td>
			</tr>
			<tr>
				<th>Hairstyle<span class="need"></span></th>
				<td><?php echo $data['UserMeta']['hairstyle']?></td>
			</tr>
			<tr>
				<th>Glass <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['glass']?></td>
			</tr>
			<tr>
				<th>Type Person <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['type_person']?></td>
			</tr>
			<tr>
				<th>Personality<span class="need"></span></th>
				<td><?php echo $data['UserMeta']['personality']?></td>
			</tr>
			<tr>
				<th>職業/Occupation <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['occupation'];?></td>
			</tr>
			<tr>
				<th>Day Off <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['dayoff']?></td>
			</tr>
			<tr>
				<th>Education <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['education']?></td>
			</tr>
			<tr>
				<th>年収/Annual income <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['income'];?></td>
			</tr>
			<tr>
				<th>Living With <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['living_with']?></td>
			</tr>
			<tr>
				<th>Relative <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['relative']?></td>
			</tr>
			<tr>
				<th>Smoke <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['smoking']?></td>
			</tr>
			<tr>
				<th>Alcohol <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['drinking_alcohol']?></td>
			</tr>
			<tr>
				<th>Car <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['car']?></td>
			</tr>
			<tr>
				<th>Pet <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['pet']?></td>
			</tr>
			<tr>
				<th>Purpose <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['purpose']?></td>
			</tr>
			<tr>
				<th>趣味/Hobby <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['hobby'];?></td>
			</tr>
			<tr>
				<th>Interest <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['interesting']?></td>
			</tr>
			<tr>
				<th>Status <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['status']?></td>
			</tr>
			<tr>
				<th>Desire <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['desire']?></td>
			</tr>
			<tr>
				<th>Kids <span class="need"></span></th>
				<td><?php echo $data['UserMeta']['kids']?></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="divisions" id="eventNumber">
	<div class="rePOTAsyon" style="display:none">
		<!-- <div class="headerText"><h1>Name</h1></div>
		<div class="inputContainer">
				<h2><?php echo $profile_info['Info']['name'];?></h2>
		</div> -->
		<div id="Appearance-div"><h3>Appearance / Inner Looks </h3>
			<div class="subpercent_cont">
				<!-- <span class="apppppp">%</span></h1> -->
				<div id="bodytype-div" class="textDisp azure">Body Type: </div> 
				<div id="height-div" class="textDisp azure">Height: </div>
				<div id="weight-div" class="textDisp azure">Weight: </div>
				<div id="hairstyle-div" class="textDisp azure">Hairstyle: </div>
				<div id="personality-div" class="textDisp azure">Personality: </div>
				<span>TOTAL</span>
				<div id="bar-1" class="bar-main-container azure">
					<div class="wrap">
				      <div class="bar-percentage" data-percentage=""></div>
				      <div class="bar-container">
				        <div class="bar"></div>
				      </div>
				    </div>
				</div>
			</div>
		</div>

		<div id="Work-div"><h3>Work / Education </h3> <!-- <span class="apppppp1">%</span></h1> -->
			<div class="subpercent_cont">
				<div id="occupation-div" class="textDisp violet">Occupation: </div> 
				<div id="holiday-div" class="textDisp violet">Holiday: </div>
				<div id="education-div" class="textDisp violet">Education: </div>
				<div id="annual_income-div" class="textDisp violet">Annual Income: </div>
				<span>TOTAL</span>
				<div id="bar-1" class="bar-main-container violet">
					<div class="wrap">
				      <div class="bar-percentage01" data-percentage=""></div>
				      <div class="bar-container">
				        <div class="bar01"></div>
				      </div>
				    </div>
				</div>
			</div>
		</div>

		<div id="Lifestyle-div"><h3>Lifestyle </h3><!-- <span class="apppppp">%</span></h1> -->
			<div class="subpercent_cont">
				<div id="cohabitant-div" class="textDisp yellow">Cohabitant: </div> 
				<div id="siblings-div" class="textDisp yellow">Siblings: </div>
				<div id="tobacco-div" class="textDisp yellow">Tobacco: </div>
				<div id="drink-div" class="textDisp yellow">Drink: </div>
				<div id="car-div" class="textDisp yellow">Car: </div>
				<span>TOTAL</span>
				<div id="bar-1" class="bar-main-container yellow">
					<div class="wrap">
				      <div class="bar-percentage02" data-percentage=""></div>
				      <div class="bar-container">
				        <div class="bar02"></div>
				      </div>
				    </div>
				</div>
			</div>
		</div>

		<div id="Hobby-div"><h3>Hobby / Taste </h3><!-- <span class="apppppp">%</span></h1> -->
			<div class="subpercent_cont">
				<div id="hobby-div" class="textDisp red">Hobby: </div>
				<div id="interesting-div" class="textDisp red">Interesting: </div>
				<span>TOTAL</span>
				<div id="bar-1" class="bar-main-container red">
					<div class="wrap">
				      <div class="bar-percentage03" data-percentage=""></div>
				      <div class="bar-container">
				        <div class="bar03"></div>
				      </div>
				    </div>
				</div>
			</div>
		</div>

		<div id="Marriage-div"><h3>Marriage / Children </h3> <!-- <span class="apppppp1">%</span></h1> -->
			<div class="subpercent_cont">
				<div id="marital_status-div" class="textDisp emerald">Marital Status: </div> 
				<div id="marriage-div" class="textDisp emerald">Marriage: </div>
				<div id="children-div" class="textDisp emerald">Children: </div>
				<div id="num_children-div" class="textDisp emerald">Number of Children want: </div>
				<span>TOTAL</span>
				<div id="bar-1" class="bar-main-container emerald">
					<div class="wrap">
				      <div class="bar-percentage04" data-percentage=""></div>
				      <div class="bar-container">
				        <div class="bar04"></div>
				      </div>
				    </div>
				</div>
			</div>
		</div>

		<div id="Comment-div"><h3>コメント/Comment</h3> <!-- <span class="apppppp1">%</span></h1> -->
			<div class="subpercent_cont">
				<div id="comment-div"></div> 
			</div>
		</div>
		<div class="PrevbtnCont">
			<button type="button" class="btnStyle back" onclick="window.history.go(-1); return false;">Back</button>
			<button type="button" class="btnStyle send" id="sendtoadmin">Send To Admn</button>
		 </div>
	</div>
</div>
<div class="divisions" id="eventNumber">
	<?php //pr($is_rate); ?>
  
<div class="regForm repSheet">
	<!-- <form method="post" action="<?php echo (!$is_rate)? '/newdating/party/rating/'.$userID :'/newdating/party/result/'.$userID;?>"> -->
	<form method="post" action="/newdating/party/rating/<?php echo $data['User']['id']; ?>">
		<input type="hidden" name="data[Rating][user_id]" value="<?php echo $data['User']['id'];?>">
		<input type="hidden" name="data[Rating][from_id]" value="<?php echo $loggedID;?>">
		<input type="hidden" name="data[Rating][event_id]" value="<?php echo $eventID;?>">
		<input type="hidden" name="data[Rating][event_user_id]" value="<?php echo $data['EventUser']['id'];?>">
		<input type="hidden" name="data[Rating][is_second]" value="<?php echo ($is_rate)? 1:0 ;?>">
		
		<div class="perRow">
			<div class="headerTitle rep"><h3>チェックシート</h3></div>
		</div>

		
		<table class='table'>
			<tr><th colspan="2"><h3>外見/内面</h3></th> 
			</tr>

			<tr>
				<td><h6>体型</h6></td>　　
				<td class='aQuestion'>
				
					<input type="radio" id="radioStyle" name="data[Rating][body_type]" <?php echo (isset($is_rate[0]['RatingMeta'][0]['value']) && $is_rate[0]['RatingMeta'][0]['value']==100)? 'checked="checked"':''; ?> value="100" class="body_type" />
					<label for="data[Rating][body_type]"><span></span>5</label>				
				
					<input type="radio" id="radioStyle" name="data[Rating][body_type]" <?php echo (isset($is_rate[0]['RatingMeta'][0]['value']) && $is_rate[0]['RatingMeta'][0]['value']==80)? 'checked="checked"':''; ?> value="80" class="body_type" />
					<label for="data[Rating][body_type]"><span></span>4</label>
				
				
					<input type="radio" id="radioStyle" name="data[Rating][body_type]" <?php echo (isset($is_rate[0]['RatingMeta'][0]['value']) && $is_rate[0]['RatingMeta'][0]['value']==60)? 'checked="checked"':''; ?>value="60" class="body_type" />
					<label for="data[Rating][body_type]"><span></span>3</label>
				
				
					<input type="radio" id="radioStyle" name="data[Rating][body_type]" <?php echo (isset($is_rate[0]['RatingMeta'][0]['value']) && $is_rate[0]['RatingMeta'][0]['value']==40)? 'checked="checked"':''; ?> value="40" class="body_type" />
					<label for="data[Rating][body_type]"><span></span>2</label>
				
				
					<input type="radio" id="radioStyle" name="data[Rating][body_type]" <?php echo (isset($is_rate[0]['RatingMeta'][0]['value']) && $is_rate[0]['RatingMeta'][0]['value']==20)? 'checked="checked"':''; ?> value="20" class="body_type" />
					<label for="data[Rating][body_type]"><span></span>1</label>
				
				</td>
			</tr> 
			<tr>
				<td><h6>身長</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][height]" <?php echo (isset($is_rate[0]['RatingMeta'][1]['value']) && $is_rate[0]['RatingMeta'][1]['value']==100)? 'checked="checked"':''; ?> value="100" class="height">
					<label for="data[Rating][height]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][height]" <?php echo (isset($is_rate[0]['RatingMeta'][1]['value']) && $is_rate[0]['RatingMeta'][1]['value']==80)? 'checked="checked"':''; ?> value="80" class="height">
					<label for="data[Rating][height]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][height]" <?php echo (isset($is_rate[0]['RatingMeta'][1]['value']) && $is_rate[0]['RatingMeta'][1]['value']==60)? 'checked="checked"':''; ?> value="60" class="height">
					<label for="data[Rating][height]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][height]" <?php echo (isset($is_rate[0]['RatingMeta'][1]['value']) && $is_rate[0]['RatingMeta'][1]['value']==40)? 'checked="checked"':''; ?> value="40" class="height">
					<label for="data[Rating][height]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][height]" <?php echo (isset($is_rate[0]['RatingMeta'][1]['value']) && $is_rate[0]['RatingMeta'][1]['value']==20)? 'checked="checked"':''; ?> value="20" class="height">
					<label for="data[Rating][height]"><span></span>1</label>
				</td>
			</tr>
			<tr> 
				<td><h6>体重</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][weight]" <?php echo (isset($is_rate[0]['RatingMeta'][2]['value']) && $is_rate[0]['RatingMeta'][2]['value']==100)? 'checked="checked"':''; ?> value="100" class="weight">
					<label for="data[Rating][weight]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][weight]" <?php echo (isset($is_rate[0]['RatingMeta'][2]['value']) && $is_rate[0]['RatingMeta'][2]['value']==80)? 'checked="checked"':''; ?> value="80" class="weight">
					<label for="data[Rating][weight]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][weight]" <?php echo (isset($is_rate[0]['RatingMeta'][2]['value']) && $is_rate[0]['RatingMeta'][2]['value']==60)? 'checked="checked"':''; ?> value="60" class="weight">
					<label for="data[Rating][weight]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][weight]" <?php echo (isset($is_rate[0]['RatingMeta'][2]['value']) && $is_rate[0]['RatingMeta'][2]['value']==40)? 'checked="checked"':''; ?> value="40" class="weight">
					<label for="data[Rating][weight]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][weight]" <?php echo (isset($is_rate[0]['RatingMeta'][2]['value']) && $is_rate[0]['RatingMeta'][2]['value']==20)? 'checked="checked"':''; ?> value="20" class="weight">
					<label for="data[Rating][weight]"><span></span>1</label>

				</td> 　　　
			</tr>
			<tr>
				<td><h6>髪型</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][hairstyle]" <?php echo (isset($is_rate[0]['RatingMeta'][3]['value']) && $is_rate[0]['RatingMeta'][3]['value']==100)? 'checked="checked"':''; ?> value="100" class="hairstyle">
					<label for="data[Rating][hairstyle]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][hairstyle]" <?php echo (isset($is_rate[0]['RatingMeta'][3]['value']) && $is_rate[0]['RatingMeta'][3]['value']==80)? 'checked="checked"':''; ?> value="80" class="hairstyle">
					<label for="data[Rating][hairstyle]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][hairstyle]" <?php echo (isset($is_rate[0]['RatingMeta'][3]['value']) && $is_rate[0]['RatingMeta'][3]['value']==60)? 'checked="checked"':''; ?> value="60" class="hairstyle">
					<label for="data[Rating][hairstyle]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][hairstyle]" <?php echo (isset($is_rate[0]['RatingMeta'][3]['value']) && $is_rate[0]['RatingMeta'][3]['value']==40)? 'checked="checked"':''; ?> value="40" class="hairstyle">
					<label for="data[Rating][hairstyle]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][hairstyle]" <?php echo (isset($is_rate[0]['RatingMeta'][3]['value']) && $is_rate[0]['RatingMeta'][3]['value']==20)? 'checked="checked"':''; ?> value="20" class="hairstyle">
					<label for="data[Rating][hairstyle]"><span></span>1</label>

				</td>
			</tr>
			<tr>
				<td><h6>性格</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][personality]" <?php echo (isset($is_rate[0]['RatingMeta'][4]['value']) && $is_rate[0]['RatingMeta'][4]['value']==100)? 'checked="checked"':''; ?>v value="100" class="personality">
					<label for="data[Rating][personality]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][personality]"  <?php echo (isset($is_rate[0]['RatingMeta'][4]['value']) && $is_rate[0]['RatingMeta'][4]['value']==80)? 'checked="checked"':''; ?> value="80" class="personality">
					<label for="data[Rating][personality]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][personality]" <?php echo (isset($is_rate[0]['RatingMeta'][4]['value']) && $is_rate[0]['RatingMeta'][4]['value']==60)? 'checked="checked"':''; ?> value="60" class="personality">
					<label for="data[Rating][personality]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][personality]" <?php echo (isset($is_rate[0]['RatingMeta'][4]['value']) && $is_rate[0]['RatingMeta'][4]['value']==40)? 'checked="checked"':''; ?> value="40" class="personality">
					<label for="data[Rating][personality]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][personality]" <?php echo (isset($is_rate[0]['RatingMeta'][4]['value']) && $is_rate[0]['RatingMeta'][4]['value']==20)? 'checked="checked"':''; ?> value="20" class="personality">
					<label for="data[Rating][personality]"><span></span>1</label>

				</td>
			</tr>

			<th colspan="2"><h3>仕事/学歴</h3></th>

			
			<tr>
				<td><h6>職業</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][occupation]" <?php echo (isset($is_rate[0]['RatingMeta'][5]['value']) && $is_rate[0]['RatingMeta'][5]['value']==100)? 'checked="checked"':''; ?> value="100" class="occupation">
					<label for="data[Rating][occupation]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][occupation]" <?php echo (isset($is_rate[0]['RatingMeta'][5]['value']) && $is_rate[0]['RatingMeta'][5]['value']==80)? 'checked="checked"':''; ?> value="80" class="occupation">
					<label for="data[Rating][occupation]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][occupation]" <?php echo (isset($is_rate[0]['RatingMeta'][5]['value']) && $is_rate[0]['RatingMeta'][5]['value']==60)? 'checked="checked"':''; ?> value="60" class="occupation">
					<label for="data[Rating][occupation]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][occupation]" <?php echo (isset($is_rate[0]['RatingMeta'][5]['value']) && $is_rate[0]['RatingMeta'][5]['value']==40)? 'checked="checked"':''; ?> value="40" class="occupation">
					<label for="data[Rating][occupation]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][occupation]" <?php echo (isset($is_rate[0]['RatingMeta'][5]['value']) && $is_rate[0]['RatingMeta'][5]['value']==20)? 'checked="checked"':''; ?> value="20" class="occupation">
					<label for="data[Rating][occupation]"><span></span>1</label>

				</td>
			</tr>
			<tr> 
				<td><h6>休日</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][holiday]" <?php echo (isset($is_rate[0]['RatingMeta'][6]['value']) && $is_rate[0]['RatingMeta'][6]['value']==100)? 'checked="checked"':''; ?> value="100" class="holiday">
					<label for="data[Rating][holiday]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][holiday]" <?php echo (isset($is_rate[0]['RatingMeta'][6]['value']) && $is_rate[0]['RatingMeta'][6]['value']==80)? 'checked="checked"':''; ?> value="80" class="holiday">
					<label for="data[Rating][holiday]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][holiday]" <?php echo (isset($is_rate[0]['RatingMeta'][6]['value']) && $is_rate[0]['RatingMeta'][6]['value']==60)? 'checked="checked"':''; ?> value="60" class="holiday">
					<label for="data[Rating][holiday]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][holiday]" <?php echo (isset($is_rate[0]['RatingMeta'][6]['value']) && $is_rate[0]['RatingMeta'][6]['value']==40)? 'checked="checked"':''; ?> value="40" class="holiday">
					<label for="data[Rating][holiday]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][holiday]" <?php echo (isset($is_rate[0]['RatingMeta'][6]['value']) && $is_rate[0]['RatingMeta'][6]['value']==20)? 'checked="checked"':''; ?> value="20" class="holiday">
					<label for="data[Rating][holiday]"><span></span>1</label>

				</td> 　　　
			</tr>
			<tr>
				<td><h6>学歴</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][education]" <?php echo (isset($is_rate[0]['RatingMeta'][7]['value']) && $is_rate[0]['RatingMeta'][7]['value']==100)? 'checked="checked"':''; ?> value="100" class="education">
					<label for="data[Rating][education]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][education]" <?php echo (isset($is_rate[0]['RatingMeta'][7]['value']) && $is_rate[0]['RatingMeta'][7]['value']==80)? 'checked="checked"':''; ?> value="80" class="education">
					<label for="data[Rating][education]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][education]" <?php echo (isset($is_rate[0]['RatingMeta'][7]['value']) && $is_rate[0]['RatingMeta'][7]['value']==60)? 'checked="checked"':''; ?> value="60" class="education">
					<label for="data[Rating][education]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][education]" <?php echo (isset($is_rate[0]['RatingMeta'][7]['value']) && $is_rate[0]['RatingMeta'][7]['value']==40)? 'checked="checked"':''; ?> value="40" class="education">
					<label for="data[Rating][education]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][education]" <?php echo (isset($is_rate[0]['RatingMeta'][7]['value']) && $is_rate[0]['RatingMeta'][7]['value']==20)? 'checked="checked"':''; ?> value="20" class="education">
					<label for="data[Rating][education]"><span></span>1</label>
				</td>
			</tr>
			<tr>
				<td><h6>年収</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][annual_income]"<?php echo (isset($is_rate[0]['RatingMeta'][8]['value']) && $is_rate[0]['RatingMeta'][8]['value']==100)? 'checked="checked"':''; ?> value="100" class="annual_income">
					<label for="data[Rating][annual_income]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][annual_income]"<?php echo (isset($is_rate[0]['RatingMeta'][8]['value']) && $is_rate[0]['RatingMeta'][8]['value']==80)? 'checked="checked"':''; ?> value="80" class="annual_income">
					<label for="data[Rating][annual_income]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][annual_income]"<?php echo (isset($is_rate[0]['RatingMeta'][8]['value']) && $is_rate[0]['RatingMeta'][8]['value']==60)? 'checked="checked"':''; ?> value="60" class="annual_income">
					<label for="data[Rating][annual_income]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][annual_income]"<?php echo (isset($is_rate[0]['RatingMeta'][8]['value']) && $is_rate[0]['RatingMeta'][8]['value']==40)? 'checked="checked"':''; ?> value="40" class="annual_income">
					<label for="data[Rating][annual_income]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][annual_income]"<?php echo (isset($is_rate[0]['RatingMeta'][8]['value']) && $is_rate[0]['RatingMeta'][8]['value']==20)? 'checked="checked"':''; ?> value="20" class="annual_income">
					<label for="data[Rating][annual_income]"><span></span>1</label>

				</td>
			</tr> 
			<th colspan="2"><h3>ライフスタイル</h3></th> 

			
			<tr>
				<td><h6>同居人</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][cohabitant]"<?php echo (isset($is_rate[0]['RatingMeta'][9]['value']) && $is_rate[0]['RatingMeta'][9]['value']==100)? 'checked="checked"':''; ?> value="100" class="cohabitant">
					<label for="data[Rating][cohabitant]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][cohabitant]"<?php echo (isset($is_rate[0]['RatingMeta'][9]['value']) && $is_rate[0]['RatingMeta'][9]['value']==80)? 'checked="checked"':''; ?> value="80" class="cohabitant">
					<label for="data[Rating][cohabitant]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][cohabitant]"<?php echo (isset($is_rate[0]['RatingMeta'][9]['value']) && $is_rate[0]['RatingMeta'][9]['value']==60)? 'checked="checked"':''; ?> value="60" class="cohabitant">
					<label for="data[Rating][cohabitant]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][cohabitant]"<?php echo (isset($is_rate[0]['RatingMeta'][9]['value']) && $is_rate[0]['RatingMeta'][9]['value']==40)? 'checked="checked"':''; ?> value="40" class="cohabitant">
					<label for="data[Rating][cohabitant]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][cohabitant]"<?php echo (isset($is_rate[0]['RatingMeta'][9]['value']) && $is_rate[0]['RatingMeta'][9]['value']==20)? 'checked="checked"':''; ?> value="20" class="cohabitant">
					<label for="data[Rating][cohabitant]"><span></span>1</label>

				</td>
			</tr>
			<tr> 
				<td><h6>タ兄弟姉妹</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][siblings]" <?php echo (isset($is_rate[0]['RatingMeta'][10]['value']) && $is_rate[0]['RatingMeta'][10]['value']==100)? 'checked="checked"':''; ?> value="100" class="siblings">
					<label for="data[Rating][siblings]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][siblings]" <?php echo (isset($is_rate[0]['RatingMeta'][10]['value']) && $is_rate[0]['RatingMeta'][10]['value']==80)? 'checked="checked"':''; ?> value="80" class="siblings">
					<label for="data[Rating][siblings]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][siblings]" <?php echo (isset($is_rate[0]['RatingMeta'][10]['value']) && $is_rate[0]['RatingMeta'][10]['value']==60)? 'checked="checked"':''; ?> value="60" class="siblings">
					<label for="data[Rating][siblings]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][siblings]" <?php echo (isset($is_rate[0]['RatingMeta'][10]['value']) && $is_rate[0]['RatingMeta'][10]['value']==40)? 'checked="checked"':''; ?> value="40" class="siblings">
					<label for="data[Rating][siblings]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][siblings]" <?php echo (isset($is_rate[0]['RatingMeta'][10]['value']) && $is_rate[0]['RatingMeta'][10]['value']==20)? 'checked="checked"':''; ?> value="20" class="siblings">
					<label for="data[Rating][siblings]"><span></span>1</label>
				</td> 　　　
			</tr>
			<tr>
				<td><h6>タバコ</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][tobacco]" <?php echo (isset($is_rate[0]['RatingMeta'][11]['value']) && $is_rate[0]['RatingMeta'][11]['value']==100)? 'checked="checked"':''; ?> value="100" class="tobacco">
					<label for="data[Rating][tobacco]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][tobacco]" <?php echo (isset($is_rate[0]['RatingMeta'][11]['value']) && $is_rate[0]['RatingMeta'][11]['value']==80)? 'checked="checked"':''; ?> value="80" class="tobacco">
					<label for="data[Rating][tobacco]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][tobacco]" <?php echo (isset($is_rate[0]['RatingMeta'][11]['value']) && $is_rate[0]['RatingMeta'][11]['value']==60)? 'checked="checked"':''; ?> value="60" class="tobacco">
					<label for="data[Rating][tobacco]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][tobacco]" <?php echo (isset($is_rate[0]['RatingMeta'][11]['value']) && $is_rate[0]['RatingMeta'][11]['value']==40)? 'checked="checked"':''; ?> value="40" class="tobacco">
					<label for="data[Rating][tobacco]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][tobacco]" <?php echo (isset($is_rate[0]['RatingMeta'][11]['value']) && $is_rate[0]['RatingMeta'][11]['value']==20)? 'checked="checked"':''; ?> value="20" class="tobacco">
					<label for="data[Rating][tobacco]"><span></span>1</label>
				</td>
			</tr>
			<tr>
				<td><h6>お酒</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][drink]" <?php echo (isset($is_rate[0]['RatingMeta'][12]['value']) && $is_rate[0]['RatingMeta'][12]['value']==100)? 'checked="checked"':''; ?> value="100" class="drink">
					<label for="data[Rating][drink]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][drink]" <?php echo (isset($is_rate[0]['RatingMeta'][12]['value']) && $is_rate[0]['RatingMeta'][12]['value']==80)? 'checked="checked"':''; ?> value="80" class="drink">
					<label for="data[Rating][drink]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][drink]" <?php echo (isset($is_rate[0]['RatingMeta'][12]['value']) && $is_rate[0]['RatingMeta'][12]['value']==60)? 'checked="checked"':''; ?> value="60" class="drink">
					<label for="data[Rating][drink]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][drink]" <?php echo (isset($is_rate[0]['RatingMeta'][12]['value']) && $is_rate[0]['RatingMeta'][12]['value']==40)? 'checked="checked"':''; ?> value="40" class="drink">
					<label for="data[Rating][drink]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][drink]" <?php echo (isset($is_rate[0]['RatingMeta'][12]['value']) && $is_rate[0]['RatingMeta'][12]['value']==20)? 'checked="checked"':''; ?> value="20" class="drink">
					<label for="data[Rating][drink]"><span></span>1</label>
				</td>
			</tr>
			<tr>
				<td><h6>車</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][car]" <?php echo (isset($is_rate[0]['RatingMeta'][13]['value']) && $is_rate[0]['RatingMeta'][13]['value']==100)? 'checked="checked"':''; ?> value="100" class="car">
					<label for="data[Rating][car]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][car]" <?php echo (isset($is_rate[0]['RatingMeta'][13]['value']) && $is_rate[0]['RatingMeta'][13]['value']==80)? 'checked="checked"':''; ?> value="80" class="car">
					<label for="data[Rating][car]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][car]" <?php echo (isset($is_rate[0]['RatingMeta'][13]['value']) && $is_rate[0]['RatingMeta'][13]['value']==60)? 'checked="checked"':''; ?> value="60" class="car">
					<label for="data[Rating][car]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][car]" <?php echo (isset($is_rate[0]['RatingMeta'][13]['value']) && $is_rate[0]['RatingMeta'][13]['value']==40)? 'checked="checked"':''; ?> value="40" class="car">
					<label for="data[Rating][car]"><span></span>2</label>				
					<input type="radio" id="radioStyle" name="data[Rating][car]" <?php echo (isset($is_rate[0]['RatingMeta'][13]['value']) && $is_rate[0]['RatingMeta'][13]['value']==20)? 'checked="checked"':''; ?> value="20" class="car">
					<label for="data[Rating][car]"><span></span>1</label>
				</td>
			</tr> 

			<th colspan="2"><h3>趣味/趣向</h3></th> 

			<tr>
				<td><h6>趣味</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][hobby]" <?php echo (isset($is_rate[0]['RatingMeta'][14]['value']) && $is_rate[0]['RatingMeta'][14]['value']==100)? 'checked="checked"':''; ?> value="100" class="hobby">
					<label for="data[Rating][hobby]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][hobby]" <?php echo (isset($is_rate[0]['RatingMeta'][14]['value']) && $is_rate[0]['RatingMeta'][14]['value']==80)? 'checked="checked"':''; ?> value="80" class="hobby">
					<label for="data[Rating][hobby]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][hobby]" <?php echo (isset($is_rate[0]['RatingMeta'][14]['value']) && $is_rate[0]['RatingMeta'][14]['value']==60)? 'checked="checked"':''; ?> value="60" class="hobby">
					<label for="data[Rating][hobby]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][hobby]" <?php echo (isset($is_rate[0]['RatingMeta'][14]['value']) && $is_rate[0]['RatingMeta'][14]['value']==40)? 'checked="checked"':''; ?> value="40" class="hobby">
					<label for="data[Rating][hobby]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][hobby]" <?php echo (isset($is_rate[0]['RatingMeta'][14]['value']) && $is_rate[0]['RatingMeta'][14]['value']==20)? 'checked="checked"':''; ?> value="20" class="hobby">
					<label for="data[Rating][hobby]"><span></span>1</label>
				</td>
			</tr>
			<tr>
				<td><h6>興味あること</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][interesting]" <?php echo (isset($is_rate[0]['RatingMeta'][15]['value']) && $is_rate[0]['RatingMeta'][15]['value']==100)? 'checked="checked"':''; ?> value="100" class="interesting">
					<label for="data[Rating][interesting]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][interesting]" <?php echo (isset($is_rate[0]['RatingMeta'][15]['value']) && $is_rate[0]['RatingMeta'][15]['value']==80)? 'checked="checked"':''; ?> value="80" class="interesting">
					<label for="data[Rating][interesting]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][interesting]" <?php echo (isset($is_rate[0]['RatingMeta'][15]['value']) && $is_rate[0]['RatingMeta'][15]['value']==60)? 'checked="checked"':''; ?> value="60" class="interesting">
					<label for="data[Rating][interesting]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][interesting]" <?php echo (isset($is_rate[0]['RatingMeta'][15]['value']) && $is_rate[0]['RatingMeta'][15]['value']==40)? 'checked="checked"':''; ?> value="40" class="interesting">
					<label for="data[Rating][interesting]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][interesting]" <?php echo (isset($is_rate[0]['RatingMeta'][15]['value']) && $is_rate[0]['RatingMeta'][15]['value']==20)? 'checked="checked"':''; ?> value="20" class="interesting">
					<label for="data[Rating][interesting]"><span></span>1</label>
				</td>
			</tr>
			
			<th colspan="2"><h3>結婚/子供</h3></th>

			<tr>
				<td><h6>結婚歴</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][marital_status]" <?php echo (isset($is_rate[0]['RatingMeta'][16]['value']) && $is_rate[0]['RatingMeta'][16]['value']==100)? 'checked="checked"':''; ?> value="100" class="marital_status">
					<label for="data[Rating][marital_status]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][marital_status]" <?php echo (isset($is_rate[0]['RatingMeta'][16]['value']) && $is_rate[0]['RatingMeta'][16]['value']==80)? 'checked="checked"':''; ?> value="80" class="marital_status">
					<label for="data[Rating][marital_status]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][marital_status]" <?php echo (isset($is_rate[0]['RatingMeta'][16]['value']) && $is_rate[0]['RatingMeta'][16]['value']==60)? 'checked="checked"':''; ?> value="60" class="marital_status">
					<label for="data[Rating][marital_status]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][marital_status]" <?php echo (isset($is_rate[0]['RatingMeta'][16]['value']) && $is_rate[0]['RatingMeta'][16]['value']==40)? 'checked="checked"':''; ?> value="40" class="marital_status">
					<label for="data[Rating][marital_status]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][marital_status]" <?php echo (isset($is_rate[0]['RatingMeta'][16]['value']) && $is_rate[0]['RatingMeta'][16]['value']==20)? 'checked="checked"':''; ?> value="20" class="marital_status">
					<label for="data[Rating][marital_status]"><span></span>1</label>

				</td>
			</tr>
			<tr>
				<td><h6>結婚観</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][marriage]" <?php echo (isset($is_rate[0]['RatingMeta'][17]['value']) && $is_rate[0]['RatingMeta'][17]['value']==100)? 'checked="checked"':''; ?> value="100" class="marriage">
					<label for="data[Rating][marriage]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][marriage]" <?php echo (isset($is_rate[0]['RatingMeta'][17]['value']) && $is_rate[0]['RatingMeta'][17]['value']==80)? 'checked="checked"':''; ?> value="80" class="marriage">
					<label for="data[Rating][marriage]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][marriage]" <?php echo (isset($is_rate[0]['RatingMeta'][17]['value']) && $is_rate[0]['RatingMeta'][17]['value']==60)? 'checked="checked"':''; ?> value="60" class="marriage">
					<label for="data[Rating][marriage]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][marriage]" <?php echo (isset($is_rate[0]['RatingMeta'][17]['value']) && $is_rate[0]['RatingMeta'][17]['value']==40)? 'checked="checked"':''; ?> value="40" class="marriage">
					<label for="data[Rating][marriage]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][marriage]" <?php echo (isset($is_rate[0]['RatingMeta'][17]['value']) && $is_rate[0]['RatingMeta'][17]['value']==20)? 'checked="checked"':''; ?> value="20" class="marriage">
					<label for="data[Rating][marriage]"><span></span>1</label>

				</td>
			</tr>
			<tr> 
				<td><h6>子供の有無</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][children]" <?php echo (isset($is_rate[0]['RatingMeta'][18]['value']) && $is_rate[0]['RatingMeta'][18]['value']==100)? 'checked="checked"':''; ?> value="100" class="children">
					<label for="data[Rating][children]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][children]" <?php echo (isset($is_rate[0]['RatingMeta'][18]['value']) && $is_rate[0]['RatingMeta'][18]['value']==80)? 'checked="checked"':''; ?> value="80" class="children">
					<label for="data[Rating][children]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][children]" <?php echo (isset($is_rate[0]['RatingMeta'][18]['value']) && $is_rate[0]['RatingMeta'][18]['value']==60)? 'checked="checked"':''; ?> value="60" class="children">
					<label for="data[Rating][children]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][children]" <?php echo (isset($is_rate[0]['RatingMeta'][18]['value']) && $is_rate[0]['RatingMeta'][18]['value']==40)? 'checked="checked"':''; ?> value="40" class="children">
					<label for="data[Rating][children]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][children]" <?php echo (isset($is_rate[0]['RatingMeta'][18]['value']) && $is_rate[0]['RatingMeta'][18]['value']==20)? 'checked="checked"':''; ?> value="20" class="children">
					<label for="data[Rating][children]"><span></span>1</label>

				</td> 　　　
			</tr>
			<tr>
				<td><h6>子供欲しい</h6></td>　　
				<td class='aQuestion'>
					<input type="radio" id="radioStyle" name="data[Rating][num_children]" <?php echo (isset($is_rate[0]['RatingMeta'][19]['value']) && $is_rate[0]['RatingMeta'][19]['value']==100)? 'checked="checked"':''; ?> value="100" class="num_children">
					<label for="data[Rating][num_children]"><span></span>5</label>
					<input type="radio" id="radioStyle" name="data[Rating][num_children]" <?php echo (isset($is_rate[0]['RatingMeta'][19]['value']) && $is_rate[0]['RatingMeta'][19]['value']==80)? 'checked="checked"':''; ?> value="80" class="num_children">
					<label for="data[Rating][num_children]"><span></span>4</label>
					<input type="radio" id="radioStyle" name="data[Rating][num_children]" <?php echo (isset($is_rate[0]['RatingMeta'][19]['value']) && $is_rate[0]['RatingMeta'][19]['value']==60)? 'checked="checked"':''; ?> value="60" class="num_children">
					<label for="data[Rating][num_children]"><span></span>3</label>
					<input type="radio" id="radioStyle" name="data[Rating][num_children]" <?php echo (isset($is_rate[0]['RatingMeta'][19]['value']) && $is_rate[0]['RatingMeta'][19]['value']==40)? 'checked="checked"':''; ?> value="40" class="num_children">
					<label for="data[Rating][num_children]"><span></span>2</label>
					<input type="radio" id="radioStyle" name="data[Rating][num_children]" <?php echo (isset($is_rate[0]['RatingMeta'][19]['value']) && $is_rate[0]['RatingMeta'][19]['value']==20)? 'checked="checked"':''; ?> value="20" class="num_children">
					<label for="data[Rating][num_children]"><span></span>1</label>

				</td>
			</tr>
			<th colspan="2"><h3>コメント/Comment</h3></th>
			<tr>
				<td><h6>コメント/Comment</h6></td>　　
				<td class='commentbox'>
					<textarea name="data[Rating][comment]" class="user_comment" rows="15" cols="75"></textarea>
				</td>
			</tr>
		</table>
		<div class="PrevbtnCont">	
			<!-- <input type="button" value="Back" class="rateBackBtn btnStyle back" onclick="window.history.go(-1); return false;"> -->
			
			<?php 
				if(empty($is_report) && !empty($is_rate)){
					echo "<input type='button' value='Rate' class='rateSaveBtn btnStyle send' id='saveRate' disabled>";
				}elseif(!empty($is_report)){
					echo "<input type='button' value='Rate' class='rateSaveBtn btnStyle send' id='saveRate'>";
				}elseif(empty($is_rate) && empty($is_report)){
					echo "<input type='button' value='Rate' class='rateSaveBtn btnStyle send' id='saveRate'>";
				}
			?> 
			<?php
			if($numRate != $numPar || !empty($is_report)){
				echo "<button type='button' class='btnStyle sendMeNowSaAdmin' id='sendtoadmin' disabled>Next</button>";
			}elseif($numRate == $numPar){
				echo "<button type='button' class='btnStyle sendMeNowSaAdmin' id='sendtoadmin' >Next</button>";
			}
			$charr=count($is_report);
			echo $charr;
			//echo "<button type='button' class='btnStyle sendMeNowSaAdmin' id='sendtoadmin' >Next</button>";
			?>
			<!-- <button type="button" class="btnStyle sendMeNowSaAdmin" id="sendtoadmin" <?php echo (($is_report) && empty($is_rate)) ? 'disabled="disabled"' :''; ?>>Next</button>
 -->
			<?php //pr($is_rate); ?>
		</div>
		<div class="perRow">
			<div class="headerTitle CenterDiv">
			<!-- <button id='backBtn' class="">Save</button>
			<button id='ratesaveBtn' class="">Next</button> -->
			
			</div>
		</div>
	</form>

</div>

</div>
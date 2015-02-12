<?php 
$rating_num_obj = new AppController();
pr($rate);
$sum = 0;

foreach ($rate as $key => $rates) {
	 //$sum  = $sum + $rates['value'];

	foreach ($rates['RatingMeta'] as $key => $rate_meta) {
		$sum = $sum + $rate_meta['value'];
	}
	echo "Sum". ($sum/20);
	$sum =  0;
}


foreach ($rate as $key => $rated) {  


	//pr($rated['Rating']['id']);
	//$score = $rating_num_obj->getScore($rated['Rating']['id']); 
	/*
	foreach($score as $value){
		
  			$arr = $value['RatingMeta']['value']; 
  			
  			echo $ssum;

	}
	*/
}
?>
<style type="text/css">
.inputContainer{
	border-bottom: 1px solid #eee;
}
.textDisp{
	padding: 5px;
	!background: rgb(66, 184, 221);
	color: #fff;
	margin-bottom: 5px;
	width: 30%;
	border-radius: 0px;
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
  width: 366px;
  !height: 50px;
  height: 35px;
  border-radius: 4px;
  font-family: sans-serif;
  font-weight: normal;
  font-size: 0.8em;
  color: #FFF;
}
.bar-percentage, .bar-percentage01, .bar-percentage02, .bar-percentage03, .bar-percentage04 {
  float: left;
  background: rgba(0,0,100,0.13);
  padding: 9px 0px;
  width: 12%;
  height: 16px;
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
.violet  { background: #EFC32F; }
.yellow  { background: #FA7743; }
.red     { background: #E44C41; }
.HborderLeft_azure{
	border-left: 5px solid #38B1CC;
}
.HborderLeft_emerald{
	border-left: 5px solid #2CB299;
}
.HborderLeft_yellow{
	border-left: 5px solid #EFC32F;
}
.HborderLeft_violet{
	border-left: 5px solid #FA7743;
}
.HborderLeft_red{
	border-left: 5px solid #E44C41;
}
h1{
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
	width: 98%;
}
.repContmain{
	width: 100%;
	background: rgba(60,80,250,0.1);
	position: relative;
}
h4{
	padding: 8px;
	color: #fff;
	background: #cccccc;
	border-left: 5px solid #555;
	margin: 0;
}
h5{
	padding: 5px;
	color: #fff;
	background: #cccccc;
	border-left: 5px solid lightseagreen;
	margin: 0;
}
h6{
	padding: 3px;
	color: #fff;
	background: #cccccc;
	!border-left: 5px solid orange;
	margin: 0;
}
.HborderLefit_azure{
	border-left: 5px solid
}
.PrevbtnCont{
	width: 100%;
	text-align: center;
	padding: 10px;
}
.inputContainer{
	width: 45%;
}
table{
	border-spacing: 14px 25px;
	width: 100%;
}
.headerTitle .rep{
	margin-bottom: -29px;
}
.percentText{
	float:right;

}
.rePOTAsyon{
	margin-bottom: 20px;
}
a{
	text-decoration: none;
	color: #fff;
}
.nameToggle{
	padding-right: 80%;

}
#repSheetCon{
	width: 96%;
	!padding: 5px;
	margin-left: 2%;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	/*$('a#'+idnum).click(function(){
		//$('.repCont'+idnum).toggle();
		alert($('a#'+idnum).attr('claass'));
	});*/
	$('body').on('click', '.nameClick', function() {
    	//alert( $(this).attr('id') );
    	var id = $(this).attr('id');
    	var idtxt = '.repCon'+id;
    	var div = $('.repCon'+id).attr('class');
    	//alert(div);
    	$('.repCon'+id).slideToggle('fast');
	});
});
</script>
<div class="divisions" id="eventNumber">
<h3>中間印象カード</h3>
</div>
<div class="divisions" id="eventNumber">
	<table class='table'>
	<?php
		/*foreach ($eventNum as $key => $NumEvent) {
			pr($NumEvent);
		}*/
		$num = 1;
		$event_num_obj = new AppController();
		foreach ($rate as $key => $rated) { 
			
	?>

		<tr>
			<td>第<?php echo $num;?>指名</td>
			<td>
				<select>
				<?php foreach ($rate as $key => $rated) {  
				?>
				  <option value="volvo"> 
				  	<?php 

				  	$number = $event_num_obj->getNumber($rated['Rating']['user_id'],$rated['Rating']['event_id']); 
				  	?>


				   <?php echo $number['EventUser']['number'];?></option>
				 <?php } ?>
				</select>
			</td>
		</tr>	
	<?php 
		$num++;
		} 
	?>
	</table>
	<div class="PrevbtnCont">	
			<input type="button" value="Send To Admin" class="rateSaveBtn btnStyle send" id="saveRate">
	</div>
</div>

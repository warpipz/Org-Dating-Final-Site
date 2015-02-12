
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
.select2-results .select2-disabled {
    display:none;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$("select").on('focus', function ()
		{
		// Store the current value on focus and on change
		previous = this.value;
		}).change(function() {
		// Do something with the previous value after the change		
		//alert(previous);
		var previoues_val=previous;//alert(p);
		var selected=$(this).val();
		var opts = $(this)[0].options;		
		var array = $.map(opts, function(elem) {
		return (elem.value || elem.text);
		});
		//alert(array);
		$('select').each(function() {
			var v=$(this).val();
			if(previoues_val != '' )
			{
				//alert(p);
				$('option[value="' + previoues_val + '"]').css('display','inline');
			}
		$('option[value="' + selected + '"]').css('display','none');
		$('option[value=""]').css('display','inline'); 
	    });
		// Make sure the previous value is updated
		previous = this.value;
	});
	$('#savePhase').click(function(){
		/*if($('.Options').each().val() == 0) {
    		//alert('naa value tanan!')
		}else{
			//alert('naay emty');
		}*/
		var submit = true;
		for(var i=1; i<=6; i++){
			if($('#chosmeyo-'+i).val()==""){

		  		submit = false;
		  		break
			}
		}
		if(submit){
			$('#timesheetForm').submit();
			//alert("ok na");
		}else{
			alert("Please complete all six.");
		}
			/*var total_dropdown = $('#ahataman').val();
			var choss = $('.Options option:selected').attr('name');
			//alert("value:"+ $(this).val()+" Total"+total_dropdown);
			var id_sa_dropdown = $(this).attr('id');
			//alert("id sa drops: "+id_sa_dropdown);
			
			alert("value "+$('.Options').val());
			alert("value na pd:" +$("select[name='user_options'") ).val();
			for(var i=1;i<=total_dropdown;i++){
				if($("#chosmeyo-1").val()==$("#chosmeyo-2").val() || )
				if($("#chosmeyo-"+i).val()==$("#chosmeyo-"+(i+1)).val())
				{
				 	alert("Pls Select Unique Numbers");
				 	submit = false;
				 	break;
				}				
				
			}
			if(submit){
				$('#timesheetForm').submit();
			}*/
			//$('#timesheetForm').submit();
		});
});
</script>
<div class="divisions" id="eventNumber">
<h3>中間印象カード</h3>
</div>
<div class="divisions" id="eventNumber">
	<form class="midway" method="post" id="timesheetForm" action="/newdating/party/phasetwo/">
	<table class='table'>
	<?php
		
	
		$event_num_obj = new AppController();
		//pr($rate);

		$limit = (count($rate)>6) ? 6 : count($rate);
		for($i=0; $i < $limit; $i++) { 		
	?>
		<tr>
			<td>第<?php echo $i+1;?>指名</td>
			<td>
				<select id="chosmeyo-<?php echo $i+1;?>" name="user_options[]" class="Options">
					<option value="">Pick</option>
				<?php foreach ($rate as $key2 => $rated) { 				
				  	$number = $event_num_obj->getNumber($rated['Rating']['user_id'],$rated['Rating']['event_id']); 
				  	?>

				  <option name="<?php echo $number['EventUser']['number'];?>" value="<?php echo $number['EventUser']['id'].','.$number['EventUser']['number'];?>"> 
				   <?php echo $number['EventUser']['number'];?></option>
				 <?php } ?>
				</select>
			</td>
		</tr>	
	<?php 
		
		} 
	?>
	<input type="hidden" value="<?php echo $limit;?>" id="ahataman"/>
	</table>
	<div class="PrevbtnCont">	
			<input type="button" value="Send To Admin" class="rateSaveBtn btnStyle send" id="savePhase">
	</div>
	</form>
	
</div>

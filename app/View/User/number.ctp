<div class="number_div">
<div class="number">Your Number is <?php echo $data; ?></div>
<button class="btn btn-primary cusbtn" id="nextbtn"><i class="fa fa-arrow-circle-right"></i> Next</button>

</div>
<style type="text/css">
.number{
	text-align: center;
	font-size: 140%;
	border: 1px solid black;
	width: 50%;
	margin: 0 auto;
	padding: 1%;
}
.number_div{
	margin: 0 auto;
	text-align: center;
}
.cusbtn{
	margin-top: 5px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('#nextbtn').click(function(){
		window.location.href = "/newdating/user/description";
	})
})
</script>
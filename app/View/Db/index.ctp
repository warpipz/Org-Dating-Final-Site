<style type="text/css">
	div.divisions div{
		vertical-align:top;
	}
	div.db-left{
		display:inline-block;
		width:180px;
	}
	div.db-right{
		display:inline-block;
		width:calc(100% - 190px);
	}
	div.db-left a{
		display:block;
		margin:3px 0;
		text-align:left;
	}
	form{
		margin:3px 0;
		text-align:center;
		border:1px solid #e9e9e9;
	}
	form textarea{
		height:200px;
		resize:none;
	}
	form button{
		margin:3px 0;
		width:100%;
		display:block;
	}
</style>
<div class="divisions">
	<div class="db-left">
		<?php foreach($tables as $table){?>
			<a href="<?php echo FOLDER?>/db/index/<?php echo $table?>" class="btn btn-default"><?php echo $table?></a>
		<?php }?>
	</div>
	<div class="db-right">
		<form method="post" action="?">
			<textarea class="form-control" id="query-box" name="query"><?php echo $sql;?></textarea>
			<button class="btn btn-primary">Query</button>
		</form>
		<table class="table">
		  <tr>
			<?php foreach($head as $value){?>
				<th><b><?php echo $value;?></b></th>
			<?php }?>
		  </tr>
		  <?php foreach($datas as $data){?>
		  	<tr>
		  	  <?php foreach($data as $val){?>
			    <?php foreach($val as $v){?>
			  	  <td><?php echo $v;?></td>
				<?php } ?>
			  <?php } ?>
			</tr>
		  <?php } ?>
		</table>
	</div>
</div>
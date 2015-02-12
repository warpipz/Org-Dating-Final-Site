<?php echo $this->Html->css('user'); ?>
<div class="divisions" id="user-index">
	<?php if($this->Session->check('SCC_USR_UPD')){?>
	<div class="alert alert-success"><i class="fa fa-check-circle"></i> Information Updated</div>
	<?php unset($_SESSION['SCC_USR_UPD']);?>
	<?php }?>
	<h3>My Personal Information</h3>	
	<form method="post" onsubmit="return false;" id="frmUpdInf" action="<?php echo FOLDER?>/user/number">	
		<table class="table">			
			<tbody>
				<tr>
					<th>お名前（ニックネーム）/Name <span class="need">*</span></th>
					<td><input type="text" name="name" class="form-control" value="<?php echo $user['UserMeta']['name'];?>" /></td>
				</tr>
				<tr>
					<th>フリガナ/ Phonetic <span class="need">*</span></th>
					<td><input type="text" name="phonetic" class="form-control" value="<?php echo $user['UserMeta']['phonetic'];?>" /></td>
				</tr>
				<tr>
					<th>性別/Gender <span class="need">*</span></th>
					<td>
						<label for="GF">
							<input type="radio" name="gender" id="GF" value="2" <?php echo ($user['UserMeta']['gender']==2) ? 'checked' : ''?> /> 女性/Women
						</label> &nbsp;&nbsp;&nbsp;
						<label for="BF">
							<input type="radio" name="gender" id="BF" value="1" <?php echo ($user['UserMeta']['gender']==1) ? 'checked' : ''?> /> 男性/Men
						</label>
					</td>
				</tr>
				<tr>
					<th>生年月日/Date of Birth<span class="need">*</span></th>
					<td>
						<select name="year" class="form-control birth_control" id="year">
							<option value="">Year</option>
							<?php for($year=idate('Y');$year>=1896;$year--){ ?>
							<?php $year_check = ($year==$user['UserMeta']['year']) ? 'selected' : '' ;?>
							<option value="<?php echo $year ?>" <?php echo $year_check; ?> ><?php echo $year; ?></option>
							<?php } ?>
						</select>
						/
						<select name="month" class="form-control birth_control" id="month">
							<option value="">Month</option>
							<?php for($month=1;$month<=12;$month++){ ?>
							<?php $month_check = ($month==$user['UserMeta']['month']) ? 'selected' : '' ;?>
							<option value="<?php echo $month; ?>" <?php echo $month_check; ?> ><?php echo $month; ?></option>
							<?php } ?>
						</select>
						/
						<select name="day" class="form-control birth_control" id="day">
							<option value="">Date</option>
							<?php for($date=1;$date<=31;$date++){ ?>
							<?php $date_check = ($date==$user['UserMeta']['day']) ? 'selected' : '' ;?>
							<option value="<?php echo $date ?>" <?php echo $date_check; ?>><?php echo $date ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<th>血液型/Bloodtype<span class="need">*</span></th>
					<td>
						<label>
							  <input type="radio" name="bloodtype" id="bloodtype" value="A" <?php echo ($user['UserMeta']['bloodtype']=='A') ? 'checked' : ''?> > A型 &nbsp;&nbsp;&nbsp;
						</label>
						<label>
							  <input type="radio" name="bloodtype" id="bloodtype" value="B" <?php echo ($user['UserMeta']['bloodtype']=='B') ? 'checked' : ''?>> B型 &nbsp;&nbsp;&nbsp;
						</label>
						<label>
							  <input type="radio" name="bloodtype" id="bloodtype" value="O" <?php echo ($user['UserMeta']['bloodtype']=='0') ? 'checked' : ''?>> O型 &nbsp;&nbsp;&nbsp;
						</label>
						<label>
							 <input type="radio" name="bloodtype" id="bloodtype" value="AB" <?php echo ($user['UserMeta']['bloodtype']=='AB') ? 'checked' : ''?>> AB型   
						</label>
					</td>
				</tr>
				<tr>
					<th>居住地/Present<span class="need">*</span></th>
					<td>
						<select name="present_prefecture" id="prefecture_present" class="form-control">
							<option value="">地域</option>
							<option value="北海道" <?php echo ($user['UserMeta']['present_prefecture']== "北海道") ? 'selected' : ''?> >北海道</option>
							<option value="青森" <?php echo ($user['UserMeta']['present_prefecture']== "青森") ? 'selected' : ''?>>青森</option>
							<option value="岩手" <?php echo ($user['UserMeta']['present_prefecture']== "岩手") ? 'selected' : ''?>>岩手</option>
							<option value="宮城" <?php echo ($user['UserMeta']['present_prefecture']== "宮城") ? 'selected' : ''?>>宮城</option>
							<option value="秋田" <?php echo ($user['UserMeta']['present_prefecture']== "秋田") ? 'selected' : ''?>>秋田</option>
							<option value="山形" <?php echo ($user['UserMeta']['present_prefecture']== "山形") ? 'selected' : ''?>>山形</option>
							<option value="福島" <?php echo ($user['UserMeta']['present_prefecture']== "福島") ? 'selected' : ''?>>福島</option>
							<option value="茨城" <?php echo ($user['UserMeta']['present_prefecture']== "茨城") ? 'selected' : ''?>>茨城</option>
							<option value="栃木" <?php echo ($user['UserMeta']['present_prefecture']== "栃木") ? 'selected' : ''?>>栃木</option>
							<option value="群馬" <?php echo ($user['UserMeta']['present_prefecture']== "群馬") ? 'selected' : ''?>>群馬</option>
							<option value="埼玉" <?php echo ($user['UserMeta']['present_prefecture']== "埼玉") ? 'selected' : ''?>>埼玉</option>
							<option value="千葉" <?php echo ($user['UserMeta']['present_prefecture']== "千葉") ? 'selected' : ''?>>千葉</option>
							<option value="東京" <?php echo ($user['UserMeta']['present_prefecture']== "東京") ? 'selected' : ''?>>東京</option>
							<option value="神奈川" <?php echo ($user['UserMeta']['present_prefecture']== "神奈川") ? 'selected' : ''?>>神奈川</option>
							<option value="新潟" <?php echo ($user['UserMeta']['present_prefecture']== "新潟") ? 'selected' : ''?>>新潟</option>
							<option value="富山" <?php echo ($user['UserMeta']['present_prefecture']== "富山") ? 'selected' : ''?>>富山</option>
							<option value="石川" <?php echo ($user['UserMeta']['present_prefecture']== "石川") ? 'selected' : ''?>>石川</option>
							<option value="福井" <?php echo ($user['UserMeta']['present_prefecture']== "福井") ? 'selected' : ''?>>福井</option>
							<option value="山梨" <?php echo ($user['UserMeta']['present_prefecture']== "山梨") ? 'selected' : ''?>>山梨</option>
							<option value="長野" <?php echo ($user['UserMeta']['present_prefecture']== "長野") ? 'selected' : ''?>>長野</option>
							<option value="岐阜" <?php echo ($user['UserMeta']['present_prefecture']== "岐阜") ? 'selected' : ''?>>岐阜</option>
							<option value="静岡" <?php echo ($user['UserMeta']['present_prefecture']== "静岡") ? 'selected' : ''?>>静岡</option>
							<option value="愛知" <?php echo ($user['UserMeta']['present_prefecture']== "愛知") ? 'selected' : ''?>>愛知</option>
							<option value="三重" <?php echo ($user['UserMeta']['present_prefecture']== "三重") ? 'selected' : ''?>>三重</option>
							<option value="滋賀" <?php echo ($user['UserMeta']['present_prefecture']== "滋賀") ? 'selected' : ''?>>滋賀</option>
							<option value="京都府" <?php echo ($user['UserMeta']['present_prefecture']== "京都府") ? 'selected' : ''?>>京都府</option>
							<option value="大阪府" <?php echo ($user['UserMeta']['present_prefecture']== "大阪府") ? 'selected' : ''?>>大阪府</option>
							<option value="兵庫" <?php echo ($user['UserMeta']['present_prefecture']== "兵庫") ? 'selected' : ''?>>兵庫</option>
							<option value="奈良" <?php echo ($user['UserMeta']['present_prefecture']== "奈良") ? 'selected' : ''?>>奈良</option>
							<option value="和歌山" <?php echo ($user['UserMeta']['present_prefecture']== "和歌山") ? 'selected' : ''?>>和歌山</option>
							<option value="鳥取" <?php echo ($user['UserMeta']['present_prefecture']== "鳥取") ? 'selected' : ''?>>鳥取</option>
							<option value="島根" <?php echo ($user['UserMeta']['present_prefecture']== "島根") ? 'selected' : ''?>>島根</option>
							<option value="岡山" <?php echo ($user['UserMeta']['present_prefecture']== "岡山") ? 'selected' : ''?>>岡山</option>
							<option value="広島" <?php echo ($user['UserMeta']['present_prefecture']== "広島") ? 'selected' : ''?>>広島</option>
							<option value="山口" <?php echo ($user['UserMeta']['present_prefecture']== "山口") ? 'selected' : ''?>>山口</option>
							<option value="徳島" <?php echo ($user['UserMeta']['present_prefecture']== "徳島") ? 'selected' : ''?>>徳島</option>
							<option value="香川" <?php echo ($user['UserMeta']['present_prefecture']== "香川") ? 'selected' : ''?>>香川</option>
							<option value="愛媛" <?php echo ($user['UserMeta']['present_prefecture']== "愛媛") ? 'selected' : ''?>>愛媛</option>
							<option value="高知" <?php echo ($user['UserMeta']['present_prefecture']== "高知") ? 'selected' : ''?>>高知</option>
							<option value="福岡" <?php echo ($user['UserMeta']['present_prefecture']== "福岡") ? 'selected' : ''?>>福岡</option>
							<option value="佐賀" <?php echo ($user['UserMeta']['present_prefecture']== "佐賀") ? 'selected' : ''?>>佐賀</option>
							<option value="長崎" <?php echo ($user['UserMeta']['present_prefecture']== "長崎") ? 'selected' : ''?>>長崎</option>
							<option value="熊本" <?php echo ($user['UserMeta']['present_prefecture']== "熊本") ? 'selected' : ''?>>熊本</option>
							<option value="大分" <?php echo ($user['UserMeta']['present_prefecture']== "大分") ? 'selected' : ''?>>大分</option>
							<option value="宮崎" <?php echo ($user['UserMeta']['present_prefecture']== "宮崎") ? 'selected' : ''?>>宮崎</option>
							<option value="鹿児島" <?php echo ($user['UserMeta']['present_prefecture']== "鹿児島") ? 'selected' : ''?>>鹿児島</option>
							<option value="沖縄" <?php echo ($user['UserMeta']['present_prefecture']== "沖縄") ? 'selected' : ''?>>沖縄</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>出身地/Born<span class="need">*</span></th>
					<td>
						<select name="born_prefecture" id="prefecture_born" class="form-control">
							<option value="">地域</option>
							<option value="北海道" <?php echo ($user['UserMeta']['born_prefecture']== "北海道") ? 'selected' : ''?> >北海道</option>
							<option value="青森" <?php echo ($user['UserMeta']['born_prefecture']== "青森") ? 'selected' : ''?>>青森</option>
							<option value="岩手" <?php echo ($user['UserMeta']['born_prefecture']== "岩手") ? 'selected' : ''?>>岩手</option>
							<option value="宮城" <?php echo ($user['UserMeta']['born_prefecture']== "宮城") ? 'selected' : ''?>>宮城</option>
							<option value="秋田" <?php echo ($user['UserMeta']['born_prefecture']== "秋田") ? 'selected' : ''?>>秋田</option>
							<option value="山形" <?php echo ($user['UserMeta']['born_prefecture']== "山形") ? 'selected' : ''?>>山形</option>
							<option value="福島" <?php echo ($user['UserMeta']['born_prefecture']== "福島") ? 'selected' : ''?>>福島</option>
							<option value="茨城" <?php echo ($user['UserMeta']['born_prefecture']== "茨城") ? 'selected' : ''?>>茨城</option>
							<option value="栃木" <?php echo ($user['UserMeta']['born_prefecture']== "栃木") ? 'selected' : ''?>>栃木</option>
							<option value="群馬" <?php echo ($user['UserMeta']['born_prefecture']== "群馬") ? 'selected' : ''?>>群馬</option>
							<option value="埼玉" <?php echo ($user['UserMeta']['born_prefecture']== "埼玉") ? 'selected' : ''?>>埼玉</option>
							<option value="千葉" <?php echo ($user['UserMeta']['born_prefecture']== "千葉") ? 'selected' : ''?>>千葉</option>
							<option value="東京" <?php echo ($user['UserMeta']['born_prefecture']== "東京") ? 'selected' : ''?>>東京</option>
							<option value="神奈川" <?php echo ($user['UserMeta']['born_prefecture']== "神奈川") ? 'selected' : ''?>>神奈川</option>
							<option value="新潟" <?php echo ($user['UserMeta']['born_prefecture']== "新潟") ? 'selected' : ''?>>新潟</option>
							<option value="富山" <?php echo ($user['UserMeta']['born_prefecture']== "富山") ? 'selected' : ''?>>富山</option>
							<option value="石川" <?php echo ($user['UserMeta']['born_prefecture']== "石川") ? 'selected' : ''?>>石川</option>
							<option value="福井" <?php echo ($user['UserMeta']['born_prefecture']== "福井") ? 'selected' : ''?>>福井</option>
							<option value="山梨" <?php echo ($user['UserMeta']['born_prefecture']== "山梨") ? 'selected' : ''?>>山梨</option>
							<option value="長野" <?php echo ($user['UserMeta']['born_prefecture']== "長野") ? 'selected' : ''?>>長野</option>
							<option value="岐阜" <?php echo ($user['UserMeta']['born_prefecture']== "岐阜") ? 'selected' : ''?>>岐阜</option>
							<option value="静岡" <?php echo ($user['UserMeta']['born_prefecture']== "静岡") ? 'selected' : ''?>>静岡</option>
							<option value="愛知" <?php echo ($user['UserMeta']['born_prefecture']== "愛知") ? 'selected' : ''?>>愛知</option>
							<option value="三重" <?php echo ($user['UserMeta']['born_prefecture']== "三重") ? 'selected' : ''?>>三重</option>
							<option value="滋賀" <?php echo ($user['UserMeta']['born_prefecture']== "滋賀") ? 'selected' : ''?>>滋賀</option>
							<option value="京都府" <?php echo ($user['UserMeta']['born_prefecture']== "京都府") ? 'selected' : ''?>>京都府</option>
							<option value="大阪府" <?php echo ($user['UserMeta']['born_prefecture']== "大阪府") ? 'selected' : ''?>>大阪府</option>
							<option value="兵庫" <?php echo ($user['UserMeta']['born_prefecture']== "兵庫") ? 'selected' : ''?>>兵庫</option>
							<option value="奈良" <?php echo ($user['UserMeta']['born_prefecture']== "奈良") ? 'selected' : ''?>>奈良</option>
							<option value="和歌山" <?php echo ($user['UserMeta']['born_prefecture']== "和歌山") ? 'selected' : ''?>>和歌山</option>
							<option value="鳥取" <?php echo ($user['UserMeta']['born_prefecture']== "鳥取") ? 'selected' : ''?>>鳥取</option>
							<option value="島根" <?php echo ($user['UserMeta']['born_prefecture']== "島根") ? 'selected' : ''?>>島根</option>
							<option value="岡山" <?php echo ($user['UserMeta']['born_prefecture']== "岡山") ? 'selected' : ''?>>岡山</option>
							<option value="広島" <?php echo ($user['UserMeta']['born_prefecture']== "広島") ? 'selected' : ''?>>広島</option>
							<option value="山口" <?php echo ($user['UserMeta']['born_prefecture']== "山口") ? 'selected' : ''?>>山口</option>
							<option value="徳島" <?php echo ($user['UserMeta']['born_prefecture']== "徳島") ? 'selected' : ''?>>徳島</option>
							<option value="香川" <?php echo ($user['UserMeta']['born_prefecture']== "香川") ? 'selected' : ''?>>香川</option>
							<option value="愛媛" <?php echo ($user['UserMeta']['born_prefecture']== "愛媛") ? 'selected' : ''?>>愛媛</option>
							<option value="高知" <?php echo ($user['UserMeta']['born_prefecture']== "高知") ? 'selected' : ''?>>高知</option>
							<option value="福岡" <?php echo ($user['UserMeta']['born_prefecture']== "福岡") ? 'selected' : ''?>>福岡</option>
							<option value="佐賀" <?php echo ($user['UserMeta']['born_prefecture']== "佐賀") ? 'selected' : ''?>>佐賀</option>
							<option value="長崎" <?php echo ($user['UserMeta']['born_prefecture']== "長崎") ? 'selected' : ''?>>長崎</option>
							<option value="熊本" <?php echo ($user['UserMeta']['born_prefecture']== "熊本") ? 'selected' : ''?>>熊本</option>
							<option value="大分" <?php echo ($user['UserMeta']['born_prefecture']== "大分") ? 'selected' : ''?>>大分</option>
							<option value="宮崎" <?php echo ($user['UserMeta']['born_prefecture']== "宮崎") ? 'selected' : ''?>>宮崎</option>
							<option value="鹿児島" <?php echo ($user['UserMeta']['born_prefecture']== "鹿児島") ? 'selected' : ''?>>鹿児島</option>
							<option value="沖縄" <?php echo ($user['UserMeta']['born_prefecture']== "沖縄") ? 'selected' : ''?>>沖縄</option>
						</select>
					</td>
				</tr>
				<!-- Second Info -->
				<tr>
					<th><label class="redtxt">外見/内面</label></th>
					<td></td>
				</tr>
				<tr>
					<th>体型<span class="need">*</span></th>
					<td>
						<select name="body" class="form-control" id="body">
							<option value="">Select</option>
							<option value="スリム/細め" <?php echo ($user['UserMeta']['body']== "スリム/細め") ? 'selected' : ''?> >スリム/細め</option>
							<option value="普通" <?php echo ($user['UserMeta']['body']== "普通") ? 'selected' : ''?>>普通</option>
							<option value="グラマー" <?php echo ($user['UserMeta']['body']== "グラマー") ? 'selected' : ''?>>グラマー</option>
							<option value="筋肉質" <?php echo ($user['UserMeta']['body']== "筋肉質") ? 'selected' : ''?>>筋肉質</option>
							<option value="ややぽっちゃり" <?php echo ($user['UserMeta']['body']== "ややぽっちゃり") ? 'selected' : ''?>>ややぽっちゃり</option>
							<option value="ぽっちゃり" <?php echo ($user['UserMeta']['body']== "ぽっちゃり") ? 'selected' : ''?> >ぽっちゃり</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>身長<span class="need">*</span></th>
					<td><input type="text" name="cm" class="form-control half" placeholder="ご入力してください。" value="<?php echo $user['UserMeta']['cm'];?>"/><label class="middle"> &nbsp;cm</label></td>
				</tr>
				<tr>
					<th>体重<span class="need">*</span></th>
					<td><input type="text" name="kg" class="form-control half" placeholder="ご入力してください。" value="<?php echo $user['UserMeta']['kg'];?>"/><label class="middle"> &nbsp;kg</label></td>
				</tr>
				<tr>
					<th>髪型<span class="need">*</span></th>
					<td>
						<select name="hairstyle" class="form-control" id="hairstyle">
							<option value="">Select</option>
							<option value="ベリーショート" <?php echo ($user['UserMeta']['hairstyle']== "ベリーショート") ? 'selected' : ''?>>ベリーショート</option>
							<option value="ショート" <?php echo ($user['UserMeta']['hairstyle']== "ショート") ? 'selected' : ''?>>ショート</option>
							<option value="ミディアム" <?php echo ($user['UserMeta']['hairstyle']== "ミディアム") ? 'selected' : ''?>>ミディアム</option>
							<option value="セミロング" <?php echo ($user['UserMeta']['hairstyle']== "セミロング") ? 'selected' : ''?>>セミロング</option>
							<option value="ロング" <?php echo ($user['UserMeta']['hairstyle']== "ロング") ? 'selected' : ''?>>ロング</option>
							<option value="坊主" <?php echo ($user['UserMeta']['hairstyle']== "坊主") ? 'selected' : ''?>>坊主</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>メガネ<span class="need">*</span></th>
					<td>
						<select name="glass" class="form-control" id="glass">
							<option value="">Select</option>
							<option value="かける" <?php echo ($user['UserMeta']['glass']== "かける") ? 'selected' : ''?> >かける</option>
							<option value="かけない" <?php echo ($user['UserMeta']['glass']== "かけない") ? 'selected' : ''?>>かけない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>タイプ<span class="need">*</span></th>
					<td>
						<select name="type_person" class="form-control" id="type_person">
							<option value="">Select</option>
							<option value="さわやか系" <?php echo ($user['UserMeta']['type_person']== "さわやか系") ? 'selected' : ''?>>さわやか系</option>
							<option value="オシャレ系" <?php echo ($user['UserMeta']['type_person']== "オシャレ系") ? 'selected' : ''?>>オシャレ系</option>
							<option value="カジュアル系" <?php echo ($user['UserMeta']['type_person']== "カジュアル系") ? 'selected' : ''?>>カジュアル系</option>
							<option value="お笑い系" <?php echo ($user['UserMeta']['type_person']== "お笑い系") ? 'selected' : ''?>>お笑い系</option>
							<option value="スポーツ系" <?php echo ($user['UserMeta']['type_person']== "スポーツ系") ? 'selected' : ''?>>スポーツ系</option>
							<option value="癒し系" <?php echo ($user['UserMeta']['type_person']== "癒し系") ? 'selected' : ''?>>癒し系</option>
							<option value="ガテン系" <?php echo ($user['UserMeta']['type_person']== "ガテン系") ? 'selected' : ''?>>ガテン系</option>
							<option value="お金持ち系" <?php echo ($user['UserMeta']['type_person']== "お金持ち系") ? 'selected' : ''?>>お金持ち系</option>
							<option value="ホスト系" <?php echo ($user['UserMeta']['type_person']== "ホスト系") ? 'selected' : ''?>>ホスト系</option>
							<option value="ダンディ系" <?php echo ($user['UserMeta']['type_person']== "ダンディ系") ? 'selected' : ''?>>ダンディ系</option>
							<option value="マッチョ系" <?php echo ($user['UserMeta']['type_person']== "マッチョ系") ? 'selected' : ''?>>マッチョ系</option>
							<option value="ジャニーズ系" <?php echo ($user['UserMeta']['type_person']== "ジャニーズ系") ? 'selected' : ''?>>ジャニーズ系</option>
							<option value="スーツ系" <?php echo ($user['UserMeta']['type_person']== "スーツ系") ? 'selected' : ''?>>スーツ系</option>
							<option value="アキバ系" <?php echo ($user['UserMeta']['type_person']== "アキバ系") ? 'selected' : ''?>>アキバ系</option>
							<option value="モード系" <?php echo ($user['UserMeta']['type_person']== "モード系") ? 'selected' : ''?>>モード系</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>性格<span class="need">*</span></th>
					<td>
						<select name="personality" class="form-control" id="personality">
							<option value="優しい" <?php echo ($user['UserMeta']['personality']== "優しい") ? 'selected' : ''?> >優しい</option>
							<option value="素直" <?php echo ($user['UserMeta']['personality']== "素直") ? 'selected' : ''?>>素直</option>
							<option value="誠実" <?php echo ($user['UserMeta']['personality']== "誠実") ? 'selected' : ''?>>誠実</option>
							<option value="明るい" <?php echo ($user['UserMeta']['personality']== "明るい") ? 'selected' : ''?>>明るい</option>
							<option value="社交的" <?php echo ($user['UserMeta']['personality']== "社交的") ? 'selected' : ''?>>社交的</option>
							<option value="人見知り" <?php echo ($user['UserMeta']['personality']== "人見知り") ? 'selected' : ''?>>人見知り</option>
							<option value="知的" <?php echo ($user['UserMeta']['personality']== "知的") ? 'selected' : ''?>>知的</option>
							<option value="ドライ" <?php echo ($user['UserMeta']['personality']== "ドライ") ? 'selected' : ''?>>ドライ</option>
							<option value="ロマンチスト" <?php echo ($user['UserMeta']['personality']== "ロマンチスト") ? 'selected' : ''?>>ロマンチスト</option>
							<option value="几帳面" <?php echo ($user['UserMeta']['personality']== "几帳面") ? 'selected' : ''?>>几帳面</option>
							<option value="おおらか" <?php echo ($user['UserMeta']['personality']== "おおらか") ? 'selected' : ''?>>おおらか</option>
							<option value="寂しがり" <?php echo ($user['UserMeta']['personality']== "寂しがり") ? 'selected' : ''?>>寂しがり</option>
							<option value="負けず嫌い" <?php echo ($user['UserMeta']['personality']== "負けず嫌い") ? 'selected' : ''?>>負けず嫌い</option>
							<option value="家庭的" <?php echo ($user['UserMeta']['personality']== "家庭的") ? 'selected' : ''?>>家庭的</option>
							<option value="優柔不断" <?php echo ($user['UserMeta']['personality']== "優柔不断") ? 'selected' : ''?>>優柔不断</option>
							<option value="決断力あり" <?php echo ($user['UserMeta']['personality']== "決断力あり") ? 'selected' : ''?>>決断力あり</option>
							<option value="天然" <?php echo ($user['UserMeta']['personality']== "天然") ? 'selected' : ''?>>天然</option>
						</select>
					</td>
				</tr>
				<!-- Third Info -->
				<tr>
					<th class="redtxt">仕事/学歴</th>
					<td></td>
				</tr>
				<tr>
					<th>職業<span class="need">*</span></th>
					<td>
						<select name="occupation" class="form-control" id="occupation">
							<option value="">Select</option>
							<option value="公務員" <?php echo ($user['UserMeta']['occupation']== "公務員") ? 'selected' : ''?>>公務員</option>
							<option value="会社経営/自営業" <?php echo ($user['UserMeta']['occupation']== "会社経営/自営業") ? 'selected' : ''?>>会社経営/自営業</option>
							<option value="役員/管理職" <?php echo ($user['UserMeta']['occupation']== "役員/管理職") ? 'selected' : ''?>>役員/管理職</option>
							<option value="事務職/OL" <?php echo ($user['UserMeta']['occupation']== "事務職/OL") ? 'selected' : ''?>>事務職/OL</option>
							<option value="受付/秘書" <?php echo ($user['UserMeta']['occupation']== "受付/秘書") ? 'selected' : ''?>>受付/秘書</option>
							<option value="金融/不動産" <?php echo ($user['UserMeta']['occupation']== "金融/不動産") ? 'selected' : ''?>>金融/不動産</option>
							<option value="営業" <?php echo ($user['UserMeta']['occupation']== "営業") ? 'selected' : ''?>>営業</option>
							<option value="企画/マーケティング" <?php echo ($user['UserMeta']['occupation']== "企画/マーケティング") ? 'selected' : ''?>>企画/マーケティング</option>
							<option value="広報/広告宣伝" <?php echo ($user['UserMeta']['occupation']== "広報/広告宣伝") ? 'selected' : ''?>>広報/広告宣伝</option>
							<option value="販売/飲食" <?php echo ($user['UserMeta']['occupation']== "販売/飲食") ? 'selected' : ''?>>販売/飲食</option>
							<option value="旅行/宿泊/交通" <?php echo ($user['UserMeta']['occupation']== "旅行/宿泊/交通") ? 'selected' : ''?>>旅行/宿泊/交通</option>
							<option value="技術者/コンピューター" <?php echo ($user['UserMeta']['occupation']== "技術者/コンピューター") ? 'selected' : ''?>>技術者/コンピューター</option>
							<option value="クリエイティブ/メディア" <?php echo ($user['UserMeta']['occupation']== "クリエイティブ/メディア") ? 'selected' : ''?>>クリエイティブ/メディア</option>
							<option value="フリーランス" <?php echo ($user['UserMeta']['occupation']== "フリーランス") ? 'selected' : ''?>>フリーランス</option>
							<option value="法律関係/弁護士" <?php echo ($user['UserMeta']['occupation']== "法律関係/弁護士") ? 'selected' : ''?>>法律関係/弁護士</option>
							<option value="医療関係/医師" <?php echo ($user['UserMeta']['occupation']== "医療関係/医師") ? 'selected' : ''?>>医療関係/医師</option>
							<option value="専門職" <?php echo ($user['UserMeta']['occupation']== "専門職") ? 'selected' : ''?>>専門職</option>
							<option value="学生" <?php echo ($user['UserMeta']['occupation']== "学生") ? 'selected' : ''?>>学生</option>
							<option value="パート/アルバイト" <?php echo ($user['UserMeta']['occupation']== "パート/アルバイト") ? 'selected' : ''?>>パート/アルバイト</option>
							<option value="パート/アルバイトパート/アルバイト" <?php echo ($user['UserMeta']['occupation']== "パート/アルバイトパート/アルバイト") ? 'selected' : ''?>>パート/アルバイトパート/アルバイト</option>
							<option value="無職" <?php echo ($user['UserMeta']['occupation']== "無職") ? 'selected' : ''?>>無職</option>
							<option value="その他" <?php echo ($user['UserMeta']['occupation']== "その他") ? 'selected' : ''?>>その他</option>
						</select>
					</td>
				</tr>	
				<tr>
					<th>休日<span class="need">*</span></th>
					<td>
						<select name="dayoff" class="form-control" id="dayoff">
							<option value="">Select</option>
							<option value="土日" <?php echo ($user['UserMeta']['dayoff']== "土日") ? 'selected' : ''?>>土日</option>
							<option value="土日祝" <?php echo ($user['UserMeta']['dayoff']== "土日祝") ? 'selected' : ''?>>土日祝</option>
							<option value="シフト制" <?php echo ($user['UserMeta']['dayoff']== "シフト制") ? 'selected' : ''?>>シフト制</option>
							<option value="なし" <?php echo ($user['UserMeta']['dayoff']== "なし") ? 'selected' : ''?>>なし</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>学歴<span class="need">*</span></th>
					<td>
						<select name="education" class="form-control" id="education">
							<option value="">Select</option>
							<option value="高卒以上" <?php echo ($user['UserMeta']['education']== "高卒以上") ? 'selected' : ''?>>高卒以上</option>
							<option value="専門卒以上" <?php echo ($user['UserMeta']['education']== "専門卒以上") ? 'selected' : ''?>>専門卒以上</option>
							<option value="短大卒" <?php echo ($user['UserMeta']['education']== "短大卒") ? 'selected' : ''?>>短大卒</option>
							<option value="大学卒" <?php echo ($user['UserMeta']['education']== "大学卒") ? 'selected' : ''?>>大学卒</option>
							<option value="大学院卒" <?php echo ($user['UserMeta']['education']== "大学院卒") ? 'selected' : ''?>>大学院卒</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>年収<span class="need">*</span></th>
					<td>
						<select name="income" class="form-control" id="income">
							<option value="">Select</option>
							<option value="３００万未満" <?php echo ($user['UserMeta']['income']== "３００万未満") ? 'selected' : ''?>>３００万未満</option>
							<option value="３００万～５００万未満" <?php echo ($user['UserMeta']['income']== "３００万～５００万未満") ? 'selected' : ''?>>３００万～５００万未満</option>
							<option value="５００万円～７００万未満" <?php echo ($user['UserMeta']['income']== "５００万円～７００万未満") ? 'selected' : ''?>>５００万円～７００万未満</option>
							<option value="７００万～９００万未満" <?php echo ($user['UserMeta']['income']== "７００万～９００万未満") ? 'selected' : ''?>>７００万～９００万未満</option>
							<option value="９００万～１２００万" <?php echo ($user['UserMeta']['income']== "９００万～１２００万") ? 'selected' : ''?>>９００万～１２００万</option>
							<option value="１２００万～１５００万未満" <?php echo ($user['UserMeta']['income']== "１２００万～１５００万未満") ? 'selected' : ''?>>１２００万～１５００万未満</option>
							<option value="１５００万以上" <?php echo ($user['UserMeta']['income']== "１５００万以上") ? 'selected' : ''?>>１５００万以上</option>
						</select>
					</td>
				</tr>
				<!-- forth info -->
				<tr>
					<th class="redtxt">ライフスタイル</th>
					<td></td>
				</tr>
				<tr>
					<th>同居人<span class="need">*</span></th>
					<td>
						<select name="living_with" class="form-control" id="living_with">
							<option value="">Select</option>
							<option value="一人暮らし" <?php echo ($user['UserMeta']['living_with']== "一人暮らし") ? 'selected' : ''?>>一人暮らし</option>
							<option value="子供" <?php echo ($user['UserMeta']['living_with']== "子供") ? 'selected' : ''?>>子供</option>
							<option value="家族" <?php echo ($user['UserMeta']['living_with']== "家族") ? 'selected' : ''?>>家族</option>
							<option value="ルームメイト" <?php echo ($user['UserMeta']['living_with']== "ルームメイト") ? 'selected' : ''?>>ルームメイト</option>
							<option value="その他" <?php echo ($user['UserMeta']['living_with']== "その他") ? 'selected' : ''?>>その他</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>兄弟姉妹<span class="need">*</span></th>
					<td>
						<select name="relative" class="form-control" id="relative">
							<option value="長男" <?php echo ($user['UserMeta']['relative']== "長男") ? 'selected' : ''?>>長男</option>
							<option value="長女" <?php echo ($user['UserMeta']['relative']== "長女") ? 'selected' : ''?>>長女</option>
							<option value="二男" <?php echo ($user['UserMeta']['relative']== "二男") ? 'selected' : ''?>>二男</option>
							<option value="二女" <?php echo ($user['UserMeta']['relative']== "二女") ? 'selected' : ''?>>二女</option>
							<option value="三男" <?php echo ($user['UserMeta']['relative']== "三男") ? 'selected' : ''?>>三男</option>
							<option value="三女" <?php echo ($user['UserMeta']['relative']== "三女") ? 'selected' : ''?>>三女</option>
							<option value="一人っ子" <?php echo ($user['UserMeta']['relative']== "一人っ子") ? 'selected' : ''?>>一人っ子</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>タバコ<span class="need">*</span></th>
					<td>
						<select name="smoking" class="form-control" id="smoking">
							<option value="">Select</option>
							<option value="吸う" <?php echo ($user['UserMeta']['smoking']== "吸う") ? 'selected' : ''?>>吸う</option>
							<option value="時々吸う" <?php echo ($user['UserMeta']['smoking']== "時々吸う") ? 'selected' : ''?>>時々吸う</option>
							<option value="吸わない" <?php echo ($user['UserMeta']['smoking']== "吸わない") ? 'selected' : ''?>>吸わない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>お酒<span class="need">*</span></th>
					<td>
						<select name="drinking_alcohol" class="form-control" id="drinking">
							<option value="">Select</option>
							<option value"飲む" <?php echo ($user['UserMeta']['drinking_alcohol']== "飲む") ? 'selected' : ''?>>飲む</option>
							<option value="時々飲む" <?php echo ($user['UserMeta']['drinking_alcohol']== "時々飲む") ? 'selected' : ''?>>時々飲む</option>
							<option value="飲まない" <?php echo ($user['UserMeta']['drinking_alcohol']== "飲まない") ? 'selected' : ''?>>飲む</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>車<span class="need">*</span></th>
					<td>
						<input type="radio" value="yes" name="car" <?php echo ($user['UserMeta']['car']== "yes") ? 'checked' : ''?>> あり  &nbsp;&nbsp;&nbsp;
						<input type="radio" value="no" name="car" <?php echo ($user['UserMeta']['car']== "no") ? 'checked' : ''?>> なし
					</td>
				</tr>
				<tr>
					<th>ペット<span class="need">*</span></th>
					<td>
						<select name="pet" class="form-control" id="pet">
							<option value="">Select</option>
							<option value="犬" <?php echo ($user['UserMeta']['pet']== "犬") ? 'selected' : ''?>>犬</option>
							<option value="猫" <?php echo ($user['UserMeta']['pet']== "猫") ? 'selected' : ''?>>猫</option>
							<option value="魚" <?php echo ($user['UserMeta']['pet']== "魚") ? 'selected' : ''?>>魚</option>
							<option value="鳥" <?php echo ($user['UserMeta']['pet']== "鳥") ? 'selected' : ''?>>鳥</option>
							<option value="ウサギ" <?php echo ($user['UserMeta']['pet']== "ウサギ") ? 'selected' : ''?>>ウサギ</option>
							<option value="ハムスター" <?php echo ($user['UserMeta']['pet']== "ハムスター") ? 'selected' : ''?> >ハムスター</option>
							<option value="は虫類" <?php echo ($user['UserMeta']['pet']== "は虫類") ? 'selected' : ''?>>は虫類</option>
							<option value="飼いたいけど飼っていない" <?php echo ($user['UserMeta']['pet']== "飼いたいけど飼っていない") ? 'selected' : ''?>>飼いたいけど飼っていない</option>
							<option value="興味ないので飼っていない" <?php echo ($user['UserMeta']['pet']== "興味ないので飼っていない") ? 'selected' : ''?>>興味ないので飼っていない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>目的<span class="need">*</span></th>
					<td>
						<select name="purpose" class="form-control" id="purpose">
							<option value="">Select</option>
							<option value="趣味友探し" <?php echo ($user['UserMeta']['purpose']== "趣味友探し") ? 'selected' : ''?>>趣味友探し</option>
							<option value="合コン相手探し" <?php echo ($user['UserMeta']['purpose']== "合コン相手探し") ? 'selected' : ''?>>合コン相手探し</option>
							<option value="恋人探し" <?php echo ($user['UserMeta']['purpose']== "恋人探し") ? 'selected' : ''?>>恋人探し</option>
							<option value="結婚/婚活" <?php echo ($user['UserMeta']['purpose']== "結婚/婚活") ? 'selected' : ''?>>結婚/婚活</option>
						</select>
					</td>
				</tr>
				<tr>
					<th class="redtxt">趣味/趣向</th>
					<td></td>
				</tr>
				<tr>
					<th>趣味<span class="need">*</span></th>
					<td>
						<select name="hobby" class="form-control" id="hobby">
							<option value="">Select</option>
							<option value="スポーツ" <?php echo ($user['UserMeta']['hobby']== "スポーツ") ? 'selected' : ''?>>スポーツ</option>
							<option value="スポーツ観戦" <?php echo ($user['UserMeta']['hobby']== "スポーツ観戦") ? 'selected' : ''?>>スポーツ観戦</option>
							<option value="音楽鑑賞" <?php echo ($user['UserMeta']['hobby']== "音楽鑑賞") ? 'selected' : ''?>>音楽鑑賞</option>
							<option value="カラオケ・バンド" <?php echo ($user['UserMeta']['hobby']== "カラオケ・バンド") ? 'selected' : ''?>>カラオケ・バンド</option>
							<option value="料理" <?php echo ($user['UserMeta']['hobby']== "料理") ? 'selected' : ''?>>料理</option>
							<option value="グルメ" <?php echo ($user['UserMeta']['hobby']== "グルメ") ? 'selected' : ''?>>グルメ</option>
							<option value="お酒" <?php echo ($user['UserMeta']['hobby']== "お酒") ? 'selected' : ''?>>お酒</option>
							<option value="ショッピング" <?php echo ($user['UserMeta']['hobby']== "ショッピング") ? 'selected' : ''?>>ショッピング</option>
							<option value="ファッション" <?php echo ($user['UserMeta']['hobby']== "ファッション") ? 'selected' : ''?>>ファッション</option>
							<option value="アウトドア " <?php echo ($user['UserMeta']['hobby']== "アウトドア ") ? 'selected' : ''?>>アウトドア　</option>
							<option value="バイク　" <?php echo ($user['UserMeta']['hobby']== "バイク　") ? 'selected' : ''?>>車/バイク　</option>
							<option value="習いごと" <?php echo ($user['UserMeta']['hobby']== "習いごと") ? 'selected' : ''?>>習いごと</option>
							<option value="語学" <?php echo ($user['UserMeta']['hobby']== "語学") ? 'selected' : ''?>>語学</option>
							<option value="読書　" <?php echo ($user['UserMeta']['hobby']== "読書　") ? 'selected' : ''?>>読書　</option>
							<option value="マンガ　" <?php echo ($user['UserMeta']['hobby']== "マンガ　") ? 'selected' : ''?>>マンガ　</option>
							<option value="テレビ　" <?php echo ($user['UserMeta']['hobby']== "テレビ　") ? 'selected' : ''?>>テレビ　</option>
							<option value="ゲーム　" <?php echo ($user['UserMeta']['hobby']== "ゲーム　") ? 'selected' : ''?>>ゲーム　</option>
							<option value="インターネット　" <?php echo ($user['UserMeta']['hobby']== "インターネット　") ? 'selected' : ''?>>インターネット　</option>
							<option value="ギャンブル" <?php echo ($user['UserMeta']['hobby']== "ギャンブル") ? 'selected' : ''?>>ギャンブル</option>
							<option value="ペット" <?php echo ($user['UserMeta']['hobby']== "ペット") ? 'selected' : ''?>>ペット</option>
							<option value="健康" <?php echo ($user['UserMeta']['hobby']== "健康") ? 'selected' : ''?>>健康/フィッ</option>
							<option value="トネス" <?php echo ($user['UserMeta']['hobby']== "トネス") ? 'selected' : ''?>>トネス</option>
							<option value="投資" <?php echo ($user['UserMeta']['hobby']== "投資") ? 'selected' : ''?>>株式/投資</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>興味あること<span class="need">*</span></th>
					<td>
						<select name="interesting" class="form-control" id="interesting">
							<option value="">select</option>
							<option value="仕事" <?php echo ($user['UserMeta']['interesting']== "仕事") ? 'selected' : ''?>>仕事</option>
							<option value="独立/起業" <?php echo ($user['UserMeta']['interesting']== "独立/起業") ? 'selected' : ''?>>独立/起業</option>
							<option value="勉強" <?php echo ($user['UserMeta']['interesting']== "勉強") ? 'selected' : ''?>>勉強　</option>
							<option value="おしゃれ" <?php echo ($user['UserMeta']['interesting']== "おしゃれ") ? 'selected' : ''?>>おしゃれ　</option>
							<option value="芸能" <?php echo ($user['UserMeta']['interesting']== "芸能") ? 'selected' : ''?>>芸能　</option>
							<option value="政治経済" <?php echo ($user['UserMeta']['interesting']== "政治経済") ? 'selected' : ''?>>政治経済　</option>
							<option value="恋愛" <?php echo ($user['UserMeta']['interesting']== "恋愛") ? 'selected' : ''?>>恋愛</option>
						</select>
					</td>
				</tr>
				<!-- fith info -->
				<tr>
					<th class="redtxt">結婚/子供</th>
					<td></td>
				</tr>
				<tr>
					<th>結婚歴<span class="need">*</span></th>
					<td>
						<input type="radio" name="status" value="single" <?php echo ($user['UserMeta']['status']== "single") ? 'checked' : ''?>> 独身（未婚） &nbsp;&nbsp;&nbsp;
						<input type="radio" name="status" value="single_div" <?php echo ($user['UserMeta']['status']== "single_div") ? 'checked' : ''?>> 独身（バツ有り）
					</td>
				</tr>
				<tr>
					<th>結婚観<span class="need">*</span></th>
					<td>
						<select name="desire" class="form-control" id="desire">
							<option value="">select</option>
							<option value="すぐにでも結婚したい" <?php echo ($user['UserMeta']['desire']== "すぐにでも結婚したい") ? 'selected' : ''?> >すぐにでも結婚したい</option>
							<option value="2～3年以内に結婚したい" <?php echo ($user['UserMeta']['desire']== "2～3年以内に結婚したい") ? 'selected' : ''?>>2～3年以内に結婚したい</option>
							<option value="いい人がいれば結婚したい" <?php echo ($user['UserMeta']['desire']== "いい人がいれば結婚したい") ? 'selected' : ''?>>いい人がいれば結婚したい</option>
							<option value="今は結婚は考えていない" <?php echo ($user['UserMeta']['desire']== "今は結婚は考えていない") ? 'selected' : ''?>>今は結婚は考えていない</option>
							<option value="結婚はしたくない" <?php echo ($user['UserMeta']['desire']== "結婚はしたくない") ? 'selected' : ''?>>結婚はしたくない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>子供の有無<span class="need">*</span></th>
					<td>
						<select name="want_kids" class="form-control" id="want_kids">
							<option value="">select</option>
							<option value="なし" <?php echo ($user['UserMeta']['want_kids']== "なし") ? 'selected' : ''?>>なし</option>
							<option value="同居中　" <?php echo ($user['UserMeta']['want_kids']== "同居中　") ? 'selected' : ''?>>同居中　</option>
							<option value="別居中　" <?php echo ($user['UserMeta']['want_kids']== "別居中　") ? 'selected' : ''?>>別居中　</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>子供欲しい<span class="need">*</span></th>
					<td>
						<input type="radio" name="kids" value="yes" <?php echo ($user['UserMeta']['kids']== "yes") ? 'checked' : ''?>> はい &nbsp;&nbsp;&nbsp;
						<input type="radio" name="kids" value="no" <?php echo ($user['UserMeta']['kids']== "no") ? 'checked' : ''?>> いいえ
					</td>
				</tr>
				
				<tr>
					<td colspan="2" class="text-center">
						<button class="btn btn-success btn-solo" id="submit-upd-inf">
							<i class="fa fa-check-square"></i> Update
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>

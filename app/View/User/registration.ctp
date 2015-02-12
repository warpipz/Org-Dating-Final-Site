<?php echo $this->Html->css('user'); ?>
<div class="divisions" id="step2reg">
	<h3>Step 2 Registration</h3>	
	<form method="post" onsubmit="return false;" id="frmRegStep2" action="<?php echo FOLDER?>/user/registered">	
		<input type="hidden" name="login_id" value="<?php echo $post['login_id']?>" />
		<input type="hidden" name="login_pw" value="<?php echo $post['login_pw']?>" />	
		<table class="table">			
			<tbody>
				<!-- First Info -->
				<tr>
					<th><label class="redtxt">基本情報</label></th>
					<td></td>
				</tr>
				<tr>
					<th>お名前（ニックネーム）/Name <span class="need">*</span></th>
					<td><input type="text" name="name" class="form-control"/></td>
				</tr>
				<tr>
					<th>フリガナ/ Phonetic <span class="need">*</span></th>
					<td><input type="text" name="phonetic" class="form-control"/></td>
				</tr>
				<tr>
					<th>性別/Gender <span class="need">*</span></th>
					<td>
						<label for="GF">
							<input type="radio" name="gender" id="GF" checked value="2" /> 女性/Women
						</label> &nbsp;&nbsp;&nbsp;
						<label for="BF">
							<input type="radio" name="gender" id="BF" value="1" /> 男性/Men
						</label>
					</td>
				</tr>
				<tr>
					<th>生年月日/Date of Birth<span class="need">*</span></th>
					<td>
						<select name="year" class="form-control birth_control" id="year">
							<option value="">Year</option>
							<?php for($year=idate('Y');$year>=1896;$year--){ ?>
							<option value="<?php echo $year ?>"><?php echo $year; ?></option>
							<?php } ?>
						</select>
						/
						<select name="month" class="form-control birth_control" id="month">
							<option value="">Month</option>
							<?php for($month=1;$month<=12;$month++){ ?>
							<option value="<?php echo $month; ?>"><?php echo $month; ?></option>
							<?php } ?>
						</select>
						/
						<select name="day" class="form-control birth_control" id="day">
							<option value="">Date</option>
							<?php for($date=1;$date<=31;$date++){ ?>
							<option value="<?php echo $date ?>"><?php echo $date ?></option>
							<?php } ?>
						</select>

					</td>
				</tr>
				<tr>
					<th>血液型/Bloodtype<span class="need">*</span></th>
					<td>
						<input type="radio" name="bloodtype" id="bloodtype" value="A" checked> A型 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="bloodtype" id="bloodtype" value="B"> B型  &nbsp;&nbsp;&nbsp;
						<input type="radio" name="bloodtype" id="bloodtype" value="O"> 0型 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="bloodtype" id="bloodtype" value="AB"> AB型   
					</td>
				</tr>
				<tr>
					<th>居住地/Present<span class="need">*</span></th>
					<td>
						<select name="present_prefecture" id="prefecture_present" class="form-control">
							<option value="">地域</option>
							<option value="北海道">北海道</option>
							<option value="青森">青森</option>
							<option value="岩手">岩手</option>
							<option value="宮城">宮城</option>
							<option value="秋田">秋田</option>
							<option value="山形">山形</option>
							<option value="福島">福島</option>
							<option value="茨城">茨城</option>
							<option value="栃木">栃木</option>
							<option value="群馬">群馬</option>
							<option value="埼玉">埼玉</option>
							<option value="千葉">千葉</option>
							<option value="東京">東京</option>
							<option value="神奈川">神奈川</option>
							<option value="新潟">新潟</option>
							<option value="富山">富山</option>
							<option value="石川">石川</option>
							<option value="福井">福井</option>
							<option value="山梨">山梨</option>
							<option value="長野">長野</option>
							<option value="岐阜">岐阜</option>
							<option value="静岡">静岡</option>
							<option value="愛知">愛知</option>
							<option value="三重">三重</option>
							<option value="滋賀">滋賀</option>
							<option value="京都府">京都府</option>
							<option value="大阪府">大阪府</option>
							<option value="兵庫">兵庫</option>
							<option value="奈良">奈良</option>
							<option value="和歌山">和歌山</option>
							<option value="鳥取">鳥取</option>
							<option value="島根">島根</option>
							<option value="岡山">岡山</option>
							<option value="広島">広島</option>
							<option value="山口">山口</option>
							<option value="徳島">徳島</option>
							<option value="香川">香川</option>
							<option value="愛媛">愛媛</option>
							<option value="高知">高知</option>
							<option value="福岡">福岡</option>
							<option value="佐賀">佐賀</option>
							<option value="長崎">長崎</option>
							<option value="熊本">熊本</option>
							<option value="大分">大分</option>
							<option value="宮崎">宮崎</option>
							<option value="鹿児島">鹿児島</option>
							<option value="沖縄">沖縄</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>出身地/Born<span class="need">*</span></th>
					<td>
						<select name="born_prefecture" id="prefecture_born" class="form-control">
							<option value="">地域</option>
							<option value="北海道">北海道</option>
							<option value="青森">青森</option>
							<option value="岩手">岩手</option>
							<option value="宮城">宮城</option>
							<option value="秋田">秋田</option>
							<option value="山形">山形</option>
							<option value="福島">福島</option>
							<option value="茨城">茨城</option>
							<option value="栃木">栃木</option>
							<option value="群馬">群馬</option>
							<option value="埼玉">埼玉</option>
							<option value="千葉">千葉</option>
							<option value="東京">東京</option>
							<option value="神奈川">神奈川</option>
							<option value="新潟">新潟</option>
							<option value="富山">富山</option>
							<option value="石川">石川</option>
							<option value="福井">福井</option>
							<option value="山梨">山梨</option>
							<option value="長野">長野</option>
							<option value="岐阜">岐阜</option>
							<option value="静岡">静岡</option>
							<option value="愛知">愛知</option>
							<option value="三重">三重</option>
							<option value="滋賀">滋賀</option>
							<option value="京都府">京都府</option>
							<option value="大阪府">大阪府</option>
							<option value="兵庫">兵庫</option>
							<option value="奈良">奈良</option>
							<option value="和歌山">和歌山</option>
							<option value="鳥取">鳥取</option>
							<option value="島根">島根</option>
							<option value="岡山">岡山</option>
							<option value="広島">広島</option>
							<option value="山口">山口</option>
							<option value="徳島">徳島</option>
							<option value="香川">香川</option>
							<option value="愛媛">愛媛</option>
							<option value="高知">高知</option>
							<option value="福岡">福岡</option>
							<option value="佐賀">佐賀</option>
							<option value="長崎">長崎</option>
							<option value="熊本">熊本</option>
							<option value="大分">大分</option>
							<option value="宮崎">宮崎</option>
							<option value="鹿児島">鹿児島</option>
							<option value="沖縄">沖縄</option>
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
							<option value="スリム/細め">スリム/細め</option>
							<option value="普通">普通</option>
							<option value="グラマー">グラマー</option>
							<option value="筋肉質">筋肉質</option>
							<option value="ややぽっちゃり">ややぽっちゃり</option>
							<option value="ぽっちゃり">ぽっちゃり</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>身長<span class="need">*</span></th>
					<td><input type="text" name="cm" class="form-control half" placeholder="ご入力してください。"/><label class="middle"> &nbsp;cm</label></td>
				</tr>
				<tr>
					<th>体重<span class="need">*</span></th>
					<td></label><input type="text" name="kg" class="form-control half" placeholder="ご入力してください。"/><label class="middle"> &nbsp;kg</label></td>
				</tr>
				<tr>
					<th>髪型<span class="need">*</span></th>
					<td>
						<select name="hairstyle" class="form-control" id="hairstyle">
							<option value="">Select</option>
							<option value="ベリーショート">ベリーショート</option>
							<option value="ショート">ショート</option>
							<option value="ミディアム">ミディアム</option>
							<option value="セミロング">セミロング</option>
							<option value="ロング">ロング</option>
							<option value="坊主">坊主</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>メガネ<span class="need">*</span></th>
					<td>
						<select name="glass" class="form-control" id="glass">
							<option value="">Select</option>
							<option value="かける">かける</option>
							<option value="かけない">かけない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>タイプ<span class="need">*</span></th>
					<td>
						<select name="type_person" class="form-control" id="type_person">
							<option value="">Select</option>
							<option value="さわやか系">さわやか系</option>
							<option value="オシャレ系">オシャレ系</option>
							<option value="カジュアル系">カジュアル系</option>
							<option value="お笑い系">お笑い系</option>
							<option value="スポーツ系">スポーツ系</option>
							<option value="癒し系">癒し系</option>
							<option value="ガテン系">ガテン系</option>
							<option value="お金持ち系">お金持ち系</option>
							<option value="ホスト系">ホスト系</option>
							<option value="ダンディ系">ダンディ系</option>
							<option value="マッチョ系">マッチョ系</option>
							<option value="ジャニーズ系">ジャニーズ系</option>
							<option value="スーツ系">スーツ系</option>
							<option value="アキバ系">アキバ系</option>
							<option value="モード系">モード系</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>性格<span class="need">*</span></th>
					<td>
						<select name="personality" class="form-control" id="personality">
							<option value="優しい">優しい</option>
							<option value="素直">素直</option>
							<option value="誠実">誠実</option>
							<option value="明るい">明るい</option>
							<option value="社交的">社交的</option>
							<option value="人見知り">人見知り</option>
							<option value="知的">知的</option>
							<option value="ドライ">ドライ</option>
							<option value="ロマンチスト">ロマンチスト</option>
							<option value="几帳面">几帳面</option>
							<option value="おおらか">おおらか</option>
							<option value="寂しがり">寂しがり</option>
							<option value="負けず嫌い">負けず嫌い</option>
							<option value="家庭的">家庭的</option>
							<option value="優柔不断">優柔不断</option>
							<option value="決断力あり">決断力あり</option>
							<option value="天然">天然</option>
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
							<option value="公務員">公務員</option>
							<option value="会社経営/自営業">会社経営/自営業</option>
							<option value="役員/管理職">役員/管理職</option>
							<option value="事務職/OL">事務職/OL</option>
							<option value="受付/秘書">受付/秘書</option>
							<option value="金融/不動産">金融/不動産</option>
							<option value="営業">営業</option>
							<option value="企画/マーケティング">企画/マーケティング</option>
							<option value="広報/広告宣伝">広報/広告宣伝</option>
							<option value="販売/飲食">販売/飲食</option>
							<option value="旅行/宿泊/交通">旅行/宿泊/交通</option>
							<option value="技術者/コンピューター">技術者/コンピューター</option>
							<option value="クリエイティブ/メディア">クリエイティブ/メディア</option>
							<option value="フリーランス">フリーランス</option>
							<option value="法律関係/弁護士">法律関係/弁護士</option>
							<option value="医療関係/医師">医療関係/医師</option>
							<option value="専門職">専門職</option>
							<option value="学生">学生</option>
							<option value="パート/アルバイト">パート/アルバイト</option>
							<option value="パート/アルバイトパート/アルバイト">パート/アルバイトパート/アルバイト</option>
							<option value="無職">無職</option>
							<option value="その他">その他</option>
						</select>
					</td>
				</tr>	
				<tr>
					<th>休日<span class="need">*</span></th>
					<td>
						<select name="dayoff" class="form-control" id="dayoff">
							<option value="">Select</option>
							<option value="土日">土日</option>
							<option value="土日祝">土日祝</option>
							<option value="シフト制">シフト制</option>
							<option value="なし">なし</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>学歴<span class="need">*</span></th>
					<td>
						<select name="education" class="form-control" id="education">
							<option value="">Select</option>
							<option value="高卒以上">高卒以上</option>
							<option value="専門卒以上">専門卒以上</option>
							<option value="短大卒">短大卒</option>
							<option value="大学卒">大学卒</option>
							<option value="大学院卒">大学院卒</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>年収<span class="need">*</span></th>
					<td>
						<select name="income" class="form-control" id="income">
							<option value="">Select</option>
							<option value="３００万未満">３００万未満</option>
							<option value="３００万～５００万未満">３００万～５００万未満</option>
							<option value="５００万円～７００万未満">５００万円～７００万未満</option>
							<option value="７００万～９００万未満">７００万～９００万未満</option>
							<option value="９００万～１２００万">９００万～１２００万</option>
							<option value="１２００万～１５００万未満">１２００万～１５００万未満</option>
							<option value="１５００万以上">１５００万以上</option>
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
							<option value="一人暮らし">一人暮らし</option>
							<option value="子供">子供</option>
							<option value="家族">家族</option>
							<option value="ルームメイト">ルームメイト</option>
							<option value="その他">その他</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>兄弟姉妹<span class="need">*</span></th>
					<td>
						<select name="relative" class="form-control" id="relative">
							<option value="長男">長男</option>
							<option value="長女">長女</option>
							<option value="二男">二男</option>
							<option value="二女">二女</option>
							<option value="三男">三男</option>
							<option value="三女">三女</option>
							<option value="一人っ子">一人っ子</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>タバコ<span class="need">*</span></th>
					<td>
						<select name="smoking" class="form-control" id="smoking">
							<option value="">Select</option>
							<option value="吸う">吸う</option>
							<option value="時々吸う">時々吸う</option>
							<option value="吸わない">吸わない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>お酒<span class="need">*</span></th>
					<td>
						<select name="drinking_alcohol" class="form-control" id="drinking">
							<option value="">Select</option>
							<option value"飲む">飲む</option>
							<option value="時々飲む">時々飲む</option>
							<option value="飲まない">飲まない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>車<span class="need">*</span></th>
					<td>
						<input type="radio" value="yes" name="car" checked> あり &nbsp;&nbsp;&nbsp;
						<input type="radio" value="no" name="car"> なし
					</td>
				</tr>
				<tr>
					<th>ペット<span class="need">*</span></th>
					<td>
						<select name="pet" class="form-control" id="pet">
							<option value="">Select</option>
							<option value="犬">犬</option>
							<option value="猫">猫</option>
							<option value="魚">魚</option>
							<option value="鳥">鳥</option>
							<option value="ウサギ">ウサギ</option>
							<option value="ハムスター">ハムスター</option>
							<option value="は虫類">は虫類</option>
							<option value="飼いたいけど飼っていない">飼いたいけど飼っていない</option>
							<option value="興味ないので飼っていない">興味ないので飼っていない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>目的<span class="need">*</span></th>
					<td>
						<select name="purpose" class="form-control" id="purpose">
							<option value="">Select</option>
							<option value="趣味友探し">趣味友探し</option>
							<option value="合コン相手探し">合コン相手探し</option>
							<option value="恋人探し">恋人探し</option>
							<option value="結婚/婚活">結婚/婚活</option>
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
							<option value="スポーツ">スポーツ</option>
							<option value="スポーツ観戦">スポーツ観戦</option>
							<option value="音楽鑑賞">音楽鑑賞</option>
							<option value="カラオケ・バンド">カラオケ・バンド</option>
							<option value="料理">料理</option>
							<option value="グルメ">グルメ</option>
							<option value="お酒">お酒</option>
							<option value="ショッピング">ショッピング</option>
							<option value="ファッション">ファッション</option>
							<option value="アウトドア　">アウトドア　</option>
							<option value="バイク　">車/バイク　</option>
							<option value="習いごと">習いごと</option>
							<option value="語学">語学</option>
							<option value="読書　">読書　</option>
							<option value="マンガ　">マンガ　</option>
							<option value="テレビ　">テレビ　</option>
							<option value="ゲーム　">ゲーム　</option>
							<option value="インターネット　">インターネット　</option>
							<option value="ギャンブル">ギャンブル</option>
							<option value="ペット">ペット</option>
							<option value="健康">健康/フィッ</option>
							<option value="トネス">トネス</option>
							<option value="投資">株式/投資</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>興味あること<span class="need">*</span></th>
					<td>
						<select name="interesting" class="form-control" id="interesting">
							<option value="">select</option>
							<option value="仕事">仕事</option>
							<option value="独立/起業">独立/起業</option>
							<option value="勉強">勉強　</option>
							<option value="おしゃれ">おしゃれ　</option>
							<option value="芸能">芸能　</option>
							<option value="政治経済">政治経済　</option>
							<option value="恋愛">恋愛</option>
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
						<input type="radio" name="status" value="single" checked> 独身（未婚） &nbsp;&nbsp;&nbsp;
						<input type="radio" name="status" value="single_div"> 独身（バツ有り）
					</td>
				</tr>
				<tr>
					<th>結婚観<span class="need">*</span></th>
					<td>
						<select name="desire" class="form-control" id="desire">
							<option value="">select</option>
							<option value="すぐにでも結婚したい">すぐにでも結婚したい</option>
							<option value="2～3年以内に結婚したい">2～3年以内に結婚したい</option>
							<option value="いい人がいれば結婚したい">いい人がいれば結婚したい</option>
							<option value="今は結婚は考えていない">今は結婚は考えていない</option>
							<option value="結婚はしたくない">結婚はしたくない</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>子供の有無<span class="need">*</span></th>
					<td>
						<select name="want_kids" class="form-control" id="want_kids">
							<option value="">select</option>
							<option value="なし">なし</option>
							<option value="同居中　">同居中　</option>
							<option value="別居中　">別居中　</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>子供欲しい<span class="need">*</span></th>
					<td>
						<input type="radio" name="kids" value="yes" checked> はい &nbsp;&nbsp;&nbsp;
						<input type="radio" name="kids" value="no"> いいえ
					</td>
				</tr>
				<tr>
					<td colspan="2" class="text-center">
						<button class="btn btn-primary btn-solo" onclick="window.history.back();">
							<i class="fa fa-arrow-circle-left"></i> Back
						</button>
						<button class="btn btn-success btn-solo" id="submit-reg2">
							<i class="fa fa-check-square"></i> Submit
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>

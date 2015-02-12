<h1>User Details</h1>
<table class="table table-striped">
 	<tr>
		<th>Id </th>
		<td><?php echo $notif['User']['id'] ?> </td>
	</tr>
	<tr>
		<th>User Name</th>
		<td><?php echo $notif['User']['login_id'] ?> </td>
	<tr/>
	<tr>
		<th>Status</th>
		<td><?php echo ($notif['User']['status']==0)? 'active':'inactive'; ?> </td>
	<tr>
		<th>お名前（ニックネーム）/Full Name</th>
		<td><?php echo $notif['UserMeta']['name']; ?></td>
	</tr>
	<tr>
		<th>フリガナ/Phonetic</th>
		<td><?php echo $notif['UserMeta']['phonetic']; ?></td>
	</tr>
	<tr>
		<th>性別/Gender</th>
		<td><?php echo $notif['UserMeta']['genderName']; ?></td>
	</tr>
	<tr>
		<th>生年月日/Birthday</th>
		<td><?php echo $notif['UserMeta']['year']."-".$notif['UserMeta']['month']."-".$notif['UserMeta']['day']; ?></td>
	</tr>
	<tr>
		<th>血液型/Bloodtype</th>
		<td><?php echo $notif['UserMeta']['bloodtype']; ?></td>
	</tr>
	<tr>
		<th>居住地/Present</th>
		<td><?php echo $notif['UserMeta']['present_prefecture']; ?></td>
	</tr>
	<tr>
		<th>出身地/Born</th>
		<td><?php echo $notif['UserMeta']['born_prefecture']; ?></td>
	</tr>
	<tr>
		<th>体型/Body</th>
		<td><?php echo $notif['UserMeta']['body']; ?></td>
	</tr>
	<tr>
		<th>身長/Height</th>
		<td><?php echo $notif['UserMeta']['cm']; ?></td>
	</tr>
	<tr>
		<th>体重/Weight</th>
		<td><?php echo $notif['UserMeta']['kg']; ?></td>
	</tr>
	<tr>
		<th>髪型/Hairstyle</th>
		<td><?php echo $notif['UserMeta']['hairstyle']; ?></td>
	</tr>
	<tr>
		<th>メガネ</th>
		<td><?php echo $notif['UserMeta']['glass']; ?></td>
	</tr>
	<tr>
		<th>タイプ/Type of Person</th>
		<td><?php echo $notif['UserMeta']['type_person']; ?></td>
	</tr>
	<tr>
		<th>性格/Personality</th>
		<td><?php echo $notif['UserMeta']['personality']; ?></td>
	</tr>
	<tr>
		<th>職業/Occupation</th>
		<td><?php echo $notif['UserMeta']['occupation']; ?></td>
	</tr>
	<tr>
		<th>休日/Dayoff</th>
		<td><?php echo $notif['UserMeta']['dayoff']; ?></td>
	</tr>
	<tr>
		<th>学歴/Education</th>
		<td><?php echo $notif['UserMeta']['education']; ?></td>
	</tr>
	<tr>
		<th>年収/Income</th>
		<td><?php echo $notif['UserMeta']['income']; ?></td>
	</tr>
	<tr>
		<th>同居人/Living With</th>
		<td><?php echo $notif['UserMeta']['living_with']; ?></td>
	</tr>
	<tr>
		<th>兄弟姉妹/Relatives</th>
		<td><?php echo $notif['UserMeta']['relative']; ?></td>
	</tr>
	<tr>
		<th>タバコ/Smoking</th>
		<td><?php echo $notif['UserMeta']['smoking']; ?></td>
	</tr>
	<tr>
		<th>お酒/Drinking Alcohol</th>
		<td><?php echo $notif['UserMeta']['drinking_alcohol']; ?></td>
	</tr>
	<tr>
		<th>車/Car</th>
		<td><?php echo $notif['UserMeta']['car']; ?></td>
	</tr>
	<tr>
		<th>ペット/Pet</th>
		<td><?php echo $notif['UserMeta']['pet']; ?></td>
	</tr>
	<tr>
		<th>目的/Purpose</th>
		<td><?php echo $notif['UserMeta']['purpose']; ?></td>
	</tr>
	<tr>
		<th>趣味/Hobby</th>
		<td><?php echo $notif['UserMeta']['hobby']; ?></td>
	</tr>
	<tr>
		<th>興味あること/Interesting</th>
		<td><?php echo $notif['UserMeta']['interesting']; ?></td>
	</tr>
	<tr>
		<th>結婚歴/Status</th>
		<td><?php echo $notif['UserMeta']['status']; ?></td>
	</tr>
	<tr>
		<th>結婚観/Desire</th>
		<td><?php echo $notif['UserMeta']['desire']; ?></td>
	</tr>
	<tr>
		<th>子供の有無/Kids</th>
		<td><?php echo $notif['UserMeta']['kids']; ?></td>
	</tr>
</table>	
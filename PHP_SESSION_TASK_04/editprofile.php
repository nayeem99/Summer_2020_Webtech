<fieldset>
    <legend><b>Edit profile</b></legend>
	<form action="editcheck.php" method="post">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text"
					value=<?php echo '"'.$_COOKIE['email'].'"'?>>
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"
					value=<?php echo '"'.$_COOKIE['name'].'"'?></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="day" 
						value=<?php echo '"'.$_COOKIE['day'].'"'?> />/
						<input type="text" size="2" name="month"
						value=<?php echo '"'.$_COOKIE['month'].'"'?>/>/
						<input type="text" size="4" name="year"
						value=<?php echo '"'.$_COOKIE['year'].'"'?>/>
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="submit" name="submit">
		<input type="reset">
	</form>
</fieldset>
<?php
include 'header.php';

$not_found="";


?>


<footer id="footer">
	<div class="inner" id="goinfo">

		<h3>Search Page</h3>
		<span style="color:red;text-align:center;"><?php echo $not_found; ?></span>
			<form action="index-server.php" method="post">

			<div class="field half first">
			
			<fieldset>
			<br>
			<label>Search Bar</label>
			<input name="keyword" id="keyword" type="text" placeholder="Enter the Name/Roll/Email you want to search...">
			<label>(Use the keyword "All"/Blank Space to get all the records)</label>
			<br>
			<br>
			
			<div style="display:inline-block; width:40%">
				<legend>Person Type</legend>
				
				<select name="person" onchange="java_script_:show(this.options[this.selectedIndex].value)">
					<option value="student">Student</option>
					<option value="teacher">Teacher</option>
				</select>
				
				</label>
			</div>
			<div style="display: inline-block; width:40%">
				<legend>Keyword Type</legend>
				<select name="with">
					<option value="name">Name</option>
					<option value="email">Email</option>
					<option id="hiddenOp" value="roll">Roll</option>
				</select>
			</div>
			<br>
			<br>
			<div style="display:inline-block; width:40%">
				<legend>Department</legend>
				<select name="department">
					<option value="CSE">CSE</option>
					<option value="EEE">EEE</option>
					<option value="ECE">ECE</option>
					<option value="ETE">ETE</option>
				</select>
			</div>

			<div id="hiddenDiv" style="display:inline-block; width:40%">
				<legend>Series</legend>
				<select name="series">
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
				</select>
			</div>
			<br>
			<br>
			<ul class="actions">
				<li><input type="submit" name="search" value="Search" class="button alt"></li>
			</ul>
		</form>
		</fieldset>
		</div>

			<div class="copyright">
				<p>Created By Khalid Syfullah</p>
			</div>

	</div>
</footer>

<script> 	
	function show(select_item) {
	    if (select_item == "student") {
			hiddenOp.style.visibility='visible';
		    hiddenDiv.style.visibility='visible';
			hiddenDiv.style.display='inline-block';
			hiddenDiv.style.width='40%';
			Form.fileURL.focus();
		} 
		else{
			hiddenDiv.style.visibility='hidden';
			hiddenDiv.style.display='none';
			hiddenOp.style.visibility='hidden';
		}
	}	
</script>  

<?php
include 'footer.php';
?>			
<center>
	<h1>Questions</h1>
	<hr><br><hr>

	<table height="100%">
		<?php
		foreach($quest as $ques)
		{
		?>
		<tr >
			<td ><b><?php echo $ques->name; ?> : <?php echo $ques->content; ?></b></td>
			<!-- <td> <?php echo $ques->answers; ?></td> -->
		</tr>
		<tr>
			<td></td>
		</tr>

		<?php
		}
		?>
	</table>
<a href="<?php echo base_url('mcqs/logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</center>
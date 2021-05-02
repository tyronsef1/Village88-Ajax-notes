<?php foreach ($notes as $note) { ?>
	<div class='note'>	
		<h2><?= $note['title']; ?></h2>
		<form class='update_description' action='notes/update_description/<?= $note['id']; ?>' method='post'>
			<textarea name='description' placeholder='Enter description here'><?= $note['description']; ?></textarea>
			<input type='submit' value='Update'>
		</form>
		<form class='delete_note' action='notes/delete_note/<?= $note['id']; ?>' method='post'>
			<input type='submit' value='Delete'>
		</form>
	</div>
<?php }?>
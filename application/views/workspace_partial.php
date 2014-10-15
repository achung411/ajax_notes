<?php foreach ($postings as $posting)
	{	?>
		<form action="/notes/edit/<?=$posting['id']?>" method="post" class="note edited_note">
			<header>
				<h4><?=$posting["title"]?></h4>
				<a href="/notes/delete/<?=$posting['id']?>" class="delete">
					<img src="/assets/img/ex.png" alt="x">
				</a>
			</header>
			<textarea name="note_text"><?=$posting['description']?></textarea>
		</form>
<?php	};	?>
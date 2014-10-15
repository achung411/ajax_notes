<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Notes</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.min.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/notes.css" />
	<!-- <link rel="stylesheet/less" type="text/css" href="/assets/css/notes.less" /> -->
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script> -->
	<script src="/assets/js/posts.js" type="text/javascript"></script>
</head>
<body>
	<h1>Sticky Notes</h1>

	<div id="workspace"></div>

	<h2>New note</h2>
	<form action="/notes/create" method="post" class="new_note_form">
		<header>
			<input type="text" name="new_title" placeholder="Title">
		</header>
		<textarea name="note_text" placeholder="Text"></textarea>
		<button input="submit">Add Note</button>
	</form>

</body>
</html>
$(document).ready(function(){
	$.get('/notes/alt_view', function (data) {
		$('#workspace').html(data);
		},
		'html');

	$('body').on('submit', '.new_note_form', function(){
		$.post(
			$(this).attr('action'),
			$(this).serialize(),
			function (data){
				$('#workspace').html(data);
			}, 
			'html');
		return false;
	});

	$('body').on('change', '.edited_note', function(){
		$.post(
			$(this).attr('action'),
			$(this).serialize(),
			function (data){
				$('#workspace').html(data);
			},
			'html');
		return false;
	});
	
	$('body').on('click', '.delete', function(){
		$.post(
			$(this).attr('href'),
			function (data){
				$('#workspace').html(data);
			},
			'html');
		return false;
	});

	$('#workspace').on('mouseover', '.edited_note', function() {
		$(this).draggable({containment: 'parent'}, {cursor: 'crosshair'}, {opacity: 0.7}, {stack: '.edited_note'});
	});
});
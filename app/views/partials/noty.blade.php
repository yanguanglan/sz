@if (Session::has('type'))
<script>
$(function() {
	noty({
		"text":"{{implode(',', $errors->all())}}",
		"layout":"topCenter",
		"type":"{{ Session::get('type') }}",
		"animateOpen":{
			"opacity":"show"
		}
	});
});
</script>
@endif
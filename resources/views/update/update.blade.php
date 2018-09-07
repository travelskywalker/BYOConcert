<form class="col s12 l8 offset-l2" id="nomination_form" method="POST" action="{{ route('send-update') }}"> @csrf
<input type="file" name="jsondata" id="upload_data">
<input type="submit" value="Upload data">
</form>
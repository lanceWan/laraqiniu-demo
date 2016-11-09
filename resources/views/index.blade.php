<!DOCTYPE html>
<html>
<head>
	<title>上传图片</title>
</head>
<body>
	<form method="post" action="{{url('upload')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="file" name="file">
		<button type="submit">上传图片</button>
	</form>
</body>
</html>
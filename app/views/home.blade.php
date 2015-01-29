<html>
	<head>
		<title>SJCS Batch Reunion Photo Upload</title>
		{{ HTML::style('bower_components/dropzone/dist/min/dropzone.min.css') }}	
		{{ HTML::script('bower_components/dropzone/dist/min/dropzone.min.js') }}
	</head>
	<body>
		<h1>Photo Upload</h1>
		{{ Form::open(array('url' => '/upload', 'files' => true)) }}
   		<div class="dz-message">
			<h4>Drag Photos to Upload</h4>
			<span>Or click to browse</span>
		</div>
		{{ Form::close() }}
	</body>

</html>
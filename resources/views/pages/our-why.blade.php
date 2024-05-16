@extends('components.layout')

@section('content')

<style>
.container {
	text-align: center; 
	margin-top: 30px; 
	margin-bottom: 50px;
}
.embed-container { 
	position: relative; 
	padding-bottom: 56.25%; 
	height: 0; overflow: hidden; 
	max-width: 100%; 
} 
.embed-container iframe, 
.embed-container object, 
.embed-container embed { 
	position: absolute; 
	top: 0; left: 0; 
	width: 100%; 
	height: 100%; 
}
p { 
	font: 18px sans-serif; 
	padding-top: 10px; 
	line-height: 1.5; 
	margin-bottom: 40px;
}
.responsive {
	width: 100%;
	max-width: 600px;
	height: auto;
}
</style>

<div class="container">

	<img src="https://www.b2bcfo.com/wp-content/uploads/2023/08/Our-Why-Title.png" alt="Watch Our Why" class="responsive" />
  
	<div class='embed-container'>
		<iframe src='https://player.vimeo.com/video/854783451?h=b8c1233d9e&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	</div>

	<p>In everything we do, we believe in improving the lives of business owners. We believe each owner is unique and important to our society. We improve their lives by understanding their goals and removing barriers that get in their way. We have proprietary tools and processes.</p>

</div>

@endsection
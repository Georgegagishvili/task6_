<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
	<title></title>
</head>
<body style = "background-color:#ececec">
	<div class="container card" style = "margin-top:5%">
		<form action = "{{ route('adminupdate')}}" method = 'POST'>
			@csrf
			<input type="hidden" name="id" value = "{{ $book->id }}">
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Title</label>
		    <input type="text" class="form-control"name="title" value = {{ $book->title}}>	    
		  </div>
		  <div class="form-group">
		    <label style = 'margin-top:1%'>Author</label>
		    <input type="text" class="form-control"name="author" value = {{ $book->author }}>	    
		  </div>
		  <div class="form-group">
			 <label for="exampleFormControlTextarea1"></label>
		    <input type="text" class="form-control"name="genre_id" value = {{ $book->genre_id }}>
		  </div>
		  <div class="form-group">
			 <label for="exampleFormControlTextarea1"></label>
		    <input type="text" class="form-control"name="image" value = {{ $book->image }}>
		  </div>
		  <div class="form-group">
			 <label for="exampleFormControlTextarea1">Text</label>
			 <textarea class="form-control" rows="3" name = 'text'> {{ $book->text }} </textarea>
		  </div>

		  <button style ='margin-bottom: 1%' type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
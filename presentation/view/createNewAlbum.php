<!-- 
    creatNewAlbum.php
    This file is an HTML page displaying a form for the user to input information and create a new album for thier library.
 -->

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<!-- <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" -->
        <!-- integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<!-- </head> --> 

<body>

<form action="/presentation/handlers/createAlbumHandler.php" enctype="multipart/form-data" method="post">

  <div class="card" style="width: 18rem;">
    <img src="/presentation/media/noimage.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Example Album Tile</h5>
      <p class="card-text">Some quick example text to build on the album and make up the bulk of the album's content.</p>
    </div>
  </div>


  <div class="form-group">
    <label for="albumArt">Album Art</label>
    <input type="file" class="form-control-file" id="albumArt" accept="image/*" name="img_file">
  </div>

  <div class="form-group">
    <label for="album">Album</label>
    <input type="text" class="form-control" id="album" placeholder="Album" name="albumName">
  </div>
  <div class="form-group">
    <label for="artist">Artist </label>
    <input type="text" class="form-control" id="artist" placeholder="Artist" name="artist">
  </div>
  <div class="form-group">
    <label for="releaseDate">Release Date</label>
    <input type="text" class="form-control" id="releaseDate" placeholder="Release Date" name="postDate">
  </div>

  <div class="form-group">
    <label for="rating">Rating:</label>
    <select class="custom-select custom-select-sm" name="rating">
      <option selected>Give this album a rating:</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
      <option value="4">Four</option>
      <option value="5">Five</option>
    </select>
  </div>
  <div class="form-group">
    <label for="albumNotes">Album notes</label>
      <textarea class="form-control" id="albumNotes" name="albumNotes" rows="4" cols="50" name="description">album ipsum album ipsum album ipsum album ipsum album ipsum 
    </textarea>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>

  <!-- <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select> -->
  <!-- </div> -->  
  
  
</form>
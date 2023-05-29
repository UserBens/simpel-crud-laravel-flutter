<!DOCTYPE html>
<html>
<body>

<h2>Create Product</h2>

<form action="/products" method="post">
    @csrf
  <label for="name">Product Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="description">Description Product:</label><br>
  <input type="text" id="description" name="description"><br>
  
  <label for="price">Price Product:</label><br>
  <input type="text" id="price" name="price"><br>

  <label>Image Url:</label><br>
  <p>input by link</p>
  <input type="text" name="image_url"><br>
  {{-- <p>input by file local</p> --}}
  {{-- <input type="file" id="image_url" name="image_url"><br> --}}

  <input type="submit" value="Submit">
</form> 


</body>
</html>
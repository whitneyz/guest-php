<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Guest Book<</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link   rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="center"> Be Our Guest </h1>
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Date</label>
        <input type="text" name="date" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Guest Message</label>
    <textarea class="form-control" name="message" type="text" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Your name please</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>

</form>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
</body>

</html>






<!--
    * Title todo inputfiled
    * Date todo Date and time of submitting message automatically no it should be a normale inputfield
    * Content todo inputfield
    * Author name inputfield
 *
 - todo button submit to guestbook
-->
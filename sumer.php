<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="jquery.js"></script> 
  <script src="js/bootstrap.js"></script> 
  <link href="summernote/summernote.css" rel="stylesheet">
  <script src="summernote/summernote.js"></script>
</head>
<body>
  <textarea id="summernote" name="editordata"></textarea>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
</body>
</html>
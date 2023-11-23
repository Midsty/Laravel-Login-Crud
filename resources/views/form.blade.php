<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>
<body>

  <center>
    <h1>Artiesten epk Form</h1>
  </center>
     
<div class="container">
    <form>

        <div class="mb-3  form-group">
          <label for="exampleFormControlInput1">Artiest Naam</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Martin Garrix">
        </div>

        <div class="mb-3  form-group">
            <label for="exampleFormControlInput1">Artiest Label</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="STMPD RCRDS">
          </div>

          <div class="mb-3  form-group">
            <label for="exampleFormControlInput1">Artiest Muziekvideo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="https://www.youtube.com/watch?v=o3YadwGH0ZA">
          </div>

          <div class="mb-3  form-group">
            <label for="exampleFormControlFile1">Upload een press foto</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>

        <div class="mb-3  form-group">
          <label for="exampleFormControlTextarea1">Artiest Biografrie</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Verstuur</button>
      </form>

    </div>


</body>
</html>
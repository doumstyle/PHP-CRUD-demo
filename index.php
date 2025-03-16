<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Keepin' Score!</title>
</head>

<body>
  <div class="container py-5">
    <h1>PHP + MySQL CRUD Demo</h1>
    <p>Create, Read, Update, and Delete records below</p>

    <table class="table table-striped table-bordered table-hover w-50 text-center">
      <thead>
        <tr>
          <th>Name</th>
          <th>Score</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php include 'read.php'; ?>
      </tbody>
    </table>

    <form action="create.php" method="post" class="row row-cols-lg-auto g-3 align-items-center mt-5">
      <div class="col-5">
        <label for="name" class="visually-hidden">Name:</label>
        <div class="input-group">
          <div class="input-group-text">🙋</div>
          <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>
      </div>
      <div class="col-5">
        <label for="score" class="visually-hidden">Score:</label>
        <div class="input-group">
          <div class="input-group-text">🔢</div>
          <input type="number" name="score" id="score" class="form-control" placeholder="Score">
        </div>
      </div>

      <div class="col-2">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
  </div>























  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
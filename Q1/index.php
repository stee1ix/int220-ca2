<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1 - File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h2>Q1. Complete the form and upload the files</h2>
        <form action="form.php" method="post" enctype="multipart/form-data">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="Username" id="username" class="form-control" required>

            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="Date of Birth" id="dob" class="form-control">

            <label for="photo" class="form-label">Profile Photo</label>
            <input type="file" name="Photo" id="photo" class="form-control" required>
            <div id="emailHelp" class="form-text">Only PNG Format</div>

            <label for="resume" class="form-label">Resume</label>
            <input type="file" name="Resume" id="resume" class="form-control" required>
            <div id="emailHelp" class="form-text">Only PDF Format</div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
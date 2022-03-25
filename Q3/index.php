<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3-Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h2>Q3. Validate the form and email the user</h2>
        <form action="form.php" method="post">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="Username" id="username" class="form-control">

            <label for="password" class="form-label">Password</label>
            <input type="password" name="Password" id="password" class="form-control">

            <label for="email" class="form-label">Email</label>
            <input type="email" name="Email" id="email" class="form-control" placeholder="username@gmail.com">

            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" name="Phone" id="phone" class="form-control" placeholder="1234567890">

            <button type="submit" name="submit" class="btn btn-primary">Send Email</button>
        </form>
    </div>
</body>

</html>
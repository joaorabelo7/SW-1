<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>initial Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/my_style.css">
</head>
<body>
<figure class="figure">
    <img
        src="https://lncimg.lance.com.br/cdn-cgi/image/width=950,quality=75,fit=pad,format=webp/uploads/2024/11/Ja-Morant-Memphis-Grizzlies-NBA-scaled-aspect-ratio-512-320.jpg"
        class="figure-img img-fluid rounded shadow-3 mb-3"
        alt="Taking up Water with a Spoon"
    />
    </figure>
<div class = "container">

    <form action="process.php" method="POST">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div data-mdb-input-init class="form-outline">
            <input type="text" id="form3Example1" class="form-control"  name="user_first_name" required/>
            <label class="form-label" for="form3Example1">First name</label>
        </div>
        </div>
        <div class="col">
        <div data-mdb-input-init class="form-outline">
            <input type="text" id="form3Example2" class="form-control" name="user_second_name" required/>
            <label class="form-label" for="form3Example2">Last name</label>
        </div>
        </div>
    </div>

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control" name="user_email" required/>
        <label class="form-label" for="form3Example3">Email address</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form3Example4" class="form-control" name = "user_password" required/>
        <label class="form-label" for="form3Example4">Password</label>
    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
        <label class="form-check-label" for="form2Example33">
        Subscribe to our newsletter
        </label>
    </div>

    <!-- Submit button -->
    <!-- <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign up</button> -->
    <input type="submit" class = "btn btn-primary btn-block mb-4" value="Sign in">
    </form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
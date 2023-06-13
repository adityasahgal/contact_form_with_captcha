<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form With Capcha</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class=" " style="height: 30rem; width: 25rem; border:1px solid black; border-radius: 5px;
    box-shadow: 0 0 25px blue, 0 0 5px blue; margin-left:35rem;">
        <div style="justify-content: center; text-align:center; " >

            <h1 style=" color: white;  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">Contact Form</h1>
        </div>

        <div style="margin-left:2rem; margin-right:2rem;">
            <form method="post" action="server.php">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="mb-3 ">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter password" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="massage" class="form-label">Massage:</label>
                    <input type="text" class="form-control" id="massage" placeholder="Enter massage" name="massage">
                </div>
                <div class="mb-3 mt-3">
                    <label for="captcha">CAPTCHA:</label>
                    <input type="text" id="captcha" name="captcha" required>
                    <br>

                    <?php include 'captcha.php'; ?>

                </div>

                <button type="submit" name="add_contact" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>



</body>

</html>
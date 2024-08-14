<?php

require_once "init.php";
$profile = $linkedin->getPerson($_SESSION['linkedInAccessToken']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Share On Twitter</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- Styling -->
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>


</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin:auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888;">            
                <div class="panel-heading">
                    <h1>Share on LinkedIn</h1>
                    <p style="font-style: italic;">Share Text Post</p>
                </div>
                <hr>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-3">
                            <img class="thumbnail" src="<?php echo $profile->profilePicture->{"displayImage~"}->elements[0]->identifiers[0]->identifier; ?>" alt="">
                        </div>
                        <div class="col-9">
                            <dl class="row">
                                <dt class="col-12">Profile ID</dt>
                                <dd class="col-12"><?php echo $profile->id ?></dd>

                                <dt  class="col-12">Name</dt>
                                <dd class="col-12"> 
                                    <?php echo $profile->firstName->localized->en_US ?> <?php echo $profile->lastName->localized->en_US ?>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <hr>
                    <h5>Share Text Post</h5><br>
                    <form action="/sharetext.php">
                        <input type="hidden" name="profile" value="<?php echo $profile->id; ?>">
                        <textarea placeholder="What's on your mind?" name="content" required="required" id="" cols="30" rows="10" class="form-control"></textarea> <br>
                        <label for="">Privacy</label>
                        <select name="privacy" id="privacy" class="form-control">
                            <option value="PUBLIC">Public</option>
                            <option value="CONNECTIONS">Connections</option>
                        </select><br>
                        <input type="submit" class="btn btn-danger btn-sm btn-block" value="Proceed">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
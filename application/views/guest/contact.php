<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Demo project with jQuery">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <Link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <style type="text/css"></style>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?= site_url('home') ?>">SIG DPKP</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="<?= site_url('home') ?>">Home</a></li>
        <li><a href="<?= site_url('tutorial') ?>">Tutorial</a></li>
        <li class="active"><a href="<?= site_url('contact') ?>">Contact US</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1><?= $title ?></h1>
                    <p><?= $page ?></p>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        jQuery(function(){

        });
    </script>
</body>
</html>
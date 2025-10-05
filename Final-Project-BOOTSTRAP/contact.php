<!DOCTYPE html>
<html>
   <head>
         <title>DT Blogs</title>

         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
         <link rel="stylesheet" href="css/style.css">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>

    </head>

    <body style="background: #f8f7f4;">
        <nav class="navbar navbar-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">DT BLOGS</a>
                </div>

                <div class="nav navbar-nav form-inline navbar-right" style="padding: 10px">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                        <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="post_1.php">Posts</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <header style ="background: url(images/header.jpg);">    
        <div class="text-center">
            <h1>DAMTH</h1>
            <h2>Drafted All My Thoughts Here</h2>
        </div>
        </header>

    <div class="container">
        <div class="page-header text-center">
            <h1>Contact Us</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                    <h4>Contact Information</h4>
                    <div class="contact-info">
                        <p><span class="glyphicon glyphicon-map-marker"></span> 123 Shibuya Crossing, City of Tokyo</p>
                        <p><span class="glyphicon glyphicon-envelope"></span> iluvtoge@example.com</p>
                        <p><span class="glyphicon glyphicon-phone"></span> +0 (123) 456-7890</p>
                    </div>
                    <br/><br/>
                    <div class="social-icons">
                        <a href="#"><span class="glyphicon glyphicon-thumbs-up"></span>Facebook</a>
                        <a href="#"><span class="glyphicon glyphicon-heart"></span>Instagram</a>
                        <a href="#"><span class="glyphicon glyphicon-link"></span>Github</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form class="well">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
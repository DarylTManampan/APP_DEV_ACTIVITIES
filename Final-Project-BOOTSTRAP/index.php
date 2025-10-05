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
                        <input type="text" class="form-control" id="searchInput" placeholder="Search blogs...">
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
        </header><br/><br/>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="post" data-title="Late Born, Early Burdened">
                    <h1><a href="post_1.php">"Late Born, Early Burdened"</a></h1>
                    <p class="lead">A Different Kind of First, is what it is.</p>
                    <p>07-May-2025/DT</p>
                </div>

                <div id="post" data-title="Silent Protector - Toge Inumaki">
                    <h1><a href="post_2.php">Silent Protector - Toge Inumaki</a></h1>
                    <p class="lead">Inumaki Toge, a character in the animanga Jujutsu Kaisen.</p>
                    <p>07-May-2025/DT</p>
                </div>

                <div id="post" data-title="Rockstar by xikers">
                    <h1><a href="post_3.php">Rockstar by xikers</a></h1>
                    <p class="lead">Rockstar Lyrics English Translation</p>
                    <p>07-May-2025/DT</p>
                </div>

                <div id="post" data-title="My Topic on my Blog">
                    <h1><a href="post_4.php">My Topic on my Blog</a></h1>
                    <p class="lead">Tell Something about your blog goes here.....</p>
                    <p>07-May-2025/DT</p>
                </div>

                <div id="post" data-title="My Topic on my Blog">
                    <h1><a href="post_5.php">My Topic on my Blog</a></h1>
                    <p class="lead">Tell Something about your blog goes here.....</p>
                    <p>07-May-2025/DT</p>
                </div>

                <div class="down-btn text-right">
                    <button class="btn btn-default btn-lg">Older Post</button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <ul class="nav navbar-nav nav-mycenter">
                <li><a href="#">Home</a></li>
                <li><a href="#">Family</a></li>
                <li><a href="#">Hobbies</a></li>
                <li><a href="#">Foods</a></li>
                <li><a href="#">Nature</a></li>
            </ul>
        </div>

        <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const blogPosts = document.querySelectorAll('#post');

            blogPosts.forEach(post => {
                const title = post.querySelector('h1 a').textContent.toLowerCase();
                const content = post.querySelector('.lead').textContent.toLowerCase();

                if (title.includes(searchTerm) || content.includes(searchTerm)) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        });
    </script>
    </body>
</html>
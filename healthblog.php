<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .blog-post {
            margin-bottom: 30px;
        }

        .blog-post .post-image {
            height: 300px;
            background-size: cover;
            background-position: center;
        }

        .blog-post .post-title {
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .blog-post .post-meta {
            color: #777;
        }

        .blog-post .post-content {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="homepage.html">
                <img src="images/logo.png" alt="Healhub" width="200" height="65" href="homepage.html">
            </a>

            <ul class="nav nav-underline" class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" href="homepage.html">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" href="appointments.php">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" href="lab.html">Labs & Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" href="helpsupport.html">Help & Support</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                <a type="button" class="btn btn-light"
                    style="--bs-btn-padding-y: .65rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .78rem;"
                    href="login.html" role="button">Login</a>

                <a class="btn btn-outline-primary"
                    style="--bs-btn-padding-y: .65rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .78rem;"
                    href="register.html" role="button">Register</a>
            </ul>
        </div>
    </nav>

    <div style="background-image: url(images/bg.jpg);">
        <div class="container"><br><br>
            <div class="row">
                <div class="col-lg-8">
                    <h2>Create a Blog Post</h2>
                    <form action="healthblogg.php" method="POST">
                        <div class="form-group">
                            <label for="postTitle">Title</label>
                            <input type="text" class="form-control" id="postTitle" name="postTitle"
                                placeholder="Enter post title" required>
                        </div>
                        <div class="form-group">
                            <label for="postUser">Author</label>
                            <textarea class="form-control" id="postUser" name="postUser"
                                placeholder="Enter your name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="postContent">Content</label>
                            <textarea class="form-control" id="postContent" name="postContent" rows="5"
                                placeholder="Enter post content" required></textarea>
                        </div>
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                            data-target="#successModal">Submit</button>
                    </form>
                    <div class="blog-post">
                        <div class="post-image"
                            style="background-image: url('https://assets.lybrate.com/q_auto,f_auto,w_1200/eagle/uploads/cca97c80d89ae5468547088748abbee7/4bcc7b.jpg');">
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">Healthy Detox Drinks You Can Easily Make At…
                            </h2>
                            <div class="post-meta">
                                <span class="mr-2">Author: John Doe</span>
                                <span class="mr-2">Date: May 19, 2023</span>
                                <span class="mr-2">Category: Health</span>
                            </div>
                            <p>Drinking two liters of plain water in a day is a daunting task for many. So instead of
                               water, many people opt for fresh...</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Latest Blogs</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Cardic Arrest</li>
                                <li class="list-group-item">Diabities Control</li>
                                <li class="list-group-item">Depression causes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Posts</h5>
                            <ul class="list-group">
                                <li class="list-group-item">By Dr Rukhsana </li>
                                <li class="list-group-item">By Dr Aleem</li>
                                <li class="list-group-item">BY Dr Sharmeela </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your post has been submitted for approval.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-20192">
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="#" class="footer-logo">HealHub</a>
                        <p class="copyright">
                            <small>&copy; 2023</small>
                        </p>
                    </div>
                    <div class="col-sm">
                        <h3>More</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Health Blog</a></li>
                            <li><a href="#">Pharmacy</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Patient Portals</a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h3>Company</h3>
                        <ul class="list-unstyled links">
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h3>Further Information</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Partnerships</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Follow us</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"><img src="images/fb.png" width="40px"
                                            height="40px" alt="fb"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"><img src="images/ig.png" alt="ig"
                                            width="30px" height="30px"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"><img src="images/twt.png" alt="twt"
                                            width="35px" height="35px"></span></a></li>
                            <li><a href="#"><span class="icon-whatsapp"><img src="images/wt.webp" alt="wt"
                                            width="34px" height="34px"></span></a></li>
                            <li><a href="#"><span class="icon-messenger"><img src="images/msg.png" alt="msg"
                                            width="30px" height="30px"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>

</html>

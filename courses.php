<!DOCTYPE HTML>
<HTML lang="en">

    <head>
        <title>CS 142 Final</title>
        <meta charset="utf-8">
        <meta name="author" content="Robert Duarte">
        <meta name="description" content="A site to hold all my course work for CS.">
        <link rel='stylesheet' href='final.css'>
            
    </head>
    
    <body id="body">
        
        
        <nav class="navbar" role="navigation">
                <div class="navLinks">

                    <!-- mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ol class="nav navbar-nav">
                            <li id="topBar">Robert Duarte</li>
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="courses.php">Courses</a></li>
                            <li><a href="profWork.php">Professional Work</a></li> 
                            <li><a href="addWork.php">Additional Work</a></li>
                           
                        </ol>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
        </nav>
        
        <h1 class="pageTitle">Courses</h1>

        
        <ul class="courseList">
            <li><a href="class142.php">CS 142: Advanced Web Design</a>
                <p>A class focused around advanced CSS and web design conventions.
                    <br>Final Project: This website!</p>
            </li>
            <li><a href="class008.php">CS 008: Basic Web Development</a>
                <p>The introductory course in web development, focusing on html,
                    basic CSS, and php. <br>Final Project: Papa Mike's 'Za</p>
            </li>
            <li><a href="class110.php">CS 110: Intermediate Programming</a>
                <p>A course taught in Java, focused on object oriented programming.
                    <br>Final Project: Tetris</p>
            </li>
            <li><a href="class120.php">CS 120: Advanced Programming</a>
                <p>A course taught in C++, introducing the ideas of complexity 
                    and efficient programming. <br>Final Project: Runner</p>
            </li>
            <li><a href="class205.php">CS 205: Software Engineering</a>
                <p>A course teaching students how to develop a large piece of software, 
                introducing development processes such as agile and waterfall.
                <br>Final Project: Blokus</p>
            </li>
            
        </ul>
        
        <a href="contact.php" class="contact">Contact me!</a>
        
    </body>
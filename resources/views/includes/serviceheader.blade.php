<!-- TOP BAR -->
<section class="top-bar">
    <div class="container">
        <h2 class="sr-only">Top Links</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="top-menu">
                    <li><a href="#"><i class="fas fa-envelope"></i> email@example.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i> + (111) - 123 - 4567</a></li>
                </ul>
            </div> <!-- .col-md-6 ends -->

            <div class="col-md-6 hidden-xs">
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/Thegame.delavida"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/thegame.delavida/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/c/allo3bah/featured"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="http://t.me/TGserver1"><i class="fab fa-telegram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div> <!-- .col-md-6 ends -->

        </div> <!-- .row ends -->
    </div><!-- .container ends -->
</section> <!-- .top-bar ends -->

<!-- MAIN HEADER -->
<header class="main-header">
    <nav class="navbar navbar-default redone-navbar navbar-1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#redone-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- NAVBAR BRAND -->
                <a class="navbar-brand" href={{route('index')}}><img src="img/logo.png" alt="The Game logo"></a>
            </div> <!-- .navbar-header ends -->

            <div class="collapse navbar-collapse" id="redone-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-lg">
                        <form class="navbar-search">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search Here" name="q">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                    <button class="btn btn-danger" type="reset"><i class="fa fa-remove"></i></button>
                                </span> <!-- .input-group-btn ends -->
                            </div> <!-- .input-group ends -->
                        </form> <!-- .navbar-search ends -->
                    </li> <!-- .visible-xs ends -->
                    <li><a data-scroll href="{{route('index')}}">Home <span class="sr-only">(current)</span> <b></b></a></li>
                    <li><a href="{{route('about')}}">About <b></b></a></li>
                    <li class="active"><a href="{{route('service')}}">Service <b></b></a></li>
                    <li><a href="{{route('contact')}}">Contact <b></b></a></li>
                    <li class="visible-lg"><a href="#toggle-search" class="animate"><i class="fa fa-search"></i></a></li>

                </ul> <!-- .nav navbar-nav ends -->
            </div> <!-- .collapse navbar-collapse ends -->

        </div> <!-- .container ends -->

        <div class="redone-search animate">
            <div class="container">
                <form class="">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="Type and enter to search">
                        <span class="input-group-btn">
                            <button type="reset" class="btn"><i class="fa fa-remove"></i></button>
                        </span>
                    </div> <!-- .input-group ends -->
                </form>
            </div> <!-- .container ends -->
        </div> <!-- .bootsnip-search ends -->

    </nav> <!-- .navbar navbar-default ends -->
</header> <!-- .main-header ends -->

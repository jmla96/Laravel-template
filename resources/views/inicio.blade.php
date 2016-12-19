@extends('layouts.app')
@section('title')
    Inicio
@endsection
@section('content')
                                    <!-- CAROSEL -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:65%;float:left;min-width:420px;max-height:480px;overflow:hidden;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://lyfstylmusic.com/wp-content/uploads/2015/06/3405441.jpg" alt="..." width="100%" style="max-height:500px;">
                <div class="carousel-caption ltt15">
                    <h3>Born to die</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam, blanditiis delectus deserunt dignissimos doloremque expedita explicabo labore laboriosam modi placeat, quidem quis quo ratione reiciendis similique, sunt voluptate!
                </div>
            </div>
            <div class="item">
                <img src="https://flavorwire.files.wordpress.com/2014/06/lana-del-rey2.jpg" alt="..." width="100%" style="max-height:500px;">
                <div class="carousel-caption ltt15">
                    <h3>Die for me</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam, blanditiis delectus deserunt dignissimos doloremque expedita explicabo labore laboriosam modi placeat, quidem quis quo ratione reiciendis similique, sunt voluptate!
                </div>
            </div>
            <div class="item">
                <img src="https://i.ytimg.com/vi/cE6wxDqdOV0/maxresdefault.jpg" alt="..." width="100%" style="max-height:500px;">
                <div class="carousel-caption ltt15">
                    <h3>Video games</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam, blanditiis delectus deserunt dignissimos doloremque expedita explicabo labore laboriosam modi placeat, quidem quis quo ratione reiciendis similique, sunt voluptate!
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="divone">
        <img src="http://yesgoodmusic.com/wp-content/uploads/2013/08/lana-del-rey-kaskade-300x300.jpg" class="imgdivone">
        <img src="http://acapell.net/templates/images/lana-del-rey/video-games.jpg" class="imgdivone">
        <img src="http://udqwsjrf942s8cedd28fd9qk.wpengine.netdna-cdn.com/wp-content/uploads/2014/07/lana-300x300.jpg" class="imgdivone">
        <img src="https://img.discogs.com/Jo7NKF3SZZq9UbMZCeglJPvu97U=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/A-2445772-1441907724-1873.jpeg.jpg" class="imgdivone">
    </div>

    <section>
        <div style="max-width:650px;min-width:300px;" class="center-block text-center">
            <h2>Music</h2>
            <hr style="border:1px solid #34495e;width:200px;" class="center-block">
            <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aut consequuntur dignissimos ducimus error hic modi necessitatibus quas quisquam, veniam, veritatis voluptatem! Doloremque laborum pariatur quae, quas veritatis vero.</p>
        </div>
        <div style="max-width:90%; height: 400px;margin-top:30px;" class="center-block">
            <img src="https://secure.polyvoreimg.com/cgi/img-thing/size/l/tid/66356680.jpg" class="col-md-4 float-left">
            <p align="left" class="col-md-7 float-left" style="margin-top:100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid nemo omnis tempore? A accusantium, aspernatur delectus dignissimos expedita illo, laudantium nisi nobis officia perspiciatis repudiandae sit soluta totam.</p>
        </div>
    </section>
    <center>
        <h2 class="tittle-section orange color-white"><b class="color-white ">Todos sus</b> albumes</h2>
    </center>
    <section>
        <div style="max-width:650px;min-width:300px;" class="center-block text-center">
            <h2>Singles</h2>
            <hr style="border:1px solid #34495e;width:200px;" class="center-block">
            <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aut consequuntur dignissimos ducimus error hic modi necessitatibus quas quisquam, veniam, veritatis voluptatem! Doloremque laborum pariatur quae, quas veritatis vero.</p>
        </div>

    </section>
@endsection
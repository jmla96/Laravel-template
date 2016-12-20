@extends('layouts.app')
@section('title')
    Inicio
@endsection
@section('content')
    <!-- CAROSEL -->
    <div class="row ">
        <div id="carousel-example-generic" class="carousel slide col-md-8 remove-padding-r" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" >
                <div class="item active" style="max-height: 445px;">
                    <img src="http://lyfstylmusic.com/wp-content/uploads/2015/06/3405441.jpg" alt="..." >
                    <div class="carousel-caption  ">
                        <h3>Born to die</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam, blanditiis
                        delectus deserunt dignissimos doloremque expedita explicabo labore laboriosam modi placeat, quidem
                        quis quo ratione reiciendis similique, sunt voluptate!
                    </div>
                </div>
                <div class="item" style="max-height: 430px;">
                    <img src="https://flavorwire.files.wordpress.com/2014/06/lana-del-rey2.jpg" alt="..." >
                    <div class="carousel-caption  ">
                        <h3>Die for me</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam, blanditiis
                        delectus deserunt dignissimos doloremque expedita explicabo labore laboriosam modi placeat, quidem
                        quis quo ratione reiciendis similique, sunt voluptate!
                    </div>
                </div>
                <div class="item" style="max-height: 430px;">
                    <img src="https://i.ytimg.com/vi/cE6wxDqdOV0/maxresdefault.jpg" alt="..." >
                    <div class="carousel-caption  ">
                        <h3>Video games</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam, blanditiis
                        delectus deserunt dignissimos doloremque expedita explicabo labore laboriosam modi placeat, quidem
                        quis quo ratione reiciendis similique, sunt voluptate!
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

        <div class=" col-md-4 remove-padding-l">
            <img src="http://yesgoodmusic.com/wp-content/uploads/2013/08/lana-del-rey-kaskade-300x300.jpg"
                 class="imgdivone img-responsive">
            <img src="http://acapell.net/templates/images/lana-del-rey/video-games.jpg" class="imgdivone img-responsive">
            <img src="http://udqwsjrf942s8cedd28fd9qk.wpengine.netdna-cdn.com/wp-content/uploads/2014/07/lana-300x300.jpg"
                 class="imgdivone img-responsive">
            <img src="https://img.discogs.com/Jo7NKF3SZZq9UbMZCeglJPvu97U=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/A-2445772-1441907724-1873.jpeg.jpg"
                 class="imgdivone img-responsive">
        </div>
    </div>


    <section>
        <div style="max-width:650px;min-width:300px;" class="center-block text-center">
            <h2>Music</h2>
            <hr style="border:1px solid #34495e;width:200px;" class="center-block">
            <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aut consequuntur
                dignissimos ducimus error hic modi necessitatibus quas quisquam, veniam, veritatis voluptatem!
                Doloremque laborum pariatur quae, quas veritatis vero.</p>
        </div>
        <div style="max-width:90%; height: 400px;margin-top:30px;" class="center-block">
            <img src="https://secure.polyvoreimg.com/cgi/img-thing/size/l/tid/66356680.jpg" class="col-md-4 float-left">
            <p align="left" class="col-md-7 float-left" style="margin-top:100px;">Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Accusamus ad aliquid nemo omnis tempore? A accusantium, aspernatur
                delectus dignissimos expedita illo, laudantium nisi nobis officia perspiciatis repudiandae sit soluta
                totam.</p>
        </div>
    </section>
    <center>
        <h2 class="tittle-section orange color-white"><b class="color-white ">Todos sus</b> albumes</h2>
    </center>
    <section>
        <div style="max-width:650px;min-width:300px;" class="center-block text-center">
            <h2>Singles</h2>
            <hr style="border:1px solid #34495e;width:200px;" class="center-block">
            <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aut consequuntur
                dignissimos ducimus error hic modi necessitatibus quas quisquam, veniam, veritatis voluptatem!
                Doloremque laborum pariatur quae, quas veritatis vero.</p>
        </div>
        <br><br>
        <div class="center-block" style="max-width: 1200px;min-height:400px; ">
            <center>
                <div class="col-sm-2 imgdivtwo">
                    <img src="https://upload.wikimedia.org/wikipedia/en/2/29/BornToDieAlbumCover.png"
                         class="img-responsive">
                    <h3>Born to die</h3>
                </div>
                <div class="col-sm-2 imgdivtwo">
                    <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/en/6/6a/Paradise_EP.png">
                    <h3>Paradise edition</h3>
                </div>
                <div class="col-sm-2 imgdivtwo">
                    <img src="http://orig06.deviantart.net/48d6/f/2014/164/b/0/lana_del_rey_ultraviolence___deluxe__full_album_by_boykatycat-d7m9cxm.png"
                         class="img-responsive">
                    <h3>Ultraviolence</h3>
                </div>
                <div class="col-sm-2 imgdivtwo">
                    <img src="http://www.headstuff.org/wp-content/uploads/2015/09/Lane-Del-Rey-Honeymoon-Artwork.jpg"
                         class="img-responsive">
                    <h3>Honeymoon</h3>
                </div>
                <div class="col-sm-2 imgdivtwo">
                    <img src="https://upload.wikimedia.org/wikipedia/en/3/35/LDR_aka_Lizzy_Grant.jpg"
                         class="img-responsive">
                    <h3>Lana del Ray</h3>
                </div>
            </center>
        </div>
    </section>
    <center>
        <h2 class="tittle-section blue-dark "> Imagenes </h2>
    </center>
    <section>

        <div class="center-block container" >

            @foreach($imagen as $image)
            <div class="galery-img">
                <img src="{{ asset('storage/'.$image->image)}}" alt="..." class="img-g">
            </div>
            @endforeach
        </div>
    </section>
@endsection
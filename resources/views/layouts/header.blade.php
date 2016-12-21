<header>
    <a name="arriba"></a>
    <div class="float-right m-5">
        <div class="dropdown link-header">
            <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Idioma
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
                ...
            </ul>
        </div>
        <a href="#" class="link-header">Ingresar</a>
    </div>
</header>

<ul class="topnav" id="myTopnav">
    <h2 class="nameAplication">
        <i class="fa fa-pencil-square" aria-hidden="true"></i>
        <a href="{{ url('/') }}" class="color-white"> Aplicacion</a>
    </h2>
    <li><button class="button-a"><a href="{{ url('/') }}" >Inicio</a></button></li>
    <li><button class="button-a"><a href="#music" >Music</a></button></li>
    <li><button class="button-a"><a href="#imagenes" >Imagenes</a></button></li>
    <li><button class="button-a"><a href="#albumes" >Albumes</a></button></li>
    <li class="icon">
        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
    </li>
</ul>
<!--
<a href="{{ url('/admon') }}"><div style="cursor: pointer;width:5px; height: 5px;background: #000;border-radius:100%;position:absolute;margin: 0px;z-index:99999999;"></div></a>
-->
<header>
    <div style="float:right;margin:5px;width: 20%;min-width:300px;">
        <div class="dropdown" style="float:left;cursor:pointer;margin-right:15px;">
            <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown trigger
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
                ...
            </ul>
        </div>
        <a href="#" style="float:left;margin:2px; ">Ingresar</a>
    </div>
</header>

<ul class="topnav" id="myTopnav">
    <h2 style="float: left;margin-top:15px;margin-left:13px;color:white;font-size: 23px;">
        <i class="fa fa-pencil-square" aria-hidden="true"></i>
        <a href="{{ url('/') }}" style="color: #ffffff;"> Aplicacion</a>
    </h2>
        <li><button class="button-a"><a href="{{ url('/') }}" >Inicio</a></button></li>
    <li class="icon">
        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
    </li>
</ul>
<!--
<a href="{{ url('/admon') }}"><div style="cursor: pointer;width:5px; height: 5px;background: #000;border-radius:100%;position:absolute;margin: 0px;z-index:99999999;"></div></a>
-->
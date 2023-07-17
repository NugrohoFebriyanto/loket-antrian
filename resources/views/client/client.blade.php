@include('client.fullscren')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CLIENT DOC</title>
    <style>
        body{
           /* background-image:{{('dist/img/pemandangan.jpeg')}} */
           background-image: url({{asset('dist/img/bg.jpg')}});
            background-size:1335px;
            /* background-size:100%; */
            margin-left:auto;
            margin-right:auto;
            /* background-position:center; */
            /* background-width:200px; */
        }
        #title{
            color:#ffc107;
            
        }
        #nav{
            background: url(dist/img/bg-menu.jpg);
            position: relative;
            min-height: 50px;
        }
        #item{
            align-items: center;
            background-color: rgb(255, 204, 0);
            border-radius:10px;
        }
        #button_L{
            background-color: rgb(220, 0, 0);
            border-radius:10px;
            border: none;
        }
        #button_C{
            background-color: rgb(0, 51, 153);
            border-radius:10px;
            border: none;
        }
        #button_G{
            background-color: rgb(0, 153, 51);
            border-radius:10px;
            border: none;
        }
        #button_P{
            background-color: rgb(255, 102, 0);
            border-radius:10px;
            border: none;
        }
        #huruf{
            color: aliceblue;
            font-family: verdana;
        }
        .btn-space {
            margin-right: 5px;
        }
        .container{
            height: 200px;
            position: relative;
        }
        .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        }
        .card{
            margin-right: 10px;
            margin-left: 22px
        }
        #txt{
            color:white;
        }
    </style>
</head>
<body>
    {{-- <nav id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" id="title">Maju Hardware</a>
           
        </div>
    </nav> --}}
    <section class="container">
        <br>
        <br>
        {{-- <div class="text-center pb-3">
            <h1 id="title">Tombol Antrian</h1>
        </div> --}}
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h6 id="txt">Silahkan Klik Tombol Di Bawah ini Untuk Mengambil Nomor antrian!</h6></center>
        <div class="container">
            <div class="row pt-5">
                <div class="card" style="width: 15rem; height:15rem;" id="item">
                    <br>
                    <img src="{{asset('dist/img/LAPTOP.png')}}" width="60%" height="60%" alt="">
                    <div class="card-body" >
                        <form action="{{Route('cetak_laptop')}}" target="_blank" method="get" type="hidden"  >
                            <div class="card-body" id="button_L" >
                                <button id="button_L">     
                                    <h2 id="huruf"><b>Laptop</b></h2>
                                    </button>
                                </div>
                            </div>
                        </form>
                </div> 
                <div class="card" style="width: 15rem; height:15rem;" id="item">
                    <br>
                    <img src="{{asset('dist/img/Gadget.png')}}" width="50%" height="42%" alt="">
                    <div class="card-body">
                        <form action="{{Route('cetak_Gadget')}}" target="_blank" method="get" type="hidden"  >
                            <div class="card-body" id="button_G">
                                <button  id="button_G">
                                    <h2 id="huruf"><b>Gadget</b></h2>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card" style="width: 15rem; height:15rem;" id="item">
                    <br>
                    <img src="{{asset('dist/img/KOMPUTER.png')}}" width="50%" height="42%" alt="">
                    <div class="card-body">
                        <form action="{{Route('cetak_CPU')}}" target="blank" method="get" type="hidden"  >
                            <div class="card-body" id="button_C">
                                <button  id="button_C">
                                    <h2 id="huruf"><b>Komputer</b></h2>
                                </button>
                            </div>
                        </form>
                    </div> 
                </div> 
                <div class="card" style="width: 15rem; height:15rem;" id="item">
                    <br>
                    <img src="{{asset('dist/img/PRINTER.png')}}" width="50%" height="42%" alt="">
                    <div class="card-body">
                        <form action="{{Route('cetak_Printer')}}" target="blank" method="get" type="hidden"  >
                            <div class="card-body" id="button_P">
                                <button  id="button_P">
                                    <h2 id="huruf"><b> Printer</b></h2>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>



        


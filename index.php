
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link rel="shortcut icon" href="https://hub.smashystream.com/uploads/favicon.ico" type="image/x-icon">
        <link rel="icon" href="https://hub.smashystream.com/uploads/favicon.ico" type="image/x-icon">
  
<link rel="stylesheet" href="/assets/css/custom.min.css">
<link href="/assets/css/template.min.css" rel="stylesheet">
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool@latest'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EXPW1TBVRJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EXPW1TBVRJ');
  
</script>

    <title>Watch  </title>
    <style>
        body{
            background-color: var(--dm-card-bg-color) !important;
        }
        
        /* CSS */
#watch {
  align-items: center;
  appearance: none;
  background-color: #151515;
  /*background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #7aff54 100%); */
  border: 0;
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
  box-sizing: border-box;
  color: #d7dde7;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 40px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: "smaller";
}

#watch:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

#watch:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
}

#watch:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}
.dropdown-menu{
    max-height: 150px;
    overflow-y: scroll;
}
.dropdown-menu::-webkit-scrollbar {
    width: 7px;
    background-color: #000000;
}
.dropdown-menu::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #000000;
}
.dropdown-menu::-webkit-scrollbar-thumb {
    background: #0e1013;
    border-radius: 20px;
}
    </style>

    <!-- header custom codes-->
    
</head>
<body  class="dark-mode overflow-y-hidden">



    <div id="embed-player" data-movie-id="799546">
        <div class="sticky-alerts bottom-0 top-auto mb-15"></div>
        <div class="top-bar">

            <div class="d-none d-sm-flex align-items-center">

                
                                <h1 class="title font-size-14 m-0">
                                    </h1>
                
            </div>

            <div class="d-inline-block d-sm-none"></div>
            <div class=" d-flex justify-content-end" id = "top" style="color: #0bffc7;"> 
            </div>
            <div class=" d-flex align-items-center">



                
        <div class="dropdown selection  mr-5  d-none " id="server-groups"   >

            <button class="btn active-server-group" data-toggle="dropdown"  type="button" >
                <i class="fa fa-music" aria-hidden="true"></i>&nbsp;
                <span class="name">_default</span>&nbsp;
                <i class="fa fa-angle-down ml-5" aria-hidden="true"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdown-toggle-btn-1">
                <a href="javascript:void(0)" onClick="Player.changeGroup(this)" class="server-group dropdown-item" data-id="_default"> _default </a>            </div>
        </div>

                            <div class="dropdown servers mr-5" style=" " id="_default-servers" >
             <button id="watch" 
         onclick="window.open('https://embed.smashystream.com/#support');">
        Support
    </button>
                <button class="btn active-server" data-toggle="dropdown"  type="button">
                    <i class="fa fa-server" aria-hidden="true"></i>&nbsp;
                    <span class="name">Player</span>&nbsp;
                    <i class="fa fa-angle-down ml-5" aria-hidden="true"></i>
                </button>
     <div class="dropdown-menu" aria-labelledby="dropdown-toggle-btn-1">
                             <a href="javascript:void(0)" onClick="Player.play(false, this)" class="server dropdown-item"
                             data-id="https://embed.smashystream.com/effed_embed.php?imdb=">Weired Movies<span class="float-right status-dot text-success" > <i class="fa fa-circle"></i> </span></a>
                    </div>
            </div>
         

             <div id='report' class="dropdown">
                    <button class="btn mr-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: red;">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right w-250 w-sm-300" aria-labelledby="sign-in-dropdown-toggle-btn">
                        <div class="dropdown-content p-10">

                            <h3 class="content-title font-size-16 text-danger">
                               Report to telegram channel                            </h3>

                            <form action="">
                                
                                <div class="dropdown-divider"></div>
                                <div class="text-right mt-10">
                                    <button class="btn btn-danger" id="report-st-link" type="button"><i class="fa fa-telegram" aria-hidden="true"></i>&nbsp;Report</button>
                                </div>

                            </form>
                        </div>
                </div>
</div>
                
                <button class="btn toggle-top-bar">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>

            </div>
        </div>
        <button class="toggle-top-bar toggle-btn-short btn position-fixed font-weight-bold top-0 right-0  z-10" style="display: none"><i class="fa fa-sliders" aria-hidden="true"></i>
        </button>
<div class="main-content">
<div class="cover" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url();"></div>
<div class="play-btn" onclick="Player.play()">
<img src="/assets/images/play-white.png" class="h-25" alt="play-btn">
</div>
<div class="frame">
                <iframe id="ve-iframe"   width="100%" scrolling="no" allowfullscreen="true" frameborder="0"></iframe>
            </div>
            <div class="loader">
                <div class="loader-inner line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="ve-text">
                    please wait...                </div>
            </div>
            <div class="error">
                <span class="lbl font-size-14"> Error Occurred </span>
                <span class="msg"></span>
            </div>
            <div class="g-recaptcha" data-sitekey=""
                 data-badge="inline" data-size="invisible" data-callback="set_captcha_response"></div>





        </div>
    </div>

<script async src="//static.getclicky.com/101415319.js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101415319ns.gif" /></p></noscript>



<script>

    const BASE_URL = 'https://embed.smashystream.com/';
    const AUTOPLAY = '';

</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script src="/assets/js/template.min.js"></script>
<script src="/assets/js/custom.min.js"></script>
<script src="/playere.js?v=1.3.1"></script>

<!--footer custom codes-->

<!--popAds-->

<script>

</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7de31057cdb5e867","version":"2023.4.0","r":1,"token":"0bec95fd17b5420e8c9b28a8430ea1d4","si":100}' crossorigin="anonymous"></script>
</body>
</html>

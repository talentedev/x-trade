<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8"/>
        <title>AX TRADER LTD</title>
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
        <link href="{{ asset('frontend_asset') }}/assets/css/one-page-parallax/app.min.css" rel="stylesheet"/>
        <!-- ================== END BASE CSS STYLE ================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('uploads/logo') }}/{{ $logo->logo }}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('uploads/logo') }}/{{ $logo->logo }}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('uploads/logo') }}/{{ $logo->logo }}">
      {{-- <link rel="manifest" href="site.html">
      <link rel="mask-icon" href="safari-pinned-tab.svg" color="#343536"> --}}
      <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8bfa5d75-7437-4d8e-86fd-505469ce57be";(function(){d=document;s=d.createElement("script");s.src="../client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
    <body data-spy="scroll" data-target="#header" data-offset="51">
        <!-- begin #page-container -->
        <div id="page-container" class="fade">
            <!-- begin #header -->
            <div id="header" class="header navbar navbar-inverse navbar-fixed-top navbar-expand-lg">
                <!-- begin container -->
                <div class="container">
                    <!-- begin navbar-brand -->
                    <a href="indexbc14.html?a=home" class="navbar-brand"><img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}"> </a>
                    <!-- end navbar-brand -->
                    <!-- begin navbar-toggle -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navbar-collapse -->
                    <div class="collapse navbar-collapse" id="header-navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a class="nav-link active" href="#home" data-click="scroll-to-target" data-scroll-target="#home">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about" data-click="scroll-to-target">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pricing" data-click="scroll-to-target">INVESTMENT PLANS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#service" data-click="scroll-to-target">REFERRALS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact" data-click="scroll-to-target">CONTACT</a>
                            </li>
                                                        <li class="d-none d-md-inline-block nav-item mt-auto mb-auto">
                                <a href="{{ route('userregister') }}" class="btn btn-primary">Register an Account</a>
                            </li>
                            <li class="d-none d-md-inline-block nav-item mt-auto mb-auto ml-3">
                                <a href="{{ route('login') }}" class="btn btn-outline-white">Sign In</a>
                            </li>
                            <li class="d-md-none nav-item mt-auto mb-auto">
                                <a href="{{ route('userregister') }}" style="margin-left: 12px" class="mt-2 mb-3 btn btn-primary">Register an Account</a>
                                <a href="{{ route('login') }}" class="ml-3 mt-2 mb-3 btn btn-outline-white">Sign In</a>
                            </li>
                                                    </ul>
                    </div>
                    <!-- end navbar-collapse -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #header -->
            <!-- begin #home -->
            <div id="home" class="content has-bg home">
                <!-- begin content-bg -->
                <div class="content-bg" style="background-image: url({{ asset('frontend_asset') }}/assets/img/bg/bg-home5.jpg);" data-paroller="true" data-paroller-factor="0.5" data-paroller-factor-xs="0.25">
</div>
                <!-- end content-bg -->
                <!-- begin container -->
                <script>
                var chat = document.getElementById('chat'),
    cli = document.getElementById('cli'),
    user = 'Sam',
    chatHistory = [],
    historyIndex = 0;

cli.addEventListener('keypress', function(event) {
    if (event.keyCode === 13) {
        // enter pressed, get the message
        var message = cli.value;
        // save to history
        chatHistory.push(capitalizeFirstLetter(message));
        // empty the cli
        cli.value = '';
        if (message !== 'clear') {
            // append the message to the chat
            appendMessage(message);
            // send the message to iris server
            //socket.emit('message', message);
        } else {
            // clear the chat
            chat.innerHTML = '';
        }
    }
});

cli.addEventListener('keydown', function(event) {
    /* navigate through the chatHistory array using the arrows keys */
    if (event.keyCode === 38 && chatHistory.length > 0) {               // arrow up
        if (historyIndex >= 0 && historyIndex < chatHistory.length) {
            cli.value = '';
            historyIndex += 1;
            cli.value = chatHistory[chatHistory.length - historyIndex];
        }
    } else if (event.keyCode === 40 && chatHistory.length > 0) {        // arrow down
        if (historyIndex > 0) {
            cli.value = '';
            historyIndex -= 1;
            if (historyIndex != 0) {
                cli.value = chatHistory[chatHistory.length - historyIndex];
            } else {
                cli.value = chatHistory[chatHistory.length - 1];
            }

        }
   }
});

/* Append message to the chat */
function appendMessage(message) {
    // reset chat history index
    historyIndex = 0;
    // create message item
    var chatMessage = document.createElement('li');
    chatMessage.className = 'message';
    chatMessage.textContent = user+' > '+capitalizeFirstLetter(message);
    chat.appendChild(chatMessage);
    chatMessage.scrollIntoView();
}




/* Capitalize the first letter of the first word */
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
</script>
                <style>.core { background: #cedce0; width: 100px; height: 100px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; border: 10px rgba(2, 255, 255, 0.15) solid; animation: flicker 0.2s infinite; margin-left: auto; margin-right: auto; margin-top: 40px; } .core2 { background: #cedce0; width: 100px; height: 100px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; border: 10px rgba(2, 255, 255, 0.15) solid; animation: flicker2 0.2s infinite; margin-left: auto; margin-right: auto; margin-top: 40px; } .big_core { background: #cedce0; width: 200px; height: 200px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; border: 10px rgba(2, 255, 255, 0.15) solid; animation: big_flicker 0.2s infinite; } .c_ease { animation: colour_ease 3s infinite ease-in-out; } .counterspin5 { animation: rotate_anti 5s linear infinite; } .counterspin4 { animation: rotate_anti 4s linear infinite; } .semi_arc { width: 100px; height: 100px; border: 6px solid #02feff; background: rgba(2, 254, 255, 0.2); -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; transform: rotateZ(0deg); transition: box-shadow 3s ease; text-align: center; line-height: 100px; } .semi_arc:hover { box-shadow: 0px 0px 30px rgba(2, 254, 255, 0.8); transition: 0.3s; } .semi_arc_2 { content: ""; position: absolute; width: 94%; height: 94%; left: 3%; top: 3%; border: 5px solid #02feff; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; animation: rotate 4s linear infinite; text-align: center; line-height: 129px; } .semi_arc_2:after { content: ""; position: absolute; width: 94%; height: 94%; left: 3%; top: 3%; border: 4px solid #02feff; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; animation: rotate_anti 2s linear infinite; } .semi_arc_3 { content: ""; position: absolute; width: 94%; height: 94%; left: 3%; top: 3%; border: 5px solid #02feff; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; animation: rotate 4s linear infinite; text-align: center; line-height: 129px; } .arc { width: 100px; height: 100px; border: 6px solid #02feff; background: rgba(2, 254, 255, 0.2); -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; -moz-transform: rotateY(-30deg) translateZ(-200px); -ms-transform: rotateY(-30deg) translateZ(-200px); -webkit-transform: rotateY(-30deg) translateZ(-200px); transform: rotateY(-30deg) translateZ(-200px); transform: rotateZ(0deg); transition: box-shadow 3s ease; text-align: center; line-height: 100px; } .arc:hover { box-shadow: 0px 0px 30px rgba(2, 254, 255, 0.8); transition: 0.3s; } .arc:after { content: ""; position: absolute; width: 94%; height: 94%; left: 3%; top: 3%; border: 4px solid #02feff; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; animation: rotate 4s linear infinite; } .e1:after { border-color: rgba(2, 255, 255, 0.6); border-left: 5px solid transparent; border-right: 5px solid transparent; } .e2:after { border-color: rgba(2, 255, 255, 0.6); border-left: 5px solid transparent; border-right: 5px solid transparent; border-bottom: 5px solid transparent; } .e3 { border-left: 6px solid transparent; border-right: 6px solid transparent; animation: rotate 5s linear infinite; } .e3:after { border-color: rgba(2, 255, 255, 0.6); border-top: 5px solid transparent; border-bottom: 5px solid transparent; } .e4 { width: 150px; height: 150px; } .e4_1 { border-color: rgba(2, 255, 255, 0.3); border-left: 5px solid transparent; border-right: 5px solid transparent; } .e4_1:after { border-color: rgba(2, 255, 255, 0.6); border-top: 4px solid transparent; border-bottom: 4px solid transparent; } .e5 { width: 200px; height: 200px; } .e5_1 { color: rgba(2, 255, 255, 0.15); border: 2px solid; border-left: 2px solid transparent; animation: rotate 5s linear infinite; } .e5_2 { color: rgba(2, 255, 255, 0.7); border: 4px solid; border-left: 4px solid transparent; border-right: 4px solid transparent; animation: rotate_anti 4s linear infinite; } .e5_3 { color: rgba(2, 255, 255, 0.5); border: 2px solid; border-left: 2px solid transparent; border-right: 2px solid transparent; animation: rotate 3s linear infinite; } .e5_4 { color: rgba(2, 255, 255, 0.15); border: 4px solid; border-left: 4px solid transparent; border-right: 4px solid transparent; border-bottom: 4px solid transparent; animation: rotate_anti 2s linear infinite; } .e6 { border-color: transparent; background: rgba(255, 255, 255, 0); width: 200px; height: 200px; } @keyframes rotate { 0% {  transform: rotateZ(0deg); }  100% {  transform: rotateZ(360deg); } } @keyframes rotate_anti { 0% {  transform: rotateZ(360deg); }  100% {  transform: rotateZ(0deg); } } @keyframes colour_ease { 0% {  border-color: #02feff; }  50% {  border-color: rgba(2, 254, 255, 0.5); }  100% {  border-color: #02feff; } } @keyframes flicker { 0% {  box-shadow: 0px 0px 16px 8px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); }  40% {  box-shadow: 0px 0px 16px 8px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); }  50% {  box-shadow: 0px 0px 16px 6px rgba(150, 255, 255, 0.5), inset 0px 1px 100px 2px rgba(21, 211, 233, 0.3); }  60% {  box-shadow: 0px 0px 16px 8px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); }  100% {  box-shadow: 0px 0px 16px 8px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); } } @keyframes flicker2 { 0% {  box-shadow: 0px 0px 60px 25px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); }  40% {  box-shadow: 0px 0px 60px 25px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); }  50% {  box-shadow: 0px 0px 50px 17px rgba(150, 255, 255, 0.5), inset 0px 1px 100px 2px rgba(21, 211, 233, 0.3); }  60% {  box-shadow: 0px 0px 60px 25px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); }  100% {  box-shadow: 0px 0px 60px 25px rgba(150, 255, 255, 0.5), inset 0px 1px 4px 2px rgba(21, 211, 233, 0.3); } } @keyframes big_flicker { 0% {  box-shadow: 0px 0px 40px 20px rgba(150, 255, 255, 0.5), inset 0px 1px 30px 15px rgba(21, 211, 233, 0.3); }  40% {  box-shadow: 0px 0px 40px 20px rgba(150, 255, 255, 0.5), inset 0px 1px 30px 15px rgba(21, 211, 233, 0.3); }  50% {  box-shadow: 0px 0px 35px 17px rgba(150, 255, 255, 0.5), inset 0px 1px 50px 40px rgba(21, 211, 233, 0.3); }  60% {  box-shadow: 0px 0px 40px 20px rgba(150, 255, 255, 0.5), inset 0px 1px 30px 15px rgba(21, 211, 233, 0.3); }  100% {  box-shadow: 0px 0px 40px 20px rgba(150, 255, 255, 0.5), inset 0px 1px 30px 15px rgba(21, 211, 233, 0.3); } } html, body { height: 100%; } ul { list-style: none; margin: 0; padding: 0; } .arc_reactor { position: relative; top: 50%; margin-top: -125px; margin-left: auto; margin-right: auto; width: 250px; height: 250px; border-radius: 50%; box-shadow: 0px 0px 50px 15px rgba(2, 255, 255, 0.3), inset 0px 0px 50px 15px rgba(2, 255, 255, 0.3); } .core2 { background: #cedce0; width: 110px; height: 110px; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; border: 5px solid rgba(2, 255, 255, 0.15); animation: flicker2 0.2s infinite; margin-left: auto; margin-right: auto; margin-top: 40px; } .e7 { width: 95.25%; height: 95.25%; left: 2.5475%; right: 2.5475%; border: 6px solid transparent; background: transparent; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%; transform: rotateZ(0deg); transition: box-shadow 3s ease; text-align: center; line-height: 100px; } .case_container { width: 210px; height: 210px; border-radius: 50%; position: absolute; margin-left: 20px; margin-top: 20px; } .marks li { display: block; width: 3px; height: 11px; background: rgba(2, 254, 255, 0.8); position: absolute; margin-left: 105px; margin-top: -110px; animation: colour_ease2 3s infinite ease-in-out; } @keyframes colour_ease2 { 0% {  background: #02feff; }  50% {  background: rgba(2, 254, 255, 0.3); }  100% {  background: #02feff; } } .marks li:first-child { transform: rotate(6deg) translateY(125px); } .marks li:nth-child(2) { transform: rotate(12deg) translateY(125px); } .marks li:nth-child(3) { transform: rotate(18deg) translateY(125px); } .marks li:nth-child(4) { transform: rotate(24deg) translateY(125px); } .marks li:nth-child(5) { transform: rotate(30deg) translateY(125px); } .marks li:nth-child(6) { transform: rotate(36deg) translateY(125px); } .marks li:nth-child(7) { transform: rotate(42deg) translateY(125px); } .marks li:nth-child(8) { transform: rotate(48deg) translateY(125px); } .marks li:nth-child(9) { transform: rotate(54deg) translateY(125px); } .marks li:nth-child(10) { transform: rotate(60deg) translateY(125px); } .marks li:nth-child(11) { transform: rotate(66deg) translateY(125px); } .marks li:nth-child(12) { transform: rotate(72deg) translateY(125px); } .marks li:nth-child(13) { transform: rotate(78deg) translateY(125px); } .marks li:nth-child(14) { transform: rotate(84deg) translateY(125px); } .marks li:nth-child(15) { transform: rotate(90deg) translateY(125px); } .marks li:nth-child(16) { transform: rotate(96deg) translateY(125px); } .marks li:nth-child(17) { transform: rotate(102deg) translateY(125px); } .marks li:nth-child(18) { transform: rotate(108deg) translateY(125px); } .marks li:nth-child(19) { transform: rotate(114deg) translateY(125px); } .marks li:nth-child(20) { transform: rotate(120deg) translateY(125px); } .marks li:nth-child(21) { transform: rotate(126deg) translateY(125px); } .marks li:nth-child(22) { transform: rotate(132deg) translateY(125px); } .marks li:nth-child(23) { transform: rotate(138deg) translateY(125px); } .marks li:nth-child(24) { transform: rotate(144deg) translateY(125px); } .marks li:nth-child(25) { transform: rotate(150deg) translateY(125px); } .marks li:nth-child(26) { transform: rotate(156deg) translateY(125px); } .marks li:nth-child(27) { transform: rotate(162deg) translateY(125px); } .marks li:nth-child(28) { transform: rotate(168deg) translateY(125px); } .marks li:nth-child(29) { transform: rotate(174deg) translateY(125px); } .marks li:nth-child(30) { transform: rotate(180deg) translateY(125px); } .marks li:nth-child(31) { transform: rotate(186deg) translateY(125px); } .marks li:nth-child(32) { transform: rotate(192deg) translateY(125px); } .marks li:nth-child(33) { transform: rotate(198deg) translateY(125px); } .marks li:nth-child(34) { transform: rotate(204deg) translateY(125px); } .marks li:nth-child(35) { transform: rotate(210deg) translateY(125px); } .marks li:nth-child(36) { transform: rotate(216deg) translateY(125px); } .marks li:nth-child(37) { transform: rotate(222deg) translateY(125px); } .marks li:nth-child(38) { transform: rotate(228deg) translateY(125px); } .marks li:nth-child(39) { transform: rotate(234deg) translateY(125px); } .marks li:nth-child(40) { transform: rotate(240deg) translateY(125px); } .marks li:nth-child(41) { transform: rotate(246deg) translateY(125px); } .marks li:nth-child(42) { transform: rotate(252deg) translateY(125px); } .marks li:nth-child(43) { transform: rotate(258deg) translateY(125px); } .marks li:nth-child(44) { transform: rotate(264deg) translateY(125px); } .marks li:nth-child(45) { transform: rotate(270deg) translateY(125px); } .marks li:nth-child(46) { transform: rotate(276deg) translateY(125px); } .marks li:nth-child(47) { transform: rotate(282deg) translateY(125px); } .marks li:nth-child(48) { transform: rotate(288deg) translateY(125px); } .marks li:nth-child(49) { transform: rotate(294deg) translateY(125px); } .marks li:nth-child(50) { transform: rotate(300deg) translateY(125px); } .marks li:nth-child(51) { transform: rotate(306deg) translateY(125px); } .marks li:nth-child(52) { transform: rotate(312deg) translateY(125px); } .marks li:nth-child(53) { transform: rotate(318deg) translateY(125px); } .marks li:nth-child(54) { transform: rotate(324deg) translateY(125px); } .marks li:nth-child(55) { transform: rotate(330deg) translateY(125px); } .marks li:nth-child(56) { transform: rotate(336deg) translateY(125px); } .marks li:nth-child(57) { transform: rotate(342deg) translateY(125px); } .marks li:nth-child(58) { transform: rotate(348deg) translateY(125px); } .marks li:nth-child(59) { transform: rotate(354deg) translateY(125px); } .marks li:nth-child(60) { transform: rotate(360deg) translateY(125px); }</style>
                <div class="container home-content">
                    <div class="row">
                      <style>

.jring {
margin-top: 140px;
margin-left: 80px;
position: relative;
height: auto;
width: auto;
}
@media (max-width:768px){
.jring {
 margin-top: 80px;
 margin-left: 10px;
 margin-bottom: 40px;
 position: relative;
 height: auto;
 width: auto;
}
}
@media (max-width:1200px){
.jring {
 margin-top: 30px;
 margin-left: 10px;
 margin-bottom: 40px;
 position: relative;
 height: auto;
 width: auto;
}
}
                                     </style>
                        <div class="col-xl-6">
                            <div class="jring">
                                <div class="arc_reactor">
                                    <div class="case_container" style="padding-left: -100px">
                                        <div class="mb-1 e7">
                                            <div class="semi_arc_3 e5_1 ml-2">
                                                <div class="semi_arc_3 e5_1">
                                                    <div class="semi_arc_3 e5_2">
                                                        <div class="semi_arc_3 e5_3">
                                                            <div class="semi_arc_3 e5_4">
</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="core2" style="margin-right: 30px"></div>
                                        </div>
                                        {{-- <ul class="marks">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <h1><span class="text-primary">{{ $banner->heading_one }}</span></h1>
                            <h3>{{ $banner->heading_two }}</h3>
                            <h5 class="d-none d-md-inline-block">{{ $banner->description_one }}</h5>
                            <h5 class="text-primary">{{ $banner->description_two }}</h5>
                            <br/>
                             <a href="{{ route('userregister') }}" class="btn btn-theme btn-primary">Register an Account</a>
                            <a href="{{ route('login') }}" class="btn btn-theme btn-outline-white">Sign In</a>
                                                        <br/>
                        </div>
                    </div>
                    <!-- iris eye -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #home -->
            <!-- begin #about -->
            <div id="about" class="content pb-1 pt-4" data-scrollview="true" style="background: #b4b4b4">
                <!-- begin container -->
                <div class="container" data-animation="true" data-animation-type="fadeInDown">
                    <h2 class="content-title">{{ $about_detail->section_heading }}</h2>
                    <p class="content-desc"> <!-- begin row --> <div class="row">
                            <!-- begin col-4 -->
                            <!-- end col-4 -->
                            <div class="col-md-6 col-sm-12">
                                <!-- begin about -->
                                <div class="about">
                                    <h3 class="mb-3">{{ $about_detail->heading }}</h3>
                                    <p class="desc text-justify" style="line-height: 1.6rem">{{ $about_detail->description }}</p>
                                </div>
                                <!-- end about -->
                            </div>
                            <!-- begin col-4 -->
                            <div class="col-md-6 col-sm-12">
                                <!-- begin about-author -->
                                <div class="about-author">
                                    <h3 class="mb-3">Video Presentation</h3>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ $about_detail->video_link }}"></iframe>
                                    </div>
                                </div>
                                <!-- end about-author -->
                            </div>
                            <!-- end col-4 -->
                            <!-- begin col-4 -->
                            <!-- end col-4 -->
                        </div> <!-- end row --></p>
                </div>
                <!-- end container -->
            </div>
            <!-- end #about -->
            <!-- begin #milestone -->
            <div id="milestone" class="content bg-black-darker has-bg" data-scrollview="true">
                <!-- begin content-bg -->
                <div class="content-bg" style="background-image: url({{ asset('frontend_asset') }}/assets/img/bg/bg-home3.jpg);" data-paroller="true" data-paroller-factor="0.5" data-paroller-factor-md="0.01" data-paroller-factor-xs="0.01"></div>
                <!-- end content-bg -->
                <!-- begin container -->
                <div class="container">
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-3 -->
                        <div class="col-md-3 milestone-col">
                            <div class="milestone">
                                <div style="font-weight: bold;" class="number" data-animation="true" data-animation-type="number" data-final-number="{{ $count1->count }}"></div>
                                <div style="color: #00acac;" class="title">{{ $count1->count_title }}</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- begin col-3 -->
                        <div class="col-md-3 milestone-col">
                            <div class="milestone">
                                <div style="font-weight: bold;" class="number" data-animation="true" data-animation-type="number" data-final-number="{{ $count2->count }}">0</div>
                                <div style="color: #00acac;" class="title">{{ $count2->count_title }}</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- begin col-3 -->
                        <div class="col-md-3 milestone-col">
                            <div class="milestone">
                                <span class="number" style="display: inline-block; font-weight: bold;">$ </span>
                                <div style="display: inline-block; font-weight: bold;" class="number" data-decimal-numbers="2" data-animation="true" data-animation-type="number" data-final-number="{{ $count3->count }}">0</div>
                                <div style="color: #00acac;" class="title">{{ $count3->count_title }}</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- begin col-3 -->
                        <div class="col-md-3 milestone-col">
                            <div class="milestone">
                                <span class="number" style="display: inline-block; font-weight: bold;">$ </span>
                                <div style="display: inline-block; font-weight: bold;" class="number" data-animation="true" data-animation-type="number" data-final-number="{{ $count4->count }}"></div>
                                <div style="color: #00acac;" class="title">{{ $count4->count_title }}</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #milestone -->
            <div id="pricing" class="content" data-scrollview="true" style="background: #b4b4b4">
                <!-- begin container -->
                <div class="container">
                    <h2 class="content-title">{{ $plan_heading->heading }}</h2>
                    <p class="content-desc">{{ $plan_heading->description }}</p>
                    <!-- begin pricing-table -->
                    <ul class="pricing-table pricing-col-3">
                        <li data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3>Basic</h3>
                                <div class="price">
                                    <div class="price-figure">
                                        <span class="price-number">{{ $plan_one_title->plan_parcent }}% Daily</span>
                                        <span class="price-tenure">for {{ $plan_one_title->plan_time }} Days</span>
                                    </div>
                                </div>
                                <ul class="features" style="background: #cccccc; border: none;">
                                    <li>Minimum deposit: <b>${{ $plan_one_title->plan_minimum }}</b></li>
                                    <li>Maximum deposit: <b>${{ $plan_one_title->plan_maximum }}</b></li>
                                    @foreach ($plan1 as $one)
                                    <li>
                                        {{ $one->plan_item }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="footer">
                                                                        <a href="{{ route('login') }}" class="btn btn-inverse btn-theme btn-block">Invest Now</a>
                                                                    </div>
                            </div>
                        </li>
                        <li data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3>Basic</h3>
                                <div class="price">
                                    <div class="price-figure">
                                        <span class="price-number">{{ $plan_two_title->plan_parcent }}% Daily</span>
                                        <span class="price-tenure">for {{ $plan_two_title->plan_time }} Days</span>
                                    </div>
                                </div>
                                <ul class="features" style="background: #cccccc; border: none;">
                                    <li>Minimum deposit: <b>${{ $plan_two_title->plan_minimum }}</b></li>
                                    <li>Maximum deposit: <b>${{ $plan_two_title->plan_maximum }}</b></li>
                                    @foreach ($plan2 as $two)
                                    <li>
                                        {{ $two->plan_item }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="footer">
                                                                        <a href="{{ route('login') }}" class="btn btn-inverse btn-theme btn-block">Invest Now</a>
                                                                    </div>
                            </div>
                        </li>
                        <li data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3 style="stroke: red">Basic</h3>
                                <div class="price">
                                    <div class="price-figure">
                                        <span class="price-number">{{ $plan_three_title->plan_parcent }}% Daily</span>
                                        <span class="price-tenure">for {{ $plan_three_title->plan_time }} Days</span>
                                    </div>
                                </div>
                                <ul class="features" style="background: #cccccc; border: none;">
                                    <li>Minimum deposit: <b>${{ $plan_three_title->plan_minimum }}</b></li>
                                    <li>Maximum deposit: <b>${{ $plan_three_title->plan_maximum }}</b></li>
                                    @foreach ($plan3 as $three)
                                    <li>
                                        {{ $three->plan_item }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="footer">
                                                                    <a href="{{ route('login') }}" class="btn btn-inverse btn-theme btn-block">Invest Now</a>
                                                                  </div>
                            </div>
                        </li>
                        <li data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3 style="stroke: red">Premium</h3>
                                <div class="price">
                                    <div class="price-figure">
                                        <span class="price-number">{{ $plan_four_title->plan_parcent }}% Daily</span>
                                        <span class="price-tenure">for {{ $plan_four_title->plan_time }} Days</span>
                                    </div>
                                </div>
                                <ul class="features" style="background: #cccccc; border: none;">
                                    <li>Minimum deposit: <b>${{ $plan_four_title->plan_minimum }}</b></li>
                                    <li>Maximum deposit: <b>${{ $plan_four_title->plan_maximum }}</b></li>
                                    @foreach ($plan4 as $four)
                                    <li>
                                        {{ $four->plan_item }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="footer">
                                                                    <a href="{{ route('login') }}" class="btn btn-inverse btn-theme btn-block">Invest Now</a>
                                                                  </div>
                            </div>
                        </li>
                        <li data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3 style="stroke: red">Premium</h3>
                                <div class="price">
                                    <div class="price-figure">
                                        <span class="price-number">{{ $plan_five_title->plan_parcent }}% Daily</span>
                                        <span class="price-tenure">for {{ $plan_five_title->plan_time }} Days</span>
                                    </div>
                                </div>
                                <ul class="features" style="background: #cccccc; border: none;">
                                    <li>Minimum deposit: <b>${{ $plan_five_title->plan_minimum }}</b></li>
                                    <li>Maximum deposit: <b>${{ $plan_five_title->plan_maximum }}</b></li>
                                    @foreach ($plan5 as $five)
                                    <li>
                                        {{ $five->plan_item }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="footer">
                                                                    <a href="{{ route('login') }}" class="btn btn-inverse btn-theme btn-block">Invest Now</a>
                                                                  </div>
                            </div>
                        </li>
                        <li data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3 style="stroke: red">Supreme</h3>
                                <div class="price">
                                    <div class="price-figure">
                                        <span class="price-number">{{ $plan_six_title->plan_parcent }}% Daily</span>
                                        <span class="price-tenure">for {{ $plan_six_title->plan_time }} Days</span>
                                    </div>
                                </div>
                                <ul class="features" style="background: #cccccc; border: none;">
                                    <li>Minimum deposit: <b>${{ $plan_six_title->plan_minimum }}</b></li>
                                    <li>Maximum deposit: <b>${{ $plan_six_title->plan_maximum }}</b></li>
                                    @foreach ($plan6 as $six)
                                    <li>
                                        {{ $six->plan_item }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="footer">
                                                                    <a href="{{ route('login') }}" class="btn btn-inverse btn-theme btn-block">Invest Now</a>
                                                                  </div>
                            </div>
                        </li>
                        <li data-animation="true" data-animation-type="fadeInUp">
                            <div class="pricing-container">
                                <h3 style="stroke: red">Supreme</h3>
                                <div class="price">
                                    <div class="price-figure">
                                        <span class="price-number">{{ $plan_seven_title->plan_parcent }}% Daily</span>
                                        <span class="price-tenure">for {{ $plan_seven_title->plan_time }} Days</span>
                                    </div>
                                </div>
                                <ul class="features" style="background: #cccccc; border: none;">
                                    <li>Minimum deposit: <b>${{ $plan_seven_title->plan_minimum }}</b></li>
                                    <li>Maximum deposit: <b>${{ $plan_seven_title->plan_maximum }}</b></li>
                                    @foreach ($plan7 as $seven)
                                    <li>
                                        {{ $seven->plan_item }}
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="footer">
                                                                    <a href="{{ route('login') }}" class="btn btn-inverse btn-theme btn-block">Invest Now</a>
                                                                  </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end container -->
            </div>
            <!-- begin #team -->
            <!-- end #team -->
            <!-- begin #quote -->
            <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
                <!-- begin content-bg -->
                <div class="content-bg" style="background-image: url({{ asset('frontend_asset') }}/assets/img/bg/bg-002.jpg);" data-paroller="true" data-paroller-factor="0.5" data-paroller-factor-md="0.01" data-paroller-factor-xs="0.01"></div>
                <!-- end content-bg -->
                <!-- begin container -->
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-12 -->
                        <div class="col-md-12 quote">
                            <div class="row justify-content-center">
                                @foreach ($methods as $method)
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3 col-3">
                                    <img src="{{ asset('uploads/payment_method') }}/{{ $method->payment_thumbnail }}" class="mw-100 mh-100 mt-2" style="opacity: 0.6">
                                    <small style="font-size: 0.2em; margin-top: 5px">{{ $method->payment_title }}</small>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #quote -->
            <!-- beign #service -->
            <div id="service" class="content" data-scrollview="true" style="background: #b4b4b4">
                <!-- begin container -->
                <div class="container">
                    <h2 class="content-title">{{ $stand_heading->heading }}</h2>
                    <p class="content-desc">{{ $stand_heading->description }}</p>
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-4 -->
                        @foreach ($standouts as $standout)
                        <div class="col-md-4 col-sm-12">
                            <div class="service">
                                <div class="icon" data-animation="true" data-animation-type="bounceIn">
                                    <i class="{{ $standout->icon }}"></i>
                                </div>
                                <div class="info">
                                    <h4 class="title">{{ $standout->heading}}</h4>
                                    <p class="desc">{{ $standout->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end col-4 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #about -->
            <!-- beign #action-box -->
            <div id="action-box" class="pb-1 pt-4 content has-bg" data-scrollview="true">
                <!-- begin content-bg -->
                <div class="content-bg" style="background-image: url({{ asset('frontend_asset') }}/assets/img/bg/bg-action2.jpg)" data-paroller-factor="0.5" data-paroller-factor-md="0.01" data-paroller-factor-xs="0.01">
</div>
                <!-- end content-bg -->
                <!-- begin container -->
                <div class="container" data-animation="true" data-animation-type="fadeInRight">
                    <!-- begin row -->
                    <div class="row action-box justify-content-center">
                        <!-- begin col-9 -->
                        <div class="col-md-4 col-sm-4 col-12 pb-2 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 80 300 280" style="max-height: 230px">
                                <g>
                                    <g id="closedSuitcase" transform="translate(350, 0)">
                                        <g>
                                            <path d="M225.88,258.06H82.68a11.62,11.62,0,0,0-11.57,11.61v19.75H237.44V269.66a11.62,11.62,0,0,0-11.56-11.61" fill="#a67ee5"/>
                                            <path d="M225.88,258.06H82.68a11.62,11.62,0,0,0-11.57,11.61v19.75H237.44V269.66A11.62,11.62,0,0,0,225.88,258.06Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M267.11,258.06H119.23a11.81,11.81,0,0,0-11.93,11.61v19.75H279V269.66a11.81,11.81,0,0,0-11.93-11.61" fill="#a67ee5"/>
                                            <path d="M267.11,258.06H119.23a11.81,11.81,0,0,0-11.93,11.61v19.75H279V269.66A11.81,11.81,0,0,0,267.11,258.06Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M278.74,279.41a5.34,5.34,0,1,0-5.32-5.34,5.32,5.32,0,0,0,5.32,5.34" fill="#a67ee5"/>
                                            <ellipse cx="278.74" cy="274.07" rx="5.31" ry="5.34" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M277.62,269.66v9.75H266.89a5.72,5.72,0,0,1-5.71-5.73V258.06h4.88a11.61,11.61,0,0,1,11.56,11.61" fill="#a67ee5"/>
                                            <path d="M277.62,269.66v9.75H266.89a5.72,5.72,0,0,1-5.71-5.73V258.06h4.88A11.61,11.61,0,0,1,277.62,269.66Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        </g>
                                        <g>
                                            <path d="M280.29,318.62a5.72,5.72,0,1,0-5.12-5.69,5.43,5.43,0,0,0,5.12,5.69" fill="#a67ee5"/>
                                            <ellipse cx="280.29" cy="312.93" rx="5.12" ry="5.69" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17a11.84,11.84,0,0,1-11.94,11.67" fill="#a67ee5"/>
                                            <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17A11.84,11.84,0,0,1,230.22,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17a11.79,11.79,0,0,1-11.86,11.67" fill="#a67ee5"/>
                                            <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17A11.79,11.79,0,0,1,266.72,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9a4.27,4.27,0,0,1-4.35,4.16" fill="#a67ee5"/>
                                            <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9A4.27,4.27,0,0,1,215,314.07Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="#a67ee5"/>
                                            <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="#a67ee5"/>
                                            <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73c6.16,0,11.2-5.29,11.2-11.75" fill="#a67ee5"/>
                                            <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73C273.54,328.86,278.58,323.58,278.58,317.11Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                            <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58a1,1,0,0,1-1,1" fill="#a67ee5"/>
                                            <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58A1,1,0,0,1,100,301.54Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        </g>
                                        <g>
                                            <line x1="46.24" y1="329" x2="303.76" y2="329" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        </g>
                                        <animateTransform id="closedSuitcaseTranslate" attributeType="XML" attributeName="transform" type="translate" values="350; 0" fill="freeze" calcMode="spline" keySplines="0.4 0 0.2 1" dur="1.5s"/>
                                        <animate id="closedSuitcaseOpacity" attributeType="CSS" attributeName="opacity" from="0" to="1" dur="1.5s" fill="freeze"/>
                                    </g>
                                    <animate id="closedSuitcaseNone" begin="closedSuitcaseTranslate.end + 0.3s" attributeType="CSS" attributeName="opacity" from="1" to="0" dur="0.01s" fill="freeze"/>
                                </g>
                                <!--  open suitcase    -->
                                <g id="openSuitcase" opacity="0">
                                    <g>
                                        <path d="M253.93,232.11a5.69,5.69,0,1,0-5.69-5.69,5.69,5.69,0,0,0,5.69,5.69" fill="#a67ee5"/>
                                        <circle cx="253.93" cy="226.42" r="5.69" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <path d="M240.3,210.48H67.19a12,12,0,0,0-12,11.9V276a13,13,0,0,0,13,13h184V222.38a12,12,0,0,0-11.94-11.9" fill="#a67ee5"/>
                                        <path d="M240.3,210.48H67.19a12,12,0,0,0-12,11.9V276a13,13,0,0,0,13,13h184V222.38A12,12,0,0,0,240.3,210.48Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <path d="M70.24,289V225.49a15,15,0,0,1,15-15h0.5" fill="none" stroke="#fff" stroke-width="2"/>
                                    </g>
                                    <!--   balloon     -->
                                    <g transform="rotate(45, 80)">
                                        <g transform="translate(45, 80)">
                                            <path id="balloonLine" d="M62 209.842L62 210" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round">
                                                <animate begin="closedSuitcaseNone.end" attributeName="d" values="M62 209.842L62 210; M62 90 L62.5925 210;" dur="0.3s" fill="freeze"/>
                                            </path>
                                        </g>
                                        <g transform="translate(73, 250)">
                                            <g>
                                                <path d="M33.6284 84.1819L31.4514 87.9794C31.3366 88.184 31.2774 88.415 31.2799 88.6496C31.2824 88.8842 31.3464 89.1139 31.4655 89.316C31.5847 89.5181 31.7548 89.6853 31.9588 89.801C32.1628 89.9167 32.3937 89.9769 32.6282 89.9754L36.9982 89.9604C37.2319 89.9585 37.4611 89.8955 37.6629 89.7777C37.8648 89.6599 38.0323 89.4913 38.1489 89.2887C38.2654 89.0862 38.327 88.8566 38.3274 88.6229C38.3279 88.3892 38.2672 88.1594 38.1513 87.9564L35.9584 84.1739C35.8386 83.971 35.6679 83.803 35.4631 83.6865C35.2583 83.5701 35.0266 83.5092 34.7911 83.51C34.5555 83.5109 34.3242 83.5733 34.1202 83.6912C33.9163 83.809 33.7467 83.9782 33.6284 84.1819Z" fill="white"/>
                                                <path d="M34.5053 1.72842C43.2284 1.70113 51.6054 5.13812 57.7956 11.2841C63.9858 17.4301 67.4828 25.7823 67.518 34.5053C67.5804 52.6752 52.5959 83.4468 34.4361 83.5091C16.2762 83.5715 1.78076 52.8911 1.71842 34.7312C1.69378 26.0081 5.13331 17.6321 11.2812 11.4438C17.4291 5.25543 25.7823 1.76102 34.5053 1.72842ZM34.4998 0.118433C25.3532 0.160417 16.5966 3.82871 10.1512 10.3186C3.7057 16.8085 0.0976176 25.59 0.118429 34.7367C0.151075 44.2466 3.99427 56.8235 9.90846 66.7732C16.9492 78.6291 25.6516 85.1393 34.4315 85.1092C43.2115 85.079 52.009 78.5088 59.1782 66.6241C65.2439 56.6032 69.1505 43.9497 69.118 34.4998C69.076 25.3532 65.4077 16.5967 58.9179 10.1512C52.428 3.70571 43.6465 0.0976209 34.4998 0.118433Z" fill="white"/>
                                                <path d="M22.9386 34.7383C22.8762 16.5784 28.0556 1.83057 34.5056 1.80843C25.7826 1.84102 17.4293 5.33543 11.2815 11.5238C5.13358 17.7121 1.69405 26.0881 1.71869 34.8112C1.78106 52.9811 16.2664 83.6515 34.4363 83.5891L34.6063 83.5886C28.1757 83.4206 23.0008 52.8582 22.9386 34.7383Z" fill="#76ABFF"/>
                                                <path d="M67.5183 34.5853C67.4831 25.8623 63.9861 17.5101 57.7959 11.3641C51.6057 5.21811 43.2286 1.78113 34.5056 1.80843C40.9556 1.78628 46.2361 16.4982 46.2984 34.6581C46.3608 52.818 41.1749 83.156 34.7863 83.5679C52.7848 83.1162 67.5803 52.6352 67.5183 34.5853Z" fill="#1553B7"/>
                                                <path d="M46.2984 34.6581C46.2361 16.4982 40.9556 1.78628 34.5056 1.80842C28.0556 1.83057 22.8762 16.5784 22.9386 34.7383C23.0009 52.8982 28.1757 83.4106 34.6063 83.5886L34.7863 83.5879C41.1749 83.166 46.3604 52.718 46.2985 34.6681" fill="#3B7BF2"/>
                                                <path d="M27.3944 27.693C26.2671 27.6969 25.1662 28.0349 24.231 28.6645C23.2958 29.294 22.5683 30.1867 22.1404 31.2298C21.7126 32.2728 21.6036 33.4192 21.8274 34.5242C22.0511 35.6291 22.5974 36.6429 23.3973 37.4373C24.1972 38.2317 25.2147 38.7711 26.3212 38.9872C27.4276 39.2034 28.5733 39.0865 29.6133 38.6515C30.6534 38.2166 31.5411 37.4829 32.1642 36.5434C32.7873 35.6039 33.1178 34.5007 33.1139 33.3734C33.1565 32.6129 33.0374 31.8521 32.7644 31.141C32.4915 30.4299 32.071 29.7847 31.5306 29.248C30.9901 28.7113 30.3421 28.2952 29.6292 28.0272C28.9162 27.7591 28.1546 27.6452 27.3944 27.693ZM27.4219 35.6929C25.5619 35.6993 24.3587 34.7735 24.354 33.4135C24.3494 32.0535 25.5562 31.1193 27.4062 31.113C29.2561 31.1066 30.4793 32.0324 30.484 33.3924C30.4887 34.7524 29.2419 35.6867 27.4219 35.6929Z" fill="white"/>
                                                <path d="M41.5943 27.6442C41.92 27.6429 42.2397 27.7309 42.5188 27.8987C42.7979 28.0665 43.0256 28.3076 43.1772 28.5958C43.3287 28.8841 43.3983 29.2083 43.3783 29.5334C43.3584 29.8584 43.2496 30.1717 43.0639 30.4392L29.8004 49.8249C29.5143 50.1575 29.116 50.3735 28.6812 50.4318C28.2463 50.4901 27.8052 50.3867 27.4416 50.1411C27.078 49.8956 26.8172 49.5251 26.7088 49.0999C26.6004 48.6748 26.6519 48.2246 26.8536 47.835L40.1271 28.4493C40.2897 28.21 40.5085 28.0143 40.7643 27.8792C41.0201 27.744 41.3051 27.6737 41.5944 27.6742" fill="white"/>
                                                <path d="M43.1039 39.1591C41.9765 39.163 40.8756 39.5011 39.9404 40.1306C39.0052 40.7601 38.2777 41.6529 37.8499 42.6959C37.422 43.7389 37.3131 44.8854 37.5368 45.9903C37.7605 47.0952 38.3069 48.109 39.1068 48.9034C39.9067 49.6978 40.9242 50.2372 42.0306 50.4533C43.1371 50.6695 44.2827 50.5527 45.3228 50.1177C46.3628 49.6827 47.2505 48.9491 47.8737 48.0096C48.4968 47.07 48.8273 45.9669 48.8234 44.8395C48.8643 44.0795 48.7441 43.3193 48.4706 42.609C48.1971 41.8986 47.7765 41.2541 47.2365 40.7177C46.6964 40.1813 46.049 39.7652 45.3368 39.4966C44.6246 39.228 43.8636 39.113 43.1039 39.1591ZM43.1313 47.1591C41.2713 47.1655 40.0682 46.2396 40.0635 44.8796C40.0588 43.5196 41.2656 42.5855 43.1156 42.5791C44.9656 42.5728 46.1887 43.4686 46.1934 44.8585C46.1982 46.2485 44.9913 47.1527 43.1313 47.1591Z" fill="white"/>
                                                <animateTransform id="balloonStart" begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="translate" dur="0.3s" from="0 0" to="0 -165" fill="freeze"/>
                                                <animateTransform id="balloonRotateStart" begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.3s" from="60 30 90" to="0 30 90" additive="sum" fill="freeze"/>
                                                <animateTransform begin="balloonStart.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.6s" values="8 40 60; -5 40 80; 0 40 60" additive="sum" fill="freeze"/>
                                                <animateTransform begin="balloonStart.end - 0.1s" attributeType="XML" attributeName="transform" type="translate" dur="0.5s" additive="sum" values="0 25; 0 0; 0 5; 0 0" fill="freeze"/>
                                            </g>
                                        </g>
                                        <animateTransform begin="balloonStart.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.5s" values="-3 180 290; 1 180 290; 0 180 290" additive="sum" fill="freeze"/>
                                    </g>
                                    <!--    flowers    -->
                                    <g transform="rotate(55 180 290)">
                                        <g>
                                            <path d="M180.73,277.8s8.3-74.59,39.71-90" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path d="M217.95,187.12l9.27-24.49a22,22,0,0,1,8.72,3,7.87,7.87,0,0,1,9.72,12.33,22.14,22.14,0,0,1,.86,9.18l-26,3.3a2.45,2.45,0,0,1-2.6-3.29" fill="#3b7bf2"/>
                                            <path d="M178.24,287.63s6.89-44.68,37.95-56.53" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path d="M210.85,232l9-16.47a16.66,16.66,0,0,1,6.13,2.93,5.93,5.93,0,0,1,4-.42,5.67,5.67,0,0,1,4.26,6.85,5.54,5.54,0,0,1-2.29,3.23,15.1,15.1,0,0,1-.21,6.58l-19.34-.11a1.76,1.76,0,0,1-1.6-2.58" fill="#3b7bf2"/>
                                        </g>
                                        <animateTransform begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.6s" values="55 180 290; -13 180 290; 10 180 290; 0 180 290" fill="freeze"/>
                                    </g>
                                    <g transform="rotate(55 180 290)">
                                        <g>
                                            <path d="M141.77,204.16c24.1,32.45,35.81,84,35.81,84" fill="none" stroke="#3b7bf2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path d="M125.73,196.22c6.54,7.51,17.16,9,17.16,9s0-10.72-6.53-18.22-17.17-9-17.17-9,0,10.72,6.54,18.22" fill="#76abff"/>
                                            <path d="M153.17,206.54c-2.69,9.58,1.91,19.27,1.91,19.27s9-5.86,11.67-15.45-1.91-19.27-1.91-19.27-9,5.86-11.67,15.45" fill="#3b7bf2"/>
                                            <path d="M135.82,227.71c9.59,2.7,19.26-1.91,19.26-1.91s-5.86-9-15.45-11.67S120.37,216,120.37,216s5.87,9,15.45,11.67" fill="#3b7bf2"/>
                                            <path d="M166.1,232.52c-3.41,9.36.47,19.35,0.47,19.35s9.39-5.18,12.79-14.53S178.89,218,178.89,218s-9.39,5.18-12.79,14.53" fill="#1553b7"/>
                                            <path d="M147.22,252.35c9.36,3.4,19.35-.47,19.35-0.47s-5.18-9.39-14.54-12.79-19.35.47-19.35,0.47,5.18,9.39,14.54,12.79" fill="#1553b7"/>
                                        </g>
                                        <animateTransform begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="1s" values="55 180 290; -13 180 290; 8 180 290; -5 180 290; 0 180 290" fill="freeze"/>
                                    </g>
                                    <g transform="rotate(35 180 290)">
                                        <g>
                                            <path d="M183.79,264.77c2.3,9.1-2.27,18.12-2.27,18.12s-8.32-5.74-10.63-14.85,2.27-18.12,2.27-18.12,8.32,5.75,10.63,14.85" fill="#3b7bf2"/>
                                            <path d="M199.63,285.16c-9.11,2.31-18.12-2.27-18.12-2.27s5.74-8.32,14.85-10.63,18.12,2.27,18.12,2.27-5.75,8.32-14.85,10.63" fill="#3b7bf2"/>
                                            <path d="M188.56,271.67a144.15,144.15,0,0,0-10.31,16.61" fill="none" stroke="#3b7bf2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path d="M203.69,264.19c-6.17,7.08-16.19,8.44-16.19,8.44s0-10.11,6.16-17.18S209.85,247,209.85,247s0,10.11-6.16,17.19" fill="#76abff"/>
                                        </g>
                                        <animateTransform begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="1.2s" values="35 180 290; -8 180 290; 10 180 290; -5 180 290; 0 180 290;" fill="freeze"/>
                                    </g>
                                    <!--   bird     -->
                                    <g transform="translate(-75, 85)">
                                        <path fill="#01caca" transform="translate(260, 167)" d="M17.2 17.8C17.1925 16.6869 17.5649 15.6045 18.2559 14.7318C18.9468 13.859 19.9148 13.2481 21 13L42.07 7.60001C34.29 22.44 22.89 22.67 22.07 22.67C20.7791 22.6568 19.5456 22.1348 18.6374 21.2173C17.7293 20.2998 17.2199 19.0609 17.22 17.77" fill="#fff">
                                            <animate attributeName="d" values="M17.2 17.8C17.1925 16.6869 17.5649 15.6045 18.2559 14.7318C18.9468 13.859 19.9148 13.2481 21 13L42.07 7.60001C34.29 22.44 22.89 22.67 22.07 22.67C20.7791 22.6568 19.5456 22.1348 18.6374 21.2173C17.7293 20.2998 17.2199 19.0609 17.22 17.77;M17.0929 21.176C16.8385 20.0923 16.9126 18.9651 17.3031 17.9805C17.6936 16.996 18.3772 16.213 19.2407 15.7611V15.7611L35.8779 6.41805C32.5978 22.3909 22.9963 24.822 22.3019 24.9807C21.206 25.2178 20.0451 24.9477 19.0717 24.229C18.0982 23.5104 17.3908 22.4014 17.1031 21.1429;M18.1903 20.2297C16.9963 20.205 15.839 20.0194 14.9098 19.7037C13.9805 19.3881 13.3349 18.9611 13.0796 18.4935V18.4935L7.49731 9.39937C23.3374 13.08 23.4706 17.9328 23.4624 18.2814C23.4354 18.83 22.8632 19.3413 21.87 19.7044C20.8769 20.0675 19.543 20.2529 18.1583 20.2205" dur="0.15s" repeatCount="indefinite"/>
                                        </path>
                                        <path fill="#01caca" d="M262.24,169.86l10.76,0a4.65,4.65,0,0,1,4.41-2.9,3.91,3.91,0,0,1,3.48,1.76,13.39,13.39,0,0,1,1.37,2.59c0.63,1.57,4,15.8,5.89,19.16,1.1,2,4.39,7.16,4.39,7.16a2.3,2.3,0,0,1,.31,1.15V208s-3.11-1.08-3.11-3.91v-6.53c-1.91.27-6-1.65-8.33-2.88a12.82,12.82,0,0,1-6.36-6.76,12.33,12.33,0,0,1-.11-9.16,7.13,7.13,0,0,0,.79-2.91c-0.06-1.14-1.39-2.72-2.18-4.05Z" fill="#fff"/>
                                        <animateTransform id="endPathBird" begin="closedSuitcaseNone.end" attributeName="transform" type="translate" to="0, 0" dur="0.5s" fill="freeze"/>
                                        <animateTransform begin="endPathBird.end" attributeName="transform" type="rotate" values="0 240 190; -8 220 160; 0 250 180; 3 220 160; 0 240 190" dur="2.5s" repeatDur="indefinite"/>
                                    </g>
                                    <!--  lower part of the suitcase      -->
                                    <g>
                                        <path d="M280.29,318.62a5.72,5.72,0,1,0-5.12-5.69,5.43,5.43,0,0,0,5.12,5.69" fill="#a67ee5"/>
                                        <ellipse cx="280.29" cy="312.93" rx="5.12" ry="5.69" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17a11.84,11.84,0,0,1-11.94,11.67" fill="#a67ee5"/>
                                        <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17A11.84,11.84,0,0,1,230.22,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17a11.79,11.79,0,0,1-11.86,11.67" fill="#a67ee5"/>
                                        <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17A11.79,11.79,0,0,1,266.72,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9a4.27,4.27,0,0,1-4.35,4.16" fill="#a67ee5"/>
                                        <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9A4.27,4.27,0,0,1,215,314.07Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="#a67ee5"/>
                                        <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="#a67ee5"/>
                                        <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73c6.16,0,11.2-5.29,11.2-11.75" fill="#a67ee5"/>
                                        <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73C273.54,328.86,278.58,323.58,278.58,317.11Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                        <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58a1,1,0,0,1-1,1" fill="#a67ee5"/>
                                        <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58A1,1,0,0,1,100,301.54Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                                    </g>
                                    <g>
                                        <line x1="46.24" y1="329" x2="303.76" y2="329" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                    <animate begin="closedSuitcaseNone.end" attributeType="CSS" attributeName="opacity" from="0" to="1" dur="0.01s" fill="freeze"/>
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <h3 class="pb-2 d-none d-md-inline-block">{{ $refferal->heading }}</h3>
                            <p class="text-justify desc">{{ $refferal->description }}</p>
                        </div>
                        <!-- end col-9 -->
                        <!-- begin col-3 -->
                        <!-- end col-3 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #action-box -->
            <div id="team" class="content" data-scrollview="true" style="background: #b4b4b4">
                <!-- begin container -->
                <div class="container">
                    <h2 class="content-title">{{ $use_heading->heading }}</h2>
                    <p class="content-desc">{{ $use_heading->description }}</p>
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-4 -->
                        @foreach ($uses as $use)
                        <div class="col-md-4 col-sm-12">
                            <!-- begin team -->
                            <div class="team">
                                <div class="image" data-animation="true" data-animation-type="flipInX">
                                    <img src="{{ asset('uploads/how_to_use') }}/{{ $use->thumbnail }}" width="128px" alt=""/>
                                </div>
                                <div class="info">
                                    <h3 class="name">{{ $use->heading }}</h3>
                                    <div class="title text-primary" style="background-color: #171717; padding: 3px; border-radius: 3px; width: 50%; margin-left: auto; margin-right: auto;">
                                        <b>{{ $use->stap_title }}</b>
                                    </div>
                                    <p>{{ $use->description }}</p>
                                </div>
                            </div>
                            <!-- end team -->
                        </div>
                        @endforeach
                        <!-- end col-4 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- begin #work -->
            <!-- end #work -->
            <!-- begin #client -->
            <div id="client" class="pb-3 pt-4 content has-bg bg-green" data-scrollview="true">
                <!-- begin content-bg -->
                <div class="content-bg" style="background-image: url({{ asset('frontend_asset') }}/assets/img/bg/bg-faq.jpg)" data-paroller-factor="0.5" data-paroller-factor-md="0.01" data-paroller-factor-xs="0.01">
</div>
                <!-- end content-bg -->
                <!-- begin container -->
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-title">Short FAQ</h2>
                    <!-- begin carousel -->
                    <div class="row text-center">
                        @foreach ($faqs as $faq)
                        <div class="col-md-6 text-white text-center align-items-center">    
                            <div class="info">
                                <h4 class="h6 title text-left text-primary">{{ $faq->question }}</h4>
                                <p class="desc text-justify">{{ $faq->answer }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- begin carousel-inner -->
                    <!-- end carousel-inner -->
                    <!-- begin carousel-indicators -->
                    <!-- end carousel-indicators -->
                    <!-- end carousel -->
                </div>
                <!-- end containter -->
            </div>
            <!-- end #client -->
            <!-- begin #pricing -->
            <!-- end #pricing -->
            <!-- begin #contact -->
            <div id="contact" class="content" data-scrollview="true" style="background: #b4b4b4">
                <!-- begin container -->
                <div class="container">
                    <h2 class="content-title">{{ $contact_heading->heading }}</h2>
                    <p class="content-desc">{{ $contact_heading->description }}</p>
                    <!-- begin row -->
                    <div class="row">
                         <!-- begin col-6 -->
                         <div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
                             <div class="row">
                                 <div class="col-md-6 col-6">
                                     <p> {{ $contact_info->address }}
                                        <br>
                                        <a href="mailto:{{ $contact_info->email }}" class="text-primary">{{ $contact_info->email }}</a></p>
                                 </div>
                                 <div style="cursor: pointer" onclick="location.href='#';" class="col-md-6 col-6">
                                     <div class="image" data-animation="true" data-animation-type="flipInY">
                                         <img src="{{ asset('frontend_asset') }}/images/press_icon.png" width="98px" alt="step2"/>
                                         <span class="text-teal d-none d-md-inline-block" style="background-color: #171717; padding: 3px; border-radius: 3px; margin-left: auto; margin-right: auto;"><b>Press Releases</b></span>
                                         <p></p>
                                     </div>
                                 </div>
                             </div>
                            <h3 class="mb-3">Legal Documents</h3>
                            <div class="row">
                                <div style="cursor: pointer" onclick="location.href='{{ asset('frontend_asset') }}/pdf/axtcertificate.pdf';" class="col-xl-4 col-md-4 col-sm-4 col-xs-4 col-4">
                                    <img src="{{ asset('frontend_asset') }}/images/cex.jpg" width="97px">
                                    <p class="mt-2">	Company Certificate </p>
                                </div>
                                <div style="cursor: pointer" onclick="location.href='{{ asset('frontend_asset') }}/pdf/axtc.pdf';" class="col-xl-4 col-md-4 col-sm-4 col-xs-4 col-4">
                                    <img src="{{ asset('frontend_asset') }}/images/tax.jpg" width="97px">
                                    <p class="mt-2">Terms & Conditions</p>
                                </div>
                                <div style="cursor: pointer" onclick="location.href='{{ asset('frontend_asset') }}/pdf/axtpp.pdf';" class="col-xl-4 col-md-4 col-sm-4 col-xs-4 col-4">
                                    <img src="{{ asset('frontend_asset') }}/images/pax.jpg" width="97px">
                                    <p class="mt-2">Privacy Policy</p>
                                </div>
                            </div>
                        </div>
                        <!-- end col-6 -->

                        
                          <script language=javascript>
                          {if $userinfo.logged == 1}

                          function checkform() {
                            if (document.mainform.message.value == '') {
                              alert("Please type your message!");
                              document.mainform.message.focus();
                              return false;
                            }
                            return true;
                          }

                          {else}

                          function checkform() {
                            if (document.mainform.name.value == '') {
                              alert("Please type your full name!");
                              document.mainform.name.focus();
                              return false;
                            }
                            if (document.mainform.email.value == '') {
                              alert("Please enter your e-mail address!");
                              document.mainform.email.focus();
                              return false;
                            }
                            if (document.mainform.message.value == '') {
                              alert("Please type your message!");
                              document.mainform.message.focus();
                              return false;
                            }
                            return true;
                          }

                          {/if}
                          </script>
                          





                        <!-- begin col-6 -->
                        <div class="col-md-6 form-col" data-animation="true" data-animation-type="fadeInRight">
                            @if (session('message_send'))
                            <p style="margin-left: 80px;" class="text-success">{{ session('message_send') }}</p>
                            @endif
                            <form class="form-horizontal" method="POST" action="{{ route('messagepost') }}">
                                @csrf
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3 text-md-right">Name
                                        <span class="text-primary">*</span>
                                    </label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control" style="background: #cccccc; border: none;" name="name" value="">
                                     </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3 text-md-right">Email
                                        <span class="text-primary">*</span>
                                    </label>
                                    <div class="col-md-9">
                                                                                <input type="text" class="form-control" style="background: #cccccc; border: none;" name="email" value="">
                                        
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3 text-md-right">Message
                                        <span class="text-primary">*</span>
                                    </label>
                                    <div class="col-md-9">
                                        <textarea name="message" class="form-control" style="background: #cccccc; border: none;" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3 text-md-right"></label>
                                    <div class="col-md-9 text-left">
                                        <button type="submit" class="btn btn-theme btn-primary btn-block">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end col-6 -->




                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end #contact -->
            <!-- begin #footer -->
            <div id="footer" class="footer">
                <div class="container">
                    <div class="footer-brand">
                        <img src="{{ asset('frontend_asset') }}/images/log002.png" width="200px">
                    </div>
                    <p>
					Copyright &copy; {{ Carbon\Carbon::now()->format('Y') }} AX TRADER LTD.<br/>
					Please read the <a href="{{ asset('frontend_asset') }}/pdf/axtc.pdf" target="_blank">Terms & Conditions</a> before joining </p>
                    <p class="social-list">
                        @foreach ($socials as $social)
                        <a target="_blank" href="{{ $social->social_link }}"><i class="{{ $social->social_icon }}"></i></a>
                        @endforeach
                </div>
            </div>
            <!-- end #footer -->
            <!-- begin theme-panel -->
            <!-- end theme-panel -->
        </div>
        <!-- end #page-container -->
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{ asset('frontend_asset') }}/assets/js/one-page-parallax/app.min.js"></script>
        <!--Start of Tawk.to Script-->

  <!--End of Tawk.to Script-->
        <!-- ================== END BASE JS ================== -->
    </body>
</html>


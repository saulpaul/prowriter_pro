<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Sign Up</title>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href="assets/style/style.css" rel="stylesheet">
    <link href="assets/style/mainer.style.css" rel="stylesheet">
</head>

<body class="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="text/javascript">
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(assets/static/images/bg.jpg)">
          <div class="relaix">
            <div class="sliderComentary">
				<h1>
					Get your paper done or written by a pro.
				</h1>
           		<p>
           			Place an order, choose the most suitable essay writer and enjoy the process of your paper being written online. Pay only for approved parts of your paper.
           		</p>
           		<div class="diver">
           			<span>
           				Prowritters
           			</span>
           		</div>
           		<botton class="log btn btn-primary" value=""> Login To My Account</botton>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
            <h4 class="fw-300 c-grey-900 mB-40 titl" style="font-family:cabin;color:lightblue;">Prowritter Create an Account</h4>
            <form>
                <div class="form-group">
                    <label class="text-normal text-dark">Username</label>
                    <input type="text" class="form-control" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Email Address</label>
                    <input type="email" class="form-control" placeholder="name@email.com">
                </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                <label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Remember Me</span></label>
                            </div>
                        </div>
                        <div class="peer">
                            <button class="btn btn-primary">Create an Account</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!--a pop over user login field in any page-->
<div id="loginnerform">
	<div class="inersub">
		<!--inner sub-->
		<div class="loginheader">
			<h3>SIGN INTO YOUR ACCOUNT</h3>
			<div class="closerDiverLog">
				x
			</div>
		</div>
		<form class="signphome">
			<div class="form-group">
				<label class="text-normal text-dark">Username</label>
				<input type="email" class="form-control" placeholder="John Doe">
			</div>
			<div class="form-group">
				<label class="text-normal text-dark">Password</label>
				<input type="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<div class="peers ai-c jc-sb fxw-nw">
					<div class="peer">
						<div class="checkbox checkbox-circle checkbox-info peers ai-c">
							<input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
							<label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Remember Me</span></label>
						</div>
					</div>
					<div class="peer">
						<button class="btn btn-primary">Login</button>
					</div>
				</div>
			</div>
		</form>	
	</div>
		
</div>

<!--end-->
    <script type="text/javascript" src="assets/script/vendor.js"></script>
    <script type="text/javascript" src="assets/script/bundle.js"></script>
    <script type="text/javascript" src="assets/script/main.js"></script>
    <script type="text/javascript" src="assets/script/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
				$(".closerDiverLog").click(function(){
					$('#loginnerform').fadeOut();
				});
			});
		$(document).ready(function(){
				$(".log").click(function(){
					$('#loginnerform').fadeIn();
				});
			});
	</script>
</body>
</html>

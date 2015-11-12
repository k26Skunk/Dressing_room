<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Dressing Room</title>
	
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
	
	<!-- Custom Fonts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<header id="top">
		
		<div class="top-line">
			
			<div class="container">
				
				<div class="row">
					
					<div class="logo col-xs-5 col-sm-6 col-md-2 col-sm-9">

						<a href="index.php">
							<img class="img-responsive" src="img/header/logo.png" alt="Dressing Room" title="Dressing Room">
						</a>
						<p>Изготовление</p>
						<p>шкафов-купе на заказ</p>

					</div>

					<div class="col-md-2 col-md-push-8 hidden-sm hidden-xs block_right">
						
						<div class="top-line_phone">
							<p>+38(093) 922 96 64</p>
							<p>+38(068) 823 10 45</p>
							<p>+38(048) 703 75 90</p>
							<p><a href="#callback" data-toggle="modal">Заказать звонок</a></p>
						</div>

						

					</div>

					<div class="col-md-8 col-md-pull-2 hidden-sm hidden-xs">
						
						<nav class="top-mnu text-center text-uppercase">
							
							<ul>
								<li><a href="#gallery">Наши работы</a></li>
								<li><a href="#calculate">Калькулятор</a></li>
								<li><a href="#reviews">Отзывы</a></li>
								<li><a href="#why_we">Почему мы</a></li>
								<li><a href="#features">Преимущества</a></li>
								<li><a href="#contacts">Контакты</a></li>
							</ul>
						
						</nav>

					</div>

					<div class="hidden-md hidden-lg col-sm-2 col-sm-push-5 col-xs-1 col-xs-push-4">
						
						<a href="#" class="mnu_button toggle-mnu"><span></span></a>

					</div>

					<nav class="top-menu hidden-md hidden-lg">
						
						<ul>
							<li><a href="#gallery">Наши работы</a></li>
							<li><a href="#calculate">Калькулятор</a></li>
							<li><a href="#reviews">Отзывы</a></li>
							<li><a href="#why_we">Почему мы</a></li>
							<li><a href="#features">Преимущества</a></li>
							<li><a href="#contacts">Контакты</a></li>
						</ul>
					
					</nav>
				
				</div>

			</div>

		</div>

		<div class="header-wrap">
			
			<div class="container">
				
				<div class="row">
					
					<div class="left_block col-lg-7 col-md-8 col-sm-12 col-xs-12 text-center">
						
						<h1>Закажите ваш личный шкаф-купе <br> по индивидуальному дизайну</h1>
						
						<div class="header_features">
							
							<div class="col-xs-4">
								<img src="img/header/feat_1.png" alt="От 5 дней" title="От 5 дней">
								<p>срок	<br> изготовления</p>
							</div>
							
							<div class="col-xs-4">
								<img src="img/header/feat_2.png" alt="1 день" title="1 день">
								<p>доставка <br> и установка</p>
							</div>
							
							<div class="col-xs-4">
								<img src="img/header/feat_3.png" alt="0 руб." title="0 руб.">
								<p>выезд дизайнера-конструктора</p>
							</div>
						
						</div>
					
					</div>
					
					<div class="rb_wrapper col-lg-4 col-lg-push-1 col-md-4 col-md-push-0 col-sm-12 col-xs-12">
						
						<div class="right_block">

							<h2>Заполните эту форму и получите <b>абсолютно бесплатно</b> дизайн вашего шкафа-купе!</h2>
							
							<form class="forms" action="mail/design.php" method="POST">
								<label>
									<input type="text" name="name" required placeholder="Ваше имя">
								</label>
								<label>
									<input type="text" name="phone" required placeholder="Ваш телефон">
								</label>
								<label>
									<input type="text" name="email" required placeholder="Ваш e-mail">
								</label>
								<div class="button_submit">
									<button type="submit" name="send">Отправить заявку</button>
								</div>
							</form>
						
						</div>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</header>

	<div id="gallery">
		
		<div class="container">

			<div class="row">

				<h3>Наши шкафы-купе</h3>

				<div class="col-sm-5 hidden-xs" id="slider-thumbs">

					<div id="tab" class="btn-group btn-group-justified col-lg-12" data-toggle="buttons-radio">
						<a href="#one" class="btn btn-large btn-default active" data-toggle="tab">1-12</a>
						<a href="#two" class="btn btn-large btn-default" data-toggle="tab">13-24</a>
						<a href="#three" class="btn btn-large btn-default" data-toggle="tab">25-36</a>
						<a href="#four" class="btn btn-large btn-default"  data-toggle="tab">37-41</a>
					</div>


					<div class="tab-content">

						<div class="tab-pane active" id="one">
							
							<ul class="hide-bullets">

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-0"><img src="img/gallery/1_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-1"><img src="img/gallery/2_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-2"><img src="img/gallery/3_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-3"><img src="img/gallery/4_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-4"><img src="img/gallery/5_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-5"><img src="img/gallery/6_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-6"><img src="img/gallery/7_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-7"><img src="img/gallery/8_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-8"><img src="img/gallery/9_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-9"><img src="img/gallery/10_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-10"><img src="img/gallery/11_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-11"><img src="img/gallery/12_sm.jpg"></a>
			                    </li>

	                		</ul>
						
						</div>

						<div class="tab-pane" id="two">
							
							<ul class="hide-bullets">

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-12"><img src="img/gallery/13_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-13"><img src="img/gallery/14_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-14"><img src="img/gallery/15_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-15"><img src="img/gallery/16_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-16"><img src="img/gallery/17_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-17"><img src="img/gallery/18_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-18"><img src="img/gallery/19_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-19"><img src="img/gallery/20_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-20"><img src="img/gallery/21_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-21"><img src="img/gallery/22_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-22"><img src="img/gallery/23_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-23"><img src="img/gallery/24_sm.jpg"></a>
			                    </li>

	                		</ul>
						
						</div>

						<div class="tab-pane" id="three">
							
							<ul class="hide-bullets">

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-24"><img src="img/gallery/25_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-25"><img src="img/gallery/26_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-26"><img src="img/gallery/27_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-27"><img src="img/gallery/28_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-28"><img src="img/gallery/29_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-29"><img src="img/gallery/30_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-30"><img src="img/gallery/31_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-31"><img src="img/gallery/32_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-32"><img src="img/gallery/33_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-33"><img src="img/gallery/34_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-34"><img src="img/gallery/35_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-35"><img src="img/gallery/36_sm.jpg"></a>
			                    </li>

	                		</ul>
						
						</div>

						<div class="tab-pane" id="four">
							
							<ul class="hide-bullets">

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-36"><img src="img/gallery/37_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-37"><img src="img/gallery/38_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-38"><img src="img/gallery/39_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-39"><img src="img/gallery/40_sm.jpg"></a>
			                    </li>

			                    <li class="col-sm-4">
			                        <a class="thumbnail" id="carousel-selector-40"><img src="img/gallery/41_sm.jpg"></a>
			                    </li>

	                		</ul>
						
						</div>

					</div>

	                
            
            	</div>
            
	            <div class="col-sm-7">
	                
	                <div class="col-xs-12" id="slider">

	                    <div class="row">
	                        
	                        <div class="col-sm-12" id="carousel-bounding-box">
	                            
	                            <div class="carousel slide" id="myCarousel">

	                                <div class="carousel-inner">
	                                    
	                                    <div class="active item" data-slide-number="0">
	                                        <img src="img/gallery/1.jpg">
	                                    </div>

	                                    <div class="item" data-slide-number="1">
	                                        <img src="img/gallery/2.jpg">
	                                    </div>

	                                    <div class="item" data-slide-number="2">
	                                        <img src="img/gallery/3.jpg">
                                        </div>

	                                    <div class="item" data-slide-number="3">
	                                        <img src="img/gallery/4.jpg">
                                        </div>

	                                    <div class="item" data-slide-number="4">
	                                        <img src="img/gallery/5.jpg">
                                        </div>

	                                    <div class="item" data-slide-number="5">
	                                        <img src="img/gallery/6.jpg">
                                        </div>
	                                    
	                                    <div class="item" data-slide-number="6">
	                                        <img src="img/gallery/7.jpg">
                                        </div>
	                                    
	                                    <div class="item" data-slide-number="7">
	                                        <img src="img/gallery/8.jpg">
                                        </div>
	                                    
	                                    <div class="item" data-slide-number="8">
	                                        <img src="img/gallery/9.jpg">
                                        </div>
	                                    
	                                    <div class="item" data-slide-number="9">
	                                        <img src="img/gallery/10.jpg">
                                        </div>
	                                    
	                                    <div class="item" data-slide-number="10">
	                                        <img src="img/gallery/11.jpg">
                                        </div>
	                                    
	                                    <div class="item" data-slide-number="11">
	                                        <img src="img/gallery/12.jpg">
                                        </div>

                                        <div class="item" data-slide-number="12">
	                                        <img src="img/gallery/13.jpg">
                                        </div>

                                        <div class="item" data-slide-number="13">
	                                        <img src="img/gallery/14.jpg">
                                        </div>

                                        <div class="item" data-slide-number="14">
	                                        <img src="img/gallery/15.jpg">
                                        </div>

                                        <div class="item" data-slide-number="15">
	                                        <img src="img/gallery/16.jpg">
                                        </div>

                                        <div class="item" data-slide-number="16">
	                                        <img src="img/gallery/17.jpg">
                                        </div>

                                        <div class="item" data-slide-number="17">
	                                        <img src="img/gallery/18.jpg">
                                        </div>

                                        <div class="item" data-slide-number="18">
	                                        <img src="img/gallery/19.jpg">
                                        </div>

                                        <div class="item" data-slide-number="19">
	                                        <img src="img/gallery/20.jpg">
                                        </div>

                                        <div class="item" data-slide-number="20">
	                                        <img src="img/gallery/21.jpg">
                                        </div>

                                        <div class="item" data-slide-number="21">
	                                        <img src="img/gallery/22.jpg">
                                        </div>

                                        <div class="item" data-slide-number="22">
	                                        <img src="img/gallery/23.jpg">
                                        </div>

                                        <div class="item" data-slide-number="23">
	                                        <img src="img/gallery/24.jpg">
                                        </div>

                                        <div class="item" data-slide-number="24">
	                                        <img src="img/gallery/25.jpg">
                                        </div>

                                        <div class="item" data-slide-number="25">
	                                        <img src="img/gallery/26.jpg">
                                        </div>

                                        <div class="item" data-slide-number="26">
	                                        <img src="img/gallery/27.jpg">
                                        </div>

                                        <div class="item" data-slide-number="27">
	                                        <img src="img/gallery/28.jpg">
                                        </div>

                                        <div class="item" data-slide-number="28">
	                                        <img src="img/gallery/29.jpg">
                                        </div>

                                        <div class="item" data-slide-number="29">
	                                        <img src="img/gallery/30.jpg">
                                        </div>

                                        <div class="item" data-slide-number="30">
	                                        <img src="img/gallery/31.jpg">
                                        </div>

                                        <div class="item" data-slide-number="31">
	                                        <img src="img/gallery/32.jpg">
                                        </div>

                                        <div class="item" data-slide-number="32">
	                                        <img src="img/gallery/33.jpg">
                                        </div>

                                        <div class="item" data-slide-number="33">
	                                        <img src="img/gallery/34.jpg">
                                        </div>

                                        <div class="item" data-slide-number="34">
	                                        <img src="img/gallery/35.jpg">
                                        </div>

                                        <div class="item" data-slide-number="35">
	                                        <img src="img/gallery/36.jpg">
                                        </div>

                                        <div class="item" data-slide-number="36">
	                                        <img src="img/gallery/37.jpg">
                                        </div>

                                        <div class="item" data-slide-number="37">
	                                        <img src="img/gallery/38.jpg">
                                        </div>

                                        <div class="item" data-slide-number="38">
	                                        <img src="img/gallery/39.jpg">
                                        </div>

                                        <div class="item" data-slide-number="39">
	                                        <img src="img/gallery/40.jpg">
                                        </div>

                                        <div class="item" data-slide-number="40">
	                                        <img src="img/gallery/41.jpg">
                                        </div>

                                    </div>

	                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	                                    <span class="glyphicon glyphicon-chevron-left"></span>
	                                </a>
	                                
	                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	                                    <span class="glyphicon glyphicon-chevron-right"></span>
	                                </a>
	                            
	                            </div>
	                        
	                        </div>
	                    
	                    </div>
	                
	                </div>
	            
	            </div>
			
			</div>
		
		</div>
	
	</div>

	<div id="calculate">
		
		<div class="container">

			<div class="row">
				
				<div class="col-xs-12">
					<h3>Калькулятор</h3>
					<p class="text-center">Выберите габариты и декор и узнайте, сколько будет <br> стоить шкаф или двери вашей мечты!</p>
				</div>
			
			</div>
			
			<div class="row">

				<form action="mail/mail.php" method="POST">

					<div class="col-md-4 inputs">

						<div>
							<label for="height">Высота (метры)</label>
							<input id="height" name="height" type="range" min="0.1" max="3" step="0.1" value="0.5" data-rangeslider>
							<p><output></output></p>
						</div>

						<div>
							<label for="height">Ширина (метры)</label>
							<input id="height" name="width" type="range" min="0.1" max="3" step="0.1" value="0.5" data-rangeslider>
							<p><output></output></p>
						</div>

						<div>
							<label for="depth">Глубина (метры)</label>
							<input id="depth" name="depth" type="range" min="0.1" max="3" step="0.1" value="0.5" data-rangeslider>
							<p><output></output></p>
						</div>

						<div>
							<label for="range">Количество (шт.)</label>
							<input id="range" type="range" name="count" min="1" max="6" step="1" value="1" data-rangeslider>
							<p><output></output></p>
						</div>
					
					</div>
								

					<div class="col-md-4 col-sm-12 rads">
						
						<div class="col-md-12 col-sm-6">
							
							<p>
								<input type="radio" id="r1" name="rr" value="Без декора" />
								<label for="r1"><span></span>Без декора</label>
							</p>
							
							<p>
								<input type="radio" id="r2" name="rr" value="Зеркала" />
								<label for="r2"><span></span>Зеркала</label>
							</p>
							
							<p>
								<input type="radio" id="r3" name="rr" value="Пескоструйный рисунок" />
								<label for="r3"><span></span>Пескоструйный рисунок</label>
							</p>
							
							<p>
								<input type="radio" id="r4" name="rr" value="Матовые стекла" />
								<label for="r4"><span></span>Матовые стекла</label>
							</p>
						
						</div>
						
						<div class="col-md-12 col-sm-6">
							
							<p>
								<input type="radio" id="r5" name="rr" value="Крашенные стёкла" />
								<label for="r5"><span></span>Крашенные стёкла</label>
							</p>
							
							<p>
								<input type="radio" id="r6" name="rr" value="Фотопечать" />
								<label for="r6"><span></span>Фотопечать</label>
							</p>
							
							<p>
								<input type="radio" id="r7" name="rr" value="ДСП - декоры" />
								<label for="r7"><span></span>ДСП - декоры</label>
							</p>
							
							<p>
								<input type="radio" id="r8" name="rr" value="Тонированное зеркало" />
								<label for="r8"><span></span>Тонированное зеркало</label>
							</p>
						
						</div>
					
					</div>
									
					<div class="col-md-4">
						
						<div class="form-area">
							
							<div class="form-inline text-center">
								
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Ваше имя" required>
								</div>

								<div class="form-group">
									<input type="text" name="tell" class="form-control tell" placeholder="Ваш телефон" pattern="^\d{10}$" title="0933888111" required>
								</div>
								
								<div class="form-group">
									<input type="text" name="email" class="form-control name" placeholder="Ваш e-mail" required>
								</div>
						
								<div class="button_submit">
									<button type="submit" name="send" class="feedback">Получить рассчет</button>
								</div>
							
							</div>
						
						</div>
					
					</div>

				</form>

			</div>

		</div>
	
	</div>

	<div id="reviews">
		
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12">
					<h3>Отзывы клиентов</h3>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					
					<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
					
					<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
						
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#fade-quote-carousel" data-slide-to="1"></li>
							<li data-target="#fade-quote-carousel" data-slide-to="2"></li>
						</ol>
						<!-- Carousel items -->
						
						<div class="carousel-inner">
							
							<div class="item active">
								<div class="profile-circle">
									<img src="img/reviews/1.jpg" alt="">
								</div>
								<blockquote>
									<p>" Ох и повезло мне! Два огромных, красивых шкафа-купе, и деньги за которые мне не считала ни одна компания или мастера! Да и дело, в общем, не в деньгах, а в отношении ребят к своей работе: профессионально, вежливо, педантично, как с людьми, которых давно знаешь. Спасибо огромное, Денис! Я уверена, мы еще увидимся! Твои шкафы прекрасны! ;) "</p>
									<p class="rev_name">Марина Анатольевна</p>
								</blockquote>
							</div>
							
							<div class="item">
								<div class="profile-circle">
									<img src="img/reviews/2.jpg" alt="">
								</div>
								<blockquote>
									<p>" У нас была непростая задача: кривые стены и полы, дополнительные, уже построенные стенки, и небольшой бюджет. Денис справился на 100% ! Два прекрасных, вместительных шкафа. За полтора года эксплуатации не обнаружено никаких недостатков. Особенно хотела бы отметить следующее: внимательное отношение к заказчику, его требованиям и пожеланиям, быстрое выполнение работы, отличное качество. Уже неоднократно рекомендовала Дениса и его коллег своим знакомым, потому что шкафы прекрасные. Большое спасибо! "</p>
									<p class="rev_name">Света и Олег</p>
								</blockquote>
							</div>
							
							<div class="item">
								<div class="profile-circle">
									<img src="img/reviews/3.jpg" alt="">
								</div>
								<blockquote>
									<p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</p>
									<p class="rev_name">Lorem ipsum.</p>
								</blockquote>	
							</div>

						
						</div>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

	<div id="why_we">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-xs-12">
					<h3>Вы таки наш клиент, потому что у нас:</h3>
				</div>
			
			</div>

			<div class="row">
				
				<div class="col-xs-12">
					
					<div class="col-md-1 col-sm-0"></div>
					
					<div class="col-md-2 col-sm-3">
						<div class="text-center">
							<img src="img/features/1.png" alt="">
							<p>Свое  производство  дверей-купе</p>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="text-center">
							<img src="img/features/2.png" alt="">
							<p>Скидки поставщиков</p>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="text-center">
							<img src="img/features/3.png" alt="">
							<p>Минимальные  сроки</p>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="text-center">
							<img src="img/features/4.png" alt="">
							<p>Гарантия 2 года</p>
						</div>
					</div>
					
					<div class="col-md-2 col-sm-3">
						<div class="text-center">
							<img src="img/features/5.png" alt="">
							<p>Бесплатная доставка по Одессе</p>
						</div>
					</div>

					<div class="col-md-1 col-sm-0"></div>
				
				</div>
				
			</div>
		
		</div>
	
	</div>

	<div id="features">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-xs-12">
					
					<div class="col-md-10 col-md-push-1">
						
						<h3>Типичные проблемы при заказе мебели</h3>
						<p>Сделать качественную мебель - это непросто. Узнайте какие бывают проблемы их как и решают другие, а как это делаем мы.</p>
					
					</div>
					
					<div class="col-md-4 hidden-sm hidden-xs anower_moments">
						
						<h4>Другие компании</h4>
						
						<ul>
							<li><i class="fa fa-times"></i>Испорченное новоселье из-за сорванных сроков</li>
							<li><i class="fa fa-times"></i>Мошенничество</li>
							<li><i class="fa fa-times"></i>Неквалифицированные сотрудники</li>
							<li><i class="fa fa-times"></i>Ошибки в замерах</li>
							<li><i class="fa fa-times"></i>Несоблюдение гарантийных обязательств</li>
							<li><i class="fa fa-times"></i>Грязь и мусор после установки</li>
						</ul>
					
					</div>
					
					<div class="col-md-4 hidden-xs all_moments">

						<h4>Типичная проблема</h4>
						
						<ul>
							<li><i class="fa fa-exclamation-triangle"></i> Безразличное отношение большинства к имиджу своей компании. Отсутствие санкций за несоблюдение сроков.</li>
							<li><i class="fa fa-exclamation-triangle"></i> Использование китайских аналогов вместо указанных немецких оригиналов </li>
							<li><i class="fa fa-exclamation-triangle"></i> Найм дешевой рабочей силы с целью получения большей прибыли в краткострочной перспективе</li>
							<li><i class="fa fa-exclamation-triangle"></i> Замеры выполняют сотрудники, которые не несут материальной ответственности за ошибки</li>
							<li><i class="fa fa-exclamation-triangle"></i> При возникновении гарантийного случая придумывают отговорки и тянут время</li>
							<li><i class="fa fa-exclamation-triangle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
						</ul>
					
					</div>
					
					<div class="col-md-4 our_moments">
						
						<h4>Решение в Dressing Room</h4>
						
						<ul>
							<li><i class="fa fa-check"></i>Условия договора и желание получить от Вас положительный отзыв гарантируют выполнение сроков</li>
							<li><i class="fa fa-check"></i>Мы используем только указанные оригиналы, так как обеспечиваем 2 года гарантии</li>
							<li><i class="fa fa-check"></i>Мы берем на работу лучших специалистов, чтобы Вы нас рекомендовали своим друзьям</li>
							<li><i class="fa fa-check"></i>Замеры выполняют специально обученные сотрудники лазерными измерительными приборами</li>
							<li><i class="fa fa-check"></i>Для нас важно сохранить положительный имидж компании и выполнить гарантийные обязательства как можно скорее</li>
							<li><i class="fa fa-check"></i>Как только работы по установке будут завершены - мы сразу уберем все, до песчинки</li>
						</ul>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
	
	</div>

	<div id="download">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-6 col-md-push-3">
					
					<h3>У вас есть свой эскиз?</h3>
					
					<div class="form-area">

						<form class="form-inline text-center fileUpload" action="mail/sketch.php" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Ваше имя" required>
							</div>

							<div class="form-group">
								<input type="text" name="tell" class="form-control tell" placeholder="Ваш телефон" pattern="^\d{10}$" title="0933888111" required>
							</div>

							<div class="form-group">
								<input type="text" name="email" class="form-control name" placeholder="Ваш e-mail" required>
							</div>

							<label class="col-md-8 col-md-push-2">
								<div class="input-file">
									<span class="input-text">Прикрепить файл</span>
									<input name="fileAttach" type="file" required>
								</div>	
							</label>

							<div class="button_submit">
								<button type="submit" name="send" class="feedback">Отправить эскиз</button>
							</div>
							
						</form>
						
					</div>

				</div>

			</div>

		</div>

	</div>

	<div id="partners">
		
		<div class="container">
			
			<div class="row text-center">
				
					<div class="col-xs-12">
						<h3>Наши партнеры</h3>
					</div>
					
					<div class="col-sm-1"></div>
					<div class="col-sm-2 text-center"><p><img src="img/partners/1.jpg" alt="Partner" title="Partner"></p></div>
					<div class="col-sm-2 text-center"><p><img src="img/partners/2.jpg" alt="Partner" title="Partner"></p></div>
					<div class="col-sm-2 text-center"><p><img src="img/partners/4.jpg" alt="Partner" title="Partner"></p></div>
					<div class="col-sm-2 text-center"><p><img src="img/partners/3.jpg" alt="Partner" title="Partner"></p></div>
					<div class="col-sm-2 text-center"><p><img src="img/partners/5.jpg" alt="Partner" title="Partner"></p></div>
					<div class="col-sm-1 text-center"></div>
			
			</div>
		
		</div>
	
	</div>

	<a href="#top" class="top"><i class="fa fa-arrow-circle-o-up"></i></a>

	<footer id="contacts">
		
		<div class="container text-center">
			
			<div class="row">
				
				<div class="col-xs-12 col-sm-8 col-sm-push-2">
					<p>Изготовление шкафов-купе на заказ в г.Одесса</p>
					<p>+38(093) 922 96 64</p>
					<p>+38(068) 823 10 45</p>
					<p>+38(048) 703 75 90</p>
					<p><a href="#callback" data-toggle="modal">Заказать звонок</a></p>
				</div>

				<div class="col-xs-12 genius">
					<p>Разработка <b>GeniusConvert 2015</b></p>
				</div>
			
			</div>
		
		</div>
	
	</footer>
	
	<?php include_once("modal.php"); ?>




<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->

<script src="js/rangeslider.min.js"></script>
<script src="js/PageScroll2id.min.js"></script>
<script src="js/common.js"></script>


</body>

</html>
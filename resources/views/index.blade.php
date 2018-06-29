@extends('layouts.front_master')


		<!--end main-menu-->
@section('content')
		
		<!-- START REVOLUTION SLIDER -->
		<div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#000000;padding:0px;">
			<div id="rev_slider_1" class="rev_slider fullscreenbanner" style="display:none;">
				<ul> 
					<!-- SLIDE  -->
					<li data-index="rs-67" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="{{asset('frontend/assets/images/aslider1.jpg')}}" data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
						<!-- MAIN IMAGE -->
						<img src="{{asset('frontend/assets/images/aslider1.jpg')}}"  alt="Image" data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="3"  class="rev-slidebg" data-no-retina>
						<!-- LAYERS -->
						
						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-shape tp-shapewrapper  " id="slide-1-layer-1"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
							data-width="full" data-height="full"
							data-whitespace="nowrap" data-type="shape"
							data-basealign="slide" data-responsive_offset="on"
							data-responsive="off"
							data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"ease":"nothing"}]' data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
							style="z-index: 5; background-color:rgba(0,0,0,0.5);">
						</div>
						
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme" id="slide-1-layer-2" 
							data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-75','-50']" 
							data-fontsize="['70','60','50','36']"
							data-lineheight="['70','60','50','36']"
							data-width="['none','none','none','none']"
							data-height="none"
							data-whitespace="['nowrap','nowrap','nowrap','nowrap']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1250,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							data-textAlign="['center','center','center','center']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 19; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 800; color: #ffffff; letter-spacing: -1px;word-spacing:6px;font-family: 'Source Sans Pro', sans-serif;">WELCOME TO OUR <span style="color: #e67e22;">ITEM</span></div> 

						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme" id="slide-1-layer-3" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['5','5','10','15']" 
							data-fontsize="['18','18','18','16']"
							data-lineheight="['30','30','30','24']"
							data-width="['650','650','500','370']"
							data-height="none"
							data-whitespace="normal"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1250,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							data-textAlign="['center','center','center','center']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 20; min-width: 750px; max-width: 750px; white-space: normal; font-size: 18px; line-height: 30px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family: 'Source Sans Pro', sans-serif;">We know moving is more than just boxes and tape, and we are ready to help  with every part is more than just boxes, and we armove & we never</div>

						<!-- LAYER NR. 4 -->
						<a class="tp-caption rev-btn  tp-resizeme hvr-bounce-to-top hhh" href="#" target="_blank" id="slide-1-layer-4" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['90','90','105','95']" 
							data-width="150"
							data-height="none"
							data-whitespace="nowrap"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1250,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							data-textAlign="['center','center','center','center']"
							data-paddingtop="[15,15,15,15]"
							data-paddingright="[10,10,10,10]"
							data-paddingbottom="[15,15,15,15]"
							data-paddingleft="[10,10,10,10]"

							style="z-index: 21; min-width: 150px; max-width: 150px; white-space: nowrap; font-size: 18px; line-height: 18px; font-weight: 600; color: rgba(255,255,255,1); font-family: 'Source Sans Pro', sans-serif;background:#e67e22;border-color:#e67e22;border-radius:1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">ABOUT US </a>
					</li>
					
					<!-- SLIDE  -->
					<li data-index="rs-66" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="{{asset('frontend/assets/images/aslider2.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
						<!-- MAIN IMAGE -->
						<img src="{{asset('frontend/assets/images/aslider2.jpg')}}"  alt="Image" data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="3"  class="rev-slidebg" data-no-retina>
						<!-- LAYERS -->
						
						<!-- LAYER NR. 5 -->
						<div class="tp-caption tp-shape tp-shapewrapper  " id="slide-1-layer-5"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
							data-width="full" data-height="full"
							data-whitespace="nowrap" data-type="shape"
							data-basealign="slide" data-responsive_offset="on"
							data-responsive="off"
							data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"ease":"nothing"}]' data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
							style="z-index: 5; background-color:rgba(0,0,0,0.5);">
						</div>

						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme" id="slide-1-layer-6" 
							 data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" 
							 data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-75','-50']" 
							data-fontsize="['70','60','50','36']"
							data-lineheight="['70','60','50','36']"
							data-width="['none','none','none','none']"
							data-height="none"
							data-whitespace="['nowrap','nowrap','nowrap','nowrap']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1250,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							data-textAlign="['center','center','center','center']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 19; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 800; color: #ffffff; letter-spacing: -1px;word-spacing:6px; font-family: 'Source Sans Pro', sans-serif;">CREATIVE  <span style="color: #e67e22;">ITEM</span> SERVICE</div>

						<!-- LAYER NR. 7 -->
						<div class="tp-caption tp-resizeme" id="slide-1-layer-7" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['5','5','10','15']" 
							data-fontsize="['18','18','18','16']"
							data-lineheight="['30','30','30','24']"
							data-width="['650','650','500','370']"
							data-height="none"
							data-whitespace="normal"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1250,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							data-textAlign="['center','center','center','center']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"

							style="z-index: 20; min-width: 750px; max-width: 750px; white-space: normal; font-size: 18px; line-height: 30px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family: 'Source Sans Pro', sans-serif;"> We know moving is more than just boxes and tape, and we are ready to help with every part is more than just boxes, and we armove & we never</div>

						<!-- LAYER NR. 8 -->
						<a class="tp-caption rev-btn  tp-resizeme hvr-bounce-to-top hhh" href="#" target="_blank" id="slide-1-layer-8" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['90','90','105','95']" 
							data-width="150"
							data-height="none"
							data-whitespace="nowrap"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1250,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
							data-textAlign="['center','center','center','center']"
							data-paddingtop="[15,15,15,15]"
							data-paddingright="[10,10,10,10]"
							data-paddingbottom="[15,15,15,15]"
							data-paddingleft="[10,10,10,10]"

							style="z-index: 21; min-width: 150px; max-width: 150px; white-space: nowrap; font-size: 18px; line-height: 18px; font-weight: 600; color: rgba(255,255,255,1); font-family: 'Source Sans Pro', sans-serif;background:#e67e22;border-color:#e67e22;border-radius:1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">CONTACT US </a>
					</li>
				</ul>
			</div>
	    </div>
		<!-- END REVOLUTION SLIDER -->
		

		
		<!-- Start a-about -->
		<div id="a-about">
			<div class="container">
				<div  class="row">
					<div class="col-lg-4 col-md-6">
						<div class="a-ab-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="200">
							<div class="a-ab-img"><img src="{{asset('frontend/assets/images/hbg1.jpg')}}" alt="Image" /></div>
							<div class="abox-txt">
								<div class="a-ab-icon"><a href="#"><i class="flaticon-earth-globe"></i></a></div>
								<div class="a-ab-txt">
									<h3>CLEAN CODE</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="a-ab-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="300">
							<div class="a-ab-img"><img src="{{asset('frontend/assets/images/hbg2.jpg')}}" alt="Image" /></div>
							<div class="abox-txt">
								<div class="a-ab-icon"><a href="#"><i class="flaticon-3d-outlined-shape"></i></a></div>
								<div class="a-ab-txt">
									<h3>PARALLAX VIDEO</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="a-ab-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="400">
							<div class="a-ab-img"><img src="{{asset('frontend/assets/images/hbg3.jpg')}}" alt="Image" /></div>
							<div class="abox-txt">
								<div class="a-ab-icon"><a href="#"><i class="flaticon-interface"></i></a></div>
								<div class="a-ab-txt">
									<h3>SUPER RESPONSIVE</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="a-ab-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="500">
							<div class="a-ab-img"><img src="{{asset('frontend/assets/images/hbg4.jpg')}}" alt="Image" /></div>
							<div class="abox-txt">
								<div class="a-ab-icon"><a href="#"><i class="flaticon-video-camera"></i></a></div>
								<div class="a-ab-txt">
									<h3>ENGINE VIDEO</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="a-ab-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="600">
							<div class="a-ab-img"><img src="{{asset('frontend/assets/images/hbg5.jpg')}}" alt="Image" /></div>
							<div class="abox-txt">
								<div class="a-ab-icon"><a href="#"><i class="flaticon-fighter-jet-silhouette"></i></a></div>
								<div class="a-ab-txt">
									<h3>SMART DESIGN</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6" data-aos="fade-in" data-aos-offset="200" data-aos-duration="700">
						<div class="a-ab-box text-center">
							<div class="a-ab-img"><img src="{{asset('frontend/assets/images/hbg6.jpg')}}" alt="Image" /></div>
							<div class="abox-txt">
								<div class="a-ab-icon"><a href="#"><i class="flaticon-tool"></i></a></div>
								<div class="a-ab-txt">
									<h3>REAL SUPPORT</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End a-about -->
		
		
		
		<!-- start offer -->
		<div id="offer">
			<div class="container">
				<div class="title tb at text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="500">
					<h1>WHAT WE<span> OFFER</span></h1>
					<p>Distinctively myocardinate focused web services with stand-alone core competencies
					dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="row offer">
					<div class="col-lg-4 col-md-4">
						<div class="o-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="200">
							<div class="o-icon"><a href="#" class="hvr-bounce-to-top hh"><i class="flaticon-electric-current-symbol"></i></a></div>
							<div class="o-txt">
								<h3>INVESTMENT PLANNING</h3>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="o-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="400">
							<div class="o-icon"><a href="#" class="hvr-bounce-to-top hh"><i class="flaticon-3d-outlined-shape"></i></a></div>
							<div class="o-txt">
								<h3>INTERNATIONAL CONFERENCE</h3>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="o-box text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="600">
							<div class="o-icon "><a href="#" class="hvr-bounce-to-top hh"><i class="flaticon-settings"></i></a></div>
							<div class="o-txt">
								<h3>INVESTMENT PLANNING</h3>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End offer -->
		
		
		<!-- start a-masonry -->
		<div id="a-masonry">
			<div class="container">
				<div class="title at text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="500">
					<h1>OUR LATEST <span> WORKS</span></h1>
					<p>Distinctively myocardinate focused web services with stand-alone core competencies
					dummy text of the printing and typesetting industry.</p>
				</div>
				
				<div class="ms-menu" data-aos="fade-in" data-aos-offset="200" data-aos-duration="600">
					<div class="title">ALL</div>
					<div class="toggle">                         
						<a class="hvr-bounce-to-top hh" data-filter="*"><span class="text">ALL</span></a>
						<a class="hvr-bounce-to-top hh" data-filter=".filter-1"><span class="text">CREATIVE</span></a>
						<a class="hvr-bounce-to-top hh" data-filter=".filter-2"><span class="text">WEB DESIGN</span></a>
						<a class="hvr-bounce-to-top hh" data-filter=".filter-3"><span class="text">BRANDING</span></a>
						<a class="hvr-bounce-to-top hh" data-filter=".filter-4"><span class="text">CLASSIC</span></a>
					</div>
				</div>
				<div class="ms-container">
					<div class="ms-sizer"></div>
					<div class="ms-item ms-item--width4 filter-2 filter-3">
						<div class="ms-box">
							<img src="{{asset('frontend/assets/images/masonry/ms1.jpg')}}" alt="Image">
							<div class="overlay">
								<div class="hover-txt">
									<div class="table-cell">
										<a href="{{asset('frontend/assets/images/masonry/ms1.jpg')}}" data-lightbox="gallery"><i class="flaticon-add"></i></a>
										<a href="{{asset('frontend/assets/images/masonry/ms1.jpg')}}"><h5>CREATIVE DESIGN</h5></a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ms-item -->
					
					<div class="ms-item ms-item--width4 filter-4 filter-2 filter-3">
						<div class="ms-box">
							<img src="{{asset('frontend/assets/images/masonry/ms2.jpg')}}" alt="Image">
							<div class="overlay">
								<div class="hover-txt">
									<div class="table-cell">
										<a href="{{asset('frontend/assets/images/masonry/ms2.jpg')}}" data-lightbox="gallery"><i class="flaticon-add"></i></a>
										<a href="{{asset('frontend/assets/images/masonry/ms2.jpg')}}"><h5>WEB DESIGN</h5></a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ms-item -->
					
					<div class="ms-item ms-item--width4  filter-2 filter-3 filter-4">
						<div class="ms-box">
							<img src="{{asset('frontend/assets/images/masonry/ms3.jpg')}}" alt="Image">
							<div class="overlay">
								<div class="hover-txt">
									<div class="table-cell">
										<a href="{{asset('frontend/assets/images/masonry/ms3.jpg')}}" data-lightbox="gallery"><i class="flaticon-add"></i></a>
										<a href="{{asset('frontend/assets/images/masonry/ms3.jpg')}}"><h5>GRAPHICS DESIGN</h5></a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ms-item -->
					
					<div class="ms-item ms-item--width4 filter-1 filter-2 ">
						<div class="ms-box">
							<img src="{{asset('frontend/assets/images/masonry/ms4.jpg')}}" alt="Image">
							<div class="overlay">
								<div class="hover-txt">
									<div class="table-cell">
										<a href="{{asset('frontend/assets/images/masonry/ms4.jpg')}}" data-lightbox="gallery"><i class="flaticon-add"></i></a>
										<a href="{{asset('frontend/assets/images/masonry/ms4.jpg')}}"><h5>CAD DESIGN</h5></a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ms-item -->
					
					<div class="ms-item ms-item--width4 filter-1 filter-3 filter-4">
						<div class="ms-box">
							<img src="{{asset('frontend/assets/images/masonry/ms5.jpg')}}" alt="Image">
							<div class="overlay">
								<div class="hover-txt">
									<div class="table-cell">
										<a href="{{asset('frontend/assets/images/masonry/ms5.jpg')}}" data-lightbox="gallery"><i class="flaticon-add"></i></a>
										<a href="{{asset('frontend/assets/images/masonry/ms5.jpg')}}"><h5>WEB DESIGN</h5></a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ms-item -->
					
					<div class="ms-item ms-item--width4 filter-1 filter-3 filter-4">
						<div class="ms-box">
							<img src="{{asset('frontend/assets/images/masonry/ms6.jpg')}}" alt="Image">
							<div class="overlay">
								<div class="hover-txt">
									<div class="table-cell">
										<a href="{{asset('frontend/assets/images/masonry/ms6.jpg')}}" data-lightbox="gallery"><i class="flaticon-add"></i></a>
										<a href="{{asset('frontend/assets/images/masonry/ms6.jpg')}}"><h5>CREATIVE DESIGN</h5></a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ms-item -->
				</div>
				
				<div class="ms-btn text-center">
					<a class="all-btn e-solid" href="#">
						<span class="sep-border"></span><span class="btn-text">view all</span>
					</a>
				</div>
			</div>
		</div>
		<!-- End a-masonry -->
		
		
		<!-- start testimoni -->
		<div id="testimoni">
			<div class="container">
				<div class="title tb at text-center" data-aos="fade-in" data-aos-offset="200" data-aos-duration="500">
					<h1>WHAT OUR <span>CLIENTS</span> SAY</h1>
				</div>
				<div id="owl-demo2" class="owl-carousel owl-theme at">
					<div class="item">
						<div class="testi-box text-center">
							<div class="txt-box at">
								<p><i class="fas fa-quote-left"></i> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration invariations of passages of L some form, by injected hupsum availab lepsum availablemour. <i class="fas fa-quote-right"></i></p>
							</div>
							
							<div class="testi-img"><img src="{{asset('frontend/assets/images/t1.jpg')}}" alt="Image" /></div>
							<div class="testi-txt">
								<h3>WILSON ANTENNA</h3>
								<p>CEO, Design Heaven</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testi-box text-center">
							<div class="txt-box at">
								<p><i class="fas fa-quote-left"></i> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration invariations of passages of L some form, by injected hupsum availab lepsum availablemour. <i class="fas fa-quote-right"></i></p>
							</div>
							<div class="testi-img"><img src="{{asset('frontend/assets/images/t2.jpg')}}" alt="Image" /></div>
							<div class="testi-txt">
								<h3>WILSON ANTENNA</h3>
								<p>CEO, Design Heaven</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testi-box text-center">
							<div class="txt-box at">
								<p><i class="fas fa-quote-left"></i> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration invariations of passages of L some form, by injected hupsum availab lepsum availablemour. <i class="fas fa-quote-right"></i></p>
							</div>
							<div class="testi-img"><img src="{{asset('frontend/assets/images/t1.jpg')}}" alt="Image" /></div>
							<div class="testi-txt">
								<h3>WILSON ANTENNA</h3>
								<p>CEO, Design Heaven</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End testimoni -->
		
		
		<!-- start brand -->
		<div id="brand">
			<div class="container">
				<div class="brand">
					<div id="owl-demo3" class="owl-carousel owl-theme">
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b1.png')}}" alt="Image" /></a>
						</div>
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b2.png')}}" alt="Image" /></a>
						</div>
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b3.png')}}" alt="Image" /></a>
						</div>
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b4.png')}}" alt="Image" /></a>
						</div>
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b5.png')}}" alt="Image" /></a>
						</div>
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b3.png')}}" alt="Image" /></a>
						</div>
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b5.png')}}" alt="Image" /></a>
						</div>
						<div class="b-img">
						  <a href="#"><img src="{{asset('frontend/assets/images/b4.png')}}" alt="Image" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End brand -->
@stop		

@include('assets.navbar')





<!--start-->
<!--start section-->
<section class="nicdark_section">

	<div class="tp-banner-container">
		<div class="nicdark_slide1" >

			<ul>
                @foreach($sliders as $slider)
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="LESSON">
                        <img src="{{asset($slider->image)}}"  alt="" data-lazyload="{{asset($slider->image)}}" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                    </li>
                @endforeach

			</ul>

		</div>
	</div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section nicdark_margintop45_negative">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

		<div class="grid grid_12 percentage nomargin">
			<div class="nicdark_textevidence center">
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="courses.html">COURSES</a></h2>
			            </div>
			            <i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="prices.html">PRICES</a></h2>
			            </div>
			            <i class="nicdark_zoom icon-money-1 nicdark_iconbg left extrabig yellow nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_orange nicdark_shadow">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="events.html">EVENTS</a></h2>
			            </div>
			            <i class="nicdark_zoom icon-music-2 nicdark_iconbg left extrabig orange nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_green nicdark_shadow nicdark_radius_right">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="teachers.html">TEACHERS</a></h2>
			            </div>
			            <i class="nicdark_zoom icon-graduation-cap-1 nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_space5"></div>
			</div>
		</div>

	</div>
    <!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>
        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR ACTIVITIES</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">OUR BEST SERVICES FOR YOUR KIDS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        @foreach($activities as $activity)
        <div class="grid grid_4 nicdark_relative">
            <div class="nicdark_btn_iconbg nicdark_bg_yellow nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <img width="80px" height="80px" src="{{asset($activity->icon)}}" >
                </div>
            </div>
                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>{{$activity->title}}</h4>
                    <div class="nicdark_space20"></div>
                    <p>{{$activity->slug}}</p>
                    <div class="nicdark_space20"></div>
                    <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                    <div class="nicdark_space20"></div>
                </div>
        </div>
        @endforeach
    </div>
    <!--end nicdark_container-->

</section>
<!--end section--><!--start section-->
<div id="nicdark_parallax_2_btns" class="nicdark_section nicdark_imgparallax nicdark_parallax_img2">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

            <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <a href="courses.html" class="nicdark_disable_floatright_iphoneland nicdark_disable_floatright_iphonepotr nicdark_btn nicdark_bg_blue medium right nicdark_shadow nicdark_radius white nicdark_press"><i class="icon-th-outline"></i>&nbsp;&nbsp;&nbsp;ALL COURSES</a>
            </div>
            <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <a href="contact-1.html" class=" nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_press"><i class="icon-pencil-1"></i>&nbsp;&nbsp;&nbsp;CONTACT US</a>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</div>
<!--end section--><!--start section-->

{{--<!--end section--><!--start section-->--}}
<section id="nicdark_parallax_countdown" class="nicdark_section nicdark_imgparallax nicdark_parallax_img3">

   <div class="nicdark_filter greydark">

       <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

            <div class="grid grid_12">
            <h1 class="white center subtitle">FIRST DAY AT SCHOOL !</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle center white">ARE YOU READY ?</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider center big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>
            </div>

            <div class="nicdark_countdown"></div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
{{--        <!--end nicdark_container-->--}}

   </div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR TEACHERS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey"></h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <?php
        $colors = ['orange','blue','green','yellow','violet'];
        $i=0;
        ?>
        @foreach($teachers as $teacher)
        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_{{$colors[($i>=5)?($i=0):$i++]}} nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{asset($teacher->image)}}">
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="single-teacher.html">{{$teacher->name}}</a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$teacher->description}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>
        @endforeach


	</div>
	<!--end nicdark_container-->

</section>
<div class="nicdark_space40"></div>
<div class="nicdark_space40"></div>
<!--end section--><!--start section-->
<section id="nicdark_parallax_counter" class="nicdark_section nicdark_imgparallax nicdark_parallax_img1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>


            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{count($teachers)}}" data-speed="1000">{{count($teachers)}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">TEACHERS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{count($courses)}}" data-speed="1000">{{count($courses)}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">COURSES</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="48" data-speed="1000">48</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">LESSONS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{count($activities)}}" data-speed="1000">{{count($activities)}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">ACTIVITIES</h4>
                </div>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR COURSES</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey"></h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="nicdark_masonry_btns">
            <div class="nicdark_margin10">
                <a data-filter="*" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">ALL</a>
            </div>

            <div class="nicdark_space10"></div>
        </div>


        <!--start nicdark_masonry_container-->
        <div class="nicdark_masonry_container">

            @foreach($courses as $course)
            <div class="grid grid_3 nicdark_masonry_item educational">
                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow center">
                    <div  class="nicdark_archive1 nicdark_radius">
                        <div class="nicdark_filter {{$colors[($i>=5)?($i=0):$i++]}} nicdark_radius_top">
                            <div class="nicdark_space60"></div>
                            <a href="#" class="nicdark_zoom white nicdark_btn_icon nicdark_bg_greydark big nicdark_radius_circle">{{$course->price}}<br><small>USD</small></a>
                            <div class="nicdark_space60"></div>
                        </div>
                    </div>
                    <div class="nicdark_textevidence nicdark_bg_greydark">
                        <h4 class="white nicdark_margin20">{{$course->name}}</h4>
                    </div>
                    <div class="nicdark_margin20">
                        <p>{{$course->description}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-course.html" class="white nicdark_btn nicdark_bg_orange medium nicdark_radius nicdark_shadow nicdark_press">MORE INFO</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <!--end nicdark_masonry_container-->

    </div>
    <!--end nicdark_container-->

</section>
<!--end section-->






<!--start section-->
<section class="nicdark_section">


    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space30"></div>



        <div class="nicdark_space40"></div>

    </div>
    <!--end nicdark_container-->


</section>
<!--end section--><!--end-->

@include('assets.footer')

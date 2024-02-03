@include('assets.navbar')

<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img6">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">FAQ</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">FREQUENTLY ASKED QUESTIONS</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section-->


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>


        <div class="grid grid_8">

            <div class="nicdark_alerts nicdark_bg_red nicdark_radius nicdark_shadow">
                <p class="white nicdark_size_big"><i class="icon-cancel-circled-outline iconclose"></i>&nbsp;&nbsp;&nbsp;<strong>WARNING:</strong>&nbsp;&nbsp;&nbsp;Please, look at the answers before contacting.</p>
                <i class="icon-cancel-outline nicdark_iconbg right medium red"></i>
            </div>

            <div class="nicdark_space50"></div>

            <p><span class="red nicdark_dropcap nicdark_radius nicdark_shadow">L</span>orem commodo lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet maximus sit amet, rhoncus non turpis. Aenean convallis ac lorem et sodales. Sed dictum vel orci nec rhoncus. Donec quis porttitor arcu. Nulla ut justo quis augue commodo mattis nec vel ante. Donec a eleifend tellus. Nullam sed sapien dapibus, congue lacus a, pellentesque nunc. Donec blandit, justo sed sollicitudin condimentum, velit lacus dignissim velit, id posuere tortor sem quis nisi. In non condimentum arcu. Praesent sed interdum purus, sit amet elementum nulla. Donec sit amet lacus bibendum mi posuere consequat gravida ut lorem. Proin vel nunc orci. Duis maximus nulla in dui tincidunt tempus. Integer vulputate lorem et pretium tristique.</p>


            <div class="nicdark_space50"></div>

            <h3 class="subtitle greydark">MOST FREQUENT QUESTION</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>


            <!--start nicdark_toogle-->
            @foreach($faqs as $faq)
            <div class="nicdark_toogle">
                <h5 class="nicdark_toogle_header grey nicdark_textevidence nicdark_bg_grey big nicdark_radius nicdark_shadow">
                    {{$faq->question}}
                    <i class="icon-info-outline nicdark_iconbg right medium grey"></i>
                </h5>
                <div class="nicdark_toogle_content nicdark_bg_grey nicdark_radius_bottom nicdark_shadow">
                    <p>{{$faq->answer}}</p>
                </div>
            </div>
                <div class="nicdark_space20"></div>
        @endforeach
            <!--end toogle-->



        </div>


        <div class="grid grid_4">

            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_green nicdark_radius_top">
                    <h4 class="white nicdark_margin20">SEND NEW QUESTION</h4>
                    <i class="icon-mail-1 nicdark_iconbg right medium green"></i>
                </div>
                <div class="nicdark_margin20">
                    <form action="{{route('contact.store')}}" method="post">
                        @csrf
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" name="name" value="" placeholder="NAME">
                    <div class="nicdark_space20"></div>
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" name="email" placeholder="EMAIL">
                    <div class="nicdark_space20"></div>
                    <textarea class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" name="message" placeholder="YOUR QUESTION" rows="7"></textarea>
                    <div class="nicdark_space20"></div>
                    <button type="submit" class=" nicdark_btn nicdark_bg_green medium  nicdark_radius white nicdark_press">SEND</button>
                    </form>
                </div>
            </div>

        </div>


        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->

</section>
<!--end section-->

<!--end-->
@include('assets.footer')

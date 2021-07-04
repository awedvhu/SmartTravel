 @extends('base')
 @section('main')
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>

     <div class="carousel-inner" style="margin-bottom: 20px;">
         <div class="carousel-item">
             <img src="{{ asset('img/place_img1.JPG') }}" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">

             </div>
         </div>
         <div class="carousel-item active">
             <img src="{{ asset('img/place_img2.JPG') }}" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">

             </div>
         </div>
         <div class="carousel-item">
             <img src="{{ asset('img/place_img3.JPG') }}" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">

             </div>
         </div>
     </div>

     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
     </button>
 </div>


 <div class="body_menu" style="margin:0px 500px !important;">
     <div class="news_message">
         <h4>特色景點</h4>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="{{ asset('img/place_img1.JPG') }}">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="{{ asset('img/place_img2.JPG') }}">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="{{ asset('img/place_img3.JPG') }}">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="{{ asset('/latest_news') }}">
             <div class="read_more">
                 閱讀更多
             </div>
         </a>
     </div>
 </div>

 <div class="body_place">
     <div class="body_place_title">
         <h2>特色景點</h2>
     </div>
     <div class="place_img"></div>
     <div class="body_place_menu">
         <div class="body_place_menu_first">
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img1.JPG') }}">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img2.JPG') }}">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img3.JPG') }}">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img4.JPG') }}">
                 </div>
             </a>
         </div>

         <div class="body_place_menu_first">
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img5.JPG') }}">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img6.JPG') }}">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img7.JPG') }}">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="{{ asset('img/place_img8.JPG') }}">
                 </div>
             </a>
         </div>
     </div>
 </div>
 @endsection
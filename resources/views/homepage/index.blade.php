 @extends('base')
 @section('main')
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>

     <div class="carousel-inner">
         <div class="carousel-item">
             <img src="{{ asset('img/1.png') }}" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">
                 <h5>First slide label</h5>
                 <p>Some representative placeholder content for the first slide.</p>
             </div>
         </div>
         <div class="carousel-item active">
             <img src="{{ asset('img/2.png') }}" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">
                 <h5>Second slide label</h5>
                 <p>Some representative placeholder content for the second slide.</p>
             </div>
         </div>
         <div class="carousel-item">
             <img src="{{ asset('img/3.png') }}" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">
                 <h5>Third slide label</h5>
                 <p>Some representative placeholder content for the third slide.</p>
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

 <div class="body_inf">

     <div class="body_button">
         <button type="button" class="btn1">套裝行程</button>
         <button type="button" class="btn2">認識台北</button>
     </div>

     <div class="body_weather">
         <div id="time"></div>
     </div>

     <div class="inf_body_search">

         <div class="body_search">
             <input type="search" placeholder="請輸入關鍵字">
             <button><i class="fa fa-search"></i></button>
         </div>

         <div class="hot_keyword">
             <h6>熱門關鍵字 : <a href="#" title="台北旅遊">台北旅遊</a>、<a href="#" title="x8 x8 x8">x8 x8 x8</a></h6>
         </div>

     </div>

 </div>

 <div class="body_menu">
     <div class="news_message">
         <h4>最新消息</h4>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="1.png">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="1.png">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="1.png">
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

     <div class="activity">
         <h4>活動資訊</h4>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="1.png">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="1.png">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="#" title="前往文章內容">
             <div class="news1">
                 <img src="1.png">
                 <p id="post_time">2021/06/30</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit?</p>
             </div>
         </a>
         <hr>
         <a href="#">
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
                     <img src="1.png">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="1.png">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="1.png">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="1.png">
                 </div>
             </a>
         </div>

         <div class="body_place_menu_first">
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="1.png">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="1.png">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="1.png">
                 </div>
             </a>
             <a href="#" title="前往觀看圖片">
                 <div class="place1">
                     <img src="1.png">
                 </div>
             </a>
         </div>
     </div>
 </div>
 @endsection
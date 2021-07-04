  @extends('latestNew.base')
  @section('main')
  <div class="news_container">
  </div>

  <div class="row row-cols-md-3 row-cols-md-3  g-4" id="news_menu">
      <div class="col_group">
          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img1.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">大安森林公園由於位處市中心區，每日遊人如織，尤以晨間及夕陽初照之際，吸引附近居民絡繹園內，無論運動、散步、跳舞、嬉戲自得其樂，公園東北角有兒童遊戲運動場，下方並建有地下停車場，分地下2層計可停放小型車1,452部，可以紓解遠來遊人停車之困。

                          在擁擠、嚴重污染及「熱島效應」帶來高溫的台北市，26公頃純休閒性「都市森林」型態的公園，無異是清新的「都市之肺」，可以滌塵淨化空氣、降低噪音、調節氣溫，來園休憩，有花看並可以欣賞音樂台演出，享受「森林浴」舒暢身心，漫步園內，處處美景，可將公園功能發揮盡致。</h5>
                  </div>

              </div>
          </div>

          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img2.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">臺北市立圖書館北投分館是臺灣首座綠建築圖書館，座落於林木茂密、生態環境豐富的北投公園內，與溫泉博物館比鄰，地下一層、地上二層，總面積650坪的圖書館。

                          本分館座落於在綠意盎然的北投公園內，室內書香，戶外鳥語，相映成趣，閱讀成了一件愜意、享受的活動。 </h5>
                  </div>

              </div>
          </div>

          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img3.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">臺北101購物中心為地上5樓，地下1樓的購物空間，23000坪，是臺灣首座國際頂級購物中心。擁有許多精品旗艦店，如BALLY、LV、Prada、Gucci、Cartier、DIOR及FENDI等，消費者可以享受到最多樣的選擇，與全球流行零時差，輕鬆擁有愉悅的購物時刻。</h5>
                  </div>

              </div>
          </div>
      </div>

      <div class="col_group">
          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img4.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">紀念堂是為了紀念中華民國第一任總統蔣介石，他於1975年逝世，次年行政院就破土開建中正紀念堂，設計師是設計圓山大飯店的楊卓成。

                          紀念堂原址是陸軍總部，當時是臺北市區內最大的軍區，據說從大陸運過來的黃金，就曾經存放在這個地方。紀念堂採用的藍白兩色，是國旗上面主要的顏色，紀念堂頂部天穹的裝飾是青天白日12道光芒，銅像朝西面對總統府和中國大陸，其中都有特殊的意義。隨著民主演進思想開放，紀念堂前的廣場 已成了民主運動的集會場。</h5>
                  </div>

              </div>
          </div>

          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img5.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">大湖公園湖泊因白鷺成群又名白鷺湖，位於內湖區成功路5段，毗鄰白鷺山，遙指五指山、忠勇山等，佔地約13公頃餘。民國68年仿中國園林興建，大湖湖泊面積約10公頃餘，屬區域性公園。其依山傍水，水岸蜿蜒曲折，湖面波光粼粼，視野開闊，拱橋彷彿垂虹，每當山橫春靄，新柳拂水，遠處嵐影，盡入眼簾；亭中小歇、宜眺宜憩，雲水變幻，騁懷遊目，景色秀美；每當夏秋之季，煙雨瀰漫，仿如畫中，在2012年5月登上法國世界報。</h5>
                  </div>

              </div>
          </div>

          <div class="col">
              <div class="card h-100 ">
                 
                      <img src="{{ asset('img/place_img6.JPG') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                          <p class="card-text">2021/07/01</p>
                          <h5 class="card-title">陽明山溫泉
                              陽明山舊稱草山，因紀念明朝學者王陽明而改名為陽明山，它是臺北的都市後花園，位居近郊，是大家很方便就可以遠離塵囂，休閒的好去處。由於它位居火山地帶，特殊的火山地形及地質構造，造就了這一區的溫泉景觀。陽明山溫泉大致可分為4個區域：陽明山國家公園周邊、冷水坑、馬槽及火庚子坪，由於地熱運動頻繁，這4個區域溫泉所含的礦物成分都不同，使得其水溫、泉質與療效也大不相同。</h5>
                      </div>
         
              </div>
          </div>
      </div>

      <div class="col_group">
          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img7.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">陽明山國家公園是臺灣離都會區最近的一座國家公園，這裡地貌多變、生態豐富，孕育了許多珍貴的保育類動物，幸運的話，可以在這裏發現台灣特有種鳥類－台灣藍鵲的蹤跡。

                          春天賞花，夏天避暑，秋天有芒花與楓葉、冬天泡溫泉，陽明山的四季都有不同的美景、樂趣，等著你來發掘喔！</h5>
                  </div>

              </div>
          </div>

          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img8.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">陽明山二子坪、面天山步道
                          「二子坪步道」是全台灣首創的”野外無障礙步道”，在遊客服務站還能借輪椅，讓身心障礙朋友能一起來享受大自然！
                          天氣好時可以看到完整的面天山</h5>
                  </div>

              </div>
          </div>

          <div class="col">
              <div class="card h-100 ">

                  <img src="{{ asset('img/place_img9.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <p class="card-text">2021/07/01</p>
                      <h5 class="card-title">中華民國總統府廳舍位於臺灣臺北市的博愛特區，為中華民國總統、副總統及總統府的辦公場所，中華民國政府亦於每年元旦及國慶日在這裡舉行升旗典禮。1919年建成，建築風格屬辰野金吾風格，為中華民國國定古蹟。起初於臺灣日治時期做為臺灣總督府，二次大戰後1948年至2006年間名為「介壽館」，2006年正式更名為「總統府」，自完工以來即為臺灣重要的政治中樞[1]。雖為國定古蹟，但因其為重要官署建築，周邊維安戒備森嚴，只有在特定時間才會開放給民眾入內參觀。</h5>
                  </div>

              </div>
          </div>
      </div>
  </div>
  <p>
  <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link border-white " href="#">
              < </a>
      </li>
      <li class="page-item active"><a class="page-link rounded-circle " href="#">1</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
      <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
      <li class="page-item"><a class="page-link border-white" href="#"> > </a></li>
  </ul>
  </p>
  @endsection
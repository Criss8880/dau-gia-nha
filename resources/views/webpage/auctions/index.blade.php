@extends("layouts-webpage.master")
@section("title") {{$auction->title}} @endsection
@section("content")

  <!-- SINGLE DETAIL -->
  <section class="single__Detail">
    <div class="container">



      <div class="row">
        <div class="col-lg-8">
          <!-- SLIDER IMAGE DETAIL -->
          <div class="slider__image__detail-large owl-carousel owl-theme">
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/01.jpg" alt="" class="img-fluid w-100 img-transition">


              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/bg19.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>


                </div>

              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/gallery1.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>

                </div>
              </div>

            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/gallery2.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/gallery3.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/gallery4.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>
                  <span class="badge badge-primary text-capitalize mb-2">house</span>
                  <div class="price">
                    <h5 class="text-capitalize">$13,000/mo</h5>
                  </div>
                  <h4 class="text-capitalize">Luxury Family Home</h4>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/gallery5.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>
                  <span class="badge badge-primary text-capitalize mb-2">house</span>
                  <div class="price">
                    <h5 class="text-capitalize">$13,000/mo</h5>
                  </div>
                  <h4 class="text-capitalize">Luxury Family Home</h4>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/gallery.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>
                  <span class="badge badge-primary text-capitalize mb-2">house</span>
                  <div class="price">
                    <h5 class="text-capitalize">$13,000/mo</h5>
                  </div>
                  <h4 class="text-capitalize">Luxury Family Home</h4>

                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-large-one">
                <img src="images/gallery1.jpg" alt="" class="img-fluid w-100 img-transition">
                <div class="description">
                  <figure>
                    <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                  </figure>
                  <span class="badge badge-primary text-capitalize mb-2">house</span>
                  <div class="price">
                    <h5 class="text-capitalize">$13,000/mo</h5>
                  </div>
                  <h4 class="text-capitalize">Luxury Family Home</h4>
                  <!-- <p class="text-uppercase">
  166 welling street, collingwood, vic 3066
  </p> -->
                </div>
              </div>
            </div>
          </div>

          <div class="slider__image__detail-thumb owl-carousel owl-theme">
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/01.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/bg19.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/gallery1.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/gallery2.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/gallery3.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/gallery4.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/gallery5.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/gallery.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
            <div class="item">
              <div class="slider__image__detail-thumb-one">
                <img src="images/gallery1.jpg" alt="" class="img-fluid w-100 img-transition">
              </div>
            </div>
          </div>
          <!-- END SLIDER IMAGE DETAIL -->
          <div class="row">
            <div class="col-md-9 col-lg-9">
              <div class="single__detail-title mt-4">
                <h3 class="text-capitalize">Nhà phố Thuận An</h3>
                <p> 34 Ấp 456, phường 5, Thuận An, Bình Dương</p>
              </div>
            </div>
            <div class="col-md-3 col-lg-3">
              <div class="single__detail-price mt-4">
                <h3 class="text-capitalize text-gray">1,5 Tỉ</h3>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="#" class="badge badge-primary p-2 rounded"><i
                        class="fa fa-print"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="badge badge-primary p-2 rounded"><i
                        class="fa fa-exchange"></i></a>
                  </li>

                  <li class="list-inline-item">
                    <a href="#" class="badge badge-primary p-2 rounded"><i
                        class="fa fa-heart"></i></a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
          <!-- DESCRIPTION -->
          <div class="row">
            <div class="col-lg-12">

              <div class="single__detail-features">
                <h6 class="text-capitalize detail-heading">Lịch sử đấu giá</h6>
                <!-- INFO PROPERTY DETAIL -->
                <div class="property__detail-info">
                  <div class="row">
                    <table class="table">
                      <thead class="thead-light">
                      <tr>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Giá đặt</th>
                        <th scope="col">Thời gian</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th scope="row">akorop@gmail.com</th>
                        <td>1,200,000,0000</td>
                        <td>12/02/2023 09:30</td>
                      </tr>
                      <tr>
                        <th scope="row">nola@gmail.com</th>
                        <td>1,300,000,0000</td>
                        <td>12/02/2023 09:30</td>
                      </tr>
                      <tr>
                        <th scope="row">bin@yh.com</th>
                        <td>1,400,000,0000</td>
                        <td>12/02/2023 09:30</td>
                      </tr>
                      </tbody>
                    </table>
                    @if(Auth::check())
                      <a href="/page-3.html"
                         class="btn btn-primary text-capitalize btn-block text-white"> đấu giá ngay
                        <i class="fa fa-calculator ml-1"></i>
                      </a>
                    @else
                      <a href="/login"
                         class="btn btn-primary text-capitalize btn-block text-white"> đấu giá ngay
                        <i class="fa fa-calculator ml-1"></i>
                      </a>
                    @endif
                  </div>

                </div>

                <!-- END INFO PROPERTY DETAIL -->
              </div>

              <div class="single__detail-desc">
                <h6 class="text-capitalize detail-heading">Mô tả</h6>
                <div class="show__more">
                  <div class="re__section-body re__detail-content js__section-body js__pr-description js__tracking"
                       trackingid="lead-phone-ldp"
                       trackinglabel="loc=Sale-Listing Details-body,prid=39056545">
                    Siêu hot - Cả thị trường Tân Uyên - Thuận An chỉ có 01 khu compound Siêu VIP,
                    giá siêu hợp lý, rẻ hơn gấp 3 lần TPHCM - Lãi ngay khi mua, sẵn HĐ thuê
                    25tr/tháng trong 18 tháng.<br><br>- Vị trí: Mặt tiền đường Trịnh Công Sơn rộng
                    28m, giao với DT746 (cách ngã tư Bình Chuẩn chỉ 800m).<br>- Thiết kế lệch tầng 1
                    trệt 2 lầu - sân thượng. Có sân trước trồng cây nuôi cá.<br>- Các tầng bố trí
                    "lệch nhau" tạo sự riêng tư, có thể bố trí 4 PN, 5 WC.<br><br>Đặc biệt:<br>-
                    Thanh toán thấp kỷ lục, chỉ 500 - 600 triệu (10%) nhận nhà trước tết.<br>- Tới
                    đầu năm 2027 mới phải thanh toán tiếp.<br>- Tiền cho thuê cao hơn gửi tiết kiệm
                    với cam kết thuê 25 - 40tr/tháng.<br>- Hỗ trợ lãi suất 0% - mức thấp nhất lịch
                    sử dành cho sản phẩm nhà phố/shophouse thời điểm hiện tại.<br>- Tổng chiết khấu
                    chưa từng có lên đến 25% (Trừ vào giá bán).<br>- Miễn 2 năm phí quản lý.<br>-
                    Tặng ngay 1 lượng vàng khi mua.<br><br>500 triệu là quá rẻ để đứng tên nhà phố
                    siêu đẹp:<br><br>- Liền kề các cụm CN lớn như Vsip, Lego, Sóng Thần - Thu hút
                    giới đầu tư, chuyên gia, kỹ sư làm việc trong các cụm CN cách dự án chỉ 20 - 30p
                    di chuyển.<br>- Tiện ích resort cao cấp - phục vụ miễn phí cho cư dân: Hồ bơi,
                    công viên, phòng gym, yoga, sauna, thư viện, coffee,...<br>- Cộng đồng dân trí
                    văn minh - đã ở được 60 căn - nhiều chuyên gia, kỹ sư nước ngoài đã về ở.<br>-
                    Khu biệt lập khép kín vô cùng an ninh, yên tĩnh, không tiếng ồn, bảo vệ túc trực
                    24/7, camera an ninh toàn khu.<br><br>* Đặc biệt, mua nhà phố có sổ sẵn, không
                    rủi ro pháp lý.<br><br>* Liên hệ hotline <span
                      class="hidden-mobile hidden-phone m-cover js__btn-tracking"
                      raw="03588ea85e022c1ea06c9c8c70712986" tracking-id="lead-phone-ldp"
                      tracking-label="loc=Sale-Listing Details-body,prid=39056545">0916 770
                                            ***</span> để nhận báo giá &amp; đăng ký tham quan.
                  </div>

                  <a href="javascript:void(0)" class="show__more-button ">đọc thêm</a>
                </div>
              </div>
              <div class="clearfix"></div>

              <!-- PROPERTY DETAILS SPEC -->
              <div class="single__detail-features">
                <h6 class="text-capitalize detail-heading">Thông tin</h6>
                <!-- INFO PROPERTY DETAIL -->
                <div class="property__detail-info">
                  <div class="row">
                    <div class="col-md-6 col-lg-6">
                      <ul class="property__detail-info-list list-unstyled">
                        <li><b>Mã BĐS (ID):</b> RV151</li>
                        <li><b>Diện Tích:</b> 1466m2</li>
                        <li><b>Phòng Ngủ:</b> 4</li>
                        <li><b>Phòng Tắm:</b> 2</li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <ul class="property__detail-info-list list-unstyled">
                        <li><b>Garage:</b> 1</li>
                        <li><b>Diện Tích Garage:</b> 458m2</li>
                        <li><b>Năm Xây Dựng:</b> 2019-01-09</li>
                        <li><b>Loại BĐS:</b> Nhà Ở Gia Đình Đầy Đủ</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- END INFO PROPERTY DETAIL -->
              </div>
              <!-- END PROPERTY DETAILS SPEC -->
              <div class="clearfix"></div>

              <!-- FEATURES -->
              <div class="single__detail-features">
                <h6 class="text-capitalize detail-heading">Tiện ích</h6>
                <ul class="list-unstyled icon-checkbox">
                  <li>Điều hòa không khí</li>
                  <li>Bể bơi</li>
                  <li>Điều hòa trung tâm</li>
                  <li>Spa & Massage</li>
                  <li>Cho phép nuôi thú cưng</li>

                  <li>Điều hòa không khí</li>
                  <li>Phòng tập gym</li>
                  <li>Báo động</li>

                  <li>Rèm cửa</li>
                  <li>Wi-Fi miễn phí</li>
                  <li>Chỗ đậu xe ô tô</li>
                  <li>Miễn thuế 3 năm</li>

                </ul>
              </div>
              <!-- END FEATURES -->

              <!-- FLOR PLAN -->
              <div class="single__detail-features">
                <h6 class="text-capitalize detail-heading">Sơ đồ nhà</h6>
                <!-- FLOR PLAN IMAGE -->
                <div id="accordion" class="floorplan" role="tablist">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                      <a class="text-capitalize" data-toggle="collapse" href="#collapseOne"
                         aria-expanded="true" aria-controls="collapseOne">
                        tầng 1
                      </a>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel"
                         aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <figure>
                          <img src="images/floorplan.jpg" alt="" class="img-fluid">
                        </figure>

                        Tầng 1: Phòng khách, bếp, phòng ăn, WC khách, và sân để xe.



                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">

                      <a class="collapsed text-capitalize" data-toggle="collapse"
                         href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Tầng 2
                      </a>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel"
                         aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <figure>
                          <img src="images/floorplan2.jpg" alt="" class="img-fluid">
                        </figure>
                        Tầng 2: Phòng ngủ chính với phòng tắm riêng, phòng ngủ phụ, và phòng làm
                        việc hoặc phòng đọc sách.



                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" role="tab" id="headingThree">
                      <a class="collapsed text-capitalize" data-toggle="collapse"
                         href="#collapseThree" aria-expanded="false"
                         aria-controls="collapseThree">
                        Tầng 3
                      </a>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel"
                         aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <figure>
                          <img src="images/floorplan3.jpg" alt="" class="img-fluid">
                        </figure>
                        Tầng 3: Phòng ngủ phụ, phòng thờ, phòng giải trí, và sân phơi.








                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- END FLOR PLAN -->
              <div class="single__detail-features">
                <h6 class="text-capitalize detail-heading">Video căn nhà</h6>
                <div class="single__detail-features-video">
                  <figure class=" mb-0">
                    <div class="home__video-area text-center">
                      <img src="images/bg13.jpg" alt="" class="img-fluid">
                      <a href="https://www.youtube.com/watch?v=qqmsDn9npbg" class="play-video-1 ">
                        <i class="icon fa fa-play text-white"></i>
                      </a>
                    </div>

                  </figure>
                </div>
              </div>




              <!-- NEARBY -->
              <div class="single__detail-features">
                <h6 class="text-capitalize detail-heading">Tiện ích gần đây</h6>
                <div class="single__detail-features-nearby">
                  <h6 class="text-capitalize"><span>
                                            <i class="fa fa-building "></i></span>Giải trí</h6>
                  <ul class="list-unstyled">
                    <li>
                      <span>Nhà sách</span>
                      <p>2.2 km</p>
                    </li>
                    <li>
                      <span>Phố nhậu</span>
                      <p>3.5 km</p>

                    </li>
                    <li>
                      <span>Rạp phim</span>
                      <p>2.5 km</p>
                    </li>

                  </ul>

                  <h6 class="text-capitalize"><span><i class="fa fa-ambulance"></i></span>Y tế và giáo
                    dục
                  </h6>
                  <ul class="list-unstyled">
                    <li>
                      <span>Bệnh viện</span>
                      <p>2.5 km</p>
                    </li>
                    <li>
                      <span>Trường học</span>
                      <p>3.5 km</p>

                    </li>

                  </ul>
                </div>
              </div>
              <!-- END NEARBY -->

              <!-- RATE US  WRITE -->
              <div class="single__detail-features">
                <h6 class="text-capitalize detail-heading">Đánh giá</h6>
                <div class="single__detail-features-review">
                  <div class="media mt-4">
                    <img class="mr-3 img-fluid rounded-circle"
                         src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg"
                         alt="">
                    <div class="media-body">
                      <h6 class="mt-0">Trần Trọng</h6>
                      <span class="mb-3">24 th 12, 2023</span>
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <i class="fa fa-star selected"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="list-inline-item">3/5</li>
                      </ul>
                      <p> BĐS lừa đảo, gọi chủ không nghe máy. </p>


                    </div>
                  </div>

                  <!-- COMMENT -->
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="mb-2">Để lại đánh giá của bạn:</p>
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <i class="fa fa-star selected"></i>
                          <i class="fa fa-star selected"></i>
                          <i class="fa fa-star selected"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="list-inline-item">3/5</li>
                      </ul>
                      <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" required="required">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required="required">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" required="required">

                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" rows="4"></textarea>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary float-right "> Gửi feedback <i
                      class="fa fa-paper-plane ml-2"></i></button>
                  <!-- END COMMENT -->

                </div>
              </div>
              <!-- END RATE US  WRITE -->
            </div>
          </div>
          <!-- END DESCRIPTION -->
        </div>
        <div class="col-lg-4">

          <!-- FORM FILTER -->
          <div class="products__filter mb-30">
            <!-- <div class="products__filter__group">
                <div class="products__filter__header">

                    <h5 class="text-center text-capitalize">Đặt cọc dự án </h5>

                </div>
                <div class="products__filter__body">

                    <div class="form-group">
                        <label>Giá khởi điểm</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">VND</span>

                            </div>
                            <input type="text" class="form-control" value="1,000,000,000" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Đấu tối thiểu</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">VND</span>

                            </div>
                            <input type="text" class="form-control" value="1,400,000,000" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bước nhảy</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">VND</span>
                            </div>
                            <input type="text" class="form-control" value="500,000,000" disabled>
                        </div>
                    </div>



                    <div class="form-group">
                        <label>Số tiền bạn cọc</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">VND</span>

                            </div>
                            <input type="text" class="form-control" placeholder="Tối thiểu 1,900,000,000">
                        </div>
                    </div>
                </div>
                <div class="products__filter__footer">
                    <div class="form-group mb-0">
                        <button data-toggle="modal" data-target="#calculate_modal"
                            class="btn btn-primary text-capitalize btn-block"> đấu giá ngay
                            <i class="fa fa-calculator ml-1"></i>
                        </button>

                    </div>
                </div>
            </div> -->


            <div class="profile__agent mb-30">
              <div class="profile__agent__group">

                <div class="profile__agent__header">
                  <div class="profile__agent__header-avatar">
                    <figure>
                      <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                    </figure>

                    <ul class="list-unstyled mb-0">
                      <li>
                        <h5 class="text-capitalize">thành long</h5>
                      </li>
                      <li><a href="tel:123456"><i class="fa fa-phone-square mr-1"></i>0999999999</a></li>
                      <li><a href="javascript:void(0)"><i class=" fa fa-building mr-1"></i>
                          CTY BĐS Thành Long</a>
                      </li>
                    </ul>


                  </div>

                </div>

                <div class="profile__agent__footer">
                  <div class="form-group mb-0">
                    <button class="btn btn-primary text-capitalize btn-block"> liên hệ <i class="fa fa-phone-square ml-1"></i></button>

                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>
      </div>


    </div>
  </section>
  <!-- END SINGLE DETAIL -->

@endsection

@include ('layouts/fontend/head')


<body>
  @include ('layouts/fontend/header')


  <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>หน้าหลัก/ชิ้นส่วนหมู</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">ทั้งหมด</li>
              <li data-filter=".filter-parts">เนื้อแดง</li>
              <li data-filter=".filter-offal">ประเภทซี่โครง+กระดูก</li>
              <li data-filter=".filter-Steak">เครื่องใน</li>
              <!-- <li data-filter=".filter-BBQ">ซี่โครงหมูบาร์บีคิว</li>
              <li data-filter=".filter-Shabu">หมูสไลด์ชาบู</li>
              <li data-filter=".filter-Sliders">หมูสไลด์ปิ้ง/ย่าง</li>
              <li data-filter=".filter-Marinated">หมูหมัก</li>
              <li data-filter=".filter-processed">สินค้าแปรรูป</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-parts">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>หมูบด</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-parts">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>หมู 3 ชั้น</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-parts">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>สันนอกหมู</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-parts">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>สะโพกหมู</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-parts">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo5.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>สันคอหมู</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-offal">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo12.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ขาตั้งหมู</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo12.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-offal">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo11.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ซี่โครงหมู</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo11.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Steak">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo22.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ใส้ตัน</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo22.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Steak">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/assetsfont/img/moo21.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>ตับหมู</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/assetsfont/img/moo21.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    @include ('layouts/fontend/footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/assetsfont/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/assetsfont/js/main.js')}}"></script>

</body>

</html>
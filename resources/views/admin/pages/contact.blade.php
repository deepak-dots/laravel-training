<!doctype html>
<html>
<head>
   @include('admin.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="container">
            <header class="row">
                @include('admin.includes.header')
                @include('admin.includes.sidebar');
            </header>
            <div id="main" class="row">
            <div class="content-wrapper">
                  <!-- Main content -->
                  <section class="content">
                    <div class="container-fluid">
                      <!-- Small boxes (Stat box) -->
                      <div class="row">
                        <div class="col-lg-12 col-12">
                        <div class="card">
                              <div class="card-header">Contact</div>

                              <span class="desktop-video" data-desktop-video="https://cdn.shopify.com/s/files/1/0598/9266/2411/files/Final-11_1000x.jpg?v=1663050882"></span>
                              <span class="mobile-video" data-mobile-video="https://cdn.shopify.com/s/files/1/0598/9266/2411/files/RKL_5126_700x_5190b403-32aa-45d9-ad67-fc689fccd5af_400x.progressive.jpg?v=1680006428"></span>
                              <div class="banner-image">
                                <img src="">
                              </div>

                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <!-- /.row -->
                      <!-- Main row -->
                      <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->
                  </section>
                  <!-- /.content -->
            </div>
            </div>
            <footer class="row">
                @include('admin.includes.footer')
            </footer>
        </div>
    </div>
</body>
</html>


<script>

$(document).ready(function() {
  $windowWidth = $(this).width();
    if($windowWidth > 768){
      var getAttr = $('.desktop-video').attr("data-desktop-video");
      $(".banner-image img").attr("src",getAttr);
    }else{
      var getAttr = $('.mobile-video').attr("data-mobile-video");
      $(".banner-image img").attr("src",getAttr);
    }
});

$(window).on('resize', function() {
    $windowWidth = $(this).width();
    if($windowWidth > 768){
      var getAttr = $('.desktop-video').attr("data-desktop-video");
      $(".banner-image img").attr("src",getAttr);
    }else{
      var getAttr = $('.mobile-video').attr("data-mobile-video");
      $(".banner-image img").attr("src",getAttr);
    }
});


</script>
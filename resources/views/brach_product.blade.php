<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!---------Seo--------->
  <meta name="description" content="{{$meta_desc}}">
  <meta name="keywords" content="{{$meta_keywords}}"/>
  <meta name="robots" content="INDEX,FOLLOW"/>
  <link  rel="canonical" href="{{$url_canonical}}" />
  <meta name="author" content="">
  <link  rel="icon" type="image/x-icon" href="" />

  {{--   <meta property="og:image" content="{{$image_og}}" />  
  <meta property="og:site_name" content="http://localhost/tutorial_youtube/shopbanhanglaravel" />
  <meta property="og:description" content="{{$meta_desc}}" />
  <meta property="og:title" content="{{$meta_title}}" />
  <meta property="og:url" content="{{$url_canonical}}" />
  <meta property="og:type" content="website" /> --}}
  <!--//-------Seo--------->
  <title>{{$meta_title}}</title>

  <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">


  <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
  <!--     <link href="header.css" rel="stylesheet"> -->
  <link href="{{asset('fullll.css')}}" rel="stylesheet">
  <link href="{{asset('section2.css')}}" rel="stylesheet">
  <link href="{{('responsivefrontend.css')}}" rel="stylesheet"> 
  <!--      -->
  <link href="{{asset('public/frontend/css/jquery.convform.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->       
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<style>
  header{
    background-color: #d3d3d3;
    background-image: linear-gradient(315deg, #d3d3d3 0%, #7f8c8d 24%);

    background-size:cover;
    background-position: center;
    background-repeat: no-repeat;

    width: 100vw;
    overflow: hidden;

  }
  #slide-out{
    background-color: transparent;
    box-shadow: 10px 10px 20px 0px #666;
    width: 17.5%;

  }  
  .panel.panel-default {
    background-color: transparent;
    transition: 0.4s  ease-out;

  }
  .panel-title {
    text-transform: uppercase;
    border-radius: 30px;
    border-bottom: 2px solid black;  
    text-align: center;
    width: 80%;
    margin-left: 10%;
  }

  .panel.panel-default:hover{
    transform: scale(1.1);
  }
  .panel-group .panel{
    border: none;
  }
  nav{
    background-color: transparent;
  }
  .nav-wrapper ul{
    margin-right: 20%;
  }
  .nav-wrapper ul li{
    margin-left: 5rem;

  }
  .title.text-center{
    color: white;

    width: 25%;

    position: relative;
    left: 38%;
    border-bottom: 2px solid white;
    margin-bottom: 5%;
    font-size: 200%;
    font-weight: 700;
  }
  .panel-group.category-products{
    margin-top: 25%;
    margin-bottom: 20%;
  }
  .swiper-container {
    width: 100%;
    height: 30vh;
    margin-top: 2%;

  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }
  .swiper-slide{
    width: 100%;
    height: 100%;
  }
  .single-products strong{
    color: #bf081f;
    font-size: 150%;
    font-weight: 700;
  }
  .single-products img{
    width: 70%;
    margin: 15%;
    height: 18rem;
  }
  .single-products:hover a{
    text-decoration: none;
  }
  .branch:hover{
   text-decoration: none;
 }
 .product-image-wrapper{
  border: 1px dotted black;
  border-radius: 10px;
}
.branch strong{
  display: block;
}


.branch h4{
  font-size: 120%;
  color: white;


}
.branch img{
  transition: 0.5s ease-out; 
}
.branch:hover img{
  transform: translate(0%, -5%);
}
.branch input{
  margin-bottom: 5%;
  margin-top: 2%;
}
#nav-mobile li a{
  text-decoration: none;
  color: white;
  font-size: 100%;


}
#slide-out ul{
  height: 100%;
}

#slide-out ul li a{
  text-decoration: none; 

}
.slider{

  width: 90%;
  height: 20vh;
  border-radius: 10px;
  overflow: hidden;

  margin-left: 7%;
}
.slides{
  width: 500%;
  height: 20vh;
  display: flex;
}
.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}
.slide img{
  width: 100%;
  height: 100%;
}
.navigation-manual{
  position: absolute;
  bottom: 10%;
  left: 40%;
}
.navigation-auto{
 opacity: 0;
}
.manual-btn{
  border:2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}
.manual-btn:not(:last-child){
  margin-right: 40px;
}
.manual-btn:hover{
  background:  #40D3DC;
}
#radio1:checked ~ .first{
  margin-left: 0;
}
#radio2:checked ~ .first{
  margin-left: -20%;
}
#radio3:checked ~ .first{
  margin-left: -40%;
}
#radio4:checked ~ .first{
  margin-left: -60%;
}
.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 23%;
}
.navigation-auto div{
  border:2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}
.navigation-auto div:not(:last-child){
  margin-right: 40px; 
}
#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}
#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}
#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}
#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}

.swiper-container{
  height: 75vh;
  width: 14vw;

}
.footer{
  height: 20vh;
}
.btn.btn-primary.btn-sm{
  border-radius: 10px;
}
.features_items{
  z-index: 1;
}
#navmenu li a {
  background: transparent;
  color: white;
  font-size: 120%;
}
 #id1{
  background-image: url('https://cdn.tgdd.vn/2021/03/banner/DHcapdoi-330x428.png');
  background-size:cover;
 }
 #id2{

  background-image: url('https://cdn.tgdd.vn/2021/05/banner/222440-222x440.png');
  background-size:cover;
 }
 #id3{

  background-image: url('https://cdn.tgdd.vn/2021/03/banner/DHphaidep-330x428.png');
  background-size:cover;
 }
  #id4{

  background-image: url('https://cdn.tgdd.vn/2021/05/banner/dhdqtgdd-330x428.png');
  background-size:cover;
 }
 #clock{
  position: absolute;
  right: 2%;
  top: 0;
  height: 10%;

}
#clock #time{
   display: flex;
}
#clock #time div{
  position: relative;
  margin: 0 5px;
  -webkit-box-reflect: below 1px linear-gradient(transparent,#0004  );
}
#clock #time div span{
  position: relative;
    display: block;
    width: 100%;
    height: 80px;
    background: #2196f3;
    color: black;
    font-weight: 300;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 3em;
z-index: 10;
box-shadow: 0 0 0 1px rgba(0,0,0,.2);

}
#clock #time div span:nth-child(2){
  height: 30px;
  font-size: 0.7em;
letter-spacing: 0.2em;
font-weight: 700;
z-index: 9;
box-shadow: none;
background:#127fd6
;
text-transform: uppercase;
}
#clock #time div:last-child span{
  background: #ff006a;
}
#clock #time div:last-child span:nth-child(2){
  background: #ec0062;

}

 
</style>

<body>
 <header>
  <div id="clock">
  <div id="time">
    <div><span id="hour">00</span><span>HOURS</span></div>
    <div><span id="minutes">00</span><span>Minutes</span></div>
    <div><span id="seconds">00</span><span>Seconds</span></div>
  </div>
</div>

   <!-- /header -->
   <div class="header-bottom" style="overflow: hidden"><!--header-bottom-->
    <div class="container">

      <div class="row" >

        <div class="col-sm-1">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>


        </div>

        <div class="col-sm-8">
          <div class="shop-menu pull-right">
            <ul id="navmenu"class="nav navbar-nav navbar-collapse">

             <li><a href="{{URL::to('/trang-chu')}}" class="active"><i class="fa fa-home"></i>TRANG CHỦ</a></li>

           </li> 

           <?php
           $customer_id = Session::get('customer_id');
           $shipping_id = Session::get('shipping_id');
           if($customer_id!=NULL && $shipping_id==NULL){ 
           ?>
           <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>THANH TOÁN</a></li>

           <?php
         }elseif($customer_id!=NULL && $shipping_id!=NULL){
         ?>
         <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>THANH TOÁN</a></li>
         <?php 
       }else{
       ?>
       <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> THANH TOÁN</a></li>
       <?php
     }
     ?>


     <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> GIỎ HÀNG</a></li>
     <?php
     $customer_id = Session::get('customer_id');
     if($customer_id!=NULL){ 
     ?>
     <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>ĐĂNG XUẤT</a></li>

     <?php
   }else{
   ?>
   <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> ĐĂNG NHẬP</a></li>
   <?php 
 }
 ?>

</ul>
</div>
</div>
<div class="col-sm-3">
  <form action="{{URL::to('/tim-kiem')}}" autocomplete="off" method="POST">
    {{csrf_field()}}
    <div class="search_box">

      <input type="text" style="width: 100%" name="keywords_submit" id="keywords" placeholder="Tìm kiếm sản phẩm"/>
      <div id="search_ajax"></div>

      <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm ">

    </div>
  </form>
</div>

</div>
</div>
</div>
<!-- swiper -->

<!-- Add Pagination -->


<!--  -->
<div class="navside" >
 
  <ul  id="slide-out" class="sidenav sidenav-fixed" style="background-color: transparent;">

    <div class="panel-group category-products" id="accordian">
      <h6 style="text-align: center; margin-bottom: 5vh; color:#FE980F;font-weight: 700;">DANH MỤC SẢN PHẨM</h6><!--category-productsr-->
      @foreach($category as $key => $cate)

      <ul class="panel panel-default">

        <li style=" background-color: transparent;"  class="panel-title"><a style="color:white" href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>

      </ul>
      @endforeach
    </div>


    <li><div class="divider"></div></li>
    <div class="panel-group category-products" >
      <h6 style="text-align: center; margin-bottom: 5vh; color:#FE980F;font-weight: 700;">THƯƠNG HIỆU SẢN PHẨM</h6><!--category-productsr-->
      @foreach($brand as $key => $brand)

      <ul class="panel panel-default">

        <li style=" background-color: transparent;"  class="panel-title"><a style="color:white" href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}">{{$brand->brand_name}}</a></li>

      </ul>
      @endforeach
    </div>
  </ul>
</div>





<!-- slide -->
   <!--  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://images.search.yahoo.com/images/view;_ylt=Awr9Hr6BI4RgUjAAb76JzbkF;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzY3MTBhMzA3N2ZkNGI5NzZhZTFlYTlmMDJmOGUxY2E5BGdwb3MDMwRpdANiaW5n?back=https%3A%2F%2Fimages.search.yahoo.com%2Fsearch%2Fimages%3Fp%3D%25E1%25BA%25A3nh%2Bgame%26fr%3Dmcafee%26fr2%3Dpiv-web%26tab%3Dorganic%26ri%3D3&w=1920&h=1280&imgurl=wall.vn%2Fwp-content%2Fuploads%2F2020%2F04%2Fhinh-nen-game-dep-6.jpg&rurl=https%3A%2F%2Fwall.vn%2Fhinh-nen-game-full-hd-dep-sieu-net.html&size=533.0KB&p=%E1%BA%A3nh+game&oid=6710a3077fd4b976ae1ea9f02f8e1ca9&fr2=piv-web&fr=mcafee&tt=Chia+s%E1%BA%BB+100+h%C3%ACnh+n%E1%BB%81n+game+Full+HD+%C4%91%E1%BA%B9p+si%C3%AAu+n%C3%A9t+cho+game+th%E1%BB%A7&b=0&ni=21&no=3&ts=&tab=organic&sigr=_ew7ZpOTLf7X&sigb=Dey4DC1hqrBQ&sigi=cDY9cSsLHtsG&sigt=iZXAsuKSKqZi&.crumb=eDNy1GN/WZz&fr=mcafee&fr2=piv-web" alt=""></a>
    <a class="carousel-item" href="#two!"></a>
    <a class="carousel-item" href="#three!"></a>
    <a class="carousel-item" href="#four!"></a>
    <a class="carousel-item" href="#five!"></a>
  </div> -->
  <div class="features_items"><!--features_items-->

    <div class="row">
     <div class="col-sm-2"></div>
     <div class="col-sm-8" >
      @yield('content')
    </div><!--features_items-->
    <div class="col-sm-2" >
     <div class="swiper-container">
      <div class="swiper-wrapper">
        <div id="id1" class="swiper-slide">Slide 1</div>
        <div id="id2"class="swiper-slide">Slide 2</div>
        <div id="id3"class="swiper-slide">Slide 3</div>
        <div id="id4" class="swiper-slide">Slide 4</div>

      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
</div>
</header>
<footer id="footer" style="height: 7vh;"><!--Footer-->

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
      </div>
    </div>
  </div>

</footer>


<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.convform.js')}}"></script> 
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>
<!-- <script type="text/javascript">
  $(document).ready(function(){  

    load_comment();

        function load_comment(){
              var product_id = $('.comment_product_id').val();
              var _token = $('input[name="_token"]').val();
              $.ajax({
              url:'{{url('/load-comment')}}',
              method:"POST",
              data:{product_id:product_id, _token:_token},
              success:function(data){
               
                $('#comment_show').html(data);
              }
             });
        }    
        $('.send-comment').click(function(){
            var product_id = $('.comment_product_id').val();
            var comment_name = $('.comment_name').val();
            var comment_content = $('.comment_content').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:'{{url('/send-comment')}}',
              method:"POST",
              data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content, _token:_token},
              success:function(data){
                $('#notify_comment').html('<span class="text text-success">Thêm bình luận thành công , bình đang chờ kiểm duyệt</span>');
                load_comment();
                $('#notify_comment').fadeOut(7000);
                $('.comment_name').val('');
                $('.comment_content').val('');
              }
             });

        });
  });
</script> -->

<script type="text/javascript">

  $(document).ready(function(){
    $('.send_order').click(function(){
      swal({
        title: "Xác nhận đơn hàng",
        text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Cảm ơn, Mua hàng",

        cancelButtonText: "Đóng,chưa mua",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
       if (isConfirm) {
        var shipping_email = $('.shipping_email').val();
        var shipping_name = $('.shipping_name').val();
        var shipping_address = $('.shipping_address').val();
        var shipping_phone = $('.shipping_phone').val();
        var shipping_notes = $('.shipping_notes').val();
        var shipping_method = $('.payment_select').val();
        var order_fee = $('.order_fee').val();
        var order_coupon = $('.order_coupon').val();
        var _token = $('input[name="_token"]').val();

        $.ajax({
          url: '{{url('/confirm-order')}}',
          method: 'POST',
          data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
          success:function(){
           swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
         }
       });

        window.setTimeout(function(){ 
          location.reload();
        } ,3000);

      } else {
        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

      }
      
    });

      
    });
  });
  

</script>
<script type="text/javascript">
  $('#keywords').keyup(function(){
    var query = $(this).val();

    if(query != '')
    {
     var _token = $('input[name="_token"]').val();

     $.ajax({
      url:"{{url('/autocomplete-ajax')}}",
      method:"POST",
      data:{query:query, _token:_token},
      success:function(data){
       $('#search_ajax').fadeIn();  
       $('#search_ajax').html(data);
     }
   });

   }else{

    $('#search_ajax').fadeOut();  
  }
});

  $(document).on('click', '.li_search_ajax', function(){  
    $('#keywords').val($(this).text());  
    $('#search_ajax').fadeOut();  
  }); 
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.add-to-cart').click(function(){

      var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                  alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                }else{

                  $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                    success:function(){

                      swal({
                        title: "Đã thêm sản phẩm vào giỏ hàng",
                        text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                        showCancelButton: true,
                        cancelButtonText: "Xem tiếp",
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Đi đến giỏ hàng",
                        closeOnConfirm: false
                      },
                      function() {
                        window.location.href = "{{url('/gio-hang')}}";
                      });

                    }

                  });
                }

                
              });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.choose').on('change',function(){
      var action = $(this).attr('id');
      var ma_id = $(this).val();
      var _token = $('input[name="_token"]').val();
      var result = '';

      if(action=='city'){
        result = 'province';
      }else{
        result = 'wards';
      }
      $.ajax({
        url : '{{url('/select-delivery-home')}}',
        method: 'POST',
        data:{action:action,ma_id:ma_id,_token:_token},
        success:function(data){
         $('#'+result).html(data);     
       }
     });
    });
  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.calculate_delivery').click(function(){
      var matp = $('.city').val();
      var maqh = $('.province').val();
      var xaid = $('.wards').val();
      var _token = $('input[name="_token"]').val();
      if(matp == '' && maqh =='' && xaid ==''){
        alert('Làm ơn chọn để tính phí vận chuyển');
      }else{
        $.ajax({
          url : '{{url('/calculate-fee')}}',
          method: 'POST',
          data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
          success:function(){
           location.reload(); 
         }
       });
      } 
    });
  });
</script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<script type="text/javascript">
  var counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
      counter =1 ;
    }
  },5000);
</script>
<script>
  $(document).ready(function(){
    $('.chaticon').click(function(event){
      $('.chatbot').toggleClass('active');
      $('.close').toggleClass('show')
      $('.close').toggleClass('animate__backInUp ')

    });


    $('.conv-form-wrapper').convform({selectInputStyle: 'disable'});
  })
</script>
<script>
  $(document).ready(function(){
    $('.close').click(function(event){
      $('.chatbot').removeClass('active');
      $('.close').removeClass('show');        })
  })
</script>
<script >
  var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 4000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };
  
  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function() {
      that.tick();
    }, delta);
  };
  
  window.onload = function() {
    var elements = document.getElementsByClassName('text');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
  };
</script>
<script>
  var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 1,
    spaceBetween: 30,
    mousewheel: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
</script>
<script>
  function clock(){
 var hours=document.getElementById('hour');
  var minutes=document.getElementById('minutes');
   var seconds=document.getElementById('seconds');
   var h= new Date().getHours();
   var m= new Date().getMinutes();
   var s = new Date().getSeconds();
   hours.innerHTML = h;
      minutes.innerHTML = m;
         seconds.innerHTML = s;
  }
  var interval=setInterval(clock,1000);
</script>
</body>
</html>
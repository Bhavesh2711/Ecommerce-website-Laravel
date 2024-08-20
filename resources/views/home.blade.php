@extends('master')
@section("content")

<style>
  .product-carousel {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .carousel-items {
    display: flex;
    overflow: hidden;
    width: 100%;
  }

  .carousel-item2 {
    flex: 0 0 20%;
    margin: 0 10px;
    background: #fff;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    border-radius: 8px;
  }

  .carousel-item2 img {
    width: 100%;


  }

  .offer-label {
    color: red;
    font-weight: bold;
    margin: 10px 0;
  }

  .rating {
    color: #ff9900;
  }

  .price {
    font-size: 1.5em;
    font-weight: bold;
  }

  .old-price {
    text-decoration: line-through;
    color: #999;
    margin-left: 10px;
  }

  .shop-button {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
    margin-top: 10px;
  }

  .carousel-button {
    /* background: none; */
    /* border: none; */
    font-size: 2em;
    cursor: pointer;
    border-radius: 71px;
    width: 55px;
}
button.carousel-button.next {
    position: absolute;
    right: 314px;
}
  .prev {
    margin-right: 10px;
  }

  .next {
    margin-left: 10px;
  }
  .viewsallbuuton {
    text-align: center;
    padding-top: 48px;
}
button.viewallsale {
    background-color: #fafafa;
    padding: 9px;
    border-radius: 6px;
    width: 105px;
}
button.viewallsale:hover{
  background-color:#d51218;
    padding: 9px;
    border-radius: 6px;
    width: 105px;
    color: #fafafa;
    border-color: #fafafa;
}




.section--home-col-tab .home-coll-tab1 li.nav-item {
    margin: 20px 36px 15px;
}
.home-coll-tab1 li.nav-item {
    display: block;
    margin: 20px 36px;
    padding: 8px;
    text-align: center;
}
</style>
<script>
  $(document).ready(function() {
    $('.next').click(function() {
      var itemWidth = $('.carousel-item2').outerWidth(true);
      $('.carousel-items').animate({
        scrollLeft: '+=' + itemWidth
      }, 300);
    });

    $('.prev').click(function() {
      var itemWidth = $('.carousel-item2').outerWidth(true);
      $('.carousel-items').animate({
        scrollLeft: '-=' + itemWidth
      }, 300);
    });
  });
</script>
<div class=" custom-product">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('uploads/Desktop-baner_Gift.jpg') }}" alt="Image 1" class="submenu-image" style="width: 100%;height: 100%;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('uploads/Desktop-banner-ID_bedroom-01.jpg') }}" alt="Image 1" class="submenu-image" style="width: 100%;height: 100%;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('uploads/Desktop-banner-ID_Decor-04.jpg') }}" alt="Image 1" class="submenu-images" style="width: 100%;height: 100%; ">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('uploads/Desktop-banner-ID_Dining-Room-03.jpg') }}" alt="Image 1" class="submenu-image" style="width: 100%;height: 100%;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('uploads/Desktop-banner-ID_Living-Room-02.jpg') }}" alt="Image 1" class="submenu-image" style="width: 100%;height: 100%;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('uploads/gift-card.jpg') }}" alt="Image 1" class="submenu-image" style="width: 100%;height: 100%; ">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>



<!-- box section -->
<div class="box-container">
  <div class="main">
    <div class="box1">
      <img src="{{ asset('uploads/Fast_and_free_delivary.svg') }}" alt="Image 1" class="box-image" style="width: auto;height: auto;">
    </div>
    <div class="box_main1">
      Fast & Free Delivery
    </div>
  </div>
  <div class="main">
    <div class="box2">
      <img src="{{ asset('uploads/Easy_return_9105d926-f8d0-4aff-afc6-b94680586c17.svg') }}" alt="Image 1" class="box-image" style="width: auto;height: auto;">
    </div>
    <div class="box_main1">
      Easy Returns
    </div>
  </div>
  <div class="main">
    <div class="box3">
      <img src="{{ asset('uploads/Assurance.svg') }}" alt="Image 1" class="box-image" style="width: auto;height: auto;">
    </div>
    <div class="box_main1">
      Nilkamal Assurance
    </div>
  </div>

  <div class="main">
    <div class="box4">
      <img src="{{ asset('uploads/no_cost_EMI.svg') }}" alt="Image 1" class="box-image" style="width: auto;height: auto;">
    </div>
    <div class="box_main1">
      No Cost EMI
    </div>
  </div>
</div>


<!-- Explore Big Sale Top Picks section -->

<div class="explore-section">
  <div class="explore-sale-section">
    <div class="exploare-sale-heading">
      <h2>Explore Big Sale Top Picks</h2>
    </div>

    <div class="container">
      <div class="product-carousel">
        <button class="carousel-button prev">&lt;</button>

        <div class="carousel-items">

          <div class="carousel-item2">

            <img src="{{ asset('uploads/JONASLOWHEIGHTWALLUNITCLASSICWALNUT_FLWUJONASWUCSICWLT_01.jpg') }}" alt="Florine Engineered Wood 4 Tier Shoe Rack">
            <div class="offer-label">HOT OFFERS</div>
            <h6>Florine Engineered Wood 4 Tier Shoe Rack (Walnut & Wenge)</h6>
            <div class="rating">★★★★★ (37)</div>
            <div class="price">₹7,490 <span class="old-price">₹18,900</span></div>
            <button class="shop-button">Shop</button>
          </div>
          <div class="carousel-item2">

            <img src="{{ asset('uploads/HAMPTONARMCHAIRTEAK_FIACHAMPTONTEAK_01_1500x.jpg') }}" alt="Florine Engineered Wood 4 Tier Shoe Rack">
            <div class="offer-label">HOT OFFERS</div>
            <h6>Florine Engineered Wood 4 Tier Shoe Rack (Walnut & Wenge)</h3>
              <div class="rating">★★★★★ (37)</div>
              <div class="price">₹7,490 <span class="old-price">₹18,900</span></div>
              <button class="shop-button">Shop</button>
          </div>
          <div class="carousel-item2">

            <img src="{{ asset('uploads/FLORINE4TshoecabinetLS_2000x.jpg') }}" alt="Florine Engineered Wood 4 Tier Shoe Rack">
            <div class="offer-label">HOT OFFERS</div>
            <h6>Florine Engineered Wood 4 Tier Shoe Rack (Walnut & Wenge)</h3>
              <div class="rating">★★★★★ (37)</div>
              <div class="price">₹7,490 <span class="old-price">₹18,900</span></div>
              <button class="shop-button">Shop</button>
          </div>
          <div class="carousel-item2">

            <img src="{{ asset('uploads/322lyf_700x.jpg') }}" alt="Florine Engineered Wood 4 Tier Shoe Rack">
            <div class="offer-label">HOT OFFERS</div>
            <h6>Florine Engineered Wood 4 Tier Shoe Rack (Walnut & Wenge)</h3>
              <div class="rating">★★★★★ (37)</div>
              <div class="price">₹7,490 <span class="old-price">₹18,900</span></div>
              <button class="shop-button">Shop</button>
          </div>
          <div class="carousel-item2">

            <img src="{{ asset('uploads/JOYCE3DRLS_2000x.jpg') }}" alt="Florine Engineered Wood 4 Tier Shoe Rack">
            <div class="offer-label">HOT OFFERS</div>
            <h6>Florine Engineered Wood 4 Tier Shoe Rack (Walnut & Wenge)</h3>
              <div class="rating">★★★★★ (37)</div>
              <div class="price">₹7,490 <span class="old-price">₹18,900</span></div>
              <button class="shop-button">Shop</button>
          </div>
          <div class="carousel-item2">

            <img src="{{ asset('uploads/Untitled-6-01_b891907b-3482-4c0e-9a0b-23c1220899f8_700x.png') }}" alt="Florine Engineered Wood 4 Tier Shoe Rack">
            <div class="offer-label">HOT OFFERS</div>
            <h6>Florine Engineered Wood 4 Tier Shoe Rack (Walnut & Wenge)</h3>
              <div class="rating">★★★★★ (37)</div>
              <div class="price">₹7,490 <span class="old-price">₹18,900</span></div>
              <button class="shop-button">Shop</button>
          </div>
          <!-- Add more items similarly -->
        </div>

        <button class="carousel-button next">&gt;</button>
      </div>

    </div>
    <div class="viewsallbuuton">
      <button class="viewallsale">ViewAll</button>
    </div>
  </div>

  <li class="nav-item active" data-tab="tab-1">
        <a class="nav-link active" id="tabd6e248463dbe4b9580bc67106d1c1c62" data-toggle="tab" href="#Dining Sets" role="tab" aria-controls="tabd6e248463dbe4b9580bc67106d1c1c62" aria-selected="true">
           <img data-sizes="auto" class="lazyload" data-src="//www.at-home.co.in/cdn/shopifycloud/shopify/assets/no-image-100-c91dd4bdb56513f2cbf4fc15436ca35e9d4ecd014546c8d421b1aece861dfecf_small.gif">Dining Sets
        </a>
      </li>

      <div class="container" style="padding-top: 100px;">
    <div class="row custome_row">
        @if(isset($categories))
        @foreach($categories as $category)
        <div class="col-md-6 mb-6">
            <div class="card1">
                <img src="{{ asset('uploads/' . $category->gallery) }}" class="card-img-top" alt="Category Image" height="auto" width="auto">
                
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

</div>
@endsection
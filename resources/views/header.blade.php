<?php

use App\Http\Controllers\Productcontroller;
use Illuminate\Contracts\Session\Session;

$total = 0;
if (session()->has('user')) {
  $total = Productcontroller::cartItem();
}
?>
<style>
  .container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;

  }


  .navbar {
    background-color: #ffffff;

  }
.container-fluid{
height: 130px;
position: relative;
}
  .navbar-brand,
  .navbar-nav .nav-link {
    color: #fff !important;

  }

  .form-contact {
    border: 1px solid gray;
    background: #ecf5fc;
    padding: 40px 50px 45px;
    width: 45%;

    border-radius: 10px;
    line-height: 37px;
  }

  .form-control:focus {
    border-color: #000;
    box-shadow: none;
  }

  label {
    font-weight: 600;
  }

  .error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
  }

  .form-control.error {
    border-color: red;
    padding: .375rem .75rem;
  }

  /* Additional CSS Rules */
  .btn-dark {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
  }

  .btn-dark:hover {
    background-color: #555;
  }

  /* Styles for the image */
  .image-container {
    width: 45%;
    /* Adjust width as needed */
    margin-top: 30px;
    text-align: center;
  }

  .image-container img {
    max-width: 100%;
    height: auto;

  }

  button.btn.btn {
    background: #fff;
  }

  svg.bi.bi-cart {

    color: white;
  }

  a.nav-link.dropdown-toggle11 {
    color: #fff;
  }

  .a-login {
    color: #fff;
  }

  .header {
    display: flex;

    align-items: center;
    padding: 10px;
    background-color: #222222;
  }

  .text-header {
    flex-grow: 2;
    text-align: center;
    color: #f1f1f1;
    padding-right: 700px;
  }

  .class1,
  .class2,
  .class3 {
    flex-grow: 0.2;
    text-align: center;
  }

  .wishlist,
  .header--right-side .head-icons {
    top: 2px;
  }

  .wishlist {
    margin: 0 13px -3px 13px !important;
  }

  .wishlist,
  .header--right-side .head-icons,
  .header--right-side .cart-link {
    position: relative;
    transition: all 0.3s ease-in-out;
    top: 0px;
  }

  .wishlist {
    height: auto !important;
  }

  .wishlist a {
    display: block;
    line-height: 1;
  }

  .iWishCount {
    font-size: 11px;
    background-color: #d51218;
    padding: 2px;
    border-radius: 50px;
    color: #fff;
    position: relative;
    top: -13px;
    left: 14px;
    width: 20px;
    height: 20px;
    display: inline-block;
    text-align: center;
    line-height: 17px;
    position: absolute;
  }

  .icons {
    padding-left: 540px;
  }
  .menu-item{
    border-top: 1px solid #ddd;
  }

  .menu-item {
    display: flex; 
    padding: 10px;
}

.menu-item ul {
    display: flex; 
    list-style: none; 
    padding: 0; 
    margin: 0;
}



.menu-item li:hover {
    background-color: #ce8d25;
    color: white; 
    border-radius: 3px; 
}
.menu-item {
    position: relative; 
}

.menu-item ul {
    display: flex;
    list-style: none; 
    padding: 0;
    margin: 0; 
}

.menu-item li {

    margin: 0 15px;
    padding: 5px; 
}

.submenu {
    display: none; 
    position: absolute; 
    top: 100%; 
    left: 0; 
    background-color: #f9f9f9; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    width: 168vh; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    height: 433px;
    padding-left: 23px;

}

.menu-parent:hover .submenu {
    display: block;
    top: 34px;
}

.submenu-content {
    display: flex;
    align-items: flex-start;
    padding: 10px; 
}

.submenu-image {
    width: 80px; 
    height: auto; 
    margin-right: 10px;
}

.submenu-list {
    list-style: none;
    padding: 0; 
    margin: 0; 
}

.submenu-list li {
    padding: 5px; 
    color: #000;
}

.submenu-list li:hover {
    background-color: #ce8d25; 
    color: white; 
    border-radius: 3px; 
}

</style>
<nav>

  <div class="header">
    <div class="container">
      <div class="text-header">
        BIG SALE | Up to 60% Off
        Store
      </div>
      <div class="class1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="22px" height="22px" viewBox="0 0 1080 1080" xml:space="preserve">
          <desc>Created with Fabric.js 5.2.4</desc>
          <defs>
          </defs>
          <g transform="matrix(1 0 0 1 540 540)" id="c66c4c11-9577-4368-a47c-ffd3f7005ee2">
            <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0" ry="0" width="1080" height="1080"></rect>
          </g>
          <g transform="matrix(1 0 0 1 540 540)" id="7b069a5c-52cd-41a8-a7b6-2cb8ffca1cc3">
          </g>
          <g transform="matrix(45 0 0 45 540 540)">
            <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -12)" d="M 5.06 3 C 4.63 3 4.22 3.14 3.84 3.42 C 3.46 3.6999999999999997 3.24 4.06 3.14 4.5 L 2.11 8.91 C 1.86 10 2.06 10.95 2.72 11.77 L 3 12.05 L 3 19 C 3 19.5 3.2 20 3.61 20.39 C 4.02 20.78 4.5 21 5 21 L 19 21 C 19.5 21 20 20.8 20.39 20.39 C 20.78 19.98 21 19.5 21 19 L 21 12.05 L 21.28 11.77 C 21.94 10.95 22.14 10 21.89 8.91 L 20.86 4.5 C 20.73 4.06 20.5 3.7 20.13 3.42 C 19.77 3.14 19.38 3 18.94 3 L 5.06 3 M 18.89 4.97 L 19.97 9.38 C 20.06 9.81 19.97 10.2 19.69 10.55 C 19.44 10.86 19.13 11 18.75 11 C 18.44 11 18.17 10.9 17.95 10.66 C 17.73 10.43 17.61 10.16 17.58 9.84 L 16.97 5 L 18.89 4.97 M 5.06 5 L 7.03 5 L 6.42 9.84 C 6.3 10.63 5.91 11 5.25 11 C 4.84 11 4.53 10.86 4.31 10.55 C 4.03 10.2 3.94 9.81 4.03 9.38 L 5.06 5 M 9.05 5 L 11 5 L 11 9.7 C 11 10.05 10.89 10.35 10.64 10.62 C 10.39 10.88 10.08 11 9.7 11 C 9.36 11 9.07 10.88 8.84 10.59 C 8.61 10.299999999999999 8.5 10 8.5 9.66 L 8.5 9.5 L 9.05 5 M 13 5 L 14.95 5 L 15.5 9.5 C 15.58 9.92 15.5 10.27 15.21 10.57 C 14.95 10.87 14.61 11 14.2 11 C 13.89 11 13.61 10.88 13.36 10.62 C 13.11 10.35 13 10.05 13 9.7 L 13 5 M 7.45 12.05 C 8.08 12.67 8.86 13 9.8 13 C 10.64 13 11.38 12.67 12 12.05 C 12.69 12.67 13.45 13 14.3 13 C 15.17 13 15.92 12.67 16.55 12.05 C 17.11 12.67 17.86 13 18.8 13 L 19.03 13 L 19.03 19 L 5 19 L 5 13 L 5.25 13 C 6.16 13 6.89 12.67 7.45 12.05 Z" stroke-linecap="round"></path>
          </g>
        </svg>
      </div>
      <div class="class2">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve">
          <g id="Layer_21">
            <path fill="#FFFFFF" d="M11,21.313c-0.581-0.005-1.132-0.255-1.52-0.688c-2.509-2.75-6.73-7.982-6.73-11.44
		C2.685,4.562,6.377,0.759,11,0.688c4.623,0.072,8.314,3.874,8.25,8.498c0,3.438-4.221,8.656-6.73,11.447
		C12.131,21.063,11.58,21.309,11,21.313z M11,2.063c-3.862,0.075-6.937,3.26-6.875,7.123c0,2.159,2.386,6.091,6.38,10.526
		c0.264,0.273,0.699,0.281,0.972,0.018c0.006-0.006,0.012-0.012,0.018-0.018c3.994-4.435,6.38-8.367,6.38-10.526
		C17.937,5.322,14.862,2.138,11,2.063z"></path>
            <path fill="#FFFFFF" d="M11,13.063c-2.278,0-4.125-1.847-4.125-4.125S8.722,4.813,11,4.813s4.125,1.847,4.125,4.125
		S13.278,13.063,11,13.063z M11,6.188c-1.519,0-2.75,1.231-2.75,2.75s1.231,2.75,2.75,2.75s2.75-1.231,2.75-2.75
		S12.519,6.188,11,6.188z"></path>
          </g>
        </svg>

      </div>

      <div class="clsass3">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="22" height="22" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 540.05 540.05" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
          <defs>
            <style type="text/css">
              .fil0 {
                fill: none
              }

              .fil1 {
                fill: #fff;
                fill-rule: nonzero
              }
            </style>
          </defs>
          <g id="Layer_x0020_1">
            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
            <g id="_-1308122672">
              <rect class="fil0" x="-0" y="-0" width="540.05" height="540.05"></rect>
              <path class="fil1" d="M526.42 263.18l-84.91 -95.5c-4.22,-4.75 -10.29,-7.48 -16.65,-7.48l-77.66 0 0 -2.61c0,-21.68 -17.64,-39.32 -39.31,-39.32l-260.59 -0c-21.68,0.01 -39.32,17.64 -39.32,39.32l0 204.37c0,12.92 10.51,23.43 23.42,23.43l60.41 0c4.82,20.8 23.46,36.37 45.71,36.37 22.25,0 40.89,-15.57 45.71,-36.37l146.69 0 17.28 0 62.31 0c4.82,20.8 23.46,36.37 45.71,36.37 22.25,0 40.89,-15.57 45.71,-36.37l8.84 0c12.28,0 22.27,-9.99 22.27,-22.27l0 -85.14c-0.01,-5.46 -2.01,-10.71 -5.64,-14.8zm-22.25 0.98l-100.6 0c-1.96,0 -3.55,-1.6 -3.55,-3.55l0 -45.33c0,-1.96 1.59,-3.55 3.55,-3.55l53.99 -0 46.61 52.43zm-456.86 -128.6l260.59 0c12.15,0 22.03,9.89 22.03,22.04l0 2.61 0 129.98 -304.66 0 0 -132.58c0,-12.15 9.89,-22.04 22.04,-22.04zm90.22 268.93c-16.36,0 -29.68,-13.31 -29.68,-29.68 0,-16.37 13.32,-29.68 29.68,-29.68 16.36,0 29.68,13.31 29.68,29.68 0,16.37 -13.31,29.68 -29.68,29.68zm46.42 -36.38c-3.27,-22.72 -22.81,-40.25 -46.42,-40.25 -23.61,0 -43.15,17.53 -46.42,40.25l-59.69 0c-3.39,0 -6.15,-2.76 -6.15,-6.16l0 -54.51 304.66 0 0 60.66 -145.98 0 0 0.01zm271.28 36.38c-16.37,0 -29.68,-13.31 -29.68,-29.68 0,-16.37 13.31,-29.68 29.68,-29.68 16.37,0 29.68,13.31 29.68,29.68 0,16.37 -13.32,29.68 -29.68,29.68zm54.55 -36.38l-8.13 0c-3.27,-22.72 -22.81,-40.25 -46.42,-40.25 -23.61,0 -43.15,17.53 -46.42,40.25l-61.59 0 0 -190.64 77.66 0c1.42,0 2.78,0.61 3.73,1.68l13.6 15.3 -38.63 0c-11.48,0 -20.82,9.34 -20.82,20.82l0 45.33c0,11.48 9.34,20.83 20.82,20.83l111.2 0 0 81.69c0.01,2.76 -2.23,5 -4.99,5z"></path>
            </g>
          </g>
        </svg>
      </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">
      <center><img src="{{ asset('uploads/logo.png') }}" alt="Logo" style="width: 150px; height: auto;"></center>
    </a>
    <div class="d-flex serch-d-flex" role="search" style="">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width:763px; 
    margin-bottom: 8px;margin-top: 25px;">
   
   <div class="menu-item">
    <ul>
        <li class="menu-parent"> Sofas & Recliners
            <div class="submenu">
                <div class="submenu-content">
                   
                    <ul class="submenu-list">
                        <li>Submenu Item 1</li>
                 
                        <li>Submenu Item 2</li>
                        <li>Submenu Item 3</li>
                    </ul>
                    <img src="{{ asset('uploads/sofa-header.jpg') }}" alt="Image 1" class="submenu-image"style="width: 400px;height: 400px;">
                </div>
            </div>
        </li>
        <li>Test</li>
    </ul>
</div>


    </div>


    <div class="icons" wire:click="openForm">
    <a href="{{ route('register') }}">
        <svg version="1.1" id="Layer_4_xA0_Image_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 22 22" enable-background="new 0 0 22 22" xml:space="preserve">
            <g>
                <g>
                    <path fill="#010101" d="M11,13.92c-3.761,0-6.824-3.061-6.824-6.817c0-3.761,3.063-6.824,6.824-6.824
                        c3.757,0,6.821,3.063,6.821,6.824C17.821,10.859,14.757,13.92,11,13.92z M11,2.223c-2.685,0-4.873,2.187-4.873,4.872
                        c0,2.685,2.188,4.872,4.873,4.872c2.686,0,4.872-2.188,4.872-4.872C15.872,4.409,13.686,2.223,11,2.223z"></path>
                </g>
                <g>
                    <path fill="#010101" d="M20.75,21.722h-1.955c0-4.304-3.492-7.802-7.795-7.802c-4.302,0-7.798,3.498-7.798,7.802H1.25
                        c0-5.375,4.372-9.75,9.75-9.75C16.375,11.972,20.75,16.347,20.75,21.722z"></path>
                </g>
            </g>
        </svg>
        </a>
    </div>

    <div class="wishlist">
      <a class="iWishView mini_iwish" href="/apps/iwish">
        <!--?xml version="1.0" encoding="utf-8"?-->
        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

        <svg version="1.1" id="Layer_5_xA0_Image_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="21px" viewBox="0 0 24 21" enable-background="new 0 0 24 21" xml:space="preserve">
          <g id="Layer_54">
            <path fill="#010101" d="M11.965,21c-0.638,0.001-1.253-0.258-1.705-0.721l-8.242-8.427C0.702,10.493-0.025,8.651,0,6.739
		c0.027-3.642,2.936-6.572,6.499-6.545c0.005,0,0.011,0,0.017,0c1.745-0.018,3.422,0.688,4.65,1.955l0.8,0.818l0.658-0.671l0,0
		c2.341-2.459,6.103-2.77,8.803-0.728c2.889,2.274,3.427,6.513,1.202,9.466c-0.171,0.227-0.355,0.443-0.554,0.646l-8.404,8.599
		C13.218,20.742,12.605,21.001,11.965,21z M6.483,1.822C5.211,1.821,3.989,2.325,3.074,3.229C2.131,4.156,1.6,5.436,1.602,6.772
		c-0.014,1.47,0.548,2.884,1.56,3.928l8.244,8.426c0.312,0.322,0.819,0.324,1.132,0.004c0.002-0.001,0.004-0.002,0.005-0.004
		l8.411-8.607c0.998-1.042,1.514-2.471,1.416-3.927c-0.086-1.471-0.796-2.831-1.944-3.723c-2.06-1.552-4.925-1.303-6.697,0.581
		l-1.192,1.252c-0.313,0.321-0.819,0.323-1.133,0.005c-0.001-0.002-0.003-0.003-0.004-0.005l-1.36-1.391
		C9.1,2.362,7.835,1.827,6.516,1.822H6.483z"></path>
          </g>
        </svg>


        <span class="iWishCount">0</span>
      </a>
    </div>


  </div>
</nav>
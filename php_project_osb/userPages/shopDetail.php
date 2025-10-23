    <script>
        
    document.addEventListener("DOMContentLoaded", function () 
    {
        document.getElementById('productName').innerText = sessionStorage.getItem('product_name');
        document.getElementById('productImage').src = sessionStorage.getItem('product_image');
        document.getElementById('productDetails').innerText = sessionStorage.getItem('product_details');
        document.getElementById('productCategory').innerText = sessionStorage.getItem('product_category');
        document.getElementById('productPrice').innerText = sessionStorage.getItem('product_price');
        document.getElementById('productDescription').innerText = sessionStorage.getItem('product_description');
         
         //  =======থাম্বনেইল ==============
        document.getElementById('thmnelImgone').src = sessionStorage.getItem('thmnel_Imgone');
        document.getElementById('thmnelImgtwo').src = sessionStorage.getItem('thmnel_Imgtwo');
        document.getElementById('thmnelImgthree').src = sessionStorage.getItem('thmnel_Imgthree');
        //  =======থাম্বনেইল ==============
        

        // ==============popup img===============
        const productImage = document.getElementById("productImage");
        const popup = document.getElementById("imagePopup");
        const popupImg = document.getElementById("popupImg");
        const closeBtn = document.querySelector(".close");

        // click on main image
        productImage.addEventListener("click", function () {
            if (popup.style.display === "flex") {
                popup.style.display = "none"; 
            } else {
                popup.style.display = "flex"; 
                popupImg.src = this.src; 
            }
        });

        closeBtn.addEventListener("click", function (){popup.style.display = "none";});
        popupImg.addEventListener("click", function (){popup.style.display = "none";});

        popup.addEventListener("click", function (e){
            if (e.target === popup) {
                popup.style.display = "none";
            }
        });
        // ==============popup img===============

    });

    </script>

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop Detail</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop Detail</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4 fruite-item">
                        <div class="col-lg-6 gallery" >
                            <div class="border rounded">
                                <a href="#">
                                   <img id="productImage" src="" class="img-fluid rounded" alt="Image">
                                </a>
                            </div>

                                 <!-- থাম্বনেইল + Arrow -->
                                <div class="thumbnail-container">
                                    <span class="arrow" onclick="scrollThumbnails(-1)">&#10094;</span>
                                    <div class="thumbnails" id="thumbnailStrip">
                                        <img id="thmnelImgone" src="" onclick="changeImage(this.src)">
                                        <img id="thmnelImgtwo" src="" onclick="changeImage(this.src)">
                                        <img id="thmnelImgthree" src="" onclick="changeImage(this.src)">
                                    </div>
                                    <span class="arrow" onclick="scrollThumbnails(1)">&#10095;</span>
                                </div>
                            <!-- থাম্বনেইল + Arrow -->
                            <!-- ================================= -->

                            <!-- =================== popup img======================= -->
                                <div id="imagePopup" class="popup">
                                    <span class="close">&times;</span>
                                    <img class="popup-content" id="popupImg">
                                </div>
                                <!-- =================== popup img======================= -->
                        </div>
                        <div class="col-lg-6">
                            <h4 id="productName" class="fw-bold mb-3"></h4>
                            <p id="productCategory" class="mb-3"></p>
                            <h5 id="productPrice" class="fw-bold mb-3"></h5>
                            <div class="d-flex mb-4">
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- Details -->
                            <p id="productDetails" class="mb-4"></p>
                        
                            <div class="input-group quantity mb-5" style="width: 100px;">
                                <div class="input-group-btn" style="display: none;">
                                    <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center border-0" value="1" style="display: none;">
                                <div class="input-group-btn" style="display: none;">
                                    <button class="btn btn-sm btn-plus rounded-circle bg-light border" >
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- <a href="#" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                              <!-- <a href="javascript:void(0)" onclick="addToCart(this)" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                              <a href="https://docs.google.com/forms/d/e/1FAIpQLSd6mio_osOyyuOURcOZmUfh1bVJM92QbSHKPgWMObbf2ht_Ew/viewform?usp=sharing&ouid=104014325800638141165" target="_blank" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>

                              
                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                        id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                        aria-controls="nav-about" aria-selected="true">Description</button>
                                    <!-- <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                        id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                        aria-controls="nav-mission" aria-selected="false">Reviews</button> -->
                                </div>
                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                   
                                    <p id="productDescription">Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish filefish Antarctic 
                                        icefish goldeye aholehole trumpetfish pilot fish airbreathing catfish, electric ray sweeper.</p>
                                    <div class="px-2">
                                        <div class="row g-4">
                                            <div class="col-6">
                                               
                                                <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Country of Origin</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0"> চীনের ফুজিয়ান </p>
                                                    </div>
                                                </div>
                                                <div class="row  text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Quality</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">Organic</p>
                                                    </div>
                                                </div>
                                                <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Сheck</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">Healthy</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>  
        </div>
    </div>

   


    <!-- Single Product End -->

  
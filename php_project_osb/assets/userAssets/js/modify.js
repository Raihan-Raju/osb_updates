

function changeQuantity(el, delta) {
    const input = el.closest('.quantity').querySelector('.quantityInput');
    let value = parseInt(input.value);
    if (isNaN(value)) value = 1;
    value += delta;
    if (value < 1) value = 1;
    input.value = value;
}


function addToCart(button) {
    // alert("raju");
    const productCard = button.closest('.fruite-item');

    const name = productCard.querySelector('.productName').innerText;
    const image = productCard.querySelector('.productImage').getAttribute('src');
    const details = productCard.querySelector('.productDetails').innerText;
    const category = productCard.querySelector('.productCategory').innerText;
    const price = productCard.querySelector('.productPrice').innerText;
    const description = productCard.querySelector('.productDescription').innerText;
    const quantity = productCard.querySelector('.quantityInput').value;

    sessionStorage.setItem('checkout_name', name);
    sessionStorage.setItem('checkout_image', image);
    sessionStorage.setItem('checkout_details', details);
    sessionStorage.setItem('checkout_category', category);
    sessionStorage.setItem('checkout_price', price);
    sessionStorage.setItem('checkout_description', description);
    sessionStorage.setItem('checkout_quantity', quantity);

    window.location.href="index.php?page=checkout";
}

//  window.addEventListener("load", function () 
//  {
//        sessionStorage.clear();
//  });




//==============================================================================================================================
   



function goToShopDetail(button) {
    //   alert("raju");
     
    const productCard = button.closest('.fruite-item');

    const name = productCard.querySelector('.productName').innerText;
    const image = productCard.querySelector('.productImage').getAttribute('src');
    const details = productCard.querySelector('.productDetails').innerText;
    const category = productCard.querySelector('.productCategory').innerText;
    const price = productCard.querySelector('.productPrice').innerText;
    const description = productCard.querySelector('.productDescription').innerText;
    //  =======থাম্বনেইল ==============
     const tlImgone   = productCard.querySelector('.thamnelImgone').getAttribute('src');
     const tlImgtwo   = productCard.querySelector('.thamnelImgtwo').getAttribute('src');
     const tlImgthree = productCard.querySelector('.thamnelImgtree').getAttribute('src');
   
    
    //  ==========থাম্বনেইল ==========

    sessionStorage.setItem('product_name', name);
    sessionStorage.setItem('product_image', image);
    sessionStorage.setItem('product_details', details);
    sessionStorage.setItem('product_category', category);
    sessionStorage.setItem('product_price', price);
    sessionStorage.setItem('product_description', description);
   
    //   =======থাম্বনেইল ==============
     sessionStorage.setItem('thmnel_Imgone', tlImgone);
     sessionStorage.setItem('thmnel_Imgtwo', tlImgtwo);
     sessionStorage.setItem('thmnel_Imgthree', tlImgthree);
    //  =======থাম্বনেইল ==============

    
    window.location.href="index.php?page=shopDetail";
}

//================== online js ==========================


// ============== card Gallary================

 function changeImage(image) {
        document.getElementById('productImage').src = image;
    }

    function scrollThumbnails(direction) {
        const container = document.getElementById('thumbnailStrip');
        const scrollAmount = 70; // প্রতি বার 1 thumbnail (60px + gap)
        container.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
// ============== card Gallary================





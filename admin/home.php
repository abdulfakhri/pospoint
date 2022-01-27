<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /login.php');
}
?>


          <?php include 'nav.php';?>
 <style>
     body{
    margin-top:20px;
    background-color: #f4f7f6;
}
.c_review {
    margin-bottom: 0
}

.c_review li {
    margin-bottom: 16px;
    padding-bottom: 13px;
    border-bottom: 1px solid #e8e8e8
}

.c_review li:last-child {
    margin: 0;
    border: none
}

.c_review .avatar {
    float: left;
    width: 80px
}

.c_review .comment-action {
    float: left;
    width: calc(100% - 80px)
}

.c_review .comment-action .c_name {
    margin: 0
}

.c_review .comment-action p {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    max-width: 95%;
    display: block
}

.product_item:hover .cp_img {
    top: -40px
}

.product_item:hover .cp_img img {
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22)
}

.product_item:hover .cp_img .hover {
    display: block
}

.product_item .cp_img {
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translate(-50%);
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    -moz-transform: translate(-50%);
    -o-transform: translate(-50%);
    -khtml-transform: translate(-50%);
    width: 100%;
    padding: 15px;
    transition: all 0.2s ease-in-out
}

.product_item .cp_img img {
    transition: all 0.2s ease-in-out;
    border-radius: 6px
}

.product_item .cp_img .hover {
    display: none;
    text-align: center;
    margin-top: 10px
}

.product_item .product_details {
    padding-top: 110%;
    text-align: center
}

.product_item .product_details h5 {
    margin-bottom: 5px
}

.product_item .product_details h5 a {
    font-size: 16px;
    color: #444
}

.product_item .product_details h5 a:hover {
    text-decoration: none
}

.product_item .product_details .product_price {
    margin: 0
}

.product_item .product_details .product_price li {
    display: inline-block;
    padding: 0 10px
}

.product_item .product_details .product_price .new_price {
    font-weight: 600;
    color: #ff4136
}

.product_item_list table tr td {
    vertical-align: middle
}

.product_item_list table tr td h5 {
    font-size: 15px;
    margin: 0
}

.product_item_list table tr td .btn {
    box-shadow: none !important
}

.product-order-list table tr th:last-child {
    width: 145px
}

.preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.preview .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.preview .preview-thumbnail.nav-tabs {
    margin-top: 15px;
    font-size: 0
}

.preview .preview-thumbnail.nav-tabs li {
    width: 20%;
    display: inline-block
}

.preview .preview-thumbnail.nav-tabs li nav-link img {
    max-width: 100%;
    display: block
}

.preview .preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 2px;
    border-radius: 0 !important;
    border-top: none !important;
    border-left: none !important;
    border-right: none !important
}

.preview .preview-thumbnail.nav-tabs li:last-of-type {
    margin-right: 0
}

.preview .tab-content {
    overflow: hidden
}

.preview .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
    animation-name: opacity;
    -webkit-animation-duration: .3s;
    animation-duration: .3s
}

.details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.details .rating .stars {
    display: inline-block
}

.details .sizes .size {
    margin-right: 10px
}

.details .sizes .size:first-of-type {
    margin-left: 40px
}

.details .colors .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px
}

.details .colors .color:first-of-type {
    margin-left: 20px
}

.details .colors .not-available {
    text-align: center;
    line-height: 2em
}

.details .colors .not-available:before {
    font-family: Material-Design-Iconic-Font;
    content: "\f136";
    color: #fff
}

@media screen and (max-width: 996px) {
    .preview {
        margin-bottom: 20px
    }
}

@-webkit-keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

@keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3)
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

.cart-page .cart-table tr th:last-child {
    width: 145px
}

.cart-table .quantity-grp {
    width: 120px
}

.cart-table .quantity-grp .input-group {
    margin-bottom: 0
}

.cart-table .quantity-grp .input-group-addon {
    padding: 0 !important;
    text-align: center;
    background-color: #1ab1e3
}

.cart-table .quantity-grp .input-group-addon a {
    display: block;
    padding: 8px 10px 10px;
    color: #fff
}

.cart-table .quantity-grp .input-group-addon a i {
    vertical-align: middle
}

.cart-table .quantity-grp .form-control {
    background-color: #fff
}

.cart-table .quantity-grp .form-control+.input-group-addon {
    background-color: #1ab1e3
}

.ec-checkout .wizard .content .form-group .btn-group.bootstrap-select.form-control {
    padding: 0
}

.ec-checkout .wizard .content .form-group .btn-group.bootstrap-select.form-control .btn-round.btn-simple {
    padding-top: 12px;
    padding-bottom: 12px
}

.ec-checkout .wizard .content ul.card-type {
    font-size: 0
}

.ec-checkout .wizard .content ul.card-type li {
    display: inline-block;
    margin-right: 10px
}

.card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
}

.card .body {
    font-size: 14px;
    color: #424242;
    padding: 20px;
    font-weight: 400;
}
 </style>     
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <div class="row clearfix" id="breakfast">
    <div class="row">
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
     </div> 
     <div class="row" >
     <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>  
     </div>
    <div class="row" >
     <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://tatyanaseverydayfood.com/wp-content/uploads/2017/03/Eggs-Benedict-2.jpg" style="width:250px;height:250px;" alt="Product" class="img-fluid">
             
                    </div>
                    <div class="product_details">
                    <p><b>Eggs benedinct with salmon</b></p>
                    <p>$16.00</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                    
                        
                       
                    </div>
                </div>
            </div>
        </div>
     </div>   
    
    
</div>


      
<?php include 'footer.php';?>
         
    
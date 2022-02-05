<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Pospoint</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="content d-flex gap-2 p-2">
                <!-- Left Sidebar -->
                <div class=" left-sidebar  d-flex flex-column gap-2 ">
                    <div class="clock btn-effect  p-2">
                        <span>23:45</span>
                    </div>
                    <div class="menus text-center">
                        <ul class=" p-2 list-unstyled">
                            <li class="menu  mx-4 p-2 "><a href="#" class="link-light">Family Menu</a></li>
                            <li class="menu mx-4 p-2 border-top "><a href="#" class="active">Fried Chicken</a></li>
                            <li class="menu mx-4 p-2 border-top "><a href="#" class="link-light ">Burger Menu</a></li>
                            <li class="menu mx-4 p-2 border-top "><a href="#" class="link-light ">Burgers</a></li>
                            <li class="menu mx-4 p-2 border-top "><a href="#" class="link-light ">Wok</a></li>
                            <li class="menu mx-4 p-2 border-top "><a href="#" class="link-light ">Frieten</a></li>
                            <li class="menu mx-4 p-2 border-top "><a href="#" class="link-light ">Frietsauzen</a></li>
                            <li class="menu mx-4 p-2 border-top "><a href="#" class="link-light ">Salades</a></li>
                        </ul>
                    </div>
                    <div class="menu-nav d-flex justify-content-around">
                        <button class=" btn-effect btn-primary p-1"><span class="bi-caret-up-fill"></span></button>
                        <button class=" btn-effect btn-primary p-1"><span class="bi-caret-down-fill"></span></button>
                    </div>
                    <div class="user d-flex flex-column flex-grow-1 justify-content-center align-items-center mx-4 py-3 text-light border-bottom">
                        <span class="user-name">Admin</span>
                        <form action="#"><button class="btn btn-sm text-light" type="submit">Logout</button></form>
                    </div>
                    <div class="brand d-flex flex-column align-items-center flex-grow-1 justify-content-center text-light">
                        <div class="brand-name text-dark">Management</div>
                        <div class="brand-logo text-secondary">@CloutPOS</div>
                    </div>
                </div>
                <!-- Middle content -->
                <div class="d-flex flex-column flex-grow-1  gap-2">
                    <!-- Tables -->
                    <div class="table-menu btn-effect p-2 text-center text-light">
                        <span>Tables</span>
                    </div>
                    <!-- Table Nav -->
                    <ul class="pagination justify-content-between align-items-center mb-0">
                        <li class=""><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">Previous</a></li>
                        <li class="active"><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">1</a></li>
                        <li class=""><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">2</a></li>
                        <li class=""><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">3</a></li>
                        <li class=""><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">4</a></li>
                        <li class=""><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">5</a></li>
                        <li class=""><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">6</a></li>
                        <li class=""><a class="btn-effect text-light d-inline-block px-4 py-1" href="#">Next</a></li>
                    </ul>
                    <!-- Menus items -->
                    <div class="d-flex flex-column gap-5 flex-grow-1">
                        <!-- Items in gategory 1 -->
                        <div class="d-flex justify-content-start gap-1">
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-1">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-1">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-1">test</a>
                        </div>
                        <!-- Items in gategory 2 -->
                        <div class="d-flex justify-content-start flex-wrap">
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-2">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-2">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-2">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-2">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-2">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-2">test</a>
                        </div>
                        <!-- Items in category 3 -->
                        <div class="d-flex justify-content-start gap-1">
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-3">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-3">test</a>
                            <a href="#" class="menu-item item-btn btn-effect btn-bg-3">test</a>
                        </div>

                    </div>

                    <div class="actions d-flex justify-content-between ">
                        <a href="#" class="action-btn btn-effect ">test</a>
                        <a href="#" class="action-btn btn-effect">test</a>
                        <a href="#" class="action-btn btn-effect">test</a>
                        <a href="#" class="action-btn btn-effect">test</a>
                        <a href="#" class="action-btn btn-effect">test</a>
                        <a href="#" class="action-btn btn-effect">test</a>
                        <a href="#" class="action-btn btn-effect">test</a>
                    </div>

                </div>
                <!-- Right Sidebar -->
                <div class=" right-sidebar d-flex flex-column gap-2">
                    <div class="bucket bg-light px-2 pt-3 position-relative">
                        <div class="bucket-item d-flex justify-content-between">
                            <span class="item-name">1xStrips 2 Stuks</span>
                            <span class="item-price">$ 2,00</span>
                        </div>
                        <div class="d-flex justify-content-around position-absolute w-100" style="bottom: 10px; left: 0">
                            <span class="bi-caret-up-fill"></span>
                            <span>Remove</span>
                            <span>Clear</span>
                            <span class="bi-caret-up-fill"></span>
                        </div>
                    </div>
                    <div class="total text-light mx-3 ">
                        <span class="fs-5 ">Total: $ 5,00</span>
                    </div>
                    <div class="d-flex gap-2 text-light">
                        <div class="btn-effect p-2 w-75">Different Pay</div>
                        <div class="btn-effect p-2 w-25">$</div>
                    </div>
                    <div class="numbers d-flex flex-wrap px-4 gap-2">
                        <div class="num-btn btn-effect rounded-circle">c</div>
                        <div class="num-btn btn-effect rounded-circle">7</div>
                        <div class="num-btn btn-effect rounded-circle">8</div>
                        <div class="num-btn btn-effect rounded-circle">9</div>
                        <div class="num-btn btn-effect rounded-circle">,</div>
                        <div class="num-btn btn-effect rounded-circle">4</div>
                        <div class="num-btn btn-effect rounded-circle">5</div>
                        <div class="num-btn btn-effect rounded-circle">6</div>
                        <div class="num-btn btn-effect rounded-circle">0</div>
                        <div class="num-btn btn-effect rounded-circle">1</div>
                        <div class="num-btn btn-effect rounded-circle">2</div>
                        <div class="num-btn btn-effect rounded-circle">3</div>
                    </div>
                </div>

            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
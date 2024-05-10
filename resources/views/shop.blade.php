<x-layout>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">


                @foreach ($products as $product)
                    <!-- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="/product/{{ $product['id'] }}">
						<img src="{{ $product['url'] }}" class="img-fluid product-thumbnail">
						<h3 class="product-title">{{ $product['name'] }}</h3>
                            <strong class="product-price">{{ $product['price'] }}</strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    <!-- End Column 1 -->
                @endforeach


            </div>
        </div>
    </div>

</x-layout>

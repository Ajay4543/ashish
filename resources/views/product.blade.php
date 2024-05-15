<x-layout>

    <div class="container py-5">

        <div class="product-item row">

            <div class="col-12 col-md-6 text-center">
                <img src="{{ asset($product['image_url']) }}" class="img-fluid product-thumbnail">
            </div>

            <div class="col-12 col-md-6 d-flex align-items-center">

                <div class="text-start">
                    <h3 class="product-title display-5 fw-bolder p-0 m-0">{{ $product['product_name'] }}</h3>
                    <p class="fs-6 fst-italic">{{ $product['description'] }}</p>
                    <p class="product-price fs-4 fw-bold"><span>$</span>{{ $product['amount'] }}<span class="text-decoration-line-through fs-5 fw-normal ms-2"><span>$</span>{{ $product['price'] }}</span></p>
                    <div class="quantity-container d-flex gap-2 my-5" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary decrease" type="button">&minus;</button>
                        </div>
                        <input type="number" min="1" max="99" class="form-control text-center quantity-amount ps-4" style="width: 80px" value="1" placeholder=""
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-primary increase" type="button">&plus;</button>
                        </div>
                    </div>
                    <p class="fst-italic ms-1" style="color: tomato">Hurry up, Only {{ $product['quantity'] }} left.</p>
                    <div>
                        <button class="btn bg-white text-primary btn-lg rounded-pill">Add to Cart</button>
                        <button class="btn btn-primary btn-lg rounded-pill ms-2">Buy Now</button>
                    </div>
                </div>

            </div>


            <div class="col-12 py-5">
                <div class="py-md-5 px-3 px-md-5 text-dark">
                    <h3>Description</h3>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate quod natus molestias repudiandae omnis vitae, dolores odio minima quas commodi dolorem incidunt illum, qui recusandae. Soluta accusantium tempore saepe molestiae fugiat? Accusantium vitae ad porro dolore, laudantium cumque dignissimos. Illo facere totam quos assumenda nemo molestias similique, nobis aliquam voluptas quibusdam sed dolore dignissimos voluptate dolorum. Vero amet itaque voluptatem provident in accusantium commodi quibusdam tenetur doloribus dolorum iusto cupiditate ipsam, fugiat natus! Assumenda voluptas neque at, adipisci omnis facilis, dignissimos deserunt quasi, quaerat numquam nesciunt voluptates necessitatibus deleniti quod sed in non nobis saepe? Harum obcaecati sit modi placeat?</p>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eius reprehenderit id doloremque officia recusandae quo at iusto dolores! Quibusdam at, reiciendis dignissimos inventore eos fuga quia, praesentium quod non ipsam officiis qui eum modi rem cum voluptas adipisci assumenda suscipit beatae tenetur laboriosam id a. Expedita et nemo nulla at, doloribus eveniet sequi maiores aspernatur eius consectetur veritatis animi cupiditate architecto, quo sed modi beatae odio. Culpa libero, dolor placeat officiis minima neque? Quas rerum ipsa aspernatur! Molestiae qui vel totam ex odit nesciunt exercitationem sunt culpa minus, quibusdam maiores, velit labore iste neque recusandae illum tempora soluta mollitia aliquam facere voluptate dolorem! Dolorem sed, minima sunt ab iusto neque. Perferendis maxime aspernatur dicta mollitia iusto aperiam nostrum ducimus voluptatum dolorem magni veniam quisquam laudantium doloribus, molestias, totam reprehenderit delectus. Magnam, incidunt voluptates? Veniam exercitationem est eligendi animi repudiandae officiis perspiciatis quasi ratione accusamus ipsa. Consequuntur fugiat ipsum tenetur adipisci, ad consequatur commodi blanditiis perferendis impedit nam, esse ullam cumque in amet minima libero omnis iusto reiciendis modi sint eos dolorem. Distinctio totam quos, veniam quisquam sed, officia eaque consequatur eveniet aliquid deleniti, quas rem! Nobis, quisquam modi ipsum, eius atque in at a aliquid perspiciatis maiores illo earum.</p>
                </div>
            </div>

        </div>

    </div>

</x-layout>

     <!-- Product -->
     <?php 
     $item_id = $_GET['item_id'] ?? 1;
     foreach($product->getData() as $item): 
        if($item['item_id'] == $item_id) : 
     ?>
     <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png";?>" alt="product" class="img-fluid ">
                        <div class="form-row pt-4 font-size-16 font-baloo">

                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control ">Proceed to buy</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-warning form-control ">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown";?></h5>
                        <small>By <?php echo $item['item_brand']??"Brand";?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="" class="px-2 font-rale font-size-14 text-decoration-none ">20,534 ratings | 1000+
                                answered questions</a>
                        </div>
                        <hr class="m-0 ">

                        <!-- product price -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P.</td>
                                <td><strike>$162.00</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price</td>
                                <td class="font-size-20 text-danger "><span><?php echo $item['item_price']??"0";?></span><small
                                        class="font-size-12 text-dark">&nbsp;&nbsp;inclusive all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save</td>
                                <td><span class="font-size-16 text-danger ">$10</span></td>
                            </tr>
                        </table>
                        <!-- product price -->

                        <!-- Policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center ml-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill "></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12 text-decoration-none ">10 Days <br>Replacement</a>
                                </div>
                                <div class="return text-center mx-4">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill "></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12 text-decoration-none ">Nilesh Lachheta <br>Deliever</a>
                                </div>
                                <div class="return text-center mx-4">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill "></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12 text-decoration-none ">1 Year <br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- Policy -->
                        <hr>

                        <!-- order details -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark ">
                            <small>Delivery By : Mar 29 - Apr 1</small>
                            <small>Sold By <a href="#">(4.5 out of 5 | 18198 ratings)</a></small>
                            <small><i class="fas fa-map-marker-alt   font-size-12">&nbsp;&nbsp;Deliever to Customer - 452010</i></small>
                        </div>
                        <!-- order details -->
                        
                        <div class="row">
                            <div class="col-6">
                                <!-- color -->
                                <div class="color my-3">
                                   <div class="d-flex justify-content-between ">
                                    <h6 class="font-baloo">Color</h6>
                                    <div class="p-2 color-yellow-bg rounded-circle "><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-primary-bg rounded-circle "><button class="btn font-size-14"></button></div>
                                    <div class="p-2 color-second-bg rounded-circle "><button class="btn font-size-14"></button></div>
                                   </div>
                                </div>
                                <!-- color -->
                            </div>
                            <div class="col-6">
                                <!-- Quantity -->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty : </h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border  bg-light "><i class="fas fa-angle-up"></i></button>
                                        <input type="text" class="qty_input border px-2 w-50 bg-light " disabled value="1" placeholder="1">
                                        <button class="qty-down border  bg-light "><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- Quantity -->
                            </div>
                        </div>

                        <!-- size -->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size:</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- size -->
                    </div>
                    <div class="col-12 py-5">
                        <h6>Product Description</h6><hr>
                        <p class="font-rubik font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem debitis expedita inventore reiciendis vitae consectetur illo velit, sed saepe quae laborum, excepturi delectus consequatur non necessitatibus quasi distinctio eos est.</p>
                        <p class="font-rubik font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem debitis expedita inventore reiciendis vitae consectetur illo velit, sed saepe quae laborum, excepturi delectus consequatur non necessitatibus quasi distinctio eos est.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product -->
        <?php 
        endif;
        endforeach;
        ?>
<!--banner-->
<div class="banner1">
	<div class="container">
		<h3><a href="index.html">Home</a> / <span>Products</span></h3>
	</div>
</div>
<!--banner-->

<!--content-->
<div class="content">
	<div class="products-agileinfo">
			<h2 class="tittle">Desain Product</h2>
		<div class="container">
			<div class="product-agileinfo-grids w3l">
				<div class="col-md-9 product-agileinfon-grid1">
					<div class="mens-toolbar">
						<div class="dropdown list">
							<button class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Desain Kami</button>

							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3  multi-gd-img">
										<ul class="multi-column-dropdown">
											<h6>Commercial Printing</h6>
											<li><a href="#">Majalah</a></li>
											<li><a href="#">Box Hamper</a></li>
											<li><a href="#">Label</a></li>
											<li><a href="#">Brosur</a></li>
											<li><a href="#">Packaging</a></li>
											<li><a href="#">Buku Tahunan</a></li>
											<li><a href="#">DLL</a></li>
										</ul>
									</div>
									<div class="col-sm-3  multi-gd-img">
										<ul class="multi-column-dropdown">
											<h6>Printing Aplications</h6>
											<li><a href="#">Banner</a></li>
											<li><a href="#">Baliho</a></li>
											<li><a href="#">Reklame</a></li>
											<li><a href="#">Canvas</a></li>
											<li><a href="#">Poster</a></li>
											<li><a href="#">Neon Box</a></li>
											<li><a href="#">DLL</a></li>
										</ul>
									</div>
									<div class="col-sm-3  multi-gd-img">
										<img src="img-produk/majalah(1).png" alt=" "/></a>
									</div> 
									<div class="col-sm-3  multi-gd-img">
										<img src="img-produk/desain bener.png" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</div>
						
						<div class="clearfix"></div>		
					</div>
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="product-tab">
									<?php
									$a=5;
									for($i=0; $i < $a; $i++){ ?>
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem mt-5">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>		
														<a href="order.html" class="new-gri">
															<div class="grid-img">
																<img src="<?= base_url('assets/');?>img/1.jpg" class="img-responsive" alt="">
															</div>		
														</a>		
													</figure>	
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="products-list">
													<h6><a href="order.html">Desain Bok Makanan</a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><em class="item_price">Harga dari Rp 50.000</em></p>
													<a href="https://api.whatsapp.com/send?phone=+6281280120231&text=Haloo Bapak / Ibu" target="blank" class="my-cart-b item_add">Pesan Sekarang</a>
												</div>
											</div>
										</div>
										<?php
									}
									?>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--content-->
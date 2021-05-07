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
											<h6><a href="<?= base_url('commercial');?>">Commercial Printing</a></h6>
											<li>Majalah</li>
											<li>Box Hamper</li>
											<li>Label</li>
											<li>Brosur</li>
											<li>Packaging</li>
											<li>Buku Tahunan</li>
											<li>DLL</li>
										</ul>
									</div>
									<div class="col-sm-3  multi-gd-img">
										<ul class="multi-column-dropdown">
											<h6><a href="<?= base_url('applications');?>">Printing Aplications</a></h6>
											<li>Banner</li>
											<li>Baliho</li>
											<li>Reklame</li>
											<li>Canvas</li>
											<li>Poster</li>
											<li>Neon Box</li>
											<li>DLL</li>
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

									foreach($product as $pt): ?>
										<div class="col-md-4 product-tab-grid simpleCart_shelfItem mt-5">
											<div class="grid-arr">
												<div  class="grid-arrival">
													<figure>		
														<a href="order.html" class="new-gri">
															<div class="grid-img">
																<img src="<?= base_url('assets/');?>img/<?= $pt['product_img'];?>" class="img-responsive" alt="">
															</div>		
														</a>		
													</figure>	
												</div>
												<div class="block">
													<div class="starbox small ghosting"> </div>
												</div>
												<div class="products-list">
													<h6><a href="<?= base_url('order');?>"><?= $pt['product_name'];?></a></h6>
													<span class="size">XL / XXL / S </span>
													<p ><em class="item_price"><?= $pt['price'];?></em></p>
													<a href="https://api.whatsapp.com/send?phone=+6281280120231&text=Haloo Bapak / Ibu saya ingin memesan product <?= $pt['product_name'];?>" target="blank" class="my-cart-b item_add">Pesan Sekarang</a>
												</div>
											</div>
										</div>
									<?php endforeach ?>
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
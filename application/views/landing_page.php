
<!--banner-->
<div class="banner-w3">
	<div class="demo-1">            
		<div id="example1" class="core-slider core-slider__carousel example_1">
			<div class="core-slider_viewport">
				<div class="core-slider_list">
					<div class="core-slider_item">
						<img src="<?= base_url('assets/');?>images/b1.jpg" class="img-responsive" alt="">
					</div>
					 <div class="core-slider_item">
						 <img src="<?= base_url('assets/');?>images/b2.jpg" class="img-responsive" alt="">
					 </div>
					<div class="core-slider_item">
						  <img src="<?= base_url('assets/');?>images/b3.jpg" class="img-responsive" alt="">
					</div>
					<div class="core-slider_item">
						  <img src="<?= base_url('assets/');?>images/b4.jpg" class="img-responsive" alt="">
					</div>
				 </div>
			</div>
			<div class="core-slider_nav">
				<div class="core-slider_arrow core-slider_arrow__right"></div>
				<div class="core-slider_arrow core-slider_arrow__left"></div>
			</div>
			<div class="core-slider_control-nav"></div>
		</div>
	</div>
	<link href="<?= base_url('assets/');?>css/coreSlider.css" rel="stylesheet" type="text/css">
	<script src="<?= base_url('assets/');?>js/coreSlider.js"></script>
	<script>
	$('#example1').coreSlider({
	  pauseOnHover: false,
	  interval: 3000,
	  controlNavEnabled: true
	});

	</script>

</div>	
<!--banner-->

<!--content-->
<div class="content">
	<!--banner-bottom-->
	<div class="ban-bottom-w3l">
		<h3 class="tittle1"> Desain </h3>
		<div class="container desain">
			<div class="col-md-6 ban-bottom">
				<div class="ban-top">
					<img src="<?= base_url('assets/');?>img/1.jpg" class="img-responsive" alt=""/>
					<div class="ban-text">
						<h4>Box Makanan</h4>
					</div>
				</div>
			</div>
			<div class="col-md-6 ban-bottom3">
				<div class="ban-top">
					<img src="<?= base_url('assets/');?>img/10.jpg" class="img-responsive" alt=""/>
					<div class="ban-text1">
						<h4>Box Kue</h4>
					</div>
				</div>
				<div class="ban-img">
					<div class=" ban-bottom1">
						<div class="ban-top">
							<img src="<?= base_url('assets/');?>img/16.jpg" class="img-responsive" alt=""/>
							<div class="ban-text1">
								<h4>Majalah</h4>
							</div>
						</div>
					</div>
					<div class="ban-bottom2">
						<div class="ban-top">
							<img src="<?= base_url('assets/');?>img/18.jpg" class="img-responsive" alt=""/>
							<div class="ban-text1">
								<h4>Kalender</h4>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--banner-bottom-->

	<!--accessories-->
	<div class="accessories-w3l">
		<div class="container">
			<img src="<?= base_url('assets/');?>img/LOGO MARAWA.png" class="logo-marawa">
			<div class="text-marawa">
				<h2>Offset</h2>
				<h2>Printing</h2>
				<h2>Sablon</h2>
				<h2>Promotion</h2>
				<h2>Apparel</h2>
			</div>
			<div class="button">
				<a href="<?= base_url('products');?>" class="button1">Daftar Product</a>
			</div>
		</div>
	</div>
	<!--accessories-->

	<!--Products-->
	<div class="product-agile">
		<div class="container">
			<h3 class="tittle1">Desain Products</h3>
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>	 
							<div class="caption">
								<?php
								foreach($product as $pt) : ?>
									<div class="col-md-3 cap-left simpleCart_shelfItem">
										<div class="grid-arr">
											<div  class="grid-arrival">
												<figure>		
													<a href="<?= base_url('order');?>">
														<div class="grid-img">
															<img  src="<?= base_url('assets/');?>img/<?= $pt['product_img'];?>" class="img-responsive" alt="">
														</div>		
													</a>		
												</figure>	
											</div>
											<div class="products-list">
												<h6><a href="https://api.whatsapp.com/send?phone=+6281280120231&text=Haloo Bapak / Ibu" target="blank"><?= $pt['product_name'];?></a></h6>
												<span class="size">XL / XXL / S </span>
												<p><em class="item_price">Harga dari Rp <?= $pt['price'];?></em></p>
												<a href="https://api.whatsapp.com/send?phone=+6281280120231&text=Haloo Bapak / Ibu saya ingin memesan product <?= $pt['product_name'];?>" target="blank" class="my-cart-b item_add">Pesan Sekarang</a>
											</div>
										</div>
									</div>
								<?php endforeach?>
								
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--content-->

<div class="video">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/NDonh28AY3I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
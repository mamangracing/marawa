<!--banner-->
<div class="banner1">
	<div class="container">
		<h3><a href="index.html">Home</a> / <span>Detail Products</span></h3>
	</div>
</div>
<!--banner-->

	<!--content-->
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-9 single-grid">
							<div clas="single-top">
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="images/si.jpg">
												<div class="thumb-image"> 
													<img src="img/box makanan.jpeg" class="img-responsive"> 
												</div>
											</li>
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<div class="description">
										<h4>Desain Bok Makanan</h4>
										<p class="price item_price">Harga dari Rp 50.000</p>
										<div class="description">
											<p><span>Quick Overview : </span>Desain bisa request dari pelanggan</p>
										</div>
										<div class="color-quality">
											<h6>Quality :</h6>
												<div class="quantity"> 
													<div class="quantity-select">                           
														<div class="entry value-minus1">&nbsp;</div>
														<div class="entry value1"><span>1</span></div>
														<div class="entry value-plus1 active">&nbsp;</div>
													</div>
												</div>
												<!--quantity-->
												<script>
												$('.value-plus1').on('click', function(){
													var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
													divUpd.text(newVal);
												});

												$('.value-minus1').on('click', function(){
													var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
													if(newVal>=1) divUpd.text(newVal);
												});
												</script>
												<!--quantity-->
										</div>
										<div class="women">
											<span class="size">XL / XXL / S </span>
											<a href="https://api.whatsapp.com/send?phone=+6285711866400&text=Haloo Bapak / Ibu" target="blank" data-text="Add To Cart" class="my-cart-b">Pesan Sekarang</a>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--content-->
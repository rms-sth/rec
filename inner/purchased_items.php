<?php 
require_once "../algorithm/alg_recommend_items.php";
?>

<?php 
$title ="Products alreadey purchased and rated";
require_once "header.php"; 

?>


<!-- BREADCRUMBS AREA START -->
<div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="breadcrumbs">

					<ul class="breadcrumbs-list">
						<li><a href="index.html">Home</a></li>
						<li>Room</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- BREADCRUMBS AREA END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

	<!-- FEATURED FLAT AREA START -->
	<div class="featured-flat-area pt-115 pb-60">
		<div class="container">
			<div class="featured-flat">
				<div class="row">

					<!-- flat-item -->
					<?php 
					echo "<br><br>";
					$conn = new mysqli('localhost','root','','db_recommend');
					$sql = "SELECT pd.pname, price, product_img, rating, expiry_date, status 
					FROM tbl_user_register AS u 
					INNER JOIN tbl_bought AS b 
					ON u.uid = b.uid
					INNER JOIN tbl_product AS pd
					ON b.pid = pd.pid where u.username='$user' 
					group by pd.pname order by rating desc";
								// echo "$sql";
					
					$res = $conn->query($sql);
					$d = [];
					if($res->num_rows > 0){
						while ($row = $res->fetch_assoc()) {
							array_push($d, $row);
						}
					}
					?>

					<center><h1>Already Purchased and rated Items</h1></center>

					<?php $i = 1; foreach($d as $app){ ?>
						<div class="col-md-4 col-sm-6 col-xs-12">

							<div class="flat-item">
								<div class="flat-item-image">
									<span class="for-sale"><?php if($app['status']==1){ 
										echo"Available";
									}else{ 
										echo "Unavailable";
									} ?></span></span>
									<a href="properties-details.html"><img src="images/room_images/<?php echo $app['product_img']; ?>" alt="" width="365px" height="235px"></a>
									<div class="flat-link">
										<a href="properties-details.html">More Details</a>
									</div>
									<ul class="flat-desc">
										<li>
											<img src="images/icons/4.png" alt="">
											<span>
												<?php if($app['status']==1){ 
													echo"Available";
												}else{ 
													echo "Unavailable";
												} ?></span>
											</li>
											<li> <?php $rating = $app['rating'];
											echo "Rating : ";
											for($i=1; $i<=$rating; $i++) { ?>
												<span class='fa fa-star checked'></span> <?php } ?>
												
											</li>
										</ul>
									</div>
									<div class="flat-item-info">
										<div class="flat-title-price">
											<h5><a href="properties-details.html"><?php echo $app['pname']; ?></a></h5>
											<span class="price"><?php
											$price = $app['price']; 
                                            // print_r($price);
                                            // require_once "admin/class/currency.class.php";
                                            // $currency = new Currency();
                                            // $x=$currency->numberToCurrency($price);
                                            // print_r($x);
											echo "Rs. " .$price;
											?></span>
										</div>
										<div>
											<p>Expiry Date: <?php echo $app['expiry_date'] ;
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($app['expiry_date']) ;
                                            $datediff =  $your_date-$now;
                                            $remaining_days =round($datediff / (60 * 60 * 24));
                                            if ($remaining_days>0) {
                                            	echo "<span class='p-3 mb-2 text-info'>" ."&nbsp;(" .$remaining_days ." days remaining)" ."</span>";
                                            }else{
                                            	echo "<span class='text-danger'>&nbsp; (Out of stock!!!)</span>";
                                            }
                                            ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- pagination-area -->
                        <div class="col-xs-12">
                        	<div class="pagination-area mb-60">
                        		<ul class="pagination-list text-center">
                        		</ul>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED FLAT AREA END -->


    </section>
    <!-- End page content -->


    <?php require_once "footer.php"; ?>


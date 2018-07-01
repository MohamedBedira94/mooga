<?php
include ("includes/config.php");
include ("includes/db.php");
$page_title = "Mooga | Add New Offer";
include ("includes/header.php");

if(isset($_POST['add_offer'])){

    $field_name = mysqli_real_escape_string($db,$_POST['field_name']);
	$product_name = mysqli_real_escape_string($db,$_POST['product_name']);
	$country_name = mysqli_real_escape_string($db,$_POST['country_name']);
	$response = mysqli_real_escape_string($db,$_POST['response']);
	$offer_goal = mysqli_real_escape_string($db,$_POST['inlineRadioOptions']);
	$description = mysqli_real_escape_string($db,$_POST['description']);

	$query = "INSERT INTO offers (field_name,product_name,country_name,response,description,offer_goal) 
               VALUES ('$field_name','$product_name','$country_name','$response','$offer_goal','$description') ";

	$db->query($query);
}

?>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav alg-left">
		<li class="active"><a href="#">الرئيسية <span class="sr-only">(current)</span></a></li>
		<li><a href="#">مشروعات  </a></li>
		<li><a href="#"> تصفيات </a></li>
		<li><a href="#">عروض وفرص </a></li>
		<li><a href="#">لمقالات</a></li>
		<li class="search-link"><a href="#"><i class="fa fa-search"></i></a></li>

	</ul>
</div>
</div>
</nav>
</header>
<?php include ("includes/sidebar.php") ;?>

<div class="col-lg-12 col-xs-12 col-md-12 col-xs-12 def-padding">
	<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 center-table">
		<h2 class="full-lines sm-font"><span class="blue-font">اضف عرض جديد</span></h2>
		<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border def-padding">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 ">
					<div class="col-md-10 col-lg-10 col-xs-10 col-sm-10 center-table">
						<form class="login-form" method="post">
							<div class="form-group">
								<label for="" class="col-sm-3 control-label md-font bold black-font">استشاري في مجال</label>
								<div class="col-sm-9">
                                    <select class="form-control" name="field_name" id="field_select">
                                        <option value="Development">Development</option>
                                        <option value="Design">Design</option>
                                        <option value="ERP">ERP</option>
                                        <option value="Analysis">Analysis</option>
                                        <option value="Cloud">Cloud</option>
                                    </select>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label md-font bold black-font">اختر منتج او خدمه</label>
								<div class="col-sm-9">
									<input type="text"name="product_name" class="form-control" id="product" placeholder="ProductName">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label md-font bold black-font">احتاج وكيل في</label>
								<div class="col-sm-9">
									<input type="text" name="country_name" class="form-control" id="" placeholder="Example : دوله معيينه">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label md-font bold black-font">احتاج مستثمر</label>
								<div class="col-sm-4">
									<input type="text" name="response" class="form-control" id="" placeholder="Example : نعم او لا">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label md-font bold black-font">الهدف من العرض</label>
								<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
									<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
										<label class="radio-inline">
											<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="رائدأعمال">  رائد أعمال
										</label>
									</div>
									<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
										<label class="radio-inline">
											<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="مستثمر">  مستثمر
										</label>
									</div>
									<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
										<label class="radio-inline">
											<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="ممول">  ممول
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label md-font bold black-font">توصيف العرض</label>
								<div class="col-sm-9">
									<textarea name="description" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="add_offer" class="btn orange-btn">اضف</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</div>
</div>


<?php
include ("includes/footer.php");
?>

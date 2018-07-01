<?php
include ("includes/config.php");
include ("includes/db.php");

if (isset($_GET['page'])){
	$page_title = "Mooga | All Projects";
}else{
	$page_title = "Mooga | Moasher";
}

$page_title = "Mooga | All Projects";
include ("includes/header.php");

$query = "SELECT * FROM projects ORDER BY id DESC";
$projects = $db->query($query);

?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav alg-left">
		<li class="active"><a href="#">الرئيسية <span class="sr-only">(current)</span></a></li>
		<li><a href="<?php echo 'projects.php?page=projects'?>">مشروعات  </a></li>
		<li><a href="#"> تصفيات </a></li>
		<li><a href="#">عروض وفرص </a></li>
		<li><a href="#">لمقالات</a></li>

	</ul>
</div>
</div>
</nav>
</header>

<?php include ("includes/sidebar.php") ;?>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 triangle-tabs no-border">
	<ul class="nav nav-tabs nav-justified zero-right-padding " role="tablist">
		<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">ابحث في مجتمع موجة</a></li>
		<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab"  data-toggle="tab">ابحث في المشروعات</a></li>
		<li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab"  data-toggle="tab">ابحث في التصفيات</a></li>
		<li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab"  data-toggle="tab">ابحث في الفرص والعروض</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane " id="tab1">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm grey btm-mrg-sm">
				<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12 def-padding left-border">
					<h2 class="line-right sm-font zero-bottom-margin"><span class="black-font">                                أبحث عن خبرات</span></h2>
					<form class="cust-form">
						<div class="form-group">
							<div class="col-sm-12">
								<select class="form-control">
									<option>استشاري في مجال</option>
									<option></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" class="form-control" id="" placeholder="أحتاج منتج أوخدمة">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">أحتاج وكيل في</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">أحتاج مستثمر </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="">
							</div>
						</div>
						<button type="submit" class="btn orange-btn">إبحث</button>
					</form>
				</div>
				<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12 def-padding left-border">
					<h2 class="line-right sm-font zero-bottom-margin"><span class="black-font">                                أبحث عن خبرات</span></h2>

					<form class="cust-form">
						<div class="form-group">
							<div class="col-sm-12">
								<select class="form-control">
									<option>استشاري في مجال</option>
									<option></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" class="form-control" id="" placeholder="أحتاج منتج أوخدمة">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">أحتاج وكيل في</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-4 control-label">أحتاج مستثمر </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="">
							</div>
						</div>
						<button type="submit" class="btn orange-btn">إبحث</button>
					</form>
				</div>
				<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12 def-padding">
					<p class="black-font sm-font text-center">
						إقترح لي
					</p>
					<p class="grey-font md-font text-justify">
						الاسم (وجنبه عدد المشروعات اللي تحت المستخدم ده)، والصورة ، البلد   ويتكتب استشاري في مجالات كذا
					</p>
					<button type="submit" class="btn orange-btn">   إبدأ</button>
				</div>
			</div>
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm lg-btm-mrg">
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 left-border def-padding-sm" >
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<img src="images/project-owner.jpg" class="justified-img">
						<p class="black-font sm-font text-center bold">
							محمود  خليفة
						</p>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<p class="sm-font text-right orange-font zero-bottom-margin">
							رائد أعمال في التسويق
						</p>
						<p class="md-font text-right grey-font zero-bottom-margin">
							البلد : مصر
						</p>
						<p class="md-font text-right grey-font zero-bottom-margin">
							المشروعات :  7
						</p>
						<a class="sm-border-btn round-corner grey-border"><i class="message-box"></i></a>
						<a class="sm-border-btn round-corner grey-border"><i class="call-icon"></i></a>
					</div>
				</div>
				<div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 def-padding-sm">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<p class="md-font text-right grey-font zero-bottom-margin">
							خبرات في: الإدارة، التسويق، خدمة العملاء....
						</p>
						<p class="md-font text-right grey-font zero-bottom-margin">
							أقدم منتج/خدمة: مواقع معلوماتية
						</p>
						<p class="md-font text-right grey-font zero-bottom-margin">
							أعمل وكيل لـ: برنامج مراقبة المواقع  ...
						</p>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<p class="md-font text-right grey-font zero-bottom-margin">
							ابحث عن استشاري في: الاستضافة، نظم سير العمل ...
						</p>
						<p class="md-font text-right grey-font zero-bottom-margin">
							أحتاج منتج/خدمة: إدخال بيانات، برامج محاسبة.
						</p>
						<p class="md-font text-right grey-font zero-bottom-margin">
							أحتاج وكيل: لا يوجد
						</p>
					</div>
				</div>
				<div class="left-btns-cont-bottom"><a href="#" class="btn white-btn md-font text-center border-btn">المزيد ...</a></div>
			</div>
		</div>

		<div role="tabpanel" class="tab-pane active" id="tab2">
			<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm grey btm-mrg-sm">
				<div class="col-md-9 col-lg-9 col-xs-12 col-sm-12 def-padding left-border ">
					<h2 class="line-right sm-font zero-bottom-margin"><span class="black-font">تصنيفات البحث</span></h2>
					<form class="cust-form col-md-10 col-lg-offset-2 col-md-10 col-lg-offset-2 ">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">ابحث عن </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">في دولة</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">المرحلة</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9">
								<label for="" class="col-sm-3 control-label">المشروع يحتاج </label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1">موزع
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2">شريك
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3">ممول
								</label>
							</div>
							<div class="col-sm-3">
								<a href="" class="btn white-btn alg-left mrg-thirty">المزيد</a>
							</div>
						</div>
						<div class="col-sm-8 col-sm-offset-4">
							<button type="submit" class="btn orange-btn">إبحث</button>
						</div>
					</form>
				</div>
				<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 def-padding">
					<p class="black-font sm-font text-center">
						إقترح لي
					</p>
					<p class="grey-font md-font text-justify">
						الاسم (وجنبه عدد المشروعات اللي تحت المستخدم ده)، والصورة ، البلد   ويتكتب استشاري في مجالات كذا
					</p>
					<button type="submit" class="btn orange-btn">   إبدأ</button>
				</div>
			</div>


            <?php
                 if($projects->num_rows>0){
                     while ($row = $projects->fetch_assoc()){
                         $query = "SELECT * FROM owners WHERE id = '$row[owner_id]'";
                         $owner = $db->query($query);
                         $owner = $owner->fetch_assoc();
                ?>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm lg-btm-mrg">
                    <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 left-border def-padding-sm" >
                        <p class="black-font sm-font text-right bold">
                            <?php echo $row['name'];?>
                        </p>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <img src="images/project-owner.jpg" class="justified-img">
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                <p class="md-font  orange-font zero-bottom-margin cst-right-alignment">المشروع:  </p>
                                <p class="md-font grey-font zero-bottom-margin"><?php echo $row['type'];?></p>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                <p class="md-font  orange-font zero-bottom-margin cst-right-alignment">الدولة: </p>
                                <p class="md-font  grey-font zero-bottom-margin "><?php echo $row['country'];?></p>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                <p class="md-font  orange-font zero-bottom-margin cst-right-alignment">المشاهدات:</p>
                                <p class="md-font  grey-font zero-bottom-margin ">12</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 left-border def-padding-sm">
                        <p class="md-font text-right grey-font zero-bottom-margin sm-top-padding">
	                        <?php echo $row['description'];?>                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12  def-padding-sm" >
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <p class="black-font sm-font text-center bold">
                                مالك المشروع
                            </p>
                            <img src="images/project-owner.jpg" class="justified-img">
                            <p class="black-font sm-font text-center bold zero-bottom-margin">
	                            <?php echo $owner['name'];?>                            </p>
                            <div class="abs-btn cst">
                                <a class="sm-border-btn round-corner grey-border"><i class="message-box"></i></a>
                                <a class="sm-border-btn round-corner grey-border"><i class="call-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="left-btns-cont-bottom center-button"><a href="<?php echo 'single-project.php?project_id='.$row['id'];?>" class="btn white-btn md-font text-center border-btn">المزيد ...</a></div>

                </div><!--end single item-->

	            <?php
            }
                 } ?>
		</div>

	</div>

</div>
</div>

<?php
include ("includes/footer.php");
?>


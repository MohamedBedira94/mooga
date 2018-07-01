<?php
include ("includes/config.php");
include ("includes/db.php");
$page_title = "Mooga | Single-Project";
include ("includes/header.php");

if (isset($_GET['project_id'])){
    $id = mysqli_real_escape_string($db , $_GET['project_id']);
    $query = "SELECT * FROM projects WHERE id ='$id'";
}

$projects = $db->query($query);

?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav alg-left">
		<li class="active"><a href="#">الرئيسية <span class="sr-only">(current)</span></a></li>
		<li><a href="#">مشروعات  </a></li>
		<li><a href="#"> تصفيات </a></li>
		<li><a href="#">عروض وفرص </a></li>
		<li><a href="#">لمقالات</a></li>

	</ul>
</div>
</div>
</nav>
</header>
<?php include ("includes/sidebar.php") ;?>

<?php
   if ($projects->num_rows >0){
       while ($row = $projects->fetch_assoc()){
	       $query = "SELECT * FROM owners WHERE id = '$row[owner_id]'";
	       $owner = $db->query($query);
	       $owner = $owner->fetch_assoc();
    ?>

           <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner">
               <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 center-table">
                   <h2 class="full-lines sm-font"><span class="blue-font"><?php echo $row['name'];?></span></h2>
                   <div class="row">
                       <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding">
                           <div class="row">
                               <div class="col-md-5 col-lg-5 col-xs-6 col-sm-6">
                                   <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                       <img src="images/img-part-1.jpg" class="">
                                       <a class="sm-border-btn round-corner grey-border"><i class="message-box"></i></a>
                                       <a class="sm-border-btn round-corner grey-border"><i class="call-icon"></i></a>
                                   </div>
                                   <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 def-padding zero-top-padding">
                                       <p class="sm-font black-font">
                                           <?php echo $owner['name'];?>
                                       </p>
                                       <p class="md-font orange-font">رائد أعمال في الصناعة</p>
                                       <p class="md-font grey-font">البلد : <?php echo $row['country'];?></p>
                                       <p class="md-font grey-font">نوع المشروع :  <?php echo $row['type'];?></p>
                                   </div>
                               </div>
                               <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
                                   <p class="text-right grey-font md-font">مقدمة :</p>
                                   <p class="text-right grey-font md-font">
	                                   <?php echo $row['description'];?>
                                     </p>
                               </div>
                               <!---->
                           </div>
                           <div class="row">


                               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 def-padding-sm">
                                   <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border def-padding-sm round-corner" style="height: 192px;">
                                       <div class="col-md-4 col-lg-4 col-xs-6 col-sm-6">
                                           <p class="black-font bold">يحتاج إلى:</p>
                                       </div>
                                       <div class="col-md-8 col-lg-8 col-xs-6 col-sm-6">
                                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                               <i class="green-tick"></i>
                                               <p class="blue-font sm-font"> موزع </p>
                                           </div>
                                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                               <i class="tick-none"></i>
                                               <p class="grey-font sm-font"> وكـيل  </p>
                                           </div>
                                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                               <i class="tick-none"></i>
                                               <p class="grey-font sm-font">   ممول </p>
                                           </div>
                                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                               <i class="green-tick"></i>
                                               <p class="blue-font sm-font"> شريك </p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 def-padding-sm">
                                   <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                           <p class="orange-font sm-font text-right float-right">الدولة:</p>
                                           <p class="grey-font sm-font text-right float-right"><?php echo $row['country'];?></p>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                           <p class="orange-font sm-font text-right float-right"> المشاهدات:</p>
                                           <p class="grey-font sm-font text-right float-right">12</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 def-padding-sm">
                                   <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm" style="height: 120px">
                                       <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 col-md-offset-2 col-lg-offset-2">
                                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">
                                               <p class="orange-font md-font text-right float-right"> فكرة</p>
                                           </div>
                                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">
                                               <p class="orange-font md-font text-right float-right"> تحت التطوير</p>
                                           </div>
                                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">
                                               <p class="orange-font md-font text-right float-right">تحت الاختبار</p>
                                           </div>
                                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">
                                               <p class="orange-font md-font text-right float-right">جاهز</p>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           </div>
                           <div class="row">
                               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6  def-padding-sm">
                                   <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm">
                                       <p class="black-font md-font text-right">
                                           يحتاج منتجات:
                                       </p>
                                       <ul class="grey-font md-font">
                                           <li>.  طلق مسمى تدوير على عدد من</li>
                                           <li>.  مشروعات التدوير </li>
                                           <li>.  تقتصر فقط على المخلفاتسبيل</li>
                                           <li>.  المثال وليس الحصر يطلق هذا اللفظ على (تدوير قش </li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6  def-padding-sm">
                                   <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey-border round-corner def-padding-sm">
                                       <p class="black-font md-font text-right">
                                           يحتاج منتجات:
                                       </p>
                                       <ul class="grey-font md-font">
                                           <li>.  طلق مسمى تدوير على عدد من</li>
                                           <li>.  مشروعات التدوير </li>
                                           <li>.  تقتصر فقط على المخلفاتسبيل</li>
                                           <li>.  المثال وليس الحصر يطلق هذا اللفظ على (تدوير قش </li>
                                       </ul>
                                   </div>
                               </div>


                           </div>
                           <p class="grey-font md-font text-justify def-padding-sm">
                               - يطلق مسمى تدوير على عدد من مشروعات التدوير المتنوعة ، ولا تقتصر فقط على المخلفات .. فعلى سبيل المثال وليس الحصر يطلق هذا اللفظ على (تدوير قش الأرز– تدوير تراب الأسمنت الناتج من مصانع الأسمنت – تدوير المخلفات الزراعية – تدوير المخلفات الصلبة المنزلية – تدوير المخلفات الصناعية – تدوير " معالجة " مياه الصرف الصحي ) .
                           </p>
                           <img class="round-corner def-padding-sm" src="images/post-img.jpg">
                           <p class="grey-font md-font text-justify def-padding-sm">
                               - يختلف مشروع تدوير المخلفات الصلبة المنزلية عن مشروعات التدوير الأخرى ، كونه يتعلق بالقمامة التي يتم تجميعها من المنازل أو من الحاويات بالشوارع ، كما أنه يحتوى على عدد من المواد التي يتم فرزها وليس مادة واحدة محددة كما في غيره من مشروعات التدوير ، فعلى سبيل المثال فإن كمية مخلفات البلاستيك والتي تشمل زجاجات وأكواب وعبوات مياه ومواسير تصل قيمتها إلى المليارات ، ويقوم البعض بتصديرها إلى الصين بعد كبسها وتستخدم مرة أخرى لتصنع منها الأدوات والأجهزة الكهربائية والملابس والشنط ولعب الأطفال ثم يعاد تصديرها إلينا مرة أخرى ، ويقوم بعض جامعي القمامة من الشوارع بنبش القمامة وفرز ما فيها لاستخراج المخلفات الهامة مثل البلاستيك والمعادن والزجاج ويقومون بإعادة بيعها أو تجهيزها من خلال غسلها ثم كسرها أو طحنها بكسارات بدائية ، واستفاد البعض منهم وتحول بالفعل إلى مليونيرات ، ولكن لهذا الأسلوب البدائي ضرره البالغ على جامع القمامة نفسه أو القائم بعملية التكسير أو البائع حيث لا يتيح هذا الأسلوب التعقيم المناسب ، وللأسف ففي ظل عدم الرقابة المطلقة على أعمال هؤلاء فيحدث في كثير من الأحيان قيامهم بطحن وتكسير عبوات مثل المبيدات الحشرية ومثل مخلفات المستشفيات وقد تحمل دما ملوثا أو ميكروبات وجراثيم التي لا يصلح لها إلا المعالجة الكيماوية ثم الدفن .. وللأسف فإنها تستخدم بالفعل في تصنيع أكواب وأطباق وملاعق للطعام بل وعبوات غذائية مما يمثل خطرا داهما على مستخدمها ، ولا يقل عن ذلك خطورة ما يحدث في زجاجات الأدوية التي يعاد استخدامها بدون غسيل كامل وتعقيم حيث تطحن بمحتوياتها ثم تصنع في هيئة أطباق للطعام وتجد رواجا غير عاديا نظرا لرخص سعرها .
                           </p>
                           <div class="row">
                               <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6 def-padding-sm">
                                   <img class="round-corner " src="images/post-img2.png">
                               </div>
                               <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12 def-padding-sm">
                                   <p class="grey-font md-font text-justify">
                                       - ومن الجدير بالذكر أن الدول الأوربية تطبق نظاما صارما ثبت نجاحه لديهم وهو وضع عدد من الأوعية ذات أكياس بألوان مختلفة في مختلف المواقع والتجمعات وأمام كل بيت ، حيث يلتزم المواطن بوضع القمامة المتخلفة كل في مكانه ، فهناك سلة لمخلفات الأوراق والكرتون ، وأخرى لمخلفات البلاستيك ، وأخرى لمخلفات الزجاج، ورابعة للمخلفات المعدنية .. وهكذا ، وبما يتيح إمكانية فرزها والاستفادة منها ، وهناك قوانين ملزمة توقع من يخالفها تحت طائلة القانون ، ولا يجب أن نغفل أن بعض المخلفات
                                   </p>
                               </div>
                           </div>
                           <p class="grey-font md-font text-justify def-padding-sm">


                               - ومن الجدير بالذكر أن الدول الأوربية تطبق نظاما صارما ثبت نجاحه لديهم وهو وضع عدد من الأوعية ذات أكياس بألوان مختلفة في مختلف المواقع والتجمعات وأمام كل بيت ، حيث يلتزم المواطن بوضع القمامة المتخلفة كل في مكانه ، فهناك سلة لمخلفات الأوراق والكرتون ، وأخرى لمخلفات البلاستيك ، وأخرى لمخلفات الزجاج، ورابعة للمخلفات المعدنية .. وهكذا ، وبما يتيح إمكانية فرزها والاستفادة منها ، وهناك قوانين ملزمة توقع من يخالفها تحت طائلة القانون ، ولا يجب أن نغفل أن بعض المخلفات يعاد فرزها مرة أخرى للفصل فيما بينها فمخلفات مثل البلاستيك يتم إعادة فرزها طبقا للمواد المصنعة منها وتشمل البي في سي – البولي ايثيلين – البولي بروبلين - البولي ايستر - البي أب في .. وبالطبع مع حظر استخدام المنتجات الملوثة مثل عبوات المبيدات الحشرية أدوات المستشفيات ، ويتم استخدام هذه المخلفات بعد كسرها و
                           </p>
                       </div>
                   </div>
               </div>
           </div>


	       <?php
       }
   }

?>



</div>
</div>



<?php
include ("includes/footer.php");
?>


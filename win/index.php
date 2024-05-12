<?php

include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/connclose.php';

?>
<?php include_once './parts/header.php'; ?>

  <div  class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <div class="col-md-5 p-lg-5 mx-auto">
      <img src="images/COT.jpeg" alt="">
      <h1 class="display-4 fw-normal">اربح مع معاذ</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخه مجانيه من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">coming soon</a>
   </div>

   <div class="container">
    <h3>:للدخول للسحب اتبع مايلي</h3>
   <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيس بوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">بث مباشر لمده ساعه عباره عن اساله واجوبه حره للجميع</li>
  <li class="list-group-item">سجل هنا اسمك وايميلك</li>
  <li class="list-group-item">قم باختيار اسم واحد عشوائي من قاعده البيانات</li>
  <li class="list-group-item">الرابح سيحصل على نسخه مجانيه من كاتازيا</li>
</ul></div>
  </div>
  
  

  
<div class="container">
<div class="position-relative  text-center"> 
  <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $firstname ?>">
    <div  class="form-error"><?php echo $errors['firstnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="" name="firstname" class="form-control" id="exampleInputEmail1" value="<?php echo $lastname ?>">
    <div  class="form-error"><?php echo $errors['lastnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text"name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>">
    <div  class="form-error"><?php echo $errors['emailError'] ?></div>
  </div>

 
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
  </div>

</div>

<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="modalLabel">الرابح  في المسابقه</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <?php foreach($users as $user): ?>
        <h1 class="displa-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars ($user['firstname']).''. htmlspecialchars ($user['lastname'])?></h1>
         <?php endforeach; ?>
      </div>
    
    </div>
  </div>
</div>


 </div>
 <?php include_once './parts/footer.php'; ?>

        <!DOCTYPE html>
        <html lang="ja">
        
        <head>
        
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
        
          <title>ログインページ</title>
       
          
        </head>
        

<body >
  <header class="masthead" > 
   <nav class="navbar navbar-expand-lg navbar-light fixed-top" 
          style="background-color: #2dac91;" id="mainNav">

   <div class="container">
    <button class="navbar-toggler navbar-toggler-right"
       type="button" data-toggle="collapse" 
       data-target="#navbarResponsive" 
       aria-controls="navbarResponsive" 
       aria-expanded="false" aria-label="Toggle navigation">
        IcoScam
     <i class="fas fa-bars"></i>
    </button>
              

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="customer_input.blade.php">データ追加</a>
        </li> 

        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/posts/customer_input')); ?>">新規登録</a>
        </li>
                
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/posts/login')); ?>">ログイン</a>
        </li>

      </ul>
      </div>
  </div>
    </nav>
 </body><?php /**PATH /home/vagrant/laravel_lessons_copy/myblog/resources/views/posts/header_beforelogin.blade.php ENDPATH**/ ?>
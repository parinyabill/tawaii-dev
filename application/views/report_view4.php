<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

</head>
<body>
<div data-role="page" data-theme="a" id="demo-page" class="my-page" data-url="demo-page">
  <div data-role="header">
  <h1>Tawaiforhealth</h1>
     <a href="grid-listview.html" data-shadow="false" data-iconshadow="false" data-icon="arrow-l" data-iconpos="" data-rel="back" data-ajax="false">กลับ</a>
  </div><!-- /header --> 
  <center><h3>รายงานอาการไม่พึงประสงค์</h3></center>
       <hr>
     <h5>ข้อมูลผู้ป่วย</h5>
  <div data-role="content">
    <div class="container">
      <h3><p>ระดับความร้ายแรง:*</p></h3>  
        <ul data-role="listview" data-inset="true">
          <li><a href="#">
              <img src="">
              <h2>ร้ายแรง</h2>
           <p class="ui-li-aside"></p>
       </a></li>
     </ul>
   </div><br><hr><br>
   <div class="container">
        <ul data-role="listview" data-inset="true">
          <li><a href="#">
              <img src="">
              <h2>ไม่ร้ายแรง</h2>
           <p class="ui-li-aside"></p>
       </a></li>
     </ul>
   </div><br><hr><br>
   <div class="container"> 
        <ul data-role="listview" data-inset="true">
          <li><a href="#">
              <img src="">
              <h2>ไม่สามารถระบุได้</h2>
           <p class="ui-li-aside"></p>
       </a></li>
     </ul>
   </div><br><hr><br> 
 </div>
</div>
</body>
</html>
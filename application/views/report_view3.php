<!DOCTYPE html>
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
     <h5>ที่อยู่ของผู้ป่วย</h5> 
<div data-role="content">
   <div class="container">  
     <p>จัวหวัด:</p>
       <form>
          <div class="form-group">
             <label for="test"></label>
             <select class="form-controt" id="test">
                <option>เลือกจังหวัด</option>
                <option>กรุงเทพ</option><option>นนทบุรี</option><option>เชียงใหม่</option>              
             </select>
          </div>
        </form>
    </div><br><hr><br>  
    <div class="container">  
     <p>อำเภอ:</p>
       <form>
          <div class="form-group">
             <label for="test"></label>
             <select class="form-controt" id="test">
                <option>เลือกอำเภอ</option>
                <option>กรุงเทพ</option><option>นนทบุรี</option><option>เชียงใหม่</option>              
             </select>
          </div>
        </form>
    </div><br><hr><br>  
    <div class="container">  
     <p>ตำบล:</p>
       <form>
          <div class="form-group">
             <label for="test"></label>
             <select class="form-controt" id="test">
                <option>เลือกตำบล</option>
                <option>กรุงเทพ</option><option>นนทบุรี</option><option>เชียงใหม่</option>              
             </select>
          </div>
        </form>
    </div><br><hr><br>  
    <div class="container">
        <label for="id">บ้านเลขที่:*</label>
        <input type="text" class="container" id="id">
      </div><br><hr><br>
    <div class="container">
        <label for="id">หมู่ที่:</label>
        <input type="text" class="container" id="id">
      </div><br><hr><br>
    <div class="container">
        <label for="id">ซอย:</label>
        <input type="text" class="container" id="id">
      </div><br><hr><br>
    <div class="container">
        <label for="id">ถนน:</label>
        <input type="text" class="container" id="id">
     </div><br><hr><br>
     <button style="font-size:24px">ถัดไป<i class="fa fa-chevron-circle-right"></i></button>
   </div>    
</div>       
</body>
</html>
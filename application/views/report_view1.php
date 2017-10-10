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
 <h5>ข้อมูลผู้ป่วย</h5>  
   <div data-role="content">
      <div class="container">
        <label for="usr">ชื่อ - นามสกุล:*</label>
        <input type="text" class="container" id="usr">
      </div><br><hr>  
      <div class="container">
      <p>เพศ:*</p>
        <form>
         <label class="radio-inline">
         <center><input type="radio" name="optradio">ชาย</center></label>
         <label class="radio-inline">
         <center><input type="radio" name="optradio">หญิง</center></label>
        </form> 
      </div><br><hr> 
      <div class="container">  
      <p>วัน/เดือน/ปีเกิด:*</p>
        <form>
           <div class="form-group">
              <label for="day"></label>
              <select class="form-controt" id="day">
                 <option>เลือกวันที่</option>
                 <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                 <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                 <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
                 <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
                 <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
                 <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
                 <option>31</option>
              </select>
           </div>
           <div class="form-group">
              <label for="month"></label>
              <select class="form-controt" id="month">
                 <option>เลือกเดือน</option>
                 <option>มกราคม</option><option>กุมภาพันธ์</option><option>มีนาคม</option><option>เมษายน</option><option>พฤษภาคม</option>
                 <option>มิถุนายน</option><option>กรกฎาคม</option><option>สิงหาคม</option><option>กันยายน</option><option>ตุลาคม</option>
                 <option>พฤศจิกายน</option><option>ธันวาคม</option>
              </select>
           </div>
           <div class="form-group">
              <label for="day"></label>
              <select class="form-controt" id="day">
                 <option>เลือกปี</option>
                 <option>2500</option><option>2501</option><option>2502</option><option>2503</option><option>2504</option><option>2505</option>
                 <option>2506</option><option>2507</option><option>2508</option><option>2509</option><option>2510</option><option>2511</option>
                 <option>2512</option><option>2513</option><option>2514</option><option>2515</option><option>2516</option><option>2517</option>
                 <option>2518</option><option>2519</option><option>2520</option><option>2521</option><option>2522</option><option>2523</option>
                 <option>2524</option><option>2525</option><option>2526</option><option>2527</option><option>2528</option><option>2529</option>
                 <option>2530</option><option>2531</option><option>2532</option><option>2533</option><option>2534</option><option>2535</option>
                 <option>2536</option><option>2537</option><option>2538</option><option>2539</option><option>2540</option><option>2541</option>
                 <option>2542</option><option>2543</option><option>2544</option><option>2545</option><option>2546</option><option>2547</option>
                 <option>2548</option><option>2549</option><option>2550</option><option>2551</option><option>2552</option><option>2553</option>
                 <option>2554</option><option>2555</option><option>2556</option><option>2557</option><option>2558</option><option>2559</option>
                 <option>2560</option>
              </select>
           </div>
        </form>
      </div><br><hr><br> 
      <div class="container">
        <label for="signup-cid" class="ui-input-text">เลขบัตรประชาชน:*</label>
        <input type="text" name="signup-cid" id="signup-cid" class="container" required maxlength="13">
      </div><br><hr><br>
      <div class="container">
        <label for="id">ที่อยู่:*</label>
        <input type="text" class="container" id="id">
      </div><br><hr><br>
      <div class="container">
        <label for="signup-cid" class="ui-input-text">เบอร์โทรศัพท์มือถือ:*</label>
        <input type="text" name="signup-cid" id="signup-cid" class="container" required maxlength="10">
      </div><br><hr><br>
      <div class="container">
        <label for="id">วันที่พบอาการ:*</label>
        <input type="text" class="container" id="id">
      </div><br><hr><br>
      <button href="#page2" style="font-size:24px">ถัดไป<i class="fa fa-chevron-circle-right"></i></button></a>
   </div>
</div>    
</body>
</html>
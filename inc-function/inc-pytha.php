<?php function pytha(){  ?>
   <div class="pytha-section">
        <form action=" "  method="post" autocomplete="on">
            <div class="pytha-title">
                <div class="pytha-icon d-flex">
                    <img style="object-fit: contain; width:50px; margin-right:10px"  src="https://nangluongcacconso.com/wp-content/uploads/2022/06/Logo-shtv-1.png" alt="">
                    <h2>TRA CỨU <br> THẦN SỐ HỌC</h2>
                </div>
            </div>
         
            <div class="pytha-inpt">
                <label for="">Tên của bạn</label>
                <input type="text" class="form-control" id="name" placeholder="Họ tên">
            </div>
            <div class="pytha-inpt">
                <label for="">Ngày sinh</label>
                <input type="date" class="form-control" id="birthday" placeholder="Họ tên">
            </div>
            <input type="submit" id='calculate-btn'  class="btn-dev" value="Xem ngay">
            <!-- <div value="Xem ngay" id='calculate-btn' class="btn-dev">Xem ngay</div> -->
            <input type="hidden" name="url_ajax" value="<?= admin_url('admin-ajax.php');?>">
            <!-- <button id='calculate-btn' data-target="#exampleModalCenter" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                Launch demo modal
            </button> -->

        </form>
        <div class="simso-load mx-auto text-center mt-3" style="max-width:100px">
            <div class="spinner-border" style="width: 2rem; height: 2rem; color:var(--primary-color);" role="status">
            </div>
        </div>
       
        <div class="pytha-show-content">

        </div>
        <div class="" id="exampleModalCenter" > 
            <!-- <div class="modal>  -->
            <div class="modal-dialog modal-dialog-centered" role="document"  >
                <div class="modal-content">
                <!-- <div class="modal-header">
                    <span aria-hidden="true">&times;</span>
                </div> -->
                <!-- <div class="modal-body">
                    <div class="pytha-step1">
                        <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color:#fff">SỐ CHỦ ĐẠO</h5>
                        <div class="pytha-content">
                            <div class="pytha-name-title text-center">
                                <span>Họ và tên:</span>
                                <span class="pytha-name"></span>
                            </div>
                            <div class="pytha-birth-title text-center">
                                <span>Ngày sinh:</span>
                                <span class="pytha-birth"></span>
                            </div>
                        </div>
                        <div class=" mandala-container ">
                            <div class="pytha-number">
                            </div>
                            <div class="mandala-number pulse"></div>
                        </div>
                        <button class="btn-dev btn-pytha text-center">Xem chi tiết luận giải</button>
                    </div>
                    <div class="pytha-step2">
                    </div>
                </div> -->
                </div>
            </div>
        </div>
   </div>
   
       
<?php } add_shortcode("pytha", "pytha");?>

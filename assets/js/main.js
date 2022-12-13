(function($) {

    $(document).ready(function() {
       
        $('.select_list option').each(function(){
            age = $(this).val();
            c = $(this).html();
            $('.link').append(`<div style="padding-bottom:0px;margin-bottom:0px;">https://vansu.net/tu-vi-tuoi-${age}-nam-2023-nam-mang-${c}.html</div>`)
            
        })
        // count = $('.select_list option').length;
        // console.log(count);
        housefeng();
        tuvi();
        // for (i=1900; i<=2050 ; i++){
        
        //     $('.sim-so').append(`<div class="ss-item"><div>https://thanglongdaoquan.vn/tim-sim-phong-thuy/?hoten=nguyen+thi+test&ngay=01&thang=01&nam=${i}&gio=01&phut=30&gioitinh=nam</div></div>`);

        //     // for(j=1; j<=12; j++){
        //     //     $('.sim-so div').append(`<p>https://thanglongdaoquan.vn/tim-sim-phong-thuy/?hoten=nguyen+thi+test&ngay=${j}&thang=01&nam=${i}&gio=01&phut=30&gioitinh=nam</p>`);
        //     // }
        // }
        // $('.sim-so .ss-item').each(function(){
        //     c = $(this).html();
        //     for (j=2; j<=12 ; j++){
        //         cc = c.replace('01',j)
        //         $(this).append(`<div>${cc}</div>`);
    
        //         // for(j=1; j<=12; j++){
        //         //     $('.sim-so div').append(`<p>https://thanglongdaoquan.vn/tim-sim-phong-thuy/?hoten=nguyen+thi+test&ngay=${j}&thang=01&nam=${i}&gio=01&phut=30&gioitinh=nam</p>`);
        //         // }
        //     }
        // })
        
        l= $('.sim-so .ss-item ').length;
        console.log(l)
    })
    
})(jQuery);


function housefeng() {
    $('.button__xemngay').click(function(e){
        // e.preventDefault();
        age = $(this).parent().parent().find('.select_list :selected').val();
        year = $(this).parent().parent().find('.select_list :selected').text();
       
        link = `/xem-huong-nha-hop-tuoi-${age}-${year}`;
        // console.log(link);
        window.location.href = link;
        // window.location.href = `/${age}-${year}`;
    });
}

function tuvi(){
    $('#btn-tuvi').click(function(e){
        // e.preventDefault();
        yearVal = $(this).parent().parent().find('select[name="nam_sinh"] option:selected').val();
        yearContent = $(this).parent().parent().find('select[name="nam_sinh"] option:selected').text();
        sex = $(this).parent().find('input[name="gioi_tinh"]:checked').val();
        // console.log(year);
        // console.log(sex);
        link = `/tu-vi-tuoi-${yearVal}-nam-2023-${sex}-mang-${yearContent}`;
        // console.log(link);
        window.location.href = link;
        // tu-vi-tuoi-binh-dan-nam-2023-nam-mang-1986
        // window.location.href = `/${age}-${year}`;
    });
}


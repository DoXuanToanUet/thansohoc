(function($) {

    $(document).ready(function() {     
        $("#calculate-btn").click(calculateBtnClick);
        $("#simso-btn").click(calculateBtnSimso);
        

    })
    
})(jQuery);


function reduceSumPythagoras(num) {

    if (isNaN(num)) {
        return 0;
    } 

    let rsum = num;
    // console.log(rsum)
    // console.log('-')
    while (![11, 22, 33].includes(rsum) && String(rsum).length > 1) {
        rsum = String(rsum)
        .split('')
        .map(Number)
        .reduce(function (a, b) {
            return a + b;
        }, 0);
    }
    
    return rsum;
}
var PYTHAGOREAN = {
    'a': 1,
    'b': 2,
    'c': 3,
    'd': 4,
    'e': 5,
    'f': 6,
    'g': 7,
    'h': 8,
    'i': 9,
    'j': 1,
    'k': 2,
    'l': 3,
    'm': 4,
    'n': 5,
    'o': 6,
    'p': 7,
    'q': 8,
    'r': 9,
    's': 1,
    't': 2,
    'u': 3,
    'v': 4,
    'w': 5,
    'x': 6,
    'y': 7,
    'z': 8
}
function removeAccent(str) {

    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    return str;

}
function removeVietnameseTones(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
    str = str.replace(/đ/g,"d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    // Some system encode vietnamese combining accent as individual utf-8 characters
    // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
    // Remove extra spaces
    // Bỏ các khoảng trắng liền nhau
    str = str.replace(/ + /g," ");
    str = str.trim();
    // Remove punctuations
    // Bỏ dấu câu, kí tự đặc biệt
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
    return str;
}
function preStr(str) {
    
    str = str.toLowerCase();
    str = removeVietnameseTones(str);
    // str = str.replace(/[^a-z\s]/gi, ' ');
    // str = str.replace(/\s+/g, ' ');
    str.trim();
    return str;
}
function calcBhdd(day, month, year) {

    // console.log("BHDD:");

    // Step 1
    let x1 = reduceSumPythagoras(day);
    // console.log("x1 = " + x1);

    // Step 2
    let x2 = reduceSumPythagoras(month);
    // console.log("x2 = " + x2);

    // Step 3
    let x3 = reduceSumPythagoras(year);
    // console.log("x3 = " + x3);

    // Step 4
    let x4 = x1 + x2 + x3;
    // console.log("x4 = " + x4);

    // Step 5
    let x5 = reduceSumPythagoras(x4);
    // console.log("x5 = " + x5);

    return x5;

}
function preprocessStr(str) {
    
    str = str.toLowerCase();
    str = removeAccent(str);
    // str = str.replace(/[^a-z\s]/gi, ' ');
    // str = str.replace(/\s+/g, ' ');
    str.trim();

    return str;
}
function calculateBtnClick(e) {
    e.preventDefault();
    
    // Extract date
    let date = new Date($('#birthday').val());
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();
    let name = $("#name").val();
    namePytha = preStr(name);
    // console.log(typeof namePytha);
    // console.log( namePytha);
    // console.log( 'this is name');
    if (name.length == 0) {
        alert("Xin hãy nhập tên của bạn.");
        return;
    }

    if (isNaN(day) || isNaN(month) || isNaN(year)) {
        alert("Xin hãy kiểm tra lại ngày sinh.");
        return;
    }

    // Clear old content and show loading icon
    // $("#result").html("");
    // $(".loading-icon").show();

    // Delay a little to show loading icon
    // setTimeout(function() {
    //     // Run calculation
    //     calculate(day, month, year, name);
    //     // Hide loading icon
    //     $(".loading-icon").hide();
    // }, 1000);
    let bhdd = calcBhdd(day, month, year);
   
    let words = preprocessStr(name);
    // console.log("Preprocessed name: " + words);

    // NLTN
    let nltn = calcNltn(words);
    // console.log("nltn: " + nltn);

    // DLBT
    let dlbt = calcDlbt(words);
    // console.log("dlbt: " + dlbt);

    // DLBT
    let nc = calcNc(words);
    // console.log("nc: " + nc);
    // $('.mandala-number').html(bhdd);
    // $('#exampleModalCenter').toggle();
    birth = `${day}-${month}-${year}`;
    // $('.btn-pytha').click(function(){
        // console.log('this is pytha');
        var ajax_url = $(".pytha-section input[name='url_ajax']").val();
        $.ajax({
            type: "post",
            dataType: "html",
            async: true,
            url: ajax_url,
            data: {
                action:'pythaActionv3',
                bhdd:bhdd,
                day:day,
                month:month,
                year:year,
                name:namePytha,
                // birth:birth,
                // nltn:nltn
               
            },
            beforeSend: function () {
                $('.simso-load').show();
            },
            success: function (response) {
                $('.simso-load').hide();
                $('.pytha-show-content').show();
                // console.log(response);
                // $('.pytha-step1').toggle();
                // $('.pytha-step2').toggle();
                // $(document).find('.pytha-step1 .pytha-name').html(name);
                // $(document).find('.pytha-step1 .pytha-birth').html(`${day}-${month}-${year}`);
                $('.pytha-show-content').html(`${response}`);
                //BEGIN
                $(".accordion__title").on("click", function(e) {

                    e.preventDefault();
                    console.log('this is ');
                    var $this = $(this);

                    if (!$this.hasClass("accordion-active")) {
                        $(".accordion__content").slideUp(400);
                        $(".accordion__title").removeClass("accordion-active");
                        $('.accordion__arrow').removeClass('accordion__rotate');
                    }

                    $this.toggleClass("accordion-active");
                    $this.next().slideToggle();
                    $('.accordion__arrow',this).toggleClass('accordion__rotate');
                });
                //END
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //Làm gì đó khi có lỗi xảy ra
                console.log('The following error occured: ' + textStatus, errorThrown);
            }
        });
    // })
     

}

function calculate(day, month, year, name) {

    console.log("Calculating...");
    $("#result").append('<h2 class="text-center mb-4">Kết quả:</h3>');
    
   
    $("#result").append('<p class="calculation-steps"><b>Bài học đường đời (BHDD) = ' + bhdd + '</b>. <a href="/posts/cach-tinh/bhdd" target="_blank">Xem cách tính.</a></p>');
    if (bhdd != 0) {
        getData("/posts/bhdd/" + bhdd);
    }

    let words = preprocessStr(name);
    console.log("Preprocessed name: " + words);

    let nltn = calcNltn(words);
    $("#result").append('<p class="calculation-steps"><b>Năng lực tự nhiên (NLTN) = ' + nltn + '</b>. <a href="/posts/cach-tinh/dlbt-nltn-nc" target="_blank">Xem cách tính.</a></p>');
    if (nltn != 0) {
        getData("/posts/nltn/" + nltn);
    }

    let dlbt = calcDlbt(words);
    $("#result").append('<p class="calculation-steps"><b>Động lực bên trong (ĐLBT) = ' + dlbt + '</b>. <a href="/posts/cach-tinh/dlbt-nltn-nc" target="_blank">Xem cách tính.</a></p>');
    if (dlbt != 0) {
        getData("/posts/dlbt/" + dlbt);
    }

    let nc = calcNc(words);
    $("#result").append('<p class="calculation-steps"><b>Nhân cách bên ngoài (NC) = ' + nc + '</b>. <a href="/posts/cach-tinh/dlbt-nltn-nc" target="_blank">Xem cách tính.</a></p>');
    if (nc != 0) {
        getData("/posts/nc/" + nc);
    }

}


// $(function () {
//     var exampleModalCenter = $('#exampleModalCenter');
//     var backgrounds = [
//       'url(https://xem.tracuuthansohoc.com/uploads/images/bg.jpg', 
//       'url(https://storage.googleapis.com/enterknow.com/data-contents/2021/10/Star-constellations.jpg'];
//     var current = 0;

//     function nextBackground() {
//         exampleModalCenter.css(
//             'background',
//         backgrounds[current = ++current % backgrounds.length]);

//         setTimeout(nextBackground, 5000);
//     }
//     setTimeout(nextBackground, 5000);
//     exampleModalCenter.css('background', backgrounds[0]);
// });

function calculateBtnSimso(e){
    e.preventDefault();

    
    // Extract date
   
    let ssname = $(".simso-section #ss-name").val();
    let ssyear = $(".simso-section #ss-nam").val();

    if (ssname.length == 0) {
        alert("Xin hãy nhập tên của bạn.");
        return;
    }
    if (ssyear.length == 0) {
        alert("Xin hãy chọn năm sinh của bạn.");
        return;
    }

    // if (isNaN(day) || isNaN(month) || isNaN(year)) {
    //     alert("Xin hãy kiểm tra lại ngày sinh.");
    //     return;
    // }

    var ajax_url = $(".simso-section input[name='url_ajax']").val();
    $.ajax({
        type: "post",
        dataType: "html",
        async: true,
        url: ajax_url,
        data: {
            action:'simsoAction',
            ssyear:ssyear
        },
        beforeSend: function () {
            $('.simso-load').show();
        },
        success: function (response) {
            console.log(response);
            $('.simso-load').hide();
            $('.simso-content').html(`<h2 class="simso-content-title text-center mt-3">Những số sim đẹp cho bạn </h2>
                <div class="simso-content-wrapper">${response}</div>
            
            `);
            $('.simso-content .listsim .sim-detail .view-more').click(function(){
                $('.simso-content .listsim .sim-detail').toggleClass('t');
            })
            // $('.pytha-step1').toggle();
            // $('.pytha-step2').toggle();
            // $('.pytha-step2').html(`${response}`);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            //Làm gì đó khi có lỗi xảy ra
            console.log('The following error occured: ' + textStatus, errorThrown);
        }
    });

}

function showDetail (a){
    console.log(a)
    a.closest('.sim-item').find('.sim-detail').toggleClass('view-add');
}

function calcDlbt(words) {

    let sum = 0;
    for (let i = 0; i < words.length; ++i) {
        sum += calcWordValue(words[i], mode="DLBT");
    }

    sum = reduceSumPythagoras(sum);
    return sum;

}


function calcWordValue(word, mode="ALL") {

    // console.log("Calculating word value for: " + word);

    if (word.length == 0) {
        return 0;
    }

    let wordValue = 0;
    let letters = word.split('');

    if (mode == "DLBT") {

        // console.log("DLBT");

        for (let i = 1; i < letters.length; ++i) {
            // Remove y if y lies after a vowel
            if (letters[i] == "y" && "ueoai".includes(letters[i-1])) {
                letters[i] = ".";
            }
        }

        for (let i = 0; i < letters.length; ++i) {
            // Only keep u, e, o, a, i, y
            if (!"ueoaiy".includes(letters[i])) {
                letters[i] = ".";
            }
        }

        // console.log(letters);
        
    } else if (mode == "NC") {

        // console.log("NC");

        if (letters[0] == "y") {
            letters[0] = ".";
        }

        for (let i = 1; i < letters.length; ++i) {
            if (letters[i] == "y" && !"ueoai".includes(letters[i-1])) {
                letters[i] = ".";
            }
        }

        for (let i = 0; i < letters.length; ++i) {
            if ("ueoai".includes(letters[i])) {
                letters[i] = ".";
            }
        }

        // console.log(letters);
    }

    for (let i = 0; i < letters.length; ++i) {
        if (letters[i] in PYTHAGOREAN) {
            wordValue += PYTHAGOREAN[letters[i]];
        }
    }
    
    // console.log("Value: " + wordValue);
    wordValue = reduceSumPythagoras(wordValue);

    return wordValue

}


function calcNltn(words) {

    let sum = 0;
    for (let i = 0; i < words.length; ++i) {
        sum += calcWordValue(words[i]);
    }

    sum = reduceSumPythagoras(sum);
    return sum;

}


function calcNc(words) {

    let sum = 0;
    for (let i = 0; i < words.length; ++i) {
        sum += calcWordValue(words[i], mode="NC");
    }

    sum = reduceSumPythagoras(sum);
    return sum;

}
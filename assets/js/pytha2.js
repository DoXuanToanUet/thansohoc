function reduceSumPythagoras(e) {
    if (isNaN(e)) return 0;
    let t = e;
    for (; ![11, 22, 33].includes(t) && String(t).length > 1; )
        t = String(t)
            .split("")
            .map(Number)
            .reduce(function (e, t) {
                return e + t;
            }, 0);
    return t;
}
!(function (e) {
    e(document).ready(function () {
        e("#calculate-btn").click(calculateBtnClick), e("#simso-btn").click(calculateBtnSimso);
    });
})(jQuery);
var PYTHAGOREAN = { a: 1, b: 2, c: 3, d: 4, e: 5, f: 6, g: 7, h: 8, i: 9, j: 1, k: 2, l: 3, m: 4, n: 5, o: 6, p: 7, q: 8, r: 9, s: 1, t: 2, u: 3, v: 4, w: 5, x: 6, y: 7, z: 8 };
function removeAccent(e) {
    return (e = (e = (e = (e = (e = (e = (e = (e = (e = (e = (e = (e = (e = (e = e.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a")).replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e")).replace(/ì|í|ị|ỉ|ĩ/g, "i")).replace(
        /ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,
        "o"
    )).replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u")).replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y")).replace(/đ/g, "d")).replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A")).replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E")).replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I")).replace(
        /Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g,
        "O"
    )).replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U")).replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y")).replace(/Đ/g, "D"));
}
function calcBhdd(e, t, l) {
    console.log("BHDD:");
    let n = reduceSumPythagoras(e);
    console.log("x1 = " + n);
    let c = reduceSumPythagoras(t);
    console.log("x2 = " + c);
    let a = reduceSumPythagoras(l);
    console.log("x3 = " + a);
    let o = n + c + a;
    console.log("x4 = " + o);
    let s = reduceSumPythagoras(o);
    return console.log("x5 = " + s), s;
}
function preprocessStr(e) {
    return (e = (e = (e = removeAccent((e = e.toLowerCase()))).replace(/[^a-z\s]/gi, " ")).replace(/\s+/g, " ")).trim(), e.split(" ");
}
function calculateBtnClick(e) {
    e.preventDefault();
    let t = new Date($("#birthday").val()),
        l = t.getDate(),
        n = t.getMonth() + 1,
        c = t.getFullYear(),
        a = $("#name").val();
    if (0 == a.length) return void alert("Xin hãy nhập tên của bạn.");
    if (isNaN(l) || isNaN(n) || isNaN(c)) return void alert("Xin hãy kiểm tra lại ngày sinh.");
    let o = calcBhdd(l, n, c),
        s = preprocessStr(a);
    console.log("Preprocessed name: " + s);
    let r = calcNltn(s);
    console.log("nltn: " + r);
    let i = calcDlbt(s);
    console.log("dlbt: " + i);
    let u = calcNc(s);
    console.log("nc: " + u), (birth = `${l}-${n}-${c}`);
    var h = $(".pytha-section input[name='url_ajax']").val();
    $.ajax({
        type: "post",
        dataType: "html",
        async: !0,
        url: h,
        data: { action: "pythaActionv2", hddd: o, name: a, birth: birth, nltn: r },
        beforeSend: function () {
            $(".simso-load").show();
        },
        success: function (e) {
            $(".simso-load").hide(), $(".pytha-show-content").html(`${e}`);
        },
        error: function (e, t, l) {
            console.log("The following error occured: " + t, l);
        },
    });
}
function calculate(e, t, l, n) {
    console.log("Calculating..."),
        $("#result").append('<h2 class="text-center mb-4">Kết quả:</h3>'),
        $("#result").append('<p class="calculation-steps"><b>Bài học đường đời (BHDD) = ' + bhdd + '</b>. <a href="/posts/cach-tinh/bhdd" target="_blank">Xem cách tính.</a></p>'),
        0 != bhdd && getData("/posts/bhdd/" + bhdd);
    let c = preprocessStr(n);
    console.log("Preprocessed name: " + c);
    let a = calcNltn(c);
    $("#result").append('<p class="calculation-steps"><b>Năng lực tự nhiên (NLTN) = ' + a + '</b>. <a href="/posts/cach-tinh/dlbt-nltn-nc" target="_blank">Xem cách tính.</a></p>'), 0 != a && getData("/posts/nltn/" + a);
    let o = calcDlbt(c);
    $("#result").append('<p class="calculation-steps"><b>Động lực bên trong (ĐLBT) = ' + o + '</b>. <a href="/posts/cach-tinh/dlbt-nltn-nc" target="_blank">Xem cách tính.</a></p>'), 0 != o && getData("/posts/dlbt/" + o);
    let s = calcNc(c);
    $("#result").append('<p class="calculation-steps"><b>Nhân cách bên ngoài (NC) = ' + s + '</b>. <a href="/posts/cach-tinh/dlbt-nltn-nc" target="_blank">Xem cách tính.</a></p>'), 0 != s && getData("/posts/nc/" + s);
}
function calculateBtnSimso(e) {
    e.preventDefault();
    let t = $(".simso-section #ss-name").val(),
        l = $(".simso-section #ss-nam").val();
    if (0 != t.length)
        if (0 != l.length) {
            var n = $(".simso-section input[name='url_ajax']").val();
            $.ajax({
                type: "post",
                dataType: "html",
                async: !0,
                url: n,
                data: { action: "simsoAction", ssyear: l },
                beforeSend: function () {
                    $(".simso-load").show();
                },
                success: function (e) {
                    console.log(e),
                        $(".simso-load").hide(),
                        $(".simso-content").html(`<h2 class="simso-content-title text-center mt-3">Những số sim đẹp cho bạn </h2>\n                <div class="simso-content-wrapper">${e}</div>\n            \n            `),
                        $(".simso-content .listsim .sim-detail .view-more").click(function () {
                            $(".simso-content .listsim .sim-detail").toggleClass("t");
                        });
                },
                error: function (e, t, l) {
                    console.log("The following error occured: " + t, l);
                },
            });
        } else alert("Xin hãy chọn năm sinh của bạn.");
    else alert("Xin hãy nhập tên của bạn.");
}
function showDetail(e) {
    console.log(e), e.closest(".sim-item").find(".sim-detail").toggleClass("view-add");
}
function calcDlbt(e) {
    let t = 0;
    for (let l = 0; l < e.length; ++l) t += calcWordValue(e[l], (mode = "DLBT"));
    return (t = reduceSumPythagoras(t)), t;
}
function calcWordValue(e, t = "ALL") {
    if ((console.log("Calculating word value for: " + e), 0 == e.length)) return 0;
    let l = 0,
        n = e.split("");
    if ("DLBT" == t) {
        for (let e = 1; e < n.length; ++e) "y" == n[e] && "ueoai".includes(n[e - 1]) && (n[e] = ".");
        for (let e = 0; e < n.length; ++e) "ueoaiy".includes(n[e]) || (n[e] = ".");
    } else if ("NC" == t) {
        "y" == n[0] && (n[0] = ".");
        for (let e = 1; e < n.length; ++e) "y" != n[e] || "ueoai".includes(n[e - 1]) || (n[e] = ".");
        for (let e = 0; e < n.length; ++e) "ueoai".includes(n[e]) && (n[e] = ".");
    }
    for (let e = 0; e < n.length; ++e) n[e] in PYTHAGOREAN && (l += PYTHAGOREAN[n[e]]);
    return console.log("Value: " + l), (l = reduceSumPythagoras(l)), l;
}
function calcNltn(e) {
    let t = 0;
    for (let l = 0; l < e.length; ++l) t += calcWordValue(e[l]);
    return (t = reduceSumPythagoras(t)), t;
}
function calcNc(e) {
    let t = 0;
    for (let l = 0; l < e.length; ++l) t += calcWordValue(e[l], (mode = "NC"));
    return (t = reduceSumPythagoras(t)), t;
}

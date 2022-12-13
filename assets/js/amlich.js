var ABOUT = "ÂM LỊCH VIỆT NAM - HNĐ";
var TK19 = new Array(0x30baa3,0x56ab50,0x422ba0,0x2cab61,0x52a370,0x3c51e8,0x60d160,0x4ae4b0,0x376926,0x58daa0,0x445b50,0x3116d2,0x562ae0,0x3ea2e0,0x28e2d2,0x4ec950,0x38d556,0x5cb520,0x46b690,0x325da4,0x5855d0,0x4225d0,0x2ca5b3,0x52a2b0,0x3da8b7,0x60a950,0x4ab4a0,0x35b2a5,0x5aad50,0x4455b0,0x302b74,0x562570,0x4052f9,0x6452b0,0x4e6950,0x386d56,0x5e5aa0,0x46ab50,0x3256d4,0x584ae0,0x42a570,0x2d4553,0x50d2a0,0x3be8a7,0x60d550,0x4a5aa0,0x34ada5,0x5a95d0,0x464ae0,0x2eaab4,0x54a4d0,0x3ed2b8,0x64b290,0x4cb550,0x385757,0x5e2da0,0x4895d0,0x324d75,0x5849b0,0x42a4b0,0x2da4b3,0x506a90,0x3aad98,0x606b50,0x4c2b60,0x359365,0x5a9370,0x464970,0x306964,0x52e4a0,0x3cea6a,0x62da90,0x4e5ad0,0x392ad6,0x5e2ae0,0x4892e0,0x32cad5,0x56c950,0x40d4a0,0x2bd4a3,0x50b690,0x3a57a7,0x6055b0,0x4c25d0,0x3695b5,0x5a92b0,0x44a950,0x2ed954,0x54b4a0,0x3cb550,0x286b52,0x4e55b0,0x3a2776,0x5e2570,0x4852b0,0x32aaa5,0x56e950,0x406aa0,0x2abaa3,0x50ab50);
var TK20 = new Array(0x3c4bd8,0x624ae0,0x4ca570,0x3854d5,0x5cd260,0x44d950,0x315554,0x5656a0,0x409ad0,0x2a55d2,0x504ae0,0x3aa5b6,0x60a4d0,0x48d250,0x33d255,0x58b540,0x42d6a0,0x2cada2,0x5295b0,0x3f4977,0x644970,0x4ca4b0,0x36b4b5,0x5c6a50,0x466d50,0x312b54,0x562b60,0x409570,0x2c52f2,0x504970,0x3a6566,0x5ed4a0,0x48ea50,0x336a95,0x585ad0,0x442b60,0x2f86e3,0x5292e0,0x3dc8d7,0x62c950,0x4cd4a0,0x35d8a6,0x5ab550,0x4656a0,0x31a5b4,0x5625d0,0x4092d0,0x2ad2b2,0x50a950,0x38b557,0x5e6ca0,0x48b550,0x355355,0x584da0,0x42a5b0,0x2f4573,0x5452b0,0x3ca9a8,0x60e950,0x4c6aa0,0x36aea6,0x5aab50,0x464b60,0x30aae4,0x56a570,0x405260,0x28f263,0x4ed940,0x38db47,0x5cd6a0,0x4896d0,0x344dd5,0x5a4ad0,0x42a4d0,0x2cd4b4,0x52b250,0x3cd558,0x60b540,0x4ab5a0,0x3755a6,0x5c95b0,0x4649b0,0x30a974,0x56a4b0,0x40aa50,0x29aa52,0x4e6d20,0x39ad47,0x5eab60,0x489370,0x344af5,0x5a4970,0x4464b0,0x2c74a3,0x50ea50,0x3d6a58,0x6256a0,0x4aaad0,0x3696d5,0x5c92e0);
var TK21 = new Array(0x46c960,0x2ed954,0x54d4a0,0x3eda50,0x2a7552,0x4e56a0,0x38a7a7,0x5ea5d0,0x4a92b0,0x32aab5,0x58a950,0x42b4a0,0x2cbaa4,0x50ad50,0x3c55d9,0x624ba0,0x4ca5b0,0x375176,0x5c5270,0x466930,0x307934,0x546aa0,0x3ead50,0x2a5b52,0x504b60,0x38a6e6,0x5ea4e0,0x48d260,0x32ea65,0x56d520,0x40daa0,0x2d56a3,0x5256d0,0x3c4afb,0x6249d0,0x4ca4d0,0x37d0b6,0x5ab250,0x44b520,0x2edd25,0x54b5a0,0x3e55d0,0x2a55b2,0x5049b0,0x3aa577,0x5ea4b0,0x48aa50,0x33b255,0x586d20,0x40ad60,0x2d4b63,0x525370,0x3e49e8,0x60c970,0x4c54b0,0x3768a6,0x5ada50,0x445aa0,0x2fa6a4,0x54aad0,0x4052e0,0x28d2e3,0x4ec950,0x38d557,0x5ed4a0,0x46d950,0x325d55,0x5856a0,0x42a6d0,0x2c55d4,0x5252b0,0x3ca9b8,0x62a930,0x4ab490,0x34b6a6,0x5aad50,0x4655a0,0x2eab64,0x54a570,0x4052b0,0x2ab173,0x4e6930,0x386b37,0x5e6aa0,0x48ad50,0x332ad5,0x582b60,0x42a570,0x2e52e4,0x50d160,0x3ae958,0x60d520,0x4ada90,0x355aa6,0x5a56d0,0x462ae0,0x30a9d4,0x54a2d0,0x3ed150,0x28e952);
var TK22 = new Array(0x4eb520,0x38d727,0x5eada0,0x4a55b0,0x362db5,0x5a45b0,0x44a2b0,0x2eb2b4,0x54a950,0x3cb559,0x626b20,0x4cad50,0x385766,0x5c5370,0x484570,0x326574,0x5852b0,0x406950,0x2a7953,0x505aa0,0x3baaa7,0x5ea6d0,0x4a4ae0,0x35a2e5,0x5aa550,0x42d2a0,0x2de2a4,0x52d550,0x3e5abb,0x6256a0,0x4c96d0,0x3949b6,0x5e4ab0,0x46a8d0,0x30d4b5,0x56b290,0x40b550,0x2a6d52,0x504da0,0x3b9567,0x609570,0x4a49b0,0x34a975,0x5a64b0,0x446a90,0x2cba94,0x526b50,0x3e2b60,0x28ab61,0x4c9570,0x384ae6,0x5cd160,0x46e4a0,0x2eed25,0x54da90,0x405b50,0x2c36d3,0x502ae0,0x3a93d7,0x6092d0,0x4ac950,0x32d556,0x58b4a0,0x42b690,0x2e5d94,0x5255b0,0x3e25fa,0x6425b0,0x4e92b0,0x36aab6,0x5c6950,0x4674a0,0x31b2a5,0x54ad50,0x4055a0,0x2aab73,0x522570,0x3a5377,0x6052b0,0x4a6950,0x346d56,0x585aa0,0x42ab50,0x2e56d4,0x544ae0,0x3ca570,0x2864d2,0x4cd260,0x36eaa6,0x5ad550,0x465aa0,0x30ada5,0x5695d0,0x404ad0,0x2aa9b3,0x50a4d0,0x3ad2b7,0x5eb250,0x48b540,0x33d556);
var CAN = new Array("Gi\341p","\u1EA4t","B\355nh","\u0110inh","M\u1EADu","K\u1EF7","Canh","T\342n","Nh\342m","Qu\375");
var CHI = new Array("T\375","S\u1EEDu","D\u1EA7n","M\343o","Th\354n","T\u1EF5","Ng\u1ECD","M\371i","Th\342n","D\u1EADu","Tu\u1EA5t","H\u1EE3i");
var TUAN = new Array("Ch\u1EE7 nh\u1EADt","Th\u1EE9 hai","Th\u1EE9 ba","Th\u1EE9 t\u01B0","Th\u1EE9 n\u0103m","Th\u1EE9 s\341u","Th\u1EE9 b\u1EA3y");
var GIO_HD = new Array("110100101100","001101001011","110011010010","101100110100","001011001101","010010110011");
var TIETKHI = new Array("Xu\u00E2n ph\u00E2n","Thanh minh","C\u1ED1c v\u0169","L\u1EADp h\u1EA1","Ti\u1EC3u m\u00E3n","Mang ch\u1EE7ng","H\u1EA1 ch\u00ED","Ti\u1EC3u th\u1EED","\u0110\u1EA1i th\u1EED","L\u1EADp thu","X\u1EED th\u1EED","B\u1EA1ch l\u1ED9","Thu ph\u00E2n","H\u00E0n l\u1ED9","S\u01B0\u01A1ng gi\u00E1ng","L\u1EADp \u0111\u00F4ng","Ti\u1EC3u tuy\u1EBFt","\u0110\u1EA1i tuy\u1EBFt","\u0110\u00F4ng ch\u00ED","Ti\u1EC3u h\u00E0n","\u0110\u1EA1i h\u00E0n","L\u1EADp xu\u00E2n","V\u0169 Th\u1EE7y","Kinh tr\u1EADp");
function LunarDate(dd, mm, yy, leap, jd) {
    this.day = dd;
    this.month = mm;
    this.year = yy;
    this.leap = leap;
    this.jd = jd;
}
var PI = Math.PI;
function INT(d) {
    return Math.floor(d);
}
function jdn(dd, mm, yy) {
    var a = INT((14 - mm) / 12);
    var y = yy + 4800 - a;
    var m = mm + 12 * a - 3;
    var jd = dd + INT((153 * m + 2) / 5) + 365 * y + INT(y / 4) - INT(y / 100) + INT(y / 400) - 32045;
    return jd;
}
function jdn2date(jd) {
    var Z, A, alpha, B, C, D, E, dd, mm, yyyy, F;
    Z = jd;
    if (Z < 2299161) {
        A = Z;
    } else {
        alpha = INT((Z - 1867216.25) / 36524.25);
        A = Z + 1 + alpha - INT(alpha / 4);
    }
    B = A + 1524;
    C = INT((B - 122.1) / 365.25);
    D = INT(365.25 * C);
    E = INT((B - D) / 30.6001);
    dd = INT(B - D - INT(30.6001 * E));
    if (E < 14) {
        mm = E - 1;
    } else {
        mm = E - 13;
    }
    if (mm < 3) {
        yyyy = C - 4715;
    } else {
        yyyy = C - 4716;
    }
    return new Array(dd,mm,yyyy);
}
function decodeLunarYear(yy, k) {
    var monthLengths, regularMonths, offsetOfTet, leapMonth, leapMonthLength, solarNY, currentJD, j, mm;
    var ly = new Array();
    monthLengths = new Array(29,30);
    regularMonths = new Array(12);
    offsetOfTet = k >> 17;
    leapMonth = k & 0xf;
    leapMonthLength = monthLengths[k >> 16 & 0x1];
    solarNY = jdn(1, 1, yy);
    currentJD = solarNY + offsetOfTet;
    j = k >> 4;
    for (i = 0; i < 12; i++) {
        regularMonths[12 - i - 1] = monthLengths[j & 0x1];
        j >>= 1;
    }
    if (leapMonth == 0) {
        for (mm = 1; mm <= 12; mm++) {
            ly.push(new LunarDate(1,mm,yy,0,currentJD));
            currentJD += regularMonths[mm - 1];
        }
    } else {
        for (mm = 1; mm <= leapMonth; mm++) {
            ly.push(new LunarDate(1,mm,yy,0,currentJD));
            currentJD += regularMonths[mm - 1];
        }
        ly.push(new LunarDate(1,leapMonth,yy,1,currentJD));
        currentJD += leapMonthLength;
        for (mm = leapMonth + 1; mm <= 12; mm++) {
            ly.push(new LunarDate(1,mm,yy,0,currentJD));
            currentJD += regularMonths[mm - 1];
        }
    }
    return ly;
}
function getYearInfo(yyyy) {
    var yearCode;
    if (yyyy < 1900) {
        yearCode = TK19[yyyy - 1800];
    } else if (yyyy < 2000) {
        yearCode = TK20[yyyy - 1900];
    } else if (yyyy < 2100) {
        yearCode = TK21[yyyy - 2000];
    } else {
        yearCode = TK22[yyyy - 2100];
    }
    return decodeLunarYear(yyyy, yearCode);
}
var FIRST_DAY = jdn(25, 1, 1800);
var LAST_DAY = jdn(31, 12, 2199);
function findLunarDate(jd, ly) {
    if (jd > LAST_DAY || jd < FIRST_DAY || ly[0].jd > jd) {
        return new LunarDate(0,0,0,0,jd);
    }
    var i = ly.length - 1;
    while (jd < ly[i].jd) {
        i--;
    }
    var off = jd - ly[i].jd;
    ret = new LunarDate(ly[i].day + off,ly[i].month,ly[i].year,ly[i].leap,jd);
    return ret;
}
function getSolarDate(dd, mm, yyyy) {
    if (yyyy < 1200 || 2199 < yyyy) {
        return new LunarDate(0,0,0,0,0);
    }
    var ly = getYearInfo(yyyy);
    var lm = ly[mm - 1];
    if (lm.month != mm) {
        lm = ly[mm];
    }
    var ld = lm.jd + dd - 1;
    return jdn2date(ld);
}
function getLunarDate(dd, mm, yyyy) {
    var ly, jd;
    if (yyyy < 1800 || 2199 < yyyy) {}
    ly = getYearInfo(yyyy);
    jd = jdn(dd, mm, yyyy);
    if (jd < ly[0].jd) {
        ly = getYearInfo(yyyy - 1);
    }
    return findLunarDate(jd, ly);
}
function SunLongitude(jdn) {
    var T, T2, dr, M, L0, DL, L;
    T = (jdn - 2451545.0) / 36525;
    T2 = T * T;
    dr = PI / 180;
    M = 357.52910 + 35999.05030 * T - 0.0001559 * T2 - 0.00000048 * T * T2;
    L0 = 280.46645 + 36000.76983 * T + 0.0003032 * T2;
    DL = (1.914600 - 0.004817 * T - 0.000014 * T2) * Math.sin(dr * M);
    DL = DL + (0.019993 - 0.000101 * T) * Math.sin(dr * 2 * M) + 0.000290 * Math.sin(dr * 3 * M);
    L = L0 + DL;
    L = L * dr;
    L = L - PI * 2 * (INT(L / (PI * 2)));
    return L;
}
function getSunLongitude(dayNumber, timeZone) {
    return INT(SunLongitude(dayNumber - 0.5 - timeZone / 24.0) / PI * 12);
}
var today = new Date();
var currentLunarDate = getLunarDate(today.getDate(), today.getMonth() + 1, today.getFullYear());
var currentMonth = today.getMonth() + 1;
var currentYear = today.getFullYear();
function parseQuery(q) {
    var ret = new Array();
    if (q.length < 2)
        return ret;
    var s = q.substring(1, q.length);
    var arr = s.split("&");
    var i, j;
    for (i = 0; i < arr.length; i++) {
        var a = arr[i].split("=");
        for (j = 0; j < a.length; j++) {
            ret.push(a[j]);
        }
    }
    return ret;
}
function getSelectedMonth() {
    var query = window.location.search;
    var arr = parseQuery(query);
    var idx;
    for (idx = 0; idx < arr.length; idx++) {
        if (arr[idx] == "mm") {
            currentMonth = parseInt(arr[idx + 1]);
        } else if (arr[idx] == "yy") {
            currentYear = parseInt(arr[idx + 1]);
        }
    }
}
function getMonth(mm, yy) {
    var ly1, ly2, tet1, jd1, jd2, mm1, yy1, result, i;
    if (mm < 12) {
        mm1 = mm + 1;
        yy1 = yy;
    } else {
        mm1 = 1;
        yy1 = yy + 1;
    }
    jd1 = jdn(1, mm, yy);
    jd2 = jdn(1, mm1, yy1);
    ly1 = getYearInfo(yy);
    tet1 = ly1[0].jd;
    result = new Array();
    if (tet1 <= jd1) {
        for (i = jd1; i < jd2; i++) {
            result.push(findLunarDate(i, ly1));
        }
    } else if (jd1 < tet1 && jd2 < tet1) {
        ly1 = getYearInfo(yy - 1);
        for (i = jd1; i < jd2; i++) {
            result.push(findLunarDate(i, ly1));
        }
    } else if (jd1 < tet1 && tet1 <= jd2) {
        ly2 = getYearInfo(yy - 1);
        for (i = jd1; i < tet1; i++) {
            result.push(findLunarDate(i, ly2));
        }
        for (i = tet1; i < jd2; i++) {
            result.push(findLunarDate(i, ly1));
        }
    }
    return result;
}
function getDayName(lunarDate) {
    if (lunarDate.day == 0) {
        return "";
    }
    var cc = getCanChi(lunarDate);
    var s = "Ng\u00E0y " + cc[0] + ", th\341ng " + cc[1] + ", n\u0103m " + cc[2];
    return s;
}
function getYearCanChi(year) {
    return CAN[(year + 6) % 10] + " " + CHI[(year + 8) % 12];
}
function getYearCanChi2(year) {
    return CHI[(year + 8) % 12];
}
function getCanHour0(jdn) {
    return CAN[(jdn - 1) * 2 % 10];
}
function getCanChi(lunar) {
    var dayName, monthName, yearName;
    dayName = CAN[(lunar.jd + 9) % 10] + " " + CHI[(lunar.jd + 1) % 12];
    monthName = CAN[(lunar.year * 12 + lunar.month + 3) % 10] + " " + CHI[(lunar.month + 1) % 12];
    if (lunar.leap == 1) {
        monthName += " (nhu\u1EADn)";
    }
    yearName = getYearCanChi(lunar.year);
    return new Array(dayName,monthName,yearName);
}
function getCanChi2(lunar) {
    var dayName, monthName, yearName;
    dayName = CHI[(lunar.jd + 1) % 12];
    monthName = CHI[(lunar.month + 1) % 12];
    if (lunar.leap == 1) {
        monthName += " (nhu\u1EADn)";
    }
    yearName = getYearCanChi2(lunar.year);
    return new Array(dayName,monthName,yearName);
}
function getDayString(lunar, solarDay, solarMonth, solarYear) {
    var s;
    var dayOfWeek = TUAN[(lunar.jd + 1) % 7];
    s = dayOfWeek + " " + solarDay + "/" + solarMonth + "/" + solarYear;
    s += " -+- ";
    s = s + "Ng\u00E0y " + lunar.day + " th\341ng " + lunar.month;
    if (lunar.leap == 1) {
        s = s + " nhu\u1EADn";
    }
    return s;
}
function getDayArray(lunar, solarDay, solarMonth, solarYear) {
    var dayOfWeek = TUAN[(lunar.jd + 1) % 7];
    return {
        dayOfWeek: dayOfWeek,
        solarDay: solarDay,
        solarMonth: solarMonth,
        solarYear: solarYear,
        lunarDay: lunar.day,
        lunarMonth: lunar.month,
        lunarYear: lunar.year,
        lunarLeap: lunar.leap,
        yearCanchi: getYearCanChi(lunar.year)
    }
}
function getTodayArr() {
    return getDayArray(currentLunarDate, today.getDate(), today.getMonth() + 1, today.getFullYear());
}
function getTodayString() {
    var s = getDayString(currentLunarDate, today.getDate(), today.getMonth() + 1, today.getFullYear());
    s += " n\u0103m " + getYearCanChi(currentLunarDate.year);
    return s;
}
function getCurrentTime() {
    today = new Date();
    var Std = today.getHours();
    var Min = today.getMinutes();
    var Sec = today.getSeconds();
    var s1 = ((Std < 10) ? "0" + Std : Std);
    var s2 = ((Min < 10) ? "0" + Min : Min);
    return s1 + ":" + s2;
}
function getGioHoangDao(jd) {
    var chiOfDay = (jd + 1) % 12;
    var gioHD = GIO_HD[chiOfDay % 6];
    var ret = "";
    var count = 0;
    for (var i = 0; i < 12; i++) {
        if (gioHD.charAt(i) == '1') {
            ret += CHI[i];
            ret += ' (' + (i * 2 + 23) % 24 + '-' + (i * 2 + 1) % 24 + ')';
            if (count++ < 5)
                ret += ', ';
            if (count == 3)
                ret += '\n';
        }
    }
    return ret;
}
var DAYNAMES = new Array("CN","T2","T3","T4","T5","T6","T7");
var PRINT_OPTS = new OutputOptions();
var FONT_SIZES = new Array("9pt","13pt","17pt");
var TAB_WIDTHS = new Array("180px","420px","600px");
var ngayHoangDao = ['Tý Sửu Tỵ Mùi', 'Dần Mão Mùi Dậu', 'Thìn Tỵ Dậu Hợi', 'Ngọ Mùi Hợi Sửu', 'Thân Dậu Sửu Mão', 'Tuất Hợi Mão Tỵ', 'Tý Sửu Tỵ Mùi', 'Dần Mão Mùi Dậu', 'Thìn Tý Dậu Hợi', 'Ngọ Mùi Hợi Sửu', 'Thân Dậu Dần Mão', 'Tuất Hợi Mão Tỵ'];
var ngayHacDao = ['Ngọ Mão Hợi Dậu', 'Thân Tỵ Hợi Sửu', 'Tuất Mùi Mão Sửu', 'Tỵ Dậu Mão Tỵ', 'Dần Hợi Mùi Tỵ', 'Thìn Sửu Mùi Dậu', 'Ngọ Mão Hợi Dậu', 'Thân Tỵ Hợi Sửu', 'Tuất Mùi Mão Sửu', 'Tý Dậu Mão Tỵ', 'Dần Hợi Mùi Tỵ', 'Thìn Sửu Mùi Dậu'];
function tinhHoangDao(day, dayChi) {
    day2 = day - 1;
    if (ngayHoangDao[day2].indexOf(dayChi) != -1) {
        return true;
    }
    return false;
}
function tinhHacDao(month, monthChi) {
    month2 = month - 1;
    if (ngayHacDao[month2].indexOf(monthChi) != -1) {
        return true;
    }
    return false;
}
function OutputOptions() {
    this.fontSize = "13pt";
    this.tableWidth = "420px";
}
function setOutputSize(size) {
    var idx = 1;
    if (size == "small") {
        idx = 0;
    } else if (size == "big") {
        idx = 2;
    } else {
        idx = 1;
    }
    PRINT_OPTS.fontSize = FONT_SIZES[idx];
    PRINT_OPTS.tableWidth = TAB_WIDTHS[idx];
}
function printSelectedMonth() {
    getSelectedMonth();
    return printMonth(currentMonth, currentYear);
}
function printMonth(mm, yy) {
    var res = "";
    res += printTable(mm, yy);
    res += printFoot();
    return res;
}
function printMonth2(mm, yy) {
    var res = "";
    res += printTable2(mm, yy);
    res += printFoot();
    return res;
}
function printMonth3(mm, yy) {
    var tableRender = printTable3(mm, yy);
    var res = "";
    res += tableRender.table;
    res += printFoot();
    return {
        table: res,
        html: tableRender.html
    };
}
function printSelectedMonth3() {
    getSelectedMonth();
    var tableRender = printTable3(currentMonth, currentYear);
    var res = "";
    res += tableRender.table;
    res += printFoot();
    return {
        table: res,
        html: tableRender.html
    };
}
function printYear(yy) {
    var yearName = "N&#x103;m " + getYearCanChi(yy) + " " + yy;
    var res = "";
    res += '<table align=center>\n';
    res += ('<tr><td colspan="3" class="tennam" onClick="showYearSelect();">' + yearName + '</td></tr>\n');
    for (var i = 1; i <= 12; i++) {
        if (i % 3 == 1)
            res += '<tr>\n';
        res += '<td>\n';
        res += printTable(i, yy);
        res += '</td>\n';
        if (i % 3 == 0)
            res += '</tr>\n';
    }
    res += '<table>\n';
    res += printFoot();
    return res;
}
function printSelectedYear() {
    getSelectedMonth();
    return printYear(currentYear);
}
function printStyle() {
    var fontSize = PRINT_OPTS.fontSize;
    var res = "";
    res += '<style type="text/css">\n';
    res += '<!--\n';
    res += '  .tennam {text-align:center; font-size:150%; line-height:120%;font-weight:bold; color:#000000; background-color: #CCCCCC}\n';
    res += '  .thang {font-size: ' + fontSize + '; padding:1px;border-collapse: collapse;border:none;line-height:100%;table-layout:fixed}\n';
    res += '  .tenthang {text-align:center; font-size:125%; line-height:100%;font-weight:bold; color:#330033; background-color: #CCFFCC}\n';
    res += '  .navi-l {text-align:center; font-size:75%; line-height:100%;font-weight:bold; color:red; background-color: #CCFFCC}\n';
    res += '  .navi-r {text-align:center; font-size:75%; line-height:100%;font-weight:bold; color:#330033; background-color: #CCFFCC}\n';
    res += '  .ngaythang {}\n';
    res += '  .homnay {background-color:#FFF000}\n';
    res += '  .tet {background-color:#FFCC99}\n';
    res += '  .am {text-align:right;font-size:75%;line-height:100%;color:#000}\n';
    res += '  .am2 {text-align:right;font-size:75%;line-height:100%;color:#004080}\n';
    res += '  .t2t6 {text-align:left;color:black}\n';
    res += '  .t7 {text-align:left;line-height:100%;color:green}\n';
    res += '  #scr-lichamduong th, .scr-lichamduong td{}\n';
    res += '-->\n';
    res += '</style>\n';
    return res;
}
function printTable2(mm, yy) {
    var i, j, k, solar, lunar, cellClass, solarClass, lunarClass;
    var currentMonth = getMonth(mm, yy);
    if (currentMonth.length == 0)
        return;
    var ld1 = currentMonth[0];
    var emptyCells = (ld1.jd + 1) % 7;
    var MonthHead = mm + "/" + yy;
    var LunarHead = getYearCanChi(ld1.year);
    var res = "";
    res += ('<table class="thang" border="2" cellpadding="1" cellspacing="1" width="' + PRINT_OPTS.tableWidth + '">\n');
    res += printHead2(mm, yy);
    for (i = 0; i < 6; i++) {
        res += ("<tr>\n");
        for (j = 0; j < 7; j++) {
            k = 7 * i + j;
            if (k < emptyCells || k >= emptyCells + currentMonth.length) {
                res += printEmptyCell();
            } else {
                solar = k - emptyCells + 1;
                ld1 = currentMonth[k - emptyCells];
                res += printCell(ld1, solar, mm, yy);
            }
        }
        res += ("</tr>\n");
    }
    res += ('</table>');
    return res;
}
function printTable3(mm, yy) {
    var i, j, k, solar, lunar, cellClass, solarClass, lunarClass;
    var currentMonth = getMonth(mm, yy);
    if (currentMonth.length == 0)
        return;
    var ld1 = currentMonth[0];
    var emptyCells = (ld1.jd + 1) % 7;
    var MonthHead = mm + "/" + yy;
    var LunarHead = getYearCanChi(ld1.year);
    var res = "";
    res += ('<table class="thang" border="2" cellpadding="1" cellspacing="1" width="' + PRINT_OPTS.tableWidth + '">\n');
    res += printHead2(mm, yy);
    var resultDetail = "";
    for (i = 0; i < 6; i++) {
        res += ("<tr>\n");
        for (j = 0; j < 7; j++) {
            k = 7 * i + j;
            if (k < emptyCells || k >= emptyCells + currentMonth.length) {
                res += printEmptyCell();
            } else {
                solar = k - emptyCells + 1;
                ld1 = currentMonth[k - emptyCells];
                res += printCell(ld1, solar, mm, yy);
                resultDetail += printItemMonth(ld1, solar, mm, yy);
            }
        }
        res += ("</tr>\n");
    }
    res += ('</table>');
    return {
        table: res,
        html: resultDetail
    };
}
function printItemMonth(lunarDate, solarDate, solarMonth, solarYear) {
    var cellClass, solarClass, lunarClass, solarColor;
    cellClass = "";
    solarClass = "t2t6";
    lunarClass = "am";
    solarColor = "black";
    var dow = (lunarDate.jd + 1) % 7;
    if (dow == 0) {
        solarClass = "cn";
        solarColor = "red";
    } else if (dow == 6) {
        solarClass = "t7";
        solarColor = "green";
    }
    if (solarDate == today.getDate() && solarMonth == today.getMonth() + 1 && solarYear == today.getFullYear()) {
        cellClass = " homnay";
    }
    if (lunarDate.day == 1 && lunarDate.month == 1) {
        cellClass = " tet";
    }
    if (lunarDate.leap == 1) {
        lunarClass = "am2";
    }
    var lunar = lunarDate.day;
    lunar = lunarDate.day + "/" + lunarDate.month;
    var res = "";
    var chiNgay = CHI[(lunarDate.jd + 1) % 12];
    var hoangDao = tinhHoangDao(lunarDate.month, chiNgay);
    var hacDao = tinhHacDao(lunarDate.month, chiNgay);
    if (hoangDao) {
        cellClass += ' hoangdao';
    }
    if (hacDao) {
        cellClass += ' hacdao';
    }
    var args = lunarDate.day + "," + lunarDate.month + "," + lunarDate.year + "," + lunarDate.leap;
    args += ("," + lunarDate.jd + "," + solarDate + "," + solarMonth + "," + solarYear);
    var dayOfWeek = TUAN[(lunarDate.jd + 1) % 7];
    var s = '<div><strong>Thứ ' + dayOfWeek + ': Ngày ' + solarDate.toString().padStart(2, '0') + ' Tháng ' + solarMonth.toString().padStart(2, '0') + ' Năm ' + solarYear + ' (' + lunarDate.day.toString().padStart(2, '0') + '/' + lunarDate.month.toString().padStart(2, '0') + '/' + lunarDate.year + ' Âm lịch)</strong></div>';
    s += "<div>Can chi: " + getDayName(lunarDate) + "</div>";
    s += "<div>Giờ đầu ngày: " + getCanHour0(lunarDate.jd) + " " + CHI[0] + '</div>';
    s += "<div>Tiết: " + TIETKHI[getSunLongitude(lunarDate.jd + 1, 7.0)] + '</div>';
    s += "<div>Giờ hoàng đạo: " + getGioHoangDao(lunarDate.jd) + '</div>';
    res = '<div class="month-day-item' + cellClass + '">';
    res += '<div class="info-left">';
    res += '<div class="info-left-item">';
    res += '<span class="head">Dương lịch</span>';
    res += '<span class="day">' + solarDate.toString().padStart(2, '0') + '</span>';
    res += '<span class="month">' + solarMonth.toString().padStart(2, '0') + '/' + solarYear + '</span>';
    res += '</div>';
    res += '<div class="info-left-item">';
    res += '<span class="head">Âm lịch</span>';
    res += '<span class="day">' + lunarDate.day.toString().padStart(2, '0') + '</span>';
    res += '<span class="month">' + lunarDate.month.toString().padStart(2, '0') + '/' + lunarDate.year + '</span>';
    res += '</div>';
    res += '</div>';
    res += '<div class="info-right">' + s + '</div>';
    res += '</div>';
    return res;
}
function printTable(mm, yy) {
    var i, j, k, solar, lunar, cellClass, solarClass, lunarClass;
    var currentMonth = getMonth(mm, yy);
    if (currentMonth.length == 0)
        return;
    var ld1 = currentMonth[0];
    var emptyCells = (ld1.jd + 1) % 7;
    var MonthHead = mm + "/" + yy;
    var LunarHead = getYearCanChi(ld1.year);
    var res = "";
    res += ('<table class="thang" border="2" cellpadding="1" cellspacing="1" width="' + PRINT_OPTS.tableWidth + '">\n');
    res += printHead(mm, yy);
    for (i = 0; i < 6; i++) {
        res += ("<tr>\n");
        for (j = 0; j < 7; j++) {
            k = 7 * i + j;
            if (k < emptyCells || k >= emptyCells + currentMonth.length) {
                res += printEmptyCell();
            } else {
                solar = k - emptyCells + 1;
                ld1 = currentMonth[k - emptyCells];
                res += printCell(ld1, solar, mm, yy);
            }
        }
        res += ("</tr>\n");
    }
    res += ('</table>\n');
    return res;
}
function nextMonth(mm, yy, id) {
    var mm1 = mm < 12 ? mm + 1 : 1;
    var yy1 = mm < 12 ? yy : yy + 1;
    var tableHtml = '';
    if (id == 2) {
        tableHtml = printMonth2(mm1, yy1);
        document.getElementById("src-calendar-month").innerHTML = tableHtml;
    } else {
        tableHtml = printMonth(mm1, yy1);
        document.getElementById("scr-lichamduong").innerHTML = tableHtml;
    }
}
function prevMonth(mm, yy, id) {
    var mm1 = mm > 1 ? mm - 1 : 12;
    var yy1 = mm > 1 ? yy : yy - 1;
    var tableHtml;
    if (id == 2) {
        tableHtml = printMonth2(mm1, yy1);
        document.getElementById("src-calendar-month").innerHTML = tableHtml;
    } else {
        tableHtml = printMonth(mm1, yy1);
        document.getElementById("scr-lichamduong").innerHTML = tableHtml;
    }
}
function nextYear(mm, yy) {
    var tableHtml = printMonth(mm, yy + 1);
    document.getElementById("scr-lichamduong").innerHTML = tableHtml;
}
function prevYear(mm, yy) {
    var tableHtml = printMonth(mm, yy - 1);
    document.getElementById("scr-lichamduong").innerHTML = tableHtml;
}
function getPrevMonthLink(mm, yy) {
    var mm1 = mm > 1 ? mm - 1 : 12;
    var yy1 = mm > 1 ? yy : yy - 1;
    return '<a href="' + window.location.pathname + '?yy=' + yy1 + '&mm=' + mm1 + '">&lt;</a>';
}
function getNextMonthLink(mm, yy) {
    var mm1 = mm < 12 ? mm + 1 : 1;
    var yy1 = mm < 12 ? yy : yy + 1;
    return '<a href="' + window.location.pathname + '?yy=' + yy1 + '&mm=' + mm1 + '">&gt;</a>';
}
function getPrevYearLink(mm, yy) {
    return '<a href="' + window.location.pathname + '?yy=' + (yy - 1) + '&mm=' + mm + '">&lt;&lt;</a>';
}
function getNextYearLink(mm, yy) {
    return '<a href="' + window.location.pathname + '?yy=' + (yy + 1) + '&mm=' + mm + '">&gt;&gt;</a>';
}
function printHead2(mm, yy) {
    var res = "";
    var monthName = mm + "/" + yy;
    res += '<tr><td colspan="7" class="calendar-head"><div><span class="prev-month" onclick="prevMonth(' + mm + ', ' + yy + ',2)"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> Xem lịch âm dương tháng ' + mm + ' năm ' + yy + '<span class="next-month" onclick="nextMonth(' + mm + ', ' + yy + ',2)"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></td></tr>';
    for (var i = 0; i <= 6; i++) {
        res += ('<td class="ngaytuan ' + DAYNAMES[i].toString().toLocaleLowerCase() + '"><span>' + DAYNAMES[i] + '</span></td>\n');
    }
    res += ('<\/tr>\n');
    return res;
}
function printHead(mm, yy) {
    var res = "";
    var monthName = mm + "/" + yy;
    res += ('<tr><td colspan="2" class="navi-l"><span class="prev-year" onclick="prevYear(' + mm + ', ' + yy + ')">&lt;&lt;</span>&nbsp;&nbsp;<span class="prev-month" onclick="prevMonth(' + mm + ', ' + yy + ')">&lt;</span></td>\n');
    res += ('<td colspan="3" class="tenthang" onClick="showMonthSelect();">' + monthName + '</td>\n');
    res += ('<td colspan="2" class="navi-r"><span class="next-month" onclick="nextMonth(' + mm + ', ' + yy + ')">&gt;</span>&nbsp;&nbsp;<span class="next-month" onclick="nextYear(' + mm + ', ' + yy + ')">&gt;&gt;</span></td></tr>\n');
    res += ('<tr class="weekday" onClick="alertAbout();">\n');
    for (var i = 0; i <= 6; i++) {
        res += ('<td class="ngaytuan ' + DAYNAMES[i].toString().toLocaleLowerCase() + '"><span>' + DAYNAMES[i] + '</span></td>\n');
    }
    res += ('<\/tr>\n');
    return res;
}
function printEmptyCell() {
    return '<td class="ngaythang empty-cell"><div class=cn>&nbsp;</div> <div class=am>&nbsp;</div></td>\n';
}
function printCell(lunarDate, solarDate, solarMonth, solarYear) {
    var cellClass, solarClass, lunarClass, solarColor;
    cellClass = "ngaythang";
    solarClass = "t2t6";
    lunarClass = "am";
    solarColor = "black";
    var dow = (lunarDate.jd + 1) % 7;
    if (dow == 0) {
        solarClass = "cn";
        solarColor = "red";
    } else if (dow == 6) {
        solarClass = "t7";
        solarColor = "green";
    }
    if (solarDate == today.getDate() && solarMonth == today.getMonth() + 1 && solarYear == today.getFullYear()) {
        cellClass = "homnay";
    }
    if (lunarDate.day == 1 && lunarDate.month == 1) {
        cellClass = "tet";
    }
    if (lunarDate.leap == 1) {
        lunarClass = "am2";
    }
    var lunar = lunarDate.day;
    lunar = lunarDate.day + "/" + lunarDate.month;
    var res = "";
    var chiNgay = CHI[(lunarDate.jd + 1) % 12];
    var hoangDao = tinhHoangDao(lunarDate.month, chiNgay);
    var hacDao = tinhHacDao(lunarDate.month, chiNgay);
    if (hoangDao) {
        cellClass += ' hoangdao';
    }
    if (hacDao) {
        cellClass += ' hacdao';
    }
    var args = lunarDate.day + "," + lunarDate.month + "," + lunarDate.year + "," + lunarDate.leap;
    args += ("," + lunarDate.jd + "," + solarDate + "," + solarMonth + "," + solarYear);
    res += ('<td class="' + cellClass + '"');
    if (lunarDate != null)
        res += (' title="' + getDayName(lunarDate) + '" onClick="alertDayInfo(' + args + ');"');
    res += (' <div style=color:' + solarColor + ' class="' + solarClass + '">' + solarDate + '</div> <div class="' + lunarClass + '">' + lunar + '</div></td>\n');
    return res;
}
function printFoot() {
    var res = "";
    return res;
}
function showMonthSelect() {
    alertAbout();
}
function showYearSelect() {
    window.print();
}
function infoCellSelect(id) {
    if (id == 0) {}
}
function alertDayInfo(dd, mm, yy, leap, jd, sday, smonth, syear) {
    var lunar = new LunarDate(dd,mm,yy,leap,jd);
    var s = getDayString(lunar, sday, smonth, syear);
    s += " \u00E2m l\u1ECBch\n";
    s += getDayName(lunar);
    s += "\nGi\u1EDD \u0111\u1EA7u ng\u00E0y: " + getCanHour0(jd) + " " + CHI[0];
    s += "\nTi\u1EBFt: " + TIETKHI[getSunLongitude(jd + 1, 7.0)];
    s += "\nGi\u1EDD ho\u00E0ng \u0111\u1EA1o: " + getGioHoangDao(jd);
    alert(s);
}
function alertAbout() {}
function showCurrentDay(dd, mm, yy, element) {
    var currentDay = getLunarDate(dd, mm, yy);
    var lunar = new LunarDate(currentDay.day,currentDay.month,currentDay.year,currentDay.leap,currentDay.jd);
    var dayInfo = getTodayArr();
    var firstHour = getCanHour0(currentDay.jd) + " " + CHI[0];
    var weatherDay = TIETKHI[getSunLongitude(currentDay.jd + 1, 7.0)];
    var strNhuan = dayInfo.lunarLeap != 0 ? '(Nhuận)' : '';
    var htmlStr = '<div class="current-day-wrapper">';
    htmlStr += '<table>';
    htmlStr += '<thead><tr><td colspan="2"><h3 class="current-day-text"></h3><div class="devMY">'+' tháng ' + mm + ' năm ' + yy +'</div><div class="devD">'+ dd +'</div><div class="devdayOfWeek">'+dayInfo.dayOfWeek+'</div></td></tr></thead>';
    htmlStr += '<tbody><tr>';
    htmlStr += '<td>Dương lịch</td>';
    htmlStr += '<td style="width: 50%">';
    htmlStr += '<div class="current-day-solar">';
    htmlStr += '<div class="day-info">';
    htmlStr += '<div class="first">' + dd + '</div>';
    htmlStr += '<div class="last">Tháng ' + mm + ' năm ' + yy + '</div>';
    htmlStr += '</div>';
    htmlStr += '</div>';
    htmlStr += '</td>';
    htmlStr += '</tr>';
    htmlStr += '<tr>';
    htmlStr += '<td>Âm lịch</td>';
    htmlStr += '<td style="width: 50%">';
    htmlStr += '<div class="current-day-lunar">';
    htmlStr += '<div class="day-info">';
    htmlStr += '<div class="first">' + dayInfo.lunarDay + '</div>';
    htmlStr += '<div class="last">Tháng ' + dayInfo.lunarMonth + strNhuan + ' năm ' + dayInfo.lunarYear + '</div>';
    htmlStr += '</div>';
    htmlStr += '</div>';
    htmlStr += '</td>';
    htmlStr += '</tr>';
    htmlStr += '<tr class="lunar-info-extra">';
    htmlStr += '<td>Ngày Âm lịch</td>';
    htmlStr += '<td>' + getDayName(lunar) + '</td>';
    htmlStr += '</tr>';
    htmlStr += '<tr class="lunar-info-extra">';
    htmlStr += '<td>Giờ đầu ngày</td>';
    htmlStr += '<td>' + firstHour + '</td>';
    htmlStr += '</tr>';
    htmlStr += '<tr class="lunar-info-extra">';
    htmlStr += '<td>Tiết khí</td>';
    htmlStr += '<td>' + weatherDay + '</td>';
    htmlStr += '</tr>';
    htmlStr += '<tr class="lunar-info-extra">';
    htmlStr += '<td>Giờ hoàng đạo</td>';
    htmlStr += '<td>' + getGioHoangDao(currentDay.jd) + '</td>';
    htmlStr += '</tr>';
    htmlStr += '</tbody>';
    htmlStr += '</table>';
    htmlStr += '</div>';
    document.getElementById(element).innerHTML = htmlStr;
}
function showVietCal() {
    window.status = getCurrentTime() + " -+- " + getTodayString();
    window.window.setTimeout("showVietCal()", 5000);
}
showVietCal();
function renderCalendarMobile(element, dd, mm, yy) {
    var currentLunar = getLunarDate(dd, mm, yy);
    var lunar = new LunarDate(currentLunar.day,currentLunar.month,currentLunar.year,currentLunar.leap,currentLunar.jd);
    var dayInfo = getTodayArr();
    var currentTime = currentDay.getHours() + ":" + currentDay.getMinutes();
    var cc = getCanChi2(lunar);
    htmlStr = '<div class="mobile-calendar"><table>';
    htmlStr += '<tr>';
    htmlStr += '<td>';
    htmlStr += '<div class="mobile-calendar-left">';
    htmlStr += '<span class="calendar-prev" onclick="prevDay()"></span>';
    htmlStr += '<div class="left-block">';
    htmlStr += '<span class="solar-name">' + dayInfo.dayOfWeek + '</span>';
    htmlStr += '<span class="solar-day">' + dd + '</span>';
    htmlStr += '<span class="solar-month">' + mm + '/' + yy + '</span>';
    htmlStr += '</div>';
    htmlStr += '</div>';
    htmlStr += '</td>';
    htmlStr += '<td>';
    htmlStr += '<div class="mobile-calendar-right">';
    htmlStr += '<span class="calendar-next" onclick="nextDay()"></span>';
    htmlStr += '<div class="right-block">';
    htmlStr += '<div class="lunar-block">';
    htmlStr += '<div class="lunar-title">Âm lịch</div>';
    htmlStr += '<div class="lunar-block-item"><span class="lunar-block-title">Ngày</span><span class="lunar-block-num">' + currentLunar.day + '</span><span class="lunar-block-text">(Ngày ' + cc[0] + ')</span></div>';
    htmlStr += '<div class="lunar-block-item"><span class="lunar-block-title">Tháng</span><span class="lunar-block-num">' + currentLunar.month + '</span><span class="lunar-block-text">(Tháng ' + cc[1] + ')</span></div>';
    htmlStr += '<div class="lunar-block-item"><span class="lunar-block-title">Giờ</span><span class="lunar-block-num">' + currentTime + '</span><span class="lunar-block-text">(Giờ ' + hourToText2(currentDay.getHours()) + ')</span></div>';
    htmlStr += '<div class="lunar-block-item"><span class="lunar-block-title">Năm</span><span class="lunar-block-num">' + currentLunar.year + '</span><span class="lunar-block-text">(Năm ' + cc[2] + ')</span></div>';
    htmlStr += '</div>';
    htmlStr += '</div>';
    htmlStr += '</div>';
    htmlStr += '</td>';
    htmlStr += '</tr>';
    htmlStr += '</table></div>';
    document.getElementById(element).innerHTML = htmlStr;
}
var plusDay = 1;
var minusDay = 1;
function nextDay() {
    var day = new Date();
    var nextDay = new Date(day);
    nextDay.setDate(day.getDate() + plusDay);
    dd = nextDay.getDate();
    mm = nextDay.getMonth() + 1;
    yy = nextDay.getFullYear();
    renderCalendarMobile('calendar-mobile', dd, mm, yy);
    plusDay++;
}
function prevDay() {
    var day = new Date();
    var prevDay = new Date(day);
    prevDay.setDate(day.getDate() - minusDay);
    dd = prevDay.getDate();
    mm = prevDay.getMonth() + 1;
    yy = prevDay.getFullYear();
    renderCalendarMobile('calendar-mobile', dd, mm, yy);
    minusDay++;
}
function hourToText2(gio) {
    if (gio >= 1 && gio < 3) {
        return 'Sửu';
    }
    if (gio >= 3 && gio < 5) {
        return 'Dần';
    }
    if (gio >= 5 && gio < 7) {
        return 'Mão';
    }
    if (gio >= 7 && gio < 9) {
        return 'Thìn';
    }
    if (gio >= 9 && gio < 11) {
        return 'Tỵ';
    }
    if (gio >= 11 && gio < 13) {
        return 'Ngọ';
    }
    if (gio >= 13 && gio < 15) {
        return 'Mùi';
    }
    if (gio >= 15 && gio < 17) {
        return 'Thân';
    }
    if (gio >= 17 && gio < 19) {
        return 'Dậu';
    }
    if (gio >= 19 && gio < 21) {
        return 'Tuất';
    }
    if (gio >= 21 && gio < 23) {
        return 'Hợi';
    }
    if (gio >= 23 || gio < 1) {
        return 'Tý';
    }
}

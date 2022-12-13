<?php function dateToday(){  ?>
    <div class="lichamduong">
        <div class="lighttitle">
            <div class="widget-title">Lịch hôm nay</div>
            
        </div>
        <div class="lichamduong-wrapper lich-ngay">
            <div id="current-day">
                <div class="current-day-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <td colspan="2">
                                    <h3 class="current-day-text"></h3>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dương lịch</td><td>Âm lịch</td>
                            </tr>
                            <tr>
                                <td style="width: 50%">
                                    <div class="current-day-solar">
                                        <div class="day-info">
                                            <div class="first"></div>
                                            <div class="last"></div>
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 50%">
                                    <div class="current-day-lunar">
                                        <div class="day-info">
                                            <div class="first"></div>
                                            <div class="last"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="lunar-info-extra">
                                <td>Ngày Âm lịch</td>
                                <td></td>
                            </tr>
                            <tr class="lunar-info-extra">
                                <td>Giờ đầu ngày</td>
                                <td></td>
                            </tr>
                            <tr class="lunar-info-extra">
                                <td>Tiết khí</td>
                                <td></td>
                            </tr>
                            <tr class="lunar-info-extra">
                                <td>Giờ hoàng đạo</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
            <script>
                var currentDay = new Date();
                showCurrentDay(currentDay.getDate(), currentDay.getMonth() + 1, currentDay.getFullYear(), 'current-day')
            </script> 
        </div>
    </div>
<?php } add_shortcode("dateToday", "dateToday");

function LichVanLien(){  ?>
   <div>
        <div class="widget-title">Lịch hôm nay</div>    
        <div class="lichamduong-wrapper"><div class="row">
            <div class="large-4 col pr-0"> 
                <select name="month" class="lich-input" id="input_month">
                    <option value="">Tháng</option><option value="1">01</option>
                    <option value="2">02</option><option value="3">03</option>
                    <option value="4">04</option><option value="5">05</option>
                    <option value="6">06</option><option value="7">07</option>
                    <option value="8">08</option><option value="9">09</option>
                    <option value="10">10</option><option value="11">11</option>
                    <option value="12">12</option> 
                </select>
            </div>
            <div class="large-4 col pr-0"> 
                    <input type="text" class="lich-input" id="input_year" title="Năm" name="year" value="2022"></div>
                    <div class="large-4 col"> 
                        <input type="button" class="button alert btn-block lich-input" onclick="changeLich()" value="Xem"></div>
                    </div>
                        <div id="scr-lichamduong"> 
                            <script language="JavaScript">
                                // document.writeln(printSelectedMonth());
                                function changeLich() {
                                    var e = document.getElementById("input_month");
                                    var mm = e.options[e.selectedIndex].text;
                                    var monthStr = parseInt(mm);
                                    if (monthStr < 1 && monthStr > 12) {
                                        return '';
                                    }
                                    var yearStr = document.getElementById('input_year').value;
                                    yearStr = parseInt(yearStr);
                                    if (yearStr < 1000 && yearStr > 2199) {
                                        return '';
                                    }
                                    tableHtml = printMonth(monthStr, yearStr);
                                    document.getElementById("scr-lichamduong").innerHTML = tableHtml;
                                }
                            </script>
                    <table class="thang" border="2" cellpadding="1" cellspacing="1" width="420px">
<tbody><tr><td colspan="2" class="navi-l"><span class="prev-year" onclick="prevYear(11, 2022)">&lt;&lt;</span>&nbsp;&nbsp;<span class="prev-month" onclick="prevMonth(11, 2022)">&lt;</span></td>
<td colspan="3" class="tenthang" onclick="showMonthSelect();">11/2022</td>
<td colspan="2" class="navi-r"><span class="next-month" onclick="nextMonth(11, 2022)">&gt;</span>&nbsp;&nbsp;<span class="next-month" onclick="nextYear(11, 2022)">&gt;&gt;</span></td></tr>
<tr class="weekday" onclick="alertAbout();">
<td class="ngaytuan cn"><span>CN</span></td>
<td class="ngaytuan t2"><span>T2</span></td>
<td class="ngaytuan t3"><span>T3</span></td>
<td class="ngaytuan t4"><span>T4</span></td>
<td class="ngaytuan t5"><span>T5</span></td>
<td class="ngaytuan t6"><span>T6</span></td>
<td class="ngaytuan t7"><span>T7</span></td>
</tr>
<tr>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang hoangdao" title="Ngày Mậu Ngọ, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(8,10,2022,0,2459885,1,11,2022);" <div="" style="color:black">1 <div class="am">8/10</div></td>
<td class="ngaythang hoangdao" title="Ngày Kỷ Mùi, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(9,10,2022,0,2459886,2,11,2022);" <div="" style="color:black">2 <div class="am">9/10</div></td>
<td class="ngaythang" title="Ngày Canh Thân, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(10,10,2022,0,2459887,3,11,2022);" <div="" style="color:black">3 <div class="am">10/10</div></td>
<td class="ngaythang hacdao" title="Ngày Tân Dậu, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(11,10,2022,0,2459888,4,11,2022);" <div="" style="color:black">4 <div class="am">11/10</div></td>
<td class="ngaythang" title="Ngày Nhâm Tuất, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(12,10,2022,0,2459889,5,11,2022);" <div="" style="color:green">5 <div class="am">12/10</div></td>
</tr>
<tr>
<td class="ngaythang hoangdao" title="Ngày Quý Hợi, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(13,10,2022,0,2459890,6,11,2022);" <div="" style="color:red">6 <div class="am">13/10</div></td>
<td class="ngaythang hacdao" title="Ngày Giáp Tý, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(14,10,2022,0,2459891,7,11,2022);" <div="" style="color:black">7 <div class="am">14/10</div></td>
<td class="ngaythang hoangdao" title="Ngày Ất Sửu, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(15,10,2022,0,2459892,8,11,2022);" <div="" style="color:black">8 <div class="am">15/10</div></td>
<td class="" title="Ngày Bính Dần, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(16,10,2022,0,2459893,9,11,2022);" <div="" style="color:black">9 <div class="am">16/10</div></td>
<td class="ngaythang hacdao" title="Ngày Đinh Mão, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(17,10,2022,0,2459894,10,11,2022);" <div="" style="color:black">10 <div class="am">17/10</div></td>
<td class="ngaythang" title="Ngày Mậu Thìn, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(18,10,2022,0,2459895,11,11,2022);" <div="" style="color:black">11 <div class="am">18/10</div></td>
<td class="ngaythang hacdao" title="Ngày Kỷ Tỵ, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(19,10,2022,0,2459896,12,11,2022);" <div="" style="color:green">12 <div class="am">19/10</div></td>
</tr>
<tr>
<td class="ngaythang hoangdao" title="Ngày Canh Ngọ, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(20,10,2022,0,2459897,13,11,2022);" <div="" style="color:red">13 <div class="am">20/10</div></td>
<td class="ngaythang hoangdao" title="Ngày Tân Mùi, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(21,10,2022,0,2459898,14,11,2022);" <div="" style="color:black">14 <div class="am">21/10</div></td>
<td class="ngaythang" title="Ngày Nhâm Thân, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(22,10,2022,0,2459899,15,11,2022);" <div="" style="color:black">15 <div class="am">22/10</div></td>
<td class="ngaythang hacdao" title="Ngày Quý Dậu, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(23,10,2022,0,2459900,16,11,2022);" <div="" style="color:black">16 <div class="am">23/10</div></td>
<td class="ngaythang" title="Ngày Giáp Tuất, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(24,10,2022,0,2459901,17,11,2022);" <div="" style="color:black">17 <div class="am">24/10</div></td>
<td class="ngaythang hoangdao" title="Ngày Ất Hợi, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(25,10,2022,0,2459902,18,11,2022);" <div="" style="color:black">18 <div class="am">25/10</div></td>
<td class="ngaythang hacdao" title="Ngày Bính Tý, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(26,10,2022,0,2459903,19,11,2022);" <div="" style="color:green">19 <div class="am">26/10</div></td>
</tr>
<tr>
<td class="ngaythang hoangdao" title="Ngày Đinh Sửu, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(27,10,2022,0,2459904,20,11,2022);" <div="" style="color:red">20 <div class="am">27/10</div></td>
<td class="ngaythang" title="Ngày Mậu Dần, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(28,10,2022,0,2459905,21,11,2022);" <div="" style="color:black">21 <div class="am">28/10</div></td>
<td class="ngaythang hacdao" title="Ngày Kỷ Mão, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(29,10,2022,0,2459906,22,11,2022);" <div="" style="color:black">22 <div class="am">29/10</div></td>
<td class="ngaythang" title="Ngày Canh Thìn, tháng Tân Hợi, năm Nhâm Dần" onclick="alertDayInfo(30,10,2022,0,2459907,23,11,2022);" <div="" style="color:black">23 <div class="am">30/10</div></td>
<td class="ngaythang hacdao" title="Ngày Tân Tỵ, tháng Nhâm Tý, năm Nhâm Dần" onclick="alertDayInfo(1,11,2022,0,2459908,24,11,2022);" <div="" style="color:black">24 <div class="am">1/11</div></td>
<td class="ngaythang" title="Ngày Nhâm Ngọ, tháng Nhâm Tý, năm Nhâm Dần" onclick="alertDayInfo(2,11,2022,0,2459909,25,11,2022);" <div="" style="color:black">25 <div class="am">2/11</div></td>
<td class="ngaythang hacdao" title="Ngày Quý Mùi, tháng Nhâm Tý, năm Nhâm Dần" onclick="alertDayInfo(3,11,2022,0,2459910,26,11,2022);" <div="" style="color:green">26 <div class="am">3/11</div></td>
</tr>
<tr>
<td class="ngaythang hoangdao" title="Ngày Giáp Thân, tháng Nhâm Tý, năm Nhâm Dần" onclick="alertDayInfo(4,11,2022,0,2459911,27,11,2022);" <div="" style="color:red">27 <div class="am">4/11</div></td>
<td class="ngaythang hoangdao" title="Ngày Ất Dậu, tháng Nhâm Tý, năm Nhâm Dần" onclick="alertDayInfo(5,11,2022,0,2459912,28,11,2022);" <div="" style="color:black">28 <div class="am">5/11</div></td>
<td class="ngaythang" title="Ngày Bính Tuất, tháng Nhâm Tý, năm Nhâm Dần" onclick="alertDayInfo(6,11,2022,0,2459913,29,11,2022);" <div="" style="color:black">29 <div class="am">6/11</div></td>
<td class="ngaythang hacdao" title="Ngày Đinh Hợi, tháng Nhâm Tý, năm Nhâm Dần" onclick="alertDayInfo(7,11,2022,0,2459914,30,11,2022);" <div="" style="color:black">30 <div class="am">7/11</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
</tr>
<tr>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
<td class="ngaythang empty-cell"><div class="cn">&nbsp;</div> <div class="am">&nbsp;</div></td>
</tr>
</tbody></table>

 </div></div>
   </div>
   

       
<?php } add_shortcode("LichVanLien", "LichVanLien");


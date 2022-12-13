<?php function tuvi(){  ?>
    <div class="form-common">
        <h2>Xem Tử vi 2023</h2>
        <div class="tuvi-form">
            <div class="form-inpt">
                <label for="">Năm sinh</label>
                <select class="select_list" name="nam_sinh" id="">
                    <option value="" selected="">Năm sinh</option>
                    <option value="at-mui">1955</option>
                    <option value="binh-than">1956</option>
                    <option value="dinh-dau">1957</option>
                    <option value="mau-tuat">1958</option>
                    <option value="ky-hoi">1959</option>
                    <option value="canh-ty">1960</option>
                    <option value="tan-suu">1961</option>
                    <option value="nham-dan">1962</option>
                    <option value="quy-mao">1963</option>
                    <option value="giap-thin">1964</option>
                    <option value="at-ty">1965</option>
                    <option value="binh-ngo">1966</option>
                    <option value="dinh-mui">1967</option>
                    <option value="mau-than">1968</option>
                    <option value="ky-dau">1969</option>
                    <option value="canh-tuat">1970</option>
                    <option value="tan-hoi">1971</option>
                    <option value="nham-ty">1972</option>
                    <option value="quy-suu">1973</option>
                    <option value="giap-dan">1974</option>
                    <option value="at-mao">1975</option>
                    <option value="binh-thin">1976</option>
                    <option value="dinh-ty">1977</option>
                    <option value="mau-ngo">1978</option>
                    <option value="ky-mui">1979</option>
                    <option value="canh-than">1980</option>
                    <option value="tan-dau">1981</option>
                    <option value="nham-tuat">1982</option>
                    <option value="quy-hoi">1983</option>
                    <option value="giap-ty">1984</option>
                    <option value="at-suu">1985</option>
                    <option value="binh-dan">1986</option>
                    <option value="dinh-mao">1987</option>
                    <option value="mau-thin">1988</option>
                    <option value="ky-ty">1989</option>
                    <option value="canh-ngo">1990</option>
                    <option value="tan-mui">1991</option>
                    <option value="nham-than">1992</option>
                    <option value="quy-dau" >1993</option>
                    <option value="giap-tuat">1994</option>
                    <option value="at-hoi">1995</option>
                    <option value="binh-ty">1996</option>
                    <option value="dinh-suu">1997</option>
                    <option value="mau-dan">1998</option>
                    <option value="ky-mao">1999</option>
                    <option value="canh-thin">2000</option>
                    <option value="tan-ty">2001</option>
                    <option value="nham-ngo">2002</option>
                    <option value="quy-mui">2003</option>
                    <option value="giap-than">2004</option>
                    <option value="at-dau">2005</option>
                    <option value="binh-tuat">2006</option>
                    <option value="dinh-hoi">2007</option>
                    <option value="mau-ty">2008</option>
                    <option value="ky-suu">2009</option>
                    <option value="canh-dan">2010</option>
                </select>
            </div>
            <div class="form-inpt">
                <input type="radio" id="namtvc" name="gioi_tinh" value="nam" checked="" wfd-invisible="true">
                <label for="namtvc">Nam</label>
                <input type="radio" id="nutvc" name="gioi_tinh" value="nu"  wfd-invisible="true">
                <label for="nutvc">Nữ</label>
            </div>
            <div class="btn-dev " value="" id="btn-tuvi">Xem ngay</div>
        </div>
    </div>
<?php } add_shortcode("tuvi", "tuvi");?>

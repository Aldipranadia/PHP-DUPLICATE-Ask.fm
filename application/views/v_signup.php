<!doctype html>
<html>
<head>
    <title>Sign up | ASKfm</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/signup.css">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/icon/icon.png">
</head>
<body>
	<div class="top">
        <a href="<?php echo base_url().'index.php'?>"><img src="<?php echo base_url() ?>assets/icon/ask.png"></a>
        <p><b>Sign up</b></p>
        <button class="masuk" style="cursor:pointer"><b>Log in</b></button>
    </div>
    
    <div class="mid">
        <form method="post" action="<?php echo base_url(). 'Signup/tambahAkun'; ?>">
            <img src="<?php echo base_url() ?>assets/icon/social_signup.png">
            <input type="email" name="email" class="form_email" placeholder="E-mail" autofocus></br>
            <input type="text" name="fullname" class="form_name" placeholder="Full name"></br>
            <input type="text" name="username" class="form_username" placeholder="Username"></br>
            <input type="password" name="password" class="form_password" placeholder="Password"></br>

            <h1>Birthday</h1>
            
            <select class="Day" name="birthday">
				<option value="">Day</option>
				<option value="1">1</option>
				<option value="">2</option>
				<option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
				<option value="">6</option>
				<option value="">7</option>
				<option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
				<option value="">11</option>
				<option value="">12</option>
				<option value="">13</option>
                <option value="">14</option>
                <option value="">15</option>
				<option value="">16</option>
				<option value="">17</option>
				<option value="">18</option>
                <option value="">19</option>
                <option value="">20</option>
				<option value="">21</option>
				<option value="">22</option>
				<option value="">23</option>
                <option value="">24</option>
                <option value="">25</option>
				<option value="">26</option>
				<option value="">27</option>
				<option value="">28</option>
                <option value="">29</option>
                <option value="">30</option>
				<option value="">31</option>
            </select>

            <select class="Month" name="birthday">
				<option value="">Month</option>
				<option value="January">January</option>
				<option value="">February</option>
				<option value="">March</option>
                <option value="">April</option>
                <option value="">May</option>
				<option value="">June</option>
				<option value="">July</option>
				<option value="">August</option>
                <option value="">September</option>
                <option value="">October</option>
				<option value="">November</option>
				<option value="">December</option>
            </select>

            <select class="Year" name="birthday">
                <option value="">Year</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
            </select>

            <h2>Gender</h2>

            <select class="Gender" name="gender">
				<option value=""> </option>
				<option value="Female">Female</option>
				<option value="Male">Male</option>
            </select>

            <h3>Language</h3>

            <select class="Language" name="language">
                <option dir="ltr" value="id">Bahasa Indonesia</option>
                <option dir="ltr" value="ms">Bahasa Melayu</option>
                <option dir="ltr" value="bs">Bosanski</option>
                <option dir="ltr" value="da">Dansk</option>
                <option dir="ltr" value="de">Deutsch</option>
                <option dir="ltr" value="et">Eesti</option>
                <option dir="ltr" selected="selected" value="en">English</option>
                <option dir="ltr" value="es">Español</option>
                <option dir="ltr" value="tl">Filipino</option>
                <option dir="ltr" value="fr">Français</option>
                <option dir="ltr" value="hr">Hrvatski</option>
                <option dir="ltr" value="it">Italiano</option>
                <option dir="ltr" value="lv">Latviešu</option>
                <option dir="ltr" value="lt">Lietuvių</option>
                <option dir="ltr" value="hu">Magyar</option>
                <option dir="ltr" value="nl">Dutch</option>
                <option dir="ltr" value="nn">Norsk</option>
                <option dir="ltr" value="pl">Polski</option>
                <option dir="ltr" value="pt">Português</option>
                <option dir="ltr" value="pt-BR">Português (Brasil)</option>
                <option dir="ltr" value="ro">Română</option>
                <option dir="ltr" value="sk">Slovenčina</option>
                <option dir="ltr" value="sl">Slovenščina</option>
                <option dir="ltr" value="fi">Finnish</option>
                <option dir="ltr" value="sv">Svenska</option>
                <option dir="ltr" value="vi">Tiếng Việt</option>
                <option dir="ltr" value="tr">Türkçe</option>
                <option dir="ltr" value="cs">Čeština</option>   
                <option dir="ltr" value="el">Ελληνικά</option>
                <option dir="ltr" value="be">Беларуская</option>
                <option dir="ltr" value="bg">Български</option>
                <option dir="ltr" value="mk">Македонски</option>
                <option dir="ltr" value="mn">Монгол хэл</option>
                <option dir="ltr" value="ru">Русский</option>
                <option dir="ltr" value="sr">Српски</option>
                <option dir="ltr" value="uk">Українська</option>
                <option dir="ltr" value="hy">հայերեն</option>
                <option dir="rtl" value="ar">العربية</option>
                <option dir="ltr" value="bn">বাংলা</option>
                <option dir="rtl" value="he">עברית</option>
                <option dir="ltr" value="hi">मानक हिन्दी</option>
                <option dir="rtl" value="fa">پارسی</option>
                <option dir="ltr" value="th">ภาษาไทย</option>
                <option dir="ltr" value="ka">ქართული</option>
                <option dir="ltr" value="ja">日本語</option>
                <option dir="ltr" value="zh-TW">正體中文</option>
                <option dir="ltr" value="zh-CN">中文</option>
                <option dir="ltr" value="ko">한국어</option>
            </select>

            <h4>By signing up you agree to our <a href="https://about.ask.fm/legal/en/terms.html" target="_blank"><u>Terms</u></a> and <a href="https://about.ask.fm/legal/en/privacy.html" target="_blank"><u>Privacy policy</u></a></h4>

            <button type="submit" class="SignUp" style="cursor:pointer">Sign up</button>

            <h5>
                Your name and any information posted on your profile will be visible to</br> other users. Information you provide may be shared with third parties as</br> explained in our <a target="_blank" rel="noopener" href="https://about.ask.fm/privacy-policy/?lang=en"><u>Privacy policy</u></a>. Please don’t provide any information you</br> don’t want to be shared.
            </h5>
		</form>
    </div>
</body>
</html>

<?php
    $arrErr = array();
    if(isset($_POST["btnSubmit"])) {
        require 'validation.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 05 - Bài 02 - 1513804 - Nguyễn Xuân Trực</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container" style="margin-top: 20px;">
            <?php if(isset($_POST["btnSubmit"]) && !empty($arrErr)) { ?>
                <div class="errBlock row">
                    <label for="err" class="col-3 col-form-label text-right">Kết quả kiểm tra lỗi:</label>
                    <ul style="color: red;">
                        <?php
                        foreach ($arrErr as $err) {
                            echo "<li>" . $err . "</li>";
                        }
                        ?>
                    </ul>
                </div>
            <?php } elseif(isset($_POST["btnSubmit"])) { ?>
                <div class="errBlock row">
                    <div class="col-12">
                        <p class="text-primary text-center font-weight-bold">Complete!</p>
                    </div>
                </div>
            <?php } ?>

            <form name="registerForm" method="POST">
                <div class="form-group row">
                  <label for="firstName" class="col-3 col-form-label">First name:</label>
                  <div class="col-9">
                    <input type="text" class="form-control col-9" name="firstName" id="firstName" onfocus="this.placeholder=''" onblur="this.placeholder='Enter First name ...'" placeholder="Enter First name ...">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="lastName" class="col-3 col-form-label">Last name:</label>
                  <div class="col-9">
                    <input type="text" class="form-control col-9" name="lastName" id="lastName" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Last name ...'" placeholder="Enter Last name ...">
                  </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-3 col-form-label">Email:</label>
                    <div class="col-9">
                        <input type="text" class="form-control col-9" name="email" id="email" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Email ...'" placeholder="Enter Email ...">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-3 col-form-label">Password:</label>
                    <div class="col-9">
                        <input type="password" class="form-control col-9" name="password" id="password" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Password ...'" placeholder="Enter Password ...">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label">Birthday:</label>
                    <div class="col-9 d-flex">
                        <select class="form-control col-2" name="day" id="day">
                            <option selected disabled hidden>Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          <select class="form-control col-2" name="month" id="month">
                            <option selected disabled hidden>Month</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                          <select class="form-control col-2" name="year" id="year">
                            <option selected disabled hidden>Year</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
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
                          </select>
                    </div>
                </div>

                <div class="form-check row d-flex" style="padding-left: 0; margin-bottom: 15px;">
                      <label class="col-3 col-form-label">Gender:</label>
                    <div class="col-9">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                        <label class="form-check-label" for="male">Male</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="unknow" value="unknow">
                        <label class="form-check-label" for="unknow">Unknown</label>
                      </div>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="country" class="col-3 col-form-label">Country:</label>
                  <div class="col-9">
                    <select class="form-control col-9" id="country">
                      <option selected>Vietnam</option>
                      <option>Australia</option>
                      <option>United States</option>
                      <option>India</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-3 col-form-label" for="about">About:</label>
                  <div class="col-9">
                    <textarea class="form-control col-9" name="about" id="about" rows="3"></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12 text-center">
                    <button id="btnSubmit" name="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                  </div>
                </div>
              </form>
        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
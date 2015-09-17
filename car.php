
    <h2>ComboBox</h2>
    
    <script src="bower_components/jquery/dist/jquery.min.js"> </script>
    <script src="bower_components/jquery-validation/dist/jquery.validate.min.js"> </script>
    
    <script language="javascript">
        var arr = new Array();
        arr[0] = new Array("Select Make");
        
        arr['India'] = new Array("Maharashtra","Karnataka","Andhra Pradesh","Tamil Nadu");
        arr['Aust'] = new Array("Carinthia"," Styria");
        arr['Usa'] = new Array("Florida","New York","Maryland");
        arr['Aus'] = new Array("Queensland","Victoria","Tasmania","New South Wales");
        
        function change(combo1,cname,c_arr)
        {
            var comboValue = combo1.value;
            
            document.forms["form"].elements[cname].options.length=0;
            
            for (var i=0;i<c_arr[comboValue].length;i++)
            {
                var option = document.createElement("option");
                option.setAttribute('value',i+1);
                option.innerHTML = c_arr[comboValue][i];
                document.forms["form"].elements[cname].appendChild(option);
            }
            
            $("#rest").show();
            
        }
        
        
        
        $(function() {
            // Handler for .ready() called.
            //$("#rest").hide();
            
            $("#carform").validate();
        });
        
        
        
        
    </script>
    <form name="form" method="post" id="carform">
        
        <br />
        
        <table border="1" class="table table-bordered">
            
            <tr>
                <td colspan="2" style="text-align: center">All fields with an X are required</td>
            </tr>
            <tr>
                <td>
                    Year:
                </td>
                <td>
                    <select name="ctl00$Wizard1$nYear">
                        <option value="Year">Year</option>
                        <option selected="selected" value="2017">2017</option>
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
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                        <option value="1907">1907</option>
                        <option value="1906">1906</option>
                        <option value="1905">1905</option>
                        <option value="1904">1904</option>
                        <option value="1903">1903</option>
                        <option value="1902">1902</option>
                        <option value="1901">1901</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Make:
                </td>
                <td s="">
                    <select name="Make" onchange="change(this,'combo2',arr);">
                        <option value="0">Select Make</option>
                        <option value="India">India</option>
                        <option value="Aust">Austria</option>
                        <option value="Usa">USA</option>
                        <option value="Aus">Australia</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Model:
                </td>
                <td s="">
                    <select name="combo2">
                    </select>
                </td>
            </tr>
            
        </table>
    
        <table class="table table-bordered" id="rest" border="1">
            
            <tbody>
                
                <tr>
                    <td colspan="2">
                        <h3> Car Information - so we can supply you with a quote</h3>
                    </td>
                    
                </tr>
                
                <tr>
                    <td>Part:</td>
                    <td> <?php include('part.php') ?> </td>
                </tr>
                
                <tr>
                    <td>Body Style: </td>
                    <td><?php include('bodystyle.php') ?> </td>
                </tr>
                
                <tr>
                    <td>Vin#:</td>
                    <td><input name="Vin" id="Vin" type="text"></td>
                </tr>
                
                <tr>
                    <td> Extra Details: (if Needed) </td>
                    <td> <textarea name=ExtraDetails" rows="2" cols="20" id="ExtraDetails"></textarea> </td>
                </tr>
                
                <tr>
                    <td> Engine Liter:</td>
                    <td><?php include('engineliter.php') ?> </td>
                </tr>
                <tr>
                    <td>Engine Size:</td>
                    <td>
                        <select name="EngineSize" id="EngineSize" required>
                            <option selected="selected" value="Select Engine Size">Select Engine Size</option>
                            <option value="3 cylinders">3 cylinders</option>
                            <option value="4 cylinders">4 cylinders</option>
                            <option value="5 cylinders">5 cylinders</option>
                            <option value="6 cylinders">6 cylinders</option>
                            <option value="8 cylinders">8 cylinders</option>
                            <option value="10 cylinders">10 cylinders</option>
                            <option value="12 cylinders">12 cylinders</option>
                            <option value="straight 6">straight 6</option>
                            <option value="Other Not Listed">Other Not Listed</option>
                            
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>Turbo-Charged</td>
                    <td>
                        <select name="TCEngine" id="TCEngine" >
                            <option selected="selected" value="N/A">N/A</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Fuel Type:</td>
                    <td>
                        <select name="FuelType" id="FuelType">
                            <option selected="selected" value="Select Fuel Type ">Select Fuel Type </option>
                            <option value="Gasoline">Gasoline</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Propane">Propane</option>
                            <option value="Electric">Electric</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Other Not Listed">Other Not Listed</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    Transmission Type:</td>
                    <td>
                        <select name="TransmissionType" id="TransmissionType" required>
                            <option selected="selected" value="Select Transmission Type">Select Transmission Type</option>
                            <option value="2 Wheel Drive Automatic">2 Wheel Drive Automatic</option>
                            <option value="2 Wheel Drive Manual">2 Wheel Drive Manual</option>
                            <option value="4 Wheel Drive Automatic">4 Wheel Drive Automatic</option>
                            <option value="4 Wheel Drive Manual">4 Wheel Drive Manual</option>
                            
                        </select> 
                        </td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                        <h3> Contact Information - so we can supply you with a quote</h3>
                    </td>
                    
                </tr>
                
                <tr>
                    <td style="" width="62">
                        Name:&nbsp;
                    </td>
                    <td>
                        &nbsp;<input name="Name" type="text" required>
                        <span id="ctl00_Wizard1_labelj2zvas" style="color:Red;">X</span>
                        <span id="ctl00_Wizard1_RequiredFieldValidator1" style="color:Red;visibility:hidden;">missing name</span>
                    </td>
                    
                </tr>
                <tr>
                    <td style="height: 18px">
                        Address:&nbsp;
                    </td>
                    <td style="height: 18px;">
                    &nbsp;<input name="ctl00$Wizard1$nAddress" id="ctl00_Wizard1_nAddress" style="width:166px;font-size: small" type="text"></td>
                    
                </tr>
                <tr>
                    <td style="height: 18px">
                        City:&nbsp;
                    </td>
                    <td style="height: 18px;">
                    &nbsp;<input name="ctl00$Wizard1$nCity" id="ctl00_Wizard1_nCity" style="width:166px;font-size: small" type="text"></td>
                    
                </tr>
                <tr>
                    <td>
                    State/Province:</td>
                    <td>
                        &nbsp;<select name="ctl00$Wizard1$nState" id="ctl00_Wizard1_nState" style="width:152px;font-size: medium">
                            <option value="1">Select State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IO">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Lousiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MO">Missouri</option>
                            <option value="MS">Mississippi</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                            <option value="AB">Alberta - Canada</option>
                            <option value="BC">British Columbia - Canada</option>
                            <option value="NB">New Brunswick - Canada</option>
                            <option value="NL">Newfoundland and Labrador - Canada</option>
                            <option value="ON">Ontario - Canada</option>
                            <option value="SK">Saskatchewan - Canada</option>
                            <option value="QC">Quebec - Canada</option>
                            <option value="CA">Other Not Listed</option>
                            
                        </select>
                        <span id="ctl00_Wizard1_labelj2b" style="color:Red;">X</span>
                        <span id="ctl00_Wizard1_RequiredFieldValidator3" style="color:Red;visibility:hidden;"> select state</span>
                    </td>
                    
                </tr>
                <tr>
                    <td style="height: 18px">
                    Zip/Mail Code:</td>
                    <td style="height: 18px;">
                        &nbsp;<input name="ctl00$Wizard1$nZip" id="ctl00_Wizard1_nZip" style="width:60px;font-size: medium" type="text">   <span id="ctl00_Wizard1_labelj2z" style="color:Red;">X</span>&nbsp;
                        
                        <span id="ctl00_Wizard1_RequiredFieldValidator4" style="color:Red;visibility:hidden;">missing zip</span>
                    </td>
                    
                </tr>
                <tr>
                    <td style="height: 18px">
                    Phone#:</td>
                    <td style="height: 18px;">
                        &nbsp;<input name="ctl00$Wizard1$nPhone" id="ctl00_Wizard1_nPhone" style="width:140px;font-size: medium" type="text"><span id="ctl00_Wizard1_lannb" style="color:Red;">X</span>
                        <span id="ctl00_Wizard1_RequiredFieldValidator44" style="color:Red;visibility:hidden;">missing phone#</span>
                    </td>
                    
                </tr>
                <tr>
                    <td style="height: 18px">
                    Email:</td>
                    <td style="height: 18px;">
                        &nbsp;<input name="ctl00$Wizard1$nEmail" id="ctl00_Wizard1_nEmail" style="width:163px;font-size: large" type="text"><span id="ctl00_Wizard1_labelj2zv" style="color:Red;">X</span>&nbsp;
                        
                        <span id="ctl00_Wizard1_RequiredFieldValidator6" style="color:Red;visibility:hidden;">missing email</span>
                        <span id="ctl00_Wizard1_RegularExpressionValidator1" style="color:Red;visibility:hidden;">not a valid email</span>
                        <br>
                        
                    </td>
                    
                </tr>
                
                
                
                
                <tr>
                    <td colspan="2" style="height: 30px; text-align: center">
                        
                        <input name="ctl00$Wizard1$nTos" type="checkbox">
                        I Agree To The Terms of Services Of This Site
                        
                        
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <button name="submit" class="btn btn-lg full-width" type="submit" id="submit">Submit</button>
                    </td>
                    
                </tr>
                
                
                
                
                
                
                
        </tbody></table>    
        
    </form>

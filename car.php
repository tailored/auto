

    
    
    
    <script language="javascript">
        var arr = new Array();
        arr[0] = new Array("Select Make");
        
        arr['India'] = new Array("Select Model","Maharashtra","Karnataka","Andhra Pradesh","Tamil Nadu");
        arr['Aust'] = new Array("Select Model","Carinthia"," Styria");
        arr['Usa'] = new Array("Select Model","Florida","New York","Maryland");
        arr['Aus'] = new Array("Select Model","Queensland","Victoria","Tasmania","New South Wales");
        
        function change(combo1,cname,c_arr)
        {
            var comboValue = combo1.value;
            
            document.forms["form"].elements[cname].options.length=0;
            
            for (var i=0;i<c_arr[comboValue].length;i++)
            {
                var option = document.createElement("option");
                option.setAttribute('value',c_arr[comboValue][i]);
                option.innerHTML = c_arr[comboValue][i];
                document.forms["form"].elements[cname].appendChild(option);
            }
            
            
            
        }
        
        function changeModel(comboModel)
        {
            var comboValue = comboModel.value;
            
            if(comboValue == "Select Model")
            {
                $("#rest").hide();
                return;
            }
            
            $("#rest").show();
        }
        
        
       
        
        
        
        
    </script>
        <h2>Fill below details for best pricing</h2>
        
    <form name="form" method="post" id="carform">
        
        <br />
        
        <table border="1" class="table table-bordered">
            
            <tr>
                <td colspan="2" style="text-align: center">All fields with an X are required</td>
            </tr>
            <tr>
                <td width="25%">Year:</td>
                <td> <?php include('partials/year.php') ?> </td>
            </tr>
            <tr>
                <td>Make:</td>
                <td >
                    <select name="Make" onchange="change(this,'Model',arr);" class="selectpicker">
                        <option value="0">Select Make</option>
                        <option value="India">India</option>
                        <option value="Aust">Austria</option>
                        <option value="Usa">USA</option>
                        <option value="Aus">Australia</option>
                        
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Model:</td>
                <td>
                    <select name="Model" onchange="changeModel(this);"></select>
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
                    <td width="25%">Part:</td>
                    <td> <?php include('partials/part.php') ?> </td>
                </tr>
                
                <tr>
                    <td>Body Style: </td>
                    <td><?php include('partials/bodystyle.php') ?> </td>
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
                    <td><?php include('partials/engineliter.php') ?> </td>
                </tr>
                <tr>
                    <td>Engine Size:</td>
                    <td>
                        <select name="EngineSize" id="EngineSize" required class="selectpicker">
                            <option selected="selected" value="">Select Engine Size</option>
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
                        <select name="TCEngine" id="TCEngine" class="selectpicker" >
                            <option selected="selected" value="N/A">N/A</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Fuel Type:</td>
                    <td>
                        <select name="FuelType" id="FuelType" class="selectpicker">
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
                        <select name="TransmissionType" id="TransmissionType" class="selectpicker" required>
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
                    <td style="" width="62"> Name:</td>
                    <td><input name="Name" type="text" required></td>
                    
                </tr>
                <tr>
                    <td >Address:</td>
                    <td ><input name="Address" id="Address"  type="text"></td>
                    
                </tr>
                <tr>
                    <td > City:</td>
                    <td ><input name="City" id="City" type="text"></td>
                    
                </tr>
                <tr>
                    <td>State/Province:</td>
                    <td><?php include('partials/state.php') ?> </td>
                    
                </tr>
                <tr>
                    <td>Zip/Mail Code:</td>
                    <td><input name="Zip" id="Zip" type="text" required></td>
                    
                </tr>
                <tr>
                    <td>Phone#:</td>
                    <td><input name="Phone" id="Phone"  type="text" required></td>
                    
                </tr>
                <tr>
                    <td >Email:</td>
                    <td ><input name="Email" id="Email" type="text" required></td>
                </tr>
                
                
                <tr>
                    <td>
                    </td>
                    <td>
                        <input name="Tos" type="checkbox">  I Agree To The Terms of Services Of This Site
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <button name="submit" class="custom-btn btn-lg full-width" type="submit" id="submit">Submit</button>
                    </td>
                    
                </tr>
                
                
                
        </tbody></table>    
        
    </form>

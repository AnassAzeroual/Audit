<p id="p" aria-label="CodePen" class="container-fluid text-center">
  <span>Road</span> 
  <span data-text="M">M</span>
  <span data-text="A">A</span>
  <span data-text="P">P</span>
  <span data-text="I">I</span>
  <span data-text="N">N</span>
  <span data-text="G">G</span>
  
</p>

<div class="container" id="limit-width">
		<div id="h-div">
			<p class="container"><p class="text-center h4 " id="ajust-text">Testez notre module de Agencemarrakech</p></p> 
		</div>
		<div class="" id="box">
			<div id="box-left" class="">
        <form action="" name="startEnd">
  				<div class="input-group">
                     <span class="input-group-addon smylit ipt_1" id="ARABE" style="background-color: white;">
                     	<svg height="16px" id="Layer_1" style="enable-background:new 0 0 16 16;" version="1.1" viewBox="0 0 16 16" width="16px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M8,0C4.687,0,2,2.687,2,6c0,3.854,4.321,8.663,5,9.398C7.281,15.703,7.516,16,8,16s0.719-0.297,1-0.602  C9.679,14.663,14,9.854,14,6C14,2.687,11.313,0,8,0z M8,10c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S10.209,10,8,10z M8,4  C6.896,4,6,4.896,6,6s0.896,2,2,2s2-0.896,2-2S9.104,4,8,4z"/></svg>
                     </span>
                     <input type="text" name="inptname" id="start" placeholder="Adresse départ" class="form-control ipt_1" aria-describedby="ARABE" required="true"/>
                   </div>
  				<div class="input-group">
                     <span class="input-group-addon smylit ipt_2" id="ARABE" style="background-color: white;">
                     	<svg height="16px" id="Layer_1" style="enable-background:new 0 0 16 16;" version="1.1" viewBox="0 0 16 16" width="16px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M8,0C4.687,0,2,2.687,2,6c0,3.854,4.321,8.663,5,9.398C7.281,15.703,7.516,16,8,16s0.719-0.297,1-0.602  C9.679,14.663,14,9.854,14,6C14,2.687,11.313,0,8,0z M8,10c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S10.209,10,8,10z M8,4  C6.896,4,6,4.896,6,6s0.896,2,2,2s2-0.896,2-2S9.104,4,8,4z"/></svg>
                     </span>
                     <input type="text" name="inptname" id="end" placeholder="Adresse arrivée" class="form-control ipt_2" aria-describedby="ARABE" required="true"/>
                   </div>
          </form>
                 <div class="box-table">
                   <br><br>
                    <table class="table">
                        <tbody>
                          <tr>
                                <th>Mode de voyage</th>
                                <td>
                                     <select name="" onchange="clears()" id="input0" class="form-control" required="required">
                                          <option value="DRIVING">Driving</option>
                                          <option value="WALKING">Walking</option>
                                          <!-- <option value="BICYCLING">Bicycling</option> -->
                                          <option value="TRANSIT">Transit</option>
                                          <option value="#" disabled>Voyage...</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Véhicule</th>
                                <td>
                                     <select name="" id="input1" class="form-control" required="required">
                                          <option value="#">A</option>
                                          <option value="#">B</option>
                                          <option value="#">ABC</option>
                                          <option value="#" disabled>Véhicule...</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Passagers</th>
                                <td>
                                     <select name="" id="input2" class="form-control" required="required">
                                          <option value="#">A</option>
                                          <option value="#">B</option>
                                          <option value="#">ABC</option>
                                          <option value="#" disabled>Passagers...</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Aller ou A/R</th>
                                <td>
                                     <select name="" id="input3" class="form-control" required="required">
                                          <option value="#">A</option>
                                          <option value="#">B</option>
                                          <option value="#">ABC</option>
                                          <option value="#" disabled>Aller ou A/R...</option>
                                    </select>
                                </td>
                            </tr>
                              
                            
                            <tr>
                                <th>Date aller</th>
                                <td>
                                     <input type="date" name="" id="input4" class="form-control" value="" required="required" placeholder="Date aller" title="Date aller">

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container" id="box-btn">
                        <!-- <button type="submit" id="submit" class="btn btn-primary">Estimation du Tarif</button> -->
                        <a id="submit" href="#" class="progress-button">Estimation du Tarif</a>
                        <!-- <input type="submit" id="submit"> -->
                    </div>
                    <br><br>
                    <!-- <div id="directions-panel"><p id="tri"></p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, esse?</div> -->
                    
                      <div class="ldBar label-center" id="dynamic" style="width:50%;height:50%;margin:auto" data-value="0" max-value="100" data-preset="circle" ></div>

                      <div class="container Mess" id="container_feedback" >
                        <div id="feed"></div>
                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                          <div class="row">
                              <span  class="col-xs-5 text-center"><img id="hide_road" src="sources/icons/road-icon.ico" alt=""> <span id="road"></span></span> 
                              <span  class="col-xs-5 text-center"><img id="hide_time" src="sources/icons/814.png" alt=""><span id="time"></span></span>
                            </div>
                      </div>

                    <br>
                    <br>
                    <br>
                    <br>

                      <br>                              <!-- box informations -->
                      <div class='wrap'>
                        <div class='content'>
                          <h3 id="directions-panel"></h3><!-- route name -->
                          
                            <span id="addreses"></span>
                            
                        </div>
                      </div>
                      <a id="a" class='button glyphicon glyphicon-plus' href='#'></a>
                      <br>

                  
                </div>
        </div>
			<div id="box-right">
				<div id="map"></div>
			</div>
		</div>
		
</div>
    
  <script src="core/maps.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqdpQTn90EKUx39WZMOS5civEr1NKBVto&libraries=places&callback=initMap"></script>
  <!-- for button progress -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="sources/assets/js/script_progressBtn.js"></script>
    <!-- End button progress -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>VIP Valet</title>
      <link rel="stylesheet" href="resources/styles/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>

   <body>
      <div class="container">
         <img src="/resources/images/logo.png" alt="VIP Valet Logo">
         <header>Reserve your parking</header>
         <div class="progress-bar">

            <div class="step">
               <p>Plate</p>
               <div class="bullet"><span>1</span></div>
               <div class="check fas fa-check"></div>
            </div>

            <div class="step">
               <p>Location</p>
               <div class="bullet"><span>2</span></div>
               <div class="check fas fa-check"></div>
            </div>

            <div class="step">
               <p>Time</p>
               <div class="bullet"><span>3</span></div>
               <div class="check fas fa-check"></div>
            </div>

            <div class="step">
               <p>Receipt</p>
               <div class="bullet"><span>4</span></div>
               <div class="check fas fa-check"></div>
            </div>

         </div>

         <div class="form-outer">
            <form name="myForm" action='' method='post'>

               <div class="page slide-page">
                  <div class="title">Car information</div>
                  <div class="field">
                     <div class="label">License plate</div>
                     <input type="text" id="license" name="license">
                  </div>
                  <div class="field btns">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>

               <div class="page">
                  <div class="title">Location</div>

                  <div class="field">
                     <div class="label">Parking location</div>
                     <select id="location" name="location" required>
                        <option value="" disabled selected>--Choose a Location--</option>
                        <option value="laval">Laval</option>
                        <option value="longueil">Longeuil</option>
                    </select>
                  </div>

                  <div class="field btns">
                     <button class="prev-1 prev" formnovalidate>Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>

               <div class="page">
                  <div class="title">Parking duration</div>
                  <div class="field">
                     <div class="label">Duration</div>
                     <input type="number" list="hourlist" id="hours" name="hours"/>
                     <datalist id="hourlist">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                     </datalist>
                  </div>

                  <div class="field btns">
                     <button class="prev-2 prev" formnovalidate>Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>

               <div class="page">
                  <div class="title">Parking confirmation</div>
                  <form>
                     <label for="fname">License Plate:</label>
                     <input type="text" id="license" name="license" value="" readonly><br>
                     <label for="lname">Location:</label>
                     <input type="text" id="location" name="location" value="" readonly><br>
                     <label for="lname">Time:</label>
                     <input type="text" id="time" name="time" value="" readonly><br>
                  </form>
                  <div class="field btns">
                     <button class="prev-3 prev" formnovalidate>Previous</button>
                     <button class="submit">Pay</button>
                  </div>
               </div>
            </form>
         </div>
      </div>

      <script src="/resources/scripts/script.js"></script>

   </body>
</html>
<?php
//complete code for views/quiz-form.php
return "<form method='post' action='index.php?page=quiz'>
 <h2>Personal information</h2>
 Enter your name : 
 <input type='text' name= 'myName'/>
 <br>
 Enter your phone number: 
 <input type='text' name= 'phone'/>
 <br>
 Select your Date of Birth : 
 <input type='Date' name= 'birthDate'/>
 <br>
 select your level of education
 <select name='answer'>
 <option value='bachelor'>Bachelor Degree</option>
 <option value='masters'>Masters Degree</option>
 <option value='php'>Phd Degree</option>
 </select>
 
 <input type='submit' name='quiz_submitted' value='post' />
 </form>";
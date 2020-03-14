<div class="container">
  <h2>ADD SUBJECT</h2>
  <form action="/action_page.php">
    
    <div class="form-group">
      <label for="sbc">Subject Code</label>
      <input type="text" class="form-control" id="sbc" placeholder="Enter Subject Code" name="b1">
    </div>
    <div class="form-group">
      <label for="sbn">Subject Name</label>
      <input type="text" class="form-control" id="sbn" placeholder="Enter Subject Name" name="b2">
    </div>
    <div class="form-group">
      <label for="sbt">Subject Type</label>
      <input type="text" class="form-control" id="sbt" placeholder="Enter Subject Type" name="b3">
    </div>
     <div class="form-group">
      <label for="lect">Lectures</label>
      <input type="number" class="form-control" id="lect" placeholder="Enter Lecture Count " name="b4">
    </div>
    <div class="form-group">
      <label for="tut">Tutorials</label>
      <input type="number" class="form-control" id="tut" placeholder="Enter Tutorial Count" name="b5">
    </div>
    <div class="form-group">
      <label for="prt">Practicals</label>
      <input type="number" class="form-control" id="prt" placeholder="Enter Pratical Count" name="b6">
    </div>
    <button type="submit" class="btn btn-default">ADD</button>
  </form>
</div>
<?php if(isset($_REQUEST["submit"]))
          {
               $t1=$_REQUEST["b1"];
               $t2=$_REQUEST["b2"];
               $t3=$_REQUEST["b3"];
               $t4=$_REQUEST["b4"];
               $t5=$_REQUEST["b5"];
               $t6=$_REQUEST["b6"];
            $d=mysqli_query($con,"insert into subject values('','$t1','$t2','$t3','$t4','$t5','$t6')");
          
          }
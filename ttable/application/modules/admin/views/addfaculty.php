
   <div class="container">
  <h2>ADD FACULTY</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="fc">Faculty Code</label>
      <input type="text" class="form-control" id="fc" placeholder="Enter Faculty Code" name="f1">
    </div>
    <div class="form-group">
      <label for="fn">Faculty Name</label>
      <input type="text" class="form-control" id="fn" placeholder="Enter Faculty Name" name="f2">
    </div>
  <div class="form-group">
      <label for="fd">Department</label>
      <input type="number" class="form-control" id="fd" placeholder="Enter Department" name="f3">
  </div>
   <div class="form-group">
      <label for="ft">Work Type</label>
      <input type="text" class="form-control" id="ft" placeholder="Enter Work Type" name="f4">
    </div>
    <div class="form-group">
      <label for="f">Username</label>
      <input type="text" class="form-control" id="fu" placeholder="Enter Username" name="f5">
    </div>
  <div class="form-group">
      <label for="fp">Password</label>
      <input type="number" class="form-control" id="fp" placeholder="Enter Password" name="f6">
  </div>

    <button type="submit" class="btn btn-default">ADD</button>
  </form>
</div>

<?php if(isset($_REQUEST["submit"]))
          {
               $t1=$_REQUEST["f1"];
               $t2=$_REQUEST["f2"];
               $t3=$_REQUEST["f3"];
               $t4=$_REQUEST["f4"];
               $t5=$_REQUEST["f5"];
               $t6=$_REQUEST["f6"];
            $d=mysqli_query($con,"insert into facult values('','$t1','$t2','$t3','$t4','$t5','$t6')");
          
          }
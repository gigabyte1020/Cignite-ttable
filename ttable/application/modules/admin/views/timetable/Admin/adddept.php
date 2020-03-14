<div class="container">
  <h2>ADD DEPARTMENT</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="dc">Department Code</label>
      <input type="text" class="form-control" id="dc" placeholder="Enter Department Code" name="d1">
    </div>
    <div class="form-group">
      <label for="dn">Department Name</label>
      <input type="text" class="form-control" id="dn" placeholder="Enter Department Name" name="d2">
    </div>
  <div class="form-group">
      <label for="dd">No.of Division</label>
      <input type="number" class="form-control" id="dd" placeholder="Enter No.of Division" name="d3">
  </div>
    <button type="submit" class="btn btn-default">ADD</button>
  </form>
</div>
<?php if(isset($_REQUEST["submit"]))
          {
               $t1=$_REQUEST["d1"];
               $t2=$_REQUEST["d2"];
               $t3=$_REQUEST["d3"];
            $d=mysqli_query($con,"insert into dept values('','$t1','$t2','$t3')");
          
          }
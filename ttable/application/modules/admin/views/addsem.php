<div class="container">
  <h2>ADD SEMESTER</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="sc">Semester Code</label>
      <input type="text" class="form-control" id="sc" placeholder="Enter Semester Code" name="s1">
    </div>
    <div class="form-group">
      <label for="sn">Semester Name</label>
      <input type="text" class="form-control" id="sn" placeholder="Enter Semester Name" name="s2">
    </div>
    <div class="form-group">
      <label for="st">Semester Type</label>
      <input type="text" class="form-control" id="st" placeholder="Enter Semester Type" name="s3">
    </div>
    <button type="submit" class="btn btn-default">ADD</button>
  </form>
</div> 
  <?php if(isset($_REQUEST["submit"]))
          {
               $t1=$_REQUEST["s1"];
               $t2=$_REQUEST["s2"];
               $t3=$_REQUEST["s3"];
            $d=mysqli_query($con,"insert into sem values('','$t1','$t2','$t3')");
          
          }
<div class="container">
  <h2>ADD COURSES</h2>
  <form action="/action_page.php">
    <div class="form-group">
  <label for="sem">Select Semester  </label>
  <select class="form-control" id="sem">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
<div class="form-group">
      <label for="cc">Course Code</label>
      <input type="text" class="form-control" id="cc" placeholder="Enter Course Code" name="c1">
    </div>
    <div class="form-group">
      <label for="cn">Course Name</label>
      <input type="text" class="form-control" id="cn" placeholder="Enter Course Name" name="c2">
    </div>
    <div class="form-group">
      <label for="ct">Course Type</label>
      <input type="text" class="form-control" id="ct" placeholder="Enter Course Type" name="c3">
    </div>
    <button type="submit" class="btn btn-default">ADD</button>
  </form>
</div>
  <?php if(isset($_REQUEST["submit"]))
          {
               $t1=$_REQUEST["c1"];
               $t2=$_REQUEST["c2"];
               $t3=$_REQUEST["c3"];
            $d=mysqli_query($con,"insert into course values('','$t1','$t2','$t3')");
          
          }
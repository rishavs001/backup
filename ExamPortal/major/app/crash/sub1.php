 <select id="subjects" name="SUBJECTS">
    <option value="volvo">SUB1</option>
    <option value="saab">SUB2</option>
    
  </select>
  <input type="submit">
</form>






           
  <div class="dropdown">
    <center><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
     subjects
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" id="s1" href="#">sub1</a>
      <a class="dropdown-item" id="s2" href="#">sub2</a>
      <a class="dropdown-item" id="s3" href="#">sub3</a>
      <a class="dropdown-item" id="s4" href="#">sub4</a>
      <a class="dropdown-item" id="s5" href="#">sub5</a></center>
    </div>




<script type="text/javascript">
  $(document).ready(function){
$(#b1).click(function{}{
  $(#forms1).show();
  }
}

</script>



#forms1

{
  display: none;
}




<script>
  $(document).ready(function){
 if (isset($_POST['submit_btn'])){
{
$('#forms1').show();
}
}
else{
$(document).ready(function){
  $('#forms1').hide();
}
}
</script>
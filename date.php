<div class="student-reg-form">
  <div class="row">


  date picker 
   
<div class="form-group">
  <label class="col-md-4 control-label" for="date"> Birth Date *</label>
  <div class="col-md-4">
    <div class="input-group">
    <div class="input-group-addon">
      <span class="glyphicon glyphicon-calendar aria-hidden="true""></span>
    </div>
    <input class="form-control" id="date" name="student_dob" placeholder="MM/DD/YYYY" type="text"/>
    </div>
    <span class="help-block">Students birth date</span>  
  </div>
</div>

</div>
</div>

<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    
    $(document).ready(function(){
        var date_input=$('input[name="student_dob]'); //our date input has the name "date"
        var container=$('.student-reg-form form').length>0 ? $('.student-reg-form form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
        date_input.datepicker(options);
    })
</script>
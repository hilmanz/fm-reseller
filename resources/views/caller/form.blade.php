@extends('main')
@section('content')

<section class="body">
	<div class="container" data-bind="if:form_visible">
		<div class="row">
			<div class="col-md-12">
				<h3>Case Form</h3>
				<h4>Client Info</h4>
				<label>Full Name</label>
				<input type="text" name="full_name" value="" data-bind="textInput:full_name"/>
				<label>Telephone</label>
				<input type="text" name="telephone" value="" data-bind="textInput:telephone"/>
				<label>Extension Number</label>
				<input type="text" name="extension_number" value="" data-bind="textInput:extension_number"/>
				<label>Mobile</label>
				<input type="text" name="mobile_phone" value="" data-bind="textInput:mobile_phone"/>
				<label>Email</label>
				<input type="text" name="email" value="" data-bind="textInput:email"/>
				<label>Card Number</label>
				<input type="text" name="card_number" value="" data-bind="textInput:card_number"/>
				<label>Plan</label>
				<input type="text" name="plan" value="" data-bind="textInput:plan"/>
				<label>Job Function</label>
				<input type="text" name="job_function" value="" data-bind="textInput:job_function"/>
				<h3>Hospital Info</h3>
				<label>Hospital Name</label>
				<input type="text" name="hospital_name" value="" data-bind="textInput:hospital_name"/>
				<label>Phone</label>
				<input type="text" name="hospital_phone" value="" data-bind="textInput:hospital_phone"/>
				<label>Fax</label>
				<input type="text" name="hospital_fax" value="" data-bind="textInput:hospital_fax"/>
				<label>Email</label>
				<input type="text" name="hospital_email" value="" data-bind="textInput:hospital_email"/>
				<label>Address</label>
				<input type="text" name="hospital_address" value="" data-bind="textInput:hospital_address"/>
				<label>Officer</label>
				<input type="text" name="hospital_officer" value="" data-bind="textInput:hospital_officer"/>
				<h3>Medical Info</h3>
				<label>Doctor Name</label>
				<input type="text" name="doctor_name" value="" data-bind="textInput:doctor_name"/>
				<label>Doctor Speciality</label>
				<input type="text" name="doctor_speciality" value="" data-bind="textInput:doctor_speciality"/>
				<label>Diagnosis</label>
				<input type="text" name="diagnosis" value="" data-bind="textInput:diagnosis"/>
				<label>Medical Record</label>
				<input type="text" name="medical_record" value="" data-bind="textInput:medical_record"/>
				<label>Details</label>
				<textarea data-bind="textInput:extra_info" rows="10" cols="50"></textarea>
				<input type="hidden" name="flag" value="" data-bind="attr:{value:flag}"/>
				<input type="button" name="btnSave" class="btn btn-info" value="SUBMIT" data-bind="click:function(){submit();return false;}"/>
			</div>
		</div>
	</div>
	<div class="container" data-bind="if:is_confirm">
		<div class="row">
			<div class="col-md-12">
				<h3>CONFIRMATION</h3>
				<p>Please check the data below : </p>
				<h4>Client Info</h4>
				<label>Full Name</label>
				<div data-bind="text:full_name"></div>
				<label>Telephone</label>
				<div data-bind="text:telephone"></div>
				<label>Extension Number</label>
				<div data-bind="text:extension_number"></div>
				<label>Mobile</label>
				<div data-bind="text:mobile_phone"></div>
				<label>Email</label>
				<div data-bind="text:email"></div>
				<label>Card Number</label>
				<div data-bind="text:card_number"></div>
				<label>Plan</label>
				<div data-bind="text:plan"></div>
				<label>Job Function</label>
				<div data-bind="text:job_function"></div>
				<h3>Hospital Info</h3>
				<label>Hospital Name</label>
				<div data-bind="text:hospital_name"></div>
				<label>Phone</label>
				<div data-bind="text:hospital_phone"></div>
				<label>Fax</label>
				<div data-bind="text:hospital_fax"></div>
				<label>Email</label>
				<div data-bind="text:hospital_email"></div>
				<label>Address</label>
				<div data-bind="text:hospital_address"></div>
				<label>Officer</label>
				<div  data-bind="text:hospital_officer"></div>
				<h3>Medical Info</h3>
				<label>Doctor Name</label>
				<div data-bind="text:doctor_name"></div>
				<label>Doctor Speciality</label>
				<div data-bind="text:doctor_speciality"></div>
				<label>Diagnosis</label>
				<div data-bind="text:diagnosis"></div>
				<label>Medical Record</label>
				<div data-bind="text:medical_record"></div>
				<label>Details</label>
				<div data-bind="text:extra_info"></div>
				<input type="button" name="btnSave" class="btn btn-danger" value="BACK" data-bind="click:function(){back_to_form();return false;}"/>
				<input type="button" name="btnSave" class="btn btn-info" value="SAVE" data-bind="click:function(){save();return false;}"/>
			</div>
		</div>
	</div>
</section>

<div id="popup" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Incoming Call</h4>
      </div>
      <div class="modal-body">
        <h1 class="number" data-bind="text:incoming_number"></h1>
        <div class="message" data-bind="html:message">
        	<p></p>
        </div>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <span data-bind="if:data_found">
        	<button type="button" class="btn btn-primary" data-bind="click:function(){inputForm(true);return false;}">CONTINUE</button>
    	</span>
    	<span data-bind="if:data_no_found">
        	<button type="button" class="btn btn-primary" data-bind="click:function(){inputForm(false);return false;}">NEW DATA</button>
    	</span>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="msg" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">RESULT</h4>
      </div>
      <div class="modal-body">
       
        <div class="message" data-bind="html:message">
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
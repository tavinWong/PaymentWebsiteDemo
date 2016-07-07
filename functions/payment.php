<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Payment Process</h4>
      </div>

      <div class="modal-body" >
            <div class="container">
              
            <div class='row'>


                  <form onsubmit="submitFunc()"accept-charset="UTF-8" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
                    <div class='form-row'>
                      <div class='col-xs-12 form-group required'>
                        <label class='control-label'>Name on the Card</label>
                        <input class='form-control' size='4' type='text'>
                      </div>
                    </div>
                    <div class='form-row'>
                      <div class='col-xs-12 form-group card required'>  
                        <label class='control-label'>Card Number</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text'> 
                      </div>
                    </div>
                    <div class='form-row'>
                      <div class='col-xs-4 form-group cvc required'>
                        <label class='control-label'>CVC</label>
                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                      </div>
                      <div class='col-xs-4 form-group expiration required'>
                        <label class='control-label'>Expiration</label>
                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                      </div>
                      <div class='col-xs-4 form-group expiration required'>
                        <label class='control-label'></label>
                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                      </div>  
                    </div>
                    <div class='form-row'>
                      <div class='col-md-12'>
                        <div class='form-control total btn btn-info'>
                          Total:
                          <span id='amount'></span>
                        </div>
                      </div>
                    </div>
                    <div class='form-row'>
                      <div class='col-md-12 form-group'>
                        <button class='form-control btn btn-primary'type="submit"id='sendBtn'>Pay</button>
                      </div>
                    </div>
                    <div class='form-row'>
                      <div class='col-md-12 error form-group hide'>
                        <div class='alert-danger alert'>
                          Please correct the errors and try again.
                        </div>
                      </div>
                    </div>
                  </form><!-- end of form -->

            </div>
          </div>
      </div><!-- end of modal body -->

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    
  </div>
</div>
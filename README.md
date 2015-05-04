# CodeIgniter IBAN validation helper
A CodeIgniter helper for validation of IBAN numbers

// load helper, in controller or model
$this->load->helper('iban');

// check        
if (!IBAN($user->iban)) {
 $err['iban'] = lang('invalid_iban');
}

That's all. Have fun and don't forget to send me a beer at http://webmax.bg

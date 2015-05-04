# codeigniter-egn-helper
A CodeIgniter helper for validation of EGN (personal identification numbers for Bulgarian citizens)

// load helper, in controller or model
$this->load->helper('egn');

// check        
if (!Egn($user->egn)) {
	$err['pid'] = lang('invalid_pid');
}

That's all. Have fun and don't forget to send me a beer at http://webmax.bg

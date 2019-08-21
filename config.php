<?

$config = array(

	'host' => '',
	'port' => '465',
	'name' => 'Website',
	'username' => '',
	'password' => '',
	'addreply' => '',
	'type' => 'ssl',

	'subject' => 'Заявка с сайта',

	'receiver' => '',
	
	'test' => true

);



$forms = array(

	'mail' => array(
		'subject' => 'Сообщение',
		'text' => 'Оставлена новая заявка',
		'inputsExceptions' => array(), // inputs that will not be validated
		'inputs' => array(

            'email' => array(
                'title' => 'E-mail',
                'check' => function($value, $values) {
                    if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
						return false;
					}
                    return true;
                }
            )

		),
		'callback' => function($values) {
		}
	)
);

?>
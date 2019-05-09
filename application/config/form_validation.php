
<?php 
$config = array(
        'signup' => array(
                array(
                        'field' => 'firstname',
                        'label' => 'firstname',
                        'rules' => 'required'
                      ),
                array(
                        'field' => 'lastname',
                        'label' => 'lastname',
                        'rules' => 'required'
                     )
        ),
    
      'login' => array(
                array(
                        'field' => 'email',
                        'label' => 'email',
                        'rules' => 'required'
                      ),
                array(
                        'field' => 'password',
                        'label' => 'password',
                        'rules' => 'required'
                     )
        ),
    
       'about' => array(
                array(
                        'field' => 'title',
                        'label' => 'title',
                        'rules' => 'required'
                      ),
                array(
                        'field' => 'detail',
                        'label' => 'detail',
                        'rules' => 'required'
                     )
        ),
    
        'suggestion' => array(
                array(
                        'field' => 'meter',
                        'label' => 'meter',
                        'rules' => 'required'
                      ),
                 array(
                        'field' => 'email',
                        'label' => 'email',
                        'rules' => 'required'
                      ),
                array(
                        'field' => 'opinion',
                        'label' => 'opinion',
                        'rules' => 'required'
                     )
        ),
    
     'service' => array(
                array(
                        'field' => 'name',
                        'label' => 'name',
                        'rules' => 'required'
                      ),
                array(
                        'field' => 'detail',
                        'label' => 'detail',
                        'rules' => 'required'
                     ),
                array(
                        'field' => 'price',
                        'label' => 'price',
                        'rules' => 'required'
                     )
        ),
    
         'appoint' => array(
                array(
                        'field' => 'address',
                        'label' => 'address',
                        'rules' => 'required'
                      ),
                array(
                        'field' => 'car',
                        'label' => 'number',
                        'rules' => 'required'
                     ),
                array(
                        'field' => 'date',
                        'label' => 'date',
                        'rules' => 'required'
                     ),
              array(
                        'field' => 'time',
                        'label' => 'time',
                        'rules' => 'required'
                     )
        )
);
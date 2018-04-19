<?php
/**
 * Created by PhpStorm.
 * User: qwerty123
 * Date: 16.04.18
 * Time: 15:38
 */
namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form{
    public function __construct($name = null){

        parent::__construct('album');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'title',
            'type' => 'text',
            'options' => [
                'label' => 'Title',
            ],
        ]);
        $this->add([
            'name' => 'artist',
            'type' => 'text',
            'options' => [
                'label' => 'Artist',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton',
            ],
        ]);

    }
}
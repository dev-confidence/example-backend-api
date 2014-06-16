<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

/**
 * Class IndexController
 * @package Application\Controller
 */
class UserController extends AbstractRestfulController
{

    /**
     * @return JsonModel
     */
    public function getList()
    {
        $data = array(
            'meta' => array(
                'version' => file('public/version')[0]
            ),
            'data' => array(
                array(
                    'title'   => 'Mr',
                    'name'    => 'Mickey Mouse',
                    'address' => 'Disney Land'
                ),
                array(
                    'title'   => 'Mr',
                    'name'    => 'Minnie Mouse',
                    'address' => 'Disney Land'
                )
            )
        );

        return new JsonModel($data);
    }
}

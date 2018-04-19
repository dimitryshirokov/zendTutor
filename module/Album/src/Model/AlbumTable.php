<?php
/**
 * Created by PhpStorm.
 * User: qwerty123
 * Date: 16.04.18
 * Time: 13:18
 */
namespace Album\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class AlbumTable{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll(){
        return $this->tableGateway->select();
    }

    public function getAlbum($id){
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (!$row){
            throw new RuntimeException(sprintf(
                'Could not find row with id %d',
                $id
            ));
        }

        return $row;
    }

    public function saveAlbum(Album $album){
        $data = [
            'artist' => $album->artist,
            'title' => $album->title,
        ];

        $id = (int) $album->id;

        if ($id == 0){
            $this->tableGateway->insert($data);
            return;
        }
        else {
            $this->tableGateway->update($data, ['id' => $album->id]);
        }

        if (! $this->getAlbum($id)){
            throw new RuntimeException(sprintf(
                'Cannot update album with id %d; does not exist',
                $id
            ));
        }
    }

    public function deleteAlbum($id){
        $this->tableGateway->delete(['id' => (int) $id]);
    }
}
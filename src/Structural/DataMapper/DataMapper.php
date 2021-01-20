<?php

namespace App\Structural\DataMapper;
/**
 * Class DataMapper
 * @package App\Structural\DataMapper;
 */
class DataMapper
{
    /**
     * @var StorageManger
     */
    private StorageManger $manger;

    /**
     * DataMapper constructor.
     * @param StorageManger $manger
     */
    public function __construct(StorageManger $manger)
    {
        $this->manger = $manger;
    }

    /**
     * @param string $id
     * @return User|mixed|null
     */
    public function findById(string $id)
    {
        return $this->manger->find($id,'Id');
    }

    /**
     * @param string $username
     * @return User|mixed|null
     */
    public function findByUsername(string $username)
    {
        return $this->getManger()->find($username,'Username');
    }

    public function saveUser(User  $user)
    {
        return $this->getManger()->save($user);
    }
    /**
     * @return StorageManger
     */
    public function getManger(): StorageManger
    {
        return $this->manger;
    }

    /**
     * @param StorageManger $manger
     * @return DataMapper
     */
    public function setManger(StorageManger $manger): DataMapper
    {
        $this->manger = $manger;
        return $this;
    }
}
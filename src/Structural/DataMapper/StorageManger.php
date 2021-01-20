<?php

namespace App\Structural\DataMapper;
/**
 * Class StorageManger
 * @package App\Structural\DataMapper;
 */
class StorageManger
{
    /**
     * @var User[]
     */
    private array $data = [];

    /**
     * StorageManger constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param string $value
     * @param string $column
     * @return User|mixed|null
     */
    public function find(string $value,string $column="Id")
    {

        $data = array_filter($this->data,function (User $user) use ($column,$value) {
            return ($user->{"get$column"}() ?? null) == $value;
        });

        return $data[array_keys($data)[0] ?? 0] ?? null;
    }

    /**
     * @param array|User $user
     * @return User
     */
    public function save($user)
    {
        if ($user instanceof User) {
            return $this->data[$user->getId()] = $user;
        }
        return $this->data[$user["id"]] = new User($user["id"],$user["username"],$user["password"]);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return StorageManger
     */
    public function setData(array $data): StorageManger
    {
        $this->data = $data;
        return $this;
    }
}
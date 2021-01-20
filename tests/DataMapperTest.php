<?php

namespace Tests;

use App\Structural\DataMapper\DataMapper;
use App\Structural\DataMapper\StorageManger;
use App\Structural\DataMapper\User;
use PHPUnit\Framework\TestCase;

/**
 * Class DataMapperTest
 * @package Tests
 */
class DataMapperTest extends TestCase
{
    private StorageManger $manger;
    private DataMapper $dataMapper;
    private array $data;

    protected function setUp(): void
    {
        $this->data[1]=new User(1,"habib","habib");
        $this->manger = new StorageManger($this->data);
        $this->dataMapper =new DataMapper($this->manger);
    }

    /* @test */
    public function testCanGetUserById()
    {
        $user = $this->dataMapper->findById(1);
        $this->assertEquals($this->data[1],$user);
    }
    
    /* @test */
    public function testCanSaveObject()
    {
        $user = new User(2,"mohamed","mohamed");
        $created = $this->dataMapper->saveUser($user);

        $this->assertEquals($user,$created);
    }
}

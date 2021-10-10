<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $customer_types = [
            '0' => 'Company',
            '1' => 'Individual'
        ];
        
        for($i=1;$i<=10;$i++) {
            $customer = New Customer();
            $customer->setName('CustomerName'.$i);
            $customer->setSurname('CustomerSurname'.$i);
            $customer->setEmail('Customer'.$i.'@email.com');
            $customer->setPhone('60965198'.$i);
            $customer->setCustomerType($customer_types[rand(0,1)]);
            $manager->persist($customer);
        }

        $manager->flush();
    }
}

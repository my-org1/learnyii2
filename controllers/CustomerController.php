<?php

namespace app\controllers;
use app\models\customer\Customer;
use app\models\customer\CustomerRecord;
use app\models\customer\Phone;
use app\models\customer\PhoneRecord;
use yii\web\Controller;

class CustomerController extends Controller
{
    public function actionIndex()
    {
        $records = $this->getRecordsAccordingToQuery() ;
        $this->render('index', compact($records)) ;
    }

    private function store(Customer $customer)
    {
        $customer_record = new CustomerRecord() ;
        $customer_record->name = $customer->name ;
        $customer_record->birth_date = $customer->birth_date->format('Y-m-d') ;
        $customer_record->notes = $customer->notes ;

        $customer_record->save() ;

        foreach($customer->phones as $phone)
        {
            $phone_record = new PhoneRecord() ;
            $phone_record->number = $phone->number ;
            $phone_record->customer_id = $customer_record->id ;
            $phone_record->save() ;
            // 49
        }
    }

    private function makeCustomer(CustomerRecord $customer_record, PhoneRecord $phone_record)
    {
        $name = $customer_record->name ;
        $birth_date = new \DateTime($customer_record->birth_date) ;

        $customer = new Customer($name, $birth_date) ;
        $customer->notes = $customer_record->notes ;
        $customer_phones[] = new Phone($phone_record->number) ;

        return $customer ;
    }

    public function actionAdd()
    {
        $customer = new CustomerRecord() ;
        $phone = new PhoneRecord() ;

        return $this->render('add', compact('customer' , 'phone')) ;
    }

}
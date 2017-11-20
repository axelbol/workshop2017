<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ValidateProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'title' => 'required',
                'subtitle'=> '',
                'category'=> '',
                'isbn'=> '',
                'condition'=> '',
                'conditiondescription' => '',
                'productdescription'=> '',
                'format',
                'duration',
                'ad',
                'buynowprice',
                'allowoffer',
                'atleastoffer',
                'atleastofferis',
                'lowoffer',
                'lowofferis',
                'startprice',
                'buyprice',
                'reserveprice',
                'cuantity',
                'lot',
                'cuantitylot',
                'private',
                'donation',
                'paypal',
                'emailpayment',
                'pickpayment',
                'paymentdescription',
                'return' => 'required',
                'devolutiontime',
                'refund',
                'returnshipment',
                'returndetails',
                'restitutionfee',
                'domesticshipment',
                'shipmentservice',
                'shipmentcost',
                'freeshipment',
                'packagetype',
                'x',
                'y',
                'z',
                'kilograms',
                'grams',
                'localization'
        ];
    }
}

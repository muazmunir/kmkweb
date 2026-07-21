<?php

namespace App\Exports;

use App\Models\Payemnts;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PaymentsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
     public function collection()
    {
        return Payemnts::Join('products','payemnts.product_id' , '=', 'products.id')
                    ->Join('sallers','payemnts.saller' , '=', 'sallers.id')
                    ->Join('users','payemnts.user_id' , '=', 'users.id')
                           ->select(array('payemnts.id','products.name as productname','sallers.name AS sallername','payemnts.paymethod','payemnts.value','payemnts.session','payemnts.result','payemnts.created_at','users.name as username','users.phone as phone'))
  ->get();
    }
    
    
     public function headings(): array
    {
        return [
            'المعرف',
            'المشروع',
            'الجهة',
            'الوسيلة',
            'القيمة',
            'مرجع',
            'النتيجة',
            'تاريخ',
            'المستخدم',
     'االهاتف',
        ];
    }
    
}

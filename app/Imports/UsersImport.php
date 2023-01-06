<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

HeadingRowFormatter::default('none');
class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // return new Item([
        //     'code' => $row[0],
        //     'recipient_name_1' => $row[1],
        //     'recipient_name_2' => $row[2],
        //     'yuu' => $row[3],
        //     'address_1' => $row[4],
        //     'address_2' => $row[5],
        //     'address_3' => $row[6],
        //     'phone' => $row[7],
        //     'shipping_category' => $row[8]
        // ]);

        return new Item([
            'code' => $row["Cd"],
            'recipient_name_1' => $row["Name1"],
            'recipient_name_2' => $row["Name2"],
            'yuu' => $row["Yuu"],
            'address_1' => $row["Add1"],
            'address_2' => $row["Add2"],
            'address_3' => $row["Add3"],
            'phone' => $row["Tel"],
            'shipping_category' => $row["HKbn"]
        ]);
    }
}

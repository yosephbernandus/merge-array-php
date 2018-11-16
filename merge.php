//array_1
Array
(
    [0] => Array
        (
            [waktu] => Sep 2016
        )

    [1] => Array
        (
            [waktu] => Oct 2016
        )

    [2] => Array
        (
            [waktu] => Nov 2016
        )

    [3] => Array
        (
            [waktu] => Dec 2016
        )
)


//array_2
Array
(
    [0] => Array
        (
            [waktu] => Sep 2016
            [jumlah] => 6
        )

    [1] => Array
        (
            [waktu] => Oct 2016
            [jumlah] => 6
        )

    [2] => Array
        (
            [waktu] => Nov 2016
            [jumlah] => 6
        )

    [3] => Array
        (
            [waktu] => Jan 2017
            [jumlah] => 11
        )

)

//result_array
Array
(
    [0] => Array
        (
            [waktu] => Sep 2016
            [jumlah] => 6
        )

    [1] => Array
        (
            [waktu] => Oct 2016
            [jumlah] => 6
        )

    [2] => Array
        (
            [waktu] => Nov 2016
            [jumlah] => 6
        )

    [3] => Array
        (
            [waktu] => Dec 2016
            [jumlah] => 
        )

    [4] => Array
        (
            [waktu] => Jan 2017
            [jumlah] => 11
        )

)

$array_1 = array_combine(array_column($array_1, 'waktu'), $array_1);
    $result_array = array_map(function ($item2) use ($array_1){
        $item1 = isset($array_1[$item2['waktu']]) ? $array_1[$item2['waktu']] : null;

        if ($item2) {
            $item2['waktu'] = $item2['waktu'];

            $item2['jumlah'] = $item1['jumlah'];
            if (empty($item2['jumlah'])) {
                $item2['jumlah'] = 0;
            }
        }
        return $item2;
    }, $array_2);

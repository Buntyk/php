$count = 0;

foreach ($arr as $arritem) {
    // first iteration: $arritem is "apple"
    // second iteration: $arritem is ["banana", ...]
    // third iteration: $arritem is ["banana", ...]
    if ($arritem === "apple") {
        $count++;
    }
}

echo $count;
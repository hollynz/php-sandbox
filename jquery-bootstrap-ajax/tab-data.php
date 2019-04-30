<?php
class DataStore {
    private $contentArr = [
        "",
        "<h3>Profile</h3>",
        "<h3>Contact</h3>"
    ];
    function getData() {
        $id = filter_input(INPUT_POST, 'id');
        $data = array();
        $data['content'] = $this->contentArr[$id];

        return json_encode($data);
    }
}

$dataStore = new DataStore();
echo $dataStore->getData();
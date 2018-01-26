<?php
$data['stores'][] = [
    'name' => $this->config->get('config_name'),
    'href' => HTTP_CATALOG
];

$this->load->model('setting/store');

$results = $this->model_setting_store->getStores();

foreach ($results as $result) {
    $data['stores'][] = [
        'name' => $result['name'],
        'href' => $result['url']
    ];
}

<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

return [
    [
        'name'            => 'sandbox_client_id',
        'label_key'       => 'setting.sandbox_client_id',
        'type'            => 'string',
        'required'        => true,
        'rules'           => 'required|max:255',
        'description_key' => 'setting.sandbox_client_id_desc',
    ],
    [
        'name'            => 'sandbox_secret',
        'label_key'       => 'setting.sandbox_secret',
        'type'            => 'string',
        'required'        => true,
        'rules'           => 'required|max:255',
        'description_key' => 'setting.sandbox_secret_desc',
    ],
    [
        'name'            => 'live_client_id',
        'label_key'       => 'setting.live_client_id',
        'type'            => 'string',
        'required'        => true,
        'rules'           => 'required|max:255',
        'description_key' => 'setting.live_client_id_desc',
    ],
    [
        'name'            => 'live_secret',
        'label_key'       => 'setting.live_secret',
        'type'            => 'string',
        'required'        => true,
        'rules'           => 'required|max:255',
        'description_key' => 'setting.live_secret_desc',
    ],
    [
        'name'            => 'sandbox_mode',
        'label_key'       => 'setting.sandbox_mode',
        'type'            => 'bool',
        'required'        => true,
        'default'         => 1,
        'description_key' => 'setting.sandbox_mode_desc',
    ],
];

<?php
/**
 * Created by PhpStorm.
 * User: zeus
 * Date: 26/09/2018
 * Time: 15:04
 */

function inspect_object($object = array())
{
    echo '<pre>';
    print_r($object);
    echo '</pre>';
}

function dataTable_post_params()
{
    $CI =& get_instance();
    $params['keyword'] = $CI->input->post('search')['value'];
    $params['start'] = $CI->input->post('start');
    $params['limit'] = $CI->input->post('length');
    $params['order'] = $CI->input->post('order');
    return $params;
}

function dataTable_order_string($columns, $order, $default_column = null)
{
    //Order Settings
    $order_column = $order[0]['column'];
    $order_dir = $order[0]['dir'];
    $i = 0;
    foreach ($columns as $column) {
        if ($order_column == $i) {
            $order_column = $column;
            break;
        }
        $i++;
    }

    if (!in_array($order_column, $columns)) {
        $order_column = !is_null($default_column) ? $default_column : $columns[0];
    }
    return $order_column . ' ' . $order_dir;
}
function add_leading_zeros($number, $length = 4)
{
    $difference = $length - strlen($number);
    $ret_val = '';
    for ($i = 0; $i < $difference; $i++) {
        $ret_val .= '0';
    }
    return $ret_val .= $number;
}

function stringfy_dropdown_options($dropdown_array = [])
{
    $option_string = '';

    foreach ($dropdown_array as $key => $value) {
        if (is_array($value)) {
            $option_string .= '<optgroup label="' . $key . '">';
            foreach ($dropdown_array[$key] as $value => $option) {
                $option_string .= '<option value="' . $value . '">' . $option . '</option>';
            }
            $option_string .= '</optgroup>';
        } else {
            $option_string .= '<option value="' . $key . '">' . $value . '</option>';
        }
    }

    return $option_string;

}
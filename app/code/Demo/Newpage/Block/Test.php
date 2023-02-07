<?php

namespace Demo\Newpage\Block;

class Test extends \Magento\Framework\View\Element\AbstractBlock
{
    /**
     * @param \Magento\Framework\View\Element\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Context $context,
        array $filters = [],
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function _toHtml()
    {
        $_html = '';
        $output_string = [
            'Employee name is $name $last_name, he is a $job at $company, phone number is $phone</br>',
            'Employee name is $name $last_name, he is a $job at $company. </br>',
            'Employee name is $name $last_name, he is a $job at $company. </br>',
        ];

        // $output_string1 = 'Employee name is $name $last_name, he is a $job at $company.';

        $values = [
            ['$name' => 'Jack1', '$last_name' => 'Enfield', '$job' => 'Software Engineer', '$company' => 'Microsoft', '$address' => 'Cantho'],
            ['$name' => 'Jack2', '$last_name' => 'Enfield', '$job' => 'Software Engineer', '$company' => 'Microsoft', '$address' => 'Cantho'],
            ['$name' => 'Jack3', '$last_name' => 'Enfield', '$job' => 'Software Engineer', '$company' => 'Microsoft', '$address' => 'Cantho'],
        ];

        // foreach ($values as $val) {
        //     $_html .= strtr($output_string1, $val);
        //     echo "<br>";
        // }

        for ($i=0; $i < count($output_string); $i++) { 
            $_html .= strtr($output_string[$i], $values[$i]);
        }

        return $_html;
    }
}

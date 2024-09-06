<?php

function handleProductDetailsList($product)
{
    $translatedList =
        [
            [
                "name" => "Banheiros",
                "value" => $product->bathroom,
                "iconName" => "bathroom"
            ],
            [
                "name" => "Quartos",
                "value" => $product->bedroom,
                "iconName" => "bedroom"
            ],
            [
                "name" => "Suites",
                "value" => $product->suite,
                "iconName" => "suite"
            ],
            [
                "name" => "Vagas",
                "value" => $product->parking_space,
                "iconName" => "parking_space"
            ],
            [
                "name" => "Área",
                "value" =>  $product->area_size,
                "iconName" => "area_size"
            ],
            [
                "name" => "Condomínio",
                "value" => $product->condominium,
                "iconName" => "condominium"
            ],
            [
                "name" => "iptu",
                "value" => $product->iptu,
                "iconName" => "iptu"
            ],
        ];

    return $translatedList;
}
